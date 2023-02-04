@extends('layouts.agent_app')
@section('content')
<div class="page-content h-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Wallet Transactions</h1>
                </div>
                <div class="col-md-12">
                    <div class="overflow-auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>APPLICATION ID</th>
                                    <th>CURRENCY</th>
                                    <th>OPENING BALANCE</th>
                                    <th>TRANSACTION AMOUNT </th>
                                    <th>TYPE</th>
                                    <th>CLOSING BALANCE</th>
                                    <th>STATUS</th>
                                    <th>REMARKS</th>
                                    <th>DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>20553062</td>
                                    <td> INR </td>
                                    <td> 200000 </td>
                                    <td> 1000 </td>
                                    <td> A/C </td>
                                    <td> 190000 </td> 
                                    <td>
                                        <span class="bg-warning px-2 py-1 rounded-pill text-white text-white">Cancelled</span>
                                    </td>
                                    <td>Yes</td>
                                    <td>2022-03-28</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div> 
        </div>
    </div>
@endsection