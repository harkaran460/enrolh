@extends('layouts.student_app')
@section('content')  
<?php //print_r($gallery[0]);?>
    <div class="page-content college-details">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--<div class="alert alert-info alert-dismissible fade show fs-5" role="alert">
                        <i class="fa-solid fa-circle-info"></i> You are viewing the refreshed version of the school pages. If you would like to
                        <a href=""><b>switch back to the old version, click here.</b></a> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>-->
                </div>
                <div class="col-md-12">
                    <div class="main-programs-content"> 
                        <div class="main-programs-img">
                            <a target="_blank" href="">
                                <img width="80" height="80" src=" {{url('/images/'.$college_details[0]->college_logo)}}">
                            </a>
                            <div class="ps-3"> 
                                <h2><b> {{$college_details[0]->college_name}}</b></h2> 
                                <ul class="college-location-way"> 
                                    <li><img src="https://www.callcenterdialerprovider.com/applyhere/student-login/assets/img/flag1.svg" width="30" height="30" alt=""> {{$college_details[0]->college_country}}</li>
                                    <li><img src="https://www.callcenterdialerprovider.com/applyhere/agent/assets/img/location.svg" width="30" height="30" alt=""> {{$college_details[0]->college_address}}</li> 
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row mt-4 gallery-collage">
                @if(isset($gallery))
                @foreach ($gallery as $img )
                    
                
                <div class="col-md-5 gallery-list"> 
                    <a href="{{url($img->url)}}">
                        <img src="{{url($img->url)}}" alt="{{$img->name}}" class="img-fluid"> 
                    </a>
                </div>
                @break
                @endforeach
               @if(count($gallery) > 1)
                <div class="col-md-5 gallery-list">
                    <div class="row">
                        @foreach ($gallery as $img )
                        
                        <div class="col-md-6"> 
                            <a href="{{url($img->url)}}">
                                <img src="{{url($img->url)}}" alt="{{$img->name}}" class="img-fluid"> 
                            </a>
                        </div>
                        @endforeach

                    </div>
                   </div>
                   @endif
                    @endif
                    
                <div class="col-md-12">
                    <div class="view-more">
                        <button type="button" class="btn btn-primary rounded-pill px-3">View Photos</button>
                    </div>
                </div> 
            </div>
        </div>

        <div class="container-fluid nav-college-list mt-5">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav-menu">
                        <li class="active-menu"><a href="#about_us"> Overview </a></li>
                        <li><a href="#features-details"> Features </a></li>
                        <li><a href="#location-details"> Location </a></li>
                        <li><a href="#programs-details"> Programs </a></li>
                    </ul>
                </div> 
            </div>
            <div class="row m-60" id="about_us">
                <div class="col-md-8">
                    <div class="main-college-about">
                        <div class="home-icon">
                            <i class="fa-solid fa-house-user"></i>
                            <h3>About</h3>
                        </div>
                        <div class="bg-white p-3 mt-3">
                            <!--<p>Cheshire College -  South & West offers exciting opportunities for their 11,000 learners and 1,000 Apprentices to access high-quality teaching and learning at their modern Campuses in Crewe, Ellesmere Port and Chester. They aim to provide their learners with the skills, experience and qualifications that will prepare them for their future career or higher-level study at the College or university. They encourage learners to become confident individuals who will make valuable contributions to businesses and the local economy in their future careers.</p>
                            <p>All the Campuses provide a safe, happy and innovative learning experience that will ensure students achieve their full potential. Students will have access to world-class inspirational facilities which are the result of a £140m investment in the latest technology and real work environments.</p>
                            
                            <div id="choose-college">
                                <h4><b>Why Cheshire College South and West</b></h4>
                                <ul>
                                    <li><u>Campus:</u> Utilize all of Cheshire College's sports facilities to stay fit, get pampered in the salons, visit state-of-the-art theatres or even fine dine in their award-winning restaurants. Get discounted rates in all of the Community College facilities.</li>
                                    <li><u> Links with Businesses:</u> The college prides themselves on their strong links with local businesses of all sizes who benefit from tailored training delivered in the workplace or at College Campuses, and from their provision of a wide range of Apprenticeships such as Accountancy, Catering, Construction, Engineering and Dental Nursing. They work with many major local employers across the regions such Bentley, Brownlow Furniture, Ecolab, Vauxhall Motors, Scottish Power, Unilever, Brunning and Price and National Grid.</li>
                                    <li><u>Approved Apprenticeship Provider:</u> As an approved Apprenticeship provider, Cheshire College can support local employers who are using the Levy system to recruit and train Apprentices within their business. The Apprenticeship Team can also conduct a training needs analysis and make proposals for a bespoke training and development strategy for the organization, whilst being able to access financial support available to businesses.</li>
                                </ul>
                            </div>--> 
                            <?php echo  $college_details[0]->college_about_details;?>
                                  
                        </div> 
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="institution-details mb-4">
                        <h4 class="fs-3 pb-4">Institution Details</h4>
                        <div class="bg-white p-3">
                            <table class="table">
                                <tr>
                                    <td>Founded</td>
                                    <td class="text-end">{{$college_details[0]->founded}}</td>
                                </tr>
                                <tr>
                                    <td>School ID</td>
                                    <td class="text-end">{{$college_details[0]->school_id}}</td>
                                </tr>
                                <tr>
                                    <td>Provider ID number</td>
                                    <td class="text-end">{{$college_details[0]->provider_id_number}}</td>
                                </tr>
                                <tr>
                                    <td>Institution type</td>
                                    <td class="text-end">{{$college_details[0]->institution_type}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="top-disciplines">
                        <h4 class="fs-3 pb-4">Top Disciplines</h4>
                        <div class="bg-white p-3">

                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-dollar-sign"></i>
                                </div>
                                <div class="duration-content">
                                    <p><b>{{$college_details[0]->application_fee}}</b></p>
                                    <p><span> Application fee</span></p>
                                </div>
                            </div>
                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="duration-content">
                                    <p><b> {{$college_details[0]->average_graduate_program}}</b></p>
                                    <p><span> Average graduate program </span></p>
                                </div>
                            </div>
                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="duration-content">
                                    <p><b> {{$college_details[0]->average_undergraduate_program}}</b></p>
                                    <p><span> Average undergraduate program</span></p>
                                </div>
                            </div>
                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-house-user"></i>
                                </div>
                                <div class="duration-content">
                                    <p><b> {{$college_details[0]->cost_of_living}} / Year </b></p>
                                    <p><span> Cost of living</span></p>
                                </div>
                            </div>
                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-landmark-dome"></i>
                                </div>
                                <div class="duration-content">
                                    <p><b> {{$college_details[0]->tuition}} / Year </b></p>
                                    <p><span> Tuition </span></p>
                                </div>
                            </div> 

                        </div>
                    </div> 
                </div>
            </div>

            <div class="row mt-5" id="features-details">
               
                <div class="col-md-8">
                    @if(count($question_answer) >0)
                    <div class="main-features-about">
                        <div class="home-icon">
                            <i class="fa-solid fa-clipboard"></i>
                            <h3>Features</h3>
                        </div>
                        <div class="bg-white p-3 mt-3">
                            <div class="main-features">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    
                                    @foreach($question_answer as $qa)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-featureheadingOne{{$qa->id}}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-featuresOne{{$qa->id}}" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                                <div class="feature-icon">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>    
                                                {{$qa->feature_questions}}
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-featuresOne{{$qa->id}}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-featureheadingOne">
                                            <div class="accordion-body">
                                                <p>   {{$qa->feature_answer}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <span>*Information listed is subject to change without notice and should not be construed as a commitment by ApplyBoard Inc.</span>
                        </div> 
                         
                    </div> 
                    @endif
                </div>
               
                <div class="col-md-4"> 
                    <div class="top-disciplines">
                        <h4 class="fs-3 pb-4">Top Disciplines</h4>
                        <div class="bg-white p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Engineering and Technology</h5>
                                </div>
                                <div class="col-md-6 m-auto">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="{{$college_details[0]->engineering_and_technology}}" aria-valuemin="0" aria-valuemax="{{$college_details[0]->engineering_and_technology}}">{{$college_details[0]->engineering_and_technology}}%</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Health Sciences, Medicine, Nursing, Paramedic and Kinesiology</h5>
                                </div>
                                <div class="col-md-6 m-auto">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="{{$college_details[0]->health_sciences_medicine_nursing_paramedic_and_kinesiology}}" aria-valuemin="0" aria-valuemax="{{$college_details[0]->health_sciences_medicine_nursing_paramedic_and_kinesiology}}">{{$college_details[0]->health_sciences_medicine_nursing_paramedic_and_kinesiology}}%</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Business, Management and Economics</h5>
                                </div>
                                <div class="col-md-6 m-auto">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="{{$college_details[0]->business_management_and_economics}}" aria-valuemin="0" aria-valuemax="{{$college_details[0]->business_management_and_economics}}">{{$college_details[0]->business_management_and_economics}}%</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Other</h5>
                                </div>
                                <div class="col-md-6 m-auto">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="{{$college_details[0]->other}}" aria-valuemin="0" aria-valuemax="{{$college_details[0]->other}}">{{$college_details[0]->other}}%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="row mt-5" id="location-details">
                <div class="col-md-8">
                    <div class="home-icon">
                        <i class="fa-solid fa-location-dot"></i>
                        <h3>Location</h3>
                    </div>
                    <div class="bg-white p-3 mt-3">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#pills-map" class="nav-link active" id="pills-map-tab" data-bs-toggle="pill" data-bs-target="#pills-map" type="button" role="tab" aria-controls="pills-map" aria-selected="true">
                                    Map
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#pills-streetview" class="nav-link" id="pills-streetview-tab" data-bs-toggle="pill" data-bs-target="#pills-streetview" type="button" role="tab" aria-controls="pills-streetview" aria-selected="false">
                                    Streetview
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                              
                                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d8994.981570244534!2d77.38596390640649!3d28.629808676841964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s{{$college_details[0]->map_location}}!5e0!3m2!1sen!2sin!4v1659521298547!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            
                            </div>
                            <div class="tab-pane fade" id="pills-streetview" role="tabpanel" aria-labelledby="pills-streetview-tab">
                                
                            </div>
                         </div>

                         <div class="map-footer">
                             <p>{{$college_details[0]->map_streetview}}</p>
                         </div>

                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <h4 class="fs-3 pb-4">Top Disciplines</h4>
                    <div class="bg-white p-3"> 
                        <div class="row location-year">
                            <div class="col-md-4">
                                <canvas id="myChart1" style="height: 250px;width:100%"></canvas>
                            </div>
                            <div class="col-md-8">
                                <ul>
                                    <li>
                                        <div class="dark__blue"></div>
                                        1-Year Post-Secondary Certificate
                                    </li>
                                    <li>
                                        <div class="light__blue"></div>
                                        2-Year Undergraduate Diploma
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5" id="programs-details">
                <div class="col-md-8">
                    <div class="filter_list_main"> 
                        <div class="home-icon d-flex">
                            <i class="fa-solid fa-book"></i>
                            <h3>Programs</h3>
                            <div class="css-count"><?php if(isset($college_details[0]->courses)){echo count($college_details[0]->courses);}else{echo "0";}?></div>
                        </div>
                        <div class="right-side-filter d-flex">
                            <button class="btn btn-primary" id="filters">
                                <i class="fa-solid fa-filter"></i> Filters
                            </button>
                            <form action="" methods="POST">
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>None</option>
                                        <option value="1">Tution (Low to High)</option>
                                        <option value="2">Tution (High to Low)</option>
                                        <option value="3">Program Title (A-Z)</option>
                                    </select>
                                </div>
                            </form> 
                        </div> 
                    </div>

                    <div class="programs-form-search">
                        <form action="" method="POST">
                            <div class="row mt-3">
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Program Level</option>
                                            <option value="1">None</option>
                                            <option value="2"> 1-Year Post-Secondary Certificate</option>
                                            <option value="3"> 2-Year Undergraduate Diploma</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Discipline</option>
                                            <option value="1">None</option>
                                            <option value="2"> Arts</option>
                                            <option value="3"> Business, Management and Economics</option>
                                            <option value="4"> Civil Engineering, Construction</option>
                                            <option value="5">Electronics</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Intake</option>
                                            <option value="1"> Aug 2022</option>
                                            <option value="2"> Sep 2022</option>
                                            <option value="3"> Aug 2023</option>
                                            <option value="4"> Sep 2023</option>
                                            <option value="5"> Aug 2024</option>
                                            <option value="6"> Sep 2024</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="search" class="form-control" placeholder="Search Programs">
                            </div>
                        </form>
                    </div>
                    @if(isset($college_details[0]->courses))
                    @foreach ( $college_details[0]->courses as $course)  
                    
                    <div class="program-card bg-white p-3"> 
                        <div class="program-card-main">
                            <div class="program-card-img">
                                <img src="{{url('/images/'.$course->program_logo)}}"  alt="{{$course->programs_name}}">
                            </div>
                           
                            <div class="program-card-heading">
                                <h4><a href="programs-college.php"> {{$course->programs_name}} </a></h4>
                                <p>{{$course->program_college_name}}</p>
                                <ul>
                                    <li>
                                        <div class="list-li">
                                            <p>Earliest intake</p>
                                            <p>{{date('M Y', strtotime($course->earliest_intake_date));}} </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-li">
                                            <p>Tuition</p>
                                            <p>{{$course->tuition_fee_max}}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-li">
                                            <p>Application fee</p>
                                            <p>{{$course->application_fee_max}}</p>
                                        </div>
                                    </li>
                                    <!--<li>
                                        <div class="list-li">
                                            <p>Commission</p>
                                            <p>{{$course->programs_name}}£1,470.00 GBP</p>
                                        </div>
                                    </li>-->
                                </ul>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#check-student-eligibility" class="btn btn-primary">Check Student Eligibility</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    <!--<div class="program-card bg-white p-3"> 
                        <div class="program-card-main">
                            <div class="program-card-img">
                                <img src="https://www.callcenterdialerprovider.com/applyhere/agent/assets/img/setting.svg" alt="">
                            </div>
                            <div class="program-card-heading">
                                <h4><a href="programs-college.php"> Construction Pre-T Level Transition Programme </a></h4>
                                <p>Cheshire College South and West - Ellesmere Port</p>
                                <ul>
                                    <li>
                                        <div class="list-li">
                                            <p>Earliest intake</p>
                                            <p>Aug 2022</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-li">
                                            <p>Tuition</p>
                                            <p>£9,800.00 GBP</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-li">
                                            <p>Application fee</p>
                                            <p>Free</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-li">
                                            <p>Commission</p>
                                            <p>£1,470.00 GBP</p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#check-student-eligibility" class="btn btn-primary">Check Student Eligibility</a>
                            </div>
                        </div>
                    </div>-->


                </div>
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
<script>
var xValues = ["1-Year", "2-Year"];
var yValues = [{{$college_details[0]->year_post_secondary_certificate}},{{$college_details[0]->year_undergraduate_diploma}}];
var barColors = [
    "#1e3a8a",
    "#50a5f1"
];



</script>
@endsection