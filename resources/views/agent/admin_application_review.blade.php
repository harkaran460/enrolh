@extends('layouts.agent_app')
@section('content')
 
    <div class="page-content">
        <div class="container-fluid">
             
            <div class="row">
                <div class="col-md-12">  
                    <div id="crumbs"> 
                        <ul>
                            <li><a href="#" class="application-active"><i class="fa-solid fa-check"></i><span> Pay Application Fee</span></a></li>
                            <li><a href="#" class="application-active"><i class="fa-solid fa-check"></i><span> Prepare Application</span></a></li>
                            <li><a href="#" class="application-active"><i class="fa-solid fa-check"></i><span> Submission In Progress</span></a></li>
                            <li><a href="#" class="application-active"><i class="fa-solid fa-check"></i><span> Decision</span></a></li> 
                            <li><a href="#" class="application-active"><i class="fa-solid fa-check"></i><span> Post-Decision Requirements</span></a></li>
                            <li><a href="#"><i class="fa-solid fa-check"></i><span> Enrollment Confirmed</span></a></li> 
                        </ul>
                    </div>
                </div> 
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="application-custom-box">
                        <div class="main-review-left">
                            
                            <div class="row mt-md-2">
                               
                                <div class="col-md-6">
                                    <div class="dropdown other_application">
                                        <button class="btn-other-application dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Other Applications
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Yorkville University - Toronto |  Bachelor of Interior Design</a></li> 
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                </div>
                                
                            </div>
                            
                            <div class="css-1p7mtvv">
                                <div class="muiBox-img">
                                    <img src="/assetsAgent/img/user.svg" class="img-fluid" alt="">
                                </div>
                                <div class="css-18xhlkt">
                                    <img src="/assetsAgent/img/college-logo.png" class="img-fluid" alt="">
                                </div>
                                <div class="css-11bq05t">
                                    <div class="css-xdzpz9">
                                        <div class="sidebar-country">
                                            <img src="/assetsAgent/img/country-logo.png" alt="">
                                        </div>
                                        <div class="css-1dt3oac">
                                            <a href="">Photograph - Ellesmere Port, North West, GB</a>
                                        </div>
                                    </div>
                                    <div class="css-15zjdt5">
                                        <a href="" class="fw-bold">PHP</a>
                                    </div>
                                    <div class="muiBox-root">
                                        <span class="css-wjljkp">Delivery Method: </span>
                                        <div class="jss1152">In-class</div>
                                    </div>
                                    <div class="muiBox-root">
                                        <span class="css-wjljkp">Level: </span>
                                        <span> 2-Year Undergradute Diploma	</span>
                                    </div>
                                    <div class="muiBox-root">
                                        <span class="css-wjljkp">Required Level: </span>
                                        <span>MCA</span>
                                    </div>
                                    <div class="css-1rxnsrf">
                                        <span class="css-wjljkp">Application ID:</span>
                                        <span> 78429398</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-md-2">
                                <div class="col-md-3">
                                    <p class="fs-4 fw-bold">Intake(s):</p>
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option value="" selected="">2023 - Jan.</option>
                                            <option value="">2023 - May.</option>
                                            <option value="">2023 - Sep.</option>
                                            <option value="">2024 - Jan.</option>
                                            <option value="">2024 - May.</option>
                                            <option value="">2024 - Sep.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="add-backup-program">
                                <i class="fa-solid fa-plus fs-5"></i>
                                <p class="fs-5">Add Backup Program</p>
                            </div>
                            <div class="row status">
                                <div class="col-md-12">
                                    <p class="fs-4 fw-bold">Status:</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check"> 
                                        <input class="form-check-input" type="checkbox" value="" id="ready-submit">
                                        <label class="form-check-label" for="ready-submit">
                                            Ready to Submit
                                        </label> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check"data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="You are not authorized to update status"> 
                                        <input class="form-check-input" type="checkbox" value="" id="submitted-school" checked >
                                        <label class="form-check-label" for="submitted-school">
                                            Submitted to School
                                        </label> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check"> 
                                        <input class="form-check-input" type="checkbox" value="" id="ready-visa">
                                        <label class="form-check-label" for="ready-visa">
                                            Ready for Visa
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check"> 
                                        <input class="form-check-input" type="checkbox" value="" id="ready-enroll">
                                        <label class="form-check-label" for="ready-enroll">
                                            Ready to Enroll
                                        </label>                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check"> 
                                        <input class="form-check-input" type="checkbox" value="" id="enrollment-confirmed">
                                        <label class="form-check-label" for="enrollment-confirmed">
                                            Enrollment Confirmed
                                        </label>                                        
                                    </div> 
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-md-2 text-center">

                                    <p class="text--custom fs-4 m-0 d-inline"> <b><i class="fa-solid fa-cart-shopping"></i> Pending </b></p> | 
                                    <p class="fs-4 m-0 text-success d-inline"> <b><i class="fa-solid fa-check"></i> Accepted </b></p> | 
                                    <p class="text-primary fs-4 m-0 d-inline"> <b><i class="fa-solid fa-hourglass-start"></i> Processing </b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="application-custom-box">
                        <div class="main-review-left">
                            <div class="row students-all-information">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="student-profile-headingOne">
                                            <div class="row">
                                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#student-profile-collapseOne" aria-expanded="true">
                                                    <div class="col-md-4">
                                                        <p class="fs-4">Student:</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p class="fs-4">17 <a href="" class="text--custom">| vinita kumari Sharma</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="student-profile-collapseOne" class="accordion-collapse collapse show" aria-labelledby="student-profile-headingOne">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-4">  
                                                        <ul>
                                                            <li class="fw-bold">Login Email</li>
                                                            <li class="fw-bold">Primary Email </li>
                                                            <li class="fw-bold">Birthday</li>
                                                            <li class="fw-bold">Phone Number</li>
                                                            <li class="fw-bold">First Language</li>
                                                            <li class="fw-bold">Gender</li>
                                                            <li class="fw-bold">Marital Status</li>
                                                            <li class="fw-bold">Passport Number</li>
                                                            <li class="fw-bold">Passport Expiry Date</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-8"> 
                                                        <ul>
                                                            <li>vinay@gmail.com</li>
                                                            <li>vinay@gmail.com</li>
                                                            <li>1990-09-28May 09, 1999 (23 years old)</li>
                                                            <li>8866889944+91-999-9999-999</li>
                                                            <li>HindiPunjabi</li>
                                                            <li>femaleMale</li>
                                                            <li>singleSingle</li>
                                                            <li>IND142563289NIV3461463</li>
                                                            <li>NA</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-none">
                                        <h2 class="accordion-header" id="background-headingTwo">
                                            <div class="row"> 
                                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#background-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                    <div class="col-md-4">
                                                        <p class="fs-4">Background :</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="fs-5 opacity-75">Nationality</p>
                                                        <p class="fs-5">India</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="fs-5 opacity-75">Residence</p>
                                                        <p class="fs-5">India</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="background-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="background-headingTwo">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li class="fw-bold">Street</li>
                                                            <li class="fw-bold">City/Town</li>
                                                            <li class="fw-bold">Country</li>
                                                            <li class="fw-bold">Province/State</li>
                                                            <li class="fw-bold">Postal/Zip</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <ul>
                                                            <li>Gurdev Member Wali Gali Bagha</li>
                                                            <li>Moga</li>
                                                            <li>India</li>
                                                            <li>Punjab</li>
                                                            <li>142038</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="application-custom-box">
                        <div class="main-review-left">
                            <div class="row students-all-information">
                                <div class="accordion" id="accordionPanelsStayOpenExample"> 
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="education-headingThree">
                                            <div class="row"> 
                                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#education-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                    <div class="col-md-5">
                                                        <p class="fs-4">Education:</p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <p class="fs-4">Bachelors <i class="fa-solid fa-graduation-cap"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="education-collapseThree" class="accordion-collapse collapse show" aria-labelledby="education-headingThree">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <ul>
                                                            <li>Country of Education</li>
                                                            <li>Grade</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <ul>
                                                            <li>India</li>
                                                            <li>First Class/Division</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="fs-4">Schools Attended</p>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <ul>
                                                            <li class="fw-bold">School Name</li>
                                                            <li class="fw-bold">Level</li>
                                                            <li class="fw-bold">Language</li>
                                                            <li class="fw-bold">Attended From</li>
                                                            <li class="fw-bold">Attended To</li>
                                                            <li class="fw-bold">Address</li> 
                                                            <li class="fw-bold">Degree Name</li>
                                                            <li class="fw-bold">Graduated?</li>
                                                            <li class="fw-bold">Certificate Awarded?</li>
                                                            <li class="fw-bold">Graduation Date</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <ul>
                                                            <li>Maharaja Ranjit University</li>
                                                            <li>17</li>
                                                            <li>English</li>
                                                            <li>2017-Jul-01</li>
                                                            <li>2021-Jun-30</li>
                                                            <li>Bathinda, Bathinda Punjab IN</li>
                                                            <li class="opacity-75 ">N/A</li>
                                                            <li>Yes <i class="fa-solid fa-check"></i></li>
                                                            <li>Yes <i class="fa-solid fa-check"></i></li>
                                                            <li>2021-Jun-30</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row students-all-payments">
                                <div class="col-md-4">
                                    <p class="fs-5">Payment:</p>
                                </div>
                                <div class="col-md-8">
                                    <p class="fs-5 text-center opacity-75 ">Payment pending  </p>
                                    <p class="fs-5 text-center">Application Fee &nbsp; &nbsp;
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Application Fee">$95.00 CAD</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="row"> 
                <div class="col-md-12">
                    <div class="mt-3 student-profile-review1"> 

                        <div class="alert alert-warning alert-dismissible fade show fs-5" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> Application will not be processed until payment received. <a href=""> View unpaid applications</a>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> 

                        <ul class="bg-white p-3 nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="applicant-tab2" data-bs-toggle="pill" data-bs-target="#pills-applicant2" type="button" role="tab" aria-controls="pills-applicant" aria-selected="true"><i class="fa fa-file-text"></i> Applicant Requirements</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="records-tab2" data-bs-toggle="pill" data-bs-target="#pills-records2" type="button" role="tab" aria-controls="pills-records" aria-selected="false"><i class="fa-solid fa-book-medical"></i> Student Records</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="notes-tab2" data-bs-toggle="pill" data-bs-target="#pills-notes2" type="button" role="tab" aria-controls="pills-notes" aria-selected="false"><i class="fa-solid fa-comments"></i> Notes <div class="css-wyw5m9">1</div></button>
                            </li>
                        </ul>

                       
                        <div class="row mt-md-3">
                            <div class="col-md-12"> 
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-applicant2" role="tabpanel" aria-labelledby="applicant-tab2">
                                        
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="download-all-btn">
                                                    <a href="">
                                                        <i class="fa fa-download"></i>
                                                        Download All
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header" id="panelsStayOpen-headingOne">
                                                            <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                                <div class="left-slide-heading">
                                                                    <h2> Status of Documents </h2>
                                                                    <!-- <h6>Last requirement completed on Jul. 14, 2022</h6> -->
                                                                </div>
                                                                <div class="right-side-content"> 
                                                                    
                                                                    <div class="stage-card-summary">
                                                                        <div class="css-1lrwgxh">
                                                                            <div class="css-10vh6ur" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Missing 0">
                                                                                <img src="/assetsAgent/img/worning-icon.svg">
                                                                                <!-- <div>0</div> -->
                                                                            </div>
                                                                            <div class="css-1q3p0bj" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Reviewing 0">
                                                                                <img src="/assetsAgent/img/load.svg">
                                                                                <!-- <div>0</div> -->
                                                                            </div>
                                                                            <div class="css-n118i9" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Not Approved 0">
                                                                                <img src="/assetsAgent/img/worng-icon.svg">
                                                                                <!-- <div>0</div> -->
                                                                            </div>
                                                                            <div class="css-epjyqf" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Completed 3">
                                                                                <img src="/assetsAgent/img/check-icon.svg">
                                                                                <!-- <div>3</div> -->
                                                                            </div>
                                                                        </div> 
                                                                    </div>

                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne" style="">
                                                            <div class="accordion-body"> 
                                                                <ul class="acccrodion-list-detalis">
                                                                    <li>
                                                                        <div role="listitem" class="css-rbi7dp">
                                                                            <div class="css-required">
                                                                                <div>
                                                                                    <span>Required</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="css-sohti2">
                                                                                <div class="MuiBox-root jss208 sc-dkzDqf jlXQtr">
                                                                                    <div class="MuiBox-root jss209 sc-dkzDqf jlXQtr css-1iwe4pm">
                                                                                        <div class="css-green">
                                                                                            <div class="css-1lp81ux">
                                                                                                <div class="css-1p0j8nq">
                                                                                                    <span class="fa fa-check"></span>
                                                                                                    <div class="css-fke44g">Completed</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="css-k28thh">
                                                                                            <span class="title-date">
                                                                                                <span class="requirement-title">
                                                                                                    <div class="react_component_tooltip place-top type-dark"></div>
                                                                                                    Country Specific GPA - India
                                                                                                </span>
                                                                                            </span>
                                                                                            <div class="req-desc css-lsgy9k">
                                                                                                <div class="wrapped-content"> 
                                                                                                    <p>For&nbsp;Indian&nbsp;applicants who completed Grade 12 in <strong>Central Board of Secondary Education</strong> (<strong>CBSE</strong>), please be advised that EACH of below is required for admission to this program:</p>
                                                                                                    <ul>
                                                                                                        <li>overall 33% (India grading scale) in Grade 12&nbsp;</li>
                                                                                                        <li>pass 5 subjects in Grace 12 (including language subjects)</li>
                                                                                                        <li>Trade transcripts are not accepted</li>
                                                                                                    </ul> 
                                                                                                    <p>For&nbsp;Indian&nbsp;applicants who completed Grade 12 in <strong>other school boards</strong>, please be advised that EACH of below is required for admission to this program:</p>
                                                                                                    <ul>
                                                                                                        <li>overall 40% (India grading scale) in Grade 12&nbsp;</li>
                                                                                                        <li>pass 5 subjects in Grace 12 (including language subjects)</li>
                                                                                                        <li>Trade transcripts are not accepted</li>
                                                                                                    </ul> 
                                                                                                </div>
                                                                                                <div class="css-see-less">
                                                                                                    <p>See Less <span class="fa fa-caret-up"></span>  </p>
                                                                                                </div>
                                                                                            </div> 
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div role="listitem" class="css-rbi7dp">
                                                                            <div class="css-required">
                                                                                <div>
                                                                                    <span>Required</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="css-sohti2">
                                                                                <div class="MuiBox-root jss208 sc-dkzDqf jlXQtr">
                                                                                    <div class="MuiBox-root jss209 sc-dkzDqf jlXQtr css-1iwe4pm">
                                                                                        <div class="css-green">
                                                                                            <div class="css-1lp81ux">
                                                                                                <div class="css-1p0j8nq">
                                                                                                    <span class="fa fa-check"></span>
                                                                                                    <div class="css-fke44g">Completed</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="css-k28thh">
                                                                                            <span class="title-date">
                                                                                                <span class="requirement-title">
                                                                                                    <div class="react_component_tooltip place-top type-dark"></div>
                                                                                                    Country Specific GPA - India
                                                                                                </span>
                                                                                            </span>
                                                                                            <div class="req-desc css-lsgy9k">
                                                                                                <div class="wrapped-content"> 
                                                                                                    <p>For&nbsp;Indian&nbsp;applicants who completed Grade 12 in <strong>Central Board of Secondary Education</strong> (<strong>CBSE</strong>), please be advised that EACH of below is required for admission to this program:</p>
                                                                                                    <ul>
                                                                                                        <li>overall 33% (India grading scale) in Grade 12&nbsp;</li>
                                                                                                        <li>pass 5 subjects in Grace 12 (including language subjects)</li>
                                                                                                        <li>Trade transcripts are not accepted</li>
                                                                                                    </ul> 
                                                                                                    <p>For&nbsp;Indian&nbsp;applicants who completed Grade 12 in <strong>other school boards</strong>, please be advised that EACH of below is required for admission to this program:</p>
                                                                                                    <ul>
                                                                                                        <li>overall 40% (India grading scale) in Grade 12&nbsp;</li>
                                                                                                        <li>pass 5 subjects in Grace 12 (including language subjects)</li>
                                                                                                        <li>Trade transcripts are not accepted</li>
                                                                                                    </ul> 
                                                                                                </div>
                                                                                                <div class="css-see-less">
                                                                                                    <p>See Less <span class="fa fa-caret-up"></span>  </p>
                                                                                                </div>
                                                                                            </div> 
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div role="listitem" class="css-rbi7dp">
                                                                            <div class="css-required">
                                                                                <div>
                                                                                    <span>Required</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="css-sohti2">
                                                                                <div class="MuiBox-root jss208 sc-dkzDqf jlXQtr">
                                                                                    <div class="MuiBox-root jss209 sc-dkzDqf jlXQtr css-1iwe4pm">
                                                                                        <div class="css-green">
                                                                                            <div class="css-1lp81ux">
                                                                                                <div class="css-1p0j8nq">
                                                                                                    <span class="fa fa-check"></span>
                                                                                                    <div class="css-fke44g">Completed</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="css-k28thh">
                                                                                            <span class="title-date">
                                                                                                <span class="requirement-title">
                                                                                                    <div class="react_component_tooltip place-top type-dark"></div>
                                                                                                    Certificate for 3-Year Bachelor's Degree from Kurukshetra University
                                                                                                </span>
                                                                                            </span>
                                                                                            <div class="req-desc css-lsgy9k">
                                                                                                <div class="wrapped-content-upload"> 
                                                                                                    <p>Please provide a clear and legible photocopy of the applicant's certificate which meets the following requirements: </p>
                                                                                                    <ul>
                                                                                                        <li>The acceptable formats of the photocopy are .PDF, .JPEG or .PNG</li>
                                                                                                        <li>The photocopy needs to be entire with no cut-off at the edges</li>
                                                                                                    </ul> 
                                                                                                    <p>Please be advised that the file size limit of the photocopy is 20MB.</p>
                                                                                                    
                                                                                                    <div class="attached-documents">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-4">
                                                                                                                <p>Attached Documents :</p>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="dowonload-icon-btn d-flex">
                                                                                                                    <div class="form-group">
                                                                                                                        <input type="file" id="img-upload" class="form-control">
                                                                                                                    </div>
                                                                                                                    
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        
                                                                                                    </div> 
                                                                                                    <div class="row mt-md-3">
                                                                                                        <div class="col-md-6">
                                                                                                            <select class="form-select custom_select" aria-label="Default select example">
                                                                                                                <option value="approved" selected>Approved</option>
                                                                                                                <option value="disapprove">Disapprove</option> 
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> 
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div role="listitem" class="css-rbi7dp">
                                                                            <div class="css-required">
                                                                                <div>
                                                                                    <span>Required</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="css-sohti2">
                                                                                <div class="MuiBox-root jss208 sc-dkzDqf jlXQtr">
                                                                                    <div class="MuiBox-root jss209 sc-dkzDqf jlXQtr css-1iwe4pm">
                                                                                        <div class="css-green">
                                                                                            <div class="css-1lp81ux">
                                                                                                <div class="css-1p0j8nq">
                                                                                                    <span class="fa fa-check"></span>
                                                                                                    <div class="css-fke44g">Completed</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="css-k28thh">
                                                                                            <span class="title-date">
                                                                                                <span class="requirement-title">
                                                                                                    <div class="react_component_tooltip place-top type-dark"></div>
                                                                                                    Certificate for 3-Year Bachelor's Degree from Kurukshetra University
                                                                                                </span>
                                                                                            </span>
                                                                                            <div class="req-desc css-lsgy9k">
                                                                                                <div class="wrapped-content-upload"> 
                                                                                                    <p>Please provide a clear and legible photocopy of the applicant's certificate which meets the following requirements: </p>
                                                                                                    <ul>
                                                                                                        <li>The acceptable formats of the photocopy are .PDF, .JPEG or .PNG</li>
                                                                                                        <li>The photocopy needs to be entire with no cut-off at the edges</li>
                                                                                                    </ul> 
                                                                                                    <p>Please be advised that the file size limit of the photocopy is 20MB.</p>
                                                                                                    
                                                                                                    <div class="attached-documents">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-4">
                                                                                                                <p>Attached Documents :</p>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="dowonload-icon-btn d-flex">
                                                                                                                    <div class="form-group">
                                                                                                                        <input type="file" id="img-upload" class="form-control">
                                                                                                                    </div>
                                                                                                                    
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="row mt-md-3">
                                                                                                        <div class="col-md-6">
                                                                                                            <select class="form-select custom_select" aria-label="Default select example">
                                                                                                                <option value="approved" selected>Approved</option>
                                                                                                                <option value="disapprove">Disapprove</option> 
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> 
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div role="listitem" class="css-rbi7dp">
                                                                            <div class="css-optional">
                                                                                <div>
                                                                                    <span>Optional</span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="css-sohti2">
                                                                                <div class="MuiBox-root jss208 sc-dkzDqf jlXQtr">
                                                                                    <div class="MuiBox-root jss209 sc-dkzDqf jlXQtr css-1iwe4pm">
                                                                                        <div class="css-status">
                                                                                            <div class="css-1lp81ux">
                                                                                                <div class="css-1p0j8nq">
                                                                                                    <span class="fa fa-ban"></span>
                                                                                                    <div class="css-fke44g">No Status</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="css-k28thh">
                                                                                            <span class="title-date">
                                                                                                <span class="requirement-title">
                                                                                                    <div class="react_component_tooltip place-top type-dark"></div>
                                                                                                        Post Secondary Education Course Outlines
                                                                                                </span>
                                                                                            </span>
                                                                                            <div class="req-desc css-lsgy9k">
                                                                                                <div class="wrapped-content-upload"> 
                                                                                                    <p>For applicants who have post secondary education and intend to request transfer credit, please upload Course Outlines for the related post secondary subjects here.</p>
                                                                                                    <p>Providing related course outlines will help school to evaluate the applicant's post secondary credentials more accurate. However it is NOT mandatory to provide.</p>
                                                                                                    <p>Please note that transfer credit given and course outline evaluation is school's case by case decision and  there is NO guarantee for any transfer credit. </p>
                                                                                                    <div class="attached-documents">
                                                                                                        <label> 0 File Upload</label> 
                                                                                                    </div> 
                                                                                                     <div class="row mt-md-3">
                                                                                                        <div class="col-md-6">
                                                                                                            <select class="form-select custom_select" aria-label="Default select example">
                                                                                                                <option value="approved" selected>Approved</option>
                                                                                                                <option value="disapprove">Disapprove</option> 
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> 
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div role="listitem" class="css-rbi7dp">
                                                                            <div class="css-required">
                                                                                <div>
                                                                                    <span>Required</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="css-sohti2">
                                                                                <div class="MuiBox-root jss208 sc-dkzDqf jlXQtr">
                                                                                    <div class="MuiBox-root jss209 sc-dkzDqf jlXQtr css-1iwe4pm">
                                                                                        <div class="css-red">
                                                                                            <div class="css-1lp81ux">
                                                                                                <div class="css-1p0j8nq">
                                                                                                    <span class="fa fa-times"></span>
                                                                                                    <div class="css-fke44g">Not Approved</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="css-k28thh">
                                                                                            <span class="title-date">
                                                                                                <span class="requirement-title">
                                                                                                    <div class="react_component_tooltip place-top type-dark"></div>
                                                                                                    Passport Required - Yorkville University - All Programs
                                                                                                </span>
                                                                                            </span>
                                                                                            <div class="req-desc css-lsgy9k">
                                                                                                <div class="wrapped-content-upload"> 
                                                                                                    <p>Passport Required.</p>
                                                                                                    <div class="attached-documents">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-4">
                                                                                                                <p>Attached Documents :</p>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="dowonload-icon-btn d-flex">
                                                                                                                    <div class="form-group">
                                                                                                                        <input type="file" id="img-upload" class="form-control">
                                                                                                                    </div>
                                                                                                                     
                                                                                                                </div> 
                                                                                                            </div>
                                                                                                        </div> 
                                                                                                    </div> 
                                                                                                     <div class="row mt-md-3">
                                                                                                        <div class="col-md-6">
                                                                                                            <select class="form-select custom_select" aria-label="Default select example">
                                                                                                                <option value="approved" selected>Approved</option>
                                                                                                                <option value="disapprove">Disapprove</option> 
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> 
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                     
                                                </div>
                                            </div>
                                             
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-records2" role="tabpanel" aria-labelledby="records-tab2">  
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="main-timeline">
                                                    <div class="timeline">
                                                        <a href="#" class="timeline-content">
                                                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div> 
                                                            <ul>
                                                                <li class="title">Application Opened</li>
                                                                <li class="date">24 May, 2022</li>
                                                            </ul>
                                                            <p class="description">As you progress through the application process, you will see documents provided by ApplyBoard here. These could come in the form of questions, documents, payments, invoices, and application statuses.</p>
                                                        </a>
                                                    </div>
                                                    <div class="timeline">
                                                        <a href="#" class="timeline-content">
                                                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div> 
                                                            <ul>
                                                                <li class="title">Application Opened</li>
                                                                <li class="date">24 May, 2022</li>
                                                            </ul>
                                                            <p class="description">As you progress through the application process, you will see documents provided by ApplyBoard here. These could come in the form of questions, documents, payments, invoices, and application statuses.</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-notes2" role="tabpanel" aria-labelledby="notes-tab2">
                                        <div class="bg-white p-3">
                                            <div class="textarea-custom-slide">
                                                <div class="form-group"> 
                                                     <!--<input type="text" name="editor1" id="notes_title" class="form-control" placeholder="Enter title here....">-->
                                                </div>
                                            </div>
                                            
                                            <textarea id="post_text" class="post-area"> </textarea>
                                            <button type="button" class="btn btn-primary" >Save</button>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection