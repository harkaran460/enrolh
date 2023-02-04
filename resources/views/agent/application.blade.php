@extends('layouts.agent_app')
@section('content')
    <div class="page-content mx-1 p-15 pt-0">
        
       
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-row justify-content-end">
                    
                    <div class="d-flex flex-row mt-2">
                        
                                
                                
                       
                        <button class="btn border rounded-pill mb-3 ms-1 fs-5 f-13  border-danger ms-2 resp-btn btn-new-jetmain">Apply Filter</button>
                        <button class="btn border rounded-pill fs-5 f-13  mb-3  border-danger ms-2 resp-btn btn-new-jetmain" type="button" data-bs-toggle="offcanvas" data-bs-target="#student-filters" aria-controls="student-filters"><i class="fa-solid fa-filter"></i> Filters </button>
                        <a class="btn border rounded-pill fs-5 f-13  mb-3 border-danger ms-2 resp-btn btn-new-jetmain" href="#" data-bs-toggle="modal" data-bs-target="#addNewStudent"><i class="fa-solid fa-plus me-2"></i>Add new student</a>
                    </div>
                    
                    <div class="modal fade" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="">
                            <div class="modal-dialog" style="max-width: 600px;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body " style="height: 600px; overflow-Y: scroll;">
                                        <p>Please provide a legitimate email address for your student that is actively monitored by them. Their country is required to forward applications to our partner schools. Note: ApplyBoard will not communicate with your student via email or other methods.</p>
                                        <div class="mb-3">
                                            <label class="form-label">CONTACT INFORMATION</label>
                                            <input type="email" class="form-control mb-3" placeholder="Email">
                                            <input type="tel" class="form-control" placeholder="Phone Number">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">PERSONAL INFORMATION</label>
                                            <input type="text" class="form-control mb-3" placeholder="Given Name">
                                            <input type="text" class="form-control mb-3" placeholder="Middle Name">
                                            <input type="text" class="form-control mb-3" placeholder="Family Name">
                                            
                                            <!--<input type="date" class="form-control mb-3" placeholder="Birth Date">-->
                                            <input type="text" id="datepicker" class="form-control mb-3"  placeholder="Birth Date">
                                            
                                            <select class="form-select " aria-label="Default select example">
                                                <option selected>Country of Citizenship</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 gndr-ads">
                                            <label class="form-label">Gender</label>
                                            <div class="d-flex flex-row sg">
                                                <div class="w-100 me-3 d-flex align-items-center">
                                                    <input class="mt-1 d-none" type="radio" name="select-gender" id="radiomale" checked>
                                                    <label class="w-100 pt-3 ps-2" for="radiomale">Male</label>
                                                </div>
                                                <div class="w-100 d-flex align-items-center">
                                                    <input class="mt-1 d-none" type="radio" name="select-gender" id="radiofemale">
                                                    <label class="w-100 pt-3 ps-2" for="radiofemale">Female</label>
                                                </div>
        
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">LEAD MANAGEMENT</label>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>Status</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>Referral Source</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>Country of Interest</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>Services of Interest</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I confirm that I have received express written consent from the student whom I am creating this profile for and I can provide proof of their consent upon request. To learn more please refer to the <a href="#">Personal Data Consent</a> article.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex flex-row">
                                        <button type="button" class="btn px-4" style="background-color: #FFE5E4;" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary px-4 bg">Create Student</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> 
                    
                     

                    <!--------------------Filter-------------------->
                    <div class="offcanvas offcanvas-start p-2" tabindex="-1" id="student-filters" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h3 class="offcanvas-title fs-4">Hide/Show Columns</h3>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">

                            <ul class="nav nav-pills mb-3 d-flex flex-row flex-nowrap" id="pills-tab" role="tablist">
                                <li class="nav-item w-100" role="presentation">
                                    <button class="nav-link active w-100" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Filters
                                    </button>
                                </li>
                                <li class="nav-item w-100" role="presentation">
                                    <button class="nav-link w-100" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Columns</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="student-filters-tabs">
                                <div class="tab-pane fade show active aplly-filter apply_fliter_check" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="mb-3">
                                        <label class="form-label ml-from font">SCHOOL COUNTRY</label><br>
                                        <small>Select country</small>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>All</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="USA">USA</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 payment_status">
                                        <div class="d-flex flex-row justify-content-between">
                                            <label class="form-label font">PAYMENT STATUS</label><br>
                                            <a href=""><small>Clear</small></a>
                                        </div>
                                        
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>
                                             </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 d-flex"> 
                                            <div class="form-check"> 
                                                <input class="form-check-input " type="radio" name="payment_statues" id="notpaid_true" value="option1">
                                            </div>
                                            <div class="form-check"> 
                                                <input class="form-check-input " type="radio" name="payment_statues" id="notpaid_false" value="option2">

                                            </div>
                                            <label class="form-label">Paid</label>
                                        </div>
                                        
                                    </div>
                                    <div class="mb-3 apply_filter_application">
                                        <div class="d-flex flex-row justify-content-between">
                                            <label class="form-label font">APPLICATION STATUS</label><br>
                                            <a href=""><small>Clear</small></a>
                                        </div>
                                       

                                        <div class="d-flex">
                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>
                                             </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">   
                                            <div class="form-check">
                                                 <input class="form-check-input" type="radio" name="appplication_status_accepted" id="accepted_true" value="option1">
                                            </div>
                                            <div class="form-check">
                                                 <input class="form-check-input" type="radio" name="appplication_status_accepted" id="accepted_false" value="option2">
                                            </div>
                                            <label class="form-label">Accepted</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check"> 
                                                <input class="form-check-input" type="radio" name="appplication_status_rejected" id="rejected_true" value="option1">
                                            </div>
                                            <div class="form-check"> 
                                                <input class="form-check-input" type="radio" name="appplication_status_rejected" id="rejected_false" value="option2">
                                            </div>
                                            <label class="form-label">Rejected</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_canceled" id="cancelled_true" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_canceled" id="cancelled_false" value="option2">
                                            </div>
                                            <label class="form-label">Canceled</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_withdrawn" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_withdrawn" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Withdrawn</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_refundprogress" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_refundprogress" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Refund In Progress</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Program Closed</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_program_closed" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_program_closed" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Deferral In Progress</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_deferralprogress" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_deferralprogress" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Waitlisted</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_waitlisted" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_waitlisted" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Ready to Enroll</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input " type="radio" name="appplication_status_readyenroll" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input " type="radio" name="appplication_status_readyenroll" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Enrollment Confirmed</label>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex mt-md-3">
                                        <button class="btn bg-light fs-5">Clear All Filter</button>
                                        <button class="btn bg ms-md-3 fs-5" onclick="filtercheck()">Apply Filter</button>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <ul class="p-0 m-0 column-check"> 
                                        <li><span>COLUMN HEADER</span> <a href="javacsript:;" id="application_all_hide">hide all</a></li>
                                        <li>
                                            <hr class="w-100 my-0">
                                        </li>
                                        <li><span>App ID</span> <input class="form-check-input" type="checkbox" value="" id="appId_app"><label class="form-check-label" for="appId_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                             <li><span>Student ID</span> <input class="form-check-input" type="checkbox" value="" id="studentId_app"><label class="form-check-label" for="studentId_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Apply Date</span> <input class="form-check-input" type="checkbox" value="" id="applyDate_app"><label class="form-check-label" for="applyDate_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>First Name</span> <input class="form-check-input" type="checkbox" value="" id="firstName_app"><label class="form-check-label" for="firstName_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Last Name</span> <input class="form-check-input" type="checkbox" value="" id="lastName_app"><label class="form-check-label" for="lastName_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Status</span> <input class="form-check-input" type="checkbox" value="" id="status_app"><label class="form-check-label" for="status_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruitments</span> <input class="form-check-input" type="checkbox" value="" id="recruitments_app"><label class="form-check-label" for="recruitments_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Current Stage</span> <input class="form-check-input" type="checkbox" value="" id="currentStage_app"><label class="form-check-label" for="currentStage_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Program</span> <input class="form-check-input" type="checkbox" value="" id="program_app"><label class="form-check-label" for="program_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>School</span> <input class="form-check-input" type="checkbox" value="" id="school_app"><label class="form-check-label" for="school_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Start Date</span> <input class="form-check-input" type="checkbox" value="" id="startDate_app"><label class="form-check-label" for="startDate_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruitment Partner</span> <input class="form-check-input" type="checkbox" value="" id="recruitfmentPartner_app"><label class="form-check-label" for="recruitfmentPartner_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                            <li><span>Payment Date</span> <input class="form-check-input" type="checkbox" value="" id="paymentDate_app"><label class="form-check-label" for="paymentDate_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--------------------Filter-------------------->
                    
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row overflow-hidden" id="student-table">
                        <div class="col-12 position-relative">
                            <div class="myftable">
                                <table class="table">
                                    <thead>
                                        <tr style="border-bottom: 2px solid #0000001f;">
                                            <th class="text-center" scope="col">Actions</th>
                                           
                                            <th class="text-center appId_hide_app" scope="col">App ID</th>
                                            <th class="text-center studentId_hide_app" scope="col">Student ID</th>
                                            <th class="text-center applyDate_hide_app" scope="col" style="width: 180px;">Apply Date</th>
                                            <th class="text-center firstName_hide_app" scope="col">First Name</th>
                                            <th class="text-center lastName_hide_app" scope="col">Last Name</th>
                                            <th class="text-center status_hide_app" scope="col">Status</th>
                                            <th class="text-center requirements_hide_app" scope="col">Requirements</th>
                                            <th class="text-center currentStage_hide_app" scope="col">Current Stage</th>
                                            <th class="text-center program_hide_app" scope="col">Program</th>
                                            <th class="text-center school_hide_app" scope="col">School</th>
                                            <th class="text-center startDate_hide_app" scope="col">Start Date</th>
                                            <th class="text-center recruitmentPartner_hide_app" scope="col">Recruitment Partner</th>
                                             <th class="text-center paymentDate_hide_app" scope="col">Payment Date</th>
                                             <th></th>
                                            
                                            <!--<th class="text-center" scope="col">View</th>-->
                                        </tr>
                                        <form method="GET" action="/agentApplication" id="frmApplicationFilter">
                                            <tr>
                                                <td scope="col"></td>
                                                
                                                <td scope="col">
                                                    <div class="input-control">
                                                        <input type="text" class="form-control" name="appid">
                                                    </div>
                                                </td>
                                                <td scope="col">
                                                    <div class="input-control">
                                                        <input type="text" class="form-control" name="student_id">
                                                    </div>
                                                </td>
                                                <td scope="col"></td>
                                                <td scope="col">
                                                    <div class="input-control">
                                                        <input type="text" class="form-control" name="fname">
                                                    </div> 
                                                 </td>
                                                <td scope="col">
                                                    <div class="input-control">
                                                        <input type="text" class="form-control" name="lname">
                                                    </div> 
                                                </td>
                                                <td scope="col"></td>
                                                <td scope="col">
                                                    <div class="input-control">
                                                        <select class="form-select" name="requirements" aria-label="Default select example" onchange="this.form.submit()" style="width: 170px;">
                                                            <option selected>---</option>
                                                            <option value="Missing">Missing</option>
                                                            <option value="Reviewing">Reviewing</option>
                                                            <option value="Reviewing - None Outstanding">Reviewing - None Outstanding</option>
                                                            <option value="Not Approved">Not Approved</option>
                                                            <option value="Complete">Complete</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td scope="col">
                                                    <div class="input-control">
                                                        <select class="form-select" aria-label="Default select example" name="current_status" onchange="this.form.submit()" style="width: 150px;">
                                                            <option selected>---</option>
                                                            <option value="Pre-Payment">Pre-Payment</option>
                                                            <option value="Pre-Submission">Pre-Submission</option>
                                                            <option value="Submission">Submission</option>
                                                            <option value="Post-Submission">Post-Submission</option>
                                                            <option value="Admission">Admission</option>
                                                            <option value="Visa-Application">Visa-Application</option>
                                                            <option value="Pre-Arrival">Pre-Arrival</option>
                                                            <option value="Post Arrival/Commission">Post Arrival/Commission</option>
                                                            <option value="Arrival">Arrival</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td scope="col">
                                                    <div class="input-control">
                                                        <input type="text" class="form-control" name="program_name" style="width: 200px;">
                                                    </div> 
                                                </td>
                                                <td scope="col">
                                                    <div class="input-control">
                                                        <input type="text" class="form-control" name="school_name" style="width: 200px;">
                                                    </div> 
                                                </td>
                                                <td scope="col">
                                                    <div class="ui main-date">
                                                        <div class="ui form">
                                                            <div class="two fields">
                                                                <div class="field">
                                                                    <div class="ui calendar" id="rangestart1">
                                                                        <div class="ui input left icon">
                                                                            <i class="calendar icon"></i>
                                                                            <input type="text" name="application_start_date" placeholder="Start" onchange="this.form.submit()">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="field margin-10">
                                                                    <div class="ui calendar" id="rangeend1">
                                                                        <div class="ui input left icon">
                                                                            <i class="calendar icon"></i>
                                                                            <input type="text" name="application_end_date" placeholder="End" onchange="this.form.submit()">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td scope="col">
                                                    <div class="input-control">
                                                        <input type="text" class="form-control" name="requirement_partner" style="width: 200px;">
                                                    </div>
                                                </td>
                                                <td scope="col">     
                                                    <div class="ui main-date">
                                                        <div class="ui form">
                                                            <div class="two fields">
                                                                <div class="field">
                                                                    <!--<label>Start date</label>-->
                                                                    <div class="ui calendar" id="rangestart">
                                                                        <div class="ui input left icon">
                                                                            <i class="calendar icon"></i>
                                                                            <input type="text" name="payment_start_date" placeholder="Start" onchange="this.form.submit()">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="field margin-10">
                                                                    <!--<label>End date</label>-->
                                                                    <div class="ui calendar" id="rangeend">
                                                                        <div class="ui input left icon">
                                                                            <i class="calendar icon"></i>
                                                                            <input type="text" name="payment_end_date"  placeholder="End" onchange="this.form.submit()">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td> 
                                                <td></td>
                                                
                                                <!--<th scope="col"></td>-->
                                            </tr>
                                        </form>
                                    </thead>
                                    <tbody>
                                        
                                        @if(!empty($application_list))
                                        @foreach ($application_list as $applicationlist)
                                            
                                        
                                        <tr class="{{$applicationlist->status_name}}">
                                            <td> 
                                                <div class="dropdown">
                                                     <button class="btn border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="https://design.enrolhere.com/student-application-review/78429398"><i class="bi bi-pencil"></i> View Application</a></li>
                                                        <li><a class="dropdown-item" href="https://design.enrolhere.com/student-profile-application/16"><i class="bi bi-file-earmark-text"></i> All Applications</a></li>
                                                    </ul>
                                                </div> 
                                            </td>
                                            
                                            <td class="text-center appId_hide_app">
                                                <a href="/student-application-review/{{$applicationlist->app_id}}">{{$applicationlist->app_id}}</a>
                                            </td>
                                            <td class="text-center studentId_hide_app"><a href="/agent_student_profile/{{ $applicationlist->user_id }}">{{$applicationlist->user_id}}</a></td>
                                            <td class="text-center applyDate_hide_app"><span>{{date('d-M-Y', strtotime($applicationlist->created_at))}}</span></td>
                                            <td class="text-center firstName_hide_app"><span>{{$applicationlist->first_name}}</span></td>
                                            <td class="text-center lastName_hide_app"><span>{{$applicationlist->last_name}}</span></td>
                                            <td class="text-center status_hide_app"><span class="{{$applicationlist->bgcolor}} px-2 py-1 notPaid-main rounded-pill text-white text-white">{{$applicationlist->status_name}}</span></td>

                                            <td class="text-center requirements_hide_app">
                                                <ul>
                                                    <li>
                                                        <div class="text-white req-circle-main" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Requirements">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white req-circle-main-one" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Requirements">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white req-circle-main-two" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Requirements">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center currentStage_hide_app">
                                                <span class="bg-light px-3 py-1 rounded-pill">Cancelled</span>
                                            </td>
                                            <td class="text-center program_hide_app"><a href="/agent-program-details/{{$applicationlist->pid}}"><span>{{$applicationlist->programs_name}}</span></a></td>
                                            <td class="text-center school_hide_app"><a href="/agent-college-details/{{$applicationlist->cid}}"><span><img width="20" height="20" src="{{ url('/images/' . $applicationlist->college_logo) }}" alt="Logo" />
                                                {{$applicationlist->program_college_name}}</span></a></td>
                                            <td class="startDate_hide_app"><span>{{date('d-M-Y', strtotime($applicationlist->earliest_intake_date))}} </span></td>
                                              @if(!empty($agent_email))
                                            @foreach($agent_email as $agentemail)
                                           
                                            <td class="text-center recruitmentPartner_hide_app"><a href="#">{{$agentemail->email}}</a></td>
                                           
                                            @endforeach
                                            <td class="text-center paymentDate_hide_app"><a href="#"> NA</a></td>
                                            @endif
                                            
                                            
                                            
                                            <!--<td class="text-center">-->
                                            <!--    <span class="application_view">View</span>-->
                                            <!--</td>-->
                                            <td class="text-center">
                                                 <button class="btn  border-12 mb-3 border-danger fs-6 btn-vew-main">View</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

               <div class="row justify-content-start align-items-center py-3">
                    
                    <div class="dropdown col-lg-2 col-sm-2 d-flex flex-row border-end pe-2 mt-3">
                        <span class="d-flex align-items-center ">Row:</span>
                        <form method="GET" action="/agentApplication" id="agentApplication">
                            <select class="form-select form-select-sm" name="qty" onchange="this.form.submit()">
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </form>
                    </div>

                    <nav aria-label="Page navigation example" class="mt-1 px-3 col-lg-10 col-sm-12 resp-nav">
                        <div class="pagination-wrapper">
                            {{$application_list->links()}}
                        </div>

                    
                    

                </div>

            </div>
        </div> 
    </div>
    
    <style>
   .req-circle-main{
        background-color:#d18d2f7a !important;
        color:#d16f2f !important;
        width:30px !important;
        height:30px !important;
    }
    .req-circle-main-one{
        background-color:#d12f2f6b !important;
        color:#d12f2f !important;
        width:30px !important;
        height:30px !important;
    }
    .req-circle-main-two{
        background-color:#26c06c7a !important;
        color:#26c06c !important;
        width:30px !important;
        height:30px !important;
    }
    
    #student-table table tbody tr td button{
        background-color:transparent;
    }
    .btn-vew-main:hover{
        background-color: #2b50ed !important;
        color: #fff !important;
    }
    .btn-vew-main{
        background-color:#e2e5ef !important;
        height:30px !important;
        width:50px !important;
        line-height:0 !important;
        border-radius:6px !important;
        border:none !important;
    }
    .notPaid-main{
            background-color:rgb(236 168 168) !important;
            color: black !important;
            font-size:11px !important;
            font-weight:400 !important;
    }
    .btn-new-jetmain{
    background-color:#e2e5ef !important;
    border:none !important;
    border-radius:4px !important;
    font-size:11px !important;
    
   }
  .btn-new-jetmain:hover{
    background-color:#2b50ed !important;
    color:white !important;
  }
  .main-date{
      /*padding-bottom:1rem !important;*/
  }

    @media (min-width:300px) and (max-width:600px) {
        #student-table .col-12 {
            overflow-x: scroll;
            height: 50vh;
            }
    }
    </style>
@endsection