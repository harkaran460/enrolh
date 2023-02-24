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
    
<div class="modal fade customModalView" id="select-student" tabindex="-1" aria-labelledby="selectstudentLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="panel">
                <div class="pHead">
                    <span class="h5">Check Student Eligibility</span>
                    <div class="control"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                </div>
                <div class="pBody">
                    <form action="" method="POST" class="form-group">
                        <label>Select a student to check their eligibility.</label>
                        <input type="hidden" id="student-main" name="student-main" value="">
                        <input type="hidden" id="programid" name="programid" value=""> 
                        <input type="hidden" id="agent_id" name="agent_id" value="{{ Auth::user()->id }}">
                        <input type="text" id="search_student" class="form-control" placeholder="Search students name, email">
                        <img src="{{ url('/img/loader.gif') }}" alt="Image" width="20" class="loadern2" />
                        <div id="student_list_on_page"></div>
                    </form>
                    <div id="main-content-popup">
                        <div id="elgalertsuc"class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa-solid fa-triangle-exclamation"></i> Student is eligible for this program.</div>
                        <div id="elgalertdanger"class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fa-solid fa-triangle-exclamation"></i> Student is not eligible for this program. </div>
                        <div class="main-content-text"><div id="pdetails"></div></div>
                        <div id="papply" class="btnGroup d-flex" style="display: none"><a class="btn btn-primary" onclick="prograApply()">Apply Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="mainTitle">
    <span class="h4">Search and Apply</span>
</div>
<div class="studentProfilePage">
    <div class="panel">
        <div class="pHead">
            <?php if(!empty($student_details)){ ?>
                <div class="profileSection">
                    @php $firstcaracter = substr($student_details->first_name, 0, 1); @endphp
                    <div data-testid="student-profile-{{ $student_details->id }}-initials-avatar" class="thumb">{{ $firstcaracter }}</div>
                    <div class="profileInfo">
                        <span class="name"><?php echo ucfirst($student_details->first_name);?>  <?php echo ucfirst($student_details->middle_name);?> <?php echo ucfirst($student_details->last_name);?></span>
                        {{-- <input type="text" name="user_id" value="<?php echo $studentdetails[0]->user_id; ?>"> --}}
                        <span>{{ $student_details->id }} &nbsp; | &nbsp; <a href="mailto:{{ $student_details->email }}">{{ $student_details->email }}</a> &nbsp; | &nbsp; <a href="tel:{{ $student_details->phone_number }}">+91 {{ $student_details->phone_number }}</a></span>
                    </div>
                </div>
            <?php }?>
            <ul class="nav nav-tabs customTabs">
                <li class="nav-item"><a class="nav-link" href="/agent-student-profile/{{ $student_details->id }}">Profile</a></li>
                <li class="nav-item"><a class="nav-link active" href="/search-and-apply/{{ $student_details->id }}">Search and Apply</a></li>
                <li class="nav-item"><a class="nav-link" href="/student-profile-application/{{ $student_details->id }}">Applications (<?php if($applications_count !=''){echo $applications_count;}else{echo 0;}?>)</a></li>
                <li class="nav-item"><a class="nav-link" href="/student-payment/{{ $student_details->id }}">Payments</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="agentProgramView">
    <div class="filtersOptions">
        <div class="panel">
            <div class="pHead">
                <span class="h5">Eligibility</span>
            </div>
            <div class="pBody">
                @if (!empty($student_details))
                <form action="/student-eligibility-filter" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Select Student</label>

                        <input type="text" id="student" name="student"
                            value="{{ $student_details->first_name }}"
                            class="form-control">
                        <input type="hidden" name="student_filter" value="student_filter">
                        <input type="hidden" name="student_id"  id="student_id" value="{{$student_details->id}}">
                    </div>
                    <div class="form-group">
                        <label>Do you have a valid Study Permit / Visa?</label>
                        <select class="select2 form-control select2-multiple"
                            multiple="multiple" data-placeholder="Choose ..."
                            name="visa_permit" id="visa_permit">

                            @foreach ($getPermitVisa as $visa)
                                <option value="{{ $visa->id }}"
                                    {{ $student_details->study_permit_visa == $visa->id ? 'selected' : '' }}>
                                    {{ $visa->visa_title }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nationality</label>
                                <select class="form-control select2" name="nationality"
                                    id="nationality">
                                    <option value="">-- select one --</option>
        
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}"
                                            {{ $student_details->country == $country->id ? 'selected' : '' }}>
                                            {{ $country->country }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Education Country</label>
                                <select class="form-control select2"
                                    name="education_country" id="education_country">
                                    <option value="">-- select one --</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}"
                                            {{ $student_details->country_of_education == $country->id ? 'selected' : '' }}>
                                            {{ $country->country }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Education Level</label>
                                <select class="form-control select2" name="education_lavel"
                                    id="education_lavel">
                                    <option>Select...</option>
        
                                    @foreach ($getEducations as $getEducation)
                                        <option value="{{ $getEducation->id }}"
                                            {{ $student_details->highest_level_of_education == $getEducation->id ? 'selected' : '' }}>
                                            {{ $getEducation->title }}
                                        </option>
                                    @endforeach
        
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Grading Scheme</label>
                                <select class="form-control select2" name="grading_schem"
                                    id="grading_schem">
                                    <option>Select...</option>
        
        
                                    @foreach ($getGradingSchemes as $getGradingScheme)
                                        <option value="{{ $getGradingScheme->id }}"
                                            {{ $student_details->grading_scheme == $getGradingScheme->id ? 'selected' : '' }}>
                                            {{ $getGradingScheme->grad_name }}</option>
                                    @endforeach
        
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>English Exam Type</label>
                        <select class="form-control select2" name="exam_type"
                            id="exam_type">

                            @foreach ($getEnglishexamType as $type)
                                <option value={{ $type->id }}
                                    {{ $student_details->english_exam_type == "$type->id" ? 'selected' : '' }}>
                                    {{ $type->exam_name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <?php if(($student_details->english_exam_type== 3) || ($student_details->english_exam_type== 4)){ ?>
                    <div class="addisnalrow">
                    <?php }else{?>
                     <div class="addisnalrow" style="display:none">   
                      <?php } ?>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Reading</label>
                                <input type="text" name="reading"
                                    id="reading" class="form-control" value="{{$student_details->reading}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Listening</label>
                                <input type="text" name="listening"
                                    id="listening" class="form-control" value="{{$student_details->lisenting}}">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Speaking</label>
                                <input type="text" name="speaking"
                                    id="speaking" class="form-control" value="{{$student_details->speaking}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Writing</label>
                                <input type="text" name="writing"
                                    id="writing" class="form-control" value="{{$student_details->writing}}">
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="btnGroup">
                        <input type="submit" class="btn-primary btn" value="APPLY FILTERS">
                    </div>
                </form>
                @endif
            </div>
        </div>
        <div class="panel">
            <div class="pHead">
                <span class="h5">College Filters</span>
            </div>
            <div class="pBody">
                <form action="/agentcollagefilter" method="POST">
                    @csrf
                    <input type="hidden" name="student_filter" value="student_filter">
                    <input type="hidden" name="student_id"  id="student_id" value="{{$student_details->id}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Country </label>
                                <select class="select2 form-control select2-multiple"
                                    id="country" name="collage_country[]"
                                    multiple="multiple" data-placeholder="select ...">
                                    @foreach ($countries as $country)
                                        <option data-id="{{ $country->id }}"
                                            value="{{ $country->id }}">
                                            {{ $country->country }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Provinces / States</label>
                                <select class="select2 form-control select2-multiple"
                                    id="state" name="collage_state[]" multiple="multiple"
                                    data-placeholder="select ...">
                                    <option value="">No Option</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Campus City <i class="fa-solid fa-circle-question"
                                        id="question" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title=""
                                        data-bs-original-title="By selecting this checkbox, only programs that are from schools participating in the Post Graduation Work Permit program (in Canada), Optional Practical Training program (in USA), Temporary Graduate Visa program (in Australia), Post-Study Work Visa program (in UK), and Stay Back Visa (in Ireland) will be shown."></i></label>
                                <select class="form-control select2" multiple="multiple"
                                    id="city" name="campus_city_name[]"
                                    data-placeholder="select ...">
                                    <option value="">No Option</option>
        
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Collage</label>
                                <select class="form-control select2" name="college[]"
                                    multiple="multiple" data-placeholder="select ...">
                                    <option value="">No Option</option>
                                    @if (!empty($colleges))
                                        @foreach ($colleges as $college)
                                            <option value="{{ $college->id }}">
                                                {{ $college->college_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group checkbox">
                        <input class="form-check-input" type="checkbox"
                            value="Yes" name="work_permit_status"
                            id="PostCheckDefault">
                        <label class="form-check-label" for="PostCheckDefault">
                            Post-Graduation Work Permit Available
                        </label>
                        <i class="fa-solid fa-circle-question" id="question"
                            data-bs-toggle="tooltip" data-bs-placement="top"
                            title=""
                            data-bs-original-title="Turning this switch ON means you will only see programs that you will beeligible to apply for them without taking any prerequisite english classes.Keeping this filter OFF means some results shown will require you to takeEnglish classes before becoming eligible to apply."></i>
                    </div>
                    <div class="form-group checkbox">
                        <div class="row">
                            <div class="col">
                                <input class="form-check-input"name="univercity"
                                    type="checkbox" value="University"
                                    id="UniversityCheckDefault">
                                <label class="form-check-label"
                                    for="UniversityCheckDefault">
                                    University
                                </label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox"
                                    value="College" name="collage"
                                    id="CollegeCheckDefault">
                                <label class="form-check-label"
                                    for="CollegeCheckDefault">
                                    College
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input class="form-check-input" type="checkbox"
                                    name="english_institute" value="English Institute"
                                    id="englishinstituteCheckDefault">
                                <label class="form-check-label"
                                    for="englishinstituteCheckDefault">
                                    English Institute
                                </label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="checkbox"
                                    value="High School" name="high_school"
                                    id="highschoolCheckDefault">
                                <label class="form-check-label"
                                    for="highschoolCheckDefault">
                                    High School
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="btnGroup">
                        <input type="submit" class="btn-primary btn" value="APPLY FILTERS">
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> College</label>
                                <select class="form-control select2" name="collage_name[]"
                                    multiple="multiple" data-placeholder="select ...">
                                    <option value="">No Option</option>
                                    @if (!empty($colleges))
                                        @foreach ($colleges as $college)
                                            <option value="{{ $college->id }}">
                                                {{ $college->college_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Intakes </label>
                                <select class="select2 form-control select2-multiple"
                                    name="inakes_date[]" multiple="multiple"
                                    data-placeholder="select ...">
        
                                    <?php print_r($inakesdate); ?>
                                    @if (!empty($inakesdate))
                                        @foreach ($inakesdate as $date)
                                            <option value="{{ $date->earliest_intake_date }}">
                                                {{ date('d-F-Y', strtotime($date->earliest_intake_date)) }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Post-Secondary Discipline</label>
                        <select class="select2 form-control select2-multiple"
                            name="post_discipline[]" multiple="multiple"
                            data-placeholder="select ...">
                            @if (!empty($postdisciplines))
                                @foreach ($postdisciplines as $disc)
                                    <option value="{{ $disc->id }}">
                                        {{ $disc->title }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Post-Secondary Sub-Categories</label>
                        <select class="select2 form-control select2-multiple"
                            name="sub_categories[]" multiple="multiple"
                            data-placeholder="select ...">
                            @if (!empty($subcategories))
                                @foreach ($subcategories as $sub_cat)
                                    <option value="{{ $sub_cat->id }}">
                                        {{ $sub_cat->sub_cat_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tuition Fee</label>
                        <input type="text" class="float-end" name="tuition_free" id="range_04">
                    </div>
                    <div class="form-group">
                        <label>Application Fee</label>
                        <input type="text" class="float-end" name="applocation_free" id="range_05">
                    </div>
                    <div class="form-group checkbox">
                        <input class="form-check-input" type="checkbox" value="Yes" name="living_cost" id="TuitionCheckDefault">
                        <label class="form-check-label" for="TuitionCheckDefault">Include living costs</label>
                    </div>
                    <div class="btnGroup">
                        <input type="submit" class="btn-primary btn" value="APPLY FILTERS">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="agentProgramData">
        <div class="panel">
            <div class="pHead">
                <div class="control">
                    <span class="search"><input type="text" class="" placeholder="Search the knowledge base"><i class="fa fa-search"></i></span>
                    <span class="search"><input type="text" class="" placeholder="Search the knowledge base"><i class="fa fa-search"></i></span>
                    <button class="btn btn-primary" type="button">Search</button>
                </div>
                <form action="agentProgram" method="GET" class="control">
                    @csrf
                    <div class="form-group">
                        <select class="form-select" id="sorting" name="sorting"
                            aria-label="Default select example">
                            <option value="1">Relevance</option>
                            <option value="college_asc">College Neme(A-z)</option>
                            <option value="college_desc">College Neme(Z-A)</option>
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
                    <li class="nav-item" role="presentation"><button class="nav-link active" id="programsTab" data-bs-toggle="tab" data-bs-target="#programsTabPane">Programs ( @if ($collages != 'not_found') {{ $courseTotal }} @else 0 @endif)</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="collegesTab" data-bs-toggle="tab" data-bs-target="#collegesTabPane">Colleges (@if ($collages != 'not_found') {{ count($collages) }} @else 0 @endif)</button></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="programsTabPane" role="tabpanel" tabindex="0">
                        <?php if(!empty($student_details)){ ?> @if ($collages != 'not_found') @foreach ($collages as $list)
                            <div class="agentProgramsList">
                                <a class="agentProgramsListHead" href="/agent-college-details/{{ $list->id }}">
                                    <span class="thumb"><img width="42" height="42" src="{{ url('/images/' . $list->college_logo) }}" alt="Logo" /></span>
                                    <strong>{{ $list->college_name }}</strong>{{ $list->college_address }}, {{ $list->college_country }}
                                </a>
                                @foreach ($list->courses as $p)
                                <a class="agentProgramsListTitle" href="/agent-program-details/{{ $p->id }}">{{ $p->programs_name }}</a>
                                <div class="agentProgramsListView">
                                    <div class="programsListView">
                                        <span class="thumb"><img src="../assetsAgent/img/doller.png"></span>
                                        <span class="title"><strong>TUITION FEE</strong>@if ($p->tuition_fee_min != '') {{ number_format($p->tuition_fee_min, 2) }} - @else NA @endif @if ($p->tuition_fee_max != '') {{ number_format($p->tuition_fee_max, 2) }} @endif</span>
                                    </div>
                                    <div class="programsListView">
                                        <span class="thumb"><img src="../assetsAgent/img/application.png"></span>
                                        <span class="title"><strong>APPLICATION FEE</strong>@if ($p->application_fee_min != '') {{ number_format($p->application_fee_min, 2) }} - @else NA @endif @if ($p->application_fee_max != '') {{ number_format($p->application_fee_max, 2) }} @endif</span>
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
                            <div class="alert alert-danger"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></strong> Requesting data not found. </div>
                        @endif
                        <?php }else{?>
                        <div class="alert alert-danger"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></strong> Student Not Found. </div>
                        <?php }?>

                    </div>
                    <div class="tab-pane fade" id="collegesTabPane" role="tabpanel" aria-labelledby="school-tab">
                        <div class="row mt-3">
                            @if ($collages != 'not_found')
                                @foreach ($collages as $collage)
                                    <div class="col-md-6">
                                        <div class="school-tabs-section">
                                            <div class="school-tabs-content">
                                                <img width="68" height="68" src="{{ url('/images/' . $collage->college_logo) }}" alt="Logo" />
                                                <div class="school-tabs-main">
                                                    <a href="/agent-college-details/{{ $collage->id }}">{{ $collage->college_name }}</a>
                                                    <h4> {{ $collage->college_address }}, {{ $collage->college_country }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            {{ $collages->links() }}
                            @else
                                <div class="alert alert-danger"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></strong> Requesting data not found. </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
