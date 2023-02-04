@extends('layouts.agent_app')
@section('content')
    <div class="page-content p-15 mx-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active border-0" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Growth Hub</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link border-0" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Student Intake Form</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container-fluid p-5">
                                <div class="row">
                                    <div class="col-12 d-flex ">
                                        <div class="img-box">
                                            <img src="assetsAgent/img/growth-icon.svg" alt="" width="100">
                                        </div>
                                        <div class="ps-5">
                                            <h3>Growth Hub</h3>
                                            <p>ApplyBoard is here to support our recruitment partners at every step of their application journey! Below you will find exclusive promotions to help you save money and grow your business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="py-5">ApplyBoard Partner Promotions</h4>

                                        <!------------------------------------Accordion--------------------------------------------->

                                        <div class="accordion accordion-flush" id="accordionFlushExample">

                                            <div class="accordion-item mb-5">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                        <div class="w-100 d-flex justify-content-between">
                                                            <div>
                                                                <img src="assetsAgent/img/logo1.svg" alt="" width="100">
                                                                <span class="ps-4"> International Student GIC Program</span>
                                                            </div>
                                                            <div class="d-flex align-items-center pe-5">
                                                                <p class="text-primary pt-3">Earn $100 CAD</p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body text-center">
                                                        <p class="pt-3">Set your students up for success and earn CAD $100 incentive for every GIC purchased by your referred students through the ApplyBoard-RBC International Student GIC Program. <a href="#" class="text-primary">Click Here to learn more about the ApplyBoard-RBC International Student GIC Program.</a></p>
                                                        <div class="pt-4">
                                                            <span class="pt-5">Your Referral Link:</span><br>
                                                            
                                                            <a href="#" class="btn text-primary p-0">https://www.applyboard.com/discover/gic?Opportunity.RP_ID__c=214027#gic_form_link </a>

                                                            <ul class="nav nav-pills mb-3 pt-5 d-flex justify-content-center" id="pills-tab" role="tablist">
                                                                <li class="nav-item" role="presentation">
                                                                    <button class="nav-link me-3 mb-3" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Show QR Code</button>
                                                                </li>

                                                                <button class="nav-link btn-primary" type="button" role="tab">Copy to Clipboard</button>

                                                            </ul>
                                                            <div class="tab-content pt-4" id="pills-tabContent">
                                                                <div class="tab-pane fade show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><img src="assetsAgent/img/qr-code%20(1).png" class="img-fluid" alt="" width="250"><br>
                                                                    <button type="button" class="btn btn-primary mt-4">Download PNG</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item mb-5">
                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">

                                                        <div class="w-100 d-flex justify-content-between">
                                                            <div>
                                                                <img src="assetsAgent/img/logo2.svg" alt="" width="100">
                                                                <span class="ps-4"> Tuition Payments Made Easy</span>
                                                            </div>
                                                        </div>

                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="text-center">
                                                            <p class="pt-3">Speed up the application process with quick and reliable fee payments from Flywire.</p>
                                                            <button type="button" class="btn btn-primary my-4 .res-mt-3">Learn More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item mb-5">
                                                <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">

                                                        <div class="w-100 d-flex justify-content-between">
                                                            <div>
                                                                <img src="assetsAgent/img/logo3.svg" alt="" width="100">
                                                                <span class="ps-4"> Save on Pearson English Tests</span>
                                                            </div>
                                                            <div class="d-flex align-items-center pe-5">
                                                                <p class="text-primary pt-3">Save up to 30%</p>
                                                            </div>
                                                        </div>

                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="text-center">
                                                            <p class="pt-3">We want to make your study abroad journey a little easier. Thanks to our partnerships with Pearson, you can save 20-30% on your PTE exams.</p>
                                                            <button type="button" class="btn btn-primary my-4 .res-mt-3">Learn More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingFour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">

                                                        <div class="w-100 d-flex justify-content-between">
                                                            <div>
                                                                <img src="assetsAgent/img/logo4.svg" alt="" width="100">
                                                                <span class="ps-4"> Save on TOEFL English Tests</span>
                                                            </div>
                                                            <div class="d-flex align-items-center pe-5">
                                                                <p class="text-primary pt-3">Save up to 30%</p>
                                                            </div>
                                                        </div>

                                                    </button>
                                                </h2>
                                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="text-center">
                                                            <p class="pt-3">We want to make your study abroad journey a little easier. Thanks to our partnerships with ETS, you can save 20-30% on your TOEFL exams.</p>
                                                            <button type="button" class="btn btn-primary my-4 .res-mt-3">Learn More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="container-fluid p-5">
                                <div class="alert alert-primary alert-dismissible fade show d-flex align-items-center p-2" role="alert">
                                    <i class="fa-solid fa-circle-info"></i>
                                    <div class="ps-3">
                                        <span class="text-primary"> Welcome to the new student intake form. <a href="#" class="text-primary text-decoration-underline">Click here to learn how to generate a custom student intake form.</a></span>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="row pt-5">
                                    <div class="col-12 d-flex ">
                                        <div class="img-box">
                                            <img src="assetsAgent/img/icon.svg" alt="" width="100">
                                        </div>
                                        <div class="ps-5">
                                            <h3>Student Intake Form</h3>
                                            <p>Enter your details to generate a custom link or embedded student intake form for your agency that you can easily share with prospective students. Any information captured will be added directly to your lead management system.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 sif">
                                        <div class=" d-flex align-items-center w-100">
                                            <img src="assetsAgent/img/icon2.svg" alt="" width="150">
                                            <div class="align-items-center ps-4">
                                                <span>Leave feedback</span><br>
                                                <p>Were these results helpful</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pt-5">
                                            <button type="button" class="btn btn1">Yes</button>
                                            <button type="button" class="btn btn2">No</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection