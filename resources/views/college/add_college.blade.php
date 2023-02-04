@extends('layouts.college_app')
@section('content')
@php $countries = getCountry();@endphp
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
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


    </head>
    <div class="page-content main-index">
        <div class="container-fluid">
            <div id="success_messae" class="alert alert-success" style="display: none;">
                <strong><span style="color: black;"></span></strong>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add College</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <label> College Images Upload</label>
                            <div class="col-md-12">
                                <div class="alert alert-info">Max upload size is 2M, only images allowed</div>
                                <form id="fileupload" class="hello" action="{{ route('collegePictures.store') }}"
                                    method="post" enctype="multipart/form-data">
                                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                    <div class="row fileupload-buttonbar">
                                        <div class="col-lg-12">
                                            <!-- The fileinput-button span is used to style the file input field as button -->
                                            <span class="btn btn-success fileinput-button">
                                                <i class="fa-solid fa-plus"></i>
                                                <span>Add files...</span>
                                                <input type="file" accept="image/*" name="files[]" multiple>
                                            </span>
                                            <button type="submit" class="btn btn-primary start">
                                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                                <span>Start upload</span>
                                            </button>
                                            <button type="reset" class="btn btn-warning cancel">
                                                <i class="fa-solid fa-ban"></i>
                                                <span>Cancel upload</span>
                                            </button>
                                            <button type="button" class="btn btn-danger delete">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <span>Delete</span>
                                            </button>
                                            <input type="checkbox" class="toggle">
                                            <!-- The global file processing state -->
                                            <span class="fileupload-process"></span>
                                        </div>
                                    </div>
                                    <!-- The global progress state -->
                                    <div class="col-lg-5 fileupload-progress fade">
                                        <!-- The global progress bar -->
                                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                        </div>
                                        <!-- The extended global progress state -->
                                        <div class="progress-extended">&nbsp;</div>
                                    </div>
                                    <!-- The table listing the files available for upload/download -->
                                    <table role="presentation" class="table table-striped">
                                        <tbody class="files"></tbody>
                                    </table>
                                </form>
                                <!-- The blueimp Gallery widget -->
                                <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls"
                                    data-filter=":even">
                                    <div class="slides"></div>
                                    <h3 class="title"></h3>
                                    <a class="prev">‹</a>
                                    <a class="next">›</a>
                                    <a class="close">×</a>
                                    <a class="play-pause"></a>
                                    <ol class="indicator"></ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form name="addCollegeForm" id="addCollegeForm" method="post" enctype="multipart/form-data"
                action="javascript:void(0)">
                <div class="col-md-12" style="height: 1%;overflow: hidden;">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> College Logo</label>
                                        <input id="college_logo" name="college_logo" type="file" accept="image/*"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label> College Name </label>
                                        <input name="college_name" id="college_name" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label> College Country Name</label>
                                        <select class="form-select" name="college_country" id="college_country"
                                            aria-label="Default select example">
                                            <option value="">Select College Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">
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
                                            <option value="">Select College Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label> College Address </label>
                                        <input name="college_address" id="college_address" type="text"
                                            class="form-control">
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
                                    <textarea name="editor1" id="editor1"></textarea>
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
                                    <input type="text" name="application_fee" id="application_fee"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Average graduate program</label>
                                    <input type="text" name="average_graduate_program" id="average_graduate_program"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Average undergraduate program</label>
                                    <select name="average_undergraduate_program" id="average_undergraduate_program"
                                        class="form-select">
                                        <option value="">Select Average undergraduate program</option>
                                        <option value="1 Year">1 Year</option>
                                        <option value="2 Year">2 Year</option>
                                        <option value="3 Year">3 Year</option>
                                        <option value="4 Year">4 Year</option>
                                        <option value="5 Year">5 Year</option>
                                        <option value="6 Year">6 Year</option>
                                        <option value="7 Year">7 Year</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Cost of living</label>
                                    <input type="text" id="cost_of_living" name="cost_of_living"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tuition</label>
                                    <input type="text" name="tuition" id="tuition" class="form-control">
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
                                        <option value="">Select Founded</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>School ID </label>
                                    <input type="text" id="school_id" name="school_id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Provider ID number </label>
                                    <input type="text" id="provider_id_number" name="provider_id_number"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Institution type </label>
                                    <select name="institution_type" id="institution_type" class="form-select">
                                        <option value="">Select Institution type</option>
                                        <option value="Public">Public</option>
                                        <option value="Private">Private</option>
                                        <option value="Only Me">Only Me</option>
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
                                                class="form-control" value="N/A">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>May - August</label>
                                            <input type="text" id="may_august" name="may_august" class="form-control"
                                                value="N/A">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>September - December</label>
                                            <input type="text" class="form-control" id="september_december"
                                                name="september_december" value="N/A">
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
                                <div class="form-group">
                                    <div id="form-exams-list">
                                        <div class="form-group">
                                            <div class="row mb-md-3 mt-md-3">
                                                <div class="col-md-6">
                                                    <label>Feature Questions </label>
                                                    <textarea name="feature_question" id="feature_question" cols="10" rows="3" class="form-control"></textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Feature Answer </label>
                                                    <textarea name="feature_answer" id="feature_answer" cols="10" rows="3" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-md-3">
                                        <div class="col-md-12">
                                            <button class="btn btn-info js-add--exam-row" onClick="getDataInput();">Add
                                                More Feature </button>
                                        </div>
                                        <input id="noOfQuestionAsnwer" name="noOfQuestionAsnwer" type="hidden"
                                            value="0" />
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
                                                id="engineering_and_technology" class="form-control" placeholder="90%">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Health Sciences, Medicine, Nursing, Paramedic and Kinesiology</label>
                                            <input type="text"
                                                id="health_sciences_medicine_nursing_paramedic_and_kinesiology"
                                                name="health_sciences_medicine_nursing_paramedic_and_kinesiology"
                                                class="form-control" placeholder="25%">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Business, Management and Economics</label>
                                            <input type="text" name="business_management_and_economics"
                                                id="business_management_and_economics" class="form-control"
                                                placeholder="25%">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Other</label>
                                            <input type="text" name="other" id="other" class="form-control"
                                                placeholder="85%">
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
                                                name="year_post_secondary_certificate" class="form-control"
                                                placeholder="75%">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> 2-Year Undergraduate Diploma</label>
                                            <input type="text" name="year_undergraduate_diploma"
                                                id="year_undergraduate_diploma" class="form-control" placeholder="25%">
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
                                                id="valid_study_permit_visa" name="valid_study_permit_visa"
                                                multiple="multiple" data-placeholder="Choose ..."
                                                style="max-height:10px;">
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
                                                name="eligible_nationality" multiple aria-label="Default select example"
                                                title="Select Eligible Nationality" data-live-search="true"
                                                data-actions-box="true">
                        
                            
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">
                                                    {{ $country->country }}
                                                </option>
                                            @endforeach
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Eligible Education Country</label><br>
                                            <select class="selectpicker" id="eligible_education_country"
                                                name="eligible_education_country" multiple
                                                aria-label="Default select example"
                                                title="Select Eligible Education Country" data-live-search="true"
                                                data-actions-box="true">
                                               
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">
                                                    {{ $country->country }}
                                                </option>
                                            @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Education Level</label><br>
                                            <select class="selectpicker" id="education_level" name="education_level"
                                                multiple aria-label="Default select example"
                                                title="Select Education Level" data-live-search="true"
                                                data-actions-box="true">
                                                @php $educationlist = getEducation();@endphp
                                                @foreach ($educationlist as $list)
                                                        <option value="{{ $list->id }}">
                                                            {{ $list->title }}
                                                        </option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mt-md-3">
                                            <label>Grading Scheme</label><br>
                                            <select class="selectpicker" id="grading_scheme" name="grading_scheme"
                                                multiple aria-label="Default select example" title="Select Grading Scheme"
                                                data-live-search="true" data-actions-box="true">
                                                <?php $grad_list = getGradingScheme(); ?>
                                                    @foreach ($grad_list as $grad)
                                                        <option value={{ $grad->id }}>
                                                            {{ $grad->grad_name }}</option>
                                                    @endforeach
                                                    <option>Other</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mt-md-3">
                                            <label>English Exam Type</label><br>
                                            <select class="selectpicker" id="english_exam_type" name="english_exam_type"
                                                multiple aria-label="Default select example"
                                                title="Select English Exam Type" data-live-search="true"
                                                data-actions-box="true">
                                                <option value="TOEFL">TOEFL</option>
                                                <option value="IELTS">IELTS</option>
                                                <option value="Duolingo English Test">Duolingo English Test</option>
                                                <option value="PTE">PTE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group checkbox" style="padding-top: 30px;" mt-md-3>
                                            <input class="form-check-input" id="work_permit_available"
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
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mt-md-3">
                                            <label>Campus City</label><br>
                                            <select class="form-select" name="campus_city" id="campus_city"
                                                aria-label="Default select example">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mt-md-3">
                                        <label for="collegeType">College Type</label><br>
                                        <span id="errorToShow"></span>
                                        <div class="form-group checkbox">
                                            <div class="row">
                                                <div class="col">
                                                    <input class="form-check-input" name="college_type"
                                                        type="checkbox" value="University" id="university">
                                                    <label class="form-check-label" for="UniversityCheckDefault">
                                                        University
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="college_type" value="College" id="college">
                                                    <label class="form-check-label" for="CollegeCheckDefault">
                                                        College
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="High School" name="college_type" id="high_school">
                                                    <label class="form-check-label" for="highschoolCheckDefault">
                                                        High School
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Map Location</label>
                                    <textarea name="map_location" id="map_location" cols="10" rows="2" class="form-control"
                                        placeholder=""></textarea>
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
                                        placeholder=""></textarea>
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
    </div>

    <script>
        function getDataInput() {
            var getTxtValue = $("#noOfQuestionAsnwer").val();
            var getTxtValue = parseInt(getTxtValue) + 1;
            $("#noOfQuestionAsnwer").val(getTxtValue);

        }
        var selectedState = "";
        var selectedCity = "";

        function getCollegeData() {
            $.ajax({
                url: "{{ route('getCollegeDetails') }}",
                type: "GET",
                success: function(response) { 
                    if (response.collegeDetails.college != null) {
                        $('#submit').html('Update College');
                        $("#college_name").val(response.collegeDetails.college.college_name);
                        $("#college_country").val(response.collegeDetails.college.college_country).change();

                        $("#college_status").val(response.collegeDetails.college.status).change();

                        $("#college_address").val(response.collegeDetails.college.college_address);
                        $("#college_status").val(response.collegeDetails.college.status).change();
                        CKEDITOR.instances.editor1.setData(response.collegeDetails.college
                            .college_about_details);
                        $("#map_location").val(response.collegeDetails.college.map_location);
                        $("#map_streetview").val(response.collegeDetails.college.map_streetview);
                        $("#application_fee").val(response.collegeDetails.college.application_fee);
                        $("#average_graduate_program").val(response.collegeDetails.college
                            .average_graduate_program);
                        $("#average_undergraduate_program").val(response.collegeDetails.college
                            .average_undergraduate_program);
                        $("#cost_of_living").val(response.collegeDetails.college.cost_of_living);
                        $("#tuition").val(response.collegeDetails.college.tuition);
                        $("#school_id").val(response.collegeDetails.college.school_id);
                        $("#provider_id_number").val(response.collegeDetails.college.provider_id_number);
                        $("#institution_type").val(response.collegeDetails.college.institution_type);
                        $("#january_april").val(response.collegeDetails.college.january_april);
                        $("#may_august").val(response.collegeDetails.college.may_august);
                        $("#september_december").val(response.collegeDetails.college.september_december);
                        $("#engineering_and_technology").val(response.collegeDetails.college
                            .engineering_and_technology);
                        $("#health_sciences_medicine_nursing_paramedic_and_kinesiology").val(response
                            .collegeDetails.college
                            .health_sciences_medicine_nursing_paramedic_and_kinesiology);
                        $("#business_management_and_economics").val(response.collegeDetails.college
                            .business_management_and_economics);
                        $("#other").val(response.collegeDetails.college.other);
                        $("#year_post_secondary_certificate").val(response.collegeDetails.college
                            .year_post_secondary_certificate);
                        $("#year_undergraduate_diploma").val(response.collegeDetails.college
                            .year_undergraduate_diploma);
                        $("#founded").val(response.collegeDetails.college.founded);






                        if (response.collegeDetails.college_feature_questions != '') {
                            $collegeFeatureQuestionAnswer = response.collegeDetails.college_feature_questions;
                            $("#feature_question").val($collegeFeatureQuestionAnswer[0]['feature_questions']);
                            $("#feature_answer").val($collegeFeatureQuestionAnswer[0]['feature_answer']);

                            $("#noOfQuestionAsnwer").val($collegeFeatureQuestionAnswer.length);


                            for (var i = 1; i < $collegeFeatureQuestionAnswer.length; i++) {
                                var clone, examsList;
                                examsList = $('#form-exams-list');
                                clone = examsList.children('.form-group:first').clone(true);
                                clone.append($('<button>').addClass('btn btn-danger js-remove--exam-row').html(
                                    'Feature Remove'));
                                clone.find('textarea,input').val('').attr('id', function() {
                                    return $(this).attr('id') + '_' + (examsList.children('.form-group')
                                        .length + 1);
                                });
                                examsList.append(clone);
                                var item_id = i + 1;
                                $('#feature_question_' + item_id).val($collegeFeatureQuestionAnswer[i][
                                    'feature_questions'
                                ]);
                                $("#feature_answer_" + item_id).val($collegeFeatureQuestionAnswer[i][
                                    'feature_answer'
                                ]);


                            }

                        }


                        var valid_study_permit_visa = response.collegeDetails.college.valid_study_permit_visa;
                        if (valid_study_permit_visa != '' || valid_study_permit_visa != null) {
                            var result = JSON.parse(valid_study_permit_visa);
                            $('#valid_study_permit_visa').val(result).change();
                        }
                        $('#eligible_nationality').selectpicker('val', JSON.parse(response.collegeDetails
                            .college.eligible_nationality));
                        $('#eligible_education_country').selectpicker('val', JSON.parse(response.collegeDetails
                            .college.eligible_education_country));
                        $('#education_level').selectpicker('val', JSON.parse(response.collegeDetails.college
                            .education_level));
                        $('#grading_scheme').selectpicker('val', JSON.parse(response.collegeDetails.college
                            .grading_scheme));
                        $('#english_exam_type').selectpicker('val', JSON.parse(response.collegeDetails.college
                            .english_exam_type));

                        var state = JSON.parse(response.collegeDetails.college.provinces_states);
                        var city = JSON.parse(response.collegeDetails.college.campus_city);

                        selectedState = state[0];
                        selectedCity = city[0];
                        
                        if (response.collegeDetails.college.work_permit_available == 'Yes') {
                            $("#work_permit_available").prop('checked', true);
                        } else {
                            $("#work_permit_available").prop('checked', false);
                        }
                        if ($.inArray('University', JSON.parse(response.collegeDetails.college.college_type)) >
                            -1) {
                            $("#university").prop('checked', true);
                        }
                        if ($.inArray('College', JSON.parse(response.collegeDetails.college.college_type)) > -
                            1) {
                            $("#college").prop('checked', true);
                        }
                        if ($.inArray('High School', JSON.parse(response.collegeDetails.college.college_type)) >
                            -1) {
                            $("#high_school").prop('checked', true);
                        }

                        var collegeLogo = response.collegeDetails.college.college_logo;
                        collegeLogo = "/images/" + collegeLogo;

                        getImgURL(collegeLogo, (imgBlob) => {
                            let fileName = response.collegeDetails.college.college_logo;
                            let file = new File([imgBlob], fileName, {
                                type: "image/jpeg",
                                lastModified: new Date().getTime()
                            }, 'utf-8');
                            let container = new DataTransfer();
                            container.items.add(file);
                            document.querySelector('#college_logo').files = container.files;

                        })

                        function getImgURL(url, callback) {
                            var xhr = new XMLHttpRequest();
                            xhr.onload = function() {
                                callback(xhr.response);
                            };
                            xhr.open('GET', url);
                            xhr.responseType = 'blob';
                            xhr.send();
                        }
                    } else {
                        $('#submit').html('Add College');
                    }


                }
            });
        }
    </script>
@section('js')
    @include('_partials.x-template')
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
@endsection
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
                        $("#provinces_states").prepend($("<option />").val("").text(
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
                            $("#campus_city").append($("<option />").val(response
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
    if ($("#addCollegeForm").length > 0) {
        $("#addCollegeForm").validate({
            ignore: [],
            rules: {
                college_logo: {
                    required: true,
                    maxlength: 500,
                },
                college_name: {
                    required: true,
                    maxlength: 50,
                },
                college_country: {
                    required: true,
                    maxlength: 500
                },
                college_address: {
                    required: true,
                    maxlength: 500
                },
                college_status: {
                    required: true,
                },
                editor1: {
                    required: function() {
                        if (CKEDITOR.instances.editor1.getData() == '') {
                            return true;
                        }
                    }
                },
                application_fee: {
                    required: true,
                    maxlength: 100
                },
                average_graduate_program: {
                    required: true,
                    maxlength: 100
                },
                average_undergraduate_program: {
                    required: function(elm) {
                        select = document.getElementById('average_undergraduate_program');
                        if (select.value == "") {
                            return true;
                        }
                        return false;
                    }
                },
                cost_of_living: {
                    required: true,
                    maxlength: 100
                },
                tuition: {
                    required: true,
                    maxlength: 100
                },
                founded: {
                    required: function(elm) {
                        select = document.getElementById('founded');
                        if (select.value == "") {
                            return true;
                        }
                        return false;
                    }
                },
                school_id: {
                    required: true,
                    maxlength: 100
                },
                provider_id_number: {
                    required: true,
                    maxlength: 100
                },
                institution_type: {
                    required: function(elm) {
                        select = document.getElementById('institution_type');
                        if (select.value == "") {
                            return true;
                        }
                        return false;
                    }
                },
                january_april: {
                    required: true,
                    maxlength: 100
                },
                may_august: {
                    required: true,
                    maxlength: 100
                },
                september_december: {
                    required: true,
                    maxlength: 100
                },
                engineering_and_technology: {
                    required: true,
                    maxlength: 100
                },
                health_sciences_medicine_nursing_paramedic_and_kinesiology: {
                    required: true,
                    maxlength: 100
                },
                business_management_and_economics: {
                    required: true,
                    maxlength: 100
                },
                other: {
                    required: true,
                    maxlength: 100
                },
                'year_post_secondary_certificate': {
                    required: true,
                    maxlength: 100
                },
                'year_undergraduate_diploma': {
                    required: true,
                    maxlength: 100
                },
                feature_question: {
                    required: true,
                    maxlength: 500
                },
                feature_answer: {
                    required: true,
                    maxlength: 500
                },
                map_location: {
                    required: true,
                    maxlength: 500
                },
                map_streetview: {
                    required: true,
                    maxlength: 500
                },
                valid_study_permit_visa: {
                    required: true,
                },
                eligible_nationality: {
                    required: true,
                },
                eligible_education_country: {
                    required: true,
                },
                education_level: {
                    required: true,
                },
                grading_scheme: {
                    required: true,
                },
                english_exam_type: {
                    required: true,
                },
                provinces_states: {
                    required: true,
                },
                campus_city: {
                    required: true,
                },
                college_type: {
                    required: true,
                }
            },
            messages: {
                college_logo: {
                    required: "Please select college logo",
                },
                college_name: {
                    required: "Please enter college name",
                },
                college_country: {
                    required: "Please select college country",
                },
                college_address: {
                    required: "Please enter college address",
                },
                college_status: {
                    required: "Please select college status",
                },
                editor1: {
                    required: "Please enter details about college",
                },
                feature_question: {
                    required: "Please enter feature question",
                },
                feature_answer: {
                    required: "Please enter feature answer",
                },
                application_fee: {
                    required: "Please enter application fee",
                },
                average_graduate_program: {
                    required: "Please enter average graduate program",
                },
                average_undergraduate_program: {
                    required: "Please select average undergraduate program",
                },
                cost_of_living: {
                    required: "Please enter cost of living",
                },
                tuition: {
                    required: "Please enter tuition",
                },
                founded: {
                    required: "Please select founded",
                },
                school_id: {
                    required: "Please enter school id",
                },
                provider_id_number: {
                    required: "Please enter provider id number",
                },
                institution_type: {
                    required: "Please enter institution type",
                },
                map_location: {
                    required: "Please enter map location",
                },
                map_streetview: {
                    required: "Please enter map streetview",
                },
                valid_study_permit_visa: {
                    required: "Please select valid eligible visa permit",
                },
                eligible_nationality: {
                    required: "Please select eligible nationality",
                },
                eligible_education_country: {
                    required: "Please select eligible education country",
                },
                education_level: {
                    required: "Please select eligible education level",
                },
                grading_scheme: {
                    required: "Please select eligible grading scheme",
                },
                english_exam_type: {
                    required: "Please select eligible english exam type",
                },
                provinces_states: {
                    required: "Please select eligible provinces states",
                },
                campus_city: {
                    required: "Please select eligible campus city",
                },
                college_type: {
                    required: "Please select college type",
                }

            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "college_type") {
                    error.appendTo("#errorToShow");
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#submit').html('Please Wait...');
                // $("#submit").attr("disabled", true);
                var formData = new FormData()

                var image = $("#college_logo")[0].files[0];
                formData.append('college_logo', image);

                var data = CKEDITOR.instances.editor1.getData();

                formData.append('editor1', data);


                var college_name = $('input[name="college_name"]').val();
                var college_country = $("#college_country :selected").val();
                var college_address = $('input[name="college_address"]').val();
                var college_status = $("#college_status :selected").val();
                var feature_question = $('textarea#feature_question').val();
                var feature_answer = $('textarea#feature_answer').val();
                var map_location = $('textarea#map_location').val();
                var map_streetview = $('textarea#map_streetview').val();

                var application_fee = $('input[name="application_fee"]').val();
                var average_graduate_program = $('input[name="average_graduate_program"]').val();


                average_undergraduate_program = document.getElementById('average_undergraduate_program')
                    .value;
                founded = document.getElementById('founded').value;
                institution_type = document.getElementById('institution_type').value;

                var cost_of_living = $('input[name="cost_of_living"]').val();
                var tuition = $('input[name="tuition"]').val();
                var school_id = $('input[name="school_id"]').val();
                var provider_id_number = $('input[name="provider_id_number"]').val();

                var january_april = $('input[name="january_april"]').val();
                var may_august = $('input[name="may_august"]').val();
                var september_december = $('input[name="september_december"]').val();
                var engineering_and_technology = $('input[name="engineering_and_technology"]').val();
                var health_sciences_medicine_nursing_paramedic_and_kinesiology = $(
                    'input[name="health_sciences_medicine_nursing_paramedic_and_kinesiology"]').val();
                var business_management_and_economics = $('input[name="business_management_and_economics"]')
                    .val();
                var other = $('input[name="other"]').val();
                var year_post_secondary_certificate = $('input[name="year_post_secondary_certificate"]')
                    .val();
                var year_undergraduate_diploma = $('input[name="year_undergraduate_diploma"]').val();


                var valid_study_permit_visa = $('#valid_study_permit_visa').select2("val");
                var eligible_nationality = $('#eligible_nationality').val();
                var eligible_education_country = $('#eligible_education_country').val();
                var education_level = $('#education_level').val();
                var grading_scheme = $('#grading_scheme').val();
                var english_exam_type = $('#english_exam_type').val();
                var provinces_states = $('#provinces_states').val();
                var campus_city = $('#campus_city').val();
                var work_permit_available = '';
                var college_type = [];
                $('input:checkbox[name=work_permit_available]').each(function() {
                    if ($(this).is(':checked')) {
                        work_permit_available = $(this).val();
                    } else {
                        work_permit_available = "No";
                    }
                });
                $.each($("input[name='college_type']:checked"), function() {
                    college_type.push($(this).val());
                });

                formData.append('valid_study_permit_visa', valid_study_permit_visa);
                formData.append('eligible_nationality', eligible_nationality);
                formData.append('eligible_education_country', eligible_education_country);
                formData.append('education_level', education_level);
                formData.append('grading_scheme', grading_scheme);
                formData.append('english_exam_type', english_exam_type);
                formData.append('provinces_states', provinces_states);
                formData.append('campus_city', campus_city);
                formData.append('work_permit_available', work_permit_available);
                formData.append('college_type', college_type);

                formData.append('application_fee', application_fee);
                formData.append('average_graduate_program', average_graduate_program);
                formData.append('average_undergraduate_program', average_undergraduate_program);
                formData.append('cost_of_living', cost_of_living);
                formData.append('tuition', tuition);
                formData.append('founded', founded);
                formData.append('school_id', school_id);
                formData.append('institution_type', institution_type);
                formData.append('provider_id_number', provider_id_number);
                formData.append('january_april', january_april);
                formData.append('may_august', may_august);
                formData.append('september_december', september_december);
                formData.append('engineering_and_technology', engineering_and_technology);
                formData.append('health_sciences_medicine_nursing_paramedic_and_kinesiology',
                    health_sciences_medicine_nursing_paramedic_and_kinesiology);
                formData.append('business_management_and_economics', business_management_and_economics);
                formData.append('other', other);
                formData.append('year_post_secondary_certificate', year_post_secondary_certificate);
                formData.append('year_undergraduate_diploma', year_undergraduate_diploma);


                formData.append('college_name', college_name);
                formData.append('college_country', college_country);
                formData.append('college_status', college_status);
                formData.append('college_address', college_address);
                formData.append('map_location', map_location);
                formData.append('map_streetview', map_streetview);

                console.log(formData);

                var noOfQuestionAnswer = $('input[name="noOfQuestionAsnwer"]').val();
                var questionAnswer = [];

                questionAnswer.push({
                    "feature_question": $('textarea#feature_question').val().replace(/\"/g, '\\"'),
                    "feature_answer": $('textarea#feature_answer').val().replace(/\"/g, '\\"')
                })
                for (var i = 0; i < noOfQuestionAnswer; i++) {
                    var question = "textarea#feature_question_";
                    var answer = "textarea#feature_answer_";
                    var item = parseInt(i) + 2;

                    question = question + item;
                    answer = answer + item;
                    questionAnswer.push({
                        "feature_question": $(question).val()?.replace(/\"/g, '\\"'),
                        "feature_answer": $(answer).val()?.replace(/\"/g, '\\"')
                    })
                }
                // console.log(questionAnswer);
                var jsonString = JSON.stringify(questionAnswer);

                formData.append('questionAnswer', jsonString);


                $.ajax({
                    url: "{{ route('addCollegeSubmit.post') }}",
                    enctype: 'multipart/form-data',
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        $('#submit').html('Add College');
                        $("#submit").attr("disabled", false);
                        document.getElementById("addCollegeForm").reset();
                        CKEDITOR.instances.editor1.setData('');
                        $("#success_messae span").html(response.success);
                        $('#success_messae').show();

                        window.setTimeout(function() {
                            location.reload()
                        }, 2000)
                        // console.log(response);
                    }
                });
            }
        })
    }
</script>
@endsection
