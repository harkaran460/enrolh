@extends('layouts.college_app')
@section('content')
<div class="page-content main-index h-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">All Programs</h4>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-12">
            <table class="table">
  <thead class="thead-dark" style="background: #2a3d49;">
    <tr>
      <th scope="col" style="color: #fff;">Program Name</th>
      <th scope="col" style="color: #fff;">Program College Name</th>
      <th scope="col" style="color: #fff;">Earliest Intake Date</th>
      <th scope="col" style="color: #fff;">Action</th>
    </tr>
  </thead>
  <tbody>
    @if(!empty($program_list))
        @foreach($program_list as $program)
        <tr>
            <th scope="row">{{$program->programs_name}}</th>
            <td>{{$program->program_college_name}}</td>
            <td>{{$program->earliest_intake_date}}</td>
            <td><button><a href="viewProgram/{{$program->id}}">View</a></button></td>
        </tr>
 
        @endforeach
        @endif 
  </tbody>
</table>

<div class="cpagination">{{$program_list->links('pagination::bootstrap-4')}}</div>

            </div>
        </div>

    </div> 
</div>
@endsection