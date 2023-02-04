@extends('layouts.agent_app')
@section('content')
<div class="page-content h-100 p-15 mx-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div>
                    <h1>Conversation Reminders</h1>
                </div>
            </div>

            <div class="col-md-12">
                <div class="overflow-auto">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>#</th>
                            <th>TRAINING TYPE</th>
                            <th>PREFER SCHEDULE(S)</th>
                            <th>SCHEDULED AT</th>
                            <th>PERFORM BY</th>
                            <th>ACTION</th>
                        </tr>
                    </table>
                </div>
                <table class="table border">
                    <td class="w-100 text-center">No Training List</td>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection