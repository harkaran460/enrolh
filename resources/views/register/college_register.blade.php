<html>

<head>
    <meta charset="utf-8" />
    <title>College Registration</title>
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
    <section class="main-student-profile">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="setup-content" id="step-1">
                        <h5 class="heading-registration">College Registration</h5>
                        <div class="card p-2">
                            <form name="addCollegeForm" id="addCollegeForm" method="post" enctype="multipart/form-data"
                                action="javascript:void(0)">
                                @csrf
                                <div class="col-md-12" style="height: 1%;overflow: hidden;">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="error"></div>
                                            <div class="row">
                                                <div class="col">

                                                    <div class="form-group">
                                                        <label> College Name </label> <span class="red">*</span>
                                                        </label>
                                                        <input name="college_name" id="college_name" type="text"
                                                            class="form-control">
                                                            @if ($errors->has('college_name'))
                                                            <span class="text-danger" style="font-size: 15px;">{{ $errors->first('college_name') }}</span>
                                                            @endif
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label> Email </label> <span class="red">*</span> </label>
                                                        <input name="email" id="email" type="email"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label> Password </label> <span class="red">*</span> </label>
                                                        <input name="password" id="password" type="password"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label> College Country Name</label> <span
                                                            class="red">*</span> </label>
                                                        <select class="form-select" name="college_country"
                                                            id="college_country" aria-label="Default select example">
                                                            <option value="">Select College Country</option>
                                                            @foreach ($countries as $country)
                                                                <option value="{{ $country->id }}">
                                                                    {{ $country->country }}
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Status</label> <span class="red">*</span> </label>
                                                        <select class="form-select" name="college_status"
                                                            id="college_status" aria-label="Default select example">
                                                            <option value="">Select College Status</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label> College Address </label> <span class="red">*</span>
                                                        </label>
                                                        <input name="college_address" id="college_address"
                                                            type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h3 class="form-heading">Cost and Duration</h3>
                                                <div class="form-group">
                                                    <label>Application fee</label> <span class="red">*</span>
                                                    </label>
                                                    <input type="text" name="application_fee" id="application_fee"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Average graduate program</label> <span
                                                        class="red">*</span> </label>
                                                    <input type="text" name="average_graduate_program"
                                                        id="average_graduate_program" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Average undergraduate program</label> <span
                                                        class="red">*</span> </label>
                                                    <select name="average_undergraduate_program"
                                                        id="average_undergraduate_program" class="form-select">
                                                        <option value="">Select Average undergraduate program
                                                        </option>
                                                        <option value="1 Year">1 Year</option>
                                                        <option value="2 Year">2 Year</option>
                                                        <option value="3 Year">3 Year</option>
                                                        <option value="4 Year">4 Year</option>
                                                        <option value="5 Year">5 Year</option>
                                                        <option value="6 Year">6 Year</option>
                                                        <option value="7 Year">7 Year</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Cost of living</label> <span class="red">*</span>
                                                    </label>
                                                    <input type="text" id="cost_of_living" name="cost_of_living"
                                                        class="form-control">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h3 class="form-heading">Institution Details</h3>
                                                <div class="form-group">
                                                    <label>Founded </label> <span class="red">*</span> </label>
                                                    <select name="founded" id="founded" class="form-select">
                                                        <option value="">Select Founded</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1999">1999</option>
                                                        <option value="2000">2000</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>School ID </label> <span class="red">*</span> </label>
                                                    <input type="text" id="school_id" name="school_id"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Provider ID number </label>
                                                    <input type="text" id="provider_id_number"
                                                        name="provider_id_number" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Institution type </label> <span class="red">*</span>
                                                    </label>
                                                    <select name="institution_type" id="institution_type"
                                                        class="form-select">
                                                        <option value="">Select Institution type</option>
                                                        <option value="Public">Public</option>
                                                        <option value="Private">Private</option>
                                                        <option value="Only Me">Only Me</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <button type="submit" id="submit"
                                                    class="btn btn-primary btn-submit"
                                                    onclick="collegeRegister();">Register</button>
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

<script>
    function collegeRegister() {
        let college_name = $('#college_name').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let college_country = $('#college_country').val();
        let college_status = $('#college_status').val();
        let college_address = $('#college_address').val();
        let application_fee = $('#application_fee').val();
        let average_graduate_program = $('#average_graduate_program').val();
        let average_undergraduate_program = $('#average_undergraduate_program').val();
        let cost_of_living = $('#cost_of_living').val();
        let founded = $('#founded').val();
        let school_id = $('#school_id').val();
        let provider_id_number = $('#provider_id_number').val();
        let institution_type = $('#institution_type').val();
        let atposition = email.indexOf("@");
        let dotposition = email.lastIndexOf(".");

        if (college_name == '') {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please enter college name.</div>'
            );
            $("input[name='college_name']").focus();
            return false;
        } else if (email == "") {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please enter email id.</div>'
            );
            $("input[name='email']").focus();
            return false;
        } else if (
            atposition < 1 ||
            dotposition < atposition + 2 ||
            dotposition + 2 >= email.length
        ) {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please enter valid email id.</div>'
            );
            $("input[name='email']").focus();
            return false;
        } else if (password == "") {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please enter password.</div>'
            );
            $("input[name='password']").focus();
            return false;
        } else if (college_country == "") {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please select country.</div>'
            );
            $("input[name='college_country']").focus();
            return false;
        } else if (college_status == "") {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please select college status.</div>'
            );
            $("input[name='college_status']").focus();
            return false;
        } else if (college_address == "") {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please enter college address</div>'
            );
            $("input[name='college_address']").focus();
            return false;
        } else if (application_fee == "") {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please enter application fee.</div>'
            );
            $("input[name='application_fee']").focus();
            return false;
        } else if (average_graduate_program == "") {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please enter average graduate program.</div>'
            );
            $("input[name='average_graduate_program']").focus();
            return false;
        } else if (average_undergraduate_program == "") {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please select average undergraduate program.</div>'
            );
            $("input[name='average_undergraduate_program']").focus();
            return false;
        } else if (cost_of_living == "") {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please enter cost of living.</div>'
            );
            $("input[name='cost_of_living']").focus();
            return false;
        } else if (founded == "") {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please select founded.</div>'
            );
            $("input[name='founded']").focus();
            return false;
        } else if (school_id == "") {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please enter school id    .</div>'
            );
            $("input[name='school_id']").focus();
            return false;
        } else if (institution_type == "") {
            $("#error").html(
                '<div class="alert alert-danger" role="alert">Please select institution type.</div>'
            );
            $("input[name='institution_type']").focus();
            return false;
        } else {
            var base_path = '{{ url('/') }}';
            let token = $("input[name=_token]").val();
            let data = $("#addCollegeForm").serialize();
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": token,
                },
                url: base_path + "/process-college-signup",
                data: data,
                type: "POST",
                success: function(result) { 
                    if (result === "email_exist") {
                    $("#error").html(
                        '<div class="alert alert-danger" role="alert">The email has already been taken.</div>'
                    );
                }else{
                    $("#error").html(
                        '<div class="alert alert-success" role="alert">Your account has been created kindly login with email and password.</div>'
                    );
                    window.location.replace("/login");
                }
                   
                },
            });

        }
    }
</script>

</html>
