<html>

<head>
    <meta charset="utf-8" />
    <title>Student Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <link rel="stylesheet" type="text/css" href="assetsStudent/css/ion.rangeSlider.min.css" />
    <link href="assetsStudent/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assetsStudent/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assetsStudent/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css">
    <link href="assetsStudent/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assetsStudent/css/style.css">
    <link rel="stylesheet" type="text/css" href="assetsStudent/css/responsive.css">
</head>

<body>
    @php $countries = getCountry();@endphp
    @php $states = getState();@endphp
    @php $cities = getcity();@endphp
    <section class="main-student-profile">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="setup-content" id="step-1">
                        <h1 class="f-18 fs-3 text-black fw-bold">Student Registration</h1>
                        <div class="card p-2 pt-4 mt-4">
                            <form method="POST" action="/process_signup">
                                @csrf
                                <div class="card-body">
                                    <div class="personal-information">
                                        <h4>Personal Information</h4>
                                        <h5>(As indicated on your passport)</h5>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> First Name <span class="red">*</span> </label>
                                                    <input name="first_name" type="text" class="form-control" value="{{old('first_name')}}" placeholder="Enter First Name...">
                                                    @if ($errors->has('first_name'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('first_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Middle Name </label>
                                                    <input name="middle_name" type="text" class="form-control" value="{{old('middle_name')}}" placeholder="Enter Middle Name...">
                                                    @if ($errors->has('middle_name'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('middle_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Last Name </label>
                                                    <input name="last_name" type="text" class="form-control" value="{{old('last_name')}}" placeholder="Enter Last Name...">
                                                    @if ($errors->has('last_name'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('last_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Date of Birth <span class="red">*</span> </label>
                                                    <input name="date_of_birth" type="date" class="form-control" value="{{old('date_of_birth')}}">
                                                    @if ($errors->has('date_of_birth'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('date_of_birth') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> First Language <span class="red">*</span> </label>
                                                    <input name="first_language" type="text" class="form-control" value="{{old('first_language')}}" placeholder="Enter First Language ...">
                                                    @if ($errors->has('first_language'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('first_language') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Country of Citizenship <span class="red">*</span> </label>
                                                    <select name="country_of_citizenship" id="" class="form-select" value="{{old('country_of_citizenship')}}" aria-label="Default select example">
                                                    
                                                    <option>select country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">
                                                            {{ $country->country }}
                                                        </option>
                                                    @endforeach
                                                        
                                                    </select>
                                                    @if ($errors->has('first_language'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('country_of_citizenship') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Passport Number
                                                        <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="We collect your passport information for identity verification purposes, your school or program of interest may require this information to process your application. If applicable, it may also be used for processing your visa."></i>
                                                        <span class="red">*</span>
                                                    </label>
                                                    <input name="passport_number" type="tel" class="form-control" value="{{old('passport_number')}}" placeholder="Enter Passport Number...">
                                                    @if ($errors->has('passport_number'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('passport_number') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group radio-main">
                                                    <label> Marital Status
                                                        <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="We collect information about your marital status because your school or program of interest may require this information to process your application."></i>
                                                        <span class="red">*</span>
                                                    </label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="marital_status" value="Single" id="flexRadioDefault1" {{(old('marital_status') == 'Single') ? 'checked' : ''}} checked>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Single
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="marital_status" value="Married" {{(old('marital_status') == 'Married') ? 'checked' : ''}} id="flexRadioDefault2">
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Married
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group radio-main">
                                                    <label> Gender <span class="red">*</span> </label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault3" {{(old('gender') == 'Female') ? 'checked' : ''}} checked>
                                                                <label class="form-check-label" for="flexRadioDefault3">
                                                                    Female
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gender" value="Male" {{(old('gender') == 'Male') ? 'checked' : ''}} id="flexRadioDefault4">
                                                                <label class="form-check-label" for="flexRadioDefault4">
                                                                    Male
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="address-detail">
                                        <h4>Address Detail</h4>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label> Address <span class="red">*</span> </label>
                                                    <input name="address" type="text" class="form-control" value="{{old('address')}}" placeholder="Enter Full Address...">
                                                    @if ($errors->has('address'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('address') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> City/Town <span class="red">*</span> </label>
                                                    <select name="city_town" id="city_town" class="form-select" aria-label="Default select example">
                                                        <option value="">Select City/Town</option>
                                                        @foreach ($cities as $city)
                                                        <option value="{{ $city->id }}">
                                                            {{ $city->city }}
                                                        </option>
                                                    @endforeach
                                                    </select>
                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Country <span class="red">*</span> </label>
                                                    <select name="country" id="country" class="form-select" aria-label="Default select example">
                                                        <option value="">Select country</option>
                                                         @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">
                                                            {{ $country->country }}
                                                        </option>
                                                    @endforeach
                                                    </select>
                                                    @if ($errors->has('country'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('country') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Province/State <span class="red">*</span> </label>
                                                    <select name="province_state" id="" class="form-select" aria-label="Default select example">
                                                        <option value="">Select State</option>
                                                        @foreach ($states as $state)
                                                        <option value="{{ $state->id }}">
                                                            {{ $state->state }}
                                                        </option>
                                                    @endforeach
                                                    </select>
                                                    @if ($errors->has('province_state'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('province_state') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Postal/Zip Code <span class="red">*</span> </label>
                                                    <input name="postal_code" type="text" class="form-control" value="{{old('postal_code')}}" placeholder="Enter Pin Code...">
                                                    @if ($errors->has('postal_code'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('postal_code') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Email <span class="red">*</span> </label>
                                                    <input name="email" type="email" class="form-control" value="{{old('email')}}" placeholder="Enter Email...">
                                                    @if ($errors->has('email'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Password <span class="red">*</span> </label>
                                                    <input name="password" type="password" class="form-control" value="{{old('password')}}" placeholder="Enter Password...">
                                                    @if ($errors->has('password'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('password') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> Phone Number <span class="red">*</span> </label>
                                                    <input name="phone_number" type="tel" class="form-control" value="{{old('phone_number')}}" placeholder="Enter Phone Number...">
                                                    @if ($errors->has('phone_number'))
                                                    <span class="text-danger" style="font-size: 15px;">{{ $errors->first('phone_number') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-md-3">
                                            <div class="col-md-12">
                                                <button class="btn-next nextBtn float-end" type="submit">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    </div>


</body>


<script src="assetsStudent/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
<script src="assetsStudent/js/bootstrap.bundle.min.js"></script>
<script src="assetsStudent/js/metisMenu.min.js"></script>

<script src="assetsStudent/js/select2.min.js"></script>

<script src="assetsStudent/js/ecommerce-select2.init.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script src="assetsStudent/js/ion.rangeSlider.min.js"></script>
<!-- Range slider init js-->
<script src="assetsStudent/js/range-sliders.init.js"></script>


<!-- App js -->
<script src="assetsStudent/js/app.js"></script>
<script src="assetsStudent/js/main.js"></script>

</html>