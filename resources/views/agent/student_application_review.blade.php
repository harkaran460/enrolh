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
    @php $astatus = $student_details->application_status;@endphp

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="review-main pt-3 pb-2">
                        <h3>Show Application
                            @if ($astatus < 11)
                            <a class="btn btn-warning btn-sm px-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Pending</a>
                            @endif
                            @if ($astatus == 11)
                            <a class="btn btn-danger btn-sm px-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Cancel</a>
                            @endif
                            @if (($astatus == 12) && ($student_details->paymentstatus >1))
                            <a class="btn btn-success btn-sm px-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Approved</a>
                            @elseif(($astatus == 12) && ($student_details->paymentstatus < 2))
                            <a class="btn btn-warning btn-sm px-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> &nbsp; Payment Pending</a>
                            @endif
                        </h3>
                        <!--<span class="badge bg-danger text-white float-end">Pending</span>-->
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item">Dashboard</li>&nbsp; /
                                <li class="breadcrumb-item">Application</li>&nbsp; /
                                    <li class="breadcrumb-item" aria-current="page">Students</li>&nbsp; /
                                        <li class="breadcrumb-item" aria-current="page">{{ $student_details->first_name }} {{ $student_details->middle_name }}</li>&nbsp; /
                                            <li class="breadcrumb-item" aria-current="page">Applications</li>&nbsp; /
                                                <li class="breadcrumb-item active" aria-current="page">{{ $student_details->program_college_name }} - {{ $student_details->college_address }}</li>&nbsp; /
                          </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-end">
                        <div class="dropdown cencel_document">
                            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical "></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" onclick="statusChange({{ $student_details->app_id}},11)">Cancel Application</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="msg_pass"></div>
            <div id="suceess_pass"></div>
            <div class="row mt-md-3">
                <div class="col-md-12">
                    <div id="crumbs">
                        <ul>

                            <li><a href="#"
                                    class="@if (($astatus >= 0) && ($student_details->paymentstatus >1)) application-active @else '' @endif "><i
                                        class="fa-solid fa-check"></i><span> Pay Application Fee</span></a></li>
                            <li><a href="#"
                                    class="@if (($astatus >= 2) && ($student_details->paymentstatus >1)) application-active @else '' @endif "><i
                                        class="fa-solid fa-check"></i><span> Prepare Application</span></a></li>
                            <li><a href="#"
                                    class="@if (($astatus >= 3) && ($student_details->paymentstatus >1)) application-active @else '' @endif "><i
                                        class="fa-solid fa-check"></i><span> Submission In Progress</span></a></li>
                            <li><a href="#"
                                    class="@if (($astatus >= 4) && ($student_details->paymentstatus >1)) application-active @else '' @endif "><i
                                        class="fa-solid fa-check"></i><span> Decision</span></a></li>
                            <li><a href="#"
                                    class="@if (($astatus >= 5)  && ($student_details->paymentstatus >1)) application-active @else '' @endif "><i
                                        class="fa-solid fa-check"></i><span> Post-Decision Requirements</span></a></li>
                            <li><a href="#"
                                    class="@if (($astatus >= 12)  && ($student_details->paymentstatus >1)) application-active @else '' @endif "><i
                                        class="fa-solid fa-check"></i><span> Enrollment Confirmed</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="application-custom-box my-3">
                        <div class="main-review-left">

                            <div class="css-1p7mtvv">
                                <!--<div class="muiBox-img">-->
                                <!--    <img src="/assetsAgent/img/user.svg" class="img-fluid" alt="">-->
                                <!--</div>-->

                                <div class="css-11bq05t">
                                    <div class="css-xdzpz9">
                                        <div class="sidebarcountry position-relative">
                                            <img width="73px" height="73px" class="rounded-circle"
                                                src="{{ url('/images/' . $student_details->college_logo) }}"
                                                alt="{{ $student_details->program_college_name }}" />
                                                <div class="css-18xhlkt">
                                    <img src="/assetsAgent/img/college-logo.png" class="img-fluid" alt="">
                                </div>
                                        </div>
                                        <div class="css-1dt3oac">
                                            <a href="/agent-college-details/{{ $student_details->college_id }}"
                                                class="fw-bold">{{ $student_details->program_college_name }}
                                                - {{ $student_details->college_address }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="css-15zjdt5">
                                        <a href="/agent-program-details/{{ $student_details->progoramid }}"
                                            class="fw-bold">{{ $student_details->programs_name }}</a>
                                    </div>
                                    <div class="muiBox-root">
                                        <span class="css-wjljkp">Delivery Method: </span>
                                        <div class="jss1152">In-class</div>
                                    </div>
                                    <div class="muiBox-root">
                                        <span class="css-wjljkp">Level: </span>
                                        <span> {{ $student_details->level_of_education }} </span>
                                    </div>
                                    <div class="muiBox-root">
                                        <span class="css-wjljkp">Required Level: </span>
                                        <span>{{ $student_details->minimum_level_of_education_completed }}</span>
                                    </div>
                                    <div class="css-1rxnsrf">
                                        <span class="css-wjljkp">Application ID:</span>
                                        <span> {{ $student_details->app_id }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-md-2">
                                <div class="col-md-3">
                                    <p class=" fw-bold">Intake(s):</p>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option value="" selected disabled>
                                                {{ date('Y-M', strtotime($student_details->earliest_intake_date)) }}
                                            </option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="add-backup-program">
                                <i class="fa-solid fa-plus "></i>
                                <p class="">Add Backup Program</p>
                            </div>
                            <div class="row status">
                                <div class="col-md-12">
                                    <p class=" fw-bold">Status:</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="ready-submit"
                                        @if (($astatus >= 7)  && ($student_details->paymentstatus >1)) checked @else {{"disabled"}} @endif>
                                        <label class="form-check-label" for="ready-submit">
                                            Ready to Submit
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="submitted-school"
                                        @if (($astatus >= 8)  && ($student_details->paymentstatus >1)) checked @else {{"disabled"}} @endif>
                                        <label class="form-check-label" for="submitted-school">
                                            Submitted to School
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="ready-visa"
                                        @if (($astatus >= 9)  && ($student_details->paymentstatus >1)) checked @else {{"disabled"}} @endif>
                                        <label class="form-check-label" for="ready-visa">
                                            Ready for Visa
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="ready-enroll"
                                        @if (($astatus >= 10)  && ($student_details->paymentstatus >1)) checked @else {{"disabled"}} @endif>
                                        <label class="form-check-label" for="ready-enroll">
                                            Ready to Enroll
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="enrollment-confirmed"
                                            @if (($astatus >= 12)  && ($student_details->paymentstatus >1)) checked @else {{"disabled"}} @endif>
                                        <label class="form-check-label" for="enrollment-confirmed">
                                            Enrollment Confirmed
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-md-2 text-center">
                                    <p class="text--custom m-0"> <b><i class="fa-solid fa-cart-shopping"></i>

                                            <?php if(($astatus >= 12) && ($student_details->paymentstatus >1)) {
                                                echo 'Completed';
                                            } else {
                                                echo 'Pending';
                                            } ?> </b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="application-custom-box my-3">
                        <div class="main-review-left">
                            <div class="row students-all-information">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="student-profile-headingOne">
                                            <div class="row">
                                                <div class="accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#student-profile-collapseOne" aria-expanded="true">
                                                    <div class="col-md-4">
                                                        <p class="">Student:</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p class=""><a
                                                                href="/agent-student-profile/{{ $student_details->student_id }}">{{ $student_details->student_id }}</a>
                                                            | <a href="/agent-student-profile/{{ $student_details->student_id }}"
                                                                class="text--custom"> {{ $student_details->first_name }}
                                                                {{ $student_details->middle_name }}
                                                                {{ $student_details->last_name }}</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="student-profile-collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="student-profile-headingOne">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <ul>
                                                            <!--<li class="fw-bold">Login Email</li>-->
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
                                                    <div class="col-8">
                                                        <ul>
                                                            <?php
                                                            $currentDate = date('d-m-Y');
                                                            $age = date_diff(date_create($student_details->date_of_birth), date_create($currentDate));
                                                            ?>
                                                            <!--<li>{{ $student_details->email }}</li>-->
                                                            <li>{{ $student_details->email }}</li>
                                                            <li> <br />{{ date('M d, Y', strtotime($student_details->date_of_birth)) }}
                                                                (<?php echo $age->format('%y'); ?> years old)</li>
                                                            <li><br />+91- {{ $student_details->phone_number }}</li>
                                                            <li><br /><?php echo ucwords($student_details->first_language); ?></li>
                                                            <li><?php echo ucwords($student_details->gender); ?></li>
                                                            <li><?php echo ucwords($student_details->marital_status); ?> </li>
                                                            <li><br /><?php echo ucwords($student_details->passport_number); ?></li>
                                                            <li><br />NA</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-none">
                                        <h2 class="accordion-header" id="background-headingTwo">
                                            <div class="row">
                                                <div class="accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#background-collapseTwo" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                    <div class="col-md-4 ">
                                                        <p class="">Background :</p>
                                                    </div>
                                                    <div class="col-md-4 ps-2">
                                                        <p class=" opacity-50">Nationality</p>
                                                        <p class="">{{ $student_details->country_of_citizenship }}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 ps-2">
                                                        <p class=" opacity-50">Residence</p>
                                                        <p class="">{{ $student_details->country }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="background-collapseTwo" class="accordion-collapse collapse show"
                                            aria-labelledby="background-headingTwo">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <ul>
                                                            <li class="fw-bold">Street</li>
                                                            <li class="fw-bold">City/Town</li>
                                                            <li class="fw-bold">Country</li>
                                                            <li class="fw-bold">Province/State</li>
                                                            <li class="fw-bold">Postal/Zip</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-8">
                                                        <ul>
                                                            <li>{{ $student_details->address }}</li>
                                                            <li>{{ $student_details->city_town }}</li>
                                                            <li>{{ $student_details->country }}</li>
                                                            <li>{{ $student_details->province_state }}</li>
                                                            <li>{{ $student_details->postal_code }}</li>
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
                    <div class="application-custom-box my-3">
                        <div class="main-review-left">
                            <div class="row students-all-information">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="education-headingThree">
                                            <div class="row">
                                                <div class="accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#education-collapseThree" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseThree">
                                                    <div class="col-5">
                                                        <p class="">Education:</p>
                                                    </div>
                                                    <div class="col-7">
                                                        <p class="">Bachelors <i
                                                                class="fa-solid fa-graduation-cap"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="education-collapseThree" class="accordion-collapse collapse show"
                                            aria-labelledby="education-headingThree">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <ul>
                                                            <li>Country of Education</li>
                                                            <li>Grade</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-7">
                                                        <ul>
                                                            <li>{{ $student_details->country_of_education }} </li>
                                                            <li>{{ $student_details->highest_level_of_education }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="">Schools Attended</p>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-5">
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
                                                    <div class="col-7">
                                                        <ul>
                                                            <li> {{ $student_details->name_of_institution }} </li>
                                                            <li>{{ $student_details->level_of_education }}</li>
                                                            <li><?php echo ucwords($student_details->primary_language_of_instruction); ?> </li>
                                                            <li>{{ date('Y-M-d', strtotime($student_details->attended_institution_from)) }}
                                                            </li>
                                                            <li>{{ date('Y-M-d', strtotime($student_details->attended_institution_to)) }}
                                                            </li>
                                                            <li>{{ $student_details->school_address }},
                                                                {{ $student_details->school_city_town }},
                                                                {{ $student_details->school_province }}</li>
                                                            @if ($student_details->degree_name)
                                                                <li>{{ $student_details->degree_name }}</li>
                                                            @else
                                                                <li class="opacity-50 "> N/A </li>
                                                            @endif
                                                            @if ($student_details->graduated_institution == 1)
                                                                <li>Yes <i class="fa-solid fa-check"></i></li>
                                                            @else
                                                                <li class="opacity-50 "> N/A </li>
                                                            @endif

                                                            @if ($student_details->physical_certificate_for_this_degree == 1)
                                                                <li>Yes <i class="fa-solid fa-check"></i></li>
                                                            @else
                                                                <li class="opacity-50 "> N/A </li>
                                                            @endif

                                                            <li>{{ date('Y-M-d', strtotime($student_details->graduation_date)) }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row students-all-payments">
                                <div class="col-4">
                                    <p class="">Payment:</p>
                                </div>
                                <div class="col-8">
                                    <p class=" text-center opacity-50 ">{{ $student_details->payment_status }} </p>
                                    <p class=" text-center">Application Fee &nbsp; &nbsp;
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                            data-bs-original-title="Application Fee">{{ $student_details->application_fee_min }}</span>
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

                        <div class="alert font-resp alert-warning alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> Application will not be processed until
                            payment received. <a href=""> View unpaid applications</a>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <ul class="bg-white p-3 nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="applicant-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-applicant2" type="button" role="tab"
                                    aria-controls="pills-applicant" aria-selected="true"><i class="fa fa-file-text"></i>
                                    Applicant Requirements</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="records-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-records2" type="button" role="tab"
                                    aria-controls="pills-records" aria-selected="false"><i
                                        class="fa-solid fa-book-medical"></i> Student Records</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="notes-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-notes2" type="button" role="tab"
                                    aria-controls="pills-notes" aria-selected="false"><i
                                        class="fa-solid fa-comments"></i> Notes <!--<div class="css-wyw5m9">1</div>--></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="docs-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-docs2" type="button" role="tab"
                                    aria-controls="pills-docs" aria-selected="false"><i
                                        class="fa-solid fa-comments"></i> Documents by Enrolhere</button>
                            </li>
                            <li class=" d-flex">
                                                {{-- <div class="download-all-btn">
                                                    <a href="">
                                                        <i class="fa fa-download"></i>
                                                        Download All
                                                    </a>
                                                </div> --}}
                                            </li>
                        </ul>


                        <div class="row mt-md-3">
                            <div class="col-md-12">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-applicant2" role="tabpanel"
                                        aria-labelledby="applicant-tab2">

                                        <div class="row">


                                            <div class="col-md-12">
                                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header" id="panelsStayOpen-headingOne">
                                                            <div class="accordion-button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseOne"
                                                                aria-expanded="true"
                                                                aria-controls="panelsStayOpen-collapseOne">
                                                                <div class="left-slide-heading">
                                                                    <h2> Status of Documents </h2>
                                                                    <!-- <h6>Last requirement completed on Jul. 14, 2022</h6> -->
                                                                </div>
                                                                <div class="right-side-content">

                                                                    <div class="stage-card-summary">
                                                                        <div class="css-1lrwgxh">
                                                                            <div class="css-10vh6ur" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Missing {{$missing_doc}}">
                                                                                <img  src="/assetsAgent/img/worning-icon.svg">
                                                                                <!-- <div>0</div> -->
                                                                            </div>
                                                                            <div class="css-1q3p0bj" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Reviewing {{$upload_doc_review_count}}">
                                                                                <img src="/assetsAgent/img/load.svg">
                                                                                <!-- <div>0</div> -->
                                                                            </div>
                                                                            <div class="css-n118i9" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Not Approved {{$upload_doc_canciled_count}}">
                                                                                <img src="/assetsAgent/img/worng-icon.svg">
                                                                                <!-- <div>0</div> -->
                                                                            </div>
                                                                            <div class="css-epjyqf" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Completed {{$upload_doc_verifiyed_count}}">
                                                                                <img src="/assetsAgent/img/check-icon.svg">
                                                                                <!-- <div>3</div> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="panelsStayOpen-collapseOne"
                                                            class="accordion-collapse collapse show"
                                                            aria-labelledby="panelsStayOpen-headingOne" style="">
                                                            <div class="accordion-body">
                                                                <ul class="acccrodion-list-detalis">



                                                                    @if (!empty($doc_requirment))
                                                                        @foreach ($doc_requirment as $doc_list)
                                                                        @csrf


                                                                            <li>
                                                                                <div role="listitem" class="css-rbi7dp">
                                                                                    @if ($doc_list->required_field == 1)
                                                                                        <div class="css-required">
                                                                                            <div>
                                                                                                <span>Required</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    @else
                                                                                        <div class="css-optional">
                                                                                            <div>
                                                                                                <span>Optional</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif

                                                                                    <div class="css-1lp81ux">
                                                                                        <div class="css-1p0j8nq" style="display: none"
                                                                                            id="complete<?php echo $doc_list->id; ?>">
                                                                                            <span
                                                                                                class="fa fa-check"></span>
                                                                                            <div
                                                                                                class="css-fke44g">
                                                                                                Completed
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>




                                                                                    <div class="css-1lp81ux">
                                                                                        <?php if(count($upload_doc_details)>0 ){?>
                                                                                        <div class="css-1p0j8nq"
                                                                                            id="pending<?php echo $doc_list->id; ?>">
                                                                                            <?php foreach ($upload_doc_details as $imgdetails) {
                                                                                                $docid[] = $imgdetails->doc_id;
                                                                                                $image_name[] = $imgdetails->image_name;
                                                                                            }
                                                                                            if (!empty($docid)) {
                                                                                                if (in_array($doc_list->id, $docid)) {
                                                                                                    echo ' <span class="fa fa-check"></span> <div class="css-fke44g">Completed</div>';
                                                                                                } else {
                                                                                                    echo '<span class="fa fa-info-circle" style="color: #FFC72D"></span> <div class="css-fke44g" style="color: #FFC72D">Pending</div> ';
                                                                                                }
                                                                                            } ?>
                                                                                           </div>
                                                                                          <?php
                                                                                          }
                                                                                            else
                                                                                            {?>
                                                                                         <div class="css-1p0j8nq" id="pending<?php echo $doc_list->id; ?>">
                                                                                            <span class="fa fa-info-circle"  style="color: #FFC72D"></span>
                                                                                            <div class="css-fke44g" style="color: #FFC72D">
                                                                                                Pending
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php }?>
                                                                                    </div>


                                                                                    <div class="css-sohti2">
                                                                                        <div
                                                                                            class="MuiBox-root jss208 sc-dkzDqf jlXQtr">
                                                                                            <div
                                                                                                class="MuiBox-root jss209 sc-dkzDqf jlXQtr css-1iwe4pm">
                                                                                                <div class="css-green">



                                                                                                </div>
                                                                                                <div class="css-k28thh">
                                                                                                    <span
                                                                                                        class="title-date">
                                                                                                        <span
                                                                                                            class="requirement-title">
                                                                                                            <div
                                                                                                                class="react_component_tooltip place-top type-dark">
                                                                                                            </div>
                                                                                                            {{ $doc_list->document_name }}
                                                                                                        </span>
                                                                                                    </span>
                                                                                                    <div
                                                                                                        class="req-desc css-lsgy9k">
                                                                                                        <div
                                                                                                            class="wrapped-content">
                                                                                                            <p>{{ $doc_list->description }}
                                                                                                            </p>

                                                                                                        </div>
                                                                                                        @if ($doc_list->upload_status == 1)
                                                                                                            <div
                                                                                                                class="req-desc css-lsgy9k">
                                                                                                                <div
                                                                                                                    class="wrapped-content-upload">
                                                                                                                    <p>Please provide a clear and legible photocopy of the applicant's certificate which meets the following requirements:</p>                                                                                                                    <ul>
                                                                                                                        <li>The acceptable formats of the photocopy are .PDF, .JPEG or .PNG </li>
                                                                                                                        <li>The photocopy needs to be entire with no cut-off at the edges </li>
                                                                                                                    </ul>
                                                                                                                    <p>Please be advised that the file size limit of the photocopy is 20MB. </p>

                                                                                                                    <div class="attached-documents">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-4">
                                                                                                                                <p>Attached Documents :
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                            <div class="col-md-8">
                                                                                                                                <div
                                                                                                                                    class="dowonload-icon-btn">


                                                                                                                                            <input
                                                                                                                                            type="file"
                                                                                                                                            id="img-upload<?php echo $doc_list->id; ?>"
                                                                                                                                            class="form-control fileupload"
                                                                                                                                            onchange="docupload(<?php echo $doc_list->id; ?>,<?php echo $student_details->id; ?>,<?php echo $student_details->app_id; ?>);">
                                                                                                                                            <span
                                                                                                                                            id="suceess<?php echo $doc_list->id; ?>"
                                                                                                                                            style="color:green"></span><br />

                                                                                                                                            <span
                                                                                                                                            id="msg<?php echo $doc_list->id; ?>"
                                                                                                                                            style="color:green"></span><br />

                                                                                                                                            <?php if(!empty($image_name))
                                                                                                                                                {

                                                                                                                                                    foreach ($upload_doc_details as $data)
                                                                                                                                                    {

                                                                                                                                                        if($data->doc_id == $doc_list->id)
                                                                                                                                                        {
                                                                                                                                                        $img_url = asset('agentdoc1/'); ?>
                                                                                                                                                             <div class="card">
                                                                                                                                                                <div class="img_action">
                                                                                                                                                                    <?php $imgurl =  $data->image_name;?>
                                                                                                                                                                  <a href="<?php echo $imgurl; ?>" target="_blank"> View Details</a> | <a href ="javascript:void(0)"><span class="remove_img" onclick="myFunction('<?php echo $doc_list->id; ?>','<?php echo $student_details->id; ?>','<?php echo $student_details->app_id; ?>','<?php echo $imgurl;?>','<?php echo $student_details->student_id;?>','<?php echo $doc_list->document_name;?>')">Remove Image</span></a>
                                                                                                                                                                 <div id="msg_pass<?php echo $doc_list->id; ?>"></div>
                                                                                                                                                                 <div id="suceess_pass<?php echo $doc_list->id; ?>"></div>
                                                                                                                                                                </div>
                                                                                                                                                                  <div class="card-body px-0 pt-0">

                                                                                                                                                                    <p class="card-text">
                                                                                                                                                                        <div class="download text-center">
                                                                                                                                                                            <a href="<?php echo $imgurl; ?>" class="btn btn-secondary" download>
                                                                                                                                                                                <i class="fa fa-download me-2"></i>Download
                                                                                                                                                                            </a>
                                                                                                                                                                        </div>
                                                                                                                                                                    </p>
                                                                                                                                                                  </div>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="backend_comment">
                                                                                                                                                                    <?php echo $data->backend_comment; ?>
                                                                                                                                                                </div>
                                                                                                                                                                 <?php
                                                                                                                                                        }
                                                                                                                                                    }

                                                                                                                                                }else{

                                                                                                                                                }
                                                                                                                                            ?>
                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                    </div>


                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endif

                                                                                                        <div
                                                                                                            class="css-see-less">
                                                                                                            <p>See Less
                                                                                                                <span class="fa fa-caret-up"></span>
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>
                                                                                    </div>


                                                                                </div>
                                                                            </li>
                                                                        @endforeach
                                                                    @endif


                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-records2" role="tabpanel"
                                        aria-labelledby="records-tab2">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="main-timeline">
                                                    @if(!empty($student_records))
                                                    @foreach ($student_records as $records)
                                                    <div class="timeline">
                                                        <a href="#" class="timeline-content">
                                                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                                                            <ul>
                                                                <li class="title">{{$records->title}}</li>
                                                                <li class="date"> {{ date('d M, Y', strtotime($records->created_at)) }} </li>
                                                            </ul>
                                                            <p class="description"><br/>{{$records->text}}</p>
                                                        </a>
                                                    </div>
                                                    @endforeach
                                                    @endif


                                                    <!--<div class="timeline">
                                                        <a href="#" class="timeline-content">
                                                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                                                            <ul>
                                                                <li class="title">Application Opened</li>
                                                                <li class="date">24 May, 2022</li>
                                                            </ul>
                                                            <p class="description">As you progress through the application
                                                                process, you will see documents provided by ApplyBoard here.
                                                                These could come in the form of questions, documents,
                                                                payments, invoices, and application statuses.</p>
                                                        </a>
                                                    </div>-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-notes2" role="tabpanel"
                                        aria-labelledby="notes-tab2">
                                        <form id="frmnote">
                                        <div class="bg-white p-3">
                                            <div id="error"></div>
                                            <div id="success"></div>
                                            <div class="textarea-custom-slide">
                                                <div class="form-group">
                                                    <!--<input type="text" name="notes_title" id="notes_title" class="form-control"-->
                                                    <!--    placeholder="Enter title here....">-->

                                                    <input type="text" name="editor1" id="notes_title" class="form-control"
                                                        placeholder="Enter title here....">
                                                </div>
                                            </div>
                                            <input type="hidden" name="student_id" id="student_id" value="<?php echo $student_details->student_id; ?>">
                                            <input type="hidden" name="appid" id="appid" value="<?php echo $student_details->app_id; ?>">
                                            <textarea  name="notes" id="notes" class="post-area form-control"> </textarea><br/>
                                            <button type="button" class="btn btn-primary" id="msg" onclick="notesSave();">Save</button>
                                        </div>
                                    </form>
                                    </div>
                                <!--  ------------------------  -->
                                <div class="tab-pane fade" id="pills-docs2" role="tabpanel"
                                        aria-labelledby="docs-tab2">
                                         <div class="container">
                                            <div class="row">
                                            <div class="col-md-3 col-lg-3">
                                                <h3>Offer Letter</h3> 
                                                <?php 
                                                if($uploaded_docs->offer_letter == ""){
                                                    echo '<p>Offer Letter not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->offer_letter}}" width="200px">
                                                    <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 2</h3>
                                                <?php 
                                                if($uploaded_docs->document_2 == ""){
                                                    echo '<p>Document 2 not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_2}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                        </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 3</h3>
                                                <?php 
                                                if($uploaded_docs->document_2 == ""){
                                                    echo '<p>Document 3 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_2}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 4</h3>
                                                <?php 
                                                if($uploaded_docs->document_4 == ""){
                                                    echo '<p>Document 4 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_4}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 5</h3>
                                                <?php 
                                                if($uploaded_docs->document_5 == ""){
                                                    echo '<p>Document 5 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_5}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 6</h3>
                                                <?php 
                                                if($uploaded_docs->document_6 == ""){
                                                    echo '<p>Document 6 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_6}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 7</h3>
                                                <?php 
                                                if($uploaded_docs->document_7 == ""){
                                                    echo '<p>Document 7 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_7}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 8</h3>
                                                <?php 
                                                if($uploaded_docs->document_8 == ""){
                                                    echo '<p>Document 8 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_8}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 9</h3>
                                                <?php 
                                                if($uploaded_docs->document_9 == ""){
                                                    echo '<p>Document 9 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_9}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 10</h3>
                                                <?php 
                                                if($uploaded_docs->document_10 == ""){
                                                    echo '<p>Document 10 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_10}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>
                                            
                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 11</h3>
                                                <?php 
                                                if($uploaded_docs->document_11 == ""){
                                                    echo '<p>Document 11 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_11}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 12</h3>
                                                <?php 
                                                if($uploaded_docs->document_12 == ""){
                                                    echo '<p>Document 12 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_12}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>
                                            
                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 13</h3>
                                                <?php 
                                                if($uploaded_docs->document_13 == ""){
                                                    echo '<p>Document 13 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_13}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 14</h3>
                                                <?php 
                                                if($uploaded_docs->document_14 == ""){
                                                    echo '<p>Document 14 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_14}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>
                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 15</h3>
                                                <?php 
                                                if($uploaded_docs->document_15 == ""){
                                                    echo '<p>Document 15 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_15}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 16</h3>
                                                <?php 
                                                if($uploaded_docs->document_16 == ""){
                                                    echo '<p>Document 16 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_16}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>
                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 18</h3>
                                                <?php 
                                                if($uploaded_docs->document_17 == ""){
                                                    echo '<p>Document 17 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_17}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 18</h3>
                                                <?php 
                                                if($uploaded_docs->document_18 == ""){
                                                    echo '<p>Document 18 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_18}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>
                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 19</h3>
                                                <?php 
                                                if($uploaded_docs->document_19 == ""){
                                                    echo '<p>Document 19 is not Available.</p>';
                                                }else{
                                                ?> 
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_19}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>

                                            <div class="col-md-3 col-lg-3">
                                                <h3>Document 20</h3>
                                                <?php 
                                                if($uploaded_docs->document_20 == ""){
                                                    echo '<p>Document 20 is not Available.</p>';
                                                }else{
                                                ?>
                                                <img src="../storage/studentDocs/{{$student_details->app_id}}/{{$uploaded_docs->document_20}}" width="200px">
                                                <?php
                                                    }
                                                    ?>
                                            </div>
                                            </div>  
                                         </div>
                                    </div>
                                <!--  -------------------------  -->




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .status .form-check label {
                font-size: 13px;
                padding-right: 0px;
                margin-bottom: 3px;
            }
        #img-upload_pass {
            font-weight: bold;
            color: var(--color);
            height: 2.5em;
            border-radius: 3px;
        }
        .breadcrumb-item.active {
            font-size: 14px;
        }
        .breadcrumb-item{
            color:#2a50ed;
        }

        #img-upload5::before,
   #img-upload4::before{
  content: "Browser File";
  position: absolute;
  z-index: 2;
  display: block;
  background-color: #eee;
  width: 80px;
}

    </style>
    <style>
        #img-upload_pass {
            font-weight: bold;
            color: var(--color);
            height: 2.5em;
            border-radius: 3px;
        }
        .breadcrumb-item.active {
            font-size: 14px;
        }
        .breadcrumb-item{
            color:#2a50ed;
        }
        .success{
            color: green;
        }
        .error{
            color:red;
        }
    </style>
@endsection
