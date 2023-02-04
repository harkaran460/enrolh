<?php 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
function check_permission()
    {
        
      $user_type = DB::table('users')->select('user_type')->where('id', Auth::user()->id)->get();
       $permissions = DB::table('users')->where('users.id', Auth::user()->id)
       ->join('permissions', 'permissions.role_id', '=', 'users.user_type')
       ->select('permissions.page_title', 'permissions.slug','permissions.icon')
       ->where('role_id', $user_type[0]->user_type)
      
       ->where('status',1)
       ->where('status',1)->get();
       return $permissions;
    }

    function getCountry()
    {
      $data['countries']     =  DB::table('country')->select('id', 'country')->where('status',1)->get();
      return $data['countries'];
    } 

    function getState()
    {
      $data['states']   =  DB::table('state')->select('id', 'country_id', 'state')->where('status',1)->get();
      return $data['states'];
    } 
    function getcity()
    {
      $data['cities']        =  DB::table('city')->select('id', 'state_id', 'city')->where('status',1)->get();
      return $data['cities'];
    } 
    function getCollege()
    {
      $data['colleges']      =  DB::table('colleges')->select('id', 'campus_city', 'college_name')->where('status',1)->get();
      return $data['colleges'];
    }

    function getEducation(){
      $data['education']      =  DB::table('education')->select('id', 'title')->where('status',1)->get();
      return $data['education'];
    }

    function getGradingScheme (){
      $data['grading_scheme']      =  DB::table('grading_scheme')->select('id', 'grad_name')->where('status',1)->get();
      return $data['grading_scheme'];
    }

    function getPermitVisa (){
      $data['permit_visa']      =  DB::table('permit_visa')->select('id', 'visa_title')->where('status',1)->get();
      return $data['permit_visa'];
    }
    function getEnglishexamType (){
      $data['english_exam_type']      =  DB::table('english_exam_type')->select('id', 'exam_name')->where('status',1)->get();
      return $data['english_exam_type'];
    }

    function getIntekDate (){
    $data['inakes_date']          =  DB::table('college_programs')->select('earliest_intake_date')->WhereNotNull('earliest_intake_date')->orderBy('earliest_intake_date', 'ASC')->groupBy('earliest_intake_date')->get();
    return $data['inakes_date'];
  } 

    function getPostDiscipline (){
      $data['post_discipline']      =  DB::table('post_secondary_discipline')->select('id', 'title')->where('status', 1)->orderBy('title', 'ASC')->get();
      return $data['post_discipline'];
    } 

       
    function getSubCategories (){
     $data['sub_categories']       =  DB::table('post_secondary_sub_categories')->select('id', 'sub_cat_name')->where('status', 1)->orderBy('sub_cat_name', 'ASC')->get();
     return $data['sub_categories'];
    } 

    function getPaymentStatus (){
      $data['payment_status']       =  DB::table('payment_status')->select('id', 'status_name')->where('status', 1)->orderBy('status_name', 'ASC')->get();
      return $data['payment_status'];
     } 

     function getCurrentStatus (){
      $data['current_status']       =  DB::table('current_status')->select('id', 'status_title')->where('status', 1)->orderBy('status_title', 'ASC')->get();
      return $data['current_status'];
     } 