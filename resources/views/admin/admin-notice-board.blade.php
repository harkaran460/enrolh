@extends('layouts.admin_app')
@section('content')
@php $application_status = getCurrentStatus() @endphp
@php $payment_status = getPaymentStatus() @endphp
    <div class="page-content">
        
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Notice Board</h4>
    
                        <div class="d-flex">
                            
                            <div class="dropdown d-inline-block phone-noti">
    
                                <a href="/important_notice" class="btn header-item noti-icon waves-effect">
                                    <i class="bx bx-bell"></i> 
                                    <span class="badge bg-danger rounded-pill">3</span> 
                                </a>  
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
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-row justify-content-end">
                    
                    <div class="d-flex flex-row">
                        <a href="/admin-application-list" class="btn me-4 fw-normal fs-5 border rounded-pill px-3 py-1 border-danger" > Back </a>
                         <a class="btn me-4 fw-normal fs-5 border rounded-pill px-3 py-1 border-primary" href="#" data-bs-toggle="modal" data-bs-target="#addNewStudent"><i class="fa-solid fa-plus me-2"></i>Add new Notice</a>
                    </div>
                    
                    <div class="modal fade" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="">
                            <div class="modal-dialog" style="max-width: 600px;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Notice</h5>
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
                                            
                                            <!--<input type="date" class="form-control mb-3" placeholder="Birth Date">-->
                                            <input type="text" id="datepicker" class="form-control mb-3"  placeholder="Birth Date">
                                            
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
                                        <button type="button" class="btn btn-primary px-4 bg">Create New Notice</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> 
                    
                     

                    <!--------------------Filter-------------------->
                    <div class="offcanvas offcanvas-start p-2" tabindex="-1" id="student-filters" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h3 class="offcanvas-title fs-4">Hide/Show Columns</h3>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">

                            <ul class="nav nav-pills mb-3 d-flex flex-row flex-nowrap" id="pills-tab" role="tablist">
                                <li class="nav-item w-100" role="presentation">
                                    <button class="nav-link active w-100" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Filters
                                    </button>
                                </li>
                                <li class="nav-item w-100" role="presentation">
                                    <button class="nav-link w-100" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Columns</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="student-filters-tabs">
                                <div class="tab-pane fade show active aplly-filter apply_fliter_check" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="mb-3">
                                        <label class="form-label ml-from font">SCHOOL COUNTRY</label><br>
                                        <small>Select country</small>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>All</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="USA">USA</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 payment_status">
                                        <div class="d-flex flex-row justify-content-between">
                                            <label class="form-label font">PAYMENT STATUS</label><br>
                                            <a href=""><small>Clear</small></a>
                                        </div>
                                        
                                        <div class="d-flex">
                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>
                                             </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 d-flex"> 
                                            <div class="form-check"> 
                                                <input class="form-check-input " type="radio" name="payment_statues" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check"> 
                                                <input class="form-check-input " type="radio" name="payment_statues" id="inlineRadio2" value="option2">

                                            </div>
                                            <label class="form-label">Paid</label>
                                        </div>
                                        
                                    </div>
                                    <div class="mb-3 apply_filter_application">
                                        <div class="d-flex flex-row justify-content-between">
                                            <label class="form-label font">APPLICATION STATUS</label><br>
                                            <a href=""><small>Clear</small></a>
                                        </div>
                                       

                                        <div class="d-flex">
                                            <div class="form-check form-check-inline d-grid" style="justify-items: end;">
                                                <label class="form-check-label " for="inlineRadio1">Yes</label>
                                             </div>
                                            <div class="form-check form-check-inline d-grid justify-content-end" style="justify-items: end;">
                                                <label class="form-check-label ">No</label>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">   
                                            <div class="form-check">
                                                 <input class="form-check-input" type="radio" name="appplication_status_accepted" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                 <input class="form-check-input" type="radio" name="appplication_status_accepted" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Accepted</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check"> 
                                                <input class="form-check-input" type="radio" name="appplication_status_rejected" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check"> 
                                                <input class="form-check-input" type="radio" name="appplication_status_rejected" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Rejected</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_canceled" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_canceled" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Canceled</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_withdrawn" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_withdrawn" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Withdrawn</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_refundprogress" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_refundprogress" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Refund In Progress</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Program Closed</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_program_closed" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_program_closed" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Deferral In Progress</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_deferralprogress" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_deferralprogress" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Waitlisted</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_waitlisted" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appplication_status_waitlisted" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Ready to Enroll</label>
                                        </div>
                                        
                                        <div class="mb-3 d-flex">
                                            <div class="form-check">
                                                <input class="form-check-input " type="radio" name="appplication_status_readyenroll" id="inlineRadio1" value="option1">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input " type="radio" name="appplication_status_readyenroll" id="inlineRadio2" value="option2">
                                            </div>
                                            <label class="form-label">Enrollment Confirmed</label>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex mt-md-3">
                                        <button class="btn bg-light fs-5">Clear All Filter</button>
                                        <button class="btn bg ms-md-3 fs-5">Apply Filter</button>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <ul class="p-0 m-0 column-check">
                                        <li><span>COLUMN HEADER</span> <a href="">hide all</a></li>
                                        <li>
                                            <hr class="w-100 my-0">
                                        </li>
                                        <li><span>Student ID</span> <input class="form-check-input" type="checkbox" value="" id="studentId"><label class="form-check-label" for="studentId">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Student Email</span> <input class="form-check-input" type="checkbox" value="" id="studentEmail"><label class="form-check-label" for="studentEmail">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>First Name</span> <input class="form-check-input" type="checkbox" value="" id="fName"><label class="form-check-label" for="fName">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Last Name</span> <input class="form-check-input" type="checkbox" value="" id="lName"><label class="form-check-label" for="lName">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Nationality</span> <input class="form-check-input" type="checkbox" value="" id="nationlty"><label class="form-check-label" for="nationlty">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruitment Partner</span> <input class="form-check-input" type="checkbox" value="" id="recuPart"><label class="form-check-label" for="recuPart">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruiter Type</span> <input class="form-check-input" type="checkbox" value="" id="recuType"><label class="form-check-label" for="recuType">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Education</span> <input class="form-check-input" type="checkbox" value="" id="education"><label class="form-check-label" for="education">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Applications</span> <input class="form-check-input" type="checkbox" value="" id="application"><label class="form-check-label" for="application">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Referral Source</span> <input class="form-check-input" type="checkbox" value="" id="referSour"><label class="form-check-label" for="referSour">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Lead Status</span> <input class="form-check-input" type="checkbox" value="" id="leadStat"><label class="form-check-label" for="leadStat">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--------------------Filter-------------------->
                    
                </div>
            </div>

        </div>
        <div class="container-fluid pt-5">
        <div class="alert-success" role="alert">
                            <center><h2>{{Session::get('notice_deleted')}}</h2></center>
                            </div> 
                            <h3>All Notice</h3> 
            <div class="row">
            @foreach ($notices as $notice)
                <div class="col-6">
                <div class="card m7">
              <!-- <h5 class="card-header"></h5> -->
            <div class="card-body">
                <h5 class="card-title">{{$notice->notice_title}}</h5>
                <p>{{date('d-M-Y', strtotime($notice->created_at))}}</p>
                <p class="card-text">{{$notice->notice_des}}</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                 <a href="?edit_notice_id={{$notice->id}}"><i class='fas fa-edit' style='font-size:20px'></i></a>
                 <a href="#" onclick="Confirm('Yes', 'Cancel', '?delete_notice_id={{$notice->id}}')"><i class='fas fa-trash' style='font-size:20px'></i></a> 
                
            </div>
            </div>
                </div>   
                @endforeach 
            
            </div>
            <div class="row">
                
                <div class="all-notice">
                     
                          
                    <!--  --------------------------------------------------- --> 
                     <div class="cpagination">{{$notices->links('pagination::bootstrap-4')}}</div> 
                    <!--  --------------------------------------------------- -->    
                           
                       
                </div>
                <div class="col-md-6 col-lg-6"></div>
                <div class="col d-flex justify-content-start align-items-center py-3">

                    <div class="dropdown d-flex flex-row border-end pe-2">
                        <span class="d-flex align-items-center ">Row:</span>
                        <form method="GET" action="/admin-application-list" id="agentApplication">
                            <select class="form-select form-select-sm" name="qty" onchange="this.form.submit()">
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </form>
                    </div>
              
                </div>

                 
                
                    
                
                    

            </div>
        </div> 
    </div>
@endsection

