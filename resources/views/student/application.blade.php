@extends('layouts.student_app')
@section('content')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white p-4">


                    <div class="row">
                        <div class="col-12">
                            <div class="css-120btev css-1piu9jy1">
                                <div class="css-exg4v5 edqie6p13">
                                    <span aria-hidden="true" class="fa fa-shopping-cart"></span>
                                    <span>Unpaid Applications</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row overflow-hidden">
                        <div class="col-12">
                            <div class="myftable">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            <th scope="col">Status </th>
                                            <th scope="col">App ID</th>
                                            <th scope="col">School Name</th>
                                            <th scope="col">Program</th>
                                            <th scope="col">ESL Start Date</th>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">Fees</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($applications as $app)
                                        <tr>
                                            <td><button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                                            @if ($app->status == '0')
                                            <td><a href="">Payment Pending</a></td>
                                            @endif
                                            <td><a href="">{{$app->app_id}}</a></td>
                                            <td><a href="">{{$app->college_name}}</a></td>
                                            <td><span>{{$app->programs_name}}</span></td>
                                            <td>
                                                <span>ESL</span>
                                                <span>
                                                    <select class="form-control" disabled>
                                                        <option value="">N/A</option>
                                                    </select>
                                                </span>
                                            </td>
                                            <td>
                                                <span>Academic</span>
                                                <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Click to view courses ckecklist" aria-describedby="tooltip328" class="css-eogltt"> {{$app->status}}</span>
                                                <span>
                                                    <?php
                                                    $originalDate = $app->earliest_intake_date;
                                                    $earliest_intake_date = date("Y-M", strtotime($originalDate));
                                                    ?>
                                                    <select class="form-select">
                                                        <option value="">{{$earliest_intake_date}}</option>
                                                    </select>
                                                </span>
                                            </td>
                                            <td><span>Application Fee </span></td>
                                            <td><span>{{$app->application_fee_max}}</span></td>
                                            <td><span data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Application Note" class="application-note"> <a href="student_profile_review"><i class="fa-solid fa-note-sticky"></i></a> </span></td>
                                            <td class="action">
                                                <a href="" class="edit"><i class="fa-solid fa-pen-to-square fs-4"></i></a>
                                                <a href="" class="delete" data-bs-toggle="modal" data-bs-target="#user_delete{{$app->id}}"><i class="fa-solid fa-trash fs-4"></i></a>
                                                <div class="modal fade" id="user_delete{{$app->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center">
                                                                <h2>Are You Sure</h2>
                                                            </div>
                                                            <div class="modal-footer d-flex justify-content-between">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <form action="/removeApplication" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="app_id" id="app_id" value="{{$app->id}}">
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="9" style="text-align: center;">
                                                <div>
                                                    Woops! No application found
                                                </div>
                                            </td>
                                        </tr>
                                        @endforelse

                                    </tbody>
                                    <tfoot>
                                        <tr class="">
                                            <td colspan="7">
                                                <span class="float-end"> </span>
                                            </td>
                                            <td>
                                                <span> Total </span>
                                            </td>
                                            <td>
                                                <span> $100.00 CAD </span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-8">

                        </div>
                        <div class="col-md-4">
                            <div class="float-end">
                                <a href="">
                                    <button type="button" class="btn btn-outline-primary">Find More Programs</button>
                                </a>
                                <button type="button" class="btn btn-primary">Find More Programs</button>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="css-1lgqrjk css-1piu9jy1">
                                <div class="css-exg4v5 edqie6p13">
                                    <span aria-hidden="true" class="fa fa-shopping-cart"></span>
                                    <span>Paid Applications</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row overflow-hidden">
                        <div class="col-12">
                            <div class="myftable">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Status </th>
                                            <th scope="col">App ID</th>
                                            <th scope="col">School Name</th>
                                            <th scope="col">Program</th>
                                            <th scope="col">ESL Start Date</th>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">Fees</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Canceled</td>
                                            <td><a href="">1943519</a></td>
                                            <td><a href="">Centennial College - Progress</a></td>
                                            <td><span>Advanced College Diploma - Health <br />Informatics Technology (Optional Co-op) (3508)</span></td>
                                            <td>
                                                <span>ESL</span>
                                                <span> N/A </span>
                                            </td>
                                            <td>
                                                <span> Academic</span>
                                                <span> 2023 - Sep</span>
                                            </td>
                                            <td><span>Application Fee </span></td>
                                            <td><span data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Application Note" class="application-note"> <a href="student_profile_review"><i class="fa-solid fa-note-sticky"></i></a> </span></td>
                                            <td class="action">
                                                <a href="" class="edit"><i class="fa-solid fa-pen-to-square fs-4"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- Model -->
    <button style="display: none;" type="button" class="btn btn-primary" id="modelButton" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    </button>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 style="text-align: center;color: #FF0000;">Woops!!</h2>
                    <hr>
                    <h4>Looks like this program already in your application list</h4>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understand</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if ($isAlreadyAdded == '1')
<script>
    $(document).ready(function() {
        document.getElementById("modelButton").click();
    })
</script>
@endif
@endsection