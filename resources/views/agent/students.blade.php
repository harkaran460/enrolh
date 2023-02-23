@extends('layouts.agent_app')
@section('content')
@php $countries     = getCountry();@endphp
@php $getEducations = getEducation();@endphp
<div class="modal fade customModalView" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 600px;">
        <form action="" method="POST" id="student_regi" style="pointer-events:auto;">
            @csrf
            <div class="panel m-0">
                <div class="pHead">
                    <span class="h5">Add New Student</span>
                    <div class="control"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                </div>
                <div class="pBody">
                    <div id="error"></div>
                    <div id="success"></div>
                    <span class="text">Please provide a legitimate email address for your student that is actively monitored by them. Their country is required to forward applications to our partner schools. Note: ApplyBoard will not communicate with your student via email or other methods.</span>
                    <span class="h5">CONTACT INFORMATION</span>
                    <div class="row">
                        <div class="form-group col">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col">
                            <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <span class="h5">PERSONAL INFORMATION</span>
                    <div class="row">
                        <div class="form-group col">
                            <input type="text" class="form-control" name="fname" placeholder="Given Name">
                        </div>
                        <div class="form-group col">
                            <input type="text" class="form-control" name="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="text" class="form-control" name="family_name" placeholder="Family Name">
                        </div>
                        <div class="form-group col">
                            <input type="date" id="datepicker" name="dob" class="form-control"  placeholder="Birth Date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <select class="form-select " name="citizenship" aria-label="Default select example">
                                <option selected>Country of Citizenship</option>
                                @foreach ($countries as $country)<option value="{{ $country->id }}">{{ $country->country }}</option>@endforeach
                            </select>
                        </div>
                        <div class="form-group col d-flex align-items-center">
                            <label class="form-label">Gender</label>
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input m-0" type="radio" name="gender" id="radiomale" value="male" checked>
                                <label class="form-check-label ms-1" for="radiomale">Male</label>
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input m-0" type="radio" name="gender" value="female" id="radiofemale">
                                <label class="form-check-label ms-1" for="radiofemale">Female</label>
                            </div>
                        </div>
                    </div>
                   <div class="form-check">
                       <input class="form-check-input" name="term_conditions" type="checkbox" value="1" id="flexCheckDefault">
                       <label class="form-check-label text" for="flexCheckDefault">I confirm that I have received express written consent from the student whom I am creating this profile for and I can provide proof of their consent upon request. To learn more please refer to the <a href="#">Personal Data Consent</a> article.</label>
                   </div>
                    <div class="btnGroup">
                        <input type="hidden" id="agent_id" name="agent_id" value="{{ Auth::user()->id }}">
                        <button type="button" class="btn btn-secondary" style="background-color: #FFE5E4;" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="student_regi_agent();">Create Student</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="mainTitle">
    <span class="h4">Students</span>
    <div class="controls">
        <a href="/students" class="btn btn-primary"><i class="fa-solid fa-arrow-left me-1"></i> Back</a>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#student-filters" aria-controls="student-filters"><i class="fa-solid fa-filter me-1"></i> Filters</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewStudent"><i class="fa-solid fa-plus me-1"></i>Add new Student</button>
    </div>
</div>
<div class="studentSection">
    <div class="tableGridView">
        <div class="table-responsive">
            <table class="table tableCustomStudent">
                <thead>
                    <tr>
                        <th class="studentid_hide">Student ID</th>
                        <th class="studentemail_hide">Student Email</th>
                        <th class="fname_hide">First Name</th>
                        <th class="lname_name">Last Name</th>
                        <th class="nationality_hide">Nationality</th>
                        <th class="recruitmentp_hide">Recruitment Partner</th>
                        <th class="recuiter_t_hide">Recruiter Type</th>
                        <th class="education_hide">Education</th>
                        <th class="text-center appplication_hide">Applications</th>
                        <th class="text-center action_hide">View</th>
                        <th class=""></th>
                    </tr>
                    <tr>
                        <form method="GET" action="/students" id="frmStudentFilter">
                            <th class="size1 studentid_hide"><input type="text" name="student_id" class="form-control"></th>
                            <th class="size6 studentemail_hide"><input type="text" name="email" class="form-control"></th>
                            <th class="size2 fname_hide"><input type="text" name="fname" class="form-control"></th>
                            <th class="size2 lname_name"><input type="text" name="lname" class="form-control"></th>
                            <th class="size3 nationality_hide"><select class="form-select" name="nationality" id="nationality" onchange="this.form.submit()"><option value="">-- Select --</option>@foreach ($countries as $country)<option value="{{ $country->id }}">{{ $country->country }}</option>@endforeach</select></th>
                            <th class="size4 recruitmentp_hide"><input type="text"name="rpartner" class="form-control"></th>
                            <th class="size3 recuiter_t_hide"><select type="select" name="recruiter_type" class="form-select" onchange="this.form.submit()"><option value="">None</option><option value="5">Owner</option><option value="8">Sub Agent</option><option value="11">Team</option><option value="12">Staff</option></select></th>
                            <th class="size6 education_hide"><select type="text" name="education" class="form-select" onchange="this.form.submit()"><option value=""> None</option>@foreach ($getEducations as $getEducation)<option value="{{ $getEducation->id }}">{{ $getEducation->title }}</option>@endforeach</select></th>
                            <th class="size3 appplication_hide"></th>
                            <th class="size1 action_hide"></th>
                        </form>
                        <th class="size"></th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($student_list) >0)
                        @foreach ($student_list as $studentlist)
                            <tr>
                                <td class="studentid_hide"><a href="/agent-student-profile/{{ $studentlist->id }}">{{ $studentlist->id }}</a></td>
                                <td class="studentemail_hide"><a href="/agent-student-profile/{{ $studentlist->id }}">{{ $studentlist->email }}</a></td>
                                <td class="text-center fname_hide"><span>{{ $studentlist->name }}</span></td>
                                <td class="text-center lname_name"><span>{{ $studentlist->last_name }}</span></td>
                                <td class="text-center nationality_hide"><span>{{ $studentlist->country_of_citizenship }}</span></td>
                                <td class="recruitmentp_hide"><span>{{ $studentlist->recruitment_partner }}</span></td>
                                <td class="text-center recuiter_t_hide"><span><?php if($studentlist->recruiter_type ==5){echo "Owner"; }else if($studentlist->recruiter_type ==8){echo "Sub Agent";}else if($studentlist->recruiter_type ==11){echo "Team";}else{echo "Staff";}?></span></td>
                                <td class="education_hide"><span class="text"><i class="fa-solid fa-check"></i>{{ $studentlist->highes_education_name }} ({{ $studentlist->country_of_citizenship }})</span></td>
                                <td class="text-center appplication_hide">@if (!empty($total_apply_count)) @foreach ($total_apply_count as $totalcount) @if ($totalcount->student_id == $studentlist->id)<div class="scoreView" data-bs-toggle="tooltip" data-bs-placement="left" title="score of application">{{ $totalcount->count }}</div> @endif @endforeach @endif</td>
                                <td class="text-center action_hide">@if (!empty($total_apply_count)) @foreach ($total_apply_count as $totalcount) @if ($totalcount->student_id == $studentlist->id) @if($totalcount->count >0) <a href="/student-profile-application/{{$studentlist->id}}">View </a> @endif @endif @endforeach @endif</td>
                                <td class="action action_hide">
                                    <div class="dropdown dropstart">
                                        <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                        <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="/search-and-apply/{{ $studentlist->id }}"><i class="bi bi-search"></i> Search and Apply</a></li>
                                            <li><a class="dropdown-item" href="/agent-student-profile/{{ $studentlist->id }}"><i class="bi bi-person"></i> Edit Profile</a></li>
                                            <li><a class="dropdown-item" href="/student-profile-application/{{ $studentlist->id }}"><i class="bi bi-file-earmark-text"></i> Manage Applications</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="11" style="background-color:#fff;">
                                <span class="fw-bold">No Teams Please Create One.</span>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="tableFooter">
            <div class="controls">
                Row: 
                <form method="GET" action="/students" id="students">
                    <select class="form-select form-select-sm" name="studentqty" onchange="this.form.submit()">
                        <option value="20" @php if(isset($_GET['studentqty']) && $_GET['studentqty'] == '20'){echo "selected";} @endphp >20</option>
                        <option value="50" @php if(isset($_GET['studentqty']) && $_GET['studentqty'] == '50'){echo "selected";} @endphp >50</option>
                        <option value="100" @php if(isset($_GET['studentqty']) && $_GET['studentqty'] == '100'){echo "selected";} @endphp >100</option>
                    </select>
                </form>
                
            </div>
            <div class="controls">{{ $student_list->links() }}</div>
        </div>
    </div>
</div>
<div class="filtersViewRight offcanvas offcanvas-end" tabindex="-1" id="student-filters" aria-labelledby="offcanvasExampleLabel">
    <div class="panel m-0">
        <div class="pHead">
            <span class="h5">Hide/Show Columns</span>
            <div class="control">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
        </div>
        <div class="pBody">
            <ul class="nav nav-tabs customTabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation"><button class="nav-link active" id="columnsTab" data-bs-toggle="tab" data-bs-target="#columnsTabPane">Columns</button></li>
                <li class="nav-item" role="presentation"><button class="nav-link" id="disabledTab" data-bs-toggle="tab" data-bs-target="#disabledTabPane">Disabled</button></li>
            </ul>    
            <div class="tab-content" id="student-filters-tabs">
                <div class="tab-pane fade show active column-check" id="columnsTabPane" role="tabpanel" aria-labelledby="columnsTabPane">
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
                                            <li><span>Action</span> <input class="form-check-input" type="checkbox"
                                                value="" id="action"><label id="action_click" class="form-check-label"
                                                for="action">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                    </ul>
                </div>
                <div class="tab-pane fade column-check disabled-section" id="disabledTabPane" role="tabpanel" aria-labelledby="disabledTabPane-tab">
                <ul class="p-0 m-0 column-check disabled-section" id="disabled-section">
                                          <li class="studentid_hide" style="display:none"><span>Student ID</span> <input class="form-check-input" type="checkbox"
                                                value="" id="studentId"><label id="studentId_click" class="form-check-label"
                                                for=" ">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                             
                                        <li class="studentemail_hide" style="display:none"><span>Student Email</span> <input class="form-check-input" type="checkbox"
                                                value="" id="studentEmail"><label id="studentemail_click" class="form-check-label"
                                                for=" ">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li class="fname_hide" style="display:none"><span>First Name</span> <input class="form-check-input" type="checkbox"
                                                value="" id="fName"><label id="fname_click" class="form-check-label"
                                                for=" ">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li class="lname_name" style="display:none"><span>Last Name</span> <input class="form-check-input" type="checkbox"
                                                value="" id="lName"><label id="lname_click" class="form-check-label"
                                                for=" ">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li class="nationality_hide" style="display:none"><span>Nationality</span> <input class="form-check-input" type="checkbox"
                                                value="" id="nationlty"><label id="nationlty_click" class="form-check-label"
                                                for=" ">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li class="recruitmentp_hide" style="display:none"><span>Recruitment Partner</span> <input class="form-check-input"
                                                type="checkbox" value="" id="recuPart"><label id="recruitmentp_click"
                                                class="form-check-label" for=" ">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li class="recuiter_t_hide" style="display:none">
                                            <span>Recruiter Type</span> 
                                            <input class="form-check-input" type="checkbox" value="" id="recuType">
                                            <label id="recruiter_click" class="form-check-label" for=" ">
                                                <i class="fa-solid fa-eye"></i>
                                            </label> 
                                        </li>
                                        <li class="education_hide" style="display:none"><span>Education</span>
                                         <input class="form-check-input" type="checkbox"
                                                value="" id="education"><label id="education_click" class="form-check-label"
                                                for=" ">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li class="appplication_hide" style="display:none"><span>Applications</span> <input class="form-check-input" type="checkbox"
                                                value="" id="application"><label id="application_click" class="form-check-label"
                                                for=" ">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                           </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection