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
use Session;

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

  function addNotice(Request $request)
  {
    $validated = $request->validate([
      'notice_title' => 'required',
      'notice_des' => 'required',
    ]);  
    $value = array(
      'user_id' => Auth::user()->id,
      'notice_title' => $request->input('notice_title'),
      'notice_des' => $request->input('notice_des')
    );
    $res = DB::table('notices')->insert($value);
    if ($res) {
      Session::flash('notice_submited', 'Notice has been submitted !'); 

      } 
      return redirect('notice-board'); 
    }

 
    // public function admin_list_of_college(){
    // return view('admin.admin-list-of-college');
    // }
 
 
  function UpdateNotice(Request $request){
    $validated = $request->validate([
      'notice_title' => 'required',
      'notice_des' => 'required',
    ]);  

    $id = $request->input('notice_id');
    $notice_title = $request->input('notice_title');
    $notice_des = $request->input('notice_des');
    $date = Carbon::now()->toDateTimeString();

    $result = DB::table('notices')->where('id', $id)->update(['notice_title' => $notice_title, 'notice_des' => $notice_des, 'updated_at' => $date]);
    if($result){
      Session::flash('notice_updated', 'Notice has been Updated !'); 
      return redirect('notice-board'); 
    } 
   }


   function noticeBoard(){
    $data['notices'] = DB::table('notices')->select('id', 'notice_title','notice_des', 'created_at')->orderBy('created_at', 'desc')->paginate(10);
    
    if (isset($_GET['delete_notice_id'])) { 
      $notice_id = $_GET['delete_notice_id'];
      DB::delete('delete from notices where id ='. $notice_id);
      Session::flash('notice_deleted', 'Notice has been Deleted !'); 
       return redirect('notice-board');  
    }

    if(isset($_GET['edit_notice_id'])){
      $editId = $_GET['edit_notice_id'];
      $data['edit_notice_data'] = DB::table('notices')->select('notice_title', 'notice_des')->where('id', $editId)->get();
    }
    return view('admin.admin-notice-board', $data);
   }

   public function admin_list_of_college(){
    $data['college_list'] = DB::table('colleges as a')->select('a.*', 'b.country')
    ->join('country as b', 'b.id', '=', 'a.college_country')
    ->paginate(10);
    return view('admin.admin-list-of-college', $data);
   }

   public function admin_view_college($id){
    $data['college'] = DB::table('colleges as a')->select('a.*', 'b.country')
    ->join('country as b', 'b.id', '=', 'a.college_country')->where('a.id', $id)->first();
    return view('admin.admin-view-college', $data);
   }

   public function admin_edit_college($id){
      $data['college'] = DB::table('colleges as a')->select('a.*', 'b.id as visa_id', 'b.visa_title', 'c.state_id', 'c.city')
      ->join('permit_visa as b', 'b.id', '=', 'a.id')
      ->join('city as c', 'c.id', '=', 'a.id')->where('a.id', $id)->first();
      $data['college_country'] = DB::table('country')->get();
    
      return view('admin.admin-edit-college', $data); 
   }

   function getVisa($vId){
    $data['permit_visa'] = DB::table('permit_visa')
    ->where('id', $vId)->get(); 
    foreach($data['permit_visa'] as $i)
    { 
        return $i;
    } 
 
   }
   public function getCountry($cId){
      $data['countries'] = DB::table('country')->where('id', $cId)->get();
      foreach($data['countries'] as $country){
          return $country;
      }
   }

   public function getEduCountry($ecId){
    $data['countries'] = DB::table('country')->where('id', $ecId)->get();
    foreach($data['countries'] as $country){
        return $country;
    }
 }

public function getEduLevel($elId){
  $data['eduLevel'] = DB::table('education')->where('id', $elId)->get();
    foreach($data['eduLevel'] as $level){
        return $level;
    }
}

public function getGradingScheme($gsId){
  $data['grading_scheme'] = DB::table('grading_scheme')->where('id', $gsId)->get();
    foreach($data['grading_scheme'] as $gScheme){
        return $gScheme;
    }
}

public function geteExamType($enId){
  $data['english_exam_type'] = DB::table('english_exam_type')->where('id', $enId)->get();
    foreach($data['english_exam_type'] as $examType){
        return $examType;
    }
}

public function getState($sId){
  $data['stateList'] = DB::table('state')->where('id', $sId)->get();
  foreach($data['stateList'] as $cstate){
    return $cstate;
  }
}

public function getCity($cityId){
$data['cityList'] = DB::table('city')->where('id', $cityId)->get();
foreach($data['cityList'] as $curcity){
  return $curcity;
}
}
 
  public function updateCollegeForm(Request $request){
            $id = $request->id; 
            $valid_study_permit_visa['visa_type'] = $request->valid_study_permit_visa;
            $eligible_nationality['eligible_nationality'] =$request->eligible_nationality;
            $eligible_education_country['eligible_education_country'] = $request->eligible_education_country;
            $education_level['education_level'] =$request->education_level;
            $grading_scheme['grading_scheme'] = $request->grading_scheme;
            $english_exam_type['english_exam_type'] = $request->english_exam_type;
            $provinces_states = explode(',', $request->provinces_states);
            $campus_city = explode(',', $request->campus_city);
            $college_type['type'] = $request->college_type;

          $AllData = array(
          'college_name'=>$request->college_name,
          'college_country'=>$request->college_country,
          'status'=>$request->college_status,
          'college_address'=>$request->college_address,
          'college_about_details'=>$request->editor1,
          'application_fee'=>$request->application_fee,
          'average_graduate_program'=>$request->average_graduate_program,
          'average_undergraduate_program'=>$request->average_undergraduate_program,
          'cost_of_living'=>$request->cost_of_living,
          'tuition'=>$request->tuition,
          'founded'=>$request->founded,
          'school_id'=>$request->school_id,
          'provider_id_number'=>$request->provider_id_number,
          'institution_type'=>$request->institution_type,
          'january_april'=>$request->january_april,
          'may_august'=>$request->may_august,
          'september_december'=>$request->september_december,
          'engineering_and_technology'=>$request->engineering_and_technology,
          'health_sciences_medicine_nursing_paramedic_and_kinesiology'=>$request->health_sciences_medicine_nursing_paramedic_and_kinesiology,
          'business_management_and_economics'=>$request->business_management_and_economics,
          'other'=>$request->other,
          'year_post_secondary_certificate'=>$request->year_post_secondary_certificate,
          'year_undergraduate_diploma'=>$request->year_undergraduate_diploma,       
          'valid_study_permit_visa'=>json_encode($valid_study_permit_visa['visa_type'], true),
          'eligible_nationality'=>json_encode($eligible_nationality['eligible_nationality'], true),
          'eligible_education_country'=>json_encode($eligible_education_country['eligible_education_country'] , true),
          'education_level'=>json_encode($education_level['education_level'], true),
          'grading_scheme'=>json_encode($grading_scheme['grading_scheme'], true),
          'english_exam_type'=>json_encode($english_exam_type['english_exam_type'], true),
          'provinces_states'=>json_encode($provinces_states, true),
          'campus_city'=>json_encode($campus_city, true),
          'college_type'=>json_encode($college_type['type'], true),      
          'work_permit_available'=>$request->work_permit_available,  
          'map_location'=>$request->map_location,
          'map_streetview'=>$request->map_streetview
          );
                   
          $data = DB::table('colleges')
          ->where('id', $id)
          ->update($AllData);
         
   if($data){
    Session::flash('college_updated', 'College details has been updated !'); 
    return redirect('admin-list-of-college');
   }else{
    Session::flash('college_updated', 'College details has been updated !'); 
    return redirect('admin-list-of-college');
   }
}
 



public function adminListofProgram(){
  $data['list_of_programs'] = DB::table('college_programs as a')->select('a.id', 'a.college_id', 'a.program_logo', 'a.programs_name', 'a.program_college_name', 'a.earliest_intake_date', 'a.earliest_intake_type', 'a.earliest_intake_price', 'a.post_secondary_discipline', 'a.post_secondary_sub_categories', 'a.include_living_costs', 'a.tuition_fee_min', 'a.tuition_fee_min', 'a.tuition_fee_max', 'a.application_fee_min', 'a.application_fee_max', 'a.program_summary', 'a.minimum_level_of_education_completed', 'a.minimum_gpa', 'a.status', 'a.first_year_post_secondary_certificate', 'a.first_year_t_level_program_including_a_work_placement', 'a.commission_break_down', 'a.disclaimer', 'a.month_year', 'a.open_date', 'a.submission_deadline', 'a.doc_requirement', 'a.doc_count', 'a.commission_type', 'a.amount_percentage', 'a.amount_fixed', 'a.tax_fixed', 'a.tax_percentage', 'a.tax_type', 'b.college_name')
  ->join('colleges as b', 'a.college_id', '=', 'b.id')
  ->paginate(10);
  
  return view('admin.admin-list-of-programs', $data);
}

 
 
public function adminViewProgram($id){
  $data['programs_detail'] = DB::table('college_programs as a')->select('a.*', 'b.college_name')
  ->join('colleges as b', 'a.college_id', '=', 'b.id')
  ->where('a.id', $id)->first();
  
  $data['req_doc'] = DB::table('documents_requirment')->get();
  $data['post_secondary_discipline'] = DB::table('post_secondary_discipline')->get();
  $data['post_secondary_sub_categories'] = DB::table('post_secondary_sub_categories')->get(); 
  return view('admin.admin-view-program', $data);
}


public function adminEditProgram($id){
  $data['program_edit_detail'] = DB::table('college_programs as a')->select('a.*', 'b.college_name', 'b.id as college_id', 'c.college_programs_id', 'c.test_scores_name', 'c.test_scores_number', 'c.reading', 'c.writing', 'c.listening', 'c.speaking')
  ->join('colleges as b', 'a.college_id', '=', 'b.id')
  ->join('college_programs_test_scores as c', 'c.college_programs_id', '=', 'a.id')
  ->where('a.id', $id)->first();

  $data['req_doc'] = DB::table('documents_requirment')->get();
  $data['post_secondary_discipline'] = DB::table('post_secondary_discipline')->get();
  $data['post_secondary_sub_categories'] = DB::table('post_secondary_sub_categories')->get(); 
  return view('admin.admin-edit-program', $data);

}


public function adminUpdateProgram(Request $request){
 $id = $request->id;
 $post_secondry_discipline['post_secondary_discipline'] = $request->post_secondary_discipline;
 $post_secondary_sub_categories['post_secondary_sub_categories'] = $request->post_secondary_sub_categories;
 $certificate_doc['certificate_doc']= $request->certificate_doc;

 $AllData = array(
  'programs_name' => $request->program_name, 
  'earliest_intake_date' => $request->earliest_intake_date,
  'earliest_intake_type' => $request->earliest_intake_type,
  'earliest_intake_price' => $request->earliest_intake_price,
  'post_secondary_discipline' => json_encode($post_secondry_discipline['post_secondary_discipline'], true),
  'post_secondary_sub_categories' => json_encode($post_secondary_sub_categories['post_secondary_sub_categories'], true),
  'include_living_costs' => $request->include_living_cost,
  'tuition_fee_min' => $request->tuition_fee_min,
  'tuition_fee_max' => $request->tuition_fee_max,
  'application_fee_min' => $request->application_fee_min,
  'application_fee_max' => $request->application_fee_max,
  'program_summary' => $request->editor1,
  'minimum_level_of_education_completed' => $request->minimum_level_of_education_completed,
  'minimum_gpa' => $request->minimum_gpa,

 

  'status' => $request->status1,
  'month_year' => $request->month_year,
  'open_date' => $request->open_date,
  'submission_deadline' => $request->submission_deadline,
  'first_year_post_secondary_certificate' => $request->first_year_post_secondary_certificate,
  'first_year_t_level_program_including_a_work_placement' => $request->first_year_t_level_program_including_a_work_placement,
  'commission_break_down' => $request->commission_break_down,
  'disclaimer' => $request->disclaimer,
  'doc_requirement' => json_encode($certificate_doc['certificate_doc'], true),
  'amount_fixed' => $request->payment,
  'amount_percentage' => $request->percentage,
  'tax_percentage' => $request->tax_percentage,
  'tax_fixed' => $request->fixed, 
  'tax_type' => $request->tax_type
 );
 $data = DB::table('college_programs')->where('id', $id)->update($AllData);
 
  $data2 = DB::table('college_programs_test_scores')->where('college_programs_id', $id)->update([
   'test_scores_name' => $request->test_scores_name,
    'test_scores_number' => $request->test_scores_number,
    'reading' => $request->reading, 
    'writing' => $request->writing,
    'listening' => $request->listening,
    'speaking' => $request->speaking,
  ]);
 

 if($data2){
  Session::flash('program_updated', 'Program details has been updated !'); 
  return redirect('admin-list-of-program');
 }else{
  Session::flash('program_updated', 'Program details has been updated !'); 
  return redirect('admin-list-of-program');
 }

 
}
 
    }

   
   

