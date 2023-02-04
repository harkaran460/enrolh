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
<div class="page-content edit-profile h-100">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-md-12"> 
					<h4 class="mb-sm-0 font-size-18">Conversation Reminders</h4>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-2"> 
                    <div class="commission">
                        <div class="me-4"> 
                            <select class="form-select" id="time_expire">
                                <option selected="">Time to Expire</option>
                                <option value="1">Today</option>
                                <option value="2">Yesterday</option>
                                <option value="3">This Week</option>
                                <option value="4">Last Week</option>
                                <option value="5">This Month</option>
                                <option value="6">Last Month</option>  
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                	<div class="commission"> 
                        <select class="form-select" id="time_completion">
                            <option selected="">Time of Completion</option>
                            <option value="1">Today</option>
                            <option value="2">Yesterday</option>
                            <option value="3">This Week</option>
                            <option value="4">Last Week</option>
                            <option value="5">This Month</option>
                            <option value="6">Last Month</option>  
                        </select> 
                    </div> 
				</div>

				<div class="col-md-2">
                	<div class="commission"> 
                        <select class="form-select" id="is_expired">
                            <option selected="">Is Expired</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option> 
                        </select> 
                    </div> 
				</div>

				<div class="col-md-2">
                	<div class="commission"> 
                        <select class="form-select" id="is_completed">
                            <option selected="">Is Completed</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option> 
                        </select> 
                    </div> 
				</div>

				<div class="col-md-2">
                	<div class="commission"> 
                        <select class="form-select" id="reminder_type">
                            <option selected="">Reminder Type</option>
                            <option value="1">Automatic</option>
                            <option value="2">Manual</option> 
                        </select> 
                    </div> 
				</div>

			</div>
			<div class="row">
		    	<div class="col-md-12">
		    		<table class="table tab1 table-borderless">
		                <tbody>
		                	<tr class="text-center">
		                        <td>#</td>
		                        <td>STUDENT</td>
		                        <td>TIME TO EXPIRE	</td>
		                        <td>COLLEGE</td>
		                        <td>COMPLETION TIME</td>
		                        <td>REMINDER TYPE</td>
		                        <td>ACTION</td>
		                    </tr> 
		                </tbody>
		            </table>
		            <table class="table border">
		                <tbody>
		                	<tr>
		                		<td class="w-100 text-center">No Reminder Records</td>
		            		</tr>
		            	</tbody>
		            </table>
		    	</div>
		    </div>
		</div>
	</div>
@endsection