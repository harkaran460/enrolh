@extends('layouts.agent_app')
@section('content')
<div class="page-content h-100 manage-staff">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 overflow-scroll">
                    <div class="d-flex justify-content-between">
                        <h1>Members</h1>
                        <a href="add-member.php"><button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>&nbsp; Add New Member</button></a>
                    </div>
                    <div class="accordion accordion-flush mb-3" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Role
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    ....
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">

                        <tr>
                            <td class="col1">#</td>
                            <td class="col2">Name &amp; Email</td>
                            <td class="col3">Contact No.</td>
                            <td class="col4">Team</td>
                            <td class="col5">Role</td>
                            <td class="col6">Permission</td>
                            <td class="col7">Action</td>
                        </tr>

                        <tbody>
                            <tr>
                                <td class="col1">1</td>
                                <td class="col2">
                                    <div class="user-info d-flex">
                                        <div class="user-img">
                                            <img src="assetsAgent/img/dummy-profile-pic.jpg" alt="img" style="height: 40px; object-fit: cover; object-position: center center; border-radius: 50%">
                                        </div>
                                        <div class="user-bio ps-3">
                                            <div class="wrap">
                                                <div class="title-name">
                                                    <a href="#">Sukhwinder Singh Brar</a>
                                                </div>
                                            </div>
                                            <span class="title-name">info@unitravel.co</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="col3">
                                    <span>+123456789</span>
                                </td>
                                <td class="col4" style="width: 20%!important">
                                    <span>----</span>
                                </td>
                                <td class="col5">
                                    <span>----</span>
                                </td>
                                <td class="col6">
                                    <label class="switch-on-single">
                                        <input type="checkbox" class="fs-4">
                                    </label>
                                </td> 
                                <td class="col7 action">
                                    <a href="" class="edit"><i class="fa-solid fa-pen-to-square fs-4"></i></a>
                                    <a href="" class="delete" data-bs-toggle="modal" data-bs-target="#user-delete"><i class="fa-solid fa-trash fs-4"></i></a>

                                    <div class="modal fade" id="user-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content"> 
                                                <div class="modal-body text-center">
                                                    <h2>Are You Sure</h2>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="col1">2</td>
                                <td class="col2">
                                    <div class="user-info d-flex">
                                        <div class="user-img">
                                            <img src="assetsAgent/img/dummy-profile-pic.jpg" alt="img" style="height: 40px; object-fit: cover; object-position: center center; border-radius: 50%">
                                        </div>
                                        <div class="user-bio ps-3">
                                            <div class="wrap">
                                                <div class="title-name">
                                                    <a href="#">Unitravel Baghapurana</a>
                                                </div>
                                            </div>
                                            <span class="title-name">bpa@unitravel.in</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="col3">
                                    <span>+123456789</span>
                                </td>
                                <td class="col4" style="width: 20%!important">
                                    <span>----</span>
                                </td>
                                <td class="col5">
                                    <span>----</span>
                                </td>
                                <td class="col6">
                                    <label class="switch-on-single">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="col7 action">
                                    <a href="" class="edit"><i class="fa-solid fa-pen-to-square fs-4"></i></a>
                                    <a href="" class="delete" data-bs-toggle="modal" data-bs-target="#user-delete"><i class="fa-solid fa-trash fs-4"></i></a>

                                    <div class="modal fade" id="user-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content"> 
                                                <div class="modal-body text-center">
                                                    <h2>Are You Sure</h2>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-between">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <div class="d-flex">
                        <span class="pe-3">Show results</span>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>5</option>
                            <option value="1">10</option>
                            <option value="2">15</option>
                        </select>
                    </div>
                    <div>
                        <span>Showing Results 1 to of</span>
                    </div>
                </div> 
            </div>

        </div>
    </div>    
@endsection