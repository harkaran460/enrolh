@extends('layouts.student_app')
@section('content')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<div class="page-content program">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group d-flex justify-content-center">
                    <input type="text" class="w-25 border py-2 border-secondary rounded" placeholder="Search the knowledge base">
                    <input type="text" class="w-25 border py-2 border-secondary rounded" placeholder="Search the knowledge base">
                    <button class="btn btn-primary" type="button">Search</button>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-3">
                <div class="">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header filtertip" id="eligibilityheadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#eligibility" aria-expanded="true" aria-controls="eligibility">
                                    Eligibility
                                </button>
                            </h2>
                            <div id="eligibility" class="accordion-collapse collapse show" aria-labelledby="eligibilityheadingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form action="eligibilityfilter" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Do you have a valid Study Permit / Visa?</label>
                                            <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." name="visa_permit[]">
                                                <option value="I dont have this">I don't have this</option>
                                                <!--<option value="USA F1 Visa">USA F1 Visa</option>-->
                                                <option value="Canadian Study Permit or Visitor Visa">Canadian Study Permit or Visitor Visa</option>
                                                <option value="UK Student Visa (Tier 4) or Short Term Study Visa">UK Student Visa (Tier 4) or Short Term Study Visa </option>
                                                <option value="Australian Student Visa">Australian Student Visa</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nationality</label>
                                            <select class="form-control select2" name="nationality">
                                                <option value="">-- select one --</option>
                                                @foreach ($countries as $country )
                                                <option value="{{$country->country}}">{{$country->country}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Education Country</label>
                                            <select class="form-control select2" name="education_country">
                                                <option value="">-- select one --</option>
                                                @foreach ($countries as $country )
                                                <option value="{{$country->country}}">{{$country->country}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Education Level</label>
                                            <select class="form-control select2" name="education_lavel">
                                                <option>Select...</option>
                                                <option value="Grade 1">Grade 1</option>
                                                <option value="Grade 2">Grade 2</option>
                                                <option value="Grade 3">Grade 3</option>
                                                <option value="Grade 4">Grade 4</option>
                                                <option value="Grade 5">Grade 5</option>
                                                <option value="Grade 6">Grade 6</option>
                                                <option value="Grade 7">Grade 7</option>
                                                <option value="Grade 8">Grade 8</option>
                                                <option value="" disabled> SECONDARY </option>
                                                <option value="Grade 9">Grade 9</option>
                                                <option value="Grade 10">Grade 10</option>
                                                <!--<option value="Grade 11">Grade 11</option>-->
                                                <!--<option value="Grade 12">Grade 12 / High School</option>-->
                                                <!--<option value="" disabled> UNDERGRADUATE </option>-->
                                                <!--<option value="1 Year Post Secondary Certificate">1 Year Post Secondary Certificate</option>-->
                                                <!--<option value="2 Year Post Secondary Certificate">2 Year Post Secondary Certificate</option>-->
                                                <!--<option value="3 Year Post Secondary Certificate">3 Year Post Secondary Certificate</option>-->
                                                <!--<option value="4 Year Post Secondary Certificate">4 Year Post Secondary Certificate</option>-->
                                                <!--<option value="5 Year Post Secondary Certificate">5 Year Post Secondary Certificate</option>-->

                                                <!--<option value="" disabled> POSTGRADUATE </option>-->
                                                <!--<option value="Postgraduate Certificate/Diploma">Postgraduate Certificate/Diploma</option>-->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Grading Scheme</label>
                                            <select class="form-control select2" name="grading_schem">
                                                <option>Select...</option>
                                                <option value="Grade: A+F">Grade: A+F</option>
                                                <option value="Scale: 0+10">Scale: 0+10</option>
                                                <!--<option value="Secound Scale 0-100">Secound Scale 0-100</option>-->
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>English Exam Type</label>
                                            <select class="form-control select2" name="exam_type">
                                                <option value="I don't have this">I don't have this</option>
                                                <option value="I will provide this later">I will provide this later</option>
                                                <option value="TOEFL">TOEFL</option>
                                                <option value="IELTS">IELTS</option>
                                                <option value="Duolingo English Test">Duolingo English Test</option>
                                                <option value="Home Edition">Home Edition</option>
                                                <option value="PTE online">PTE online </option>
                                                <option value="CAEL as well">CAEL as well</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group mt-3">
                                            <input type="submit" class="btn-primary" value="APPLY FILTERS">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header filtertip" id="schoolfiltersheadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#school-filters" aria-expanded="true" aria-controls="school-filters">
                                    College Filters
                                </button>
                            </h2>
                            <div id="school-filters" class="accordion-collapse collapse show" aria-labelledby="schoolfiltersheadingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form action="collagefilter" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label> Country </label>
                                            <select class="select2 form-control select2-multiple " id="country" name ="collage_country[]" multiple="multiple" data-placeholder="select ...">
                                                <option value="">-- select one --</option>
                                                @foreach ($countries as $country )
                                                <option data-id="{{$country->id}}" value="{{$country->country}}">{{$country->country}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group checkbox">
                                            <input class="form-check-input" type="checkbox" value="Yes" id="PostCheckDefault" name ="work_permit_status">
                                            <label class="form-check-label" for="PostCheckDefault">
                                                Post-Graduation Work Permit Available
                                            </label>
                                            <!--<i class="fa-solid fa-circle-question" id="question" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Turning this switch ON means you will only see programs that you will beeligible to apply for them without taking any prerequisite english classes.Keeping this filter OFF means some results shown will require you to takeEnglish classes before becoming eligible to apply."></i>-->
                                        </div>
                                        <div class="form-group">
                                            <label>Provinces / States</label>
                                            <select class="select2 form-control select2-multiple state" multiple="multiple" name ="collage_state[]" data-placeholder="select ...">
                                                <option value="">No Option</option>
                                                @foreach ($states as $state )
                                                <option value="{{$state->state}}">{{$state->state}}</option>
                                                @endforeach  
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Campus City <i class="fa-solid fa-circle-question city" id="question" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="By selecting this checkbox, only programs that are from schools participating in the Post Graduation Work Permit program (in Canada), Optional Practical Training program (in USA), Temporary Graduate Visa program (in Australia), Post-Study Work Visa program (in UK), and Stay Back Visa (in Ireland) will be shown."></i></label>
                                            <select class="form-control select2" multiple="multiple" name="campus_city_name[]" data-placeholder="select ...">
                                                <option value="">No Option</option>
                                                @foreach ($cities as $city )
                                                <option value="{{$city->city}}">{{$city->city}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group checkbox">
                                            <div class="row">
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="University" name ="univercity" id="UniversityCheckDefault">
                                                    <label class="form-check-label" for="UniversityCheckDefault">
                                                        University
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="College" name ="collage" id="CollegeCheckDefault">
                                                    <label class="form-check-label" for="CollegeCheckDefault">
                                                        College
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="High School" name ="high_school" id="highschoolCheckDefault">
                                                    <label class="form-check-label" for="highschoolCheckDefault">
                                                        High School
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Collage</label>
                                            <select class="form-control select2" multiple="multiple" name="collage_name[]" data-placeholder="select ...">
                                                <option value="">No Option</option>
                                                @foreach ($colleges as $college )
                                                <option value="{{$college->college_name}}">{{$college->college_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="submit" class="btn-primary" value="APPLY FILTERS">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mt-md-4">
                            <h2 class="accordion-header filtertip" id="programfiltersheadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#program-filters" aria-expanded="false" aria-controls="collapseTwo">
                                    Program Filters
                                </button>
                            </h2>
                            <div id="program-filters" class="accordion-collapse collapse show" aria-labelledby="programfiltersheadingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form action="programfilter" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label> Colleges</label>
                                            <select class="form-control select2" multiple="multiple" name="college[]" data-placeholder="select ...">
                                                <option value="">No Option</option>
                                                @if(!empty($colleges))
                                                @foreach ($colleges as $college)
                                                <option value="{{$college->id}}">{{$college->college_name}}</option>   
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Intakes</label>
                                            <select class="select2 form-control select2-multiple" multiple="multiple" name="inakes_date[]" data-placeholder="select ...">
                                                <option value="">-- select one --</option>
                                                @if(!empty($inakes_date))
                                                @foreach ($inakes_date as $date )
                                            
                                               <option value="{{$date->earliest_intake_date}}">{{date('d-F-Y', strtotime($date->earliest_intake_date))}}</option>   
                                               @endforeach
                                               @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Post-Secondary Discipline</label>
                                            <select class="select2 form-control select2-multiple" name="post_discipline[]" multiple="multiple" data-placeholder="select ...">
                                                <option value="">-- select one --</option>
                                                @if(!empty($post_discipline))
                                                @foreach ($post_discipline as $disc )
                                                <option value="{{$disc->id}}">{{$disc->title}}</option>   
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Post-Secondary Sub-Categories</label>
                                            <select class="select2 form-control select2-multiple" name="sub_categories[]" multiple="multiple" data-placeholder="select ...">
                                                <option value="">-- select one --</option>
                                                @if(!empty($sub_categories))
                                                @foreach ($sub_categories as $sub_cat )
                                                <option value="{{$sub_cat->id}}">{{$sub_cat->sub_cat_name}}</option>   
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <!--<div class="form-group checkbox">
                                            <input class="form-check-input" type="checkbox" value="Yes" name="commissions" id="CommissionsCheckDefault">
                                            <label class="form-check-label" for="CommissionsCheckDefault">
                                                Show Commissions
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <p>All amounts are listed in the currency charged by the school. For best results, please specify a country of the school.</p>
                                        </div>-->
                                        <div class="form-group checkbox">
                                            <input class="form-check-input" type="checkbox" value="Yes" name="living_cost" id="TuitionCheckDefault">
                                            <label class="form-check-label" for="TuitionCheckDefault">
                                                Include living costs
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Tuition Fee</label>
                                            <input type="text" name="tuition_free" id="range_04">
                                        </div>
                                        <div class="form-group">
                                            <label>Application Fee</label>
                                            <input type="text" name="applocation_free" id="range_05">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="form-group mt-3">
                                                <input type="submit" class="btn-primary" value="APPLY FILTERS">
                                            </div>
                                            <!--<div class="row">
                                                <div class="col-6">
                                                    <input type="submit" class="btn btn-danger px-3" value="Clear Filters">
                                                    <button type="button" class="btn btn-danger px-4">Clear Filters</button>
                                                </div>
                                                <div class="col-6">
                                                    <input type="submit" class="btn btn-primary px-4" value="Apply Filters">
                                                    <button type="button" class="btn btn-primary px-4 float-end">Apply Filters</button>
                                                </div>
                                            </div>-->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="program-list">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            
                          
                            <button class="nav-link active" id="programs-tab" data-bs-toggle="pill" data-bs-target="#programs" type="button" role="tab" aria-controls="programs" aria-selected="false">Programs ( @if ($collages !='not_found') {{$courseTotal}}@else 0 @endif) </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="school-tab" data-bs-toggle="pill" data-bs-target="#school" type="button" role="tab" aria-controls="school" aria-selected="true">Collages ( @if ($collages !='not_found') {{count($collages)}}@else 0 @endif) </button>
                        </li>
                    </ul>
                    <ul class="d-flex float-end select-bar-program">
                        <li>
                            <form action="">
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">Relevance</option>
                                        <option value="2">School Rank</option>
                                        <option value="3">Commission</option>
                                        <option value="4">Tution</option>
                                        <option value="5">Tution</option>
                                        <option value="6">Application Fee</option>
                                        <option value="7">Application Fee</option>
                                    </select>
                                </div>
                            </form>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade active show" id="programs" role="tabpanel" aria-labelledby="programs-tab">
                            <div class="css-ncpgjp">
                                <span>Enter a search to view more programs</span>
                                <span class="css-pyrmrv">
                                    <button class="view-school">View all schools</button>
                                    <button class="view-programs">View all programs</button>
                                </span>
                            </div>
                         @if($collages !='not_found')
                      
                            @foreach ($collages as $list)

                            <div class="main-programs-content">
                                <div class="main-programs-img">
                                    <a href="/college-details/{{$list->id}}")>
                                        <img width="48" height="48" src="{{url('/images/'.$list->college_logo)}}" alt="Logo"/>
                                    </a>
                                    <div>
                                        <div>
                                            <a href="/college-details/{{$list->id}}" class="css-6g7jag">{{$list->college_name}}</a>
                                           <!-- <a target="_blank" href="college-details.php">{{$list->college_name}}</a>-->
                                        </div>
                                        <div class="css-6g7jag">
                                            {{$list->college_address}}, {{$list->college_country}}
                                        </div>
                                    </div>
                                </div>

                                @foreach ($list->courses as $p)
                               
                            
                                <div class="main-programs-img-content">
                                    <div class="">
                                        <div>
                                            <a href="{{ URL::to('programs-college') }}/{{ $p->id}}" class="font-size-24 text-capitalize">{{$p->programs_name}}</a>
                                        </div>
                                        <div class="main-programs-list">
                                            <div class="css-1kos2q0">
                                                <span>TUITION FEE</span>
                                                <span class="money css-6xix1i">
                                                    @if($p->tuition_fee_min !='') 
                                                    
                                                    {{number_format($p->tuition_fee_min,2)}}
                                                     -
                                                     @else
                                                     NA 
                                                     @endif
                                                     @if($p->tuition_fee_max !='') 
                                                     {{number_format($p->tuition_fee_max,2)}}
                                                     
                                                     @endif
                                                    </span>
                                            </div>
                                            <div class="css-1kos2q0 ps-5">
                                                  <span>APPLICATION FEE</span>
                                                <span class="money css-6xix1i">
                                                    @if($p->application_fee_min !='')
                                                    {{number_format($p->application_fee_min,2)}}
                                                     -
                                                     @else
                                                     NA 
                                                     @endif
                                                     @if($p->application_fee_max !='')
                                                     {{number_format($p->application_fee_max,2)}}
                                                     
                                                     @endif


                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <form action="/application" method="post">
                                                @csrf
                                                <input type="hidden" name="program_id" id="program_id" value="{{$p->id}}">
                                                <button type="submit" style="color:white;" class="btn btn-primary">Start Application</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @break
                                @endforeach
                               

                                <div class="text-center">
                                    <a href="javascript:;" class="see-more"> See {{count($list->courses)}} More Programs <i class="fa fa-chevron-down"></i></a>
                                    <hr />
                                    <div class="main-slide">
                                        @foreach ($list->courses as $plist)
                                        <div class="main-programs-img-content">
                                            <div class="text-start">
                                                <div>
                                                    <a href="{{ URL::to('programs-college') }}/{{ $plist->id}}" class="font-size-24 text-capitalize">{{$plist->programs_name}}</a>
                                                </div>
                                                <div class="main-programs-list">
                                                    <div class="css-1kos2q0">
                                                        <span>TUITION FEE</span>
                                                        <span class="money css-6xix1i">
                                                            @if($plist->tuition_fee_min !='')
                                                            {{number_format($plist->tuition_fee_min,2)}}
                                                             -
                                                             @else
                                                             NA 
                                                             @endif
                                                             @if($plist->tuition_fee_max !='')
                                                             {{number_format($plist->tuition_fee_max,2)}}
                                                             
                                                             @endif
                                                        </span>
                                                    </div>
                                                    <div class="css-1kos2q0 ps-5">
                                                        <span>APPLICATION FEE</span>
                                                        <span class="money css-6xix1i">
                                                            @if($plist->application_fee_min !='')
                                                            {{number_format($plist->application_fee_min,2)}}
                                                             -
                                                             @else
                                                             NA 
                                                             @endif
                                                             @if($plist->application_fee_max !='')
                                                             {{number_format($plist->application_fee_max,2)}}
                                                             
                                                             @endif


                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2" style="text-align: start;">
                                                    <form action="/application" method="post">
                                                        @csrf
                                                        <input type="hidden" name="program_id" id="program_id" value="{{$plist->id}}">
                                                        <button type="submit" style="color:white;" class="btn btn-primary">Start Application</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                                        <a href="javascript:;" class="less-more"> See Less <i class="fa fa-chevron-up"></i></a>
                                        <hr />
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
                            <!-- Modal Select Student -->
                            <div class="modal fade" id="select-student" tabindex="-1" aria-labelledby="selectstudentLabel" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title text-center m-auto" id="selectstudentLabel">Check Student Eligibility</h2>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>Select a student to check their eligibility.</h5>
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <label> Select</label>
                                                    <span class="fas fa-search"></span>
                                                    <select name="" class="form-select" aria-label="Default select example">
                                                        <option select>Search students name, email, or ID</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="school" role="tabpanel" aria-labelledby="school-tab">
                            <div class="row">
                                @if($collages !='not_found')
                                @foreach ($collages as $collage )
                                                             
                                <div class="col-md-6">
                                    <div class="school-tabs-section">
                                        <div class="school-tabs-content">
                                            <img width="68" height="68" src="{{url('/images/'.$collage->college_logo)}}" alt="Logo"/>
                                            <div class="school-tabs-main">
                                               
                                                <a href="{{ URL::to('college-details') }}/{{$collage->id}}">{{$collage->college_name}}</a>
                                                <h4>  {{$collage->college_address}}, {{$collage->college_country}}</h4>
                                            </div>
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
</div>


<div class="modal fade" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 600px;">
        <div class="modal-content" id="new-students">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body " style="height: 600px; overflow-Y: scroll;">
                <p>Please provide a legitimate email address for your student that is actively monitored by them. Their country is required to forward applications to our partner schools. Note: ApplyBoard will not communicate with your student via email or other methods.</p>

                <div class="mb-3">
                    <label class="form-label">CONTACT INFORMATION</label>
                    <input type="email" class="form-control mb-3" placeholder="Email">
                    <input type="tel" class="form-control" placeholder="Phone Number">
                </div>
                <div class="mb-3">
                    <label class="form-label">PERSONAL INFORMATION</label>
                    <input type="text" class="form-control mb-3" placeholder="Given Name">
                    <input type="text" class="form-control mb-3" placeholder="Middle Name">
                    <input type="text" class="form-control mb-3" placeholder="Family Name">
                    <input type="date" class="form-control mb-3" placeholder="Birth Date">
                    <select class="form-select " aria-label="Default select example">
                        <option selected>Country of Citizenship</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3 gndr-ads">
                    <label class="form-label">Gender</label>
                    <div class="d-flex flex-row sg">
                        <div class="w-100 me-3 d-flex align-items-center">
                            <input class="mt-1 d-none" type="radio" name="select-gender" id="radiomale" checked>
                            <label class="w-100 pt-3 ps-2" for="radiomale">Male</label>
                        </div>
                        <div class="w-100 d-flex align-items-center">
                            <input class="mt-1 d-none" type="radio" name="select-gender" id="radiofemale">
                            <label class="w-100 pt-3 ps-2" for="radiofemale">Female</label>
                        </div>

                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">LEAD MANAGEMENT</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Status</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Referral Source</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Country of Interest</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Services of Interest</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        I confirm that I have received express written consent from the student whom I am creating this profile for and I can provide proof of their consent upon request. To learn more please refer to the <a href="#">Personal Data Consent</a> article.
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn px-4" style="background-color: #FFE5E4;" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary px-4 bg float-end">Create Student</button>
            </div>
        </div>
    </div>
</div>
<style>
    .w-5.h-5 {
      width: 2%;
    }
    
    
    </style>

<script>
  $("#country").select2();

$('#country').on("change", function(e) { 
  var val = $(this).attr("#data-id");
  alert(val);
});    
</script>

    
@endsection