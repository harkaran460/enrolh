<?php

namespace App\Http\Controllers;

use App\Models\College;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CollegeHome extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('college.index');
    }

    public function addCollege()
    {
        return view('college.add_college');
    }
    
      public function requirement()
    {
        return view('college.requirement');
    }

    public function addProgram()
    {
        $post_secondary_discipline = DB::table('post_secondary_discipline')->get();
        $post_secondary_sub_categories = DB::table('post_secondary_sub_categories')->get();

        $colleges_name         = DB::table('colleges')->select('id','college_name')->where('user_id',Auth::user()->id)->first();
        $documents_requirment  = DB::table('documents_requirment')->select('id','document_name')->where('status',1)->get();
        return view('college.add_programs', compact('post_secondary_discipline', 'post_secondary_sub_categories','colleges_name','documents_requirment'));
    }


    public function addCollegeSubmit(Request $request)
    {

        $college = DB::table('colleges')->where('user_id', Auth::user()->id)->first();
        $input = $request->all();

        if (empty($college)) {
            $imageName = time() . '.' . $request->college_logo->extension();
            $request->college_logo->move(public_path('/images'), $imageName);

            $rand = substr(str_shuffle("123232434343434344"), 0, 1) . substr(str_shuffle("827382738273823"), 0, 5);

            $collegeImagePath = '';
            for ($x = 0; $x < $request->TotalFiles; $x++) {
                if ($request->hasFile('files' . $x)) {
                    $file = $request->file('files' . $x);

                    $name =  time() . $rand . $file->getClientOriginalName();
                    $file->move(public_path('/images'), $name);

                    $collegeImagePath = $collegeImagePath . $name . "|*|";
                }
            }
            $questionAnswer = json_decode(stripslashes($request->questionAnswer));

            foreach ($questionAnswer as $item) {
                DB::table('college_feature_questions')->insert(
                    [
                        'college_id' => Auth::user()->id, 'feature_questions' => $item->feature_question, 'feature_answer' => $item->feature_answer,
                        'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()
                    ]
                );
            }

            $valid_study_permit_visa = explode(',', $request->valid_study_permit_visa);
            $eligible_nationality = explode(',', $request->eligible_nationality);
            $eligible_education_country = explode(',', $request->eligible_education_country);
            $education_level = explode(',', $request->education_level);
            $grading_scheme = explode(',', $request->grading_scheme);
            $english_exam_type = explode(',', $request->english_exam_type);
            $provinces_states = explode(',', $request->provinces_states);
            $campus_city = explode(',', $request->campus_city);
            $college_type = explode(',', $request->college_type);
            $work_permit_available = $request->work_permit_available;

            DB::table('colleges')->insert(
                [
                    'user_id' => Auth::user()->id,
                    'user_type' => Auth::user()->user_type,
                    'college_logo' => $imageName,
                    'college_name' => $request->college_name,
                    'college_images' => $collegeImagePath,
                    'college_country' => $request->college_country,
                    'status' => $request->college_status,
                    'college_address' => $request->college_address,
                    'college_about_details' => $request->editor1,
                    'application_fee' => $request->application_fee,
                    'average_graduate_program' => $request->average_graduate_program,
                    'average_undergraduate_program' => $request->average_undergraduate_program,
                    'cost_of_living' => $request->cost_of_living,
                    'tuition' => $request->tuition,
                    'founded' => $request->founded,
                    'school_id' => $request->school_id,
                    'institution_type' => $request->institution_type,
                    'provider_id_number' => $request->provider_id_number,
                    'january_april' => $request->january_april,
                    'may_august' => $request->may_august,
                    'september_december' => $request->september_december,
                    'engineering_and_technology' => $request->engineering_and_technology,
                    'health_sciences_medicine_nursing_paramedic_and_kinesiology' => $request->health_sciences_medicine_nursing_paramedic_and_kinesiology,
                    'business_management_and_economics' => $request->business_management_and_economics,
                    'other' => $request->other,
                    'year_post_secondary_certificate' => $request->year_post_secondary_certificate,
                    'year_undergraduate_diploma' => $request->year_undergraduate_diploma,
                    'map_location' => $request->map_location,
                    'map_streetview' => $request->map_streetview,
                    'valid_study_permit_visa' => json_encode($valid_study_permit_visa, true),
                    'eligible_nationality' => json_encode($eligible_nationality, true),
                    'eligible_education_country' => json_encode($eligible_education_country, true),
                    'education_level' => json_encode($education_level, true),
                    'grading_scheme' => json_encode($grading_scheme, true),
                    'english_exam_type' => json_encode($english_exam_type, true),
                    'provinces_states' => json_encode($provinces_states, true),
                    'campus_city' => json_encode($campus_city, true),
                    'work_permit_available' => $work_permit_available,
                    'college_type' => json_encode($college_type, true),
                    'created_at' => Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon::now()->toDateTimeString()

                ]
            );

            return response()->json(['success' => 'College added successfully']);
        } else {

            $imageName = time() . '.' . $request->college_logo->extension();
            $request->college_logo->move(public_path('/images'), $imageName);

            $rand = substr(str_shuffle("123232434343434344"), 0, 1) . substr(str_shuffle("827382738273823"), 0, 5);

            $collegeImagePath = '';
            for ($x = 0; $x < $request->TotalFiles; $x++) {
                if ($request->hasFile('files' . $x)) {
                    $file = $request->file('files' . $x);

                    $name =  time() . $rand . $file->getClientOriginalName();
                    $file->move(public_path('/images'), $name);

                    $collegeImagePath = $collegeImagePath . $name . "|*|";
                }
            }
            $questionAnswer = json_decode(stripslashes($request->questionAnswer));

            DB::table('college_feature_questions')->where('college_id', Auth::user()->id)->delete();
            foreach ($questionAnswer as $item) {
                if (array_key_exists('feature_question', (array)$item)) {
                    DB::table('college_feature_questions')->insert(
                        [
                            'college_id' => Auth::user()->id, 'feature_questions' => $item->feature_question, 'feature_answer' => $item->feature_answer,
                            'updated_at' => Carbon::now()->toDateTimeString()
                        ]
                    );
                }
            }
            $valid_study_permit_visa = explode(',', $request->valid_study_permit_visa);
            $eligible_nationality = explode(',', $request->eligible_nationality);
            $eligible_education_country = explode(',', $request->eligible_education_country);
            $education_level = explode(',', $request->education_level);
            $grading_scheme = explode(',', $request->grading_scheme);
            $english_exam_type = explode(',', $request->english_exam_type);
            $provinces_states = explode(',', $request->provinces_states);
            $campus_city = explode(',', $request->campus_city);
            $college_type = explode(',', $request->college_type);
            $work_permit_available = $request->work_permit_available;

            DB::table('colleges')
                ->where('user_id', Auth::user()->id)
                ->update(
                    [
                        'user_id' => Auth::user()->id,
                        'user_type' => Auth::user()->user_type,
                        'college_logo' => $imageName,
                        'college_name' => $request->college_name,
                        'college_images' => $collegeImagePath,
                        'college_country' => $request->college_country,
                        'college_address' => $request->college_address,
                        'status' => $request->college_status,
                        'college_about_details' => $request->editor1,
                        'application_fee' => $request->application_fee,
                        'average_graduate_program' => $request->average_graduate_program,
                        'average_undergraduate_program' => $request->average_undergraduate_program,
                        'cost_of_living' => $request->cost_of_living,
                        'tuition' => $request->tuition,
                        'founded' => $request->founded,
                        'school_id' => $request->school_id,
                        'institution_type' => $request->institution_type,
                        'provider_id_number' => $request->provider_id_number,
                        'january_april' => $request->january_april,
                        'may_august' => $request->may_august,
                        'september_december' => $request->september_december,
                        'engineering_and_technology' => $request->engineering_and_technology,
                        'health_sciences_medicine_nursing_paramedic_and_kinesiology' => $request->health_sciences_medicine_nursing_paramedic_and_kinesiology,
                        'business_management_and_economics' => $request->business_management_and_economics,
                        'other' => $request->other,
                        'year_post_secondary_certificate' => $request->year_post_secondary_certificate,
                        'year_undergraduate_diploma' => $request->year_undergraduate_diploma,
                        'map_location' => $request->map_location,
                        'map_streetview' => $request->map_streetview,
                        'valid_study_permit_visa' => json_encode($valid_study_permit_visa, true),
                        'eligible_nationality' => json_encode($eligible_nationality, true),
                        'eligible_education_country' => json_encode($eligible_education_country, true),
                        'education_level' => json_encode($education_level, true),
                        'grading_scheme' => json_encode($grading_scheme, true),
                        'english_exam_type' => json_encode($english_exam_type, true),
                        'provinces_states' => json_encode($provinces_states, true),
                        'campus_city' => json_encode($campus_city, true),
                        'work_permit_available' => $work_permit_available,
                        'college_type' => json_encode($college_type, true),
                        'updated_at' => Carbon::now()->toDateTimeString()

                    ]
                );
            return response()->json(['success' => 'College updateds successfully']);
        }
    }

    public function addProgramSubmit(Request $request)
    {
        //return $request->input();
        $imageName = time() . '.' . $request->programs_logo->extension();
        $request->programs_logo->move(public_path('/images'), $imageName);

        $rand = substr(str_shuffle("123232434343434344"), 0, 1) . substr(str_shuffle("827382738273823"), 0, 5);


        $minimumTestScores = json_decode(stripslashes($request->minimumTestScores));
        $post_secondary_discipline = explode(',', $request->post_secondary_discipline);
        $post_secondary_sub_categories = explode(',', $request->post_secondary_sub_categories);

        $id =  DB::table('college_programs')->insertGetId(
            [
                'college_id' => Auth::user()->id,
                'program_logo' => $imageName,
                'programs_name' => $request->program_name, 
                'program_college_name' => $request->program_college_name,
                'earliest_intake_date' => $request->earliest_intake_date . '-1',
                'earliest_intake_type' => $request->earliest_intake_type,
                'earliest_intake_price' => $request->earliest_intake_price,
                'post_secondary_discipline' => json_encode($post_secondary_discipline, true),
                'post_secondary_sub_categories' => json_encode($post_secondary_sub_categories, true),
                'include_living_costs' => $request->include_living_costs,
                'tuition_fee_min' => $request->tuition_fee_min,
                'tuition_fee_max' => $request->tuition_fee_max,
                'application_fee_min' => $request->application_fee_min,
                'application_fee_max' => $request->application_fee_max,
                'program_summary' => $request->editor1, 
                'minimum_level_of_education_completed' => $request->minimum_level_of_education_completed,
                'minimum_gpa' => $request->minimum_gpa, 
                'status' => $request->status,
                'first_year_post_secondary_certificate' => $request->first_year_post_secondary_certificate,
                'first_year_t_level_program_including_a_work_placement' => $request->first_year_t_level_program_including_a_work_placement,
                'commission_break_down' => $request->commission_break_down,
                'disclaimer' => $request->disclaimer,
                
                'month_year' => $request->month_year .'-01',
                 'open_date' => $request->open_date,
                'submission_deadline' => $request->submission_deadline, 
                'doc_requirement' => $request->doc_requirement,

                'commission_type'  => $request->commission_type,
                'amount_percentage' =>isset($request->amount_percentage)? $request->amount_percentage:0,
                'amount_fixed'   => isset($request->amount_fixed)? $request->amount_fixed:0,
                'tax_fixed'      => $request->tax_fixed,
                'tax_percentage' => $request->tax_percentage,
                'tax_type'       => $request->tax_type,

                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        );


        foreach ($minimumTestScores as $item) {
            DB::table('college_programs_test_scores')->insert(
                [
                    'college_programs_id' => $id, 'test_scores_name' => $item->test_scores_name, 'test_scores_number' => $item->test_scores_number,
                    'reading' => $item->reading, 'writing' => $item->writing, 'listening' => $item->listening, 'speaking' => $item->speaking, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()
                ]
            );
        }

        return response()->json(['success' => 'Program added successfully']);
    }


    public function getCollegeDetails()
    {
        $college = DB::table('colleges')->where('user_id', Auth::user()->id)->first();
        $college_feature_questions = DB::table('college_feature_questions')->where('college_id', Auth::user()->id)->get();
        $collegeDetails = array('college' => $college, 'college_feature_questions' => $college_feature_questions);

        return response()->json(['success' => 'College details fetched successfully', 'collegeDetails' => $collegeDetails]);
    }
}
