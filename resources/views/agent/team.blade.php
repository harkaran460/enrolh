@extends('layouts.agent_app')
@section('content')
    <div class="page-content h-100 manage-staff p-15 mx-1">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 overflow-scroll">
                    @if(session()->has('Success'))
                    <div class="alert alert-success">
                        {{ session()->get('Success') }}
                    </div>
                @endif

                @if(session()->has('Failed'))
                    <div class="alert alert-danger">
                        {{ session()->get('Failed') }}
                    </div>
                @endif
                
                    <div class="d-flex justify-content-end mt-2 mb-2">
                         
                        <a href="add-team"><button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>&nbsp;
                                Add New Team</button></a>
                    </div>


                    <div class="accordion accordion-flush mb-3" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Role
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    ....
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(!empty($teams_list))
                    <div class="table-responsive">
                    <table class="table table-bordered">

                        <tr>
                            <td class="col1">#</td>
                            <td class="col2">Name &amp; Email</td>
                            <td class="col3">Contact No.</td>
                            <td class="col5">Role</td>
                            <td class="col5">Status</td>
                            <td class="col7">Action</td>
                        </tr>

                        <tbody>
                            <?php $count =1;?>
                            @foreach ($teams_list as $list)
                                
                            <tr>
                                <td class="col1">{{$count}}</td>
                                <td class="col2">
                                    <div class="user-info d-flex">
                                        <div class="user-img">
                                            <img src="assetsAgent/img/dummy-profile-pic.jpg" alt="img"
                                                style="height: 40px; object-fit: cover; object-position: center center; border-radius: 50%">
                                        </div>
                                        <div class="user-bio ps-3">
                                            <div class="wrap">
                                                <div class="title-name">
                                                    <a href="#">{{$list->name}}</a>
                                                </div>
                                            </div>
                                            <span class="title-name">{{$list->email}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="col3">
                                    <span>{{$list->country_code}}{{$list->mobile}}</span>
                                </td>
                               
                                <td class="col5">
                                    <span><?php if($list->is_admin ==1){ echo "Admin";}else{echo "Member";}?></span>
                                </td>
                                <td class="col6">
                                    <label class="switch-on-single">
                                        <a href="change-status/{{$list->id}}"> <?php if($list->status ==1){ echo "<span>Active</span>";}else{echo "<span>Deactive</span>";}?></a>
                                    </label>
                                </td>
                                <td class="col7 action">
                                    <a href="team-update/{{$list->id}}" class="edit"><i class="fa-solid fa-pen-to-square fs-4"></i></a>
                                    <a href="delete-team/{{$list->id}}" class="delete" ><i
                                            class="fa-solid fa-trash fs-4"></i></a>
                                            <!--<a href="delete-team/{{$list->id}}" class="delete" data-bs-toggle="modal" data-bs-target="#user-delete"><i
                                                class="fa-solid fa-trash fs-4"></i></a>-->

                                    <div class="modal fade" id="user-delete" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                    <h2>Are You Sure</h2>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $count ++;?>
                            @endforeach
                          
                        </tbody>
                    </table>
                    </div>
                   
               
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <div class="d-flex">
                        <span class="pe-3">Show results</span>
                        <form method="GET" action="/team" id="teamqty">
                          
                            <select class="form-select form-select-sm"  name="qtyteam" onchange="this.form.submit()">
                            <option value="" selected>Select</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="all">All</option>
                        </select>
                        </form>
                    </div>
                    <div class="pagination-wrapper">
                        {{ $teams_list->links() }}
                    </div>
                </div>
                @else 
                   <div class="col-12 text-center pt-3">
                    <span class="fw-bold">No Teams Please Create One.</span>
                </div>
                @endif
            </div>

        </div>
    </div>
<style>
.flex.justify-between.flex-1.sm\:hidden {
display: none;
}
</style>
@endsection
