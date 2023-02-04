<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/mainAssets/assets/css/style.css">

    <title>Enrolhere Login!</title>
</head>

<body>

    <section class="vh-100">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-5 shadow login text-center py-5 px-0">
                    <small class="">log in with your email and password
                    </small>
                    <form action="" method="POST" action="{{ route('login') }}" class="px-5 py-3">
                        @csrf
                        <div class="input-group mb-3 shadow">
                            <span class="input-group-text border-0 bg-white"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" id="email" class="form-control border-0 py-2" placeholder="Username" name="email" :value="old('email')" required autofocus>
                        </div>
                        <div class="input-group mb-3 shadow">
                            <span class="input-group-text border-0 bg-white"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" id="password" class="form-control border-0 py-2" placeholder="Password" name="password" required autocomplete="current-password">
                        </div>
                        {{-- <div class="input-group mb-3 shadow">
                            <span class="input-group-text border-0 bg-white"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" id="confirm_password" class="form-control border-0 py-2" placeholder="Confirm Password" name="confirm_password" required autocomplete="current-password">
                        </div> --}}

                        <div class="col-md-12" style="color:red; font-weight: 700;">
                            @foreach ($errors->all() as $error)
                            {{ $error }}
                            @endforeach
                        </div>
                        @if(Session::has('message'))
                        <div class="col-md-12" style="color:green; font-weight: 700;">
                            <span>{{ Session::get('message') }}</span>
                        </div>
                        @endif

                        <div class="form-check text-start my-auto">
                            <input class="form-check-input" id="remember" name="remember" type="checkbox">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember username.
                            </label>
                        </div>
                        <button class="btn bg rounded-pill px-4 mt-4" type="submit">Log in</button>
                    </form>
                    <hr>
                    <div class="px-5">
                        <small class="">Or log in with</small>
                        <ul class="gfa  p-0 my-4">
                            <a href="{{ url('auth/google') }}">
                                <li><button class="btn bg-white d-flex justify-content-center flex-row align-items-center"><img src="https://assets.applyboard.com/assets/google_icon-ff03329e9210ea5e5f371147b192e613719b5c980161efb63274f5e4ebf76a2b.svg" alt="" class="me-2" style="width: 20px">Google</button></li>
                            </a>
                            <a href="{{ url('auth/facebook') }}">
                                <li><button class="btn bg-white d-flex justify-content-center flex-row align-items-center"><img src="https://assets.applyboard.com/assets/facebook_icon-a60cfd276717b9946c317861f9439be1faf5518e382e436d8a59fca67c93f49b.svg" alt="" class="me-2" style="width: 20px">Facebook</button></li>
                            </a>
                            <a href="">
                                <li><button class="btn bg-white d-flex justify-content-center flex-row align-items-center"><i class="fa-brands fa-apple fs-4 me-2"></i>Apple</button></li>
                            </a>
                        </ul>
                        <div class="d-flex justify-content-between">
                            <span class="fs-5"><a href="{{'password/reset'}}" class="">Forgot password?</a></span>
                            {{-- <span class="fs-5"><a href="#" class="">Locked Account?</a></span> --}}
                        </div>

                    </div>
                    
                    <!--<div>Hello world</div>-->
                    
                    <div class="d-flex justify-content-center pt-4">
                       <p class="fs-6">Not a member?</p> &nbsp; <a href="https://design.enrolhere.com/student_register">Register now</a> 
                    </div>

                </div>
                <div class="col-md-7 d-md-block d-none">
                    <img src="mainAssets/assets/img/sdasdad.png" class="w-100" alt="">
                </div>
            </div>

        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>