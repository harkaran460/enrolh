@extends('layouts.agent_app')
@section('content')
    <div class="page-content h-100 p-15 mx-1">
        
        <div class="container-fluid res-mt-3">
            <div class="row">
                @if (Session::has('Success'))
                <div class="alert alert-info">{{ Session::get('Success') }}</div>
            @endif

            @if (Session::has('Failed'))
            <div class="alert alert-danger">{{ Session::get('Failed') }}</div>
        @endif
                <div class="col-md-12">
                    <div class="d-flex justify-content-end mb-3 "> 
                    
                        <a href="add-sub-agent"><button type="button" class="btn btn-primary">Add Sub Agent</button></a>
                    </div>
                </div>
                <div class="col-md-12">
                   @if($sub_agent_list)
                    <div class="overflow-auto">
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>#</th>
                            <th>SUB AGENT</th>
                            <th>MOBILE</th>
                            <th>EMAIL</th>
                            <th>COUNTRY | STATE | CITY</th>
                            <th>CONTACT PERSON</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                        <?php $count =1; ?>
                        @foreach ( $sub_agent_list as $agent_list )
        
                        <tr class="text-center">
                            <td>{{$count}}</td>
                            <td>{{$agent_list->name}}</td>
                            <td>{{$agent_list->mobile}}</td>
                            <td>{{$agent_list->email}}</td>
                            <td>{{$agent_list->country}} | {{$agent_list->state}} | {{$agent_list->city}}</td>
                            <td>{{$agent_list->contact_person}}</td>
                            <td><a href="change-sub-agent-status/{{$agent_list->id}}"> <?php if($agent_list->status ==1){ echo "<span>Active</span>";}else{echo "<span>Deactive</span>";}?></a></td>
                            <td class="action">
                                    <a href="sub_agent-update/{{$agent_list->id}}" class="edit"><i class="fa-solid fa-pen-to-square fs-4"></i></a>
                                    <a href="delete-sub-agent/{{$agent_list->id}}" class="delete" ><i
                                            class="fa-solid fa-trash fs-4"></i></a>
                                            
                                </td>
                        </tr>
                        <?php $count ++;?>
                        @endforeach 
                    </table>
                    </div>
                   @else
                    <table class="table border">
                        <td class="w-100 text-center">No Records</td>
                    </table>
                    @endif 
                </div>
                <div class="col-md-12 mt-3 "> 
                    <div class="row res-mt-3">
                        <div class="col-md-6 d-flex"> 
                            <span class="pe-3">Show results</span>
                            <form method="GET" action="/sub_agent" id="agentqty"> 
                                <select class="form-select form-select-sm"  name="agentqty" onchange="this.form.submit()">
                                    <option value="" selected>Select</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="all">All</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="pagination-wrapper text-end">
                                {{ $sub_agent_list->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    <style>
        .flex.justify-between.flex-1.sm\:hidden {
            display: none;
        }
    </style>
@endsection