@extends('layouts.admin_app')
@section('content')
@php $application_status = getCurrentStatus() @endphp
@php $payment_status = getPaymentStatus() @endphp
<div class="page-content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">List of College</h4>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block phone-noti">

                            <a href="/important_notice" class="btn header-item noti-icon waves-effect">
                                <i class="bx bx-bell"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </a>
                        </div>

                        <div class="dropdown profile-login d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assetsAgent/img/profile-icon.png"
                                    alt="Header Avatar">
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
                    <a href="/admin-application-list"
                        class="btn me-4 fw-normal fs-5 border rounded-pill px-3 py-1 border-danger"> Back </a>
                     
                </div>

                  
            </div>
        </div>

    </div>
    <div class="container-fluid pt-5">
        <?php
        if(Session::get('college_updated') !== null){
            echo '<div class="alert alert-success" role="alert">';
            ?>
            {{Session::get('college_updated')}}
            <?php

            echo '</div>';
     
        }
        ?>
   
        <div class="row"> 
        <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-12">
                <div class="row overflow-hidden" id="student-table">
                    <div class="col-12 position-relative">
                        <div class="myftable">
                            <table class="table">
                                <thead>
                                    <tr style="border-bottom: 2px solid #0000001f;">
                                        <th class="" scope="col">Actions</th>
                                        <th class="" scope="col">College Name</th>
                                        <th class="" scope="col">College Country</th>
                                        <th class="" scope="col">college Address</th> 
                                        <th class="" scope="col">Application Fee</th>  
                                        <th class="" scope="col">View More</th>
                                    </tr> 
                                </thead>
                                <tbody>

                                    @if(!empty($college_list))
                                    @foreach ($college_list as $college)
                                    <tr>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn border-0" type="button" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item"  href="admin-view-college/{{$college->id}}"><i class="bi bi-pencil"></i> View Application</a></li>
                                                    <li><a class="dropdown-item"  href="admin-edit-college/{{$college->id}}"><i class="bi bi-pencil"></i> Edit Application</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="">{{$college->college_name}}</td>
                                        <td class="">{{$college->country}}</td>
                                        <td class="">{{$college->college_address}}</td> 
                                        <td class="">{{$college->application_fee}}</td>  
                                        <td class="">
                                            <span class="application_view"><a href="admin-view-college/{{$college->id}}">View</a></span> 
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="row"> 
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
            <ul class="pagination">{{$college_list->links('pagination::bootstrap-4')}}</ul>
        </div>   
            </div> 

            
        </div>
        
 
    </div>
             
   
        </div>
    </div>
</div>
@endsection