@extends('layouts.agent_app')
@section('content')
<div class="page-content h-100">
    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="team">Managing Team</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Member</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <h1>Add Member</h1>
            </div>
            @if (Session::has('Success'))
            <div class="alert alert-info">{{ Session::get('Success') }}</div>
            @endif
            @if (Session::has('Failed'))
            <div class="alert alert-danger">{{ Session::get('Failed') }}</div>
            @endif

            <div class="col-md-4 col-12">
                <form class="form1 rounded" action="store-team" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">MEMBER NAME</label>
                        <input type="text" class="form-control" name="name" id="validationCustom01" value="{{old('name')}}">
                        <span style="color: red">@error('name'){{ $message }}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">MEMBER EMAIL*</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" value="{{old('email')}}" placeholder="name@example.com">
                        <span style="color: red">@error('email'){{ $message }}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom04" class="form-label">MOBILE*</label>
                        <div class="d-flex">
                            <div class="w-25">
                                <select class="form-select" name="ccode" id="validationCustom04">
                                    <option selected="selected" value="+91">+91</option>
                                    <option value="+80">+80</option>
                                </select>
                               
                            </div>
                            <div class="w-75 ms-2">
                                <input type="text" class="form-control" name="mobile" id="validationCustom02" value="{{old('mobile')}}" placeholder="Enter Mobile Number">
                                <span style="color: red">@error('mobile'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">MEMBER PASSWORD*</label>
                        <input type="password" name="password" class="form-control" value="{{old('password')}}" id="exampleInputPassword1">
                        <span style="color: red">@error('password'){{ $message }}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom05" class="form-label">ADMIN</label>
                        <div>
                            <input type="radio" id="Yes" name="is_admin" {{ (old('is_admin') == '1') ? 'checked' : ''}} value="1">
                            <label for="Yes" class="pe-4">Yes</label>
                            <input type="radio" id="No" name="is_admin" value="0" {{ (old('is_admin') == '0') ? 'checked' : ''}}>
                            <label for="No">No</label><br/>
                            <span style="color: red">@error('is_admin'){{ $message }}@enderror</span>
                        </div>
                    </div>
                  <input type="hidden" name="agent_id" value="{{Auth::user()->id}}">
                <button type="submit" class="btn btn-primary">Add Member</button>
            </form>
            </div>
        </div>

    </div>
</div>   
@endsection