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
                    <form method="post" action="add-notice">
                    @csrf  
                            <div class="modal-dialog" style="max-width: 600px;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Notice</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body " style="height: 220px; overflow-Y: scroll;">
                                         
                                        <div class="mb-3">
                                        <div class="form-group"> 
                                <label for="notice_title">Notice Title</label>
                               
                                <input type="text" class="form-control" name="notice_title" id="notice_title" placeholder="Enter Notice Title">
                                <span class="text-danger">
                                    @error('notice_title')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="notice_des">Notice Description</label>
                                <textarea class="form-control" name="notice_des" id="notice_des" rows="3"></textarea>
                                <span class="text-danger">
                                    @error('notice_des')
                                {{$message}}
                             @enderror
                             </span>
                            </div> 
                                        </div>
                                          
                                    </div>
                                    <div class="modal-footer d-flex flex-row">
                                        <button type="button" class="btn px-4" style="background-color: #FFE5E4;" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary px-4 bg">Create New Notice</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> 
               
                    <!-- ------------------------------ EDIT MODAL START-------------------------------------- -->
                    <?php
                        if(isset($_GET['edit_notice_id'])){
                            $noticeid = $_GET['edit_notice_id'];
                            ?>
                    @foreach($edit_notice_data as $notice_data)   
                    <div class="modal fade" id="editNotice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                   
                    <form method="post" action="update-notice">
                    @csrf  
                    <input type="hidden" name="notice_id" id="notice_id" value="{{$noticeid}}">
                            <div class="modal-dialog" style="max-width: 600px;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Notice</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body " style="height: 220px; overflow-Y: scroll;">
                                         
                                        <div class="mb-3">
                                        <div class="form-group"> 
                                <label for="notice_title">Notice Title</label>
                               
                                <input type="text" class="form-control" value="{{$notice_data->notice_title}}" name="notice_title" id="notice_title" placeholder="Enter Notice Title">
                                <span class="text-danger">
                                    @error('notice_title')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="notice_des">Notice Description</label>
                                <textarea class="form-control" name="notice_des" id="notice_des" rows="3">{{$notice_data->notice_title}}</textarea>
                                <span class="text-danger">
                                    @error('notice_des')
                                {{$message}}
                             @enderror
                             </span>
                            </div> 
                                        </div>
                                          
                                    </div>
                                    <div class="modal-footer d-flex flex-row">
                                        <a href="notice-board" type="button" class="btn px-4" style="background-color: #FFE5E4;">Cancel</a>
                                        <button type="submit" class="btn btn-primary px-4 bg">Update Notice</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                   @endforeach
                   <?php
                        }
                       ?>
                    <!-- ------------------------------ EDIT MODAL END-------------------------------------- -->
                </div>
            </div>

        </div>
        <div class="container-fluid pt-5">
        <div class="alert-success" role="alert">
           <center><h3 style="font-size: 22px;">{{Session::get('notice_deleted')}}</h3></center>
            <center><h3  style="font-size: 22px;">{{Session::get('notice_submited')}}</h3></center>
            <center><h3  style="font-size: 22px;">{{Session::get('notice_updated')}}</h3></center>
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
                <!-- <a  href="?edit_notice_id={{$notice->id}}" data-bs-toggle="modal" data-bs-target="#editNotice"><i class='fas fa-edit' style='font-size:20px'></i></a> -->

                 <a href="?edit_notice_id={{$notice->id}}#editNotice"><i class='fas fa-edit' style='font-size:20px'></i></a>
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

