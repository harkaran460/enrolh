@extends('layouts.admin_app')
@section('content')
  
  
  
  
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                    <div class="d-flex">
                        
                        <div class="dropdown d-inline-block phone-noti">

                            <a href="/important_notice"  class="btn header-item noti-icon waves-effect">
                                <i class="bx bx-bell"></i> 
                                <span class="badge bg-danger rounded-pill">3</span> 
                            </a> 
                            <!--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">-->
                            <!--    <div class="p-3">-->
                            <!--        <div class="row align-items-center">-->
                            <!--            <div class="col">-->
                            <!--                <h6 class="m-0" key="t-notifications"> Notifications </h6>-->
                            <!--            </div>-->
                            <!--            <div class="col-auto">-->
                            <!--                <a href="#" key="t-view-all"> View All</a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div data-simplebar style="max-height: 230px;">-->
                            <!--        <a href="javascript: void(0);" class="text-reset notification-item">-->
                            <!--            <div class="d-flex">-->
                            <!--                <div class="avatar-xs me-2">-->
                            <!--                    <span class="avatar-title bg-primary rounded-circle font-size-16">-->
                            <!--                        <i class="bx bx-cart"></i>-->
                            <!--                    </span>-->
                            <!--                </div>-->
                            <!--                <div class="flex-grow-1 ms-3">-->
                            <!--                    <h6 class="mb-1" key="t-your-order">Your order is placed</h6>-->
                            <!--                    <div class="font-size-12 text-muted">-->
                            <!--                        <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>-->
                            <!--                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </a>-->
                            <!--        <a href="javascript: void(0);" class="text-reset notification-item">-->
                            <!--            <div class="d-flex">-->

                            <!--                <div class="avatar-xs me-2">-->
                            <!--                    <span class="avatar-title bg-primary rounded-circle font-size-16">-->
                            <!--                        <i class="fa-solid fa-user"></i>-->
                            <!--                    </span>-->
                            <!--                </div>-->

                            <!--                <div class="flex-grow-1 ms-3">-->
                            <!--                    <h6 class="mb-1">James Lemire</h6>-->
                            <!--                    <div class="font-size-12 text-muted">-->
                            <!--                        <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>-->
                            <!--                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </a>-->
                                    
                            <!--    </div>-->
                            <!--    <div class="p-1 border-top d-grid">-->
                            <!--        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">-->
                            <!--            <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>-->
                            <!--        </a>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>

                        <div class="dropdown profile-login d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assetsAgent/img/profile-icon.png" alt="Header Avatar">
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
                        
                        <button type="button" class="btn btn-primary rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#addNewStudent">Add new Student</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
 

        <div class="modal fade" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="">
                <div class="modal-dialog" style="max-width: 600px;">
                    <div class="modal-content">
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
                                <input  type="text" id="datepicker" class="form-control mb-3"  placeholder="Birth Date">
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
                        <div class="modal-footer d-flex flex-row">
                            <button type="button" class="btn px-4" style="background-color: #FFE5E4;" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary px-4 bg">Create Student</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="row flex-column-reverse-only-sm">
            <div class="col-xl-9">
                <div class="row mt-3">
                    <div class="col-md-3">
                        <div class="card mini-stats-wid" style="border-left: 5px solid #12ee8c;">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="dashboard-icon">
                                        <i class="bx bx-archive-in"></i>
                                    </div>
                                </div>
                                <p>All Application</p>
                                <div class="justify-content-center">
                                    <h3>4.710</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mini-stats-wid" style="border-left: 5px solid #ff2b27;">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="dashboard-icon">
                                        <i class="fa-solid fa-credit-card"></i>
                                    </div>
                                </div>
                                <p>Offers Received</p>
                                <div class="justify-content-center">
                                    <h3>4.710</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mini-stats-wid" style="border-left: 5px solid #2a50ef;">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="dashboard-icon">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                </div>
                                <p>Total Students</p>
                                <div class="justify-content-center">
                                    <h3>4.710</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mini-stats-wid" style="border-left: 5px solid #eeaa12;">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="dashboard-icon">
                                        <i class="fa-solid fa-money-bill"></i>
                                    </div>
                                </div>
                                <p>Total Payments</p>
                                <div class="justify-content-center">
                                    <h3>4.710</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!--<div class="col-md-6">
                        <div class="card">
                            <div class="card-body"> 
                                <div class="d-flex">
                                    <h4 class="card-title mb-4 font-size-20">Revenue</h4>
                                    <div class="ms-auto">
                                        <ul class="nav nav-pills border rounded">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Year</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Month</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <canvas id="line-chart25" height="300"></canvas>
                            </div> 
                        </div>  
                    </div> -->
                     
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <div class="heading-title border-bottom d-flex"> 
                                        <h5 class="font-size-18"><b>Summary</b></h5>
                                        <div class="ms-auto">
                                            <ul class="nav nav-pills border rounded">
                                                
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">2022</a>
                                                </li>
                                                <!-- <li class="nav-item">
                                                    <a class="nav-link" href="#">2022</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">2023</a>
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="nav nav-pills border-bottom mb-2 paid-all-detalis" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="paid-applications-tab" data-bs-toggle="pill" data-bs-target="#paid-applications" type="button" role="tab" aria-controls="paid-applications" aria-selected="true">Paid Applications</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="paid-students-tab" data-bs-toggle="pill" data-bs-target="#paid-students" type="button" role="tab" aria-controls="paid-students" aria-selected="false">Paid Students</button>
                                        </li> 
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="paid-applications" role="tabpanel" aria-labelledby="paid-applications-tab">
                                            <div id="testDiv"></div> 
                                        </div>
                                        <div class="tab-pane fade" id="paid-students" role="tabpanel" aria-labelledby="paid-students-tab">...</div> 
                                    </div>
     
                                </div>  
  
                            </div>
                        </div>
                    </div>

                </div>
 
                <div class="row">
                    <div class="col-xl-12">
                        
                        <div class="bg-white p-3">
                            <div class="d-flex mb-3">
                                <h5 class="font-size-18"><b>Application Reminders</b></h5>                        
                            </div>
 
                            <div class="overflow-auto">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>APP ID</th>
                                        <th>STUDENT NAME</th>
                                        <th>PROGRAM NAME</th>
                                        <th>SCHOOL NAME</th>
                                        <th class="text-center">REQUIEMENTS</th> 
                                    </thead>
                                    <tbody>
                                        <tr> 
                                            <td><a href="#">2483827</a></td>  
                                            <td><a href="#">Abdul</a></td>
                                            <td><a href="#">Post Baccalaureate Diploma - Business Analytics </a></td>
                                            <td><a href="#">Cape Breton University</a></td> 
                                            <td class="requiements-list"> 
                                                <ul class="text-center">
                                                    <li>
                                                        <a href="#">
                                                            <div class="text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="REQUIEMENTS">1</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td> 
                                        </tr>

                                        <tr> 
                                            <td><a href="#">2483827</a></td> 
                                            <td><a href="#">Abdul</a></td>
                                            <td><a href="#">Post Baccalaureate Diploma - Business Analytics</a></td>
                                            <td><a href="#">Cape Breton University</a></td> 
                                            <td class="requiements-list"> 
                                                <ul class="text-center">
                                                    <li>
                                                        <a href="#">
                                                            <div class="text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="REQUIEMENTS">1</div>
                                                        </a>                                               
                                                    </li>
                                                </ul>
                                            </td> 
                                        </tr>
                                        <tr> 
                                            <td><a href="#">2483827</a></td> 
                                            <td><a href="#">Abdul</a></td>
                                            <td><a href="#">Post Baccalaureate Diploma - Business Analytics</a></td>
                                            <td><a href="#">Cape Breton University</a></td> 
                                            <td class="requiements-list"> 
                                                <ul class="text-center">
                                                    <li>
                                                        <a href="#">
                                                            <div class="text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="REQUIEMENTS">1</div>
                                                        </a>                                               
                                                    </li>
                                                </ul>
                                            </td> 
                                        </tr>
                                        <tr> 
                                            <td><a href="#">2483827</a></td>  
                                            <td><a href="#">Abdul</a></td>
                                            <td><a href="#">Post Baccalaureate Diploma - Business Analytics</a></td>
                                            <td><a href="#">Cape Breton University</a></td> 
                                            <td class="requiements-list"> 
                                                <ul class="text-center">
                                                    <li>
                                                        <a href="#">
                                                            <div class="text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="REQUIEMENTS">1</div>
                                                        </a>                                               
                                                    </li>
                                                </ul>
                                            </td> 
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="view-all"> 
                                <a href="=" class="btn btn-primary font-size-13 p-1 btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
 
            </div>
            
            <div class="col-xl-3 mt-xs-3">
                <div class="card overflow-hidden mt-3">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="p-4">
                                    <h4><b>Welcome back</b></h4>
                                    <h5 class="m-0"><b>Sukhwinder Singh.</b></h5>
                                </div>
                            </div>
                            <div class="col-5"></div>
                        </div>
                    </div>
                    <div class="card-body pt-0 pb-2">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <img src="assetsAgent/img/profile-icon.png" alt="" class="img-thumbnail rounded-circle">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="pt-3">
                                    <div class="row">
                                        <div class="col-5">
                                            <h5 class="font-size-18">$1245</h5>
                                            <p class="text-muted mb-0">Revenue</p>
                                        </div>
                                        <div class="col-7">
                                            <div class="pt-2">
                                                <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-3">
                    <div class="card-body">
                        <h5 class="font-size-18"><b>Monthly Applcations</b></h5>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="text-muted">This month</p>
                                <h3>$34,252</h3>
                                <p class="text-muted"><span class="text-success me-2"> 12% <i class="mdi mdi-arrow-up"></i> </span> From previous </p>

                                <div class="mt-4">
                                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="mt-4 mt-sm-0">
                                    <div id="school7"></div>
                                </div>
                            </div>
                        </div>
                        <!-- <p class="text-muted mb-0">We craft digital, graphic and dimensional thinking.</p> -->
                    </div>
                </div>

                <div class="card rounded-3">
                    <div class="card-body">
                        <h5 class="font-size-18"><b>Application Status</b></h5>

                        <div class="table-responsive mt-4">
                            <table class="table align-middle table-nowrap app-status">
                                <tbody>
                                    <tr>
                                        <td style="width: 30%">
                                            <p class="mb-0">Started</p>
                                        </td> 
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td style="width: 10%">
                                            <p class="mb-0 font-size-18"><b>101</b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%">
                                            <p class="mb-0">Free Paid</p>
                                        </td>
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td style="width: 10%">
                                            <p class="mb-0 font-size-18"><b>101</b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%">
                                            <p class="mb-0">Submitted</p>
                                        </td>
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td style="width: 10%">
                                            <p class="mb-0 font-size-18"><b>46</b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%">
                                            <p class="mb-0">LOA</p>
                                        </td>
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td style="width: 10%">
                                            <p class="mb-0 font-size-18"><b>44</b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%">
                                            <p class="mb-0">Tuition Paid</p>
                                        </td> 
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td style="width: 10%">
                                            <p class="mb-0 font-size-18"><b>28</b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20%">
                                            <p class="mb-0">VISA Granted</p>
                                        </td>
                                        
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-success rounded" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td style="width: 10%">
                                            <p class="mb-0 font-size-18"><b>0</b></p>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td>
                                            <p class="mb-0">1 Landed</p>
                                        </td>
                                        
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-danger rounded" role="progressbar" style="width: 5%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
 

                <div class="cmb-3 pt-2">
                    <div class="bg-white p-3 d-flex mb-2">
                        <div class="dashboard-user-img">
                            <img src="assetsAgent/img/profile-icon.png" alt="">
                        </div>
                        <div class="ps-3 dashboard-user-content">
                            <p><b>Jatin</b></p>
                            <p>Client Relationship Manager</p>
                             <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                                <a href="">Info@enrolhere.com</a>
                            </div>
                            
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+123456789">+123456789</a>
                            </div>
                        </div>
                    </div> 
                </div>


            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                
                <div class="row mt-3">
                    <div class="col-xl-4 summary-box">
                        <div class="bg-white p-3"> 
                            <h5 class="font-size-18"><b>Revenue</b></h5>
                            <div class="main-sale-report-box">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h4 class="fw-medium">Potential Commission</h4>
                                            <h6 class="mb-0">4</h6>
                                        </div>
    
                                        <div class="flex-shrink-0 align-self-center">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="fa-solid fa-file-pen font-size-24 ps-2"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-sale-report-box">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h4 class="fw-medium">Earned</h4>
                                            <h6 class="mb-0">0</h6>
                                        </div>
    
                                        <div class="flex-shrink-0 align-self-center">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="fa-solid fa-coins font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-sale-report-box">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h4 class="fw-medium">Withdrawn</h4>
                                            <h6 class="mb-0">0</h6>
                                        </div>
    
                                        <div class="flex-shrink-0 align-self-center">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="fa-solid fa-coins font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        
                        <div class="card rounded-3 mb-0"> 
                            <div class="bg-white p-3"> 
                                <h5 class="mb-2 font-size-18"><b>Team Proformance</b></h5>  
                                <div class="card-body p-0">
                                    <div class="overflow-auto">
                                        <table class="table table-borderless text-center" id="csmTable" role="grid"> 
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Status </th>
                                                    <th>Students</th>
                                                    <th>Application</th>
                                                    <th>Fees Paid</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex w-100">
                                                            <div class="image-content">
                                                                <img src="assetsAgent/img/user-img.png" class="img-fluid" alt="">
                                                                <h2>John</h2>
                                                            </div> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="deposit-btn">
                                                            <a href="" class="status-success">Active </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="price-list">
                                                            64
                                                        </div>
                                                    </td>
                                                    <td>504</td>
                                                    <td>24</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex w-100">
                                                            <div class="image-content">
                                                                <img src="assetsAgent/img/user-img.png" class="img-fluid" alt="">
                                                                <h2>John</h2>
                                                            </div> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="deposit-btn">
                                                            <a href="" class="status-danger">Inactive </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="price-list">
                                                            64
                                                        </div>
                                                    </td>
                                                    <td>504</td>
                                                    <td>24</td>
                                                </tr> 
                                                <tr>
                                                    <td>
                                                        <div class="d-flex w-100">
                                                            <div class="image-content">
                                                                <img src="assetsAgent/img/user-img.png" class="img-fluid" alt="">
                                                                <h2>John</h2>
                                                            </div> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="deposit-btn">
                                                            <a href="" class="status-success">Active </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="price-list">
                                                            64
                                                        </div>
                                                    </td>
                                                    <td>504</td>
                                                    <td>24</td>
                                                </tr>   
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                                <div class="view-all btn-team"> 
                                    <a href="=" class="btn btn-primary font-size-13 p-1 btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div>

                             
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-9">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="commissions-by mt-3"> 
                            <div class="card rounded-3 p-3 mb-0"> 
                                <h5 class="mb-3 font-size-18"><b>Commissions by Quarter</b></h5>
                                <!--<canvas id="myChart2"></canvas> -->
                                <div id="chartDiv" style="height: 400px;"> </div> 
                                <ul>
                                    <li><span class="size"></span> USD</li>
                                    <li><span class="size"></span> CAD</li>
                                    <li><span class="size"></span> GBP</li>
                                    <li><span class="size"></span> EUR</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
 

                <div class="row pt-2 school-section">
                    <div class="col-md-12 mb-2 pt-2">
                       
                        <div class="bg-white p-3">
                            <h5 class="font-size-18"><b> School</b></h5>
                            <div class="my-4 row text-center">
                                <div class="col-md-2 col-6"> 
                                    <div id="school1"></div>
                                    <div class="collage-name">
                                        <h5>Cheshire College South and West</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6"> 
                                    <div id="school2"></div>
                                    <div class="collage-name">
                                        <h5>Cheshire College South and West</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6"> 
                                    <div id="school3"></div>
                                    <div class="collage-name">
                                        <h5>Cheshire College South and West</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6"> 
                                    <div id="school4"></div>
                                    <div class="collage-name">
                                        <h5>Cheshire College South and West</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6"> 
                                    <div id="school5"></div>
                                    <div class="collage-name">
                                        <h5>Cheshire College South and West</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6"> 
                                    <div id="school6"></div>
                                    <div class="collage-name">
                                        <h5>Cheshire College South and West</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="col-xl-3">

                <div class="mrgt-15 mt-3 wallet-summary-holder">
                    <div class="summary-wrap">
                        <div class="w-100 mrgb-15 wallet-head"> 
                            <h5 class="mb-3 font-size-18"><b>Wallet Details</b></h5>
                        </div>
                        <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content ">
                            <div class="wc-left">
                                <p class="x16 fw600">CAD</p>
                            </div>
                            <div class="wc-rgt">
                                <p class="x16 fw600">₹ 0</p>
                            </div>
                        </div>
                        <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content">
                            <div class="wc-left">
                                <p class="x16 fw600">EUR</p>
                            </div>
                            <div class="wc-rgt">
                                <p class="x16 fw600">₹ 0</p>
                            </div>
                        </div>
                        <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content">
                            <div class="wc-left">
                                <p class="x16 fw600">AUD</p>
                            </div>
                            <div class="wc-rgt">
                                <p class="x16 fw600">₹ 0</p>
                            </div>
                        </div>
                        <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content">
                            <div class="wc-left">
                                <p class="x16 fw600">USD</p>
                            </div>
                            <div class="wc-rgt">
                                <p class="x16 fw600">₹ 0</p>
                            </div>
                        </div>
                        <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content">
                            <div class="wc-left">
                                <p class="x16 fw600">GBP</p>
                            </div>
                            <div class="wc-rgt">
                                <p class="x16 fw600">₹ 0</p>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="mrgt-15 mt-3 wallet-summary-holder">
                    <div class="summary-wrap">
                        <div class="w-100 mrgb-15 wallet-head">
                            <h5 class="mb-3 font-size-18"><b>Notice Board</b></h5>
                        </div>
                        <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content ">
                            <div class="wc">
                                <p class="x16 fw600">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content">
                            <div class="wc">
                                <p class="x16 fw600">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content">
                            <div class="wc">
                                <p class="x16 fw600">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="w-100 pad10 bdr-r5 mrgb-05 d-flex align-items-center justify-content-between wallet-content">
                            <div class="wc">
                                <p class="x16 fw600">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                         
                    </div>
                </div>

               
            </div>
        </div>

    </div>
</div>




<script src="{{ asset('assetsAgent/js/jquery.min.js') }}"></script>
<script src="https://code.jscharting.com/latest/jscharting.js"></script>
<!--Commissions by Quarter graph-->
  <script> 
    var chart = JSC.chart("chartDiv", {
        debug: true,
        type: '',
        legend_visible: false,
        xAxis: {
            crosshair_enabled: true,
            scale: { type: 'data' }
        },
        yAxis: {
            orientation: 'left',
            formatString: ''
        },
        defaultSeries: {
            firstPoint_label_text: '<b>%seriesName</b>',
            defaultPoint_marker: {
                type: 'circle',
                size: 8,
                fill: 'white',
                outline: { width: 2, color: 'currentColor' }
            }
        },
        title_label_text: '',
        series: [{
                name: '',
                points: [
                    ['Q1', 0],
                    ['Q2', 97.5],
                    ['Q3', 56.4],
                    ['Q4', 109.2]
                ]
            },
            {
                name: '',
                points: [
                    ['Q1', 0],
                    ['Q2', 79.5],
                    ['Q3', 95.4],
                    ['Q4', 97.2]
                ]
            },
            {
                name: '',
                points: [
                    ['Q1', 0],
                    ['Q2', 111.5],
                    ['Q3', 66.4],
                    ['Q4', 29.2]
                ]
            },
            {
                name: '',
                points: [
                    ['Q1', 0],
                    ['Q2', 56.5],
                    ['Q3', 56.4],
                    ['Q4', 56.2]
                ]
            }
        ]
    });
</script>
@endsection