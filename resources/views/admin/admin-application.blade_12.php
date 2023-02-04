@extends('layouts.admin_app')
@section('content')
 
<div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-row justify-content-between align-items-center">
                    <h1>Applications</h1>
                    <div class="d-flex flex-row">
                        <button class="btn me-4 fw-normal fs-5 border rounded-pill px-3 py-1 border-primary">Apply Filter</button>
                        <button class="btn me-4 fw-normal fs-5 border rounded-pill px-3 py-1 border-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#student-filters" aria-controls="student-filters"><i class="fa-solid fa-filter"></i> Filters </button>
                        <a class="btn me-4 fw-normal fs-5 border rounded-pill px-3 py-1 border-primary" href="#"><i class="fa-solid fa-plus me-2"></i>Add new student</a>
                    </div>
 
                    <div class="offcanvas offcanvas-start p-2" tabindex="-1" id="student-filters" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h3 class="offcanvas-title fs-4">Filter</h3>
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
                                <div class="tab-pane fade show active aplly-filter" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="mb-3">
                                        <label class="form-label ml-from">SCHOOL COUNTRY</label><br>
                                        <small>Select country</small>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>All</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex flex-row justify-content-between">
                                            <label class="form-label">PAYMENT STATUS</label><br>
                                            <a href=""><small>Clear</small></a>
                                        </div>
                                        <div class="mb-3 d-flex">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label ">Yes</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Paid</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex flex-row justify-content-between">
                                            <label class="form-label">APPLICATION STATUS</label><br>
                                            <a href=""><small>Clear</small></a>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Accepted</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Rejected</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Canceled</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Withdrawn</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Refund In Progress</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Program Closed</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Deferral In Progress</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Waitlisted</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Ready to Enroll</label>
                                        </div>
                                        <div class="mb-3 d-flex ">

                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>

                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                                <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Enrollment Confirmed</label>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <button class="btn bg-light">Clear All Filter</button>
                                        <button class="btn bg">Apply Filter</button>
                                    </div>  
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <ul class="p-0 m-0 column-check">
                                        <li><span>COLUMN HEADER</span> <a href="">hide all</a></li>
                                        <li>
                                            <hr class="w-100 my-0">
                                        </li>
                                        <li><span>Student ID</span> 
                                            <input class="form-check-input" type="checkbox" value="" id="studentId">
                                            <label class="form-check-label" for="studentId">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Student Email</span> <input class="form-check-input" type="checkbox" value="" id="studentEmail"><label class="form-check-label" for="studentEmail">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>First Name</span> <input class="form-check-input" type="checkbox" value="" id="fName"><label class="form-check-label" for="fName">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Last Name</span> <input class="form-check-input" type="checkbox" value="" id="lName"><label class="form-check-label" for="lName">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Nationality</span> <input class="form-check-input" type="checkbox" value="" id="nationlty"><label class="form-check-label" for="nationlty">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruitment Partner</span> <input class="form-check-input" type="checkbox" value="" id="recuPart"><label class="form-check-label" for="recuPart">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruiter Type</span> <input class="form-check-input" type="checkbox" value="" id="recuType"><label class="form-check-label" for="recuType">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Education</span> <input class="form-check-input" type="checkbox" value="" id="education"><label class="form-check-label" for="education">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Applications</span> <input class="form-check-input" type="checkbox" value="" id="application"><label class="form-check-label" for="application">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Referral Source</span> <input class="form-check-input" type="checkbox" value="" id="referSour"><label class="form-check-label" for="referSour">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Lead Status</span> <input class="form-check-input" type="checkbox" value="" id="leadStat"><label class="form-check-label" for="leadStat">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
            

        </div>
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-12">
                    <div class="row overflow-hidden" id="student-table">
                        <div class="col-12 position-relative">
                            <div class="myftable">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center" scope="col">Actions</th>
                                            <th class="text-center" scope="col">Payment Date</th>
                                            <th class="text-center" scope="col">App ID</th>
                                            <th class="text-center" scope="col">Student ID</th>
                                            <th class="text-center" scope="col">Student Email ID</th>
                                            <th class="text-center" scope="col">Apply Date</th>
                                            <th class="text-center" scope="col">First Name</th>
                                            <th class="text-center" scope="col">Last Name</th>
                                            <th class="text-center" scope="col">Program</th>
                                            <th class="text-center" scope="col">School</th>
                                            <th class="text-center" scope="col">Start Date</th>
                                            <th class="text-center" scope="col">Recruitment Partner</th>
                                            <th class="text-center" scope="col">Status</th>
                                            <th class="text-center" scope="col">Requirements</th>
                                            <th class="text-center" scope="col">Current Stage</th>
                                            <th class="text-center" scope="col">View More</th>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">     
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
                                            <th scope="col">
                                                <div class="input-control">
                                                    <input type="text" class="form-control" name="appid">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="input-control">
                                                    <input type="text" class="form-control" name="student_id">
                                                </div>
                                            </th>
                                            <th scope="col"></td>
                                            <th scope="col"></td>
                                            <th scope="col">
                                                <div class="input-control">
                                                    <input type="text" class="form-control" name="fname">
                                                </div> 
                                             </th>
                                            <th scope="col">
                                                <div class="input-control">
                                                    <input type="text" class="form-control" name="lname">
                                                </div> 
                                            </th>
                                            <th scope="col">
                                                <div class="input-control">
                                                    <input type="text" class="form-control" name="program_name" style="width: 300px;">
                                                </div> 
                                            </th>
                                            <th scope="col">
                                                <div class="input-control">
                                                    <input type="text" class="form-control" name="school_name" style="width: 430px;">
                                                </div> 
                                            </th>
                                            <th scope="col">
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
                                            </th>
                                            <th scope="col">
                                                <div class="input-control">
                                                    <input type="text" class="form-control" name="requirement_partner" style="width: 200px;">
                                                </div>
                                            </th>
                                            <th scope="col"></td>
                                            <th scope="col">
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
                                            </th>
                                            <th scope="col">
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
                                            </th>
                                            <th scope="col"></td>
                                        </tr>
                                            
                                    </thead>
                                    <tbody> 
                                        <tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr><tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr><tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr><tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr><tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr>
                                        
                                        <tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <td class="text-center"><a href="#">2022-04-05</a></td>
                                            <td class="text-center"><a href="#">1943519</a></td>
                                            <td class="text-center"><a href="#">816669</a></td> 
                                            <td class="text-center"><a href="#">akashdeepsingh@gmail.com</a></td> 
                                            <td class="text-center"><span>2022-04-04</span></td>
                                            <td class="text-center"><span>Akashdeep Singh</span></td>
                                            <td class="text-center"><span>Singh</span></td>
                                            <td class="text-center"><span>2-Term Pathway - Foundation Certificate</span></td>
                                            <td class="text-center"><span><img class="me-2" src="assets/img/as.png" alt="" width="20">University of Brighton International College</span></td>
                                            <td class="text-center"><span>2022-09-01</span></td>
                                            <td class="text-center"><a href="#">moga@unitravel.in</a></td>
                                            <td class="text-center"><span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span></td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <div class="text-white">1</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">2</div>
                                                    </li>
                                                    <li>
                                                        <div class="text-white">3</div>
                                                    </li>
                                                </ul>
                                            </td> 
                                            <td class="text-center"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                                            <td class="text-center"><span class="application_view"><a href="#">View More</a></span></td> 
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col d-flex justify-content-start align-items-center py-3">

                    <div class="dropdown d-flex flex-row border-end pe-2">
                        <span class="d-flex align-items-center ">Row:</span>
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">  25  </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">10</a></li>
                            <li><a class="dropdown-item" href="#">20</a></li>
                            <li><a class="dropdown-item" href="#">50</a></li>
                            <li><a class="dropdown-item" href="#">100</a></li>
                        </ul>
                    </div>

                    <nav aria-label="Page navigation example " class="d-flex px-3">
                        <ul class="pagination p-0 m-0 pe-3">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                        <span class="d-flex align-items-center border-startps-2">1 - 20 of 292</span>
                    </nav>

                </div>

            </div>
        </div> 
    </div>

@endsection