<?php

use App\Http\Controllers\AgentHome;
use App\Http\Controllers\Auth\AgentRegister;
use App\Http\Controllers\CollegeHome;
use App\Http\Controllers\StudentHome;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\Auth\FacebookSocialiteController;
use App\Http\Controllers\Auth\StudentRegister;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\CollegePictureController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Agent\StudentEducationDocumentsController;
use App\Http\Controllers\Agent\WorkExperienceDocumentsController;
use App\Http\Controllers\Agent\EmergencyContactDocumentsController;
use App\Http\Controllers\Agent\EnglishTestScoreDocumentsController;
use App\Http\Controllers\Agent\PassportAndTravelHistoryDocumentsController;
use App\Http\Controllers\Auth\CollegeRegister;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\SuperAdminController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/collegeDashboard', [CollegeHome::class, 'index'])->name('collegeDashboard');
Route::get('/addCollege', [CollegeHome::class, 'addCollege'])->name('addCollege');
Route::get('/addProgram', [CollegeHome::class, 'addProgram'])->name('addProgram');
Route::post('/addCollege', [CollegeHome::class, 'addCollegeSubmit'])->name('addCollegeSubmit.post');
Route::post('/addProgram', [CollegeHome::class, 'addProgramSubmit'])->name('addProgramSubmit.post');
Route::get('/getCollegeDetails', [CollegeHome::class, 'getCollegeDetails'])->name('getCollegeDetails');
Route::get('/student_register', function (Request $request) {
    return view('register.student_register');
});
Route::get('/agent_register', function (Request $request) {
    return view('register.agent_register');
});
Route::get('/college_register', function (Request $request) {
    return view('register.college_register');
});

Route::post('/process_signup', [StudentRegister::class, 'process_signup'])->name('process_signup');
Route::post('/process_agent_signup', [AgentRegister::class, 'process_agent_signup'])->name('process_agent_signup');
Route::post('/process-college-signup', [CollegeRegister::class, 'process_college_signup'])->name('process_college_signup');



Route::get('/studentDashboard', [StudentHome::class, 'index'])->name('studentDashboard');
Route::get('/program', [StudentHome::class, 'program'])->name('program');
Route::get('/application', [StudentHome::class, 'application'])->name('application');
Route::get('/shortlist_programs', [StudentHome::class, 'shortlist_programs'])->name('shortlist_programs');
Route::get('/student_profile', [StudentHome::class, 'student_profile'])->name('student_profile');
Route::get('/my_profile', [StudentHome::class, 'my_profile'])->name('my_profile');
Route::get('/my_reminders', [StudentHome::class, 'my_reminders'])->name('my_reminders');

Route::post('/eligibilityfilter', [StudentHome::class, 'get_eligibility_filter'])->name('get_eligibility_filter');
Route::post('/collagefilter', [StudentHome::class, 'collage_filter'])->name('collage_filter');
Route::post('/programfilter', [StudentHome::class, 'programfilter'])->name('programfilter');
Route::get('/college-details/{id}', [StudentHome::class, 'college_details'])->name('college_details');
Route::get('/programs-college/{id}', [StudentHome::class, 'programs_college'])->name('programs_college');


Route::get('/getStudentProfile', [StudentHome::class, 'getStudentProfile'])->name('getStudentProfile');
Route::post('/updateStudentProfile', [StudentHome::class, 'updateStudentProfile'])->name('updateStudentProfile');
Route::post('/getMyProfile', [StudentHome::class, 'getMyProfile'])->name('getMyProfile');
Route::post('/updateMyProfile', [StudentHome::class, 'updateMyProfile'])->name('updateMyProfile');
Route::post('/updateProfilePicture', [StudentHome::class, 'updateProfilePicture'])->name('updateProfilePicture');
Route::get('/edit_student_profile', [StudentHome::class, 'edit_student_profile'])->name('edit_student_profile');
Route::post('/application', [StudentHome::class, 'application'])->name('application');
Route::post('/removeApplication', [StudentHome::class, 'removeApplication'])->name('removeApplication');
 
Route::get('/application_detalis', function () {
    return view('student.application_detalis');
});

Route::get('/student_profile_review2', function () {
    return view('student.student_profile_review2');
});

Route::get('/student_college_details2', function () {
    return view('student.student_college_details');
});

Route::get('/student_programs_college2', function () {
    return view('student.student_programs_college');
});

Route::get('/student_Progress', function () {
    return view('student.student_progress2');
});

Route::get('/studentsPaymentList', function () {
    return view('student.student_payment');
});


// Route::get('/application_detalis', [StudentHome::class, 'application_detalis'])->name('application_detalis');
// Route::get('/student_profile_review2', [StudentHome::class, 'student_profile_review2'])->name('student_profile_review2');
// Route::get('/student_college_details', [StudentHome::class, 'student_college_details'])->name('student_college_details');
// Route::get('/student_programs_college', [StudentHome::class, 'student_programs_college'])->name('student_programs_college');


// Admin application

//Route::get('/admin_application', [AgentHome::class, 'admin_application'])->name('admin_application');



Route::get('/agentDashboard', [AgentHome::class, 'index'])->name('agentDashboard');
Route::get('/agentProgram', [AgentHome::class, 'agentProgram'])->name('agentProgram');
Route::get('/agentApplication', [AgentHome::class, 'agentApplication'])->name('agentApplication');
Route::get('/students', [AgentHome::class, 'students'])->name('students');
Route::get('/payments', [AgentHome::class, 'payments'])->name('payments');
Route::get('/commission_structure', [AgentHome::class, 'commissionStructure'])->name('commission_structure');
Route::get('/manage_staff', [AgentHome::class, 'manage_staff'])->name('manage_staff');
Route::get('/growth_hub', [AgentHome::class, 'growth_hub'])->name('growth_hub');
Route::get('/agent-student-profile/{id}', [AgentHome::class, 'agent_student_profile'])->name('agent_student_profile');
Route::post('/agent-student-profile-update/', [AgentHome::class, 'agent_student_profile_update'])->name('agent_student_profile_update');
Route::get('/agent-student-search-and-apply/{id}', [AgentHome::class, 'agent_student_search_and_apply'])->name('agent_student_search_and_apply');
Route::post('/student-eligibility-filter', [AgentHome::class, 'get_eligibility_filter'])->name('get_eligibility_filter');

//Route::get('/student-search-and-apply/{id}', [AgentHome::class, 'student_search_and_apply'])->name('student_search_and_apply');


Route::get('/wallet', [AgentHome::class, 'wallet'])->name('wallet');
Route::get('/training_request', [AgentHome::class, 'training_request'])->name('training_request');
Route::get('/students-applications/{id}', [AgentHome::class, 'students_applications'])->name('students_applications');
Route::get('/invoices/', [AgentHome::class, 'invoices'])->name('invoices');
Route::get('/agent_my_reminders', [AgentHome::class, 'agent_my_reminders'])->name('agent_my_reminders');
Route::get('/template', [AgentHome::class, 'template'])->name('template');
Route::get('/knowledge_base', [AgentHome::class, 'knowledge_base'])->name('knowledge_base');

Route::get('/team', [AgentHome::class, 'team'])->name('team');
Route::get('/add-team', [AgentHome::class, 'add_team'])->name('add_team');
Route::post('/store-team', [AgentHome::class, 'store_team'])->name('store_team');
Route::get('/team-update/{id}', [AgentHome::class, 'team_update'])->name('team_update');
Route::post('/update', [AgentHome::class, 'update'])->name('update');
Route::get('/delete-team/{id}', [AgentHome::class, 'delete_team'])->name('delete_team');
Route::get('/change-status/{id}', [AgentHome::class, 'change_status'])->name('change_status');


Route::get('/sub_agent', [AgentHome::class, 'sub_agent'])->name('sub_agent');
Route::get('/add-sub-agent', [AgentHome::class, 'add_sub_agent'])->name('add_sub_agent');
Route::post('/store-sub-agent', [AgentHome::class, 'store_sub_agent'])->name('store_sub_agent');
Route::get('/sub_agent-update/{id}', [AgentHome::class, 'sub_agent_update'])->name('sub_agent_update');
Route::post('/update-process', [AgentHome::class, 'update_process'])->name('update_process');
Route::get('/delete-sub-agent/{id}', [AgentHome::class, 'delete_sub_agent'])->name('delete_sub_agent');
Route::get('/change-sub-agent-status/{id}', [AgentHome::class, 'change_status_sub_agent'])->name('change_status_sub_agent');


//Route::get('/agent_profile', [AgentHome::class, 'agent_profile'])->name('agent_profile');
Route::get('/important_notice', [AgentHome::class, 'important_notice'])->name('important_notice');
Route::post('/action-notice', [AgentHome::class, 'action_notice'])->name('action-notice');

Route::get('/student-profile-application/{id}', [AgentHome::class, 'student_profile_application'])->name('student_profile_application');
Route::get('/student-profile-application-delete/{id}', [AgentHome::class, 'student_profile_application_delete'])->name('student_profile_application_delete');

Route::get('/search-and-apply/{id}', [AgentHome::class, 'search_and_apply'])->name('search_and_apply');

Route::get('/student-payment/{id}', [AgentHome::class, 'student_payment'])->name('student_payment');
Route::get('/student-application-review/{id}', [AgentHome::class, 'student_application_review'])->name('student_application_review');
Route::post('/student-certificate-upload', [AgentHome::class, 'student_certificate_upload'])->name('student_certificate_upload');
Route::post('/student-passport-upload', [AgentHome::class, 'student_passport_upload'])->name('student_passport_upload');
Route::post('/student-notes', [AgentHome::class, 'student_notes'])->name('student_notes');

Route::get('/recruitment_partners', [AgentHome::class, 'recruitment_partners'])->name('recruitment_partners');
Route::get('/recruitment_partner_id', [AgentHome::class, 'recruitment_partner_id'])->name('recruitment_partner_id');
Route::get('/student_college_details', [AgentHome::class, 'student_college_details'])->name('student_college_details');
Route::get('/student_programs_college', [AgentHome::class, 'student_programs_college'])->name('student_programs_college');
Route::post('/program-filter-on-college-details/', [AgentHome::class, 'program_filter_on_college_details'])->name('program_filter_on_college_details');


Route::get('/agentProgress', [AgentHome::class, 'agentProgress'])->name('agentProgress');
Route::get('/agent-eligibility', [AgentHome::class, 'agent_eligibility_filter'])->name('agent_eligibility_filter');
Route::get('/agent-college', [AgentHome::class, 'agent_college_filter'])->name('agent_college_filter');
Route::get('/agent-program', [AgentHome::class, 'agent_program_filter'])->name('agent_program_filter');
Route::get('/agent-college-details/{id}', [AgentHome::class, 'agent_college_details'])->name('agent_college_details');
Route::get('/agent-program-details/{id}', [AgentHome::class, 'agent_program_details'])->name('agent_program_details');

Route::post('/agenteligibilityfilter', [AgentHome::class, 'get_eligibility_filter'])->name('get_eligibility_filter');
Route::post('/agentcollagefilter', [AgentHome::class, 'collage_filter'])->name('collage_filter');
Route::post('/agentprogramfilter', [AgentHome::class, 'programfilter'])->name('programfilter');

Route::post('/getstate', [AgentHome::class, 'getstate'])->name('getstate');
Route::post('/getcity', [AgentHome::class, 'getcity'])->name('getcity');
Route::post('/student-registration-by-agent', [AgentHome::class, 'student_registration_by_agent'])->name('student_registration_by_agent');
Route::post('/studentname-autocomplet-agent', [AgentHome::class, 'studentname_autosuggest'])->name('studentname_autosuggest');
Route::post('/studentname-autocomplet-agent-mainpage', [AgentHome::class, 'studentname_autosuggest_onpage'])->name('studentname_autosuggest_onpage');
Route::post('/get-program-eligibility-details-agent-mainpage', [AgentHome::class, 'get_program_eligibility_details'])->name('get_program_eligibility_details');
Route::post('/apply-program-by-agent', [AgentHome::class, 'apply_program_by_agent'])->name('apply_program_by_agent');
Route::post('/studentname-autocomplet-agent-details', [AgentHome::class, 'studentname_autosuggest_student_details'])->name('studentname_autosuggest_student_details');


Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

Route::get('auth/facebook', [FacebookSocialiteController::class, 'redirectToFB']);
Route::get('callback/facebook', [FacebookSocialiteController::class, 'handleCallback']);


Route::get('/hello', function () {
    return view('upload');
});
Route::resource('collegePictures', CollegePictureController::class)->only(['index', 'store', 'destroy']);
Route::resource('studentEducationDocuments', StudentEducationDocumentsController::class)->only(['index', 'store', 'destroy']);
Route::resource('workExperienceDocuments', WorkExperienceDocumentsController::class)->only(['index', 'store', 'destroy']);
Route::resource('emergencyContactDocuments', EmergencyContactDocumentsController::class)->only(['index', 'store', 'destroy']);
Route::resource('englishTestScoreDocuments', EnglishTestScoreDocumentsController::class)->only(['index', 'store', 'destroy']);
Route::resource('passportAndTravelHistoryDocuments', PassportAndTravelHistoryDocumentsController::class)->only(['index', 'store', 'destroy']);

Route::resource('pictures', PictureController::class)->only(['index', 'store', 'destroy']);
Route::get('/getState', [BaseController::class, 'getState'])->name('getState');
Route::get('/getCity', [BaseController::class, 'getCity'])->name('getCity');

Route::get('logout', [AgentHome::class, 'logout'])->name('logout');
Route::post('payment', [RazorpayController::class,'payment'])->name('payment');

//admin
Route::get('admin-dashboard', [SuperAdminController::class, 'index'])->name('index');
Route::get('admin-application-list', [SuperAdminController::class, 'admin_application_list'])->name('admin_application_list');
Route::get('admin-application-review/{id}', [SuperAdminController::class, 'admin_application_review'])->name('admin_application_review');
Route::post('update-document-status/', [SuperAdminController::class, 'update_document_status'])->name('update_document_status');
Route::post('change-document-status/', [SuperAdminController::class, 'change_document_status'])->name('change_document_status');
Route::post('update-document-status-discription/', [SuperAdminController::class, 'update_document_status_discription'])->name('update_document_status_discription');
