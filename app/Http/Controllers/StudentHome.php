<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\College;
use Carbon\Carbon;


class StudentHome extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('student.index');
    }

    public function program()
    {
       
       
        $data['collages']  = College::with(['courses' => function ($query) {
            $query->select('*');
           
        }])
        ->select('id','college_logo','college_name','college_country','college_address')
        ->where('status', 1)->paginate(10);
        foreach($data['collages'] as $collage)
        {
           $ids[] = $collage['id'];
        }

        $data['courseTotal'] =  DB::table('college_programs')->whereIn('college_id',$ids)->count();

        $data['countries']     =  DB::table('country')->select('id','country')->get();
        $data['states']        =  DB::table('state')->select('id','country_id','state')->get();
        $data['cities']        =  DB::table('city')->select('id','state_id','city')->get();
        $data['colleges']      =  DB::table('colleges')->select('id','campus_city','college_name')->get();

        $data['inakes_date']          =  DB::table('college_programs')->select('earliest_intake_date')->WhereNotNull('earliest_intake_date')->orderBy('earliest_intake_date','ASC')->groupBy('earliest_intake_date')->get();
        $data['post_discipline']      =  DB::table('post_secondary_discipline')->select('id','title')->where('status',1)->orderBy('title','ASC')->get();
        $data['sub_categories']       =  DB::table('post_secondary_sub_categories')->select('id','sub_cat_name')->where('status',1)->orderBy('sub_cat_name','ASC')->get();
//return $data['collages'];
        return view('student.program',$data); 
    }

    public function application(Request $request)
    {
        if ($request->isMethod('post')) {
            $num1 = mt_rand(1000, 9999);
            $num2 = mt_rand(1000, 9999);

            $applications = DB::table('student_applications')->where('student_id', Auth::user()->id)->where('program_id', $request->program_id)->first();

            if (!empty($applications)) {
                $applications = DB::table('student_applications')->where('student_id', Auth::user()->id)
                    ->join('college_programs', 'student_applications.program_id', '=', 'college_programs.id')
                    ->join('colleges', 'college_programs.college_id', '=', 'colleges.id')
                    ->select('student_applications.*', 'college_programs.programs_name', 'college_programs.status', 'college_programs.earliest_intake_date', 'college_programs.application_fee_max', 'college_programs.program_logo', 'colleges.college_name')
                    ->get();
                $isAlreadyAdded = '1';
                return view('student.application', compact('applications', 'isAlreadyAdded'));
            } else {
                DB::table('student_applications')->insert([
                    'program_id' => $request->program_id,
                    'student_id' => Auth::user()->id,
                    'app_id' => $num1 . strrev($num2),
                    'status' => '0',
                    'created_at' => Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon::now()->toDateTimeString(),
                ]);
            }
            $applications = DB::table('student_applications')->where('student_id', Auth::user()->id)
                ->join('college_programs', 'student_applications.program_id', '=', 'college_programs.id')
                ->join('colleges', 'college_programs.college_id', '=', 'colleges.id')
                ->select('student_applications.*', 'college_programs.programs_name', 'college_programs.status', 'college_programs.earliest_intake_date', 'college_programs.application_fee_max', 'college_programs.program_logo', 'colleges.college_name')
                ->get();
            $isAlreadyAdded = '0';
            return view('student.application', compact('applications', 'isAlreadyAdded'));
        } else {
            $applications = DB::table('student_applications')->where('student_id', Auth::user()->id)
                ->join('college_programs', 'student_applications.program_id', '=', 'college_programs.id')
                ->join('colleges', 'college_programs.college_id', '=', 'colleges.id')
                ->select('student_applications.*', 'college_programs.programs_name', 'college_programs.status', 'college_programs.earliest_intake_date', 'college_programs.application_fee_max', 'college_programs.program_logo', 'colleges.college_name')
                ->get();
            $isAlreadyAdded = '0';
            return view('student.application', compact('applications', 'isAlreadyAdded'));
        }
    }

    public function removeApplication(Request $request)
    {
        DB::table('student_applications')->where('id', $request->app_id)->delete();
        return redirect()->route('application');
    }


    public function shortlist_programs()
    {
        return view('student.shortlist_programs');
    }

    public function student_profile()
    {
        return view('student.student_profile');
    }

    public function my_profile()
    {
        return view('student.my_profile');
    }

    public function my_reminders()
    {
        return view('student.my_reminders');
    }


    public function edit_student_profile()
    {
        return view('student.edit_student_profile');
    }

    public function getStudentProfile(Request $request)
    {


        $studentProfile = DB::table('student_profile')->where('user_id', Auth::user()->id)->first();
        if ($studentProfile) {
            $studentProfile->email = Auth::user()->email;
        }
        return response()->json(['success' => 'College details fetched successfully', 'studentProfile' => $studentProfile]);
    }

    public function updateStudentProfile(Request $request)
    {


        $imageName = time() . '.' . $request->three_year_undergraduate_advanced_diploma->extension();
        $request->three_year_undergraduate_advanced_diploma->move(public_path('/images'), $imageName);

        DB::table('student_profile')
            ->where('user_id', Auth::user()->id)
            ->update(array(
                "first_name" => $request->first_name,
                "middle_name" => $request->middle_name,
                "last_name" => $request->last_name,
                'three_year_undergraduate_advanced_diploma' => $imageName,
                "date_of_birth" => $request->date_of_birth,
                "first_language" => $request->first_language,
                "more_background_details" => $request->more_background_details,
                "passport_number" => $request->passport_number,
                "marital_status" => $request->marital_status,
                "gender" => $request->gender,
                "country" => $request->country,
                "country_of_citizenship" => $request->country_of_citizenship,
                "province_state" => $request->province_state,
                "country_of_education" => $request->country_of_education,
                "highest_level_of_education" => $request->highest_level_of_education,
                "grading_scheme" => $request->grading_scheme,
                "country_of_institution" => $request->country_of_institution,
                "level_of_education" => $request->level_of_education,
                "english_exam_type" => $request->english_exam_type,
                "address" => $request->address,
                "city_town" => $request->city_town,
                "postal_code" => $request->postal_code,
                "phone_number" => $request->phone_number,
                "grade_average" => $request->grade_average,
                "graduated_from_most_recent_school" => $request->graduated_from_most_recent_school,
                "name_of_institution" => $request->name_of_institution,
                "primary_language_of_instruction" => $request->primary_language_of_instruction,
                "attended_institution_from" => $request->attended_institution_from,
                "attended_institution_to" => $request->attended_institution_to,
                "degree_name" => $request->degree_name,
                "graduated_institution" => $request->graduated_institution,
                "graduation_date" => $request->graduation_date,
                "school_address" => $request->school_address,
                "school_city_town" => $request->school_city_town,
                "school_province" => $request->school_province,
                "school_postal_code" => $request->school_postal_code,
                "date_of_exam" => $request->date_of_exam,
                "lisenting" => $request->lisenting,
                "reading" => $request->reading,
                "writing" => $request->writing,
                "speaking" => $request->speaking,
                "gre_exam_date" => $request->gre_exam_date,
                "gre_verbal_score" => $request->gre_verbal_score,
                "gre_verbal_rank" => $request->gre_verbal_rank,
                "gre_quantitative_score" => $request->gre_quantitative_score,
                "gre_quantitative_rank" => $request->gre_quantitative_rank,
                "gre_writing_score" => $request->gre_writing_score,
                "gre_writing_rank" => $request->gre_writing_rank,
                "gmat_verbal_score" => $request->gmat_verbal_score,
                "gmat_gre_exam_date" => $request->gmat_gre_exam_date,
                "gmat_verbal_rank" => $request->gmat_verbal_rank,
                "gmat_quantitative_score" => $request->gmat_quantitative_score,
                "gmat_quantitative_rank" => $request->gmat_quantitative_rank,
                "gmat_writing_score" => $request->gmat_writing_score,
                "gmat_writing_rank" => $request->gmat_writing_rank,
                "refused_visa" => $request->refused_visa,
                "physical_certificate_for_this_degree" => $request->physical_certificate_for_this_degree,
                "study_permit_visa" => $request->study_permit_visa

            ));

        return response()->json(['success' => 'Profile updated successfully']);
    }

    public function getMyProfile(Request $request)
    {
        $studentProfile = DB::table('student_profile')->select('first_name', 'middle_name', 'last_name', 'date_of_birth', 'marital_status', 'gender', 'city_town', 'country', 'phone_number')->where('user_id', Auth::user()->id)->first();
        $myProfile = DB::table('my_profile')->where('user_id', Auth::user()->id)->first();

        return response()->json(['success' => 'My profile details fetched successfully', 'studentProfile' => $studentProfile, 'myProfile' => $myProfile]);
    }
    public function updateMyProfile(Request $request)
    {
        $myProfile = DB::table('my_profile')->where('user_id', Auth::user()->id)->first();

        if ($myProfile) {
            DB::table('my_profile')->where('user_id', Auth::user()->id)->update(array(
                'account_name' => $request->account_name,
                'account_number' => $request->account_number,
                'bank_name' => $request->bank_name,
                'bank_address' => $request->bank_address,
                'organization_number' => $request->organization_number,
                'institution_number' => $request->institution_number,
                'transit_number' => $request->transit_number,
                'swift_code' => $request->swift_code,
                'ifsc_code' => $request->ifsc_code,
                'comments' => $request->comments,
            ));
            return response()->json(['success' => 'Profile info updated successfully']);
        } else {
            DB::table('my_profile')->insert(array(
                'user_id' => Auth::user()->id,
                'account_name' => $request->account_name,
                'account_number' => $request->account_number,
                'bank_name' => $request->bank_name,
                'bank_address' => $request->bank_address,
                'organization_number' => $request->organization_number,
                'institution_number' => $request->institution_number,
                'transit_number' => $request->transit_number,
                'swift_code' => $request->swift_code,
                'ifsc_code' => $request->ifsc_code,
                'comments' => $request->comments,
            ));
            return response()->json(['success' => 'Profile info added successfully']);
        }
    }

    public function updateProfilePicture(Request $request)
    {
        $imageName = time() . '.' . $request->profile_image->extension();
        $request->profile_image->move(public_path('/images'), $imageName);
        $myProfile = DB::table('my_profile')->where('user_id', Auth::user()->id)->first();

        if ($myProfile) {
            DB::table('my_profile')->where('user_id', Auth::user()->id)->update(array(
                'student_profile_picture' => $imageName
            ));
            return response()->json(['success' => 'Profile picture updated successfully']);
        } else {
            DB::table('my_profile')->insert(array(
                'user_id' => Auth::user()->id,
                'student_profile_picture' => $imageName,
            ));
            return response()->json(['success' => 'Profile picture updated successfully']);
        }
    }


public function get_eligibility_filter(Request $req){
       $visa_permit        =  $req->input('visa_permit');
       $nationality         =  $req->input('nationality');
       $education_country   =  $req->input('education_country');
       $education_lavel     =  $req->input('education_lavel');
       $grading_schem       =  $req->input('grading_schem');
       $examt_ype           =  $req->input('exam_type');

        $data['countries']     =  DB::table('country')->select('id','country')->get();
        $data['states']        =  DB::table('state')->select('id','country_id','state')->get();
        $data['cities']        =  DB::table('city')->select('id','state_id','city')->get();
        $data['colleges']      =  DB::table('colleges')->select('id','campus_city','college_name')->get();

        $data['inakes_date']          =  DB::table('college_programs')->select('earliest_intake_date')->WhereNotNull('earliest_intake_date')->orderBy('earliest_intake_date','ASC')->groupBy('earliest_intake_date')->get();
        $data['post_discipline']      =  DB::table('post_secondary_discipline')->select('id','title')->where('status',1)->orderBy('title','ASC')->get();
        $data['sub_categories']       =  DB::table('post_secondary_sub_categories')->select('id','sub_cat_name')->where('status',1)->orderBy('sub_cat_name','ASC')->get();
       $naar = '';
       if(!empty($visa_permit))
       {
            foreach($visa_permit as $vpermit){
                $visa_permit[] = $vpermit;
            }
        
   
        $visa_permit1 = implode(',',$visa_permit);
        $abc =  $visa_permit1;
        
        $naar = explode(',',  $abc);
      }
    $ids = DB::table('colleges')
    ->where('status',1)
    ->whereJsonContains('valid_study_permit_visa',$naar )
    ->whereJsonContains('eligible_nationality', [$nationality])
    ->whereJsonContains('eligible_education_country',[$education_country])
    ->whereJsonContains('education_level', [$education_lavel])
    ->whereJsonContains('grading_scheme', [$grading_schem])
    ->whereJsonContains('english_exam_type', [$examt_ype])
    
    ->select('id')
    ->get();
   
   if(count($ids)>0)
   {
    
    foreach($ids as $res){
        
         $iDs[] = $res->id;
        }
  
        $data['collages']  = College::with(['courses' => function ($query) {
            $query->select('*');
           
        }])
        ->select('id','college_logo','college_name','college_country','college_address')
        ->whereIn('id', $iDs)
        ->where('status', 1)->paginate(10);
        $data['courseTotal'] =  DB::table('college_programs')->whereIn('college_id',$iDs)->count(); 
        return view('student.program',$data); 
    }else{
        $data['collages'] ='not_found';
        return view('student.program',$data);  
    }
}

public function collage_filter(Request $req){
   
    $collage_country            =  $req->input('collage_country');
    $work_permit_status         =  $req->input('work_permit_status');
    $collage_state              =  $req->input('collage_state');
    $campus_city_name           =  $req->input('campus_city_name');
    $univercity                 =  $req->input('univercity');
    $collage                    =  $req->input('collage');
    $high_school                =  $req->input('high_school');
    $collage_name               =  $req->input('collage_name');

    $data['countries']     =  DB::table('country')->select('id','country')->get();
    $data['states']        =  DB::table('state')->select('id','country_id','state')->get();
    $data['cities']        =  DB::table('city')->select('id','state_id','city')->get();
    $data['colleges']      =  DB::table('colleges')->select('id','campus_city','college_name')->get();

    $data['inakes_date']          =  DB::table('college_programs')->select('earliest_intake_date')->WhereNotNull('earliest_intake_date')->orderBy('earliest_intake_date','ASC')->groupBy('earliest_intake_date')->get();
    $data['post_discipline']      =  DB::table('post_secondary_discipline')->select('id','title')->where('status',1)->orderBy('title','ASC')->get();
    $data['sub_categories']       =  DB::table('post_secondary_sub_categories')->select('id','sub_cat_name')->where('status',1)->orderBy('sub_cat_name','ASC')->get();
 
$arr = array(
    'collagename'=>$collage_name,
    'campus_city'=>$campus_city_name,
    'college_country'=>$collage_country,
    'provinces_states'=>$collage_state,
    'work_permit_available'=>$work_permit_status,
    'univercity'=>$univercity,
    'collage'=>$collage,
    'high_school'=>$high_school,
);
//print_r($arr);die;


 $ids = DB::table('colleges');
 if(!empty($collage_name)){
 $ids = $ids->whereIn('college_name', $collage_name);
 }
 if(!empty($collage_name)){
 $ids = $ids->whereJsonContains('campus_city', $campus_city_name);
 }
 if(!empty($collage_country)){
 $ids = $ids->whereIn('college_country',$collage_country);
 }
 if(!empty($collage_state)){
 $ids = $ids->whereJsonContains('provinces_states',$collage_state);
 }
 if(!empty($work_permit_status)){
 $ids = $ids->where('work_permit_available', [$work_permit_status]);
 }
 if(!empty($univercity)){
 $ids = $ids->whereJsonContains('college_type', [$univercity]);
 }
 if(!empty($collage)){
 $ids = $ids->whereJsonContains('college_type', [$collage]);
 }
 if(!empty($high_school)){
 $ids = $ids->whereJsonContains('college_type', [$high_school]);
 }
 $ids = $ids->where('status',1);
 $ids = $ids->select('id');
 $ids = $ids->get();
 //return $ids;
if(count($ids)>0)
{
 
 foreach($ids as $res){
     
      $iDs[] = $res->id;
     }

     $data['collages']  = College::with(['courses' => function ($query) {
         $query->select('*');
        
     }])
     ->select('id','college_logo','college_name','college_country','college_address')
     ->whereIn('id', $iDs)
     ->where('status', 1)->paginate(10);
     $data['courseTotal'] =  DB::table('college_programs')->whereIn('college_id',$iDs)->count();
    //return $data['collages'];

     return view('student.program',$data); 
 }else{
     $data['collages'] ='not_found';
     return view('student.program',$data);  
 }
}


public function programfilter(Request $req){
   
    $college_name            =  $req->input('college');
    $inakes_date             =  $req->input('inakes_date');
    $post_discipline         =  $req->input('post_discipline');
    $sub_categories          =  $req->input('sub_categories');
    $living_cost             =  $req->input('living_cost');
    $tuition_free            =  $req->input('tuition_free');
    $applocation_free        =  $req->input('applocation_free');

    $data['countries']     =  DB::table('country')->select('id','country')->get();
    $data['states']        =  DB::table('state')->select('id','country_id','state')->get();
    $data['cities']        =  DB::table('city')->select('id','state_id','city')->get();
    $data['colleges']      =  DB::table('colleges')->select('id','campus_city','college_name')->get();

    $data['inakes_date']          =  DB::table('college_programs')->select('earliest_intake_date')->WhereNotNull('earliest_intake_date')->orderBy('earliest_intake_date','ASC')->groupBy('earliest_intake_date')->get();
    $data['post_discipline']      =  DB::table('post_secondary_discipline')->select('id','title')->where('status',1)->orderBy('title','ASC')->get();
    $data['sub_categories']       =  DB::table('post_secondary_sub_categories')->select('id','sub_cat_name')->where('status',1)->orderBy('sub_cat_name','ASC')->get();

$arr = array(
    'college_name'=>$college_name,
    'inakes_date'=>$inakes_date,
    'post_discipline'=>$post_discipline,
    'sub_categories'=>$sub_categories,
    'living_cost'=>$living_cost,
    'tuition_free'=>$tuition_free,
    'applocation_free'=>$applocation_free,
);
//print_r($arr);
//die;

 $ids = DB::table('college_programs');
 if(!empty($college_name)){
 $ids = $ids->whereIn('college_id', $college_name);
 }
 if(!empty($inakes_date)){
 $ids = $ids->whereIn('earliest_intake_date', $inakes_date);
 }
 if(!empty($post_discipline)){
 $ids = $ids->whereJsonContains('post_secondary_discipline',$post_discipline);
 }
 if(!empty($sub_categories)){
 $ids = $ids->whereJsonContains('post_secondary_sub_categories',$sub_categories);
 }

 if(!empty($living_cost)){
 $ids = $ids->where('include_living_costs', $living_cost);
 }
 if(!empty($tuition_free)){
$fee = explode(';',$tuition_free);
 $ids = $ids->where('tuition_fee_min','>=', $fee[0]);
 }
 if(!empty($tuition_free)){
    $fee = explode(';',$tuition_free);
    $ids = $ids->where('tuition_fee_max','<=', $fee[1]);
    }
if(!empty($applocation_free)){
        $aplicationfee = explode(';',$applocation_free);
       $ids = $ids->where('application_fee_min','>=', $aplicationfee[0]);
}
 if(!empty($applocation_free)){
 $aplicationfee = explode(';',$applocation_free);
 $ids = $ids->where('application_fee_max', '<=', $aplicationfee[1]);
 }
 $ids = $ids->where('status',1);
 $ids = $ids->select('college_id');
 $ids = $ids->get();
 //return $ids;
if(count($ids)>0)
{
 
 foreach($ids as $res){
     
      $iDs[] = $res->college_id;
     }

     $data['collages']  = College::with(['courses' => function ($query) {
         $query->select('*');
        
     }])
     ->select('id','college_logo','college_name','college_country','college_address')
     ->whereIn('id', $iDs)
     ->where('status', 1)->paginate(10);
     $data['courseTotal'] =  DB::table('college_programs')->whereIn('college_id',$iDs)->count();
   // return $data['collages'];

     return view('student.program',$data); 
 }else{
     $data['collages'] ='not_found';
     return view('student.program',$data);  
 }
}

public function apply(Request $request)
{
    return $request->all();
}

public function college_details($id)
{

     $data['college_details']  = College::with(['courses' => function ($query) {
        $query->select('*');
       
    }])
    ->select('id','college_logo','college_name','college_country','college_address','college_about_details','application_fee','average_graduate_program','average_undergraduate_program','cost_of_living','tuition','founded','school_id','provider_id_number','institution_type','engineering_and_technology','health_sciences_medicine_nursing_paramedic_and_kinesiology','business_management_and_economics','other','year_post_secondary_certificate','year_undergraduate_diploma','map_location','map_streetview')
    ->where('id', $id)
    ->where('status', 1)->get();
    $data['gallery']               =  DB::table('college_pictures')->select('id','name','url')->where('college_id',$id)->get();
    $data['question_answer']       =  DB::table('college_feature_questions')->select('id','feature_questions','feature_answer')->where('college_id',$id)->get();
    return view('student.student_college_details',$data);
}

public function programs_college($id)
{
  
    $data['programdetails']        =  DB::table('college_programs')->select('*')->where('college_id',$id)->get();
    $data['gallery']               =  DB::table('college_pictures')->select('id','name','url')->where('college_id',$id)->get();
    $data['score']                 =  DB::table('college_programs_test_scores')->select('id','test_scores_name','test_scores_number',
    'reading','writing','listening','speaking')->where('college_programs_id',$id)->get();
    $data['question_answer']       =  DB::table('college_feature_questions')->select('id','feature_questions','feature_answer')->where('college_id',$id)->get();
    $data['profile_updated']       =  DB::table('student_profile')->select('id')->where('user_id', Auth::user()->id)->first();
    $data['similar_programs']      =  DB::table('college_programs')->select('id','program_logo','programs_name','program_college_name','earliest_intake_date','tuition_fee_max','application_fee_max')->where('programs_name', 'like', '%'.$data['programdetails'][0]->programs_name .'%')->inRandomOrder()->get();
    //return $data['profile_updated'] ;
   return view('student.student_programs_college',$data);

}

}