@extends('layouts.agent_app')
@section('content')  

    <div class="page-content college-details">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="main-programs-content"> 
                        <div class="main-programs-img form-control-lg">
                            <a target="_blank" href="" class="align-self-center">
                                <img width="80" height="80" src=" {{url('/images/'.$college_details[0]->college_logo)}}">
                            </a>
                            <div class="ps-3 align-self-md-end"> 
                                <h2 class="mb-0"><b> {{$college_details[0]->college_name}}</b></h2> 
                                <ul class="college-location-way"> 
                                
                                    <li class="d-flex align-items-center mb-0 p-1">
                                        <img class="align-self-center" src="{{ asset('assetsAgent/img/flag1.svg')}}" alt="Generic placeholder image" width="30">
                                        <div class="flex-1">
                                          <h6 class="mb-0 fw-bold text-dark">{{$college_details[0]->college_country}}</h6>
                                        </div>
                                    </li>
                                    <!--<li><img src="{{ asset('assetsAgent/img/flag1.svg')}}" width="30" height="30" alt="">{{$college_details[0]->college_country}}</li>-->
                                    <li class="d-flex align-items-center mb-0 p-1">
                                        <img class="align-self-center" src="{{ asset('assetsAgent/img/location.svg')}}" width="30" height="30" alt="">
                                        <div class="flex-1">
                                          <h6 class="mb-0 fw-bold text-dark">{{$college_details[0]->college_address}}</h6>
                                        </div>
                                    </li> 
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
                <div class="col">
                    <div class="row">
                      <div class="col-md-12">
                    
                        <div id="mdb-lightbox-ui"></div>
                    
                        <div class="mdb-lightbox no-margin row row-cols-4">
                    
                          <figure class="col mx-auto">
                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).webp" data-size="1600x1067">
                              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).webp"
                                class="img-fluid">
                            </a>
                          </figure>
                    
                          <figure class="col mx-auto">
                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).webp" data-size="1600x1067">
                              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(98).webp"
                                class="img-fluid" />
                            </a>
                          </figure>
                    
                          <figure class="col mx-auto">
                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).webp" data-size="1600x1067">
                              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(131).webp"
                                class="img-fluid" />
                            </a>
                          </figure>
                    
                          <figure class="col mx-auto">
                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).webp" data-size="1600x1067">
                              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).webp"
                                class="img-fluid" />
                            </a>
                          </figure>
                    
                          <figure class="col mx-auto">
                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(118).webp" data-size="1600x1067">
                              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(118).webp"
                                class="img-fluid" />
                            </a>
                          </figure>
                    
                          <figure class="col mx-auto">
                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).webp" data-size="1600x1067">
                              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(128).webp"
                                class="img-fluid" />
                            </a>
                          </figure>
                    
                          <figure class="col mx-auto">
                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(132).webp" data-size="1600x1067">
                              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(132).webp"
                                class="img-fluid" />
                            </a>
                          </figure>
                    
                          <figure class="col mx-auto">
                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).webp" data-size="1600x1067">
                              <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).webp"
                                class="img-fluid" />
                            </a>
                          </figure>
                    
                        </div>
                    
                      </div>
                    </div>
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
                            <h3 class="mt-2">About</h3>
                        </div>
                        <div class="bg-white p-3 mt-4">
                           <p class=""><?php echo  $college_details[0]->college_about_details;?></p>               
                        </div> 
                    </div>
                </div>
                
             
                
                <div class="col-md-4">

                    <div class="institution-details mb-4">
                        <h4 class=" pb-4 mb-2">Institution Details</h4>
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
                        <h4 class="pb-3">Cost and Duration</h4>
                        <div class="bg-white p-3">

                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-dollar-sign"></i>
                                </div>
                                <div class="duration-content">
                                    @if($college_details[0]->application_fee !='')
                                    <p><b> {{$college_details[0]->application_fee}}</b></p>
                                    @else
                                    <p><b> No data available</b></p>
                                    @endif
                                    <p><span> Application fee</span></p>
                                </div>
                            </div>
                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="duration-content">
                                    @if($college_details[0]->average_graduate_program !='')
                                    <p><b>{{$college_details[0]->average_graduate_program}}</b></p>
                                    @else
                                    <p><b> No data available</b></p>
                                    @endif
                                    <p><span> Average graduate program </span></p>
                                </div>
                            </div>
                            
                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="duration-content">
                                    @if($college_details[0]->average_undergraduate_program !='')
                                    <p><b>{{$college_details[0]->average_undergraduate_program}} </b></p>
                                    @else
                                    <p><b> No data available</b></p>
                                    @endif
                                    <p><span> Average undergraduate program</span></p>
                                </div>
                            </div>
                            
                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-house-user"></i>
                                </div>
                                <div class="duration-content">
                                    @if($college_details[0]->cost_of_living !='')
                                    <p><b> {{$college_details[0]->cost_of_living}} / Year </b></p>
                                    @else
                                    <p><b> No data available</b></p>
                                    @endif
                                    <p><span> Cost of living</span></p>
                                </div>
                            </div>
                            <div class="cost-duration">
                                <div class="duration-icon">
                                    <i class="fa-solid fa-landmark-dome"></i>
                                </div>
                                <div class="duration-content">
                                    @if($college_details[0]->tuition !='')
                                    <p><b> {{$college_details[0]->tuition}} / Year </b></p>
                                    @else
                                    <p><b> No data available</b></p>
                                    @endif
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
                            <h3 class="mt-2">Features</h3>
                        </div>
                        <div class="bg-white p-3 mt-4">
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
                                                <p>{{$qa->feature_answer}}</p>
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
                        <h4 class=" pb-3">Top Disciplines</h4>
                        <!--<div class=" p-3">-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-md-6">-->
                        <!--            <h5>Engineering and Technology</h5>-->
                        <!--        </div>-->
                        <!--        <div class="col-md-6 m-auto">-->
                        <!--            <div class="progress">-->
                        <!--                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="{{$college_details[0]->engineering_and_technology}}" aria-valuemin="0" aria-valuemax="{{$college_details[0]->engineering_and_technology}}">{{$college_details[0]->engineering_and_technology}}%</div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <hr>-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-md-6">-->
                        <!--            <h5>Health Sciences, Medicine, Nursing, Paramedic and Kinesiology</h5>-->
                        <!--        </div>-->
                        <!--        <div class="col-md-6 m-auto">-->
                        <!--            <div class="progress">-->
                        <!--                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="{{$college_details[0]->health_sciences_medicine_nursing_paramedic_and_kinesiology}}" aria-valuemin="0" aria-valuemax="{{$college_details[0]->health_sciences_medicine_nursing_paramedic_and_kinesiology}}">{{$college_details[0]->health_sciences_medicine_nursing_paramedic_and_kinesiology}}%</div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <hr>-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-md-6">-->
                        <!--            <h5>Business, Management and Economics</h5>-->
                        <!--        </div>-->
                        <!--        <div class="col-md-6 m-auto">-->
                        <!--            <div class="progress">-->
                        <!--                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="{{$college_details[0]->business_management_and_economics}}" aria-valuemin="0" aria-valuemax="{{$college_details[0]->business_management_and_economics}}">{{$college_details[0]->business_management_and_economics}}%</div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <hr>-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-md-6">-->
                        <!--            <h5>Other</h5>-->
                        <!--        </div>-->
                        <!--        <div class="col-md-6 m-auto">-->
                        <!--            <div class="progress">-->
                        <!--                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="{{$college_details[0]->other}}" aria-valuemin="0" aria-valuemax="{{$college_details[0]->other}}">{{$college_details[0]->other}}%</div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        
                        
                                    <div class="card-body bg-white" style="border-radius:10px">
                                        <h5 class="mb-1 mt-0 fw-normal mt-2">Engineering and Technology</h5>
                                        <div class="progress-w-percent">
                                            <span class="progress-value fw-bold">{{$college_details[0]->other}}% </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: {{$college_details[0]->other}}%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <h5 class="mb-1 mt-0 fw-normal mt-2">Health Sciences, Medicine, Nursing, Paramedic and Kinesiology</h5>
                                        <div class="progress-w-percent">
                                            <span class="progress-value fw-bold">{{$college_details[0]->other}}% </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: {{$college_details[0]->other}}%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <h5 class="mb-1 mt-0 fw-normal mt-2">Business, Management and Economics</h5>
                                        <div class="progress-w-percent">
                                            <span class="progress-value fw-bold">{{$college_details[0]->other}}% </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: {{$college_details[0]->other}}%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <h5 class="mb-1 mt-0 fw-normal mt-2">Other</h5>
                                        <div class="progress-w-percent mb-2">
                                            <span class="progress-value fw-bold">{{$college_details[0]->other}}% </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: {{$college_details[0]->other}}%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
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
                        <h3 class="mt-2">Location</h3>
                    </div>
                    <div class="bg-white p-3 mt-4">

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
                    @if(($college_details[0]->year_post_secondary_certificate !='') && ($college_details[0]->year_undergraduate_diploma !=''))
                    <h4 class="mt-2 ms-2">Program Levels</h4>
                   
                    <div class="bg-white p-3 mt-4"> 
                        <div class="row location-year px-5">
                            <div class="col px-4">
                                      <canvas id="myChartsdsd"></canvas>
                                  <!--<div id="legend"></div>  -->
                            </div>
                            <!--<div class="col">-->
                                
                            <!--</div>-->
                            
                        </div>
                    </div>
                    @endif
                </div>
            </div>


            <div class="row mt-5" id="programs-details">
                <div class="col-12">
                    <div class="filter_list_main"> 
                        <div class="home-icon d-flex">
                            <i class="fa-solid fa-book"></i>
                            <h3 class="mt-2">Programs</h3>
                            <div class="css-count"><?php if(isset($college_details[0]->courses)){echo count($college_details[0]->courses);}else{echo "0";}?></div>
                        </div>
                        <div class="right-side-filter d-flex">
                            <button class="btn btn-primary" id="filters">
                                <i class="fa-solid fa-filter"></i> Filters
                            </button>
                            <form action="" methods="POST">
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example" id="program_order" name="program_order" onchange="getSelectVlue();">
                                        <option selected>None</option>
                                        <option value="tution_asc">Tution (Low to High)</option>
                                        <option value="tution_desc">Tution (High to Low)</option>
                                        <option value="program_asc">Program Title (A-Z)</option>
                                        <option value="program_desc">Program Title (Z-A)</option>
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
                                        <select class="form-select" aria-label="Default select example" id="program_level" name="program_level" onchange="getSelectVlue();">
                                            <option value="0" selected>Program Level</option>
                                            @if (!empty($sub_categories))
                                            @foreach ($sub_categories as $sub_cat)
                                                <option value="{{ $sub_cat->id }}">
                                                    {{ $sub_cat->sub_cat_name }}</option>
                                            @endforeach
                                        @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example" id="descipline" name="descipline"  onchange="getSelectVlue();">
                                            <option value="0" selected>Discipline</option>
                                            @if (!empty($post_discipline))
                                            @foreach ($post_discipline as $disc)
                                                <option value="{{ $disc->id }}">{{ $disc->title }}
                                                </option>
                                            @endforeach
                                        @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example" id="inteke" name="inteke" onchange="getSelectVlue();">
                                           
                                            <option value="0" selected>Intake</option>
                                            @if (!empty($inakes_date))
                                            @foreach ($inakes_date as $date)
                                                <option value="{{ $date->earliest_intake_date }}">
                                                    {{ date('d-F-Y', strtotime($date->earliest_intake_date)) }}
                                                </option>
                                            @endforeach
                                        @endif
                                        
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group mt-3">
                                    <input type="search" class="form-control" placeholder="Search Programs" name="search" id="search" onchange="getSelectVlue();">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div id="program_result"></div>
                    <div class="defultdata row justify-content-around gap-5 px-3">
                    @if(isset($college_details[0]->courses))
                    @foreach ( $college_details[0]->courses as $course)  
                    <div class="program-card bg-white p-3 col"> 
                        <div class="program-card-main">
                            <div class="program-card-img">
                                <img src="{{url('/images/'.$course->program_logo)}}"  alt="{{$course->programs_name}}">
                            </div>
                            <div class="program-card-heading">
                                <h4><a href="{{url('/agent-program-details/'.$course->id)}}"> {{$course->programs_name}}</a></h4>
                                <p>{{$course->program_college_name}}</p>
                                <ul>
                                    <li>
                                        <div class="list-li">
                                            <p>Earliest intake</p>
                                            <p>{{date('M Y', strtotime($course->earliest_intake_date));}}</p>
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
                                            <p>£1,470.00 GBP</p>
                                        </div>
                                    </li>-->
                                </ul>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#check-student-eligibility" class="btn btn-primary">Check Student Eligibility</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    </div>
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
        
        <style>
            #search{
                    width: 98%;
            }
            .programs-form-search{
                display:block !important;
                height:105px !important;
            }
            
            @media (min-width: 300px) and (max-width: 600px)
            {
            .defultdata {
                margin-top: 84px;
            }
            #search {
                    width: 93%;
            }
            }
            
        </style>
        
@endsection