<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Mail\StudentNotes;
use Illuminate\Support\Facades\Mail;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

    public function index()
    {
        $data['student_list']  =  DB::table('users')->select('id', 'name')->where('user_type', 1)->where('agent_id', Auth::user()->id)->orderBy('name', 'ASC')->get();
        return view('admin.dashboard');
    }

    public function admin_application_list(Request $request)
    {
      //return $request->input();
      $payment_start_date  = date("Y-m-d", strtotime($request->input('payment_start_date'))).' 00:00:01';
      $payment_end_date    = date("Y-m-d", strtotime($request->input('payment_end_date'))).' 23:59:00';
      
      $appid               = $request->input('appid');
      $student_id          = $request->input('student_id');
      $fname               = $request->input('fname');
      $lname               = $request->input('lname');
      $program_name        = $request->input('program_name');
      $school_name         = $request->input('school_name');
      $payment_status      = $request->input('payment_status');
      $application_status  = $request->input('application_status');
      
      $payment_start_date  = date("Y-m-d", strtotime($request->input('payment_start_date'))).' 00:00:01';
      $payment_end_date    = date("Y-m-d", strtotime($request->input('payment_end_date'))).' 23:59:00';

      $application_start_date = $request->input('application_start_date');
      $application_end_date   = $request->input('application_end_date');
      $requirement_partner    = $request->input('requirement_partner');
      $requirements           = $request->input('requirements');
      $current_status         = $request->input('current_status');
      $current_date = date('Y-m-d H:i:s');

      $qty = $request->input('qty');
      if ($qty != '') {
          $limit = $qty;
      } else {
          $limit = 20;
      }
      $agent = Auth::user()->id;

      $data['total_apply_count']    =  DB::table('student_applications')->select('student_id', DB::raw("count(student_id) as count"))
          ->groupBy('student_id')
          ->get();

         
         
            $data1 =  DB::table('users as a')->select('a.email','b.user_id', 'b.first_name', 'b.last_name','c2.email as partner_email','cs.status_title', 'd.program_college_name', 'd.programs_name', 'd.earliest_intake_date','d.id as pid', 'c.student_id', 'c.app_id', 'c.status', 'c.agent_id', 'c.created_at', 'c.id','c.payment_date', 'e.college_logo','e.id as cid', 'f.status_name', 'f.bgcolor')
          //->whereIn('a.agent_id', $ids)
          ->whereIn('a.user_type', ['5','6','8','11','12']);
          
          if(($request->input('payment_start_date') !='')&&( $request->input('payment_end_date') !=''))
          {
            $data1 = $data1->whereBetween('c.payment_date', ["$payment_start_date", "$payment_end_date"]);
          }
 
          if(($request->input('payment_start_date') !='')&&( $request->input('payment_end_date') ==''))
          {
            $data1 = $data1->whereBetween('c.payment_date', ["$payment_start_date", "$current_date"]);
          }
          if($student_id !='')
          {
            $data1 = $data1->where('a.id', $student_id);
          }
          if($appid !='')
          {
            $data1 = $data1->where('c.app_id', $appid);
          }
          if($fname !='')
          {
            $data1 = $data1->where('b.first_name', $fname);
          }
          if($lname !='')
          {
            $data1 = $data1->where('b.last_name', $lname);
          }
          if($program_name !='')
          {
            $data1 = $data1->where('d.programs_name', $program_name);
          }
          if($school_name !='')
          {
            $data1 = $data1->where('e.college_name', $school_name);
          }
          if($payment_status !=0)
          {
            $data1 = $data1->where('c.payment_status', $payment_status);
          }
          if($application_status !=0)
          {
            $data1 = $data1->where('c.application_status', $application_status);
          }
          
          $data1= $data1->join('student_profile as b', 'b.user_id', '=', 'a.id');
          $data1= $data1->join('student_applications as c', 'c.student_id', '=', 'a.id');
          $data1= $data1->join('college_programs as d', 'd.id', '=', 'c.program_id');
          $data1= $data1->join('colleges  as e', 'e.id', '=', 'd.college_id');
          $data1= $data1->join('payment_status as f', 'f.id', '=', 'c.payment_status');
          $data1= $data1->join('users as c2', 'c2.id', '=', 'c.agent_id');
          $data1= $data1->join('current_status as cs', 'cs.id', '=', 'c.application_status');
          $data1= $data1->orderBy('c.id', 'DESC');
          $data1= $data1->paginate($limit); 
        
      $data['application_list']  = $data1;
        return view('admin.admin-application',$data);
    }

    public function admin_application_review(Request $request,$app_id)
    {
      $data['student_details']  =  DB::table('users as a')->select('a.id','app_status.status_title','application_status','ps.status_name as payment_status','c.program_id as progoramid','c.payment_status as paymentstatus','certificate_img','passport_img','d.*', 'email','g.country as country_of_citizenship','h.country as student_college_country','edu.title as highest_level_of_education','app_id','d.id as progoramid','i.country as college_country','e.college_address','f.title as level_of_education','first_name','middle_name','last_name','date_of_birth','first_language','passport_number','marital_status','gender','address','n.city as city_town','kk.country as country','mm.state as province_state','postal_code','phone_number','k.country as country_of_education','o.grad_name as grading_scheme','grade_average','graduated_from_most_recent_school','j.country as country_of_institution','name_of_institution','primary_language_of_instruction','attended_institution_from','attended_institution_to','degree_name','graduated_institution','graduation_date','physical_certificate_for_this_degree','school_address','l.city as school_city_town','m.state as school_province','school_postal_code','b.english_exam_type','date_of_exam','d.doc_requirement','college_logo','b.user_id as student_id')
      ->leftjoin('student_profile as b', 'b.user_id', '=', 'a.id')
      ->leftjoin('student_applications as c', 'c.student_id', '=', 'a.id')
      ->leftjoin('college_programs  as d', 'd.id', '=', 'c.program_id')
      ->leftjoin('colleges  as e', 'e.id', '=', 'd.college_id')
      ->leftjoin('education  as f', 'f.id', '=', 'b.level_of_education')
      ->join('country  as g', 'g.id', '=', 'b.country_of_citizenship')
      ->join('country  as h', 'h.id', '=', 'b.country')
      ->join('country  as i', 'i.id', '=', 'e.college_country')
      ->join('country  as j', 'j.id', '=', 'b.country_of_institution')
      ->join('country  as k', 'k.id', '=', 'b.country_of_education')
      ->join('country  as kk', 'kk.id', '=', 'b.country')
      ->join('city  as l', 'l.id', '=', 'b.school_city_town')
      ->join('city  as n', 'n.id', '=', 'b.city_town')
      ->join('state  as m', 'm.id', '=', 'b.school_province')
      ->join('state  as mm', 'mm.id', '=', 'b.province_state')
      ->join('grading_scheme   as o', 'o.id', '=', 'b.grading_scheme')
      ->join('education  as edu', 'edu.id', '=', 'b.highest_level_of_education')
      ->join('payment_status  as ps', 'ps.id', '=', 'c.payment_status')
      ->join('current_status as app_status', 'app_status.id', '=', 'c.application_status')
      ->where('c.app_id', $app_id)->first();
     // $doc_req = $data['student_details']->doc_requirement;
      $doc_req = json_decode($data['student_details']->doc_requirement, true);
     
      if(!empty($doc_req)){
      $total_doc = count($doc_req);
      $data['doc_requirment']  =  DB::table('documents_requirment')->select('id','document_name','description','required_field','upload_status')->whereIn('id',$doc_req)->where('status',1)->get();
      }
      $data['upload_doc_details']  =  DB::table('student_uploaded_docs')->select('doc_id','image_name','is_verified','backend_comment')->where('app_id',$app_id)->get();
      $data['student_records']     =  DB::table('student_records')->select('title','text','created_at')->where('app_id',$app_id)->orderBy('id','desc')->get();
      $upload_doc_count            =  DB::table('student_uploaded_docs')->select('doc_id')->where('app_id',$app_id)->count();
      $data['missing_doc']         = $total_doc - $upload_doc_count;

      $data['upload_doc_review_count']            =  DB::table('student_uploaded_docs')->select('id')->where('app_id',$app_id)->where('is_verified',0)->count();
      $data['upload_doc_verifiyed_count']         =  DB::table('student_uploaded_docs')->select('id')->where('app_id',$app_id)->where('is_verified',1)->count();
      $data['upload_doc_canciled_count']          =  DB::table('student_uploaded_docs')->select('id')->where('app_id',$app_id)->where('is_verified',2)->count();
      //return $data['upload_doc_details'];  
      return view('admin.admin_application_review',$data);
    }


  function update_document_status(Request $request){
    $docId = $request->input('docId');
    $appid = $request->input('appid');
    $optVal= $request->input('optVal');

    $data = Carbon::now()->toDateTimeString();
    $res = DB::table('student_uploaded_docs') 
    ->where('doc_id',$docId)
    ->where('app_id',$appid)
    ->update([ 'is_verified' => $optVal, 'verified_by'=> Auth::user()->id,'verified_at'=>$data]);
     if(($res >0) && ($optVal ==1)){
      //log record
      DB::table('student_records')->insert([
        'title'          => 'Document Approved',
        'text'           => "Document Approved by Admin ($docId)",
        'agent_id'       =>  Auth::user()->id,
        'student_id'     =>  0,
        'app_id'         => $appid
     ]);
     return "aproved";die;
     }else if(($res >0) && ($optVal ==2)){
      //log record
      DB::table('student_records')->insert([
        'title'          => 'Document Disapproved',
        'text'           => "Document Disapproved by Admin ($docId)",
        'agent_id'       =>  Auth::user()->id,
        'student_id'     =>  0,
        'app_id'         => $appid
      ]);
      return "disaproved";die; 
     }else{
      return "failed";die;
     }

    }

    function update_document_status_discription(Request $request){
      $docId = $request->input('id');
      $appid = $request->input('appid');
      $disc  = $request->input('disc');
  
      $data = Carbon::now()->toDateTimeString();
      $res = DB::table('student_uploaded_docs') 
      ->where('doc_id',$docId)
      ->where('app_id',$appid)
      ->update([ 'is_verified' => 2, 'backend_comment'=>"$disc",'verified_by'=> Auth::user()->id,'verified_at'=>$data]);
       if(($res >0) && ($disc !='')){
        //log record
        DB::table('student_records')->insert([
          'title'          => 'Document Dis Approved',
          'text'           => "Document DisApproved Comment registered by Admin ($docId)",
          'agent_id'       =>  Auth::user()->id,
          'student_id'     =>  0,
          'app_id'         => $appid
       ]);
       return "update";die;
       }else{
        return "failed";die;
       }
  
      }

    function change_document_status(Request $request)
    {
      //return $request->input(); 
      $status = $request->input('status');
      $appid = $request->input('appid');
  //echo $appid;die; 
      $data = Carbon::now()->toDateTimeString();
      $res = DB::table('student_applications') 
      ->where('app_id',$appid)
      ->update([ 'application_status' => $status, 'agent_id'=> Auth::user()->id,'updated_at'=>$data]);
       if(($res >0) && ($status ==11))
       {
          //log record
          DB::table('student_records')->insert([
            'title'          => 'Application Cancelled',
            'text'           => " Application Cancelled by Admin",
            'agent_id'       =>  Auth::user()->id,
            'student_id'     =>  0,
            'app_id'         => $appid
          ]);
        return "disaproved";die;
       }else if(($res >0) && ($status ==12))
       {
          //log record
          DB::table('student_records')->insert([
            'title'          => 'Application Approved',
            'text'           => "Application Approved by Admin",
            'agent_id'       =>  Auth::user()->id,
            'student_id'     =>  0,
            'app_id'         => $appid
          ]);
         return "aproved";die; 
       }else
       {
        return "failed";die;
       }
  
      } 
    }
    
   

