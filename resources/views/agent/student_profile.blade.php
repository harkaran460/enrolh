@extends('layouts.agent_app')
@section('content')
    @php $countries     = getCountry();@endphp
    @php $getEnglishexamType = getEnglishexamType();@endphp
    <div class="page-content p-15 mx-1">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-12" style="border-radius:12px !important;">

                    <div class="bg-white p-4">

                        <div class=" box-holder p-4">

                            <div class="bg-white p-3">

                                <div class="css-1y75kwg css-1jlq0r60">
                                    <div class="css-q6cz2y css-1jlq0r62">
                                        <div class="css-1jlq0r65 css-gqqadv">
                                            @php $firstcaracter = substr($studentdetails[0]->first_name, 0, 1); @endphp <?php //echo ucword($firstcaracter);
                                            ?>
                                            <!--<div data-testid="student-profile-913705-initials-avatar" class="css-m8p8pp">-->
                                            <!--    {{ ucfirst(trans($firstcaracter)) }} </div>-->
                                            <div data-testid="student-profile-913705-initials-avatar">
                                                <img width=40 height=40
                                                    src="https://w7.pngwing.com/pngs/481/915/png-transparent-computer-icons-user-avatar-woman-avatar-computer-business-conversation-thumbnail.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="css-1ca1ag7 css-1jlq0r61 profile-top-main">
                                        <div class="css-1yyj7dd css-1jlq0r63">
                                            {{ ucfirst(trans($studentdetails[0]->first_name)) }}
                                            {{ $studentdetails[0]->last_name }}</div>
                                        <div>
                                            {{-- <input type="text" name="user_id" value="<?php echo $studentdetails[0]->user_id; ?>"> --}}
                                            <span class="css-1ai5g3s css-1jlq0r64">{{ $studentdetails[0]->user_id }}</span>
                                            <span class="css-1ai5g3s css-1jlq0r64">|</span>
                                            <span class="css-1ai5g3s css-1jlq0r64">
                                                <a
                                                    href="mailto:{{ $studentdetails[0]->email }}">{{ $studentdetails[0]->email }}</a>
                                            </span>
                                            <span class="css-1ai5g3s css-1jlq0r64">|</span>
                                            <span class="css-1ai5g3s css-1jlq0r64">
                                                <a href="tel:{{ $studentdetails[0]->phone_number }}">
                                                    {{ $studentdetails[0]->phone_number }}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="css-1sqs8up css-1uorugc3">
                                    <a href="/agent-student-profile/{{ $studentdetails[0]->user_id }}">
                                        <span class="css-1ksf4ma css-1uorugc4 active-application">Profile</span>
                                    </a>
                                    <a href="/search-and-apply/{{ $studentdetails[0]->user_id }}">
                                        <span class="css-1ksf4ma css-1uorugc4">Search and Apply</span>
                                    </a>
                                    <a href="/student-profile-application/{{ $studentdetails[0]->user_id }}">
                                        <span class="css-1ksf4ma css-1uorugc4">Applications<span
                                                class="css-c6v9dn css-1uorugc2"><?php if ($applications_count != '') {
                                                    echo $applications_count;
                                                } else {
                                                    echo 0;
                                                } ?> </span></span>
                                    </a>
                                    <a href="/student-payment/{{ $studentdetails[0]->user_id }}">
                                        <span class="css-1ksf4ma css-1uorugc4">Payments</span>
                                    </a>
                                </div>

                                <div class="stepwizard">
                                    <div class="stepwizard-row setup-panel">

                                        <div class="stepwizard-step">
                                            <a href="" class="btn btn1-primary">
                                                General Information
                                                <?php if($studentdetails[0]->country_of_citizenship !='' && $studentdetails[0]->first_name !='' && $studentdetails[0]->email !='' && $studentdetails[0]->phone_number !='' && $studentdetails[0]->gender !='' && $studentdetails[0]->date_of_birth !=''){ ?>
                                                <i class="fa-solid fa-circle-check" id="green-color"></i>
                                                <?php }else{?>
                                                <i class="fa-solid fa-circle-check" id="red-color"></i>
                                                <?php }?>
                                            </a>
                                        </div>

                                        <div class="stepwizard-step">
                                            <a href="" class="btn btn-default" disabled="disabled">
                                                Education History
                                                <?php if($studentdetails[0]->country_of_education !='' && $studentdetails[0]->highest_level_of_education !='' && $studentdetails[0]->grading_scheme !='' && $studentdetails[0]->grade_average !='' ){ ?>
                                                <i class="fa-solid fa-circle-check" id="green-color"></i>
                                                <?php }else{?>
                                                <i class="fa-solid fa-circle-check" id="red-color"></i>
                                                <?php }?>
                                            </a>
                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="test_scores" class="btn btn-default" disabled="disabled">
                                                Test Scores
                                                <?php if($studentdetails[0]->date_of_exam !='' && $studentdetails[0]->lisenting !='' && $studentdetails[0]->reading !='' && $studentdetails[0]->writing !='' && $studentdetails[0]->speaking !=''){ ?>
                                                <i class="fa-solid fa-circle-check" id="green-color"></i>
                                                <?php }else{?>
                                                <i class="fa-solid fa-circle-check" id="red-color"></i>
                                                <?php }?>
                                            </a>
                                        </div>
                                    
                                        {{-- <div class="stepwizard-step">
                                            <a href="#" class="btn btn-default" disabled="disabled">
                                                Upload Documents
                                                <?php if($studentdetails[0]->study_permit_visa !=0 ){ ?>
                                                <i class="fa-solid fa-circle-check" id="green-color"></i>
                                                <?php }else{?>
                                                <i class="fa-solid fa-circle-check" id="red-color"></i>
                                                <?php }?>
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>

                </div>







            </div>


            <div class="row mt-md-3">
                <div class="col-md-12">
                    <div class="card p-2 profile-complete">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <?php if(($studentdetails[0]->first_name !='') && ($studentdetails[0]->date_of_birth !='') 
                                        && ($studentdetails[0]->first_language !='') && ($studentdetails[0]->country_of_citizenship !='') 
                                        && ($studentdetails[0]->passport_number !='') && ($studentdetails[0]->marital_status !='') 
                                        && ($studentdetails[0]->gender !='') 
                                        && ($studentdetails[0]->country !='') && ($studentdetails[0]->phone_number !='') 
                                        && ($studentdetails[0]->country_of_education !='') && ($studentdetails[0]->highest_level_of_education !='')
                                        && ($studentdetails[0]->grading_scheme !='') && ($studentdetails[0]->phone_number !='')
                                        && ($studentdetails[0]->grade_average !='') && ($studentdetails[0]->date_of_exam != '')){?>
                                        <h4 class="d-inline" style="color:green">Profile Complete!</h4>
                                        <?php }else{?>
                                            <h4 class="d-inline" style="color:red">Profile incomplete!</h4>
                                       <?php  } ?>
                                        <a href="/search-and-apply/{{ $studentdetails[0]->user_id }}">
                                            <button type="button" class=" float-end btn1-primary">Schools and Programs</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-md-3">
                <div class="col-md-12">
                    <div id="error"></div>
                    <div id="success"></div>
                    @if ($studentdetails[0]->created_at != '')
                        <h5 class="heading-registration">Registration Date:
                            {{ date('M jS, Y', strtotime($studentdetails[0]->created_at)) }} </h5>
                    @endif
                    <form action="/agent-student-profile-update" method="POST" name="updatestudentProfile"
                        id="updatestudentProfile">
                        @csrf
                        <input type="hidden" name="user_id" id="user_id" value="{{ $studentdetails[0]->user_id }}">
                        <input type="hidden" name="id" id="id" value="{{ $studentdetails[0]->rowid }}">
                        <div class="card p-2">
                            <div class="card-body">
                                <div class="personal-information">
                                    <h4>Personal Information</h4>
                                    <h5>(As indicated on your passport)</h5>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> First Name <span class="red">*</span> </label>
                                                <input type="text" name="first_name" id="first_name"
                                                    class="form-control" placeholder="Enter First Name..."
                                                    value="{{ $studentdetails[0]->first_name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Middle Name </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Middle Name..."
                                                    value="{{ $studentdetails[0]->middle_name }}" name="middle_name"
                                                    id="middle_name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Last Name </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Last Name..."
                                                    value="{{ $studentdetails[0]->last_name }}" name="last_name"
                                                    id="last_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <!--div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="tel" class="form-control "
                                                        placeholder="Enter Phone Number..."
                                                        value="" name="family_name"
                                                        id="family_name">
                                                </div>
                                            </div-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Date of Birth <span class="red">*</span> </label>
                                                <input type="text" class="form-control datepicker_input"
                                                    value="{{ $studentdetails[0]->date_of_birth }}"
                                                    placeholder="{{ $studentdetails[0]->date_of_birth }}"
                                                    name="date_of_birth" id="date_of_birth">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> First Language <span class="red">*</span> </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter First Language ..."
                                                    value="{{ $studentdetails[0]->first_language }}"
                                                    name="first_language" id="first_language">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country of Citizenship <span class="red">*</span> </label>
                                                <select name="country_of_citizenship" id="country_of_citizenship"
                                                    class="form-select" aria-label="Default select example">
                                                    @php $countries = getCountry();@endphp
                                                    <option value="0">select country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}"
                                                            {{ $studentdetails[0]->country_of_citizenship == "$country->id" ? 'selected' : '' }}>
                                                            {{ $country->country }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Passport Number
                                                    <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="We collect your passport information for identity verification purposes, your school or program of interest may require this information to process your application. If applicable, it may also be used for processing your visa."></i>
                                                    <span class="red">*</span>
                                                </label>
                                                <input type="tel" class="form-control"
                                                    placeholder="Enter Passport Number...(A209645704)"
                                                    value="{{ $studentdetails[0]->passport_number }}"
                                                    name="passport_number" id="passport_number">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group radio-main">
                                                <label> Marital Status
                                                    <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        data-bs-original-title="We collect information about your marital status because your school or program of interest may require this information to process your application."></i>
                                                    <span class="red">*</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="marital_status" value="single" id="marital_status"
                                                                {{ $studentdetails[0]->marital_status == 'single' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Single
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="marital_status" value="married" id="marital_status"
                                                                {{ $studentdetails[0]->marital_status == 'married' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Married
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group radio-main">
                                                <label> Gender <span class="red">*</span> </label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                value="female" id="gender"
                                                                {{ $studentdetails[0]->gender == 'female' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                value="male" id="gender"
                                                                {{ $studentdetails[0]->gender == 'male' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="flexRadioDefault4">
                                                                Male
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="address-detail">
                                    <h4>Address Detail</h4>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label> Address <span class="red">*</span> </label>
                                                <input type="text" class="form-control" name="address" id="address"
                                                    placeholder="Enter Full Address..."
                                                    value="{{ $studentdetails[0]->address }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Email <span class="red">*</span> </label>
                                                <input type="text" class="form-control" placeholder="Enter Email..."
                                                    value="{{ $studentdetails[0]->email }}" name="email"
                                                    id="email" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Country <span class="red">*</span> </label>

                                                <select class="select2 form-control select2-multiple" id="country"
                                                    name="country" data-placeholder="select ...">
                                                    @foreach ($countries as $country)
                                                        <option data-id="{{ $country->id }}"
                                                            value="{{ $country->id }}"
                                                            {{ $studentdetails[0]->country == "$country->id" ? 'selected' : '' }}>
                                                            {{ $country->country }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Province/State <span class="red">*</span> </label>
                                                <select name="province_state" id="state" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="">No Option</option>
                                                    @php $states = getState();@endphp
                                                    @foreach ($states as $state)
                                                        <option value="{{ $state->id }}"
                                                            {{ $studentdetails[0]->province_state == "$state->id" ? 'selected' : '' }}>
                                                            {{ $state->state }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> City/Town <span class="red">*</span> </label>
                                                @php $cities = getcity();@endphp
                                                <select name="city_town" id="city" class="form-select"
                                                    aria-label="Default select example">
                                                    @foreach ($cities as $city)
                                                        <option value="{{ $city->id }}"
                                                            {{ $studentdetails[0]->city_town == "$city->id" ? 'selected' : '' }}>
                                                            {{ $city->city }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Postal/Zip Code <span class="red">*</span> </label>
                                                <input type="number" class="form-control"
                                                    placeholder="Enter Pin Code...(110096)"
                                                    value="{{ $studentdetails[0]->postal_code }}" name="postal_code"
                                                    id="postal_code">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Phone Number <span class="red">*</span> </label>
                                                <input type="tel" class="form-control"
                                                    placeholder="Enter Phone Number..."
                                                    value="{{ $studentdetails[0]->phone_number }}" name="phone_number"
                                                    id="phone_number">
                                            </div>
                                        </div>
                                        <!--<div class="col-md-4">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label> Phone Number <span class="red">*</span> </label>-->
                                        <!--        <input type="tel" class="form-control"-->
                                        <!--            placeholder="Enter Phone Number..."-->
                                        <!--            value="{{ $studentdetails[0]->phone_number }}" name="phone_number"-->
                                        <!--            id="phone_number">-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="education-summary">
                            <div class="card p-2">
                                <div class="card-body">
                                    <h4> Highest Qualification</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Country of Education <span class="red">*</span> </label>
                                                <select name="country_of_education" id="country_of_education"
                                                    class="form-select" aria-label="Default select example">
                                                    <option value="0">select country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}"
                                                            {{ $studentdetails[0]->country_of_education == $country->id ? 'selected' : '' }}>
                                                            {{ $country->country }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                @php $educationlist = getEducation();@endphp
                                                <label> Highest Level of Education <span class="red">*</span> </label>
                                                <select name="highest_level_of_education" id="highest_level_of_education"
                                                    class="form-select" aria-label="Default select example">
                                                    <option value="0">select education</option>
                                                    @foreach ($educationlist as $list)
                                                        <option value="{{ $list->id }}"
                                                            {{ $studentdetails[0]->highest_level_of_education == "$list->id" ? 'selected' : '' }}>
                                                            {{ $list->title }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Grading Scheme <span class="red">*</span> </label>
                                                <select name="grading_scheme" id="grading_scheme" class="form-select">
                                                    aria-label="Default select example">
                                                    <?php $grad_list = getGradingScheme(); ?>
                                                    <option value="0">Other</option>
                                                    @foreach ($grad_list as $grad)
                                                        <option value={{ $grad->id }}
                                                            {{ $studentdetails[0]->grading_scheme == "$grad->id" ? 'selected' : '' }}>
                                                            {{ $grad->grad_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Grade Average <span class="red">*</span> </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Grade Average..."
                                                    value="{{ $studentdetails[0]->grade_average }}" name="grade_average"
                                                    id="grade_average">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-md-4">
                                            <div class="form-group form-check">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="graduated_from_most_recent_school"
                                                    id="graduated_from_most_recent_school"
                                                    {{ $studentdetails[0]->graduated_from_most_recent_school == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Graduated from most recent school
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="schools-attended">
                            <div class="card mt-md-3">
                                <div class="card-body">

                                    <h4> Education History</h4>

                                    <div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Country of Institution <span class="red"></span> </label>
                                                    <select name="country_of_institution" id="country_of_institution"
                                                        class="form-select" aria-label="Default select example">
                                                        <option value="0">select country</option>
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}"
                                                                {{ $studentdetails[0]->country_of_institution == $country->id ? 'selected' : '' }}>
                                                                {{ $country->country }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Name of Institution <span class="red"></span> </label>
                                                    <input type="text" class="form-control"
                                                        value=" {{ $studentdetails[0]->name_of_institution }}"
                                                        name="name_of_institution" id="name_of_institution">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Highest Level of Education <span class="red"></span>
                                                    </label>
                                                    <select name="level_of_education" id="level_of_education"
                                                        class="form-select" aria-label="Default select example">
                                                        @php $educationlist = getEducation();@endphp
                                                        <option value="0">None</option>
                                                        @foreach ($educationlist as $list)
                                                            <option value="{{ $list->id }}"
                                                                {{ $studentdetails[0]->level_of_education == "$list->id" ? 'selected' : '' }}>
                                                                {{ $list->title }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <label> Primary Language of Instruction <span class="red"></span>
                                                </label>
                                                <input type="text" class="form-control"
                                                    value="{{ $studentdetails[0]->primary_language_of_instruction }}"
                                                    name="primary_language_of_instruction"
                                                    id="primary_language_of_instruction">
                                            </div>
                                            <div class="col-md-4">
                                                <label> Attended Institution From <span class="red"></span></label>
                                                <input type="text" class="form-control datepicker_input"
                                                    value="{{ $studentdetails[0]->attended_institution_from }}"
                                                    placeholder="Y-m-d" name="attended_institution_from"
                                                    id="attended_institution_from">
                                            </div>
                                            <div class="col-md-4">
                                                <label> Attended Institution To <span class="red"></span> </label>
                                                <input type="text" class="form-control datepicker_input"
                                                    value="{{ $studentdetails[0]->attended_institution_to }}"
                                                    placeholder="Y-m-d" name="attended_institution_to"
                                                    id="attended_institution_to">
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>School Address</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter School Address..." value=""
                                                        name="degree_name" id="degree_name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group radio-main">
                                                    <label>I have graduated from this institution <span
                                                            class="red"></span>
                                                    </label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="graduated_institution" id="graduated_institution"
                                                            value="1"
                                                            {{ $studentdetails[0]->graduated_institution == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault6">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="graduated_institution" id="graduated_institution"
                                                            value="0"
                                                            {{ $studentdetails[0]->graduated_institution == 0 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault5">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>



                                        <div class="row mt-md-3">
                                            <div class="col-md-12">
                                                <h5>School Address</h5>
                                            </div>
                                        </div>

                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Address<span class="red"></span> </label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $studentdetails[0]->school_address }}"
                                                        name="school_address" id="school_address">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Province </label>
                                                    <select name="school_province" id="school_province"
                                                        class="form-select" aria-label="Default select example">
                                                        @php $states = getState();@endphp
                                                        @foreach ($states as $state)
                                                            <option value="{{ $state->id }}"
                                                                {{ $studentdetails[0]->school_province == "$state->id" ? 'selected' : '' }}>
                                                                {{ $state->state }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>City/Town<span class="red"></span> </label>
                                                    @php $cities = getcity();@endphp
                                                    <select name="school_city_town" id="school_city_town"
                                                        class="form-select" aria-label="Default select example">
                                                        @foreach ($cities as $city)
                                                            <option value="{{ $city->id }}"
                                                                {{ $studentdetails[0]->school_city_town == "$city->id" ? 'selected' : '' }}>
                                                                {{ $city->city }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <label>Postal/Zip Code </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Postal/Zip Code..."
                                                    value="{{ $studentdetails[0]->school_postal_code }}"
                                                    name="school_postal_code" id="school_postal_code">
                                            </div>
                                        </div>

                                        <div class="row" style="display: none">
                                            <div class="col-md-12">
                                                <div class="desk-float">
                                                    <a href="javascript:;" class="btn-cancel">Cancel</a>
                                                    <a href="javascript:;" class="btn-save">Save</a>
                                                </div>
                                            </div>f
                                        </div>
                                        <hr>
                                    </div>


                                    <div class="addschool2" id="school2" style="display:none">
                                        <h4>Schools Attended 2</h4>
                                        <div>
                                            <div class="row mt-md-3">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Country of Institution <span class="red"></span>
                                                        </label>
                                                        <select name="country_of_institution2"
                                                            id="country_of_institution2" class="form-select"
                                                            aria-label="Default select example">
                                                            <option value="0">select country</option>
                                                            @foreach ($countries as $country)
                                                                <option value="{{ $country->id }}"
                                                                    {{ $studentdetails[0]->country_of_institution2 == $country->id ? 'selected' : '' }}>
                                                                    {{ $country->country }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Name of Institution <span class="red"></span> </label>
                                                        <input type="text" class="form-control"
                                                            value=" {{ $studentdetails[0]->name_of_institution2 }}"
                                                            name="name_of_institution2" id="name_of_institution2">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Highest Level of Education <span class="red"></span>
                                                        </label>
                                                        <select name="level_of_education2" id="level_of_education2"
                                                            class="form-select" aria-label="Default select example">
                                                            @php $educationlist = getEducation();@endphp
                                                            <option value="0">None</option>
                                                            @foreach ($educationlist as $list)
                                                                <option value="{{ $list->id }}"
                                                                    {{ $studentdetails[0]->level_of_education2 == "$list->id" ? 'selected' : '' }}>
                                                                    {{ $list->title }}
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-md-3">
                                                <div class="col-md-4">
                                                    <label> Primary Language of Instruction <span class="red"></span>
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $studentdetails[0]->primary_language_of_instruction2 }}"
                                                        name="primary_language_of_instruction2"
                                                        id="primary_language_of_instruction2">
                                                </div>
                                                <div class="col-md-4">
                                                    <label> Attended Institution From <span class="red"></span> </label>
                                                    <input type="text" class="form-control datepicker_input"
                                                        value="{{ $studentdetails[0]->attended_institution_from2 }}"
                                                        placeholder="Y-m-d" name="attended_institution_from2"
                                                        id="attended_institution_from2">
                                                </div>
                                                <div class="col-md-4">
                                                    <label> Attended Institution To <span class="red"></span> </label>
                                                    <input type="text" class="form-control datepicker_input"
                                                        value="{{ $studentdetails[0]->attended_institution_to2 }}"
                                                        placeholder="Y-m-d" name="attended_institution_to2"
                                                        id="attended_institution_to2">
                                                </div>
                                            </div>
                                            <div class="row mt-md-3">
                                                
                                                <div class="col-md-4">
                                                    <div class="form-group radio-main">
                                                        <label>I have graduated from this institution <span
                                                                class="red"></span>
                                                        </label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="graduated_institution2" id="graduated_institution2"
                                                                value="1"
                                                                {{ $studentdetails[0]->graduated_institution2 == 1 ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="flexRadioDefault6">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="graduated_institution2" id="graduated_institution2"
                                                                value="0"
                                                                {{ $studentdetails[0]->graduated_institution2 == 0 ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="flexRadioDefault5">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="row mt-md-3">
                                                <div class="col-md-12">
                                                    <h5>School Address</h5>
                                                </div>
                                            </div>

                                            <div class="row mt-md-3">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Address<span class="red"></span> </label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $studentdetails[0]->school_address2 }}"
                                                            name="school_address2" id="school_address2">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Province </label>
                                                        <select name="school_province2" id="school_province2"
                                                            class="form-select" aria-label="Default select example">
                                                            @php $states = getState();@endphp
                                                            @foreach ($states as $state)
                                                                <option value="{{ $state->id }}"
                                                                    {{ $studentdetails[0]->school_province2 == "$state->id" ? 'selected' : '' }}>
                                                                    {{ $state->state }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>City/Town<span class="red"></span> </label>
                                                        @php $cities = getcity();@endphp
                                                        <select name="school_city_town2" id="school_city_town2"
                                                            class="form-select" aria-label="Default select example">
                                                            @foreach ($cities as $city)
                                                                <option value="{{ $city->id }}"
                                                                    {{ $studentdetails[0]->school_city_town2 == "$city->id" ? 'selected' : '' }}>
                                                                    {{ $city->city }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-md-3">
                                                <div class="col-md-4">
                                                    <label>Postal/Zip Code </label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Postal/Zip Code..."
                                                        value="{{ $studentdetails[0]->school_postal_code2 }}"
                                                        name="school_postal_code2" id="school_postal_code2">
                                                </div>
                                            </div>

                                            <div class="row" style="display: none1">
                                                <div class="col-md-12">
                                                    <div class=" desk-float">
                                                        <a href="javascript:;" id="cancile1"
                                                            class="btn1-cancel">Cancel</a>
                                                        <a href="javascript:;" class="btn1-primary" id="addmore2">Add
                                                            More School</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        {{-- <div class="row" style="display: none;">
                                            <div class="col-md-12">
                                                <div class="float-end">
                                                    <a href="javascript:;" class="btn-cancel cencel_school_row">Cancel</a>
                                                    <a href="javascript:;" class="btn-save">Save</a>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="desk-float ">
                                                <a href="javascript:;" class="btn1-primary add_attended_school"
                                                    id="add_attended_school">Add More School</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="school3" style="display: none">
                                    <div id="school3">
                                        <hr />
                                        <h4>Schools Attended 3</h4>
                                        <div>
                                            <div class="row mt-md-3">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Country of Institution <span class="red"></span>
                                                        </label>
                                                        <select name="country_of_institution3"
                                                            id="country_of_institution3" class="form-select"
                                                            aria-label="Default select example">
                                                            <option value="0">select country</option>
                                                            @foreach ($countries as $country)
                                                                <option value="{{ $country->id }}"
                                                                    {{ $studentdetails[0]->country_of_institution3 == $country->id ? 'selected' : '' }}>
                                                                    {{ $country->country }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Name of Institution <span class="red"></span>
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value=" {{ $studentdetails[0]->name_of_institution3 }}"
                                                            name="name_of_institution3" id="name_of_institution3">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Highest Level of Education <span class="red"></span>
                                                        </label>
                                                        <select name="level_of_education3" id="level_of_education3"
                                                            class="form-select" aria-label="Default select example">
                                                            @php $educationlist = getEducation();@endphp
                                                            <option value="0">None</option>
                                                            @foreach ($educationlist as $list)
                                                                <option value="{{ $list->id }}"
                                                                    {{ $studentdetails[0]->level_of_education3 == "$list->id" ? 'selected' : '' }}>
                                                                    {{ $list->title }}
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-md-3">
                                                <div class="col-md-4">
                                                    <label> Primary Language of Instruction <span
                                                            class="red"></span>
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $studentdetails[0]->primary_language_of_instruction3 }}"
                                                        name="primary_language_of_instruction3"
                                                        id="primary_language_of_instruction3">
                                                </div>
                                                <div class="col-md-4">
                                                    <label> Attended Institution From <span class="red"></span>
                                                    </label>
                                                    <input type="text" class="form-control datepicker_input"
                                                        value="{{ $studentdetails[0]->attended_institution_from3 }}"
                                                        placeholder="Y-m-d" name="attended_institution_from3"
                                                        id="attended_institution_from3">
                                                </div>
                                                <div class="col-md-4">
                                                    <label> Attended Institution To <span class="red"></span>
                                                    </label>
                                                    <input type="text" class="form-control datepicker_input"
                                                        value="{{ $studentdetails[0]->attended_institution_to3 }}"
                                                        placeholder="Y-m-d" name="attended_institution_to3"
                                                        id="attended_institution_to3">
                                                </div>
                                            </div>
                                            


                                            <div class="row mt-md-3">
                                                <div class="col-md-12">
                                                    <h5>School Address</h5>
                                                </div>
                                            </div>

                                            <div class="row mt-md-3">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Address<span class="red"></span> </label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $studentdetails[0]->school_address3 }}"
                                                            name="school_address3" id="school_address3">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Province </label>
                                                        <select name="school_province3" id="school_province3"
                                                            class="form-select" aria-label="Default select example">
                                                            @php $states = getState();@endphp
                                                            @foreach ($states as $state)
                                                                <option value="{{ $state->id }}"
                                                                    {{ $studentdetails[0]->school_province3 == "$state->id" ? 'selected' : '' }}>
                                                                    {{ $state->state }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>City/Town<span class="red"></span> </label>
                                                        @php $cities = getcity();@endphp
                                                        <select name="school_city_town3" id="school_city_town3"
                                                            class="form-select" aria-label="Default select example">
                                                            @foreach ($cities as $city)
                                                                <option value="{{ $city->id }}"
                                                                    {{ $studentdetails[0]->school_city_town3 == "$city->id" ? 'selected' : '' }}>
                                                                    {{ $city->city }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-md-3">
                                                <div class="col-md-4">
                                                    <label>Postal/Zip Code </label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Postal/Zip Code..."
                                                        value="{{ $studentdetails[0]->school_postal_code3 }}"
                                                        name="school_postal_code3" id="school_postal_code3">
                                                </div>
                                            </div>

                                            <div class="row" style="display: none">
                                                <div class="col-md-12">
                                                    <div class="desk-float">
                                                        <a href="javascript:;" class="btn-cancel">Cancel</a>
                                                        <a href="javascript:;" class="btn-save">Save</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="float-end">
                                                <a href="javascript:;" class="btn1-cancel" id="cancel3">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <!--INDIAN SCHOOL LEARNING SECTION BY KD -->

                                    <div class="box-holder p-4 mt-2">
                                        <div class="bg-white p-3">

                                            <div id="indianSchoolmain">
                                                <div id="indianSchoolmaininner" class="mx-4">
                                                    @if($studentdetails[0]->name_of_institution !='')
                                                    <h2 class="text-start pt-2 fs-3">
                                                        {{ $studentdetails[0]->name_of_institution }}</h2>
                                                    @endif
                                                    <div id="ischoolmain-First"
                                                        class="d-flex justify-content-between flex-wrap pt-2">
                                                        <div>
                                                            <svg role="img" width="24" height="24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"
                                                                    fill="#58BE91"></path>
                                                            </svg>
                                                            <strong> Graduated from Institution </strong>

                                                        </div>

                                                        <div class="inSchul-right-main">
                                                            @if($studentdetails[0]->graduation_date !='')
                                                            <span class="">
                                                                {{ date('F d, Y', strtotime($studentdetails[0]->graduation_date)) }}
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div id="ischoolmain-Second"
                                                        class="d-flex justify-content-between flex-wrap">
                                                        <div>
                                                            <svg role="img" width="24" height="24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"
                                                                    fill="#58BE91"></path>
                                                            </svg>
                                                            <strong> Certificate awarded</strong>
                                                        </div>
                                                        <div>
                                                            <span>
                                                                <!--<div><strong>Level:</strong> {{ $studentdetails[0]->degree_name }}</div>-->
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div id="ischoolmain-Three"
                                                        class="d-flex justify-content-between flex-wrap">
                                                        <div>
                                                            <svg role="img" width="24" height="24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"
                                                                    fill="#58BE91"></path>
                                                            </svg>
                                                            <strong>Level:</strong>

                                                        </div>

                                                        <div class="inSchul-right-main">
                                                            @if($studentdetails[0]->degree_name !='')
                                                            <span>
                                                                {{ $studentdetails[0]->degree_name }}
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div id="ischoolmain-Four"
                                                        class="d-flex justify-content-between flex-wrap">
                                                        <div>
                                                            <svg role="img" width="24" height="24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"
                                                                    fill="#58BE91"></path>
                                                            </svg>
                                                            <strong> Attended from </strong>

                                                        </div>

                                                        <div class="inSchul-right-main">
                                                            @if($studentdetails[0]->attended_institution_from !='')
                                                            <span>
                                                                {{ date('F d, Y', strtotime($studentdetails[0]->attended_institution_from)) }}
                                                                -
                                                                {{ date('F d, Y', strtotime($studentdetails[0]->attended_institution_to)) }}
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div id="ischoolmain-Five"
                                                        class="d-flex justify-content-between flex-wrap">
                                                        <div>
                                                            <svg role="img" width="24" height="24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"
                                                                    fill="#58BE91"></path>
                                                            </svg>
                                                            <strong> Language of instruction:</strong>

                                                        </div>

                                                        <div class="inSchul-right-main">
                                                            @if($studentdetails[0]->primary_language_of_instruction !='')
                                                            <span>
                                                                {{ $studentdetails[0]->primary_language_of_instruction }}
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div id="ischoolmain-Six"
                                                        class="d-flex justify-content-between flex-wrap">
                                                        <div>
                                                            <svg role="img" width="24" height="24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"
                                                                    fill="#58BE91"></path>
                                                            </svg>
                                                            <strong> Address:</strong>

                                                        </div>

                                                        <div class="inSchul-right-main">
                                                            @if($studentdetails[0]->school_address !='')
                                                            <span>
                                                                {{ $studentdetails[0]->school_address }} -
                                                                {{ $studentdetails[0]->school_city_town }},
                                                                {{ $studentdetails[0]->school_province }},
                                                                {{ $studentdetails[0]->country_of_institution_name }}
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--INDIAN SCHOOL LEARNING SECTION BY KD-->
                                        <!--<div class="row mt-md-3">-->
                                        <!--    <div class="col-md-4">-->
                                        <!--        <p>{{ $studentdetails[0]->name_of_institution }}</p>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-4">-->
                                        <!--        @if ($studentdetails[0]->graduation_date != '')
    -->
                                        <!--            <div>-->
                                        <!--                <svg role="img" width="24" height="24" fill="none"-->
                                        <!--                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">-->
                                        <!--                    <path fill-rule="evenodd" clip-rule="evenodd"-->
                                        <!--                        d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"-->
                                        <!--                        fill="#58BE91"></path>-->
                                        <!--                </svg>-->
                                        <!--                <strong> Graduated from Institution </strong><span>-->
                                        <!--                    {{ date('F d, Y', strtotime($studentdetails[0]->graduation_date)) }}-->
                                        <!--                </span>-->
                                        <!--            </div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->degree_name != '')
    -->
                                        <!--            <div>-->
                                        <!--                <svg role="img" width="24" height="24" fill="none"-->
                                        <!--                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">-->
                                        <!--                    <path fill-rule="evenodd" clip-rule="evenodd"-->
                                        <!--                        d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"-->
                                        <!--                        fill="#58BE91"></path>-->
                                        <!--                </svg>-->
                                        <!--                <strong> Certificate awarded</strong>-->
                                        <!--            </div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->degree_name != '')
    -->
                                        <!--            <div><strong>Level:</strong> {{ $studentdetails[0]->degree_name }}</div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->attended_institution_from != '')
    -->
                                        <!--            <div><strong>Attended from </strong><span>-->
                                        <!--                    {{ date('F d, Y', strtotime($studentdetails[0]->attended_institution_from)) }}-->
                                        <!--                </span><strong> to </strong><span>-->
                                        <!--                    {{ date('F d, Y', strtotime($studentdetails[0]->attended_institution_to)) }}-->
                                        <!--                </span></div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->primary_language_of_instruction != '')
    -->
                                        <!--            <div><strong>Language of instruction:-->
                                        <!--                </strong><span>{{ $studentdetails[0]->primary_language_of_instruction }}</span>-->
                                        <!--            </div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->school_address != '')
    -->
                                        <!--            <div class="address">-->
                                        <!--                <div><strong>Address:</strong></div>-->
                                        <!--                <div>{{ $studentdetails[0]->school_address }}</div>-->
                                        <!--                <div>{{ $studentdetails[0]->school_city_town }},-->
                                        <!--                    {{ $studentdetails[0]->school_province }}</div>-->
                                        <!--                <div>{{ $studentdetails[0]->country_of_institution_name }}</div>-->
                                        <!--            </div>-->
                                        <!--
    @endif-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-4"></div>-->
                                        <!--</div>-->







                                        <!--<hr/>-->
                                        <!--<?php if($studentdetails[0]->name_of_institution2 !='' && $studentdetails[0]->attended_institution_from2 !='' && $studentdetails[0]->attended_institution_to2 !='' && $studentdetails[0]->degree_name2 !=''){?>-->
                                        <!--<div class="row mt-md-3">-->
                                        <!--    <div class="col-md-4">-->
                                        <!--        <p>{{ $studentdetails[0]->name_of_institution2 }} </p>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-4">-->
                                        <!--        @if ($studentdetails[0]->graduation_date2 != '')
    -->
                                        <!--            <div>-->
                                        <!--                <svg role="img" width="24" height="24" fill="none"-->
                                        <!--                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">-->
                                        <!--                    <path fill-rule="evenodd" clip-rule="evenodd"-->
                                        <!--                        d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"-->
                                        <!--                        fill="#58BE91"></path>-->
                                        <!--                </svg>-->
                                        <!--                <strong> Graduated from Institution </strong><span>-->
                                        <!--                    {{ date('F d, Y', strtotime($studentdetails[0]->graduation_date2)) }}-->
                                        <!--                </span>-->
                                        <!--            </div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->degree_name2 != '')
    -->
                                        <!--            <div>-->
                                        <!--                <svg role="img" width="24" height="24" fill="none"-->
                                        <!--                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">-->
                                        <!--                    <path fill-rule="evenodd" clip-rule="evenodd"-->
                                        <!--                        d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"-->
                                        <!--                        fill="#58BE91"></path>-->
                                        <!--                </svg>-->
                                        <!--                <strong> Certificate awarded</strong>-->
                                        <!--            </div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->degree_name2 != '')
    -->
                                        <!--            <div><strong>Level:</strong> {{ $studentdetails[0]->degree_name2 }}</div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->attended_institution_from2 != '')
    -->
                                        <!--            <div><strong>Attended from </strong><span>-->
                                        <!--                    {{ date('F d, Y', strtotime($studentdetails[0]->attended_institution_from2)) }}-->
                                        <!--                </span><strong> to </strong><span>-->
                                        <!--                    {{ date('F d, Y', strtotime($studentdetails[0]->attended_institution_to2)) }}-->
                                        <!--                </span></div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->primary_language_of_instruction2 != '')
    -->
                                        <!--            <div><strong>Language of instruction:-->
                                        <!--                </strong><span>{{ $studentdetails[0]->primary_language_of_instruction2 }}</span>-->
                                        <!--            </div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->school_address2 != '')
    -->
                                        <!--            <div class="address">-->
                                        <!--                <div><strong>Address:</strong> {{ $studentdetails[0]->school_address2 }}</div>-->

                                        <!--                <div>{{ $studentdetails[0]->school_city_town2 }},-->
                                        <!--                    {{ $studentdetails[0]->school_province2 }}</div>-->
                                        <!--                <div>{{ $studentdetails[0]->country_of_institution_name2 }}</div>-->
                                        <!--            </div>-->
                                        <!--
    @endif-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-4"></div>-->
                                        <!--</div>-->
                                        <!--<hr/>-->
                                        <!--<?php }?>-->
                                        <!--<?php if($studentdetails[0]->name_of_institution3 !='' && $studentdetails[0]->attended_institution_from3 !='' && $studentdetails[0]->attended_institution_to3 !='' && $studentdetails[0]->degree_name3 !=''){?>-->
                                        <!--<div class="row mt-md-3">-->
                                        <!--    <div class="col-md-4">-->
                                        <!--        <p>{{ $studentdetails[0]->name_of_institution3 }}</p>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-4">-->
                                        <!--        @if ($studentdetails[0]->graduation_date3 != '')
    -->
                                        <!--            <div>-->
                                        <!--                <svg role="img" width="24" height="24" fill="none"-->
                                        <!--                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">-->
                                        <!--                    <path fill-rule="evenodd" clip-rule="evenodd"-->
                                        <!--                        d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"-->
                                        <!--                        fill="#58BE91"></path>-->
                                        <!--                </svg>-->
                                        <!--                <strong> Graduated from Institution </strong><span>-->
                                        <!--                    {{ date('F d, Y', strtotime($studentdetails[0]->graduation_date3)) }}-->
                                        <!--                </span>-->
                                        <!--            </div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->degree_name3 != '')
    -->
                                        <!--            <div>-->
                                        <!--                <svg role="img" width="24" height="24" fill="none"-->
                                        <!--                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">-->
                                        <!--                    <path fill-rule="evenodd" clip-rule="evenodd"-->
                                        <!--                        d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z"-->
                                        <!--                        fill="#58BE91"></path>-->
                                        <!--                </svg>-->
                                        <!--                <strong> Certificate awarded</strong>-->
                                        <!--            </div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->degree_name3 != '')
    -->
                                        <!--            <div><strong>Level:</strong> {{ $studentdetails[0]->degree_name3 }}</div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->attended_institution_from3 != '')
    -->
                                        <!--            <div><strong>Attended from </strong><span>-->
                                        <!--                    {{ date('F d, Y', strtotime($studentdetails[0]->attended_institution_from3)) }}-->
                                        <!--                </span><strong> to </strong><span>-->
                                        <!--                    {{ date('F d, Y', strtotime($studentdetails[0]->attended_institution_to3)) }}-->
                                        <!--                </span></div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->primary_language_of_instruction3 != '')
    -->
                                        <!--            <div><strong>Language of instruction:-->
                                        <!--                </strong><span>{{ $studentdetails[0]->primary_language_of_instruction3 }}</span>-->
                                        <!--            </div>-->
                                        <!--
    @endif-->
                                        <!--        @if ($studentdetails[0]->school_address3 != '')
    -->
                                        <!--            <div class="address">-->
                                        <!--                <div><strong>Address:</strong>   {{ $studentdetails[0]->school_address3 }}</div>-->

                                        <!--                <div>{{ $studentdetails[0]->school_city_town3 }},-->
                                        <!--                    {{ $studentdetails[0]->school_province3 }}</div>-->
                                        <!--                <div>{{ $studentdetails[0]->country_of_institution_name3 }}</div>-->
                                        <!--            </div>-->
                                        <!--
    @endif-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-4"></div>-->
                                        <!--</div>-->
                                        <!--<?php }?>-->

                                    </div>
                                </div>
                            </div>

                            <div class="card mt-md-3 additional-qualifications">
                                <div class="card-body">
                                    <h4>English Proficiency</h4>

                                    <div class="row mt-md-3">
                                        <div class="col-md-12">
                                            <div class="form-check form-switch">
                                                <?php if($studentdetails[0]->date_of_exam !=''){?>
                                                <input class="form-check-input main-switch3" type="checkbox"
                                                    id="flexSwitchCheckDefaultgmat1" checked="checked">
                                                <?php }else{?>
                                                <input class="form-check-input main-switch3" type="checkbox"
                                                    id="flexSwitchCheckDefaultgmat1">
                                                <?php }?>
                                                <label class="form-check-label" for="flexSwitchCheckDefaultgmat1"> I have
                                                    English exam scores </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if($studentdetails[0]->date_of_exam !=''){?>
                                    <div class="main-switch-toggle3 mt-md-3" style="display: block;"
                                        data-select2-id="209">
                                        <?php }else{?>
                                        <div class="main-switch-toggle3 mt-md-3">
                                            <?php }?>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label> English Exam Date </label>
                                                        <input type="text" class="form-control datepicker_input"
                                                            value="{{ $studentdetails[0]->date_of_exam }}"
                                                            name="date_of_exam" id="date_of_exam" placeholder="Y-m-d">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label> Lisenting </label>
                                                        <input type="tel" class="form-control" placeholder="Score"
                                                            value="{{ $studentdetails[0]->lisenting }}" name="lisenting"
                                                            id="lisenting">

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label> Reading </label>
                                                        <input type="tel" class="form-control" placeholder="Score"
                                                            value="{{ $studentdetails[0]->reading }}" name="reading"
                                                            id="reading">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label> Writing </label>
                                                        <input type="tel" class="form-control" placeholder="Score"
                                                            value="{{ $studentdetails[0]->writing }}" name="writing"
                                                            id="writing">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label> Speaking </label>
                                                        <input type="tel" class="form-control" placeholder="Score"
                                                            value="{{ $studentdetails[0]->speaking }}" name="speaking"
                                                            id="speaking">
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label> Exam Type </label>
                                                        <select class="form-control select2" name="exam_type"
                                                            id="exam_type">
                                                            @foreach ($getEnglishexamType as $type)
                                                                <option value={{ $type->id }} <?php if ($studentdetails[0]->english_exam_type == $type->id) {
                                                                    echo 'selected';
                                                                } else {
                                                                    echo '';
                                                                } ?>>
                                                                    {{ $type->exam_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card p-2 background-information">
                                    <div class="card-body">

                                        <div class="row mt-md-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Do you have a valid Study Permit / Visa?</label>
                                                    <select class="select2 form-control select2-multiple"
                                                        multiple="multiple" data-placeholder="Choose ..."
                                                        name="study_permit_visa" id="study_permit_visa">
                                                        @php $permitvisa = getPermitVisa(); @endphp

                                                        <option value="0">None</option>
                                                        @foreach ($permitvisa as $list)
                                                            <option value="{{ $list->id }}"
                                                                {{ $studentdetails[0]->study_permit_visa == $list->id ? 'selected' : '' }}>
                                                                {{ $list->visa_title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="form-group">
                                                <label>If you answered "Yes" to any of the questions above, please provide
                                                    more
                                                    details below:</label>
                                                <textarea name="more_background_details" id="more_background_details" cols="10" rows="4"
                                                    class="form-control" placeholder="Provide details...">{{ $studentdetails[0]->more_background_details }}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mt-md-3 mb-md-4">
                                    <div class="col-md-12">
                                        <div class="float-end">
                                            <button class="btn1-primary" type="button"
                                                onclick="agentStudentProfileUpdate();">Save</button>
                                        </div>
                                    </div>
                                </div>

                    </form>

                    @if (!empty($applications))
                        <div class="upload-documents">
                            <div class="card mt-md-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Upload Documents</h4>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Application ID </th>
                                                <th>School Name </th>
                                                <th>Program Name </th>
                                                <th>To Application</th>
                                            </tr>
                                            @foreach ($applications as $application)
                                                <tr>
                                                    <td>{{ $application->app_id }}</td>
                                                    <td>{{ $application->college_name }} </td>
                                                    <td>{{ $application->programs_name }}</td>
                                                    <a href="">
                                                        <td>
                                                            <div class="d-grid gap-2">
                                                                <button type="btn"
                                                                    class="btn btn-primary btn-block fs-5 rounded-pill"><i
                                                                        class="fa fa-arrow-right"></i></button>
                                                            </div>
                                                        </td>
                                                    </a>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>






    <!-- Modal -->
    <div class="modal fade" id="staticpopup" data-bs-backdrop="static">
        <div class="modal-dialog modal-sm modal-dialog-centered w-25">
            <div class="modal-content">

                <div class="modal-body text-center">
                    <h4>Are you sure you want to remove this school?</h4>
                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary mx-2">OK</button>
                </div>

            </div>
        </div>
    </div>


    <style>
        /*#country_of_citizenship option{*/
        /*    box-shadow: 0 -2em 2em rgb(0 0 0 / 10%), 0 0 0 2px rgb(255 255 255), 0.1em 0.1em 1em rgb(0 0 0 / 30%) !important;*/
        /*}*/
        .inSchul-right-main {
            width: 25rem !important;
        }

        #indianSchoolmaininner {
            margin: 0 25rem 0 0 !important;
        }

        .profile-top-main {
            padding-bottom: 1rem !important;
        }

        .form-check-input:checked {
            border-color: transparent !important;
        }
    </style>

    <!-- Vanilla Datepicker CSS -->
    <!--<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>-->


    <!-- Vanilla Datepicker JS -->
    <!--<script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>-->
    <script>
        //     const getDatePickerTitle = elem => {
        //         // From the label or the aria-label
        //         const label = elem.nextElementSibling;
        //         let titleText = '';
        //         if (label && label.tagName === 'LABEL') {
        //             titleText = label.textContent;
        //         } else {
        //             titleText = elem.getAttribute('aria-label') || '';
        //         }
        //         return titleText;
        //     }

        //     const elems = document.querySelectorAll('.datepickerinput');
        //     for (const elem of elems) {
        //         const datepicker = new Datepicker(elem, {
        //             'format': 'dd/mm/yyyy', // UK format
        //             title: getDatePickerTitle(elem)
        //         });
        //     }
        // 
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#add_attended_school").click(function() {
                $(this).hide();
                $('.school2').css('display',"block");
                $('#school2').show();
            });


            $("#cancile1").click(function() {
               $('#school2').css('display',"none");
               $('#school2').hide();
            });
            
            $("#cancel3").click(function() {
                $(this).hide();
                $("#school3").hide();
            });
            $('#addmore2').click(function(){
                $(this).hide();
                $('.school3').css('display',"block");
            });
        });
    </script>
@endsection
