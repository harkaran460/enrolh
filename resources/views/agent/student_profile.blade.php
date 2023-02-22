@extends('layouts.agent_app')
@section('content')
    @php $countries     = getCountry();@endphp
    @php $getEnglishexamType = getEnglishexamType();@endphp
<div class="mainTitle">
    <span class="h4">Profile</span>
    <div class="controls">
        @if ($studentdetails[0]->created_at != '')<strong>Registration Date: {{ date('M jS, Y', strtotime($studentdetails[0]->created_at)) }}</strong>@endif
    </div>
</div>
<div class="studentProfilePage">
    <div class="panel">
        <div class="pHead">
            <div class="profileSection">
                @php $firstcaracter = substr($studentdetails[0]->first_name, 0, 1); @endphp <?php //echo ucword($firstcaracter); ?>
                <div class="thumb"><img src="../assetsAgent/img/profile.jpg"></div>
                <div class="profileInfo">
                    <span class="name">{{ ucfirst(trans($studentdetails[0]->first_name)) }} {{ $studentdetails[0]->last_name }}</span>
                    {{-- <input type="text" name="user_id" value="<?php echo $studentdetails[0]->user_id; ?>"> --}}
                    <span>{{ $studentdetails[0]->user_id }} &nbsp; | &nbsp; <a href="mailto:{{ $studentdetails[0]->email }}">{{ $studentdetails[0]->email }}</a> &nbsp; | &nbsp; <a href="tel:{{ $studentdetails[0]->phone_number }}">{{ $studentdetails[0]->phone_number }}</a></span>
                </div>
            </div>
            <ul class="nav nav-tabs customTabs">
                <li class="nav-item"><a class="nav-link active" href="/agent-student-profile/{{ $studentdetails[0]->user_id }}">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="/search-and-apply/{{ $studentdetails[0]->user_id }}">Search and Apply</a></li>
                <li class="nav-item"><a class="nav-link" href="/student-profile-application/{{ $studentdetails[0]->user_id }}">Applications (<?php if ($applications_count != '') {echo $applications_count;} else {echo 0;} ?>)</a></li>
                <li class="nav-item"><a class="nav-link" href="/student-payment/{{ $studentdetails[0]->user_id }}">Payments</a></li>
            </ul>
        </div>
        <div class="pBody">
            <div class="btnGroup m-0 justify-content-start">
                <a href="" class="btn btn-secondary">General Information <?php if($studentdetails[0]->country_of_citizenship !='' && $studentdetails[0]->first_name !='' && $studentdetails[0]->email !='' && $studentdetails[0]->phone_number !='' && $studentdetails[0]->gender !='' && $studentdetails[0]->date_of_birth !=''){ ?><i class="fa-solid fa-circle-check" id="green-color"></i><?php }else{?><i class="fa-solid fa-circle-check" id="red-color"></i><?php }?></a>
                <a href="" class="btn btn-secondary" disabled="disabled">Education History <?php if($studentdetails[0]->country_of_education !='' && $studentdetails[0]->highest_level_of_education !='' && $studentdetails[0]->grading_scheme !='' && $studentdetails[0]->grade_average !='' ){ ?><i class="fa-solid fa-circle-check" id="green-color"></i><?php }else{?><i class="fa-solid fa-circle-check" id="red-color"></i><?php }?></a>
                <a href="test_scores" class="btn btn-secondary" disabled="disabled">Test Scores <?php if($studentdetails[0]->date_of_exam !='' && $studentdetails[0]->lisenting !='' && $studentdetails[0]->reading !='' && $studentdetails[0]->writing !='' && $studentdetails[0]->speaking !=''){ ?><i class="fa-solid fa-circle-check" id="green-color"></i><?php }else{?><i class="fa-solid fa-circle-check" id="red-color"></i><?php }?></a>
                {{--<a href="#" class="btn btn-secondary" disabled="disabled">Upload Documents <?php if($studentdetails[0]->study_permit_visa !=0 ){ ?><i class="fa-solid fa-circle-check" id="green-color"></i><?php }else{?><i class="fa-solid fa-circle-check" id="red-color"></i><?php }?></a>--}}
            </div>
            <?php if(($studentdetails[0]->first_name !='') && ($studentdetails[0]->date_of_birth !='') && ($studentdetails[0]->first_language !='') && ($studentdetails[0]->country_of_citizenship !='') && ($studentdetails[0]->passport_number !='') && ($studentdetails[0]->marital_status !='') && ($studentdetails[0]->gender !='') && ($studentdetails[0]->country !='') && ($studentdetails[0]->phone_number !='') && ($studentdetails[0]->country_of_education !='') && ($studentdetails[0]->highest_level_of_education !='') && ($studentdetails[0]->grading_scheme !='') && ($studentdetails[0]->phone_number !='') && ($studentdetails[0]->grade_average !='') && ($studentdetails[0]->date_of_exam != '')){?>
                <div class="alert customAlert alert-success" role="alert"><i class="fas fa-check-circle"></i> Profile Complete! <a href="/search-and-apply/{{ $studentdetails[0]->user_id }}">Schools and Programs</a></div>
                <?php }else{?>
                <div class="alert customAlert alert-danger" role="alert"><i class="fas fa-circle-xmark"></i> Profile incomplete! <a href="/search-and-apply/{{ $studentdetails[0]->user_id }}">Schools and Programs</a></div>
            <?php  } ?>
            <form action="/agent-student-profile-update" method="POST" name="updatestudentProfile" id="updatestudentProfile">
                @csrf
                <input type="hidden" name="user_id" id="user_id" value="{{ $studentdetails[0]->user_id }}">
                <input type="hidden" name="id" id="id" value="{{ $studentdetails[0]->rowid }}">
                <span class="h4">Personal Information (As indicated on your passport)</span>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>First Name <span class="red">*</span> </label>
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name..." value="{{ $studentdetails[0]->first_name }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Middle Name </label>
                            <input type="text" class="form-control" placeholder="Enter Middle Name..." value="{{ $studentdetails[0]->middle_name }}" name="middle_name" id="middle_name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Last Name </label>
                            <input type="text" class="form-control" placeholder="Enter Last Name..." value="{{ $studentdetails[0]->last_name }}" name="last_name" id="last_name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Date of Birth <span class="red">*</span> </label>
                            <input type="text" class="form-control datepicker_input" value="{{ $studentdetails[0]->date_of_birth }}" placeholder="{{ $studentdetails[0]->date_of_birth }}" name="date_of_birth" id="date_of_birth">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>First Language <span class="red">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter First Language ..." value="{{ $studentdetails[0]->first_language }}" name="first_language" id="first_language">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Country of Citizenship <span class="red">*</span> </label>
                            <select name="country_of_citizenship" id="country_of_citizenship" class="form-select" aria-label="Default select example">
                                @php $countries = getCountry();@endphp <option value="0">select country</option> @foreach ($countries as $country)<option value="{{ $country->id }}"{{ $studentdetails[0]->country_of_citizenship == "$country->id" ? 'selected' : '' }}>{{ $country->country }}</option>@endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Passport Number <span class="red">*</span> <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="We collect your passport information for identity verification purposes, your school or program of interest may require this information to process your application. If applicable, it may also be used for processing your visa."></i></label>
                            <input type="tel" class="form-control" placeholder="Enter Passport Number...(A209645704)" value="{{ $studentdetails[0]->passport_number }}" name="passport_number" id="passport_number">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Marital Status <span class="red">*</span><i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="We collect information about your marital status because your school or program of interest may require this information to process your application."></i></label>
                            <div class="formCheckBox">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="marital_status" value="single" id="marital_status" {{ $studentdetails[0]->marital_status == 'single' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="marital_status">Single</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="marital_status" value="married" id="marital_status" {{ $studentdetails[0]->marital_status == 'married' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="marital_status">Married</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Gender <span class="red">*</span></label>
                            <div class="formCheckBox">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="female" id="gender" {{ $studentdetails[0]->gender == 'female' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="gender">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="male" id="gender" {{ $studentdetails[0]->gender == 'male' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="gender">Male</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="h4">Address Detail</span>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Address <span class="red">*</span></label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Full Address..." value="{{ $studentdetails[0]->address }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email <span class="red">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Email..." value="{{ $studentdetails[0]->email }}" name="email" id="email" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Country <span class="red">*</span></label>
                            <select class="select2 form-control select2-multiple" id="country" name="country" data-placeholder="select ...">
                                @foreach ($countries as $country)<option data-id="{{ $country->id }}" value="{{ $country->id }}" {{ $studentdetails[0]->country == "$country->id" ? 'selected' : '' }}>{{ $country->country }}</option>@endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Province/State <span class="red">*</span></label>
                            <select name="province_state" id="state" class="form-select" aria-label="Default select example">
                                <option value="">No Option</option>@php $states = getState();@endphp @foreach ($states as $state)<option value="{{ $state->id }}" {{ $studentdetails[0]->province_state == "$state->id" ? 'selected' : '' }}>{{ $state->state }}</option>@endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>City/Town <span class="red">*</span></label>
                            @php $cities = getcity();@endphp
                            <select name="city_town" id="city" class="form-select" aria-label="Default select example">
                                @foreach ($cities as $city)<option value="{{ $city->id }}" {{ $studentdetails[0]->city_town == "$city->id" ? 'selected' : '' }}> {{ $city->city }}</option>@endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Postal/Zip Code <span class="red">*</span> </label>
                            <input type="number" class="form-control" placeholder="Enter Pin Code...(110096)" value="{{ $studentdetails[0]->postal_code }}" name="postal_code" id="postal_code">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone Number <span class="red">*</span></label>
                            <input type="tel" class="form-control" placeholder="Enter Phone Number..." value="{{ $studentdetails[0]->phone_number }}" name="phone_number" id="phone_number">
                        </div>
                    </div>
                </div>
                <span class="h4">Highest Qualification</span>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Country of Education <span class="red">*</span> </label>
                            <select name="country_of_education" id="country_of_education" class="form-select" aria-label="Default select example">
                                <option value="0">select country</option>
                                @foreach ($countries as $country)<option value="{{ $country->id }}" {{ $studentdetails[0]->country_of_education == $country->id ? 'selected' : '' }}> {{ $country->country }}</option>@endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            @php $educationlist = getEducation();@endphp
                            <label>Highest Level of Education <span class="red">*</span> </label>
                            <select name="highest_level_of_education" id="highest_level_of_education" class="form-select" aria-label="Default select example">
                                <option value="0">select education</option>
                                @foreach ($educationlist as $list) <option value="{{ $list->id }}" {{ $studentdetails[0]->highest_level_of_education == "$list->id" ? 'selected' : '' }}> {{ $list->title }}</option>@endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Grading Scheme <span class="red">*</span> </label>
                            <select name="grading_scheme" id="grading_scheme" class="form-select" aria-label="Default select example">
                                <?php $grad_list = getGradingScheme(); ?>
                                <option value="0">Other</option>
                                @foreach ($grad_list as $grad) <option value={{ $grad->id }} {{ $studentdetails[0]->grading_scheme == "$grad->id" ? 'selected' : '' }}> {{ $grad->grad_name }}</option>@endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Grade Average <span class="red">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Grade Average..." value="{{ $studentdetails[0]->grade_average }}" name="grade_average" id="grade_average">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label></label>
                            <div class="formCheckBox">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="1" name="graduated_from_most_recent_school" id="graduated_from_most_recent_school" {{ $studentdetails[0]->graduated_from_most_recent_school == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="graduated_from_most_recent_school">Graduated from most recent school </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="h4">Education History</span>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Country of Institution <span class="red"></span></label>
                            <select name="country_of_institution" id="country_of_institution" class="form-select" aria-label="Default select example">
                                <option value="0">select country</option>
                                @foreach ($countries as $country)<option value="{{ $country->id }}"{{ $studentdetails[0]->country_of_institution == $country->id ? 'selected' : '' }}>{{ $country->country }}</option>@endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name of Institution <span class="red"></span> </label>
                            <input type="text" class="form-control" value=" {{ $studentdetails[0]->name_of_institution }}" name="name_of_institution" id="name_of_institution">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Highest Level of Education <span class="red"></span></label>
                            <select name="level_of_education" id="level_of_education" class="form-select" aria-label="Default select example">
                                @php $educationlist = getEducation();@endphp
                                <option value="0">None</option>
                                @foreach ($educationlist as $list)<option value="{{ $list->id }}" {{ $studentdetails[0]->level_of_education == "$list->id" ? 'selected' : '' }}>{{ $list->title }}</option>@endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Primary Language of Instruction <span class="red"></span></label>
                            <input type="text" class="form-control" value="{{ $studentdetails[0]->primary_language_of_instruction }}" name="primary_language_of_instruction" id="primary_language_of_instruction">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Attended Institution From <span class="red"></span></label>
                            <input type="text" class="form-control datepicker_input" value="{{ $studentdetails[0]->attended_institution_from }}" placeholder="Y-m-d" name="attended_institution_from" id="attended_institution_from">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Attended Institution To <span class="red"></span> </label>
                            <input type="text" class="form-control datepicker_input" value="{{ $studentdetails[0]->attended_institution_to }}" placeholder="Y-m-d" name="attended_institution_to" id="attended_institution_to">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>School Address</label>
                            <input type="text" class="form-control" placeholder="Enter School Address..." value="" name="degree_name" id="degree_name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>I have graduated from this institution <span class="red"></span></label>
                            <div class="formCheckBox">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="graduated_institution" id="graduated_institution" value="1" {{ $studentdetails[0]->graduated_institution == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault6">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="graduated_institution" id="graduated_institution" value="0" {{ $studentdetails[0]->graduated_institution == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault5">No </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="h4">School Address</span>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Address<span class="red"></span></label>
                            <input type="text" class="form-control" value="{{ $studentdetails[0]->school_address }}" name="school_address" id="school_address">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Province </label>
                            <select name="school_province" id="school_province" class="form-select" aria-label="Default select example">
                                @php $states = getState();@endphp
                                @foreach ($states as $state)<option value="{{ $state->id }}" {{ $studentdetails[0]->school_province == "$state->id" ? 'selected' : '' }}> {{ $state->state }}</option>@endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>City/Town<span class="red"></span> </label>
                            @php $cities = getcity();@endphp
                            <select name="school_city_town" id="school_city_town" class="form-select" aria-label="Default select example">
                                @foreach ($cities as $city)<option value="{{ $city->id }}"{{ $studentdetails[0]->school_city_town == "$city->id" ? 'selected' : '' }}>{{ $city->city }}</option>@endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="btnGroup">
                    <a href="javascript:;" class="btn-primary btn add_attended_school" id="add_attended_school">Add More School</a>
                </div>
                <div id="school2" style="display:none">
                    <span class="h4">Schools Attended 2</span>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Country of Institution <span class="red"></span></label>
                                <select name="country_of_institution2" id="country_of_institution2" class="form-select" aria-label="Default select example">
                                    <option value="0">select country</option>
                                    @foreach ($countries as $country)<option value="{{ $country->id }}" {{ $studentdetails[0]->country_of_institution2 == $country->id ? 'selected' : '' }}>{{ $country->country }}</option>@endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name of Institution <span class="red"></span> </label>
                                <input type="text" class="form-control" value=" {{ $studentdetails[0]->name_of_institution2 }}" name="name_of_institution2" id="name_of_institution2">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Highest Level of Education <span class="red"></span>
                                </label>
                                <select name="level_of_education2" id="level_of_education2" class="form-select" aria-label="Default select example">
                                    @php $educationlist = getEducation();@endphp
                                    <option value="0">None</option>
                                    @foreach ($educationlist as $list)<option value="{{ $list->id }}" {{ $studentdetails[0]->level_of_education2 == "$list->id" ? 'selected' : '' }}>{{ $list->title }}</option>@endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Primary Language of Instruction <span class="red"></span></label>
                                <input type="text" class="form-control" value="{{ $studentdetails[0]->primary_language_of_instruction2 }}" name="primary_language_of_instruction2" id="primary_language_of_instruction2">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Attended Institution From <span class="red"></span> </label>
                                <input type="text" class="form-control datepicker_input" value="{{ $studentdetails[0]->attended_institution_from2 }}" placeholder="Y-m-d" name="attended_institution_from2" id="attended_institution_from2">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Attended Institution To <span class="red"></span> </label>
                                <input type="text" class="form-control datepicker_input" value="{{ $studentdetails[0]->attended_institution_to2 }}" placeholder="Y-m-d" name="attended_institution_to2" id="attended_institution_to2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>I have graduated from this institution <span class="red"></span></label>
                                <div class="formCheckBox">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="graduated_institution2" id="graduated_institution2" value="1" {{ $studentdetails[0]->graduated_institution2 == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefault6">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="graduated_institution2" id="graduated_institution2" value="0" {{ $studentdetails[0]->graduated_institution2 == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefault5">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="h4">School Address</span>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Address<span class="red"></span></label>
                                <input type="text" class="form-control" value="{{ $studentdetails[0]->school_address2 }}" name="school_address2" id="school_address2">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Province </label>
                                <select name="school_province2" id="school_province2" class="form-select" aria-label="Default select example">
                                    @php $states = getState();@endphp
                                    @foreach ($states as $state)<option value="{{ $state->id }}" {{ $studentdetails[0]->school_province2 == "$state->id" ? 'selected' : '' }}>{{ $state->state }}</option>@endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>City/Town<span class="red"></span> </label>
                                @php $cities = getcity();@endphp
                                <select name="school_city_town2" id="school_city_town2" class="form-select" aria-label="Default select example">
                                    @foreach ($cities as $city)<option value="{{ $city->id }}" {{ $studentdetails[0]->school_city_town2 == "$city->id" ? 'selected' : '' }}>{{ $city->city }}</option>@endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Postal/Zip Code </label>
                                <input type="text" class="form-control" placeholder="Enter Postal/Zip Code..." value="{{ $studentdetails[0]->school_postal_code2 }}" name="school_postal_code2" id="school_postal_code2">
                            </div>
                        </div>
                    </div>
                    <div class="btnGroup">
                        <a href="javascript:;" id="cancile1" class="btn btn-secondary">Cancel</a>
                        <a href="javascript:;" class="btn btn-primary" id="addmore2">Add More School</a>
                    </div>
                </div>
                <div class="school3" id="school3" style="display: none">
                    <span class="h4">Schools Attended 3</span>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Country of Institution <span class="red"></span></label>
                                <select name="country_of_institution3" id="country_of_institution3" class="form-select" aria-label="Default select example">
                                    <option value="0">select country</option>
                                    @foreach ($countries as $country)<option value="{{ $country->id }}"{{ $studentdetails[0]->country_of_institution3 == $country->id ? 'selected' : '' }}>{{ $country->country }}</option>@endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name of Institution <span class="red"></span></label>
                                <input type="text" class="form-control" value="{{ $studentdetails[0]->name_of_institution3 }}" name="name_of_institution3" id="name_of_institution3">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Highest Level of Education <span class="red"></span></label>
                                <select name="level_of_education3" id="level_of_education3" class="form-select" aria-label="Default select example">
                                    @php $educationlist = getEducation();@endphp
                                    <option value="0">None</option>
                                    @foreach ($educationlist as $list)<option value="{{ $list->id }}"{{ $studentdetails[0]->level_of_education3 == "$list->id" ? 'selected' : '' }}>{{ $list->title }}</option>@endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Primary Language of Instruction <span class="red"></span></label>
                                <input type="text" class="form-control" value="{{ $studentdetails[0]->primary_language_of_instruction3 }}" name="primary_language_of_instruction3" id="primary_language_of_instruction3">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Attended Institution From <span class="red"></span></label>
                                <input type="text" class="form-control datepicker_input" value="{{ $studentdetails[0]->attended_institution_from3 }}" placeholder="Y-m-d" name="attended_institution_from3" id="attended_institution_from3">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Attended Institution To <span class="red"></span></label>
                                <input type="text" class="form-control datepicker_input" value="{{ $studentdetails[0]->attended_institution_to3 }}" placeholder="Y-m-d" name="attended_institution_to3" id="attended_institution_to3">
                            </div>
                        </div>
                    </div>
                    <span class="h4">School Address</span>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Address<span class="red"></span> </label>
                                <input type="text" class="form-control" value="{{ $studentdetails[0]->school_address3 }}" name="school_address3" id="school_address3">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Province </label>
                                <select name="school_province3" id="school_province3" class="form-select" aria-label="Default select example">
                                    @php $states = getState();@endphp
                                    @foreach ($states as $state)<option value="{{ $state->id }}"{{ $studentdetails[0]->school_province3 == "$state->id" ? 'selected' : '' }}>{{ $state->state }}</option>@endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>City/Town<span class="red"></span> </label>
                                @php $cities = getcity();@endphp
                                <select name="school_city_town3" id="school_city_town3" class="form-select" aria-label="Default select example">
                                    @foreach ($cities as $city)<option value="{{ $city->id }}"{{ $studentdetails[0]->school_city_town3 == "$city->id" ? 'selected' : '' }}>{{ $city->city }}</option>@endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Postal/Zip Code</label>
                                <input type="text" class="form-control" placeholder="Enter Postal/Zip Code..." value="{{ $studentdetails[0]->school_postal_code3 }}" name="school_postal_code3" id="school_postal_code3">
                            </div>
                        </div>
                    </div>
                    <div class="btnGroup">
                        <a href="javascript:;" class="btn btn-secondary" id="cancel3">Cancel</a>
                    </div>
                </div>
                <div class="cardFeature">
                    @if($studentdetails[0]->name_of_institution !='')
                        <span class="h5">{{ $studentdetails[0]->name_of_institution }}</span>
                    @endif
                    <div><i class="fas fa-circle-check"></i><strong>Graduated from Institution</strong>@if($studentdetails[0]->graduation_date !='')<span>{{ date('F d, Y', strtotime($studentdetails[0]->graduation_date)) }}</span>@endif</div>
                    <div><i class="fas fa-circle-check"></i><strong>Certificate awarded</strong>@if($studentdetails[0]->degree_name !='')<span>{{ $studentdetails[0]->degree_name }}</span>@endif</div>
                    <div><i class="fas fa-circle-check"></i><strong>Level</strong></div>
                    <div><i class="fas fa-circle-check"></i><strong>Attended from</strong>@if($studentdetails[0]->attended_institution_from !='')<span>{{ date('F d, Y', strtotime($studentdetails[0]->attended_institution_from)) }} - {{ date('F d, Y', strtotime($studentdetails[0]->attended_institution_to)) }}</span>@endif</div>
                    <div><i class="fas fa-circle-check"></i><strong>Language of instruction</strong>@if($studentdetails[0]->primary_language_of_instruction !='')<span>{{ $studentdetails[0]->primary_language_of_instruction }}</span>@endif</div>
                    <div><i class="fas fa-circle-check"></i><strong>Address</strong>@if($studentdetails[0]->school_address !='')<span>{{ $studentdetails[0]->school_address }} - {{ $studentdetails[0]->school_city_town }}, {{ $studentdetails[0]->school_province }}, {{ $studentdetails[0]->country_of_institution_name }} </span>@endif</div>
                </div>
                <span class="h4">English Proficiency</span>
                <div class="form-check form-switch">
                    <?php if($studentdetails[0]->date_of_exam !=''){?>
                    <input class="form-check-input main-switch3" type="checkbox" id="flexSwitchCheckDefaultgmat1" checked="checked"><?php }else{?>
                    <input class="form-check-input main-switch3" type="checkbox" id="flexSwitchCheckDefaultgmat1"><?php }?>
                    <label class="form-check-label" for="flexSwitchCheckDefaultgmat1"> I have English exam scores </label>
                </div>
                <?php if($studentdetails[0]->date_of_exam !=''){?>
                <div class="main-switch-toggle3" style="display: block;" data-select2-id="209">
                <?php }else{?>
                <div class="main-switch-toggle3">
                    <?php }?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>English Exam Date </label>
                                <input type="text" class="form-control datepicker_input" value="{{ $studentdetails[0]->date_of_exam }}" name="date_of_exam" id="date_of_exam" placeholder="Y-m-d">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Lisenting </label>
                                <input type="tel" class="form-control" placeholder="Score" value="{{ $studentdetails[0]->lisenting }}" name="lisenting" id="lisenting">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Reading </label>
                                <input type="tel" class="form-control" placeholder="Score" value="{{ $studentdetails[0]->reading }}" name="reading" id="reading">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Writing </label>
                                <input type="tel" class="form-control" placeholder="Score" value="{{ $studentdetails[0]->writing }}" name="writing" id="writing">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Speaking </label>
                                <input type="tel" class="form-control" placeholder="Score" value="{{ $studentdetails[0]->speaking }}" name="speaking" id="speaking">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Exam Type </label>
                                <select class="form-control select2" name="exam_type" id="exam_type">
                                    @foreach ($getEnglishexamType as $type) <option value={{ $type->id }} <?php if ($studentdetails[0]->english_exam_type == $type->id) { echo 'selected'; } else { echo ''; } ?>> {{ $type->exam_name }} </option> @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Do you have a valid Study Permit / Visa?</label>
                            <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." name="study_permit_visa" id="study_permit_visa">
                                @php $permitvisa = getPermitVisa(); @endphp
                                <option value="0">None</option>
                                @foreach ($permitvisa as $list)<option value="{{ $list->id }}"{{ $studentdetails[0]->study_permit_visa == $list->id ? 'selected' : '' }}>{{ $list->visa_title }}</option>@endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Is your visa is ever refused?</label>
                            <div class="formCheckBox">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="VisaRefuse" value="1">
                                    <label class="form-check-label" for="flexRadioDefault6">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="VisaRefuse" value="0">
                                    <label class="form-check-label" for="flexRadioDefault5">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>If you answered "Yes" to any of the questions above, please provide more details below:</label>
                            <textarea name="more_background_details" id="more_background_details" class="form-control" placeholder="Provide details...">{{ $studentdetails[0]->more_background_details }}</textarea>
                        </div>
                    </div>
                </div>
                @if (!empty($applications))
                    <span class="h4">Upload Documents</span>
                    <div class="table-responsive">
                        <table class="table tableCustomStudent table-bordered">
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
                @endif
                <div class="btnGroup">
                    <button class="btn btn-primary" type="button" onclick="agentStudentProfileUpdate();">Save</button>
                </div>
            </form>
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
