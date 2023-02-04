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
<div class="page-content main-index">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-24">Dashboard</h4>
                    <div class="text-end"> 
                        <a class="btn btn-primary" href="">Contact Us</a>
                    </div>
                </div> 
            </div>
            <div class="col-md-12">
                <div class="myapplication-block">   
                    <div>
                        <ul class="timeline">
                            <li class="completed"> 
                                
                                <div class="card bg-light m-2">
                                    <div class="card-body bg-white">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="media"> 
                                                    <div class="create-profile">
                                                        <p>Create your profile</p>
                                                        <h5 class="text-dark"> Signup </h5>  
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="ViewMore">
                                                    <a class="" href="">View More</a>
                                                </div>
                                                 
                                            </div>
                                            <div class="col-md-4 m-auto">
                                                <div class="svg-img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g> <g xmlns="http://www.w3.org/2000/svg"> <g> <path d="M437.02,74.981C388.667,26.629,324.38,0,256,0S123.333,26.629,74.98,74.981C26.629,123.333,0,187.62,0,256 s26.629,132.667,74.98,181.019C123.333,485.371,187.62,512,256,512s132.667-26.629,181.02-74.981 C485.371,388.667,512,324.38,512,256S485.371,123.333,437.02,74.981z M256,482c-60.844,0-116.142-24.177-156.812-63.419 C121.212,351.287,184.487,305,256,305s134.788,46.287,156.813,113.582C372.142,457.823,316.844,482,256,482z M181,200 c0-41.355,33.645-75,75-75c41.355,0,75,33.645,75,75s-33.645,75-75,75C214.645,275,181,241.355,181,200z M435.34,393.354 c-22.07-51.635-65.404-90.869-117.777-108.35C343.863,265.904,361,234.918,361,200c0-57.897-47.103-105-105-105 c-57.897,0-105,47.103-105,105c0,34.918,17.137,65.904,43.438,85.004c-52.374,17.481-95.708,56.715-117.778,108.35 C47.414,355.259,30,307.628,30,256C30,131.383,131.383,30,256,30s226,101.383,226,226C482,307.628,464.586,355.259,435.34,393.354 z"></path> </g> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> </g></svg>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </li> 
                            <li class="upcoming">
                                
                                <div class="card bg-light m-2">
                                    <div class="card-body bg-white">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="media">
                                             
                                                    <div class="search-apply">
                                                        <p>Search and Apply Programs</p>
                                                        <h5 class="text-dark"> Application in Process  </h5>
                                                        
                                                        <div class="circle-shortlisted">
                                                            <ul>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="numbar" style="border:4px solid #2a4eea;">
                                                                            10
                                                                        </div> 
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="numbar" style="border:4px solid #064e3b;">
                                                                            13
                                                                        </div> 
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="numbar" style="border:4px solid #ff0303;">
                                                                           45
                                                                        </div> 
                                                                    </a>
                                                                </li> 
                                                                
                                                                
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                      
                                                </div>
                                            </div>
                                            <div class="col-md-3 m-auto">
                                                <div class="svg-img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g> <g xmlns="http://www.w3.org/2000/svg"> <g> <path d="M268.58,304.36c-7.18,0-13,5.82-13,13c-0.006,33.651-27.289,60.925-60.94,60.92c-33.651-0.006-60.926-27.289-60.92-60.94 c0.006-33.647,27.283-60.92,60.93-60.92c7.18,0,13-5.82,13-13s-5.82-13-13-13c-48.002,0.033-86.907,38.938-86.94,86.94 c0,48.013,38.922,86.935,86.935,86.935s86.935-38.922,86.935-86.935C281.58,310.18,275.76,304.36,268.58,304.36z"></path> </g> </g> <g xmlns="http://www.w3.org/2000/svg"> <g> <path d="M371.86,347.26c-1.24-7.072-7.978-11.8-15.05-10.56l-27.21,4.77c-4.977,0.872-8.998,4.55-10.31,9.43 c-2.901,10.768-7.194,21.112-12.77,30.77c-2.542,4.388-2.3,9.854,0.62,14l15.88,22.63c2.222,3.152,1.85,7.446-0.88,10.17 l-16.32,16.32c-2.72,2.728-7.008,3.104-10.16,0.89l-22.63-15.88c-4.146-2.92-9.612-3.162-14-0.62 c-9.657,5.577-20.001,9.87-30.77,12.77c-4.88,1.312-8.558,5.333-9.43,10.31L214,479.44c-0.661,3.795-3.958,6.564-7.81,6.56H183.1 c-3.852,0.004-7.148-2.765-7.81-6.56l-4.77-27.2c-0.872-4.977-4.55-8.998-9.43-10.31c-10.771-2.901-21.118-7.194-30.78-12.77 c-4.388-2.542-9.854-2.3-14,0.62l-22.59,15.87c-3.152,2.222-7.446,1.85-10.17-0.88l-16.32-16.32 c-2.724-2.721-3.099-7.006-0.89-10.16l15.88-22.63c2.919-4.146,3.162-9.612,0.62-14c-5.579-9.657-9.872-20.001-12.77-30.77 c-1.312-4.88-5.333-8.558-10.31-9.43l-27.2-4.77c-3.788-0.66-6.554-3.945-6.56-7.79v-23.09c-0.004-3.852,2.765-7.148,6.56-7.81 l27.2-4.77c4.977-0.872,8.998-4.55,10.31-9.43c2.896-10.78,7.189-21.134,12.77-30.8c2.542-4.388,2.299-9.854-0.62-14l-15.87-22.56 c-2.222-3.152-1.85-7.446,0.88-10.17l16.33-16.33c2.722-2.725,7.01-3.096,10.16-0.88l22.63,15.88c4.146,2.92,9.612,3.162,14,0.62 c9.661-5.577,20.008-9.87,30.78-12.77c4.88-1.312,8.558-5.333,9.43-10.31l4.77-27.2c1.24-7.072-3.488-13.81-10.56-15.05 s-13.81,3.488-15.05,10.56l-3.38,19.3c-7.414,2.449-14.631,5.458-21.59,9l-16.05-11.26c-13.484-9.488-31.841-7.888-43.48,3.79 l-16.38,16.27c-11.667,11.645-13.262,29.996-3.78,43.48l11.26,16.05c-3.543,6.961-6.552,14.182-9,21.6l-19.3,3.38 C11.802,275.248-0.02,289.344,0,305.81v23.09c-0.021,16.482,11.823,30.589,28.06,33.42l19.3,3.39 c2.448,7.414,5.457,14.632,9,21.59l-11.3,16.05c-9.479,13.486-7.88,31.837,3.79,43.48l16.33,16.32 c11.643,11.671,29.997,13.266,43.48,3.78l16-11.26c6.959,3.542,14.176,6.55,21.59,9l3.38,19.3 c2.848,16.244,16.978,28.078,33.47,28.03h23.09c16.486,0.02,30.593-11.829,33.42-28.07l3.39-19.3 c7.414-2.449,14.632-5.458,21.59-9l16.06,11.26c13.485,9.484,31.839,7.884,43.48-3.79l16.33-16.33 c11.67-11.643,13.269-29.994,3.79-43.48l-11.25-16c3.542-6.959,6.55-14.176,9-21.59l19.3-3.39 C368.372,361.07,373.1,354.332,371.86,347.26z"></path> </g> </g> <g xmlns="http://www.w3.org/2000/svg"> <g> <path d="M487.6,118l-13.6-2.38c-1.699-4.904-3.703-9.697-6-14.35L476,90c8.242-11.72,6.853-27.671-3.29-37.79L459.83,39.3 C449.706,29.136,433.731,27.742,422,36l-11.31,7.93c-4.653-2.298-9.446-4.302-14.35-6L394,24.39 C391.538,10.272,379.271-0.023,364.94,0h-18.19c-14.33-0.018-26.593,10.282-29.05,24.4L315.31,38 c-4.904,1.698-9.697,3.702-14.35,6l-11.31-8c-11.72-8.242-27.671-6.853-37.79,3.29L239,52.17 c-10.164,10.124-11.558,26.099-3.3,37.83l7.93,11.31c-2.298,4.653-4.302,9.446-6,14.35L224.08,118 c-14.114,2.462-24.408,14.723-24.39,29.05v18.19c-0.028,14.334,10.269,26.607,24.39,29.07l13.59,2.38 c1.698,4.904,3.702,9.697,6,14.35l-7.94,11.31c-8.243,11.716-6.863,27.664,3.27,37.79L251.86,273 c10.121,10.149,26.078,11.538,37.8,3.29l11.34-7.93c4.654,2.297,9.446,4.301,14.35,6l2.39,13.6 c2.462,14.114,14.723,24.408,29.05,24.39h18.19c14.331,0,26.582-10.317,29.02-24.44l2.38-13.59c4.904-1.698,9.697-3.702,14.35-6 L422,276.3c11.73,8.262,27.708,6.868,37.83-3.3l12.87-12.87c10.137-10.117,11.529-26.059,3.3-37.78L468.05,211 c2.297-4.654,4.301-9.446,6-14.35l13.6-2.39c14.083-2.476,24.352-14.711,24.35-29.01v-18.19 C512.023,132.726,501.722,120.458,487.6,118z M486,165.28c0.001,1.697-1.219,3.148-2.89,3.44l-21.44,3.76 c-4.977,0.872-8.998,4.55-10.31,9.43c-2.224,8.256-5.515,16.186-9.79,23.59c-2.542,4.388-2.3,9.854,0.62,14l12.51,17.84 c0.978,1.389,0.813,3.281-0.39,4.48l-12.86,12.86c-1.213,1.165-3.083,1.299-4.45,0.32l-17.87-12.5 c-4.146-2.92-9.612-3.162-14-0.62c-7.404,4.276-15.334,7.567-23.59,9.79c-4.87,1.328-8.531,5.356-9.39,10.33l-3.76,21.44 c-0.292,1.671-1.743,2.891-3.44,2.89h-18.2c-1.697,0.001-3.148-1.219-3.44-2.89L339.54,262c-0.872-4.977-4.55-8.998-9.43-10.31 c-8.259-2.224-16.192-5.515-23.6-9.79c-4.388-2.542-9.854-2.3-14,0.62L274.72,255c-1.389,0.978-3.281,0.813-4.48-0.39 l-12.86-12.86c-1.203-1.199-1.368-3.091-0.39-4.48l12.51-17.84c2.92-4.146,3.162-9.612,0.62-14 c-4.277-7.403-7.568-15.334-9.79-23.59c-1.331-4.866-5.358-8.523-10.33-9.38l-21.44-3.76c-1.671-0.292-2.891-1.743-2.89-3.44 l0.01-18.2c-0.001-1.697,1.219-3.148,2.89-3.44l21.43-3.77c4.977-0.872,8.998-4.55,10.31-9.43 c2.223-8.256,5.514-16.186,9.79-23.59c2.542-4.388,2.3-9.854-0.62-14L257,75c-0.978-1.389-0.813-3.281,0.39-4.48l12.87-12.87 c1.199-1.203,3.091-1.368,4.48-0.39l17.83,12.51c4.146,2.919,9.612,3.162,14,0.62c7.404-4.276,15.334-7.567,23.59-9.79 c4.88-1.312,8.558-5.333,9.43-10.31l3.76-21.44c0.306-1.641,1.731-2.835,3.4-2.85h18.19c1.697-0.001,3.148,1.219,3.44,2.89 l3.76,21.44c0.872,4.977,4.55,8.998,9.43,10.31c8.256,2.222,16.187,5.513,23.59,9.79c4.388,2.542,9.854,2.3,14-0.62L437,57.3 c1.389-0.978,3.281-0.813,4.48,0.39l12.87,12.87c1.169,1.204,1.316,3.068,0.35,4.44l-12.51,17.87c-2.92,4.146-3.162,9.612-0.62,14 c4.275,7.404,7.566,15.334,9.79,23.59c1.312,4.88,5.333,8.558,10.31,9.43l21.44,3.76c1.671,0.292,2.891,1.743,2.89,3.44V165.28z"></path> </g> </g> <g xmlns="http://www.w3.org/2000/svg"> <g> <path d="M355.84,94.05c-34.302,0-62.11,27.808-62.11,62.11c0.039,34.286,27.824,62.071,62.11,62.11 c34.302,0,62.11-27.808,62.11-62.11C417.95,121.858,390.142,94.05,355.84,94.05z M355.84,192.27 c-19.943,0-36.11-16.167-36.11-36.11c-0.005-19.953,16.157-36.138,36.11-36.16v0.05c19.943,0,36.11,16.167,36.11,36.11 C391.95,176.103,375.783,192.27,355.84,192.27z"></path> </g> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> <g xmlns="http://www.w3.org/2000/svg"> </g> </g></svg>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="upcoming">
                                 
                                <div class="card bg-light m-2">
                                    <div class="card-body bg-white">
                                        <div class="row">
                                            <div class="col-md-8">
                                                
                                                <div class="media"> 
                                             
                                                    <div class="upload-document">
                                                        <p>Upload Document</p>
                                                         
                                                        <div class="ViewMore">
                                                            <a class="" href="">View More</a>
                                                        </div>
                                                    </div>
                                                     
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4 m-auto">
                                                <div class="svg-img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="M22,13a1,1,0,0,0-1,1v4.213A2.79,2.79,0,0,1,18.213,21H5.787A2.79,2.79,0,0,1,3,18.213V14a1,1,0,0,0-2,0v4.213A4.792,4.792,0,0,0,5.787,23H18.213A4.792,4.792,0,0,0,23,18.213V14A1,1,0,0,0,22,13Z"></path><path xmlns="http://www.w3.org/2000/svg" d="M6.707,8.707,11,4.414V17a1,1,0,0,0,2,0V4.414l4.293,4.293a1,1,0,0,0,1.414-1.414l-6-6a1,1,0,0,0-1.414,0l-6,6A1,1,0,0,0,6.707,8.707Z"></path></g></svg>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div>
                                </div>
                                
                            </li>
                            
                            <li class="upcoming">
                                 
                                <div class="card bg-light m-2">
                                    <div class="card-body bg-white">
                                        <div class="row">
                                            <div class="col-md-8">
                                                
                                                <div class="media"> 
                                             
                                                    <div class="upload-document">
                                                        <p>And rest is on us. We will take care of you</p>
                                                          
                                                    </div>
                                                     
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4 m-auto">
                                                <div class="svg-img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"  x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="M30.57,28H38V26H33.24l4.88-4.25a1,1,0,0,0,.28-1.1,1,1,0,0,0-.93-.65H30v2h4.79l-4.87,4.25a1,1,0,0,0-.29,1.1A1,1,0,0,0,30.57,28Z" ></path><path xmlns="http://www.w3.org/2000/svg" d="M43.57,19H51V17H45.75l5.47-6.35a1,1,0,0,0,.16-1.07A1,1,0,0,0,50.47,9H43v2h5.28l-5.47,6.35A1,1,0,0,0,43.57,19Z"></path><path xmlns="http://www.w3.org/2000/svg" d="M22.29,36H26V34H24.47l2-2.35a1,1,0,0,0,.15-1.07,1,1,0,0,0-.91-.58H22v2h1.55l-2,2.35a1,1,0,0,0-.15,1.07A1,1,0,0,0,22.29,36Z"></path><path xmlns="http://www.w3.org/2000/svg" d="M59.5,30H45.24a3,3,0,0,0-2.69,1.66l0,.12-3.19,9.16L27.5,40A4.51,4.51,0,0,0,23,44.5,2.49,2.49,0,0,1,20.76,47,7,7,0,1,0,8.67,40a5,5,0,0,0-4.4,3.38,3.74,3.74,0,0,0-.87,7.2l11.24,4.32A.92.92,0,0,0,15,55H42.51a7,7,0,0,0,5-2h0l5.27-5.26,2.75,5.5A3.24,3.24,0,0,0,58.41,55a3.28,3.28,0,0,0,3-4.68L55.11,37H59.5a3.5,3.5,0,0,0,0-7ZM15,38a5,5,0,0,1,3,9H14.2l-3.48-1.45A4.86,4.86,0,0,1,10,43,5,5,0,0,1,15,38ZM8.05,42.16A7.89,7.89,0,0,0,8,43a6.75,6.75,0,0,0,.18,1.49l-1.87-.78A3,3,0,0,1,8.05,42.16ZM59.5,35H48a1,1,0,0,0-1,.68l-3,9a1,1,0,0,0,1.61,1.07l8-7.11,5.9,12.54a1.26,1.26,0,0,1-.08,1.23,1.33,1.33,0,0,1-2.23-.12l-3.37-6.74a1,1,0,0,0-.73-.54H53a1,1,0,0,0-.71.29l-6.24,6.25A5,5,0,0,1,42.51,53H15.19L4.12,48.74A1.74,1.74,0,0,1,3,47.12a1.68,1.68,0,0,1,.78-1.45,1.7,1.7,0,0,1,1.63-.16l8.21,3.41A1,1,0,0,0,14,49h6.5A4.51,4.51,0,0,0,25,44.5,2.49,2.49,0,0,1,27.42,42l12.5,1a1,1,0,0,0,1-.67l3.43-9.82a1,1,0,0,1,.87-.51H59.5a1.5,1.5,0,0,1,0,3Zm-7,2-5.37,4.77L48.72,37Z"></path></g></svg>                                               
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div>
                                </div>
                                
                            </li>
                              
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="col-md-9">
                 
                
                
                
                <div class="myapplication-block bg-white p-3 mt-2 mb-3">
                    <h4>My Applications</h4>
                    <div class="application-apply-holder">
                        <div class="icon-holder">
                            <i class="fa fa-file-text"></i>
                        </div>
                        <p><b> No applied application yet</b></p>
                        <h4>You have not applied to any application yet.</h4>
                        <a class="btn btn-primary" href="">Apply Now</a>
                    </div>
                    <!--<div class="myapplication-block"> -->
                    <!--    <div class="course-detail-wrap">-->
                    <!--        <div class="heading-holder">-->
                    <!--            <div class="align-left">-->
                    <!--                <strong class="heading-title"> Acadia University,Canada </strong>-->
                    <!--                <strong class="sub-txt">Intake: Jan,2024</strong>-->
                    <!--            </div>-->
                    <!--            <div class="align-right">-->
                    <!--                <a class="btn-submit" href="#">Started &amp; Submitted for options</a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="course-detail-holder">-->
                    <!--            <ul class="course-info-list">-->
                    <!--                <strong class="title-label">Preferred Course and Dfavo Potential Grant</strong>-->
                    <!--                <li>Bachelors of Community Development | 300 USD</li>-->
                    <!--                <strong class="title-label">Applied Course and Dfavo Guaranteed Grant</strong>-->
                    <!--                <li>Not Applied Yet</li>-->
                    <!--            </ul> -->
                    <!--            <div class="bottom-info">-->
                    <!--                <p>Created on: <span>22-Aug-2022</span></p>-->
                    <!--                <a class="button" href="#">-->
                    <!--                    <i class="fa-solid fa-pen-to-square"></i>-->
                    <!--                    <span class="text">Edit Application</span>-->
                    <!--                </a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                </div>
                 
                 
                <div class="myapplication-block">
                    <div class="overflow-auto">
                        <table class="table table-bordered" id="csmTable" role="grid">
                            <thead>
                                <tr role="row">
                                    <th><span>SAVING FROM </span></th>
                                    <th><span>SAVINGS</span></th>
                                    <th><span>Description</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td>You Saved </td>
                                    <td>USD ₹ 300</td>
                                    <td>--/--/----</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>Application Fee </td>
                                    <td>USD ₹0 </td>
                                    <td>Discount at time of application submission</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>Consultancy Fees </td>
                                    <td>USD ₹150 </td>
                                    <td>Discount 100% Visa Processing Fees</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end pt-3">
                            <!--<h5>Fee Reward - Rs 10,000 (You will be given cashback of Rs 10,000 after successful enrolment in your program.)</h5>-->
                            <nav aria-label="Page navigation example " class="d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
                
            </div>
            <div class="col-md-3">
                <div class="myapplication-block text-center bg-white mt-2">
                    <div class="card-body payment-cong-offer">
                        <h4>Congratulations</h4>
                        <h1>Sukhwindersingh</h1>
                        <h3>You have saved </h3>
                        <h2 class="rupay">RS 45000</h2>
                        <h5>as Apply Here Guaranteed Grant</h5>
                    </div>
                </div>
                
                <div class="bg-white p-3 d-flex mt-3">
                    <div class="dashboard-user-img">
                        <img src="assetsStudent/img/profile-icon.png" alt="">
                    </div>
                    <div class="ps-3 dashboard-user-content">
                        <h3>Jatin</h3>
                        <p>Client Manager</p>
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:+123456789">+123456789</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
 
    </div> 
</div>

@endsection