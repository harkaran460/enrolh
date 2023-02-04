@extends('layouts.agent_app')
@section('content')
    @php $countries     = getCountry();@endphp
    @php $colleges      = getCollege();@endphp
    @php $inakesdate    = getIntekDate();@endphp
    @php $postdisciplines = getPostDiscipline();@endphp
    @php $subcategories = getSubCategories();@endphp
    @php $getPermitVisa = getPermitVisa();@endphp
    @php $getEducations = getEducation();@endphp
    @php $getGradingSchemes = getGradingScheme();@endphp
    @php $getEnglishexamType = getEnglishexamType();@endphp
 
    
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="review-main bg-white p-3">
                        <h3>Show Application</h3>
                        <ul>
                            <li><a href=""> Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href="recruitment-partners.php"> Recruitment Partners</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href="recruitment-partner-id.php"> EnrolHere</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href=""> Students</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href=""> Ramandeep Singh </a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href=""><b> Applications</b></a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href=""> [2217050] Graduate Certificate - Health Care Leadership - Canadian Context (5987) @ Sault College - Brampton</a></li>
                        </ul>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row mt-md-3">
                <div class="col-md-12">
                    <div class="bg-white p-3"> 
                        <ul class="steps">
                            <li class="step step--incomplete step--active">
                                <span class="step__icon"></span>
                                <span class="step__label">Pay Application Fee</span>
                            </li>
                            <li class="step step--incomplete step--inactive">
                                <span class="step__icon"></span>
                                <span class="step__label">Prepare Application</span>
                            </li>
                            <li class="step step--incomplete step--inactive">
                                <span class="step__icon"></span>
                                <span class="step__label">Submission In Progress</span>
                            </li>
                            <li class="step step--incomplete step--inactive">
                                <span class="step__icon"></span>
                                <span class="step__label">Decision</span>
                            </li>
                            <li class="step step--incomplete step--inactive">
                                <span class="step__icon"></span>
                                <span class="step__label">Post-Decision Requirements</span>
                            </li>
                            <li class="step step--incomplete step--inactive">
                                <span class="step__icon"></span>
                                <span class="step__label">Enrollment Confirmed</span>
                            </li>
                        </ul>
     
                    </div>
                </div>
            </div>
            <div class="row mt-md-3">
                <div class="col-md-12">
                    <a href="" class="application-cancelled"><i class="fa-solid fa-circle-exclamation"></i> Application Cancelled</a>
                </div>
            </div>
            <div class="row mt-md-3">
                <div class="col-md-5">
                    <div class="main-review-left">
                        <div class="css-1p7mtvv">
                            <div class="muiBox-img">
                                <img src="assetsStudent/img/user.svg" alt="" />
                            </div>
                            <div class="css-18xhlkt">
                                <img src="assetsStudent/img/college-logo.png" alt=""/>
                            </div>
                            <div class="css-11bq05t">
                                <div class="css-xdzpz9">
                                    <div class="sidebar-country">
                                        <img src="assetsStudent/img/country-logo.png" alt="">
                                    </div>
                                    <div class="css-1dt3oac">
                                        <a href="">Sheridan College - Davis</a>
                                    </div>
                                </div>
                                <div class="css-15zjdt5">
                                    <a href=""> College Diploma - Computer Systems Technician - Software Engineering (PCSSN)</a>
                                </div>
                                <div class="muiBox-root">
                                    <span class="css-wjljkp">Delivery Method: </span>
                                    <div class="jss1152">In-class</div>
                                </div>
                                <div class="muiBox-root">
                                    <span class="css-wjljkp">Level: </span>
                                    <span>2-Year Undergraduate Diploma</span>
                                </div>
                                <div class="muiBox-root">
                                    <span class="css-wjljkp">Required Level: </span>
                                    <span>Grade 12 / High School</span>
                                </div>
                                <div class="css-1rxnsrf">
                                    <span class="css-wjljkp">Application ID:</span>
                                    <span> 2233502</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-md-2">
                            <div class="col-md-4 text-center">
                                <p class="fs-4">Intake(s):</p>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option value="" selected >2023 - Jan.</option>
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
                            <i class="fa-solid fa-plus"></i>
                            <p class="fs-4">Add Backup Program</p>
                        </div>
                        <div class="row status">
                            <div class="col-md-4 text-center">
                                <p class="fs-4">Status:</p>
                            </div>
                            <div class="col-md-8">
                                <div class="form-check"> 
                                    <label class="form-check-label" for="ready-submit">
                                        Ready to Submit
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="" id="ready-submit">
                                </div>
                                <div class="form-check"> 
                                    <label class="form-check-label" for="submitted-school">
                                        Submitted to School
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="" id="submitted-school">
                                </div>
                                <div class="form-check"> 
                                    <label class="form-check-label" for="ready-visa">
                                        Ready for Visa
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="" id="ready-visa">
                                </div>
                                <div class="form-check"> 
                                    <label class="form-check-label" for="ready-enroll">
                                        Ready to Enroll
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="" id="ready-enroll">
                                </div>
                                <div class="form-check"> 
                                    <label class="form-check-label" for="enrollment-confirmed">
                                        Enrollment Confirmed
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="" id="enrollment-confirmed">
                                </div>
    
                                <div class="fs-4 mt-md-3">
                                    <p class="text-primary fs-4"> <b><i class="fa-solid fa-cart-shopping"></i> Pending </p></b></p>
                                </div>
                            </div>
                        </div>
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
                                                    <p class="fs-5">913705 <a href="">| Ramandeep Singh</a> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </h2>
                                    <div id="student-profile-collapseOne" class="accordion-collapse collapse show" aria-labelledby="student-profile-headingOne">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-4">  
                                                    <ul>
                                                        <li>Login Email</li>
                                                        <li>Primary Email </li>
                                                        <li>Birthday</li>
                                                        <li>Phone Number</li>
                                                        <li>First Language</li>
                                                        <li>Gender</li>
                                                        <li>Marital Status</li>
                                                        <li>Passport Number</li>
                                                        <li>Passport Expiry Date</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-8"> 
                                                    <ul>
                                                        <li>ramandee@gmail.com</li>
                                                        <li>ramandee@gmail.com</li>
                                                        <li>May 09, 1999 (23 years old)</li>
                                                        <li>+91-999-9999-999</li>
                                                        <li>Punjabi</li>
                                                        <li>Male</li>
                                                        <li>Single</li>
                                                        <li>V3461463</li>
                                                        <li>November 23, 2031</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="background-headingTwo">
                                        <div class="row"> 
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#background-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                <div class="col-md-4">
                                                    <p class="fs-4">Background :</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p class="fs-5 opacity-50">Nationality</p>
                                                    <p class="fs-5">India</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p class="fs-5 opacity-50">Residence</p>
                                                    <p class="fs-5">India</p>
                                                </div>
                                            </div>
                                        </div>
                                    </h2>
                                    <div id="background-collapseTwo" class="accordion-collapse collapse" aria-labelledby="background-headingTwo">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li>Street</li>
                                                        <li>City/Town</li>
                                                        <li>Country</li>
                                                        <li>Province/State</li>
                                                        <li>Postal/Zip</li>
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
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="education-headingThree">
                                        <div class="row"> 
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#education-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                <div class="col-md-4">
                                                    <p class="fs-4">Education:</p>
                                                </div>
                                                <div class="col-md-8">
                                                    <p class="fs-4">Bachelors <i class="fa-solid fa-graduation-cap"></i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </h2>
                                    <div id="education-collapseThree" class="accordion-collapse collapse" aria-labelledby="education-headingThree">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li>Country of Education</li>
                                                        <li>Grade</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
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
                                                        <li>School Name</li>
                                                        <li>Level</li>
                                                        <li>Language</li>
                                                        <li>Attended From</li>
                                                        <li>Attended To</li>
                                                        <li>Address</li> 
                                                        <li>Degree Name</li>
                                                        <li>Graduated?</li>
                                                        <li>Certificate Awarded?</li>
                                                        <li>Graduation Date</li>
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
                                                        <li class="opacity-50 ">N/A</li>
                                                        <li>Yes <i class="fa-solid fa-check"></i></li>
                                                        <li>Yes <i class="fa-solid fa-check"></i></li>
                                                        <li>2021-Jun-30</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <ul>
                                                        <li>School Name</li>
                                                        <li>Level</li>
                                                        <li>Language</li>
                                                        <li>Attended From</li>
                                                        <li>Attended To</li>
                                                        <li>Address</li> 
                                                        <li>Degree Name</li>
                                                        <li>Graduated?</li>
                                                        <li>Certificate Awarded?</li>
                                                        <li>Graduation Date</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-7">
                                                    <ul>
                                                        <li>PSEB</li>
                                                        <li>12</li>
                                                        <li>English</li>
                                                        <li>2017-Jul-01</li>
                                                        <li>2021-Jun-30</li>
                                                        <li>Baghapurana, Moga Punjab IN</li>
                                                        <li class="opacity-50 ">N/A</li>
                                                        <li>Yes <i class="fa-solid fa-check"></i></li>
                                                        <li>Yes <i class="fa-solid fa-check"></i></li>
                                                        <li>2021-Jun-30</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <ul>
                                                        <li>School Name</li>
                                                        <li>Level</li>
                                                        <li>Language</li>
                                                        <li>Attended From</li>
                                                        <li>Attended To</li>
                                                        <li>Address</li> 
                                                        <li>Degree Name</li>
                                                        <li>Graduated?</li>
                                                        <li>Certificate Awarded?</li>
                                                        <li>Graduation Date</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-7">
                                                    <ul>
                                                        <li>PSEB</li>
                                                        <li>12</li>
                                                        <li>English</li>
                                                        <li>2017-Jul-01</li>
                                                        <li>2021-Jun-30</li>
                                                        <li>Baghapurana, Moga Punjab IN</li>
                                                        <li class="opacity-50 ">N/A</li>
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
                            <div class="col-md-6">
                                <p class="fs-4">Payment:</p>
                            </div>
                            <div class="col-md-6">
                                <p class="fs-5 text-center opacity-50 ">Payment pending  </p>
                                <p class="fs-5">Application Fee &nbsp; &nbsp;
                                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Application Fee">$95.00 CAD</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 student-profile-review1"> 
                    
                    <div class="alert alert-warning alert-dismissible fade show fs-5" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Application will not be processed until payment received. <a href=""> View unpaid applications</a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
    
    
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="applicant-tab" data-bs-toggle="pill" data-bs-target="#pills-applicant" type="button" role="tab" aria-controls="pills-applicant" aria-selected="true"><i class="fa fa-file-text"></i> Applicant Requirements</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="records-tab" data-bs-toggle="pill" data-bs-target="#pills-records" type="button" role="tab" aria-controls="pills-records" aria-selected="false"><i class="fa-solid fa-book-medical"></i> Student Records</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="notes-tab" data-bs-toggle="pill" data-bs-target="#pills-notes" type="button" role="tab" aria-controls="pills-notes" aria-selected="false"><i class="fa-solid fa-comments"></i> Notes <div class="css-wyw5m9">1</div></button>
                        </li>
                    </ul>
     
                    <div class="download-all-btn">
                        <a href="">
                            <i class="fa fa-download"></i>
                            Download All
                        </a>
                    </div>
    
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-applicant" role="tabpanel" aria-labelledby="applicant-tab">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="panelsStayOpen-headingOne">
                                        <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            <div class="left-slide-heading">
                                                <h2> Pre-Payment </h2>
                                                <h6>Last requirement completed on Jul. 14, 2022</h6>
                                            </div>
                                            <div class="right-side-content">
                                                <div class="stage-card-summary">
                                                    <div class="css-1lrwgxh">
                                                        <div class="css-10vh6ur" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Missing">
                                                            <img src="assets/img/worning-icon.png" />
                                                            <div>0</div>
                                                        </div>
                                                        <div class="css-1q3p0bj" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Reviewing">
                                                            <img src="assets/img/load.png" />
                                                            <div>0</div>
                                                        </div>
                                                        <div class="css-n118i9" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Not Approved">
                                                            <img src="assets/img/worng-icon.png" />
                                                            <div>0</div>
                                                        </div>
                                                        <div class="css-epjyqf" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Completed">
                                                            <img src="assets/img/check-icon.png" />
                                                            <div>3</div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
    
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
                                                                        <div class="react_component_tooltip place-top type-dark" ></div>
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
                                             
                                        </div>
                                    </div>
                                </div>
    
                                <div class="accordion-item">
                                    <div class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            <div class="left-slide-heading">
                                                <h2> Pre-Submission </h2>
                                                <h6> 1 requirements to be completed </h6>
                                            </div>
                                            <div class="right-side-content">
                                                <div class="stage-card-summary">
                                                    <div class="css-1lrwgxh">
                                                        <div class="css-10vh6ur" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Missing">
                                                            <img src="assets/img/worning-icon.png" />
                                                            <div>0</div>
                                                        </div>
                                                        <div class="css-1q3p0bj" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Reviewing">
                                                            <img src="assets/img/load.png" />
                                                            <div>0</div>
                                                        </div>
                                                        <div class="css-n118i9" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Not Approved">
                                                            <img src="assets/img/worng-icon.png" />
                                                            <div>1</div>
                                                        </div>
                                                        <div class="css-epjyqf" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Completed">
                                                            <img src="assets/img/check-icon.png" />
                                                            <div>8</div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            
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
                                                                        <div class="react_component_tooltip place-top type-dark" ></div>
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
                                                                            <p>Attached Documents :</p>
                                                                            <div class="form-group">
                                                                                <input type="file" id="img-upload" class="form-control">
                                                                            </div>
                                                                            <div class="download">
                                                                                <a href="javascript:void(0)">
                                                                                    <i class="fa fa-download"></i>
                                                                                </a>
                                                                            </div> 
                                                                        </div> 
                                                                    </div>
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
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
                                                                        <div class="react_component_tooltip place-top type-dark" ></div>
                                                                        Passport Required - Yorkville University - All Programs
                                                                    </span>
                                                                </span>
                                                                <div class="req-desc css-lsgy9k">
                                                                    <div class="wrapped-content-upload"> 
                                                                        <p>Passport Required.</p>
                                                                        <div class="attached-documents">
                                                                            <p>Attached Documents :</p>
                                                                            <div class="form-group">
                                                                                <input type="file" id="img-upload" class="form-control">
                                                                            </div>
                                                                            <div class="download">
                                                                                <a href="javascript:void(0)">
                                                                                    <i class="fa fa-download"></i>
                                                                                </a>
                                                                            </div> 
                                                                        </div> 
                                                                    </div>
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
     
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
                                                                        <div class="react_component_tooltip place-top type-dark" ></div>
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-records" role="tabpanel" aria-labelledby="records-tab"> 
                            <ul class="progress-tracker progress-tracker--vertical">
                                <li class="progress-step is-complete">
                                    <div class="progress-marker"></div>
                                    <div class="progress-text">
                                        <span>06 Jul, 2022</span>
                                        <h4 class="progress-title">Application has been cancelled</h4>
                                    </div>
                                </li>
                                <li class="progress-step is-complete">
                                    <div class="progress-marker"></div>
                                    <div class="progress-text">
                                        <span>05 Jul, 2022</span>
                                        <h4 class="progress-title">Application Opened</h4>
                                        <p>As you progress through the application process, you will see documents provided by ApplyBoard here. These could come in the form of questions, documents, payments, invoices, and application statuses.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-notes" role="tabpanel" aria-labelledby="notes-tab">
                            <button class="add-notes">Add Note <i class="fa fa-plus"></i></button>
                            <div class="textarea-custom-slide">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter title here....">
                                </div>
                                <textarea name="editor" id="editor"></textarea> 
                            </div>
                            <div id="note-13049817" class="css-2ffflv">
                                <div class="css-1u9scmv">
                                    <div class="css-1l79525">
                                        <div class="css-y6n56z">
                                            <div class="css-m8p8pp">S.S.</div>
                                        </div>
                                    </div>
                                    <div class="css-6rn7bo">Sukhwinder Singh</div>
                                </div>
                                <div class="css-17d3wru">
                                    <div class="note-header css-wfrqu7">
                                        <div>Missing Documents</div>
                                        <div class="css-1yk831y">
                                            July 15th 2022, 19:49 
                                            <button class="css-gwj1t0">
                                                <span class="fa fa-link"></span>
                                            </button>
                                            <button class="css-gwj1t0">
                                                <span class="fa fa-reply"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="note-body css-1gqh339">
                                        <div class="ql-editor css-yq6lj">
                                            <p><span style="color: rgb(68, 68, 68);">Hi Sukhwinder, </span></p> 
                                            <p>Hope you are doing well.</p> 
                                            <p>
                                                Please be advised that there are missing requirements that are necessary prior to submitting this application. These can be found by referencing the missing documents listed in the
                                                <a href="" style="color: rgb(0, 100, 225);">Requirements tab</a> and any
                                                <span style="color: rgb(230, 0, 0);">Rejection</span> reasons.
                                            </p> 
                                            <p><strong style="background-color: rgb(255, 255, 0);">Please provide First page of the Passport.</strong></p>
                                            <p>We will continue to monitor your application, and will notify you if further documents are required, or when your application is ready to submit.</p>
                                            <p>Additionally, our Requirements section automatically notifies our team when any requirements are uploaded and ready to be reviewed. There is no longer a need to send a note to notify us of new document uploads. This is
                                                part of our effort to build a better ApplyBoard and provide you with great service!</p> 
                                            <p>Kind regards,</p> 
                                            <p><strong style="color: rgb(102, 163, 224);"> Sukhwinder Singh</strong></p>
                                            <p>Submission Team</p>
                                            <p>Enrol Here</p>
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
