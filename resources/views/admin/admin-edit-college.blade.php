@extends('layouts.admin_app')
@section('content')
@php $application_status = getCurrentStatus() @endphp
@php $payment_status = getPaymentStatus() @endphp
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel='stylesheet'
            href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css'>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/blueimp-gallery/2.27.1/css/blueimp-gallery.min.css">
        <link rel="stylesheet"
            href="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/css/jquery.fileupload.min.css">
        <link rel="stylesheet"
            href="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/css/jquery.fileupload-ui.min.css">
<div class="page-content"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">List of College</h4>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block phone-noti">

                            <a href="/important_notice" class="btn header-item noti-icon waves-effect">
                                <i class="bx bx-bell"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </a>
                        </div>

                        <div class="dropdown profile-login d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assetsAgent/img/profile-icon.png"
                                    alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item user-name" href="/recruitment_partner_id">
                                    <span class=" font-size-14"><b> Sukhwinder Singh</b></span>
                                    <span class=" font-size-12 opacity-50">DevOps Engineer</span>
                                </a>
                                <a class="dropdown-item" href="/logout">
                                    <i class="bx bx-power-off font-size-16 align-middle me-1"></i>
                                    <span key="t-logout">Logout</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-row justify-content-end"> 
                <div class="d-flex flex-row">
                    <a href="#" onclick="history.back()" class="btn me-4 fw-normal fs-5 border rounded-pill px-3 py-1 border-danger"> Back </a>
                </div> 
            </div>
        </div>

    </div>

    <form name="editCollegeForm" id="editCollegeForm" method="post" enctype="multipart/form-data" action="/update-college-form">
                <div class="col-md-12" style="height: 1%;overflow: hidden;">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label> College Logo</label>
                                        <input id="college_logo" name="college_logo" type="file" accept="image/*"
                                            class="form-control">
                                    </div>
                                </div> -->
                                <input type="hidden" name="id" value="{{$college->id}}">
                                <div class="col">
                                    <div class="form-group">
                                        <label> College Name </label>
                                        <input name="college_name" id="college_name" value="{{$college->college_name}}" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label> College Country Name</label>
                                        <select class="form-select" name="college_country" id="college_country"
                                            aria-label="Default select example">
                                            <option value="" disabled>Select College Country</option>
                                            @foreach ($college_country as $country)
                                                <option value="{{ $country->id }}"  {{$country->id == $college->college_country ? 'selected' : ""}}>
                                                    {{ $country->country }}
                                                </option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-select" name="college_status" id="college_status"
                                            aria-label="Default select example">
                                            <option value="" disabled>Select College Status</option>
                                            <option value="{{$college->status}}" {{$college->status == 1 ? 'selected' : ""}}>Active</option>
                                            <option value="0" {{$college->status == 0 ? 'selected' : ""}}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label> College Address </label>
                                        <input name="college_address" id="college_address" value="{{$college->college_address}}" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>About Details </label>
                                    <textarea name="editor1" id="editor1">{{$college->college_about_details}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="form-heading">Cost and Duration</h3>
                                <div class="form-group">
                                    <label>Application fee</label>
                                    <input type="text" name="application_fee" value="{{$college->application_fee}}" id="application_fee"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Average graduate program</label>
                                    <input type="text" name="average_graduate_program" value="{{$college->average_graduate_program}}" id="average_graduate_program"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Average undergraduate program</label>
                                    <select name="average_undergraduate_program" value="{{$college->application_fee}}" id="average_undergraduate_program"
                                        class="form-select">
                                        <option value="">Select Average undergraduate program</option>
                                        @for($i = 1; $i<=8; $i++)
                                        <option value="{{$i}} Year" {{$college->average_undergraduate_program == $i.' Year' ? 'selected' : ""}}>{{$i}} Year</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Cost of living</label>
                                    <input type="text" id="cost_of_living" value="{{$college->cost_of_living}}" name="cost_of_living"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tuition</label>
                                    <input type="text" name="tuition" value="{{$college->tuition}}" id="tuition" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="form-heading">Institution Details</h3>
                                <div class="form-group">
                                    <label>Founded </label>
                                    <select name="founded" id="founded" class="form-select">
                                        <option value="" disabled>Select Founded</option>
                                       <?php
                                        $start_from = "1991";
                                        for($i = $start_from; $i<=date("Y")-2; $i++){
                                            echo '<option'.PHP_EOL;
                                            if($i == $college->founded){
                                                echo 'selected '.PHP_EOL;
                                            }
                                             echo 'value="'.$i.'">'.$i.'</option>'.PHP_EOL; 
                                        }   
                                       ?> 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>School ID </label>
                                    <input type="text" id="school_id" value="{{$college->school_id}}" name="school_id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Provider ID number </label>
                                    <input type="text" id="provider_id_number" value="{{$college->provider_id_number}}" name="provider_id_number"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Institution type </label>
                                    <select name="institution_type" id="institution_type" class="form-select">
                                        <option value="">Select Institution type</option>
                                        <option value="Public" {{$college->institution_type == "Public" ? 'selected':""}}>Public</option>
                                        <option value="Private" {{$college->institution_type == "Private" ? 'selected':""}}>Private</option>
                                        <option value="Only Me" {{$college->institution_type == "Only Me" ? 'selected':""}}>Only Me</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="form-heading">Average Time to Receive Letter of Acceptance</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>January - April</label>
                                            <input type="text" name="january_april" id="january_april"
                                                class="form-control" value="{{$college->january_april}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>May - August</label>
                                            <input type="text" id="may_august" value="{{$college->may_august}}" name="may_august" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>September - December</label>
                                            <input type="text" class="form-control" id="september_december"
                                                name="september_december" value="{{$college->september_december}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="form-heading">Top Disciplines (Bar)</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Engineering and Technology</label>
                                            <input type="text" name="engineering_and_technology"
                                                id="engineering_and_technology" class="form-control" value="{{$college->engineering_and_technology}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Health Sciences, Medicine, Nursing, Paramedic and Kinesiology</label>
                                            <input type="text"
                                                id="health_sciences_medicine_nursing_paramedic_and_kinesiology"
                                                name="health_sciences_medicine_nursing_paramedic_and_kinesiology"
                                                class="form-control" value="{{$college->health_sciences_medicine_nursing_paramedic_and_kinesiology}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Business, Management and Economics</label>
                                            <input type="text" name="business_management_and_economics"
                                                id="business_management_and_economics" class="form-control" value="{{$college->business_management_and_economics}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Other</label>
                                            <input type="text" name="other" id="other" class="form-control" value="{{$college->other}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="form-heading">Top Disciplines (Circle)</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> 1-Year Post-Secondary Certificate</label>
                                            <input type="text" id="year_post_secondary_certificate"
                                                name="year_post_secondary_certificate" class="form-control" value="{{$college->year_post_secondary_certificate}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> 2-Year Undergraduate Diploma</label>
                                            <input type="text" name="year_undergraduate_diploma"
                                                id="year_undergraduate_diploma" class="form-control" value="{{$college->year_undergraduate_diploma}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="form-heading">Eligibility For Study</h3>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Select valid Study Permit / Visa?</label>
                                            <select class="select2 form-control select2-multiple"
                                                id="valid_study_permit_visa" name="valid_study_permit_visa[]"
                                                multiple="multiple" data-placeholder="Choose ..."
                                                style="max-height:10px;" selected>
                                                <?php
                                                $permitvisa = getPermitVisa();
                                                $vp = $college->valid_study_permit_visa;
                                                $a = json_decode($vp, true);
                                                foreach($a as $b){
                                                    $c = App\Http\Controllers\SuperAdminController::getVisa($b); 
                                                echo '<option selected value="'.$c->id.'">'.$c->visa_title.'</option>';
                                               
                                            //     $permitvisa = getPermitVisa();
                                            //   foreach ($permitvisa as $list){
                                            //   if($list->id != 3){
                                            //         echo '<option value="'.$list->id.'">'.$list->visa_title.'</option>';
                                            //       }
                                            // }
                                            } 
                                            ?>
                                                @php $permitvisa = getPermitVisa(); @endphp 
                                                @foreach ($permitvisa as $list)
                                                    <option value="{{ $list->id }}">
                                                        {{ $list->visa_title }}
                                                    </option>
                                                @endforeach 
                                   
                                            </select>
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Eligible Nationality</label><br>
                                            <select class="selectpicker" id="eligible_nationality"
                                                name="eligible_nationality[]" multiple aria-label="Default select example"
                                                title="Select Eligible Nationality" data-live-search="true"
                                                data-actions-box="true"> 
                                                    <?php
                                                    $country = $college->eligible_nationality;
                                                    $a = json_decode($country, true);
                                                    foreach($a as $b){
                                                        $c = App\Http\Controllers\SuperAdminController::getCountry($b); 
                                                    echo '<option selected value="'.$c->id.'">'.$c->country.'</option>';
                                                    } 
                                                    ?> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Eligible Education Country</label><br>
                                            <select class="selectpicker" id="eligible_education_country"
                                                name="eligible_education_country[]" multiple
                                                aria-label="Default select example"
                                                title="Select Eligible Education Country" data-live-search="true"
                                                data-actions-box="true">
                                                <?php
                                                    $ecountry = $college->eligible_education_country;
                                                    $a = json_decode($ecountry, true);
                                                    foreach($a as $b){
                                                        $c = App\Http\Controllers\SuperAdminController::getEduCountry($b); 
                                                    echo '<option selected value="'.$c->id.'">'.$c->country.'</option>';
                                                    } 
                                                    ?>  
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Education Level</label><br>
                                            <select class="selectpicker" id="education_level" name="education_level[]"
                                                multiple aria-label="Default select example"
                                                title="Select Education Level" data-live-search="true"
                                                data-actions-box="true">
                                                <?php
                                                    $eecountry = $college->education_level;
                                                    $a = json_decode($eecountry, true);
                                                    foreach($a as $b){
                                                        $c = App\Http\Controllers\SuperAdminController::getEduLevel($b); 
                                                    echo '<option selected value="'.$c->id.'">'.$c->title.'</option>';
                                                    }
                                                    ?>  
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mt-md-3">
                                            <label>Grading Scheme</label><br>
                                            <select class="selectpicker" id="grading_scheme" name="grading_scheme[]"
                                                multiple aria-label="Default select example" title="Select Grading Scheme"
                                                data-live-search="true" data-actions-box="true">
                                                <?php
                                                    $gradingScheme = $college->grading_scheme;
                                                    $a = json_decode($gradingScheme, true);
                                                    foreach($a as $b){
                                                        $c = App\Http\Controllers\SuperAdminController::getGradingScheme($b); 
                                                    echo '<option selected value="'.$c->id.'">'.$c->grad_name.'</option>';
                                                    }
                                                    ?> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mt-md-3">
                                            <label>English Exam Type</label><br>
                                            <select class="selectpicker" id="english_exam_type" name="english_exam_type[]"
                                                multiple aria-label="Default select example"
                                                title="Select English Exam Type" data-live-search="true"
                                                data-actions-box="true">
                                                <?php
                                                    $englishExamType = $college->english_exam_type;
                                                    $a = json_decode($englishExamType, true);
                                                    foreach($a as $b){
                                                        $c = App\Http\Controllers\SuperAdminController::geteExamType($b); 
                                                    echo '<option selected value="'.$c->id.'">'.$c->exam_name.'</option>';
                                                    }
                                                    ?> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group checkbox" style="padding-top: 30px;" mt-md-3>
                                            <input class="form-check-input" id="work_permit_available"
                                            {{$college->work_permit_available == "Yes" ? 'checked':""}}
                                            name="work_permit_available" type="checkbox" value="Yes"
                                                id="PostCheckDefault">
                                            <label class="form-check-label" for="PostCheckDefault">
                                                Post-Graduation Work Permit Available
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mt-md-3">
                                            <label>Provinces / States</label><br>
                                            <select class="form-select" name="provinces_states" id="provinces_states"
                                                aria-label="Default select example">
                                                <?php
                                                $provinces_states = $college->provinces_states;
                                                $a = json_decode($provinces_states, true);
                                                foreach($a as $b){
                                                    $c = App\Http\Controllers\SuperAdminController::getState($b); 
                                                    echo '<option selected value="'.$c->id.'">'.$c->state.'</option>';
                                                }
                                              ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mt-md-3">
                                            <label>Campus City</label><br>
                                            <select class="form-select" name="campus_city" id="campus_city"
                                                aria-label="Default select example">
                                                <?php
                                                $currentCityList = $college->campus_city;
                                                $a = json_decode($currentCityList, true);
                                                foreach($a as $b){
                                                    $c =  App\Http\Controllers\SuperAdminController::getCity($b); 
                                                    echo '<option selected value="'.$c->id.'">'.$c->city.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mt-md-3">
                                        <label for="collegeType">College Type</label><br>
                                        <span id="errorToShow"></span>
                                        <div class="form-group checkbox">
                                            <div class="row">
                                                <div class="col">
                                                <?php
                                                $currentCollegeType = $college->college_type;
                                                $a = json_decode($currentCollegeType, true);
                                                foreach($a as $b){
                                                     
                                                    echo '<input class="form-check-input" name="college_type[]"
                                                        type="checkbox" checked value="'.$b.'" id="'.$b.'">
                                                    <label class="form-check-label" for="UniversityCheckDefault">
                                                        '.$b.'
                                                    </label>'; 
                                                }
                                                ?>

                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Map Location</label>
                                    <textarea name="map_location" id="map_location" cols="10" rows="2" class="form-control"
                                        placeholder="">{{$college->map_location}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Map Streetview</label>
                                    <textarea name="map_streetview" id="map_streetview" cols="10" rows="2" class="form-control"
                                        placeholder="">{{$college->map_streetview}}</textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-primary btn-submit">Add
                                    College</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

    
</div>
<script>
      
        var selectedState = "";
        var selectedCity = "";

     
    </script>
 
    <script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/vendor/jquery.ui.widget.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-JavaScript-Templates/3.11.0/js/tmpl.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-load-image/2.17.0/load-image.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/blueimp-canvas-to-blob@3.29.0/js/canvas-to-blob.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-gallery/2.27.1/js/jquery.blueimp-gallery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/jquery.iframe-transport.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/jquery.fileupload.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/jquery.fileupload-process.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/jquery.fileupload-image.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/jquery.fileupload-validate.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/jquery.fileupload-ui.min.js"></script>
    <script src="{{ asset('js/upload_app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js'></script>
 
<script>
    $(document).ready(function() {
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });

        $('#college_country').on('change', function() {
            $.ajax({
                url: "/getState",
                type: "get",
                data: {
                    college_country: this.value,
                },
                success: function(response) {
                    if (response.data != "") {
                        $('#provinces_states').empty();
                        $("#provinces_states").prepend($("<option/>").val("").text(
                            "Select Provinces State"));
                        $.each(response.data, function(index) {
                            $("#provinces_states").append($("<option />").val(
                                response.data[index].id).text(response
                                .data[index].state));
                        });
                        $("#provinces_states").val(selectedState).change();
                    } else {
                        $('#provinces_states').empty();
                        $("#provinces_states").prepend($("<option />").val("").text(
                            "Select Provinces State"));

                        $('#campus_city').empty();
                        $("#campus_city").prepend($("<option />").val("").text(
                            "Select Campus City"));
                    }
                },
                error: function(xhr) {}
            });
        });
        $('#provinces_states').on('change', function() {
            $.ajax({
                url: "/getCity",
                type: "get",
                data: {
                    college_state: this.value,
                },
                success: function(response) {
                    if (response.data != "") {
                        $('#campus_city').empty();
                        $("#campus_city").prepend($("<option />").val("").text(
                            "Select Campus City"));
                        $.each(response.data, function(index) {
                            $("#campus_city").append($("<option/>").val(response
                                .data[index].id).text(response.data[index]
                                .city));
                        });
                       
                        if (response.data.find(x => x.city == selectedCity)) {
                            $("#campus_city").val(selectedCity).change();
                        } else {
                            $("#campus_city")[0].options[0].selected = true;
                            $("#campus_city").val(selectedCity).change();
                        }
                    } else {
                        $('#campus_city').empty();
                        $("#campus_city").prepend($("<option />").val("").text(
                            "Select Campus City"));
                    }
                },
                error: function(xhr) {}
            });
        });



        getCollegeData();
    });
     
</script>
@endsection