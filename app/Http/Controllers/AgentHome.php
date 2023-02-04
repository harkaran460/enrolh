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

class AgentHome extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function index()
    {   //agent details
        $data1 =  DB::table('users as a')->select('a.id', 'email', 'phone_number', 'first_name as name', 'last_name as lastname');
        $data1 = $data1->leftjoin('agent_details as b', 'b.user_id', '=', 'a.id')
            ->where('user_type', 3)->where('a.id', Auth::user()->id)->first();
        $data['student_list'] = $data1;
        //aplication count
        $allstatus =  DB::table('current_status')->select('id', 'status_title')->where('status', 1)->get();
        $statusArr = [];
        foreach ($allstatus as $key => $list) {
            $countlist = $this->getGroupbystatusCount($list->id);
            $statusArr[$list->status_title] = $countlist;
        }
        $data['statuslist'] = $statusArr;
        //counter
        $data['totalapproveApplication'] =  DB::table('student_applications')->where('application_status', 12)->count();
        $data['totalApplication'] =  DB::table('student_applications')->select('id')->count();
        $data['totalamount'] =  DB::table('student_applications')->sum('payment_amount');
        $data['totalstudent'] =  DB::table('users')->where('user_type', 5)->where('agent_id', Auth::user()->id)->count();
        //monthly income
        $monthly_income = '';
        $monthly_income =  $this->getMonthRevenue();
        $data['monthly_income'] = $monthly_income;
        // get team performance
        $data['team_performance'] = $this->getTeamPerformance();

        //get aplication list

        //$data['applicationlist'] = $this->getapplication_list();
        $applicationlist = $this->getapplication_list();
        if (!empty($applicationlist)) {
            $finalList = [];
            foreach ($applicationlist as  $applist) {
                $data3 = $this->missing_requirement_count($applist->app_id);
                $finalList[$applist->app_id]['appid'] = $applist->app_id;
                $finalList[$applist->app_id]['programs_name'] = $applist->programs_name;
                $finalList[$applist->app_id]['program_college_name'] = $applist->program_college_name;
                $finalList[$applist->app_id]['name'] = $applist->name;
                $finalList[$applist->app_id]['totalmissing'] = $data3;
            }
            $data['application_list'] = $finalList;
            //echo "<pre>";print_r($data['application_list']);die;
        }
        //paid application
        $tempMonthArr = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $monthNameArr = array();
        for ($i = 0; $i < 12; $i++) {
            if ($i < date('m')) {
                $monthNameArr[] = $tempMonthArr[$i];
            }
        }

        $dataSetArr = array();
        $dataSetArr['labels'] = $monthNameArr;

        $counter = 0;
        foreach ($this->getColleges() as $key => $collage) {
            $dataSetArr['datasets'][$key]['label'] = $collage->program_college_name;
            $dataSetArr['datasets'][$key]['backgroundColor'] = $this->colorarry()[$counter];
            $dataSetArr['datasets'][$key]['data'] = $this->collageWiseMonthLyDataCount($collage->college_id, $monthNameArr);
            if ($counter == 6) {
                $counter = 0;
            } else {
                $counter++;
            }
        }

        $data['dataSet'] = json_encode($dataSetArr);
        $studentData = '';
        //paid student
        $paid_student = array();
        foreach ($tempMonthArr as $month) {
            $paid_user = $this->getPaidStudents($month);
            $paid_student[] = $paid_user[0]->total;
        }
        $data['dataSetstd'] = json_encode($paid_student);
        $data['college_list'] =  DB::table('colleges')->select('id','college_name')->get();
        $data['notice_board'] =  DB::table('notice_board')->select('id','notice_text')->get();
        return view('agent.dashboard', $data);
    }

    public function getGroupbystatusCount($id)
    {
        return DB::table('student_applications')->select('id,application_status')->where('application_status', $id)->groupBy('application_status')->count();
    }
    public function colorarry()
    {
        $finalColor = ['#40e0d0', '#ffa500', '#cd5c5c', '#ba55d3', '#ff69b4', '#6495ed', '#32cd32'];
        return $finalColor;
    }
    public function getColleges()
    {
        return DB::table('college_programs')->select('program_college_name', 'college_id')->groupBy('college_id')->get();
    }
    //get student
    public function getstudents()
    {
        return DB::table('users')->select('id')->whereIn('user_type', [4, 5, 8, 11])->get();
    }

    //count paid student in a monthly
    public function getPaidStudents($month_name)
    {
        return $paid_student = DB::select(DB::raw("SELECT COUNT(payments.id) as total from payments WHERE MONTHNAME(CAST(payments.created_at AS DATE)) = '" . $month_name . "'"));
    }
    public function collageWiseMonthLyDataCount($college_id, $monthNameArr)
    {
        $monthlyArr = array();
        foreach ($monthNameArr as $monthName) {
            $monthlyArr[] = $this->getMonthData($college_id, $monthName);
        }
        return $monthlyArr;
    }

    public function getMonthData($college_id, $monthName)
    {
        $student_applications = DB::select(DB::raw("SELECT COUNT(student_applications.id) as total from student_applications WHERE MONTHNAME(CAST(student_applications.created_at AS DATE)) = '" . $monthName . "' AND program_id  = " . $college_id));
        if (isset($student_applications) && $student_applications[0]->total > 0) {
            return $student_applications[0]->total;
        }
        return 0;
    }
    //current month revenue
    public function getMonthRevenue()
    {
        $cmonth_revenue = '';
        $currentMonth = date('F');
        $lastmonth    =  Date('F', strtotime($currentMonth . " last month"));
        $applications_monthly_revenue = DB::select(DB::raw("SELECT SUM(student_applications.payment_amount) as total from student_applications WHERE MONTHNAME(CAST(student_applications.payment_date AS DATE)) = '" . $currentMonth . "'"));
        if (isset($applications_monthly_revenue) && $applications_monthly_revenue[0]->total > 0) {
            $cmonth_revenue =  $applications_monthly_revenue[0]->total;
        }
        $applications_last_month_revenue = DB::select(DB::raw("SELECT SUM(student_applications.payment_amount) as total from student_applications WHERE MONTHNAME(CAST(student_applications.payment_date AS DATE)) = '" . $lastmonth . "'"));
        if (isset($applications_last_month_revenue) && $applications_last_month_revenue[0]->total > 0) {
            $last_month_revenue =  $applications_last_month_revenue[0]->total;
        }
        if (($cmonth_revenue != '') && (!empty($last_month_revenue)) ){
            $diff = ($cmonth_revenue - $last_month_revenue);
            $percentage = $diff / 100;
            $revnueArr['current_month'] = $cmonth_revenue;
            $revnueArr['last_month_revenue'] = $last_month_revenue;
            $revnueArr['diff'] = $diff;
            $revnueArr['percentage'] = $percentage;
            return $revnueArr;
        } else {
            return 0;
        }
    }

    //get subagent list
    public function getTeamPerformance()
    {
        $limit = 10;
        return $data['sub_agent_list']    =  DB::table('sub_agents as a')->select('a.id', 'a.name', 'a.status')
            ->where('a.status', 1)
            ->where('u.user_type', 6)
            ->where('a.agent_id', Auth::user()->id)
            ->join('users as u', 'u.id', '=', 'a.user_id')
            ->orderBy('a.id', 'DESC')
            ->paginate($limit);
    }


    //get sapplication list
    public function getapplication_list()
    {
        $limit = 10;
        return $data['applicationlist']    =  DB::table('student_applications as a')->select('a.app_id', 'b.programs_name', 'b.program_college_name', 'u.name')

            ->where('u.agent_id', Auth::user()->id)
            ->join('users as u', 'u.id', '=', 'a.student_id')
            ->join('college_programs as b', 'b.id', '=', 'a.program_id')
            ->orderBy('a.id', 'DESC')
            ->paginate($limit);
    }

    //missing_requirement_count  
    public function missing_requirement_count($app_id)
    {
        return $data['missing_doc']    =  DB::table('student_uploaded_docs')->select('id')->where('app_id', $app_id)->whereIn('is_verified', [0, 2])->groupBy('app_id')->count();
    }

    public function agentProgram(Request $req)
    {
        //return $req->input('filterdata');
        $shortingData = $req->input('sorting');

        if ($shortingData != '') {
            if ($shortingData == 'college_asc') {
                $columns = 'college_name';
                $orderby = 'ASC';
            }
            if ($shortingData == 'college_desc') {
                $columns = 'college_name';
                $orderby = 'DESC';
            }
            if ($shortingData == 'tfee_asc') {
                $columns = 'tuition';
                $orderby = 'ASC';
            }
            if ($shortingData == 'tfee_desc') {
                $columns = 'tuition';
                $orderby = 'DESC';
            }
            if ($shortingData == 'applo_asc') {
                $columns = 'application_fee';
                $orderby = 'ASC';
            }
            if ($shortingData == 'applo_desc') {
                $columns = 'application_fee';
                $orderby = 'DESC';
            }
        } else {
            $columns = 'id';
            $orderby = 'ASC';
        }

        $data['collages']  = College::with(['courses' => function ($query) {
            $query->select('*');
        }])
            ->select('id', 'college_logo', 'college_name', 'college_country', 'college_address')
            ->where('status', 1)->orderBy($columns, $orderby)->paginate(10);

        foreach ($data['collages'] as $collage) {
            $ids[] = $collage['id'];
        }

        $data['courseTotal'] =  DB::table('college_programs')->whereIn('college_id', $ids)->count();

        $data['countries']     =  DB::table('country')->select('id', 'country')->get();
        $data['states']        =  DB::table('state')->select('id', 'country_id', 'state')->get();
        $data['cities']        =  DB::table('city')->select('id', 'state_id', 'city')->get();
        $data['colleges']      =  DB::table('colleges')->select('id', 'campus_city', 'college_name')->get();

        $data['inakes_date']          =  DB::table('college_programs')->select('earliest_intake_date')->WhereNotNull('earliest_intake_date')->orderBy('earliest_intake_date', 'ASC')->groupBy('earliest_intake_date')->get();
        $data['post_discipline']      =  DB::table('post_secondary_discipline')->select('id', 'title')->where('status', 1)->orderBy('title', 'ASC')->get();
        $data['sub_categories']       =  DB::table('post_secondary_sub_categories')->select('id', 'sub_cat_name')->where('status', 1)->orderBy('sub_cat_name', 'ASC')->get();
        $data['student_list']         =  DB::table('users')->select('id', 'name')->where('user_type', 5)->where('agent_id', Auth::user()->id)->orderBy('name', 'ASC')->get();
        //return $data['collages'];
        return view('agent.program', $data);
    }

    public function agentApplication(Request $request)
    {
        //return  $request->input();
        $payment_start_date  = date("Y-m-d", strtotime($request->input('payment_start_date'))) . ' 00:00:01';
        $payment_end_date    = date("Y-m-d", strtotime($request->input('payment_end_date'))) . ' 23:59:00';

        $appid               = $request->input('appid');
        $student_id          = $request->input('student_id');
        $fname               = $request->input('fname');
        $lname               = $request->input('lname');
        $program_name        = $request->input('program_name');
        $school_name         = $request->input('school_name');

        $payment_start_date  = date("Y-m-d", strtotime($request->input('payment_start_date'))) . ' 00:00:01';
        $payment_end_date    = date("Y-m-d", strtotime($request->input('payment_end_date'))) . ' 23:59:00';

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
            $limit = 10;
        }
        $agent = Auth::user()->id;
        $data['total_apply_count']    =  DB::table('student_applications')->select('student_id', DB::raw("count(student_id) as count"))

            ->where('agent_id', Auth::user()->id)
            ->groupBy('student_id')
            ->get();
        $associated_id     =  DB::table('users')->select('id')->whereIn('user_type', ['6', '7', '9'])->where('agent_id', $agent)->get();
        if (!empty($associated_id)) {
            foreach ($associated_id as $id) {
                $ids[] = $id->id;
            }

            //return $ids;
        }
        array_push($ids, $agent);


        $data1 =  DB::table('users as a')->select('b.user_id', 'b.first_name', 'b.last_name', 'd.program_college_name', 'd.programs_name', 'd.earliest_intake_date', 'd.id as pid', 'c.student_id', 'c.app_id', 'c.status', 'c.agent_id', 'c.created_at', 'c.id', 'e.college_logo', 'e.id as cid', 'f.status_name', 'f.bgcolor')
            ->whereIn('a.agent_id', $ids)
            ->whereIn('a.user_type', ['5', '6', '8', '11', '12']);

        if (($request->input('payment_start_date') != '') && ($request->input('payment_end_date') != '')) {
            $data1 = $data1->whereBetween('c.payment_date', ["$payment_start_date", "$payment_end_date"]);
        }

        if (($request->input('payment_start_date') != '') && ($request->input('payment_end_date') == '')) {
            $data1 = $data1->whereBetween('c.payment_date', ["$payment_start_date", "$current_date"]);
        }
        if ($student_id != '') {
            $data1 = $data1->where('a.id', $student_id);
        }
        if ($appid != '') {
            $data1 = $data1->where('c.app_id', $appid);
        }
        if ($fname != '') {
            $data1 = $data1->where('b.first_name', $fname);
        }
        if ($lname != '') {
            $data1 = $data1->where('b.last_name', $lname);
        }
        if ($program_name != '') {
            $data1 = $data1->where('d.programs_name', $program_name);
        }
        if ($school_name != '') {
            $data1 = $data1->where('e.college_name', $school_name);
        }

        $data1 = $data1->join('student_profile as b', 'b.user_id', '=', 'a.id');
        $data1 = $data1->join('student_applications as c', 'c.student_id', '=', 'a.id');
        $data1 = $data1->join('college_programs as d', 'd.id', '=', 'c.program_id');
        $data1 = $data1->join('colleges  as e', 'e.id', '=', 'd.college_id');
        $data1 = $data1->join('payment_status as f', 'f.id', '=', 'c.payment_status');
        $data1 = $data1->orderBy('c.id', 'DESC');
        $data1 = $data1->paginate($limit);
        $data['agent_email']    =  DB::table('users')->select('id', 'name', 'user_type', 'email')->where('id', Auth::user()->id)->get();

        // return $data1;
        $data['application_list']  = $data1;
        return view('agent.application', $data);
    }
    public function students(Request $request)
    {
        $student_id  = $request->input('student_id');
        $email       = $request->input('email');
        $fname       = $request->input('fname');
        $lname       = $request->input('lname');
        $nationality = $request->input('nationality');
        $rpartner    = $request->input('rpartner');
        $recruiter_type = $request->input('recruiter_type');
        $education   = $request->input('education');
        $application = $request->input('application');
        $ids = [];

        $qty = $request->input('studentqty');
        if ($qty != '') {
            $limit = $qty;
        } else {
            $limit = 10;
        }

        $agent = Auth::user()->id;
        $data['total_apply_count']    =  DB::table('student_applications')->select('student_id', DB::raw("count(student_id) as count"))

            ->groupBy('student_id')
            ->get();


        if ($rpartner != '') {
            $associated_id1 =  DB::table('users')->select('id')->where('email', $rpartner)->get();
        } else {
            $associated_id     =  DB::table('users')->select('id')->whereIn('user_type', ['6', '7', '9'])->where('agent_id', $agent)->get();
        }

        if (!empty($associated_id)) {
            foreach ($associated_id as $id) {
                $ids[] = $id->id;
            }
            array_push($ids, $agent);
            //return $ids;
        } else {
            if (!empty($associated_id1)) {
                foreach ($associated_id1 as $id) {
                    $ids[] = $id->id;
                }
            }
        }


        $sdata     =  DB::table('users as a')->select('a.id', 'a.name', 'a.email', 'b.last_name', 'c.country as country_of_citizenship', 'b.highest_level_of_education', 'd.title as highes_education_name', 'a.user_type as recruiter_type', 'u.email as recruitment_partner')
            ->whereIn('a.agent_id', $ids)

            ->whereIn('a.user_type', ['5', '6', '8', '11', '12']);

        if ($student_id != '') {
            $sdata = $sdata->where('a.id', $student_id);
        }
        if ($email != '') {
            $sdata = $sdata->where('a.email', $email);
        }
        if ($fname != '') {
            $sdata = $sdata->where('a.name', $fname);
        }
        if ($lname != '') {
            $sdata = $sdata->where('b.last_name', $lname);
        }
        if ($nationality != '') {
            //echo $nationality;
            $sdata = $sdata->where('b.country_of_citizenship', $nationality);
        }

        if ($recruiter_type != '') {
            //echo $recruiter_type;
            $sdata = $sdata->where('a.user_type', $recruiter_type);
        }
        if ($education != '') {
            $education = $sdata->where('b.highest_level_of_education', $education);
        }
        /*if($application !='')
            {
              $sdata = $sdata->where('a.id', $application);
            }*/


        $sdata = $sdata->leftjoin('student_profile as b', 'b.user_id', '=', 'a.id');
        $sdata = $sdata->leftjoin('education as d', 'd.id', '=', 'b.highest_level_of_education');
        $sdata = $sdata->leftjoin('country as c', 'c.id', '=', 'b.country_of_citizenship');
        $sdata = $sdata->leftjoin('users as u', 'u.id', '=', 'a.agent_id');

        //$sdata = $sdata->leftjoin('student_applications as e', 'a.id', '=', 'e.student_id');
        // $sdata = $sdata->leftjoin('current_status as f', 'f.id', '=', 'e.student_id');

        $sdata = $sdata->orderBy('a.id', 'DESC');
        $sdata = $sdata->paginate($limit);

        $data['application_status'] =  DB::table('current_status')->select('id', 'status_title')->where('status', 1)->get();
        //$data['studentapplications'] = DB::table('student_applications')->select('id', 'student_id','application_status')->where('status',1)->orderBy('application_status','desc')->get()->unique('student_id');

        $data['student_list'] = $sdata;
        //return $data['studentapplications'];
        return view('agent.students', $data);
    }
    public function payments()
    {
        return view('agent.payments');
    }
    public function commissionStructure()
    {
        return view('agent.commission_structure');
    }
    public function manage_staff()
    {
        return view('agent.manage_staff');
    }

    public function growth_hub()
    {
        return view('agent.growth_hub');
    }
    public function agent_student_profile($student_id)
    {
        $studentid = $student_id;
        $data['studentdetails']    =  DB::table('student_profile as p')->select('p.*','extschool.*','p.id as rowid','p.user_id','u.email', 'c.country as country_of_institution_name', 's.state as school_province', 'city.city as school_city_town','c2.country as country_of_institution_name2','s2.state as school_province2','city2.city as school_city_town2','c3.country as country_of_institution_name3','s3.state as school_province3','city3.city as school_city_town3')
            ->leftjoin('users as u', 'u.id', '=', 'p.user_id')
            ->leftjoin('country as c', 'c.id', '=', 'p.country')
            ->leftjoin('state as s', 's.id', '=', 'p.province_state')
            ->leftjoin('city as city', 'city.id', '=', 'p.city_town')
            ->leftjoin('other_schools_attended  as extschool', 'extschool.user_id', '=', 'p.user_id')

            ->leftjoin('country as c2', 'c2.id', '=', 'extschool.country_of_institution2')
            ->leftjoin('state as s2', 's2.id', '=', 'extschool.school_province2')
            ->leftjoin('city as city2', 'city2.id', '=', 'extschool.school_city_town2')
            
            ->leftjoin('country as c3', 'c3.id', '=', 'extschool.country_of_institution3')
            ->leftjoin('state as s3', 's3.id', '=', 'extschool.school_province3')
            ->leftjoin('city as city3', 'city3.id', '=', 'extschool.school_city_town3')
            ->where('p.user_id', $studentid)->get();


        $data['applications']    =  DB::table('student_applications as sp')->select('sp.app_id', 'cp.programs_name', 'c.college_name')
            ->leftjoin('college_programs  as cp', 'cp.id', '=', 'sp.program_id')
            ->leftjoin('colleges  as c', 'c.id', '=', 'cp.college_id')
            ->where('student_id', $studentid)->get();
           //return $data; 
        $data['applications_count']    =  DB::table('student_applications as sp')->select('app_id')
        ->where('student_id', $studentid)->get()->count();
        return view('agent.student_profile', $data);
    }

    public function agent_student_profile_update(Request $request)
    { 
       
        $data = array(
                "first_name" => "$request->first_name",
                "middle_name" => $request->middle_name,
                "last_name" => $request->last_name,
                "family_name" => $request->family_name,
                "date_of_birth" => $request->date_of_birth,
                "first_language" => $request->first_language,
                "more_background_details" => $request->more_background_details,
                "passport_number" => $request->passport_number,
                "marital_status" => $request->marital_status,
                "gender" => "$request->gender",
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
                "english_exam_type" => $request->exam_type,
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

            );
           
            $res =  DB::table('student_profile')
            ->where('id', $request->id)->update($data);
            $other_school_data = array(
                "country_of_institution2" => $request->country_of_institution2,
                "name_of_institution2" => $request->name_of_institution2,
                "level_of_education2" => $request->level_of_education2,
                "primary_language_of_instruction2" => $request->primary_language_of_instruction2,
                "attended_institution_from2" => $request->attended_institution_from2,
                "attended_institution_to2" => $request->attended_institution_to2,
                "degree_name2" => $request->degree_name2,
                "graduated_institution2" => $request->graduated_institution2,
                "graduation_date2" => $request->graduation_date2,
                "physical_certificate_for_this_degree2" => $request->physical_certificate_for_this_degree2,
                "school_address2" => $request->school_address2,
                "school_province2" => $request->school_province2,
                "school_city_town2" => $request->school_city_town2,
                "school_postal_code2" => $request->school_postal_code2,

                "country_of_institution3" => $request->country_of_institution3,
                "name_of_institution3" => $request->name_of_institution3,
                "level_of_education3" => $request->level_of_education3,
                "primary_language_of_instruction3" => $request->primary_language_of_instruction3,
                "attended_institution_from3" => $request->attended_institution_from3,
                "attended_institution_to3" => $request->attended_institution_to3,
                "degree_name3" => $request->degree_name3,
                "graduated_institution3" => $request->graduated_institution3,
                "graduation_date3" => $request->graduation_date3,
                "physical_certificate_for_this_degree3" => $request->physical_certificate_for_this_degree3,
                "school_address3" => $request->school_address3,
                "school_province3" => $request->school_province3,
                "school_city_town3" => $request->school_city_town3,
                "school_postal_code3" => $request->school_postal_code3,
                "user_id" => $request->user_id
            );

            $checkuser  =  DB::table('other_schools_attended')->select('id')
            ->where('user_id', $request->user_id)->first();
            if(!empty($checkuser))
            {
                 DB::table('other_schools_attended')
                 ->where('user_id', $request->user_id)
                 ->update($other_school_data);
            }else{
                 DB::table('other_schools_attended')->insert($other_school_data);   
            } 
        if ($res == 1) {
            $msg = array(
                'message'  => "success",
                'student_id'  => $request->user_id
            );
            //log record  other_schools_attended 
            DB::table('student_records')->insert([
                'title'          => 'Profile Updated',
                'text'           => "Profile Updated",
                'agent_id'       =>  0,
                'student_id'     =>  $request->input('user_id'),
                'app_id'         => 0
            ]);
            echo json_encode($msg);
            die;
        } else {
            $msg = array(
                'message'  => "failed",
            );
            echo json_encode($msg);
            die;
        }
    }

    public function search_and_apply($id)
    {
        $data['applications_count']    =  DB::table('student_applications as sp')->select('app_id')
        ->where('student_id', $id)->get()->count();
        $student_details  =  DB::table('users as a')->select('a.id', 'a.email', 'b.first_name', 'b.middle_name', 'b.last_name', 'b.phone_number', 'b.study_permit_visa', 'b.country', 'b.country_of_education', 'b.highest_level_of_education', 'b.grading_scheme', 'b.english_exam_type', 'b.lisenting', 'b.reading', 'b.writing', 'b.speaking')
            ->join('student_profile as b', 'b.user_id', '=', 'a.id')
            ->where('a.id', $id)->first();
        $data['student_details'] = $student_details;

        if (!empty($student_details->study_permit_visa) && ($student_details->study_permit_visa != '')) {
            $study_permit_visa = $student_details->study_permit_visa;
        }

        if (!empty($student_details->country) && ($student_details->country != '')) {
            $country = $student_details->country;
        }

        if (!empty($student_details->country_of_education) && ($student_details->country_of_education != '')) {
            $country_of_education = $student_details->country_of_education;
        }

        if (!empty($student_details->highest_level_of_education) && ($student_details->highest_level_of_education != '')) {
            $highest_level_of_education = $student_details->highest_level_of_education;
        }

        if (!empty($student_details->grading_scheme) && ($student_details->grading_scheme != '')) {
            $grading_scheme = $student_details->grading_scheme;
        }

        if (!empty($student_details->english_exam_type) && ($student_details->english_exam_type != '')) {
            $english_exam_type = $student_details->english_exam_type;
        }

        if (!empty($student_details->lisenting) && ($student_details->lisenting != '')) {
            $lisenting = $student_details->lisenting;
        }

        if (!empty($student_details->reading) && ($student_details->reading != '')) {
            $reading = $student_details->reading;
        }

        if (!empty($student_details->writing) && ($student_details->writing != '')) {
            $writing = $student_details->writing;
        }

        if (!empty($student_details->speaking) && ($student_details->speaking != '')) {
            $speaking = $student_details->speaking;
        }

        $res = DB::table('colleges as d');
        $res =  $res->join('college_programs as b', 'b.college_id', '=', 'd.id');
        if (!empty($english_exam_type)) {
            if (($english_exam_type == 3) || ($english_exam_type == 4)) {
                if (!empty($reading)) {
                    $res = $res->where('c.reading', $reading);
                }
                if (!empty($lisenting)) {
                    $res = $res->where('c.listening', $lisenting);
                }
                if (!empty($speaking)) {
                    $res = $res->where('c.speaking', $speaking);
                }
                if (!empty($writing)) {
                    $res = $res->where('c.writing', $writing);
                }
                $res =  $res->leftjoin('college_programs_test_scores as c', 'c.college_programs_id', '=', 'b.id');
            }
        }

        if (!empty($study_permit_visa)) {
            $res = $res->whereJsonContains('d.valid_study_permit_visa', $study_permit_visa);
        }

        if (!empty($country)) {
            echo $country;
            $res = $res->whereJsonContains('d.eligible_nationality', "$country");
        }

        if (!empty($country_of_education)) {
            $res = $res->whereJsonContains('d.eligible_education_country', "$country_of_education");
        }

        if (!empty($highest_level_of_education)) {
            $res = $res->whereJsonContains('d.education_level', "$highest_level_of_education");
        }

        if (!empty($grading_scheme)) {
            //echo $grading_scheme;
            $res = $res->whereJsonContains('d.grading_scheme', "$grading_scheme");
        }

        if (!empty($english_exam_type)) {
            $res = $res->whereJsonContains('d.english_exam_type', "$english_exam_type");
        }
        $res = $res->select('d.id')->distinct('d.id');
        $res = $res->where('d.status', 1);
        $res = $res->get();

        if ((!empty($res)) && (count($res)) > 0) {

            foreach ($res as $ids) {

                $iDs[] = $ids->id;
            }

            if (!empty($iDs)) {

                $data['collages']  = College::with(['courses' => function ($query) {
                    $query->select('*');
                }])
                    ->select('id', 'college_logo', 'college_name', 'college_country', 'college_address')
                    ->whereIn('id', $iDs)
                    ->where('status', 1)->paginate(10);
                $data['courseTotal'] =  DB::table('college_programs')->whereIn('college_id', $iDs)->count();
                $data['canapply'] =  'canaaply';
                // return $data;
                return view('agent.search_and_apply', $data);
            }
        } else {
            $data['collages'] = 'not_found';
            return view('agent.search_and_apply', $data);
        }
    }



    public function wallet()
    {
        return view('agent.wallet');
    }
    public function training_request()
    {
        return view('agent.training_request');
    }
    public function students_applications($id)
    {
        echo $id;
        return view('agent.students_applications');
    }
    public function invoices(Request $request)
    {
         $qty = $request->input('qty');
        if ($qty != '') {
            $limit = $qty;
        } else {
            $limit = 25;
        }
        $data['invice_list']         =  DB::table('invice')->select('*')->orderBy('id', 'DESC')->paginate($limit);
        return view('agent.invoices',$data);
    }
    public function team(Request $request)
    {
        $qty = $request->input('qtyteam');
        if ($qty != '') {
            $limit = $qty;
        } else {
            $limit = 10;
        }
        $data['teams_list']         =  DB::table('teams as a')->select('a.id', 'a.name', 'a.email', 'country_code', 'mobile', 'user_id', 'is_admin', 'status')
            ->join('users as u', 'u.id', '=', 'a.user_id')
            ->where('status', 1)->where('user_type', 7)->where('a.agent_id', Auth::user()->id)->orderBy('name', 'ASC')->paginate($limit);
        return view('agent.team', $data);
    }
    public function agent_my_reminders()
    {
        return view('agent.my_reminders');
    }
    public function template()
    {
        return view('agent.template');
    }
    public function knowledge_base()
    {
        return view('agent.knowledge_base');
    }
    public function student_profile_application($student_id)
    {
        $data['student_details']  =  DB::table('users as a')->select('a.id', 'a.email', 'b.first_name', 'b.middle_name', 'b.last_name', 'b.phone_number', 'b.study_permit_visa', 'b.country', 'b.country_of_education', 'b.highest_level_of_education', 'b.grading_scheme', 'b.english_exam_type', 'b.lisenting', 'b.reading', 'b.writing', 'b.speaking')
            ->join('student_profile as b', 'b.user_id', '=', 'a.id')
            ->where('a.id', $student_id)->first();

        $data['total_amount']  =  DB::table("student_applications")->where('student_id', $student_id)->sum('payment_amount');
        $data['totalcount']    =  DB::table("student_applications")->where('student_id', $student_id)->count('id');

        $data['aplication_details']  =  DB::table('student_applications as a')->select('a.id', 'app_id', 'payment_status', 'status_name', 'programs_name', 'program_college_name', 'college_id', 'earliest_intake_date', 'open_date', 'application_fee_min', 'c.status', 'd.status_title as current_status')
            ->join('payment_status as b', 'b.id', '=', 'a.payment_status')
            ->join('college_programs as c', 'c.id', '=', 'a.program_id')
            ->join('current_status as d', 'd.id', '=', 'a.application_status')
            ->where('a.student_id', $student_id)->where('a.status', 1)
            ->paginate('5');
        return view('agent.student_profile_application', $data);
    }

    public function student_profile_application_delete($id)
    {

        $status = array(
            'status'      => 0
        );
        DB::table('student_applications')->where('id', $id)->update($status);
        return redirect(url()->previous())->with('success', 'Application Successfully Deleted');
    }

    public function student_payment($student_id)
    {
        $data['student_details']  =  DB::table('users as a')->select('a.id', 'a.email', 'b.first_name', 'b.middle_name', 'b.last_name', 'b.phone_number', 'b.study_permit_visa', 'b.country', 'b.country_of_education', 'b.highest_level_of_education', 'b.grading_scheme', 'b.english_exam_type', 'b.lisenting', 'b.reading', 'b.writing', 'b.speaking')
            ->join('student_profile as b', 'b.user_id', '=', 'a.id')
            ->where('a.id', $student_id)->first();
        $data['payment_details']  =  DB::table('student_applications as a')->select('a.*', 'p.*', 'c.status_title as app_status', 'd.status_name as payment_status')
            ->join('payments as p', 'a.app_id', '=', 'p.appid')
            ->join('current_status as c', 'c.id', '=', 'a.application_status')
            ->join('payment_status as d', 'd.id', '=', 'a.payment_status')
            ->where('a.student_id', $student_id)->paginate(10);

        return view('agent.student_payment', $data);
    }
    public function student_application_review($app_id)
    {
        $data['student_details']  =  DB::table('users as a')->select('a.id', 'app_status.status_title', 'application_status', 'ps.status_name as payment_status', 'c.program_id as progoramid', 'certificate_img', 'passport_img', 'd.*', 'email', 'g.country as country_of_citizenship', 'h.country as student_college_country', 'edu.title as highest_level_of_education', 'app_id', 'd.id as progoramid', 'i.country as college_country', 'e.college_address', 'f.title as level_of_education', 'first_name', 'middle_name', 'last_name', 'date_of_birth', 'first_language', 'passport_number', 'marital_status', 'gender', 'address', 'n.city as city_town', 'kk.country as country', 'mm.state as province_state', 'postal_code', 'phone_number', 'k.country as country_of_education', 'o.grad_name as grading_scheme', 'grade_average', 'graduated_from_most_recent_school', 'j.country as country_of_institution', 'name_of_institution', 'primary_language_of_instruction', 'attended_institution_from', 'attended_institution_to', 'degree_name', 'graduated_institution', 'graduation_date', 'physical_certificate_for_this_degree', 'school_address', 'l.city as school_city_town', 'm.state as school_province', 'school_postal_code', 'b.english_exam_type', 'date_of_exam', 'd.doc_requirement', 'college_logo', 'b.user_id as student_id')
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
 
        if (!empty($doc_req)) {
            $total_doc = count($doc_req);
            $data['doc_requirment']  =  DB::table('documents_requirment')->select('id', 'document_name', 'description', 'required_field', 'upload_status')->whereIn('id', $doc_req)->where('status', 1)->get();
        }
      
        $data['upload_doc_details']  =  DB::table('student_uploaded_docs')->select('doc_id', 'image_name')->where('app_id', $app_id)->get();
        $data['student_records']     =  DB::table('student_records')->select('title', 'text', 'created_at')->where('app_id', $app_id)->orderBy('id', 'desc')->get();
        $upload_doc_count            =  DB::table('student_uploaded_docs')->select('doc_id')->where('app_id', $app_id)->count();
        $data['missing_doc'] = $total_doc - $upload_doc_count;

        $data['upload_doc_review_count']            =  DB::table('student_uploaded_docs')->select('id')->where('app_id', $app_id)->where('is_verified', 0)->count();
        $data['upload_doc_verifiyed_count']         =  DB::table('student_uploaded_docs')->select('id')->where('app_id', $app_id)->where('is_verified', 1)->count();
        $data['upload_doc_canciled_count']          =  DB::table('student_uploaded_docs')->select('id')->where('app_id', $app_id)->where('is_verified', 2)->count();
        //return $missing_doc;
        return view('agent.student_application_review', $data);
    }

    public function student_certificate_upload(Request $request)
    {

        /*$validatedData = $request->validate([
            //'file' => 'required|jpg,jpeg,png,pdf|max:2048',
    
           ]);*/


        $appid      = $request->input('appid');
        $student_id = $request->input('student_id');
        $doc_type   = $request->input('doc_type');
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;

        $request->file('file')->storeAs('public/agent_documents/' . $appid, $filename);

        $img_url =  asset("agentdoc/$appid/$filename");
        echo '<img src="' . $img_url . '" alt="img" width="150">';
        $data['upload_doc_status']  =  DB::table('student_uploaded_docs')->select('id')->where('doc_id', $doc_type)->where('app_id', $appid)->where('student_id', $student_id)->get();

        if (!empty($data['upload_doc_status'][0]->id)) {
            $id = $data['upload_doc_status'][0]->id;
            $data = array(
                'image_name'     => $filename,
                'updated_at'     => Carbon::now()->toDateTimeString(),
            );
            $res =  DB::table('student_uploaded_docs')->where('id', $id)->update($data);
            if ($res) {
                $title = "updated";
            }
        } else {
            $insert = DB::table('student_uploaded_docs')->insert([
                'doc_id'       => $doc_type,
                'image_name'   => $filename,
                'app_id'       => $appid,
                'student_id'   => $student_id
            ]);
            if ($insert) {
                $title = " uploaded";
            }
        }
        //log record
        $doc_name  =  DB::table('documents_requirment')->select('document_name')->where('id', $doc_type)->first();

        DB::table('student_records')->insert([
            'title'          => $doc_name->document_name . $title,
            'text'           => $doc_name->document_name . ' ' . $title . " successfully ",
            'agent_id'       =>  0,
            'student_id'     =>  $student_id,
            'app_id'         => $appid
        ]);
    }

    public function student_passport_upload(Request $request)
    {
        $appid      = $request->input('appid_pass');
        $student_id = $request->input('student_id');

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;

        $request->file('file')->storeAs('public/agent_documents/' . $appid, $filename);

        $img_url =  asset("agentdoc/$appid/$filename");
        echo '<img src="' . $img_url . '" alt="img" width="150">';
        $data = array(
            'passport_img'             => $filename,
            'passport_img_upload_date' => Carbon::now()->toDateTimeString(),
        );
        DB::table('student_applications')->where('app_id', $appid)->update($data);
        //log record
        DB::table('student_records')->insert([
            'title'          => 'Passport Upload',
            'text'           => "Passport Uploaded ",
            'agent_id'       =>  0,
            'student_id'     => $student_id,
            'app_id'         => $appid
        ]);
    }

    //student notes
    public function student_notes(Request $request)
    {
        $title      = $request->input('title');
        $student_id = $request->input('student_id');
        $appid      = $request->input('appid');
        $notes      = $request->input('notes');


        $res =  DB::table('notes')->insert([
            'title'          => "$title",
            'notes'          => "$notes",
            'app_id'         => $appid,
            'student_id'     => $student_id
        ]);
        if ($res == 1) {
            $sdata  =  DB::table('student_profile')->select('first_name', 'middle_name', 'last_name')->where('user_id', $student_id)->first();
            if (!empty($sdata)) {
                $name = $sdata->first_name;
            }
            if (!empty($sdata->middle_name)) {
                $mname = $sdata->middle_name;
            }
            if (!empty($sdata->last_name)) {
                $lname = $sdata->last_name;
            }
            $fname = $name . ' ' . $mname . ' ' . $lname;

            Mail::to(users: "nirajkumar11288@gmail.com")->send(new StudentNotes($title, $notes, $appid, $fname));
            //return $sdata;
            return "success";
        } else {
            return "failed";
        }
    }

    public function recruitment_partners()
    {
        return view('agent.recruitment_partners');
    }
    public function recruitment_partner_id()
    {
        return view('agent.recruitment_partner_id');
    }
    public function college_details()
    {
        return view('agent.college_details');
    }

    public function programs_college()
    {
        return view('agent.programs_college');
    }

    public function program_filter_on_college_details(Request $request)
    {
        $sub_categories = $request->input('program_level');
        $post_discipline = $request->input('descipline');
        $inakes_date    = $request->input('inteke');
        $program_order  = $request->input('program_order');
        $programs_name  = $request->input('searchstr');
        if (($program_order != '') && ($sub_categories == '') && ($post_discipline) && ($inakes_date == '') && ($programs_name)) {
            if (($program_order != '') && ($program_order == 'tution_asc')) {
                $columns = 'tuition_fee_min';
                $orderby = 'ASC';
            }
            if (($program_order != '') && ($program_order == 'tution_desc')) {
                $columns = 'tuition_fee_min';
                $orderby = 'DESC';
            }
            if (($program_order != '') && ($program_order == 'program_asc')) {
                $columns = 'programs_name';
                $orderby = 'ASC';
            }
            if (($program_order != '') && ($program_order == 'program_desc')) {
                $columns = 'programs_name';
                $orderby = 'DESC';
            }
            $data = DB::table('college_programs')->where('status', 1)->select('id', 'college_id', 'program_logo', 'programs_name', 'program_college_name', 'earliest_intake_date', 'tuition_fee_min', 'application_fee_min')->orderBy($columns, $orderby)->get();
            return json_decode($data);
        }

        if (($program_order != '') && ($program_order == 'tution_asc')) {
            $columns = 'tuition_fee_min';
            $orderby = 'ASC';
        }
        if (($program_order != '') && ($program_order == 'tution_desc')) {
            $columns = 'tuition_fee_min';
            $orderby = 'DESC';
        }
        if (($program_order != '') && ($program_order == 'program_asc')) {
            $columns = 'programs_name';
            $orderby = 'ASC';
        }
        if (($program_order != '') && ($program_order == 'program_desc')) {
            $columns = 'programs_name';
            $orderby = 'DESC';
        } else {
            $columns = 'programs_name';
            $orderby = 'ASC';
        }

        $data = DB::table('college_programs');

        if (!empty($inakes_date)) {
            $data = $data->where('earliest_intake_date', "$inakes_date");
        }
        if (!empty($post_discipline)) {
            $data = $data->whereJsonContains('post_secondary_discipline', [$post_discipline]);
        }
        if (!empty($sub_categories)) {
            $data = $data->whereJsonContains('post_secondary_sub_categories', [$sub_categories]);
        }

        if ($programs_name != 'NA') {
            $data = $data->where('programs_name', $programs_name);
        }

        $data = $data->where('status', 1);
        $data = $data->select('id', 'college_id', 'program_logo', 'programs_name', 'program_college_name', 'earliest_intake_date', 'tuition_fee_min', 'application_fee_min')->orderBy($columns, $orderby)->get();
        // print_r($data);
        if (count($data) > 0) {
            return json_decode($data);
        } else {
            $data = "notfount";
            return $data;
        }
    }

    public function agentProgress()
    {
        return view('agent.agentProgress');
    }


    public function agent_college_details($id)
    {   $college_details = array();
        $data['college_details']  = College::with(['courses' => function ($query) {
            $query->select('*');
        }])
            ->select('id', 'college_logo', 'college_name', 'college_country', 'college_address', 'college_about_details', 'application_fee', 'average_graduate_program', 'average_undergraduate_program', 'cost_of_living', 'tuition', 'founded', 'school_id', 'provider_id_number', 'institution_type', 'engineering_and_technology', 'health_sciences_medicine_nursing_paramedic_and_kinesiology', 'business_management_and_economics', 'other', 'year_post_secondary_certificate', 'year_undergraduate_diploma', 'map_location', 'map_streetview')
            ->where('id', $id)
            ->where('status', 1)->get();
        $data['gallery']               =  DB::table('college_pictures')->select('id', 'name', 'url')->where('college_id', $id)->get();
        $data['question_answer']       =  DB::table('college_feature_questions')->select('id', 'feature_questions', 'feature_answer')->where('college_id', $id)->get();

        $data['inakes_date']          =  DB::table('college_programs')->select('earliest_intake_date')->WhereNotNull('earliest_intake_date')->orderBy('earliest_intake_date', 'ASC')->groupBy('earliest_intake_date')->get();
        $data['post_discipline']      =  DB::table('post_secondary_discipline')->select('id', 'title')->where('status', 1)->orderBy('title', 'ASC')->get();
        $data['sub_categories']       =  DB::table('post_secondary_sub_categories')->select('id', 'sub_cat_name')->where('status', 1)->orderBy('sub_cat_name', 'ASC')->get();
        $data['student_list']         =  DB::table('users')->select('id', 'name')->where('user_type', 5)->where('agent_id', Auth::user()->id)->orderBy('name', 'ASC')->get();
        if(count($data['college_details']) >0)
        {
            $data['college_details'] = $data['college_details'];
        }else{
            $data['college_details']  =["collegenotfound"];
        }  
      
       return view('agent.college_details', $data);
    }

    public function agent_program_details($id)
    {
        $data['programdetails']        =  DB::table('college_programs')->select('*')->where('college_id', $id)->get();
        $data['gallery']               =  DB::table('college_pictures')->select('id', 'name', 'url')->where('college_id', $id)->get();
        $data['score']                 =  DB::table('college_programs_test_scores')->select(
            'id',
            'test_scores_name',
            'test_scores_number',
            'reading',
            'writing',
            'listening',
            'speaking'
        )->where('college_programs_id', $id)->get();
        $data['question_answer']       =  DB::table('college_feature_questions')->select('id', 'feature_questions', 'feature_answer')->where('college_id', $id)->get();
        $data['profile_updated']       =  DB::table('student_profile')->select('id')->where('user_id', Auth::user()->id)->first();
        $data['similar_programs']      =  DB::table('college_programs')->select('id', 'program_logo', 'programs_name', 'program_college_name', 'earliest_intake_date', 'tuition_fee_max', 'application_fee_max')->where('programs_name', 'like', '%' . $data['programdetails'][0]->programs_name . '%')->inRandomOrder()->get();

        return view('agent.programs_details', $data);
    }

    public function get_eligibility_filter(Request $req)
    {
        $data['applications_count']    =  DB::table('student_applications as sp')->select('app_id')
        ->where('student_id', $req->input('student_id'))->get()->count();
        $studentfilter       =  $req->input('student_filter');
        $student_id          =  $req->input('student_id');
        $visa_permit         =  $req->input('visa_permit');
        $nationality         =  $req->input('nationality');
        $education_country   =  $req->input('education_country');
        $education_lavel     =  $req->input('education_lavel');
        $grading_schem       =  $req->input('grading_schem');
        $examt_ype           =  $req->input('exam_type');

        $reading             =  $req->input('reading');
        $listening           =  $req->input('listening');
        $speaking            =  $req->input('speaking');
        $writing             =  $req->input('writing');

        $data['student_details']  =  DB::table('users as a')->select('a.id', 'a.email', 'b.first_name', 'b.middle_name', 'b.last_name', 'b.phone_number', 'b.study_permit_visa', 'b.country', 'b.country_of_education', 'b.highest_level_of_education', 'b.grading_scheme', 'b.english_exam_type', 'b.lisenting', 'b.reading', 'b.writing', 'b.speaking')
            ->join('student_profile as b', 'b.user_id', '=', 'a.id')
            ->where('a.id', $student_id)->first();

        $res = DB::table('colleges as a');
        $res =  $res->join('college_programs as b', 'b.college_id', '=', 'a.id');

        if (($examt_ype == 3) || ($examt_ype == 4)) {
            if (!empty($reading)) {
                $res = $res->where('c.reading', $reading);
            }
            if (!empty($listening)) {
                $res = $res->where('c.listening', $listening);
            }
            if (!empty($speaking)) {
                $res = $res->where('c.speaking', $speaking);
            }
            if (!empty($writing)) {
                $res = $res->where('c.writing', $writing);
            }
            $res =  $res->leftjoin('college_programs_test_scores as c', 'c.college_programs_id', '=', 'b.id');
        }

        if (!empty($visa_permit)) {
            $res = $res->whereJsonContains('a.valid_study_permit_visa', $visa_permit);
        }

        if (!empty($nationality)) {
            $res = $res->whereJsonContains('a.eligible_nationality', [$nationality]);
        }

        if (!empty($education_country)) {
            $res = $res->whereJsonContains('a.eligible_education_country', [$education_country]);
        }

        if (!empty($education_lavel)) {
            $res = $res->whereJsonContains('a.education_level', [$education_lavel]);
        }

        if (!empty($grading_schem)) {
            $res = $res->whereJsonContains('a.grading_scheme', [$grading_schem]);
        }

        if (!empty($examt_ype)) {
            $res = $res->whereJsonContains('a.english_exam_type', [$examt_ype]);
        }
        $res = $res->select('a.id')->distinct('a.id');
        $res = $res->where('a.status', 1);
        $res = $res->get();

        if ((!empty($res)) && (count($res)) > 0) {

            foreach ($res as $ids) {

                $iDs[] = $ids->id;
            }
            if (!empty($iDs)) {

                $data['collages']  = College::with(['courses' => function ($query) {
                    $query->select('*');
                }])
                    ->select('id', 'college_logo', 'college_name', 'college_country', 'college_address')
                    ->whereIn('id', $iDs)
                    ->where('status', 1)->paginate(10);
                $data['courseTotal'] =  DB::table('college_programs')->whereIn('college_id', $iDs)->count();
                $data['canapply'] =  'canaaply';
                if ($studentfilter == 'student_filter') {
                    
                    return view('agent.search_and_apply', $data);
                } else {
                    return view('agent.program', $data);
                }
            }
        } else {
            $data['collages'] = 'not_found';
            if ($studentfilter == 'student_filter') {
                return view('agent.search_and_apply', $data);
            } else {
                return view('agent.program', $data);
            }
        }
    }

    public function collage_filter(Request $req)
    {
        $studentfilter              =  $req->input('student_filter');
        $student_id                 =  $req->input('student_id');
        $collage_country            =  $req->input('collage_country');
        $work_permit_status         =  $req->input('work_permit_status');
        $collage_state              =  $req->input('collage_state');
        $campus_city_name           =  $req->input('campus_city_name');
        $univercity                 =  $req->input('univercity');
        $collage                    =  $req->input('collage');
        $high_school                =  $req->input('high_school');
        $english_institute          =  $req->input('english_institute');
        $collage_name               =  $req->input('college');

        $data['student_details']  =  DB::table('users as a')->select('a.id', 'a.email', 'b.first_name', 'b.middle_name', 'b.last_name', 'b.phone_number', 'b.study_permit_visa', 'b.country', 'b.country_of_education', 'b.highest_level_of_education', 'b.grading_scheme', 'b.english_exam_type', 'b.lisenting', 'b.reading', 'b.writing', 'b.speaking')
            ->join('student_profile as b', 'b.user_id', '=', 'a.id')
            ->where('a.id', $student_id)->first();

        $arr = array(
            'collagename' => $collage_name,
            'campus_city' => $campus_city_name,
            'college_country' => $collage_country,
            'provinces_states' => $collage_state,
            'work_permit_available' => $work_permit_status,
            'univercity' => $univercity,
            'collage' => $collage,
            'high_school' => $high_school,
            'english_institute' => $english_institute,
        );
        //print_r($arr);die;


        $ids = DB::table('colleges');
        if (!empty($collage_name)) {
            $ids = $ids->whereIn('id', $collage_name);
        }
        if (!empty($campus_city_name)) {
            $ids = $ids->whereJsonContains('campus_city', $campus_city_name);
        }
        if (!empty($collage_country)) {
            $ids = $ids->whereIn('college_country', $collage_country);
        }
        if (!empty($collage_state)) {
            $ids = $ids->whereJsonContains('provinces_states', $collage_state);
        }
        if (!empty($work_permit_status)) {
            $ids = $ids->where('work_permit_available', [$work_permit_status]);
        }
        if (!empty($univercity)) {
            $ids = $ids->whereJsonContains('college_type', [$univercity]);
        }
        if (!empty($collage)) {
            $ids = $ids->whereJsonContains('college_type', [$collage]);
        }
        if (!empty($high_school)) {
            $ids = $ids->whereJsonContains('college_type', [$high_school]);
        }
        if (!empty($english_institute)) {
            $ids = $ids->whereJsonContains('college_type', [$english_institute]);
        }
        $ids = $ids->where('status', 1);
        $ids = $ids->select('id');
        $ids = $ids->get();
        //return $ids;
        if (count($ids) > 0) {

            foreach ($ids as $res) {

                $iDs[] = $res->id;
            }

            $data['collages']  = College::with(['courses' => function ($query) {
                $query->select('*');
            }])
                ->select('id', 'college_logo', 'college_name', 'college_country', 'college_address')
                ->whereIn('id', $iDs)
                ->where('status', 1)->paginate(10);
            $data['courseTotal'] =  DB::table('college_programs')->whereIn('college_id', $iDs)->count();
            $data['canapply'] =  'canaaply';

            if ($studentfilter == 'student_filter') {
                return view('agent.search_and_apply', $data);
            } else {
                return view('agent.program', $data);
            }
        } else {
            $data['collages'] = 'not_found';
            if ($studentfilter == 'student_filter') {
                return view('agent.search_and_apply', $data);
            } else {
                return view('agent.program', $data);
            }
        }
    }


    public function programfilter(Request $req)
    {
        $studentfilter       =  $req->input('student_filter');
        $student_id          =  $req->input('student_id');
        $college_name            =  $req->input('collage_name');
        $inakes_date             =  $req->input('inakes_date');
        $post_discipline         =  $req->input('post_discipline');
        $sub_categories          =  $req->input('sub_categories');
        $living_cost             =  $req->input('living_cost');
        $tuition_free            =  $req->input('tuition_free');
        $applocation_free        =  $req->input('applocation_free');

        $data['student_list']         =  DB::table('users')->select('id', 'name')->where('user_type', 5)->where('agent_id', Auth::user()->id)->orderBy('name', 'ASC')->get();

        $data['student_details']  =  DB::table('users as a')->select('a.id', 'a.email', 'b.first_name', 'b.middle_name', 'b.last_name', 'b.phone_number', 'b.study_permit_visa', 'b.country', 'b.country_of_education', 'b.highest_level_of_education', 'b.grading_scheme', 'b.english_exam_type', 'b.lisenting', 'b.reading', 'b.writing', 'b.speaking')
            ->join('student_profile as b', 'b.user_id', '=', 'a.id')
            ->where('a.id', $student_id)->first();

        $arr = array(
            'college_name' => $college_name,
            'inakes_date' => $inakes_date,
            'post_discipline' => $post_discipline,
            'sub_categories' => $sub_categories,
            'living_cost' => $living_cost,
            'tuition_free' => $tuition_free,
            'applocation_free' => $applocation_free,
        );
        //print_r($arr);die;

        $ids = DB::table('college_programs');
        if (!empty($college_name)) {
            $ids = $ids->whereIn('college_id', $college_name);
        }
        if (!empty($inakes_date)) {
            $ids = $ids->whereIn('earliest_intake_date', $inakes_date);
        }
        if (!empty($post_discipline)) {
            $ids = $ids->whereJsonContains('post_secondary_discipline', $post_discipline);
        }
        if (!empty($sub_categories)) {
            $ids = $ids->whereJsonContains('post_secondary_sub_categories', $sub_categories);
        }

        if (!empty($living_cost)) {
            $ids = $ids->where('include_living_costs', $living_cost);
        }
        if (!empty($tuition_free)) {
            $fee = explode(';', $tuition_free);
            $ids = $ids->where('tuition_fee_min', '>=', $fee[0]);
        }
        if (!empty($tuition_free)) {
            $fee = explode(';', $tuition_free);
            $ids = $ids->where('tuition_fee_max', '<=', $fee[1]);
        }
        if (!empty($applocation_free)) {
            $aplicationfee = explode(';', $applocation_free);
            $ids = $ids->where('application_fee_min', '>=', $aplicationfee[0]);
        }
        if (!empty($applocation_free)) {
            $aplicationfee = explode(';', $applocation_free);
            $ids = $ids->where('application_fee_max', '<=', $aplicationfee[1]);
        }
        $ids = $ids->where('status', 1);
        $ids = $ids->select('college_id');
        $ids = $ids->get();
        //return $ids;
        if (count($ids) > 0) {

            foreach ($ids as $res) {

                $iDs[] = $res->college_id;
            }

            $data['collages']  = College::with(['courses' => function ($query) {
                $query->select('*');
            }])
                ->select('id', 'college_logo', 'college_name', 'college_country', 'college_address')
                ->whereIn('id', $iDs)
                ->where('status', 1)->paginate(10);
            $data['courseTotal'] =  DB::table('college_programs')->whereIn('college_id', $iDs)->count();
            $data['canapply'] =  'canaaply';
            // return $data['collages'];

            if ($studentfilter == 'student_filter') {
                return view('agent.search_and_apply', $data);
            } else {
                return view('agent.program', $data);
            }
        } else {
            $data['collages'] = 'not_found';
            if ($studentfilter == 'student_filter') {
                return view('agent.search_and_apply', $data);
            } else {
                return view('agent.program', $data);
            }
        }
    }

    public function getstate(Request $req)
    {
        $counrty_ids =  $req->input('ids');
        if (is_array($counrty_ids)) {
            $states        =  DB::table('state')->select('id', 'state')->whereIn('country_id', $counrty_ids)->get();
        } else {
            $states        =  DB::table('state')->select('id', 'state')->where('country_id', $counrty_ids)->get();
        }
        if (count($states) > 0) {
            $options[] = "<option  value=''>Select State</option>";
            foreach ($states as $state) {
                $options[] = "<option  data-id='$state->id' value='$state->id'>$state->state</option>";
            }
            return $options;
        } else {
            return 'not_found';
            die;
        }
    }

    public function getcity(Request $req)
    {
        $state_ids =  $req->input('ids');
        if (is_array($state_ids)) {
            $citi        =  DB::table('city')->select('id', 'city')->whereIn('state_id', $state_ids)->get();
        } else {
            $citi        =  DB::table('city')->select('id', 'city')->where('state_id', $state_ids)->get();
            //return $citi;
        }
        if (count($citi) > 0) {
            $options[] = "<option  value=''>Select City</option>";
            foreach ($citi as $cty) {
                $options[] = "<option  data-id='$cty->id' value='$cty->id'>$cty->city</option>";
            }
            return $options;
        } else {
            return 'not_found';
            die;
        }
    }


    public function student_registration_by_agent(Request $request)
    {
        $dob =  date("Y-m-d", strtotime($request->dob));
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
        ]);

        if ($validator->fails()) {

            echo "email_exist";
            die;
        } else {

            $values = array(
                'name'      => $request->fname,
                'email'     => $request->email,
                'password'  => Hash::make('agent'),
                'user_type' => 5,
                'agent_id'  => $request->agent_id

            );
            $id = DB::table('users')->insertGetId($values);


            $res =  DB::table('student_profile')->insert([
                'user_id'          => $id,
                'first_name'       => "$request->fname",
                'last_name'        =>  "$request->lname",
                'family_name'      =>  "$request->family_name",
                'phone_number'    =>  "$request->phone",
                'date_of_birth'    =>  $dob,
                'country_of_citizenship' =>  "$request->citizenship",
                'gender'           =>  "$request->gender",
                'term_conditions'  =>  $request->term_conditions
            ]);
            if ($res == 1) {
                $msg = array(
                    'message'  => "success",
                    'last_id'  => $id
                );
                echo json_encode($msg);

                //log record
                DB::table('student_records')->insert([
                    'title'          => 'Student Registration',
                    'text'           => "Student Register Successfully by Agent",
                    'agent_id'       =>  $request->agent_id,
                    'student_id'     => $id
                ]);
                die;
            } else {
                $msg = array(
                    'message'  => "failed",
                );
                echo json_encode($msg);
                die;
            }
        }
    }
    public function studentname_autosuggest(Request $request)
    {
        $keyword = $request->keyword;
        $student_list        =  DB::table('users')->select('id', 'name')->where('user_type', 5)->where('agent_id', Auth::user()->id)->where('name', 'like', '%' . $keyword . '%')->orderBy('name', 'ASC')->get();
        if (!empty($student_list)) {
?>
            <ul id="search-res">
                <?php
                foreach ($student_list as $list) {
                ?>
                    <li onClick="selectStudent('<?php echo $list->name; ?>','<?php echo $list->id; ?>');"><?php echo $list->name; ?></li>
                <?php } ?>
            </ul>
        <?php
        }
    }

    public function studentname_autosuggest_student_details(Request $request)
    {
        $student_id = $request->id;
        $student_list['st']       =  DB::table('student_profile')->select('id', 'study_permit_visa', 'country_of_citizenship', 'country_of_education', 'level_of_education', 'grading_scheme', 'english_exam_type', 'lisenting', 'reading', 'writing', 'speaking')
            ->where('user_id', $student_id)->first();
        return json_encode($student_list);
    }

    public function studentname_autosuggest_onpage(Request $request)
    {
        $keyword = $request->keyword;
        $student_list_page        =  DB::table('users')->select('id', 'name', 'email')->where('user_type', 5)->where('agent_id', Auth::user()->id)->where('name', 'LIKE', '%' . $keyword . '%')->orWhere('email', 'LIKE', '%' . $keyword . '%')->orderBy('name', 'ASC')->get();
        if (!empty($student_list_page)) {
        ?>
            <ul id="search-res-mainpage">
                <?php
                foreach ($student_list_page as $list) {
                ?>
                    <li onClick="selectStudentMainPage('<?php echo $list->name; ?>','<?php echo $list->id; ?>');"><?php echo $list->name; ?></li>
                <?php } ?>
            </ul>
<?php
        }
    }

    public function add_team()
    {
        return view('agent.add_team');
    }
    public function store_team(Request $request)
    {

        $request->validate([
            'name'      => 'required',
            'email'     => 'required|unique:users',
            'mobile'    => 'required|min:10|max:10',
            'password'  => 'required',
            'is_admin'  => 'required',
        ]);

        $values = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'user_type' => 7,
            'agent_id'  => $request->agent_id
        );
        $lastId = DB::table('users')->insertGetId($values);

        $teamdata = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'country_code' => $request->ccode,
            'mobile'    => $request->mobile,
            'user_id'   => $lastId,
            'password'   => $request->password,
            'is_admin'  => $request->is_admin,
            'agent_id'  => $request->agent_id,
            'status'    => 1,
        );
        $id = DB::table('teams')->insertGetId($teamdata);
        if ($id != '') {
            return redirect('team')->with('Success', 'Data Save Successfully');
        } else {
            return redirect()->back()->with('Failed', 'Somthing Wrong');
        }
    }

    public function team_update($id)
    {
        $data['team']   =  DB::table('teams')->select('id', 'name', 'email', 'country_code', 'mobile', 'user_id', 'password', 'is_admin', 'status')->where('status', 1)->where('agent_id', Auth::user()->id)->where('id', $id)->get();

        return view('agent.update_team', $data);
    }
    public function update(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'mobile'    => 'required|min:10|max:10',
            'password'  => 'required',
            'is_admin'  => 'required',
        ]);

        $values1 = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'user_type' => 7,
            'agent_id'  => $request->agent_id
        );
        $lastId = DB::table('users')->where('id', $request->user_id)->update($values1);


        $teamdata = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'country_code' => $request->ccode,
            'mobile'    => $request->mobile,
            'user_id'   => $lastId,
            'password'   => $request->password,
            'is_admin'  => $request->is_admin,
            'agent_id'  => $request->agent_id,
            'status'    => 1,
        );
        $res = DB::table('teams')->where('id', $request->id)->where('agent_id', $request->agent_id)->update($teamdata);
        if ($res == 1) {
            return redirect('team')->with('Success', 'Team Updated Successfully');
        } else {
            return redirect('team')->with('Failed', 'Team not Updated, Please Try Again');
        }
    }

    public function delete_team($id)
    {
        $user_id = DB::table('teams')->select('user_id')->where('id', $id)->first();

        $res = DB::table('teams')->where('id', $id)->delete();
        DB::table('users')->where('id', $user_id->user_id)->delete();
        if ($res == 1) {
            return redirect('team')->with('Success', 'Record Deleted Successfully');
        } else {
            return redirect('team')->with('Failed', 'Record not deleted, Please Try Again');
        }
    }
    public function change_status($id)
    {
        $getid = DB::table('teams')->select('status')->where('id', $id)->first();
        $status = $getid->status;
        if ($status == 1) {
            $status = 0;
            $message = 'Record Deactiveded Successfully';
        } else {
            $status = 1;
            $message = 'Record Activeded Successfully';
        }
        $res = DB::table('teams')->where('id', $id)->update(['status' => $status]);
        if ($res == 1) {
            return redirect('team')->with('Success', $message);
        } else {
            return redirect('team')->with('Failed', $message);
        }
    }

    //sub-agent
    public function sub_agent(Request $request)
    {
        $qty = $request->input('agentqty');
        if ($qty != '') {
            $limit = $qty;
        } else {
            $limit = 10;
        }

        $data['sub_agent_list']    =  DB::table('sub_agents as a')->select('a.id', 'a.name', 'b.country', 's.state', 'c.city', 'a.email', 'a.ccode', 'a.mobile', 'a.contact_person', 'a.user_id', 'a.agent_id', 'a.status', 'a.is_admin')
            ->where('a.status', 1)
            ->where('u.user_type', 6)
            ->where('a.agent_id', Auth::user()->id)
            ->join('country as b', 'b.id', '=', 'a.country')
            ->join('state as s', 's.id', '=', 'a.state')
            ->join('city as c', 'c.id', '=', 'a.city')
            ->join('users as u', 'u.id', '=', 'a.user_id')
            ->orderBy('a.id', 'DESC')
            ->paginate($limit);

        return view('agent.sub_agent', $data);
    }

    public function add_sub_agent()
    {
        $data['countries']     =  DB::table('country')->select('id', 'country')->get();
        return view('agent.add_sub_agent', $data);
    }
    public function store_sub_agent(Request $request)
    {
        //print_r($request->input());die;
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|unique:users',
            'mobile'    => 'required|min:10|max:10',
            'password'  => 'required',
            'is_admin'  => 'required',
            'country'   => 'required',
            'state'     => 'required',
            'city'      => 'required',
            'ccode'     => 'required',
            'is_admin'  => 'required',
        ]);

        $values = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'user_type' => 6,
            'agent_id'  => $request->agent_id
        );
        $lastId = DB::table('users')->insertGetId($values);

        $teamdata = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'ccode'     => $request->ccode,
            'mobile'    => $request->mobile,
            'user_id'   => $lastId,
            'password'   => Hash::make($request->password),
            'contact_person' => $request->contact_person,
            'is_admin'  => $request->is_admin,
            'agent_id'  => $request->agent_id,
            'country'   => $request->country,
            'state'     => $request->hstate,
            'city'      => $request->hcity,
            'status'    => 1
        );
        //dd($teamdata);die;
        $id = DB::table('sub_agents')->insertGetId($teamdata);

        if ($id != '') {
            return redirect('sub_agent')->with('Success', 'Data Save Successfully');
        } else {
            return redirect()->back()->with('Failed', 'Somthing Wrong');
        }
    }

    public function sub_agent_update($id)
    {

        $data['agent']    =  DB::table('sub_agents as a')->select('a.id', 'a.name', 'b.country', 'a.state', 'a.city', 's.state as statename', 'c.city as cityname', 'a.email', 'a.ccode', 'a.mobile', 'a.contact_person', 'a.user_id', 'a.password', 'a.agent_id', 'a.status', 'a.is_admin')
            ->where('a.status', 1)
            ->where('a.agent_id', Auth::user()->id)
            ->where('a.id', $id)
            ->leftjoin('country as b', 'b.id', '=', 'a.country')
            ->leftjoin('state as s', 's.id', '=', 'a.state')
            ->leftjoin('city as c', 'c.id', '=', 'a.city')
            ->orderBy('a.id', 'DESC')->get();
        //return $data;
        $data['countries']     =  DB::table('country')->select('id', 'country')->get();
        return view('agent.update_agent', $data);
    }
    public function update_process(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'mobile'    => 'required|min:10|max:10',
            'password'  => 'required',
            'is_admin'  => 'required',
            'country'   => 'required',
            'state'     => 'required',
            'city'      => 'required',
            'ccode'     => 'required',
            'is_admin'  => 'required',
        ]);

        $values1 = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'user_type' => 6,
            'agent_id'  => $request->agent_id
        );
        $lastId = DB::table('users')->where('id', $request->user_id)->update($values1);
        if ($request->hstate) {
            $state = $request->hstate;
        } else {
            $state = $request->state[0];
        }
        if ($request->hcity) {
            $city = $request->hcity;
        } else {
            $city = $request->city[0];
        }

        $teamdata = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'ccode'     => $request->ccode,
            'mobile'    => $request->mobile,
            'user_id'   => $lastId,
            'password'   => Hash::make($request->password),
            'contact_person' => $request->contact_person,
            'is_admin'  => $request->is_admin,
            'agent_id'  => $request->agent_id,
            'country'   => $request->country[0],
            'state'     => $state,
            'city'      =>  $city,
            'status'    => 1
        );
        $res = DB::table('sub_agents')->where('id', $request->id)->where('agent_id', $request->agent_id)->update($teamdata);
        if ($res == 1) {
            return redirect('sub_agent')->with('Success', 'Sub Agent Updated Successfully');
        } else {
            return redirect('sub_agent')->with('Failed', 'Sub Agent not Updated, Please Try Again');
        }
    }

    public function delete_sub_agent($id)
    {
        $user_id = DB::table('sub_agents')->select('user_id')->where('id', $id)->first();

        $res = DB::table('sub_agents')->where('id', $id)->delete();
        DB::table('users')->where('id', $user_id->user_id)->delete();
        if ($res == 1) {
            return redirect('sub_agent')->with('Success', 'Record Deleted Successfully');
        } else {
            return redirect('sub_agent')->with('Failed', 'Record not deleted, Please Try Again');
        }
    }
    public function change_status_sub_agent($id)
    {
        $getid = DB::table('sub_agents')->select('status')->where('id', $id)->first();
        $status = $getid->status;
        if ($status == 1) {
            $status = 0;
            $message = 'Record Deactiveded Successfully';
        } else {
            $status = 1;
            $message = 'Record Activeded Successfully';
        }
        $res = DB::table('sub_agents')->where('id', $id)->update(['status' => $status]);
        if ($res == 1) {
            return redirect('sub_agent')->with('Success', $message);
        } else {
            return redirect('sub_agent')->with('Failed', $message);
        }
    }

    function get_program_eligibility_details(Request $request)
    {
        $pid =  $request->input('pid');
        if ($pid) {
            $dataprogram          =  DB::table('college_programs')->select('id', 'program_logo', 'programs_name', 'earliest_intake_date', 'tuition_fee_min', 'tuition_fee_max', 'application_fee_min', 'application_fee_max', 'minimum_level_of_education_completed', 'program_summary', 'minimum_gpa', 'open_date')->Where('id', $pid)->get();
            return json_decode($dataprogram);
        }
    }

    function apply_program_by_agent(Request $request)
    {
        // return $request->input();
        $agent_id   =  $request->input('agent_id');
        $student_id =  $request->input('student_id');
        $programid  =  $request->input('programid');
        $num1       = mt_rand(1000, 9999);
        $num2       = mt_rand(1000, 9999);
        if (($programid != '') && ($student_id != '') && ($agent_id)) {
            $values = array(
                'program_id'      => $programid,
                'student_id'      => $student_id,
                'app_id'          => $num1 . strrev($num2),
                'status'          => 1,
                'agent_id'        => $agent_id

            );
            $id = DB::table('student_applications')->insertGetId($values);
            if ($id) {
                //echo $id;
                //log record
                DB::table('student_records')->insert([
                    'title'          => 'Program Apply',
                    'text'           => "Program apply by ",
                    'agent_id'       =>  $request->agent_id,
                    'student_id'     => $student_id,
                    'app_id'         => $num1 . strrev($num2)
                ]);
                return 'success';
                die;
            } else {
                return 'failed';
                die;
            }
        } else {
            echo "somthing_wrong";
            die;
        }
    }

    public function important_notice(){
        $limit = 5;
        $data['important_notice']    =  DB::table('student_records as a')->select('a.*', 'b.program_id', 'c.college_id as college_id','c.programs_name', 'c.program_college_name', 'd.first_name as agent_first_name','d.last_name as agent_last_name','e.status_name as payment_status','f.status_title as application_status', 'u.id as student_id','u.name','u.email')
       
            ->where('is_view', 0)
            ->where('a.agent_id', Auth::user()->id)
            ->join('student_applications as b', 'b.app_id', '=', 'a.app_id')
            ->join('college_programs as c', 'c.id', '=', 'b.program_id')
            ->join('agent_details as d', 'd.user_id', '=', 'a.agent_id')
            ->join('payment_status as e', 'e.id', '=', 'b.payment_status')
            ->join('current_status as f', 'f.id', '=', 'b.application_status')
            ->join('users as u', 'u.id', '=', 'a.student_id')
            
            ->orderBy('a.id', 'DESC')->paginate($limit);

             $data['notes']    =  DB::table('notes as a')->select('a.*','b.program_id','c.college_id as college_id','c.programs_name', 'c.program_college_name','u.name','u.email')
            ->where('a.is_read', 0)
            ->where('a.is_trash', 0)
            //->where('a.agent_id', Auth::user()->id)
            ->join('student_applications as b', 'b.app_id', '=', 'a.app_id')
            ->join('college_programs as c', 'c.id', '=', 'b.program_id')
            ->join('users as u', 'u.id', '=', 'a.student_id')
            ->orderBy('a.id', 'DESC')->paginate($limit);

            $data['application_list']    =  DB::table('student_applications as a')->select('a.id', 'a.program_id', 'a.student_id', 'a.app_id','c.programs_name', 'c.program_college_name','e.status_name as payment_status','f.status_title as application_status','u.name','u.email')
       // $data['sub_agentlist']    =  DB::table('student_records as a')->select('*')
            ->where('is_trash', 0)
            ->where('a.agent_id', Auth::user()->id)
            ->join('college_programs as c', 'c.id', '=', 'a.program_id')
           // ->join('agent_details as d', 'd.user_id', '=', 'a.agent_id')
            ->join('payment_status as e', 'e.id', '=', 'a.payment_status')
            ->join('current_status as f', 'f.id', '=', 'a.application_status')
            ->join('users as u', 'u.id', '=', 'a.student_id')
            
            ->orderBy('a.id', 'DESC')->paginate($limit);
          //return   $data;
        return view('agent.important_notice',$data);
    }

    public function action_notice()
    {
        
    }
}
