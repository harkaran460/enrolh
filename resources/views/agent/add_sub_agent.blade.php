@extends('layouts.agent_app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--<h3>Add New Sub Agent</h3>-->
                </div>
        
                @if (Session::has('Failed'))
                    <div class="alert alert-danger">{{ Session::get('Failed') }}</div>
                @endif
                
                <div class="col-md-4 col-12 tt">
                    <form class="rounded" action="store-sub-agent" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Sub Agent Name <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="validationCustom01" name="name"
                                value="{{ old('name') }}">
                            <span style="color: red">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address<span
                                    class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                value="{{ old('email') }}" placeholder="name@example.com">
                            <span style="color: red">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password*</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                                id="exampleInputPassword1">
                            <span style="color: red">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        
                </div>
                <div class="col-md-4 col-12 tt">
                    <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Country<span
                                    class="text-danger">*</span></label>
                            <span style="color: red">
                                @error('country')
                                    {{ $message }}
                                @enderror
                            </span>
                            <select class="form-select" id="agentcountry" name="country">
                                <option selected value="">Select</option>
                                @if ($countries)
                                    @foreach ($countries as $country)
                                   
                                        <option {{ old('country') == $country->id  ? "selected" : "" }} value="{{ $country->id }}">{{ $country->country }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">State<span
                                    class="text-danger">*</span></label>
                            <span style="color: red">
                                @error('state')
                                    {{ $message }}
                                @enderror
                            </span>
            
                            <select class="form-select" id="agentstate" name="state" >
                                <option selected value="">Select</option>
                                
                            </select>
                        </div>
                        <input type="hidden" name="hstate" id="hstate" value="">
                        <input type="hidden" name="hcity" id="hcity" value="">
                        <div class="mb-3">
                            <label for="exampleFormControlInput4" class="form-label">City<span
                                    class="text-danger">*</span></label>
                            <span style="color: red">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </span>
                            <select class="form-select" id="agentcity" name="city" value="{{ old('city') }}">
                                <option selected value="">Select</option>
                               
                            </select>
                        </div>
                    </div>
                    
                     <div class="col-md-4 col-12 tt">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contact Person<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="contact_person"
                                value="{{ old('contact_person') }}">
                            <span style="color: red">
                                @error('contact_person')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        
                        <div class="mb-3">
                            <label for="validationCustom04" class="form-label">MOBILE*</label>
                            <span style="color: red">
                                @error('ccode')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="d-flex">
                                <div class="w-25">
                                    <select class="form-select" id="validationCustom04" id="ccode" name="ccode">
                                        <option selected value="+91">+91</option>
                                        <option value="+80">+80</option>
                                    </select>
                                </div>
                                <div class="w-75 ms-2">
                                    <span style="color: red">
                                        @error('mobile')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <input type="text" class="form-control" id="validationCustom02" name="mobile"
                                        value="{{ old('mobile') }}" placeholder="Enter Mobile Number">
                                </div>
                            </div>
                        </div>
                          <div class="mb-3">
                            <label for="validationCustom05" class="form-label">ADMIN</label>
                            <span style="color: red">
                                @error('is_admin')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div>
                                <input type="radio" id="Yes" value="1" name="is_admin" {{ (old('is_admin') == '1') ? 'checked' : ''}}>
                                <label for="Yes" class="pe-4">Yes</label>
                                <input type="radio" id="No" value="0" name="is_admin"
                                {{ (old('is_admin') == '1') ? 'checked' : ''}}>
                                <label for="No">No</label>
                            </div>
                        </div>
                </div>
                <div class="col-md-12">
                    <input type="hidden" name="agent_id" value="{{ Auth::user()->id }}">
                    <button type="submit" class="btn btn-primary">Add Sub Agent</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        /*.tt {*/
        /*    height: 100vh;*/
        /*    overflow: scroll;*/
        /*}*/
    </style>
@endsection