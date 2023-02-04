@extends('layouts.agent_app')
@section('content')
@php $countries     = getCountry();@endphp
@php $getEducations = getEducation();@endphp
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <!--<div class="col-12">-->
                <!--    <div class="alert alert-warning alert-dismissible fade show fs-5 py-2" role="alert">-->
                <!--        Exciting new updates on how to manage your leads. <a href="#">Click here to learn more</a> or-->
                <!--        <a href="">switch back to the new layout</a>.-->
                <!--        <button type="button" class="btn-close py-2" data-bs-dismiss="alert" aria-label="Close"-->
                <!--            style="top: 5px;"></button>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-12 d-flex flex-row justify-content-between align-items-center">
                    <h1 class="f-18">Students</h1>
                    <!--only pc-->
                    <div class="d-flex flex-row">
                        <a href="/students" class="btn border rounded-pill mb-3 border-danger" > Back </a>

                        <button class="btn border rounded-pill mb-3 ms-1 border-danger" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#student-filters" aria-controls="student-filters"><i
                                class="fa-solid fa-filter"></i> Filters </button>

                        <!--<div class="dropdown">-->
                        <!--    <button class="btn dropdown-toggle bg af-icon border-0" type="button" id="dropdownMenuButton1"-->
                        <!--        data-bs-toggle="dropdown" aria-expanded="false">-->
                        <!--        <i class="fa-solid fa-plus me-2"></i>Add new student-->
                        <!--    </button>-->
                        <!--    <ul class="dropdown-menu shadow bg-light p-0" aria-labelledby="dropdownMenuButton1">-->
                        <!--        <li><a class="dropdown-item active" href="#">Action</a></li>-->
                        <!--        <li><a class="dropdown-item" href="#">Another action</a></li>-->
                        <!--        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->

                        <div>
                            <button type="button" class="btn btn-primary rounded-pill ms-1 mb-3" data-bs-toggle="modal"
                                data-bs-target="#addNewStudent"><i class="fa-solid fa-plus me-2"></i> Add new
                                Student</button>
                        </div>

                        
                       
                        
                        <div class="modal fade" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" style="max-width: 600px;">
                        
                                <form action="" method="POST" id="student_regi">
                                    @csrf
                                    <div class="modal-content" id="new-students">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div id="error"></div>
                                        <div id="success"></div>
                                        <div class="modal-body " style="height: 600px; overflow-Y: scroll;">
                                            <p>Please provide a legitimate email address for your student that is actively monitored by them.
                                                Their country is required to forward applications to our partner schools. Note: ApplyBoard will
                                                not communicate with your student via email or other methods.</p>
                        
                                            <div class="mb-3">
                                                <label class="form-label">CONTACT INFORMATION</label>
                                                <input type="email" name="email" class="form-control mb-3" placeholder="Email">
                                                <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">PERSONAL INFORMATION</label>
                                                <input type="text" class="form-control mb-3" name="fname" placeholder="Given Name">
                                                <input type="text" class="form-control mb-3" name="lname" placeholder="Last Name">
                                                <input type="text" class="form-control mb-3" name="family_name" placeholder="Family Name">
                                                    
                                                <!--<input type="date" class="form-control mb-3" name="dob" placeholder="Birth Date">-->
                                                
                                                <input type="text" id="datepicker" name="dob" class="form-control mb-3"  placeholder="Birth Date">
                                                
                                                <select class="form-select " name="citizenship" aria-label="Default select example">
                                                    <option selected>Country of Citizenship</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">
                                                            {{ $country->country }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 gndr-ads">
                                                <label class="form-label">Gender</label>
                                                <div class="d-flex flex-row sg">
                                                    <div class="w-100 me-3 d-flex align-items-center">
                                                        <input class="mt-1 d-none" type="radio" name="gender" id="radiomale"
                                                            value="male" checked>
                                                        <label class="w-100 pt-3 ps-2" for="radiomale">Male</label>
                                                    </div>
                                                    <div class="w-100 d-flex align-items-center">
                                                        <input class="mt-1 d-none" type="radio" name="gender" value="female"
                                                            id="radiofemale">
                                                        <label class="w-100 pt-3 ps-2" for="radiofemale">Female</label>
                                                    </div>
                        
                                                </div>
                                            </div>
                                           
                                            <div class="form-check">
                                                <input class="form-check-input" name="term_conditions" type="checkbox" value="1"
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I confirm that I have received express written consent from the student whom I am creating
                                                    this profile for and I can provide proof of their consent upon request. To learn more please
                                                    refer to the <a href="#">Personal Data Consent</a> article.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn px-4" style="background-color: #FFE5E4;"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <input type="hidden" id="agent_id" name="agent_id" value="{{ Auth::user()->id }}">
                                            <button type="button" class="btn btn-primary px-4 bg float-end"
                                                onclick="student_regi_agent();">Create Student</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                    </div>
                    

                    <!--------------------Filter-------------------->
                    <div class="offcanvas offcanvas-start p-2" tabindex="-1" id="student-filters"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h3 class="offcanvas-title fs-4">Hide/Show Columns</h3>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">

                            <ul class="nav nav-pills mb-3 d-flex flex-row flex-nowrap" id="pills-tab" role="tablist">
                                <li class="nav-item w-100" role="presentation">
                                    <button class="nav-link active w-100" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Columns</button>
                                </li>
                                <li class="nav-item w-100" role="presentation">
                                    <button class="nav-link w-100" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false" >Disabled</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="student-filters-tabs">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <ul class="p-0 m-0 column-check">
                                        <!--<li><span>COLUMN HEADER</span> <a href="javacsript:;" id="student_all_hide">hide all</a></li>-->
                                        <li>
                                            <hr class="w-100 my-0">
                                        </li> 
                                        <li><span>Student ID</span> <input class="form-check-input" type="checkbox"
                                                value="" id="studentId"><label id="studentId_click" class="form-check-label"
                                                for="studentId">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Student Email</span> <input class="form-check-input" type="checkbox"
                                                value="" id="studentEmail"><label id="studentemail_click" class="form-check-label"
                                                for="studentEmail">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>First Name</span> <input class="form-check-input" type="checkbox"
                                                value="" id="fName"><label id="fname_click" class="form-check-label"
                                                for="fName">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Last Name</span> <input class="form-check-input" type="checkbox"
                                                value="" id="lName"><label id="lname_click" class="form-check-label"
                                                for="lName">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Nationality</span> <input class="form-check-input" type="checkbox"
                                                value="" id="nationlty"><label id="nationlty_click" class="form-check-label"
                                                for="nationlty">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruitment Partner</span> <input class="form-check-input"
                                                type="checkbox" value="" id="recuPart"><label id="recruitmentp_click"
                                                class="form-check-label" for="recuPart">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li>
                                            <span>Recruiter Type</span> 
                                            <input class="form-check-input" type="checkbox" value="" id="recuType">
                                            <label id="recruiter_click" class="form-check-label" for="recuType">
                                                <i class="fa-solid fa-eye"></i>
                                            </label>
                                            
                                        </li>
                                        <li><span>Education</span> <input class="form-check-input" type="checkbox"
                                                value="" id="education"><label id="education_click" class="form-check-label"
                                                for="education">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Applications</span> <input class="form-check-input" type="checkbox"
                                                value="" id="application"><label id="application_click" class="form-check-label"
                                                for="application">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                       <ul class="p-0 m-0 column-check disabled-section" id="disabled-section">
                                          <li class="studentid_hide" style="display:none"><span>Student ID</span> <input class="form-check-input" type="checkbox"
                                                value="" id="studentId"><label id="studentId_click" class="form-check-label"
                                                for="studentId">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                             
                                        <li class="studentemail_hide" style="display:none"><span>Student Email</span> <input class="form-check-input" type="checkbox"
                                                value="" id="studentEmail"><label id="studentemail_click" class="form-check-label"
                                                for="studentEmail">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li class="fname_hide" style="display:none"><span>First Name</span> <input class="form-check-input" type="checkbox"
                                                value="" id="fName"><label id="fname_click" class="form-check-label"
                                                for="fName">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li class="lname_name" style="display:none"><span>Last Name</span> <input class="form-check-input" type="checkbox"
                                                value="" id="lName"><label id="lname_click" class="form-check-label"
                                                for="lName">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li class="nationality_hide" style="display:none"><span>Nationality</span> <input class="form-check-input" type="checkbox"
                                                value="" id="nationlty"><label id="nationlty_click" class="form-check-label"
                                                for="nationlty">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li class="recruitmentp_hide" style="display:none"><span>Recruitment Partner</span> <input class="form-check-input"
                                                type="checkbox" value="" id="recuPart"><label id="recruitmentp_click"
                                                class="form-check-label" for="recuPart">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li class="recuiter_t_hide" style="display:none">
                                            <span>Recruiter Type</span> 
                                            <input class="form-check-input" type="checkbox" value="" id="recuType">
                                            <label id="recruiter_click" class="form-check-label" for="recuType">
                                                <i class="fa-solid fa-eye"></i>
                                            </label>
                                            
                                        </li>
                                        <li class="education_hide" style="display:none"><span>Education</span> <input class="form-check-input" type="checkbox"
                                                value="" id="education"><label id="education_click" class="form-check-label"
                                                for="education">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li class="appplication_hide" style="display:none"><span>Applications</span> <input class="form-check-input" type="checkbox"
                                                value="" id="application"><label id="application_click" class="form-check-label"
                                                for="application">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                           </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--------------------Filter-------------------->

                </div>
            </div>

        </div>

        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-12">
                    <div class="row overflow-hidden bg-white" id="student-table">
                        <div class="col-12 position-relative">
                            <div class="myftable">
                                <table class="table">
                                    <thead>
                                        <tr style="border-bottom: 2px solid #0000001f;">
                                            <th class="text-center" scope="col">Actions</th>
                                            <th class="text-center studentid_hide" scope="col" class="">Student ID</th>
                                            <th class="text-center studentemail_hide" scope="col" class="">Student Email</th>
                                            <th class="text-center fname_hide" scope="col" class="">First Name</th>
                                            <th class="text-center lname_name" scope="col" class="">Last Name</th>
                                            <th class="text-center nationality_hide" scope="col" class="">Nationality</th>
                                            <th class="text-center recruitmentp_hide" scope="col" class="">Recruitment Partner</th>
                                            <th class="text-center recuiter_t_hide" scope="col" class="">Recruiter Type</th>
                                            <th class="text-center education_hide" scope="col" class="">Education</th>
                                            <th class="text-center appplication_hide" scope="col" class="">Applications</th>
                                            <th class="text-center appplication_hide" scope="col" class="">View</th>
                                        </tr>
                                        
                                        <tr>
                                            <td></td>
                                            <form method="GET" action="/students" id="frmStudentFilter">
                                                <td class="studentid_hide"><input type="text" name="student_id" class="form-control"></td>
                                                <td class="studentemail_hide">
                                                    <input type="text" name="email" class="form-control" style="width:220px;">
                                                </td>
                                                <td class="fname_hide">
                                                    <input type="text" name="fname" class="form-control" style="width:150px;">
                                                </td>
                                                <td class="fname_hide">
                                                    <input type="text" name="lname" class="form-control" style="width:120px;">
                                                </td>
                                                <td class="lname_name">
                                                    <select class="form-select" name="nationality" id="nationality" onchange="this.form.submit()" style="width:150px;">
                                                        <option value="">-- select one --</option>
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}">
                                                                {{ $country->country }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                  
                                                </td>
                                                <td class="nationality_hide">
                                                    <input type="text"name="rpartner" class="form-control" style="width:220px;">
                                                </td>
                                                <td class="recuiter_t_hide">
                                                    <select type="select" name="recruiter_type" class="form-select" onchange="this.form.submit()" style="width: 150px;">
                                                        <option value=""> None</option>
                                                        <option value="5"> Owner</option>
                                                        <option value="8">Sub Agent</option>
                                                        <option value="11">Team</option>
                                                        <option value="12">Staff</option>
                                                    </select>
                                                </td>
                                                <td class="education_hide">
                                                    <select type="text" name="education" class="form-select" onchange="this.form.submit()" style="width: 250px;">
                                                        <option value=""> None</option>
                                                        @foreach ($getEducations as $getEducation)
                                                        <option value="{{ $getEducation->id }}">
                                                            {{ $getEducation->title }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="appplication_hide"> 
                                                   
                                                </td>
    
                                                <td class="appplication_hide"> 
                                                    
                                                </td>
                                            </form>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @if (count($student_list) >0)
                                            @foreach ($student_list as $studentlist)
                                                <tr>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <button class="btn border-0" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="/search-and-apply/{{ $studentlist->id }}"><i
                                                                            class="bi bi-search"></i> Search and Apply</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="/agent-student-profile/{{ $studentlist->id }}"><i
                                                                            class="bi bi-person"></i> Edit Profile</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="/student-profile-application/{{ $studentlist->id }}"><i
                                                                            class="bi bi-file-earmark-text"></i> Manage
                                                                        Applications</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td class="text-center studentid_hide"><a href="/agent-student-profile/{{ $studentlist->id }}">{{ $studentlist->id }}</a></td>
                                                    <td class="text-center studentemail_hide"><a href="/agent-student-profile/{{ $studentlist->id }}">{{ $studentlist->email }}</a></td>
                                                    <td class="text-center fname_hide"><span>{{ $studentlist->name }}</span></td>
                                                    <td class="text-center lname_name"><span>{{ $studentlist->last_name }}</span></td>
                                                    <td class="text-center nationality_hide"><span>{{ $studentlist->country_of_citizenship }}</span></td>
                                                    <td class="text-center recruitmentp_hide"><span>{{ $studentlist->recruitment_partner }}</span></td>
                                                    <td class="text-center recuiter_t_hide"><span>
                                                        <?php if($studentlist->recruiter_type ==5){echo "Owner"; }else if($studentlist->recruiter_type ==8){echo "Sub Agent";}else if($studentlist->recruiter_type ==11){echo "Team";}else{echo "Staff";}?></span></td>
                                                    <td class="text-center education_hide"><span><i
                                                                class="fa-solid fa-check me-2"></i>{{ $studentlist->highes_education_name }}
                                                            ({{ $studentlist->country_of_citizenship }})
                                                        </span></td>
                                                    <td class="text-center appplication_hide">
                                                        <ul>
                                                            @if (!empty($total_apply_count))
                                                                @foreach ($total_apply_count as $totalcount)
                                                                    @if ($totalcount->student_id == $studentlist->id)
                                                                        <li>
                                                                            <div class="text-white" data-bs-toggle="tooltip" data-bs-placement="left" title="score of application">
                                                                                {{ $totalcount->count }}</div>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            @endif

                                                        </ul>
                                                    </td>
                                                    <td class="text-center appplication_hide">
                                                        @if (!empty($total_apply_count))
                                                         @foreach ($total_apply_count as $totalcount)
                                                            @if ($totalcount->student_id == $studentlist->id)
                                                                @if($totalcount->count >0)
                                                       <a href="/student-profile-application/{{$studentlist->id}}">View </a>
                                                     @endif
                                                     @endif
                                                     @endforeach
                                                 @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <th scope="col">
                                                    <span class="fw-bold">No Teams Please Create One.</span>
                                                </th>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="row justify-content-start align-items-center py-3">

                    <div class="dropdown col-lg-2 col-sm-2 d-flex flex-row border-end pe-2 mt-3">
                        <span class="d-flex align-items-center me-2">Row:</span>
                        <form method="GET" action="/students" id="students">
                            <select class="form-select form-select-sm" name="studentqty" onchange="this.form.submit()">
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </form>
                    </div>

                    <nav aria-label="Page navigation example" class="mt-1 px-3 col-lg-10 col-sm-12 resp-nav">
                        <div class="pagination-wrapper">
                            {{ $student_list->links() }}
                        </div>

                        <!--<ul class="pagination p-0 m-0 pe-3">-->
                        <!--    <li class="page-item">-->
                        <!--        <a class="page-link" href="#" aria-label="Previous">-->
                        <!--            <span aria-hidden="true">&laquo;</span>-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--    <li class="page-item"><a class="page-link" href="#">1</a></li>-->
                        <!--    <li class="page-item"><a class="page-link" href="#">2</a></li>-->
                        <!--    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                        <!--    <li class="page-item">-->
                        <!--        <a class="page-link" href="#" aria-label="Next">-->
                        <!--            <span aria-hidden="true">&raquo;</span>-->
                        <!--        </a>-->
                        <!--    </li>-->
                        <!--</ul>-->
                        <!--<span class="d-flex align-items-center border-startps-2">1 - 20 of 292</span>--> 

                    </nav>
                </div>
            </div>
        </div>
    </div>
     <style>
    .filter{
        
    }
    .add-student{
       background-color: #0057CA !important;
       color: #fff;
    }
    
    #student-table table tbody tr td ul li div{
        background:#E3EAFA;
        color: #4A5568;
;
    }
    
        table input, table select{
            border-radius:4px !important;
        }
        .btn-vew-main:hover{
            background-color: #2b50ed !important;
            color: #fff !important;
            border:none !important;
        }
        .btn-vew-main{
            background-color:#e2e5ef !important;
            height:30px !important;
            width:50px !important;
            line-height:0 !important;
            border-radius:6px !important;
            border: none !important;
            
        }
        #student-table table tbody tr td ul li div{
            background-color:#E3EAFA !important;
        }
       .tooltip-inner {
         background-color: grey !important;
  /*!important is not necessary if you place custom.css at the end of your css calls. For the purpose of this demo, it seems to be required in SO snippet*/
         /*color: #fff;*/
}
.btn-new-jetmain{
    background-color:#FFFFFF;
    border:1px solid #2663EB !important;
    border-radius: 6px;
    color:#2663EB;
    
}
.btn-new-jetmain:hover{
    background: #FFFFFF;
    border: 1px solid #2663EB !important;
    border-radius: 6px;
    color:#2663EB;
}
   
    </style>
    
@endsection
