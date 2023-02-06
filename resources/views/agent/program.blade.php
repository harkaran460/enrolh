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
    <?php //print_r($inakesdate);
    ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Modal Select Student -->
    <div class="modal fade" id="select-student" tabindex="-1" aria-labelledby="selectstudentLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title text-center m-auto" id="selectstudentLabel">Check
                        Student Eligibility</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h5>Select a student to check their eligibility.</h5>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="hidden" id="student-main" name="student-main"
                                value="">
                            <input type="hidden" id="programid" name="programid"
                                value="">
                            <input type="text" id="search_student" class="form-control"
                                placeholder="Search students name, email">
                            <img src="{{ url('/img/loader.gif') }}" alt="Image"
                                width="20" class="loadern2" />
                            <div id="student_list_on_page"></div>

                        </div>
                    </form>
                </div>

                <div id="main-content-popup">
                    <div id="elgalertsuc"class="alert alert-success alert-dismissible fade show"
                        role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Student is eligible
                        for this program.
                    </div>
                    <div id="elgalertdanger"class="alert alert-danger alert-dismissible fade show"
                        role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Student is not
                        eligible
                        for this program.
                    </div>
                    <div class="main-content-text mx-4 mt-3">
                        <div id="pdetails"></div>
                    </div>
                    <div id="papply" class="d-flex mt-3" style="display: none">
                        <!--<a class="btn btn-default w-50">Close</a>-->
                        <a class="btn btn-primary w-50" onclick="prograApply()">Apply Now</a>
                    </div>


                </div>



            </div>
        </div>
    </div>

    <div class="mainTitle">
        <span class="h4">Programs & School</span>
        <div class="controls">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewStudent"><i class="fa-solid fa-plus me-1"></i>Add new Student</button>
        </div>
    </div>
    <div class="agentProgramView">
        <div class="filtersOptions">
            <div class="panel">
                <div class="pHead">
                    <span class="h5">Eligibility</span>
                </div>
                <div class="pBody">
                    <form action="agenteligibilityfilter" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Select Student</label>
                            @if (!empty($student_list))
                            <!-- <select class="select2 form-control select2-multiple" multiple="" data-placeholder="Choose ..." name="student[]">@foreach ($student_list as $student)<option value="{{ $student->id }}">{{ $student->name }}</option>@endforeach</select>-->
                            @endif
                            <span class="search"><input type="text" id="search-dropdwon-main" class="form-control" placeholder="Search..." required ><i class="fa fa-search"></i></span>
                            <input type="hidden" id="student" name="student" value="">
                            <div class="search-dropdown">
                                <img src="{{ url('/img/loader.gif') }}" alt="Image" width="20" class="loadern" /><span id="suggesstionbox"></span>
                                <ul>
                                    <li class="disabled">No Option </li>
                                    <li data-bs-toggle="modal" data-bs-target="#addNewStudent"> + ADD NEW STUDENT </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Do you have a valid Study Permit / Visa?</label>
                            <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." name="visa_permit" id="visa_permit">
                                @foreach ($getPermitVisa as $visa)<option value="{{ $visa->id }}">{{ $visa->visa_title }}</option>@endforeach
                            </select>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label>Nationality</label>
                                <select class="form-control select2" name="nationality" id="nationality" required >
                                    <option value="" > Select </option>
                                    @foreach ($countries as $country)<option value="{{ $country->id }}">{{ $country->country }}</option>@endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label>Education Country</label>
                                <select class="form-control select2" name="education_country" required id="education_country">
                                    <option value=""> Select </option>
                                    @foreach ($countries as $country)<option value="{{ $country->id }}">{{ $country->country }}</option>@endforeach
                                </select>
                            </div>
                        </div>      
                        <div class="row form-group">
                            <div class="col">
                                <label>Education Level</label>
                                <select class="form-control select2" name="education_lavel" required id="education_lavel">
                                    <option>Select</option>
                                    @foreach ($getEducations as $getEducation)<option value="{{ $getEducation->id }}">{{ $getEducation->title }}</option>@endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label>Grading Scheme</label>
                                <select class="form-control select2" name="grading_schem" required
                                    id="grading_schem">
                                    <option>Select</option>
                                    @foreach ($getGradingSchemes as $getGradingScheme)<option value="{{ $getGradingScheme->id }}">{{ $getGradingScheme->grad_name }}</option>@endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>English Exam Type</label>
                            <select class="form-control select2" name="exam_type" id="exam_type" required>
                                @foreach ($getEnglishexamType as $type)<option value={{ $type->id }}>{{ $type->exam_name }}</option>@endforeach
                            </select>
                        </div>
                        <div class="row addisnalrow" style="display:none">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Reading</label>
                                    <input type="text" name="reading" id="reading" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Listening</label>
                                    <input type="text" name="listening" id="listening" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Speaking</label>
                                    <input type="text" name="speaking" id="speaking" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Writing</label>
                                    <input type="text" name="writing" id="writing" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="btnGroup">
                            <button type="submit" class=" btn btn-secondary">Cancel</button>
                            <button type="submit" class=" btn btn-primary">Apply Filter</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel">
                <div class="pHead">
                    <span class="h5">College Filters</span>
                </div>
                <div class="pBody">
                    <form action="agentcollagefilter" method="POST">
                    @csrf                       
                        <div class="row form-group">
                            <div class="col">
                                <label>Country</label>
                                <select class="form-control select2" id="country" required name="collage_country[]" multiple="multiple" data-placeholder="Select">
                                    @foreach ($countries as $country)<option data-id="{{ $country->id }}" value="{{ $country->id }}">{{ $country->country }}</option>@endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label>college</label>
                                <select class="form-control select2" name="college[]" multiple="multiple" requireddata-placeholder="Select">
                                    <option value="">No Option</option>
                                    @if (!empty($colleges))
                                        @foreach ($colleges as $college)<option value="{{ $college->id }}">{{ $college->college_name }}</option>@endforeach
                                    @endif
                                </select>
                            </div>      
                        </div>                 
                        <div class="row form-group">
                            <div class="col">
                                <label>Provinces/States</label>
                                <select class="select2 form-control select2-multiple" id="state" required name="collage_state[]" multiple="multiple" data-placeholder="Select">
                                    <option value="">No Option</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Campus City</label>
                                <select class="form-control select2" multiple="multiple" id="city" required name="campus_city_name[]" data-placeholder="Select">
                                    <option value="">No Option</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group checkbox">
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input"name="univercity" type="checkbox" value="University" id="UniversityCheckDefault">
                                    <label class="form-check-label" for="UniversityCheckDefault">University</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="College" required name="collage" id="CollegeCheckDefault">
                                    <label class="form-check-label" for="CollegeCheckDefault">College</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox"name="english_institute" value="English Institute"id="englishinstituteCheckDefault">
                                    <label class="form-check-label"for="englishinstituteCheckDefault">English Institute</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox"value="High School" name="high_school"id="highschoolCheckDefault">
                                    <label class="form-check-label" for="highschoolCheckDefault">High School</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group checkbox">
                            <div class="col">
                                <input class="form-check-input" type="checkbox" value="Yes"name="work_permit_status" id="PostCheckDefault">
                                <label class="form-check-label" for="PostCheckDefault">Post-Graduation Work Permit Available</label>
                            </div>
                        </div>                  
                        <div class="btnGroup">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-Primary">Apply Filter</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel">
                <div class="pHead">
                    <span class="h5">Program Filters</span>
                </div>
                <div class="pBody">
                    <form action="agentprogramfilter" method="POST">
                    @csrf                   
                        <div class="row form-group">
                            <div class="col">
                                <label>College</label>
                                <select class="form-control select2" name="collage_name[]" multiple="multiple" data-placeholder="Select ...">
                                    <option value="">No Option</option>
                                    @if (!empty($colleges))
                                        @foreach ($colleges as $college)<option value="{{ $college->id }}">{{ $college->college_name }}</option>@endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col">
                                <label>Intakes</label>
                                <select class="select2 form-control select2-multiple" name="inakes_date[]" required multiple="multiple" data-placeholder="Select ...">
                                    <?php print_r($inakesdate); ?>
                                    @if (!empty($inakesdate))
                                        @foreach ($inakesdate as $date)<option value="{{ $date->earliest_intake_date }}">{{ date('d-F-Y', strtotime($date->earliest_intake_date)) }}</option>@endforeach
                                    @endif
                                </select>
                            </div>      
                        </div>
                        <div class="form-group">
                            <label>Post-Secondary Discipline</label>
                            <select class="select2 form-control select2-multiple" required name="post_discipline[]" multiple="multiple" data-placeholder="Select ...">
                                @if (!empty($postdisciplines))
                                    @foreach ($postdisciplines as $disc)<option value="{{ $disc->id }}">{{ $disc->title }}</option>@endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Post-Secondary Sub-Categories</label>
                            <select class="select2 form-control select2-multiple" required name="sub_categories[]" multiple="multiple" data-placeholder="Select ...">
                                @if (!empty($subcategories))
                                    @foreach ($subcategories as $sub_cat)<option value="{{ $sub_cat->id }}">{{ $sub_cat->sub_cat_name }}</option>@endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="pt-2">Tuition Fee</label>
                            <div class="mt-2" id="range-slider">
                                <div id="slider-range"></div>
                                <p class="pt-2"><input type="text" class="ps-0" id="amount" readonly style="border:0;"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="pt-2">Application Fee</label>
                            <div class="mt-2" id="range-slider">
                                <div id="slider-range1"></div>
                                <p class="pt-2"><input type="text" class="ps-0" id="amount1" readonly style="border:0;"></p>
                            </div>
                        </div>
                        <div class="form-group checkbox">
                            <input class="form-check-input" type="checkbox" value="Yes" required name="living_cost" id="TuitionCheckDefault">
                            <label class="form-check-label" for="TuitionCheckDefault">Include living costs</label>
                        </div>
                        <div class="btnGroup">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Apply Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="agentProgramData">
            <div class="panel">
                <div class="pHead">
                    <div class="control">
                        <span class="search"><input type="text" class="inp-resp" placeholder="Search Programs"><i class="fa fa-search"></i></span>
                        <span class="search"><input type="text" class="inp-resp" placeholder="Search Colleges"><i class="fa fa-search"></i></span>
                        <button class="btn btn-primary" type="button">Search </button>
                    </div>
                    <form action="agentProgram" method="GET" class="control">
                        @csrf
                        <div class="form-group">
                            <select class="form-select slt-resp" id="sorting" name="sorting">
                                <option value="1">Relevance</option>
                                <option value="college_asc">College Name(A-Z)</option>
                                <option value="college_desc">College Name(Z-A)</option>
                                <option value="tfee_asc">Tution Fee(0-9)</option>
                                <option value="tfee_desc">Tution Fee(9-0)</option>
                                <option value="applo_asc">Application Fee (0-9)</option>
                                <option value="applo_desc">Application Fee (9-0)</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="pBody">
                    <ul class="nav nav-tabs customTabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation"><button class="nav-link active" id="programsTab" data-bs-toggle="tab" data-bs-target="#programsTabPane">Programs (@if($collages != 'not_found'){{$courseTotal}}@else 0 @endif)</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" id="collegesTab" data-bs-toggle="tab" data-bs-target="#collegesTabPane">Colleges (@if($collages != 'not_found'){{count($collages)}}@else 0 @endif)</button></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="programsTabPane" role="tabpanel" tabindex="0">
                        @if ($collages != 'not_found')
                            @foreach ($collages as $list)
                            <div class="agentProgramsList">
                                <a class="agentProgramsListHead" href="/agent-college-details/{{ $list->id }}">
                                    <span class="thumb"><img width="42" height="42" src="{{ url('/images/' . $list->college_logo) }}" alt="Logo" /></span>
                                    <strong>{{ $list->college_name }}</strong>{{ $list->college_address }}, {{ $list->college_country }}
                                </a>
                                @foreach ($list->courses as $p)
                                <a class="agentProgramsListTitle" href="/agent-program-details/{{ $p->id }}">{{ $p->programs_name }}</a>
                                <div class="agentProgramsListView">
                                    <div class="programsListView">
                                        <span class="thumb"><img src="assetsAgent/img/doller.png"></span>
                                        <span class="title"><strong>TUITION FEE</strong>@if ($p->tuition_fee_min != '') {{ number_format($p->tuition_fee_min, 2) }} - @else NA @endif @if ($p->tuition_fee_max != '') {{ number_format($p->tuition_fee_max, 2) }} @endif</span>
                                    </div>
                                    <div class="programsListView">
                                        <span class="thumb"><img src="assetsAgent/img/application.png"></span>
                                        <span class="title"><strong>APPLICATION FEE</strong>@if ($p->application_fee_min != '') {{ number_format($p->application_fee_min, 2) }} - @else NA @endif @if ($p->application_fee_max != '') {{ number_format($p->application_fee_max, 2) }} @endif</span>
                                    </div>
                                    <div class="programsListView">
                                        <span class="thumb"><img src="assetsAgent/img/commission.png"></span>
                                        <span class="title"><strong>Commission</strong>10%</span>
                                    </div>
                                    @if (!empty($canapply))
                                        <div class="select-submit">
                                            <a class="" href="" data-bs-toggle="modal" data-bs-target="#select-student" data-programid="{{ $p->id }}" onclick="setprogramid({{ $p->id }});">Select Student</a>
                                        </div>
                                    @endif
                                </div>
                                @break
                                @endforeach
                                <a href="javascript:;" class="expandBtn see-more"> See {{ count($list->courses) }} More Programs <i class="fa fa-chevron-down"></i></a>
                                <div class="main-slide">
                                    @foreach ($list->courses as $plist)
                                    <a class="agentProgramsListTitle" href="/agent-program-details/{{ $plist->id }}">{{ $plist->programs_name }}</a>
                                    <div class="agentProgramsListView">
                                        <div class="programsListView">
                                            <span class="thumb"><img src="assetsAgent/img/doller.png"></span>
                                            <span class="title">TUITION FEE<strong>@if ($plist->tuition_fee_min != '') {{ number_format($plist->tuition_fee_min, 2) }} - @else NA @endif @if ($plist->tuition_fee_max != '') {{ number_format($plist->tuition_fee_max, 2) }} @endif</strong></span>
                                        </div>
                                        <div class="programsListView">
                                            <span class="thumb"><img src="assetsAgent/img/application.png"></span>
                                            <span class="title">APPLICATION FEE<strong>@if ($plist->application_fee_min != '') {{ number_format($plist->application_fee_min, 2) }} - @else NA @endif @if ($plist->application_fee_max != '') {{ number_format($plist->application_fee_max, 2) }} @endif</strong></span>
                                        </div>
                                        <div class="programsListView">
                                            <span class="thumb"><img src="assetsAgent/img/commission.png"></span>
                                            <span class="title">Commission<strong>10%</strong></span>
                                        </div>
                                        @if (!empty($canapply))
                                            <div class="select-submit"><a class="" href="" data-bs-toggle="modal" data-bs-target="#select-student" data-programid="{{ $plist->id }}" onclick="setprogramid({{ $plist->id }});">Select Student</a></div>
                                        @endif
                                    </div>
                                    @endforeach
                                    <a href="javascript:;" class="expandBtn less-more">See Less <i class="fa fa-chevron-up"></i></a>
                                </div>
                            </div>
                            @endforeach
                        {{ $collages->links() }}
                        @else
                            <div class="alert alert-danger"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></strong> Requesting data not found.</div>
                        @endif
                        </div>
                        <div class="tab-pane fade" id="collegesTabPane" role="tabpanel" tabindex="0">
                                <div class="row">
                                    @if ($collages != 'not_found')
                                        @foreach ($collages as $collage)
                                            <div class="col-md-6">
                                                <!--<div class="school-tabs-section">-->
                                                <!--    <div class="school-tabs-content">-->
                                                <!--        <img width="68" height="68"-->
                                                <!--            src="{{ url('/images/' . $collage->college_logo) }}"-->
                                                <!--            alt="Logo" />-->
                                                <!--        <div class="school-tabs-main">-->
                                                <!--            <a-->
                                                <!--                href="/agent-college-details/{{ $collage->id }}">{{ $collage->college_name }}</a>-->
                                                <!--            <h4> {{ $collage->college_address }},-->
                                                <!--                {{ $collage->college_country }}</h4>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                
                                                <div class="hstack gap-2 mb-3 card bg-white p-3">
                                                <!-- Avatar -->
                                                <div class="avatar" style="height: 3rem;width: 3rem;">
                                                    <a href="#"> <img class="avatar-img rounded-circle shadow h-100" src="{{ url('/images/' . $collage->college_logo) }}" alt="" style="max-width: 100%;"> </a>
                                                </div>
                                                <!-- Title -->
                                                <div class="overflow-hidden">
                                                    <a class="h5 text-dark mb-0" href="/agent-college-details/{{ $collage->id }}">{{ $collage->college_name }}</a>
                                                    <p class="mb-0 small text-truncate"> {{ $collage->college_address }},
                                                                {{ $collage->college_country }}</p>
                                                </div>
                                                
                                                </div>

                                            </div>
                                        @endforeach
                                        {{ $collages->links() }}
                                    @else
                                        <div class="alert alert-danger">
                                            <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                            </strong> Requesting data not found.
                                        </div>
                                    @endif
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade customModalView" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 600px;">
        <form action="" method="POST" id="student_regi" style="pointer-events:auto;">
            @csrf
            <div class="panel m-0">
                <div class="pHead">
                    <span class="h5">Add New Student</span>
                    <div class="control"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                </div>
                <div class="pBody">
                    <div id="error"></div>
                    <div id="success"></div>
                    <span class="text">Please provide a legitimate email address for your student that is actively monitored by them. Their country is required to forward applications to our partner schools. Note: ApplyBoard will not communicate with your student via email or other methods.</span>
                    <span class="h5">CONTACT INFORMATION</span>
                    <div class="row">
                        <div class="form-group col">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col">
                            <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <span class="h5">PERSONAL INFORMATION</span>
                    <div class="row">
                        <div class="form-group col">
                            <input type="text" class="form-control" name="fname" placeholder="Given Name">
                        </div>
                        <div class="form-group col">
                            <input type="text" class="form-control" name="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="text" class="form-control" name="family_name" placeholder="Family Name">
                        </div>
                        <div class="form-group col">
                            <input type="text" id="datepicker" name="dob" class="form-control"  placeholder="Birth Date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <select class="form-select " name="citizenship" aria-label="Default select example">
                                <option selected>Country of Citizenship</option>
                                @foreach ($countries as $country)<option value="{{ $country->id }}">{{ $country->country }}</option>@endforeach
                            </select>
                        </div>
                        <div class="form-group col d-flex align-items-center">
                            <label class="form-label">Gender</label>
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input m-0" type="radio" name="gender" id="radiomale" value="male" checked>
                                <label class="form-check-label ms-1" for="radiomale">Male</label>
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input m-0" type="radio" name="gender" value="female" id="radiofemale">
                                <label class="form-check-label ms-1" for="radiofemale">Female</label>
                            </div>
                        </div>
                    </div>
                   <div class="form-check">
                       <input class="form-check-input" name="term_conditions" type="checkbox" value="1" id="flexCheckDefault">
                       <label class="form-check-label text" for="flexCheckDefault">I confirm that I have received express written consent from the student whom I am creating this profile for and I can provide proof of their consent upon request. To learn more please refer to the <a href="#">Personal Data Consent</a> article.</label>
                   </div>
                    <div class="btnGroup">
                        <input type="hidden" id="agent_id" name="agent_id" value="{{ Auth::user()->id }}">
                        <button type="button" class="btn btn-secondary" style="background-color: #FFE5E4;" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="student_regi_agent();">Create Student</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<style>
    #range-slider {max-width: 95%; margin: 0 auto;}
#slider-range { background-color: #D4D4D4;  height:5px;}
 
#slider-range1 { background-color: #D4D4D4;  height:5px;}
.ui-slider-horizontal .ui-slider-handle{
    top: -0.6em;
     
}
.ui-slider-horizontal .ui-slider-range {
    background-color: #2663EB !important;
}

.ui-slider-horizontal .ui-slider-range { background-color: #6798BD; }

.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-active, .ui-widget-content .ui-state-active, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus, .ui-button:hover, .ui-button:focus { 
  background: #fff!important;
  border: 1px solid #cccccc!important;
}

.ui-slider .ui-slider-handle {
  box-shadow: 0 0 5px 0 rgba(0,0,0,0.20);
  border-radius: 50%;
  height:20px;
  width:20px;
}

#amount { 
  
  font-weight: 300;
  line-height: 1.6875em;
  color:#6798BD; 
  text-align:left;
  width:100%;
  margin-top: 20px;
}
#amount1 { 
  
  font-weight: 300;
  line-height: 1.6875em;
  color:#6798BD; 
  text-align:left;
  width:100%;
  margin-top: 20px;
}



    .accordion-button::after {
        position: absolute !important;
        bottom: 8px !important;
    }
    
    .avatar-main-new{
        margin-left:2rem !important;
    }
    .appFee-main-new{
        padding-left:15rem !important;
    }
  .select2-results__option--highlighted[aria-selected]{
      background-color:#f8f9fa !important;
      
  }
  .select2-results__option--highlighted[aria-selected]:hover{
      color:#000 !important;
  }
  .select2-results__options{
      box-shadow: 0 -2em 2em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255),
    0.1em 0.1em 1em rgba(0, 0, 0, 0.3);
      
  }
  /*.tutionFee-icon{*/
  /*    background-color:#FF7F50;*/
  /*}*/

    @media (min-width: 300px) and (max-width: 600px)
    {
        #sorting {
            padding: 0px 35px 0px 8px;
        }
        
    }
    .w-5.h-5 {
        width: 2%;
    }

    .css-6g7jag {
        color: #fff;
    }

    .loadern {
        position: relative;
        top: -27px;
        right: -89%;
        z-index: 999999999999;
    }

    #search-res {
        z-index: 9999999;
        width: 83%;
        overflow: scroll;
        height: 36vh;
    }

    .fw-bold.ptitle {
        font-size: 20px;
        margin-left: 4%;
    }
    
    .accordion-button::after{
        position:absolute;
        bottom: 15px;
    }
    
    .testimonial-card .card-up {
     height: 60px;
     overflow: hidden;
     border-top-left-radius: 0.25rem;
     border-top-right-radius: 0.25rem;
}

.testimonial-card .avatar {
    width: 50px;
    margin-top: -31px;
    overflow: hidden;
    border: 3px solid #fff;
    border-radius: 50%;
}
.tution-feeProg-main{
    border-radius:5px !important;
}
</style>

<script>
    $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 10000,
      step: 100,
      values: [ 0, 6000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
      
      $( "#slider-range1" ).slider({
      range: true,
      min: 0,
      max: 10000,
      step: 100,
      values: [ 0, 6000 ],
      slide: function( event, ui ) {
        $( "#amount1" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        
      }
    });
    $( "#amount1" ).val( "$" + $( "#slider-range1" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range1" ).slider( "values", 1 ) );
  } );

</script>

@endsection
