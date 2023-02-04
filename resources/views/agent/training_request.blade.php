@extends('layouts.agent_app')
@section('content')
    <div class="page-content h-100 p-15 mx-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-end res-mt-3">
                         
                        <a href="add-training.php"><button type="button" class="btn btn-primary">Add Training</button></a>
                    </div>
                    <div class="py-3">
                        <button type="button" class=" btn btn-primary py-2">Requester</button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="overflow-auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>TRAINING TYPE</th>
                                    <th>PREFER SCHEDULE(S)</th>
                                    <th>SCHEDULED AT</th>
                                    <th>PERFORM BY</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Normal</td>
                                    <td>10:10 Am to 12:00</td>
                                    <td>10:10 Am to 12:00</td>
                                    <td>Main</td>
                                    <td class="action">
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
                     
                </div>
            </div>

        </div>
    </div>
@endsection