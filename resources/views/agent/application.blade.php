@extends('layouts.agent_app')
@section('content')
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
                            <input type="text" id="datepicker" name="dob" class="form-control"  placeholder="Birth Date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Country of Citizenship</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
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
    <span class="h4">Applications</span>
    <div class="controls">
        <button class="btn btn-primary">Apply Filter</button>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#student-filters" aria-controls="student-filters"><i class="fa-solid fa-filter me-1"></i> Filters </button>
        <a class="btn border btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#addNewStudent"><i class="fa-solid fa-plus me-1"></i>Add new student</a>
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
                <li class="nav-item" role="presentation"><button class="nav-link active" id="filtersTab" data-bs-toggle="tab" data-bs-target="#filtersTabPane">Filters</button></li>
                <li class="nav-item" role="presentation"><button class="nav-link" id="columnsTab" data-bs-toggle="tab" data-bs-target="#columnsTabPane">Columns</button></li>
            </ul>
            <div class="tab-content" id="student-filters-tabs">
                <div class="tab-pane fade show active aplly-filter apply_fliter_check" id="filtersTabPane" role="tabpanel" aria-labelledby="filtersTabPane">
                    <div class="columnFilter"><span>SCHOOL COUNTRY</span></div>
                    <div class="form-group">
                        <label>Select country</label>
                        <select class="form-select">
                            <option selected>All</option>
                            <option value="Australia">Australia</option>
                            <option value="Ireland">Ireland</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <div class="columnFilter"><span>PAYMENT STATUS</span><a href="#">Clear</a></div>
                    <div class="columnFilter">
                        <label class="form-check-label " for="inlineRadio1">Yes</label>
                        <label class="form-check-label ">No</label>
                    </div>
                    <div class="columnFilter">
                        <input class="form-check-input " type="radio" name="payment_statues" id="payYes" value="option1">
                        <input class="form-check-input " type="radio" name="payment_statues" id="payNo" value="option2">
                        <label class="form-label">Paid</label>
                    </div>
                    <div class="columnFilter"><span>APPLICATION STATUS</span><a href="#">Clear</a></div>
                    <div class="columnFilter">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                        <label class="form-check-label">No</label>
                    </div>
                    <div class="columnFilter">
                        <input class="form-check-input" type="radio" name="appplication_status_accepted" id="prepareApplication_t" value="option1">
                        <input class="form-check-input" type="radio" name="appplication_status_accepted" id="prepareApplication_f" value="option2">
                        <label class="form-label">Prepare Application</label>
                    </div>
                    <div class="columnFilter">
                        <input class="form-check-input" type="radio" name="appplication_status_rejected" id="submissionInProg_t" value="option1">
                        <input class="form-check-input" type="radio" name="appplication_status_rejected" id="submissionInProg_f" value="option2">
                        <label class="form-label">Submission In Progress</label>
                    </div>
                    <div class="columnFilter">
                        <input class="form-check-input" type="radio" name="appplication_status_canceled" id="decision_t" value="option1">
                        <input class="form-check-input" type="radio" name="appplication_status_canceled" id="decision_f" value="option2">
                        <label class="form-label">Decision</label>
                    </div>
                    <div class="columnFilter">
                        <input class="form-check-input" type="radio" name="appplication_status_withdrawn" id="postDecisionReq_t" value="option1">
                        <input class="form-check-input" type="radio" name="appplication_status_withdrawn" id="postDecisionReq_f" value="option2">
                        <label class="form-label">Post-Decision Requirements</label>
                    </div>
                    <div class="columnFilter">
                        <input class="form-check-input" type="radio" name="appplication_status_refundprogress" id="readyToSubmit_t" value="option1">
                        <input class="form-check-input" type="radio" name="appplication_status_refundprogress" id="readyToSubmit_f" value="option2">
                        <label class="form-label">Ready to Submit</label>
                    </div>
                    <div class="columnFilter">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="submittedToSchool_t" value="option1">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="submittedToSchool_f" value="option2">
                        <label class="form-label">Submitted To School</label>
                    </div>
                    <div class="columnFilter">
                        <input class="form-check-input" type="radio" name="appplication_status_program_closed" id="readyForVisa_t" value="option1">
                        <input class="form-check-input" type="radio" name="appplication_status_program_closed" id="readyForVisa_f" value="option2">
                        <label class="form-label">Ready for Visa</label>
                    </div>
                    <div class="columnFilter">
                        <input class="form-check-input" type="radio" name="appplication_status_deferralprogress" id="ReadyToEnroll_t" value="option1">
                        <input class="form-check-input" type="radio" name="appplication_status_deferralprogress" id="ReadyToEnroll_f" value="option2">
                        <label class="form-label">Ready to Enroll</label>
                    </div>
                    <div class="columnFilter">
                        <input class="form-check-input" type="radio" name="appplication_status_waitlisted" id="applicationCancelled_t" value="option1">
                        <input class="form-check-input" type="radio" name="appplication_status_waitlisted" id="applicationCancelled_f" value="option2">
                        <label class="form-label">Application Cancelled</label>
                    </div>
                    <div class="columnFilter">
                        <input class="form-check-input " type="radio" name="appplication_status_readyenroll" id="enrollmentconf_t" value="option1">
                        <input class="form-check-input " type="radio" name="appplication_status_readyenroll" id="enrollmentconf_f" value="option2">
                        <label class="form-label">Enrollment Confirmed</label>
                    </div>
                    <div class="btnGroup">
                        <button class="btn btn-secondary">Clear All Filter</button>
                        <button class="btn btn-primary" onclick="filtercheck()">Apply Filter</button>
                    </div>
                </div>
                <div class="tab-pane fade column-check" id="columnsTabPane" role="tabpanel" aria-labelledby="columnsTabPane">

                <ul class="p-0 m-0 column-check">
                                        <li><span>COLUMN HEADER</span> <a href="javacsript:;" id="application_all_hide">hide all</a></li>
                                        <li>
                                            <hr class="w-100 my-0">
                                        </li>
                                        <li><span>App ID</span> <input class="form-check-input" type="checkbox" value="" id="appId_app"><label class="form-check-label" for="appId_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                             <li><span>Student ID</span> <input class="form-check-input" type="checkbox" value="" id="studentId_app"><label class="form-check-label" for="studentId_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Apply Date</span> <input class="form-check-input" type="checkbox" value="" id="applyDate_app"><label class="form-check-label" for="applyDate_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>First Name</span> <input class="form-check-input" type="checkbox" value="" id="firstName_app"><label class="form-check-label" for="firstName_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Last Name</span> <input class="form-check-input" type="checkbox" value="" id="lastName_app"><label class="form-check-label" for="lastName_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Status</span> <input class="form-check-input" type="checkbox" value="" id="status_app"><label class="form-check-label" for="status_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruitments</span> <input class="form-check-input" type="checkbox" value="" id="recruitments_app"><label class="form-check-label" for="recruitments_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Current Stage</span> <input class="form-check-input" type="checkbox" value="" id="currentStage_app"><label class="form-check-label" for="currentStage_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Program</span> <input class="form-check-input" type="checkbox" value="" id="program_app"><label class="form-check-label" for="program_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>School</span> <input class="form-check-input" type="checkbox" value="" id="school_app"><label class="form-check-label" for="school_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Start Date</span> <input class="form-check-input" type="checkbox" value="" id="startDate_app"><label class="form-check-label" for="startDate_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                        <li><span>Recruitment Partner</span> <input class="form-check-input" type="checkbox" value="" id="recruitfmentPartner_app"><label class="form-check-label" for="recruitfmentPartner_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                            <li><span>Payment Date</span> <input class="form-check-input" type="checkbox" value="" id="paymentDate_app"><label class="form-check-label" for="paymentDate_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                            <li><span>Action</span> <input class="form-check-input" type="checkbox" value="" id="action_app"><label class="form-check-label" for="action_app">
                                                <i class="fa-solid fa-eye"></i>
                                            </label></li>
                                    </ul>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="studentSection">
    <div class="tableGridView">
        <div class="table-responsive">
            <table class="table tableCustomStudent">
                <thead>
                    <tr>
                        <th class="appId_hide_app">App ID</th>
                        <th class="studentId_hide_app">Student ID</th>
                        <th class="applyDate_hide_app">Apply Date</th>
                        <th class="firstName_hide_app">First Name</th>
                        <th class="lastName_hide_app">Last Name</th>
                        <th class="status_hide_app">Status</th>
                        <th class="requirements_hide_app">Requirements</th>
                        <th class="currentStage_hide_app">Current Stage</th>
                        <th class="program_hide_app">Program</th>
                        <th class="school_hide_app">School</th>
                        <th class="startDate_hide_app">Start Date</th>
                        <th class="recruitmentPartner_hide_app">Recruitment Partner</th>
                        <th class="paymentDate_hide_app">Payment Date</th>
                        <th class="action_app_hide">View</th>
                        <th></th>
                    </tr>
                    <form method="GET" action="/agentApplication" id="frmApplicationFilter">
                        <tr>
                            <th><input type="text" class="form-control" name="appid"></th>
                            <th><input type="text" class="form-control" name="student_id"></th>
                            <th></th>
                            <th><input type="text" class="form-control" name="fname"></th>
                            <th><input type="text" class="form-control" name="lname"></th>
                            <th></th>
                            <th><select class="form-select" name="requirements" aria-label="Default select example" onchange="this.form.submit()"><option selected>---</option><option value="Missing">Missing</option><option value="Reviewing">Reviewing</option><option value="Reviewing - None Outstanding">Reviewing - None Outstanding</option><option value="Not Approved">Not Approved</option><option value="Complete">Complete</option></select></th>
                            <th><select class="form-select" aria-label="Default select example" name="current_status" onchange="this.form.submit()"><option selected>---</option><option value="Pre-Payment">Pre-Payment</option><option value="Pre-Submission">Pre-Submission</option><option value="Submission">Submission</option><option value="Post-Submission">Post-Submission</option><option value="Admission">Admission</option><option value="Visa-Application">Visa-Application</option><option value="Pre-Arrival">Pre-Arrival</option><option value="Post Arrival/Commission">Post Arrival/Commission</option><option value="Arrival">Arrival</option></select></th>
                            <th><input type="text" class="form-control" name="program_name"></th>
                            <th><input type="text" class="form-control" name="school_name"></th>
                            <th>
                                <div class="fromToDate">
                                    <div class="ui calendar" id="rangestart1"><div class="ui input left icon"><i class="calendar icon"></i><input type="text" name="application_start_date" placeholder="Start" onchange="this.form.submit()"></div></div>
                                    <div class="ui calendar" id="rangeend1"><div class="ui input left icon"><i class="calendar icon"></i><input type="text" name="application_end_date" placeholder="End" onchange="this.form.submit()"></div></div>
                                </div>
                            </th>
                            <th scope="col"><input type="text" class="form-control" name="requirement_partner" style="width: 200px;"></th>
                            <th scope="col">
                                <div class="fromToDate">
                                    <div class="ui calendar" id="rangestart"><div class="ui input left icon"><i class="calendar icon"></i><input type="text" name="payment_start_date" placeholder="Start" onchange="this.form.submit()"></div></div>
                                    <div class="ui calendar" id="rangeend"><div class="ui input left icon"><i class="calendar icon"></i><input type="text" name="payment_end_date"  placeholder="End" onchange="this.form.submit()"></div></div>
                                </div>
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </form>
                </thead>
                <tbody>
                    @if(!empty($application_list))
                    @foreach ($application_list as $applicationlist)
                    <tr class="{{$applicationlist->status_title}} {{$applicationlist->status_name}}" id="{{$applicationlist->status_name}}">
                        <td class="appId_hide_app"><a href="/student-application-review/{{$applicationlist->app_id}}">{{$applicationlist->app_id}}</a></td>
                        <td class="studentId_hide_app"><a href="/agent_student_profile/{{ $applicationlist->user_id }}">{{$applicationlist->user_id}}</a></td>
                        <td class="applyDate_hide_app">{{date('d-M-Y', strtotime($applicationlist->created_at))}}</td>
                        <td class="firstName_hide_app">{{$applicationlist->first_name}}</td>
                        <td class="lastName_hide_app">{{$applicationlist->last_name}}</td>
                        <td class="status status_hide_app"><span class="{{$applicationlist->bgcolor}}">{{$applicationlist->status_name}}</span></td>
                        <td class="scoreHere requirements_hide_app"><div class="scoreView" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Requirements">1</div><div class="scoreView" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Requirements">2</div><div class="scoreView" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Requirements">3</div></td>
                        <td class="currentStage_hide_app"><span class="bg-light px-3 py-1 rounded-pill">Cancelled</span></td>
                        <td class="program_hide_app"><a href="/agent-program-details/{{$applicationlist->pid}}">{{$applicationlist->programs_name}}</a></td>
                        <td class="school_hide_app"><a class="schoolView" href="/agent-college-details/{{$applicationlist->cid}}"><img src="{{ url('/images/' . $applicationlist->college_logo) }}" alt="Logo" />{{$applicationlist->program_college_name}}</a></td>
                        <td class="text-center startDate_hide_app">{{date('d-M-Y', strtotime($applicationlist->earliest_intake_date))}}</td>
                        @if(!empty($agent_email))
                        @foreach($agent_email as $agentemail)
                        <td class="recruitmentPartner_hide_app"><a href="#">{{$agentemail->email}}</a></td>
                        @endforeach
                        <td class="text-center paymentDate_hide_app"><a href="#"> NA</a></td>
                        @endif
                        <td class="text-center action_app_hide"><a href="#">View</a></td>
                        <td class="action action_app_hide">
                            <div class="dropdown dropstart">
                                <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="https://design.enrolhere.com/student-application-review/78429398"><i class="bi bi-pencil"></i> View Application</a></li>
                                    <li><a class="dropdown-item" href="https://design.enrolhere.com/student-profile-application/16"><i class="bi bi-file-earmark-text"></i> All Applications</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="tableFooter">
            <div class="controls">
                Row:
                <form method="GET" action="/agentApplication" id="agentApplication">
                    <select class="form-select form-select-sm" name="qty" onchange="this.form.submit()">
                        <option value="20" @php if(isset($_GET['qty']) && $_GET['qty'] == '20'){echo "selected";} @endphp>20</option>
                        <option value="50" @php if(isset($_GET['qty']) && $_GET['qty'] == '50'){echo "selected";} @endphp>50</option>
                        <option value="100" @php if(isset($_GET['qty']) && $_GET['qty'] == '100'){echo "selected";} @endphp>100</option>
                    </select>
                </form>
            </div>
            <div class="controls">{{$application_list->links()}}</div>
        </div>
    </div>
</div>
@endsection
