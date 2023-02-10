@extends('layouts.agent_app')
@section('content') 
<div class="page-content"> 
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12"> 
                <div class="bg-white p-3 important_updates"> 
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="missing_requirements_tab" data-bs-toggle="pill" data-bs-target="#missing_requirements" type="button" role="tab" aria-controls="missing_requirements" aria-selected="true">Notifications <span>@if(!empty($important_notice)){{$important_notice->total()}}@else {{0}}@endif</span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="notes_tab" data-bs-toggle="pill" data-bs-target="#notes" type="button" role="tab" aria-controls="notes" aria-selected="false">Notes <span>@if(!empty($notes)){{$notes->total()}}@else {{0}}@endif </span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="application_status_tab" data-bs-toggle="pill" data-bs-target="#application_status" type="button" role="tab" aria-controls="application_status" aria-selected="false">Application Status <span>@if(!empty($application_list)){{$application_list->total()}}@else {{0}}@endif</span> </button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="missing_requirements" role="tabpanel" aria-labelledby="missing_requirements_tab" tabindex="0">
                            <div class="notes_main">
                                <div class="notes_form_box">

                                    {{-- <div class="row">
                                        <div class="col-md-3">
                                            <select class="form-select" name="optionality">
                                                <option value="optionality" selected>Optionality</option>
                                                <option value="required">Required</option>
                                                <option value="optional">Optional</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-select" name="status">
                                                <option value="status" selected>Status</option>
                                                <option value="missing">Missing</option>
                                                <option value="Reviewing/Pending for Review">Reviewing/Pending for Review</option>
                                                <option value="Not Approved">Not Approved</option>
                                                <option value="completed">Completed</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input name="number" type="text" class="form-control" placeholder="Student ID">
                                        </div>
                                        <div class="col-md-3">
                                            <input name="number" type="text" class="form-control" placeholder="Application ID">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="row mt-3">
                                        <div class="col-md-3">
                                            <select class="form-select" name="application_status">
                                                <option value="Application Status" selected>Application Status</option>
                                                <option value="required">Unpaid</option>
                                                <option value="Paid (Processing)">Paid (Processing)</option>
                                                <option value="Ready to Submit (Processing)">Ready to Submit (Processing)</option>
                                                <option value="Submitted (Processing)">Submitted (Processing)</option>
                                                <option value="Accepted">Accepted</option>
                                                <option value="Rejected">Rejected</option>
                                                <option value="Refund in Progress">Refund in Progress</option>
                                                <option value="Deferral in Progress">Deferral in Progress</option>
                                                <option value="Program Closed">Program Closed</option>
                                                <option value="Waitlisted">Waitlisted</option>
                                                <option value="Ready for Visa (Processing)">Ready for Visa (Processing)</option>
                                                <option value="Canceled">Canceled</option>
                                                <option value="Withdrawn">Withdrawn</option>
                                                <option value="Ready to Enroll (Processing)">Ready to Enroll (Processing)</option>
                                                <option value="Enrollment Confirmed">Enrollment Confirmed</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input name="text" type="text" class="form-control" placeholder="Document Title">
                                        </div>
                                        <div class="col-md-3">
                                            <input name="text" type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="col-md-3">
                                            <input name="text" type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="d-grid gap-2 d-md-block">
                                                <button class="btn btn-outline-primary" type="button">Clear</button>
                                                <button class="btn btn-primary" type="button">Submit</button>
                                            </div>
                                        </div>
                                    </div> --}}

                                    @if(!empty($important_notice))
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>SN.</th>
                                                        <th>Title</th>
                                                        <th>Message</th>
                                                        <th>App ID</th>
                                                        <th>App Status</th>
                                                        <th>Payment Status</th>
                                                       
                                                        <th>Student Name</th>
                                                        <th>Student Email</th>
                                                        <th>Program & School</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @php $count = 0; @endphp
                                                    @foreach ($important_notice as $notice)
                                                    @php $count = $count+1 @endphp 
                                                        <tr><td>{{$count}}</td>
                                                        <td>{{$notice->title}}</td>
                                                        <td>{{$notice->text}} {{$notice->agent_first_name}} {{$notice->agent_last_name}}</td>
                                                        <td><a href="/student-application-review/{{$notice->app_id}}">{{$notice->app_id}}</a></td>
                                                        <td>{{$notice->application_status}}</td>
                                                        <td>{{$notice->payment_status}}</td>
                                                    
                                                        <td><a href="/agent-student-profile/{{$notice->student_id}}">{{$notice->name}}</a></td>
                                                        <td><a href="/agent-student-profile/{{$notice->student_id}}">{{$notice->email}}</a></td>
                                                        <td><a href="/agent-program-details/{{$notice->program_id}}">{{$notice->programs_name}}</a> & <a href="/agent-college-details/{{$notice->college_id}}">{{$notice->program_college_name}}</a></td>
                                                        {{-- <td class="text-center view-btn"> <a href="#"> View</a></td> --}}
                                                    </tr> 
                                                    
                                                    @endforeach
                                                </tbody>
                                            </table><br>
                                            <ul class="pagination">{{$important_notice->appends('page_b', Input::get('page_b', 1))
                                            ->appends('page_c', Input::get('page_c',1)) 
                                            ->links('pagination::bootstrap-4')}}</ul>
                                           @endif
                                        </div>
                                        
                                    </div>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="notes" role="tabpanel" aria-labelledby="notes_tab" tabindex="0">
                            
                            <div class="notes_main">
                                <div class="notes_form_box"> 
                                    <div class="row">
                                        {{-- <div class="col-md-4">
                                            <div class="d-grid d-md-flex">
                                                <button class="btn3-mark" type="button">Trash Selected </button>
                                                <button class="btn3-mark" type="button">Mark as Read</button>
                                                <button class="btn3-mark" type="button">Mark as Unread</button>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="nav-tabs-messages"> 
                                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="all_messages_tab" data-bs-toggle="pill" data-bs-target="#all_messages" type="button" role="tab" aria-controls="all_messages" aria-selected="true">All</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="unread_messages_tab" data-bs-toggle="pill" data-bs-target="#unread_messages" type="button" role="tab" aria-controls="unread_messages" aria-selected="false">Unread</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="unread_first_message_tab" data-bs-toggle="pill" data-bs-target="#unread_first_message" type="button" role="tab" aria-controls="unread_first" aria-selected="false">Unread First</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="trashed_message_tab" data-bs-toggle="pill" data-bs-target="#trashed_message" type="button" role="tab" aria-controls="unread_first" aria-selected="false">Unread First</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-12">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="all_messages" role="tabpanel" aria-labelledby="all_messages_tab" tabindex="0">
                                                    @if(!empty($notes))
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th> 
                                                                        </th>
                                                                        <th>Date & Time</th> 
                                                                        <th>Student Name</th>
                                                                        <th>Email</th>
                                                                        <th>App Id</th>
                                                                        <th>Program & School</th> 
                                                                        {{-- <th>Action</th> --}}
                                                                       
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php $count2 = 1; @endphp
                                                                    @foreach ($notes as $note)
                                                                    <tr>
                                                                        <td>
                                                                            
                                                                            {{$count2}}
                                                                        </td>
                                                                        <td>{{date('d-M-Y H:i:s', strtotime($note->created_at))}}
                                                                            </td>
                                                                        
                                                                        <td><a href="/agent-student-profile/{{$note->student_id}}">{{$note->name}}</a></td>
                                                                         <td><a href="/agent-student-profile/{{$note->student_id}}">{{$note->email}}</a></td>
                                                                        <td><a href="/agent-program-details/{{$note->program_id}}">{{$note->programs_name}}</a> & <a href="/agent-college-details/{{$note->college_id}}">{{$note->program_college_name}}</a></td>
                                                                        <td>
                                                                            <span><b>Title: </b> {{$note->title}}</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> {{$note->notes}}</span>
                                                                            
                                                                        </td>
                                                                         {{-- <td class="text-center view-btn"> <a href="#"> View</a></td> --}}
                                                                    </tr> 
                                                                    {{$count2 ++}}   
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div><br>
                                                    <div class="notices">{{$notes->appends('page_a', Input::get('page_a',1))
                                                        ->appends('page_c', Input::get('page_c',1)) 
                                                        ->links('pagination::bootstrap-4')}}</div>
                                                    
                                                    @endif 
                                                </div>
                                                <div class="tab-pane fade" id="unread_messages" role="tabpanel" aria-labelledby="unread_messages_tab" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>Date & Time</th>
                                                                        <th>Student ID</th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name </th>
                                                                        <th>App Id</th>
                                                                        <th>Program & School</th> 
                                                                        <th>Title</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="unread_first_message" role="tabpanel" aria-labelledby="unread_first_message_tab" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>Date & Time</th>
                                                                        <th>Student ID</th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name </th>
                                                                        <th>App Id</th>
                                                                        <th>Program & School</th> 
                                                                        <th>Title</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                   
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="trashed_message" role="tabpanel" aria-labelledby="trashed_message_tab" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>Date & Time</th>
                                                                        <th>Student ID</th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name </th>
                                                                        <th>App Id</th>
                                                                        <th>Program & School</th> 
                                                                        <th>Title</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td>
                                                                        <td>2019-Oct-25 01:18</td>
                                                                        <td>215010</td>
                                                                        <td>Jaskarn Kaur</td>
                                                                        <td>.</td>
                                                                        <td>374971</td>
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>
                                                                            <span><b>Title: </b> Will you be proceeding?</span> 
                                                                            <br/>
                                                                            <span><b>Notes: </b> Hi Sukhwinder Singh,I will ask the school if it is possible for the student to receive a payment extension. I will let you know once we receive a response. Kindest regards, Emily</span>
                                                                            
                                                                        </td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>
                                                                    
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="application_status" role="tabpanel" aria-labelledby="application_status-tab" tabindex="0"> 
                            <div class="notes_main">
                                <div class="notes_form_box"> 
                                    <div class="row">
                                        {{-- <div class="col-md-4">
                                            <div class="d-grid d-md-flex">
                                                <button class="btn3-mark" type="button">Trash Selected </button>
                                                <button class="btn3-mark" type="button">Mark as Read</button>
                                                <button class="btn3-mark" type="button">Mark as Unread</button>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-8">
                                            <div class="nav-tabs-messages"> 
                                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="all_messages_tab2" data-bs-toggle="pill" data-bs-target="#all_messages2" type="button" role="tab" aria-controls="all_messages2" aria-selected="true">All</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="unread_messages_tab2" data-bs-toggle="pill" data-bs-target="#unread_messages2" type="button" role="tab" aria-controls="unread_messages2" aria-selected="false">Unread</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="unread_first_message_tab2" data-bs-toggle="pill" data-bs-target="#unread_first_message2" type="button" role="tab" aria-controls="unread_first2" aria-selected="false">Unread First</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="trashed_message_tab2" data-bs-toggle="pill" data-bs-target="#trashed_message2" type="button" role="tab" aria-controls="unread_first2" aria-selected="false">Unread First</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                        @if(!empty($application_list))
                                        <div class="col-md-12">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="all_messages2" role="tabpanel" aria-labelledby="all_messages_tab2" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                          SN.
                                                                        </th>
                                                                        <th>App Id</th> 
                                                                         
                                                                        <th>Application Status</th>
                                                                        <th>Payment Status</th>
                                                                        <th>Program & School</th>
                                                                        {{-- <th>Action</th> --}}
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php $count = 1; @endphp
                                                                    @foreach ($application_list as $applist)
                                                                    <tr>
                                                                        <td>
                                                                            {{$count}}
                                                                        </td> 
                                                                        <td>{{$applist->app_id}}</td> 
                                                                         
                                                                        <td>{{$applist->application_status}}</td>
                                                                        <td>{{$applist->payment_status}}</td>
                                                                        <td>{{$applist->programs_name}} - {{$applist->program_college_name}}</td>
                                                                        
                                                                         {{-- <td class="text-center view-btn">
                                                                            <form method="POST" action="{{ route('action-notice') }}">
                                                                                @csrf
                                                                            <select class="form-select" id="action_<?php echo $applist->id; ?>" name="action" onchange="funaction('<?php echo $applist->id; ?>');">
                                                                            <option value="na" selected>Select</option>
                                                                            <option value="trash">Trash</option>
                                                                            <option value="delete">Delete</option>
                                                                            
                                                                           </select>
                                                                         </form>
                                                                        </td> --}}
                                                                    </tr> 
                                                                    {{$count ++}}
                                                                    @endforeach
                                                                     
                                                                </tbody>
                                                            </table><br>
                                                            <div class="pagination">  {{$application_list->appends('page_a', Input::get('page_a',1))
                                                                ->appends('page_b', Input::get('page_b',1)) 
                                                                ->links('pagination::bootstrap-4')}}</div>
                                                         </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="unread_messages2" role="tabpanel" aria-labelledby="unread_messages_tab2" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>App Id</th> 
                                                                        <th>Program & School</th> 
                                                                        <th>Title</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>  
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="unread_first_message2" role="tabpanel" aria-labelledby="unread_first_message_tab2" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>App Id</th> 
                                                                        <th>Program & School</th> 
                                                                        <th>Title</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>  
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="trashed_message2" role="tabpanel" aria-labelledby="trashed_message_tab2" tabindex="0">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </th>
                                                                        <th>App Id</th> 
                                                                        <th>Program & School</th> 
                                                                        <th>Title</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr>  
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                            </div>
                                                                        </td> 
                                                                        <td>215010</td> 
                                                                        <td>Attestation of College Studies (AEC) - Network Administration (LEA.9U), CDE College</td>
                                                                         
                                                                        <td>Cencelled</td>
                                                                         <td class="text-center view-btn"> <a href="#"> View</a></td>
                                                                    </tr> 
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection