@extends('layouts.agent_app')
@section('content')
 
    <div class="page-content college-details">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="main-programs-content"> 
                        <div class="main-programs-img">
                            <h2><b>  {{ $programdetails[0]->programs_name }} </b></h2>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row mt-4 gallery-collage">
                @if (isset($gallery))
                    @foreach ($gallery as $img)
                        <div class="col-md-5 gallery-list">
                            <a href="{{ url($img->url) }}">
                                <img src="{{ url($img->url) }}" alt="{{ $img->name }}" class="img-fluid">
                            </a>
                        </div>
                    @break
                @endforeach
                @if (count($gallery) > 1)
                <div class="col-md-5 gallery-list">
                    <div class="row">
                        @foreach ($gallery as $img)
                        <div class="col-md-6"> 
                            <a href="{{ url($img->url) }}">
                                <img src="{{ url($img->url) }}" alt="{{ $img->name }}" class="img-fluid">
                            </a>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                @endif
                @endif
                <div class="col-md-12 gallery-list">
                    <div class="view-more">
                        <a class="btn clr btn-primary rounded-pill px-3" href="assets/img/collage-photo.png">
                            View Photos
                        </a> 
                    </div>
                </div> 
            </div>
        </div>

        <div class="container-fluid nav-college-list mt-5">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav-menu">
                        <li class="active-menu"><a href="#about_us"> Overview </a></li>
                        <li><a href="#admission-requirements"> Admission Requirements </a></li>
                        <li><a href="#similar-programs"> Similar Programs </a></li>
                    </ul>
                </div> 
            </div>
            <div class="row m-60" id="about_us">
                <div class="col-md-8">
                    <div class="main-college-about">
                        <div class="home-icon ms-1">
                            <i class="fa-solid fa-house-user"></i>
                            <h3 class="mt-1"> <a href="#">Program Summary</a></h3>
                        </div>
                        <div class="bg-white p-3 mt-3">
                            <?php echo $programdetails[0]->program_summary; ?>
                        </div> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2">
                        <button class="btn clr btn-primary"> Check Student Eligibility </button>
                    </div>
                    <div class="top-disciplines mt-4">
                        <h4 class="ms-1 pb-23">Top Disciplines</h4>
                        <div class="bg-white p-3">

                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-certificate"></i>
                                </div>
                                <div class="duration-content">
                                    <p><b> 1-Year Post-Secondary Certificate</b></p>
                                    <p><span> {{ $programdetails[0]->first_year_post_secondary_certificate }} </span></p>
                                    <p><b> No data available</b></p>
                                </div>
                            </div>
                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="duration-content">
                                    <p><b> 1 year T-Level program including a work placement </b></p>
                                    @if($programdetails[0]->first_year_t_level_program_including_a_work_placement !='')
                                    <p><span>{{ $programdetails[0]->first_year_t_level_program_including_a_work_placement }}</span>
                                    </p>
                                    @else
                                    <p><b> No data available</b></p>
                                    @endif
                                </div>
                            </div>
                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-landmark-dome"></i>
                                </div>
                                <div class="duration-content">
                                    @if($programdetails[0]->include_living_costs !='')
                                    <p><b> {{ $programdetails[0]->include_living_costs }}/ Year </b></p>
                                    @else
                                    <p><b> No data available</b></p>
                                    @endif
                                    <p><span> Cost of Living </span></p>
                                </div>
                            </div>
                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-sack-dollar"></i>
                                </div>
                                <div class="duration-content">
                                    @if($programdetails[0]->tuition_fee_max !='')
                                    <p><b> {{ $programdetails[0]->tuition_fee_max }} / Year </b></p>
                                    @else
                                    <p><b> No data available</b></p>
                                    @endif
                                    <p><span> Tuition </span></p>
                                </div>
                            </div>
                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-dollar-sign"></i>
                                </div>
                                <div class="duration-content">
                                    @if($programdetails[0]->application_fee_max !='')
                                    <p><b> {{ $programdetails[0]->application_fee_max }} </b></p>
                                    @else
                                    <p><b> No data available</b></p>
                                    @endif
                                    <p><span> Application Fee </span></p>
                                </div>
                            </div>
    
                        </div>
                    </div> 
                </div>
            </div>

            <div class="row mt-5" id="admission-requirements">
                <div class="col-md-8">
                    <div class="main-features-about">
                        <div class="home-icon ms-3">
                            <i class="fa-solid fa-chart-simple"></i>
                            <h3 class="mt-2">Admission Requirements</h3>
                        </div>
                        <div class="p-3 mt-3">
                            <div class="admission-requirements">
                                <h2 class="ms-1">Academic Background</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <p>Minimum Level of Education Completed</p>
                                                @if($programdetails[0]->minimum_level_of_education_completed !='')
                                                <h4>{{ $programdetails[0]->minimum_level_of_education_completed }} </h4>
                                                @else
                                                <p><b> No data available</b></p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <p>Minimum GPA</p>
                                                @if($programdetails[0]->minimum_gpa !='')
                                                <h4>{{ $programdetails[0]->minimum_gpa }}</h4>
                                                @else
                                                <p><b> No data available</b></p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(!empty($score[0]->id))  
                        <div class="p-3 mt-2">
                            <div class="admission-requirements minimum-language">
                                <h2 class="ms-1">Minimum Language Test Scores</h2>
                                <div class="row">
                                    @foreach ($score as $score)
                                        
                                    
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="accordion" id="this-program-requires">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header" id="minimum-language-one {{$score->id}}">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#minimum-language-featuresone"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseOne">
                                                                {{$score->test_scores_name}}
                                                            </button>
                                                        </div>
                                                        <hr>
                                                        <h5> {{$score->test_scores_number}}</h5>
                                                        <div id="minimum-language-featuresone"
                                                            class="accordion-collapse collapse show"
                                                            aria-labelledby="minimum-language-one">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li>
                                                                        <h5><b> Reading</b></h5>
                                                                        <h5><b> {{$score->reading}}</b></h5>
                                                                    </li>
                                                                    <li>
                                                                        <h5><b> Writing</b></h5>
                                                                        <h5><b> {{$score->writing}}</b></h5>
                                                                    </li>
                                                                    <li>
                                                                        <h5><b> Listening</b></h5>
                                                                        <h5><b> {{$score->listening}}</b></h5>
                                                                    </li>
                                                                    <li>
                                                                        <h5><b> Speaking</b></h5>
                                                                        <h5><b> {{$score->speaking}}</b></h5>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-md-6">
    
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(empty($profile_updated))
                      
                        
                        
                         @endif
                    </div> 
                </div>
                <div class="col-md-4"> 
                    <div class="program-intakes mb-md-3">
                        <h4 class="ms-1 pb-3">Program Intakes</h4>
                        <div class="bg-white p-3">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                @if ($programdetails[0]->status == 'Likely Open')
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="program-intakes-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#program-intakes-One"
                                                aria-expanded="false" aria-controls="program-intakes-One">
                                                <span class="green"> Open </span>
                                            </button>
                                            <p>{{date('M Y', strtotime($programdetails[0]->earliest_intake_date))}}</p>
                                        </div>
                                        <div id="program-intakes-One" class="accordion-collapse collapse"
                                            aria-labelledby="program-intakes-headingOne">
                                            <div class="accordion-body">
                                                <div class="program-itakes-detalis">
                                                    <p> Open date <i class="fa-solid fa-circle-info"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title=""
                                                            data-bs-original-title="The school has started to accept applications for this intake on {{$programdetails[0]->open_date}}."></i>
                                                    </p>
                                                    <p class="float-end"> {{$programdetails[0]->open_date}} </p>
                                                </div>
                                                <div class="program-itakes-detalis mt-3">
                                                    <p> Submission deadline  </p>
                                                    @if($programdetails[0]->open_date !='')
                                                    <p class="float-end"> {{$programdetails[0]->open_date}} </p>
                                                    @else
                                                    <p class="float-end"> No data available </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="program-intakes-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#program-intakes-Two"
                                                aria-expanded="false" aria-controls="program-intakes-Two">
                                                <span class="yellow"> Likely open </span>
                                            </button>
                                            <p>{{date('M Y', strtotime($programdetails[0]->earliest_intake_date))}}</p>
                                        </div>
                                        <div id="program-intakes-Two" class="accordion-collapse collapse"
                                            aria-labelledby="program-intakes-headingTwo">
                                            <div class="accordion-body">
                                                <div class="program-itakes-detalis">
                                                    <p> Open date <i class="fa-solid fa-circle-info"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title=""
                                                            data-bs-original-title="The date in which the school starts to accept applications for this intake is still unknown."></i>
                                                    </p>
                                                    <p class="float-end"> {{$programdetails[0]->open_date}} </p>
                                                </div>
                                                <div class="program-itakes-detalis mt-3">
                                                    <p> Submission deadline </p>
                                                    @if($programdetails[0]->submission_deadline !='')
                                                    <p class="float-end"> {{$programdetails[0]->submission_deadline}} </p>
                                                    @else
                                                    <p class="float-end"> No data available </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
    
    
    
                            </div>
                        </div>
                    </div>
                    
                    <div class="commissions">
                        <h4 class="ms-1 pb-3">Commissions</h4>
                        <div class="bg-white p-3">
                            <div class="accordion" id="commissionsaccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="commissions-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#commissions-One" aria-expanded="false"
                                            aria-controls="program-intakes-One">
                                            <span> COMMISSION BREAKDOWN </span>
                                        </button>
                                    </h2>
                                    <div id="commissions-One" class="accordion-collapse collapse show"
                                        aria-labelledby="commissions-headingOne" data-bs-parent="#commissionsaccordion">
                                        <div class="accordion-body">
                                            <p>{{ $programdetails[0]->commission_break_down }}</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="commissions-headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#commissions-Two" aria-expanded="false"
                                            aria-controls="program-intakes-Two">
                                            <span> DISCLAIMER </span>
                                        </button>
                                    </h2>
                                    <div id="commissions-Two" class="accordion-collapse collapse"
                                        aria-labelledby="commissions-headingTwo" data-bs-parent="#commissionsaccordion">
                                        <div class="accordion-body">
                                            <p>{{ $programdetails[0]->disclaimer }}</p>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <div class="row bg-white p-3 mt-3 m-size"> 
                            <div class="accordion" id="this-program-requires">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-featureheadingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-featuresOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                            This program requires valid language test results
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-featuresOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-featureheadingOne">
                                        <div class="accordion-body">
                                            <p>Applicants interested in applying for direct admission, but are yet to complete an acceptable language test, can do so, but must provide valid results before receiving a final offer letter.</p>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                         </div>

            <div class="row mt-5" id="similar-programs">
                @if(!empty($similar_programs))
                <div class="home-icon ms-3">
                         <i class="fa-solid fa-book"></i>
                         <h3 class="mt-2">Similar Programs</h3>
                         <div class="css-count">{{count($similar_programs)}}</div>
                     </div>
                 <div class=" ms-3 row row-cols-2 gap-3">
                     
                     @foreach ($similar_programs as $sprogram)
                     <div class="program-card bg-white p-3 w-48">
                         <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#check-student-eligibility{{$sprogram->id}}">
                             <div class="program-card-main">
                                 <div class="program-card-img">
                                     <img src="{{url('/images/'.$sprogram->program_logo)}}"
                                         alt="{{$sprogram->programs_name}}">
                                 </div>
                                 <div class="program-card-heading">
                                     <h4>{{$sprogram->programs_name}}</h4>
                                     <p> {{$sprogram->program_college_name}} </p>
                                     <ul>
                                         <li>
                                             <div class="list-li">
                                                 <p>Earliest intake</p>
                                                 <p>{{date('M Y', strtotime($sprogram->earliest_intake_date))}}</p>
                                             </div>
                                         </li>
                                         <li>
                                             <div class="list-li">
                                                 <p>Tuition</p>
                                                 <p>{{$sprogram->tuition_fee_max}}</p>
                                             </div>
                                         </li>
                                         <li>
                                             <div class="list-li">
                                                 <p>Application fee</p>
                                                 <p>{{$sprogram->application_fee_max}}</p>
                                             </div>
                                         </li>
                                         <!--<li>
                                             <div class="list-li">
                                                 <p>Commission</p>
                                                 <p>£1,470.00 GBP</p>
                                             </div>
                                         </li>-->
                                     </ul>
                                     <button class="btn btn-primary"> Check Student Eligibility</button>
                                 </div>
                             </div>
                         </a>
                     </div>
                     @endforeach
                     
                   
                 </div>
                 @endif
                 
             </div>
        </div>
    </div>

    <!-- Modal Check Student Eligibility --> 
    <div class="modal fade" id="check-student-eligibility" tabindex="-1" aria-labelledby="selectstudentLabel" aria-hidden="true">
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
                                <option  select>Search students name, email, or ID</option> 
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <style>
     @media (min-width: 300px) and (max-width: 600px)
        {
            .m-size{
                margin: 0;
                padding: 0 !important;
            }
            
        }
    </style>
@endsection