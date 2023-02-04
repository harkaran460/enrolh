@extends('layouts.college_app')
@section('content')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
        <div id="success_messae" class="alert alert-success" style="display: none;">
            <strong><span style="color: black;"></span></strong>
        </div>
        <form name="addProgramForm" id="addProgramForm" method="post" enctype="multipart/form-data" action="javascript:void(0)">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h4 class="mb-sm-0">Programs</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Programs Logo</label>
                                <input type="file" id="programs_logo" name="programs_logo" accept=".png, .jpg, .jpeg" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Programs Name</label>
                                <input type="text" id="program_name" name="program_name" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Programs College Name</label>
                                <input type="text" id="program_college_name" name="program_college_name" class="form-control" value="{{$colleges_name->college_name}}" disabled>
                                <input type="hidden" id="collegeid" name="collegeid" class="form-control" value="{{$colleges_name->id}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <label>Earliest Intake Date</label>
                            <input type="date" class="form-control" name="earliest_intake_date" id="earliest_intake_date">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Earliest Intake Type</label>
                                <select name="earliest_intake_type" id="earliest_intake_type" class="form-select" aria-label="Default select example" validate[required]>
                                    <option value="">Select Earliest Intake Type</option>
                                    <option value="Free">Free</option>
                                    <option value="Paid">Paid</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <label>Earliest Intake Price</label>
                            <input type="text" class="form-control" name="earliest_intake_price" id="earliest_intake_price">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Post-Secondary Discipline</label>
                                <select class="select2 form-control select2-multiple" multiple="multiple" name="post_secondary_discipline" id="post_secondary_discipline" data-placeholder="select ...">
                                    @foreach ($post_secondary_discipline as $data)
                                    <option value="{{$data->id}}">{{$data->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Post-Secondary Sub-Categories</label>
                                <select class="select2 form-control select2-multiple" multiple="multiple" name="post_secondary_sub_categories" id="post_secondary_sub_categories" data-placeholder="select ...">
                                    @foreach ($post_secondary_sub_categories as $data)
                                    <option value="{{$data->id}}">{{$data->sub_cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group checkbox">
                                <input class="form-check-input" type="checkbox" value="Yes" name="include_living_costs" id="include_living_costs">
                                <label class="form-check-label" for="TuitionCheckDefault">
                                    Include living costs
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="fw-bold">Tuition Fee</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Min</label>
                                            <input type="text" name="tuition_fee_min" id="tuition_fee_min" placeholder="&#8377;" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Max</label>
                                            <input type="text" name="tuition_fee_max" id="tuition_fee_max" placeholder="&#8377;" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="fw-bold">Application Fee</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Min</label>
                                            <input type="text" name="application_fee_min" id="application_fee_min" placeholder="&#8377;" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Max</label>
                                            <input type="text" name="application_fee_max" id="application_fee_max" placeholder="&#8377;" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Program Summary </label>
                                <textarea id="editor1" name="editor1"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h4>Admission Requirements</h4>
                        <h5 class="mb-md-0"><b> Academic Background</b></h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <label>Minimum Level of Education Completed (Grade)</label>
                            <input type="text" id="minimum_level_of_education_completed" name="minimum_level_of_education_completed" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <label>Minimum GPA (%)</label>
                            <input type="text" id="minimum_gpa" name="minimum_gpa" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="page-title-box">
                        <h5 class="mb-md-0"><b> Minimum Language Test Scores</b></h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <div id="form-exams-list">
                                    <div class="form-group">
                                        <div class="row mb-md-3 mt-md-3">
                                            <div class="col-md-6">
                                                <label>Test Scores Name </label>
                                                <input type="text" id="test_scores_name" name="test_scores_name" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Test Scores (Number) </label>
                                                <input type="text" id="test_scores_number" name="test_scores_number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-md-3 mt-md-3">
                                            <div class="col-md-3">
                                                <label>Reading </label>
                                                <input type="text" id="reading" name="reading" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Writing </label>
                                                <input type="text" id="writing" name="writing" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Listening </label>
                                                <input type="text" id="listening" name="listening" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Speaking </label>
                                                <input type="text" id="speaking" name="speaking" class="form-control">
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row mt-md-3">
                                    <div class="col-md-12">
                                        <button class="btn btn-info js-add--exam-row" onClick="getDataInput();">Add More Feature </button>
                                        <input id="noOfTestScore" name="noOfTestScore" type="hidden" value="0" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-title-box">
                        <h5 class="mb-md-0"><b> Program Intakes</b></h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-md-3 mt-md-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status1" id="status1" class="form-select" aria-label="Default select example" validate[required]>
                                            <option value="">Select Program Intakes</option>
                                            <option value="Open">Open</option>
                                            <option value="Likely">Likely Open</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Month / Year</label>
                                        <input type="month" id="month_year" name="month_year" class="form-control" placeholder="2022-09">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-md-3 mt-md-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Open Date </label>
                                        <input id="open_date" name="open_date" type="date" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Submission Deadline</label>
                                        <select name="submission_deadline" id="submission_deadline" class="form-select" aria-label="Default select example">
                                            <option value="">Select Date Available</option>
                                            <option value="Data Available">Data Available</option>
                                            <option value="No Data Available">No Data Available</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-title-box">
                        <h5 class="mb-md-0"><b> Top Disciplines</b></h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-md-3 mt-md-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>1-Year Post Secondary Certificate</label>
                                        <input type="text" id="first_year_post_secondary_certificate" name="first_year_post_secondary_certificate" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>1-Year T Level Program Including A Work Placement</label>
                                        <input type="text" id="first_year_t_level_program_including_a_work_placement" name="first_year_t_level_program_including_a_work_placement" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-title-box">
                        <h5 class="mb-md-0"><b>Other Details</b></h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-md-3 mt-md-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Commission Breakdown</label>
                                        <textarea name="commission_break_down" id="commission_break_down" cols="30" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Disclaimer</label>
                                        <textarea name="disclaimer" id="disclaimer" cols="30" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="page-content main-index h-80 requirement-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Requirement According Program</h4>
                </div>
            </div> 
        </div>
        <div class="row">
            @if(!empty($documents_requirment))
            @foreach($documents_requirment as $documentsrequirment)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="certificate_{{$documentsrequirment->id}}[]" type="checkbox" value="{{$documentsrequirment->id}}" id="certificate_{{$documentsrequirment->id}}">
                                <label class="form-check-label" for="certificate">
                                   {{$documentsrequirment->document_name}} 
                                </label>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div>
            @endforeach
            @endif
        </div>
       
    </div> 
</div>
                
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h5 class="mb-md-0"><b>Payment Details</b></h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3 mt-3">
                            <label for="Payment Type" class="form-label">Payment Type</label>
                             <select id="payment" class="form-control">
                                 <option value="">Selcet Payment Type</option>
                                <option value="percent">Percentage</option>
                                <option value="fixed">Fixed</option>
                            </select>
                          </div>
                          <div class="row">
                          <div id="per" >
                              <label for="percentage" class="form-label">Percentage</label>
                            <input type="number" class="form-control" id="percentage" placeholder="Enter Payment Percentage" name="percentage">
                            
                            <label for="Tax" class="form-label mt-2">Tax</label>
                            <div class="col">
                                <label for="tax-percentage" class="form-label">Tax In Percentage</label>
                              <select class="form-select">
                                   <option disabled>select</option>
                                <?php for($i=1; $i<=50;$i++){ ?>
                                <option value="{{$i}}">{{$i}}%</option>
                                <?php 
                                }
                                ?>
                              </select>
                            </div>
                            </div>
                            
                            <div id="fix" style="display:none;">
                              <label for="fixed" class="form-label">Fixed</label>
                              <input type="number" class="form-control" id="fixed" placeholder="Enter Payment Fixed" name="fixed">
                              <label for="Tax" class="form-label mt-2">Tax</label>
                            <div class="col">
                                <label for="tax-amount" class="form-label">Tax In Amount</label>
                              <input type="number" class="form-control" placeholder="Enter Tax In Amount" name="tax">
                            </div>
                            </div>
                        </div>
                          
                        <div class="row mt-4">
                             

                            
                          </div>
                          <div class="mb-4 mt-2">
                            <label for="tax-type" class="form-label">Tax Type</label>
                             <select class="form-select">
                                
                              <option value="percentage">Exclusive</option>
                              <option value="fixed">Inclusive</option>
                            </select>
                          </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-primary btn-submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div> 



<script>
 $('#payment').on('change', function() {
  //  alert( this.value ); // or $(this).val()
  if(this.value == "percent") {
    $('#per').show();
    $('#fix').hide();
  } else {
    $('#per').hide();
    $('#fix').show();
  }
});
    
    
    function getDataInput() {
        var getTxtValue = $("#noOfTestScore").val();
        var getTxtValue = parseInt(getTxtValue) + 1;
        $("#noOfTestScore").val(getTxtValue);
        console.log(getTxtValue);
    }
    $(function() {
        $('#earliest_intake_type').on('change', function() {
            if (this.value == "Free") {
                $('#earliest_intake_price').val("Free");
                document.getElementById("earliest_intake_price").disabled = true;
            } else if (this.value == "Paid") {
                document.getElementById("earliest_intake_price").disabled = false;
                $('#earliest_intake_price').val("");
            } else {
                document.getElementById("earliest_intake_price").disabled = true;
                $('#earliest_intake_price').val("");
            }

        });
    });
</script>


<script>
    $(document).ready(function() {
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
    if ($("#addProgramForm").length > 0) {
        $("#addProgramForm").validate({
            ignore: [],
            rules: {
                programs_logo: {
                    required: true,
                },
                program_name: {
                    required: true,
                },
                program_college_name: {
                    required: true,
                    maxlength: 300
                },
                earliest_intake_date: {
                    required: true,
                    maxlength: 300
                },
                earliest_intake_type: {
                    required: function(elm) {
                        select = document.getElementById('earliest_intake_type');
                        if (select.value == "") {
                            return true;
                        }
                        return false;
                    }

                },
                post_secondary_discipline: {
                    required: true,
                },
                post_secondary_sub_categories: {
                    required: true,
                },
                tuition_fee_min: {
                    required: true,
                },
                tuition_fee_max: {
                    required: true,
                },
                application_fee_min: {
                    required: true,
                },
                application_fee_max: {
                    required: true,
                },
                minimum_level_of_education_completed: {
                    required: true,
                },
                editor1: {
                    required: function() {
                        if (CKEDITOR.instances.editor1.getData() == '') {
                            return true;
                        }
                    }
                },
                minimum_gpa: {
                    required: true,
                },
                status1: {
                    required: function(elm) {
                        select = document.getElementById('status1');
                        if (select.value == "") {
                            return true;
                        }
                        return false;
                    }

                },
                submission_deadline: {
                    required: function(elm) {
                        select = document.getElementById('submission_deadline');
                        if (select.value == "") {
                            return true;
                        }
                        return false;
                    }

                },
                month_year: {
                    required: true,
                    maxlength: 300
                },
                
                test_scores_name: {
                    required: true,
                    maxlength: 300
                },
                test_scores_number: {
                    required: true,
                    maxlength: 300
                },
                reading: {
                    required: true,
                    maxlength: 300
                },
                writing: {
                    required: true,
                    maxlength: 300
                },
                listening: {
                    required: true,
                    maxlength: 300
                },
                speaking: {
                    required: true,
                    maxlength: 300
                },
                first_year_post_secondary_certificate: {
                    required: true,
                    maxlength: 300
                },
                first_year_t_level_program_including_a_work_placement: {
                    required: true,
                    maxlength: 300
                },
                commission_break_down: {
                    required: true,
                },
                disclaimer: {
                    required: true,
                },


            },
            messages: {
                programs_logo: {
                    required: "Please select program logo",
                },
                'college_images[]': {
                    required: "Please select college images",
                },
                program_name: {
                    required: "Please enter program name",
                },
                program_college_name: {
                    required: "Please enter program college name",
                },
                earliest_intake_date: {
                    required: "Please select intake date",
                },
                earliest_intake_type: {
                    required: "Please select earliest intake type",
                },
                earliest_intake_price: {
                    required: "Please enter earliest intake price",
                },
                minimum_level_of_education_completed: {
                    required: "Please enter minimum level of education completed",
                },
                editor1: {
                    required: "Please enter program summary",
                },
                minimum_gpa: {
                    required: "Please enter minimum gpa",
                },
                month_year: {
                    required: "Please select month year",
                },
                open_date: {
                    required: "Please select open date",
                },
                status1: {
                    required: "Please select status",
                },
                submission_deadline: {
                    required: "Please select Submission Deadline",
                },
                test_scores_name: {
                    required: "Please select test scores name",
                },
                test_scores_number: {
                    required: "Please select test scores number",
                },
                reading: {
                    required: "Please select reading",
                },
                writing: {
                    required: "Please select writing",
                },
                listening: {
                    required: "Please select listening",
                },
                speaking: {
                    required: "Please select speaking",
                },
                post_secondary_discipline: {
                    required: "Please select post secondary discipline",
                },
                post_secondary_sub_categories: {
                    required: "Please select post post secondary sub categories",
                },
                tuition_fee_min: {
                    required: "Please enter min tuition fee",
                },
                tuition_fee_max: {
                    required: "Please enter max tuition fee",
                },
                application_fee_min: {
                    required: "Please enter min application fee",
                },
                application_fee_max: {
                    required: "Please enter max application fee",
                },
                first_year_post_secondary_certificate: {
                    required: "Please enter first year post secondary certificate",
                },
                first_year_t_level_program_including_a_work_placement: {
                    required: "Please enter first year t level program including a work placement",
                },
                commission_break_down: {
                    required: "Please enter commission breakdown",
                },
                disclaimer: {
                    required: "Please enter disclaimer",
                },


            },
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#submit').html('Please Wait...');
                // $("#submit").attr("disabled", true);
                var formData = new FormData()

                var image = $("#programs_logo")[0].files[0];
                formData.append('programs_logo', image);

                var data = CKEDITOR.instances.editor1.getData();

                formData.append('editor1', data);



                var program_name = $('input[name="program_name"]').val();
                var program_college_name = $('input[name="program_college_name"]').val();
                var minimum_level_of_education_completed = $('input[name="minimum_level_of_education_completed"]').val();
                var minimum_gpa = $('input[name="minimum_gpa"]').val();
                var month_year = $('input[name="month_year"]').val();
                var earliest_intake_date = $('input[name="earliest_intake_date"]').val();
                var open_date = $('#open_date').val();

                var test_scores_name = $('input[name="test_scores_name"]').val();
                var test_scores_number = $('input[name="test_scores_number"]').val();
                var reading = $('input[name="reading"]').val();
                var writing = $('input[name="writing"]').val();
                var listening = $('input[name="listening"]').val();
                var speaking = $('input[name="speaking"]').val();
                var earliest_intake_price = $('input[name="earliest_intake_price"]').val();

                var first_year_post_secondary_certificate = $('input[name="first_year_post_secondary_certificate"]').val();
                var first_year_t_level_program_including_a_work_placement = $('input[name="first_year_t_level_program_including_a_work_placement"]').val();
                var commission_break_down = $('textarea#commission_break_down').val();
                var disclaimer = $('textarea#disclaimer').val();

                var post_secondary_discipline = $('#post_secondary_discipline').select2("val");
                var post_secondary_sub_categories = $('#post_secondary_sub_categories').select2("val");
                var tuition_fee_min = $('input[name="tuition_fee_min"]').val();
                var tuition_fee_max = $('input[name="tuition_fee_max"]').val();
                var application_fee_min = $('input[name="application_fee_min"]').val();
                var application_fee_max = $('input[name="application_fee_max"]').val();
                var include_living_costs = '';
                $('input:checkbox[name=include_living_costs]').each(function() {
                    if ($(this).is(':checked')) {
                        include_living_costs = $(this).val();
                    } else {
                        include_living_costs = "No";
                    }
                });

                status1 = document.getElementById('status1').value;
                submission_deadline = document.getElementById('submission_deadline').value;
                earliest_intake_type = document.getElementById('earliest_intake_type').value;





                formData.append('program_name', program_name);
                formData.append('program_college_name', program_college_name);
                formData.append('earliest_intake_date', earliest_intake_date);
                formData.append('earliest_intake_type', earliest_intake_type);
                formData.append('earliest_intake_price', earliest_intake_price);
                formData.append('minimum_level_of_education_completed', minimum_level_of_education_completed);
                formData.append('minimum_gpa', minimum_gpa);
                formData.append('month_year', month_year);
                formData.append('open_date', open_date);
                formData.append('test_scores_name', test_scores_name);
                formData.append('test_scores_number', test_scores_number);
                formData.append('reading', reading);
                formData.append('writing', writing);
                formData.append('listening', month_year);
                formData.append('speaking', speaking);
                formData.append('status', status1);
                formData.append('submission_deadline', submission_deadline);
                formData.append('post_secondary_discipline', post_secondary_discipline);
                formData.append('post_secondary_sub_categories', post_secondary_sub_categories);
                formData.append('include_living_costs', include_living_costs);
                formData.append('tuition_fee_min', tuition_fee_min);
                formData.append('tuition_fee_max', tuition_fee_max);
                formData.append('application_fee_min', application_fee_min);
                formData.append('application_fee_max', application_fee_max);

                formData.append('first_year_post_secondary_certificate', first_year_post_secondary_certificate);
                formData.append('first_year_t_level_program_including_a_work_placement', first_year_t_level_program_including_a_work_placement);
                formData.append('commission_break_down', commission_break_down);
                formData.append('disclaimer', disclaimer);



                var minimumLanguageTestScores = $('input[name="noOfTestScore"]').val();
                var testScores = [];

                testScores.push({
                    "test_scores_name": $('input[name="test_scores_name"]').val(),
                    "test_scores_number": $('input[name="test_scores_number"]').val(),
                    "reading": $('input[name="reading"]').val(),
                    "writing": $('input[name="writing"]').val(),
                    "listening": $('input[name="listening"]').val(),
                    "speaking": $('input[name="speaking"]').val(),
                })

                for (var i = 0; i < minimumLanguageTestScores; i++) {
                    console.log(i);

                    var testScoresName = "input#test_scores_name_";
                    var testScoresNumber = "input#test_scores_number_";
                    var reading = "input#reading_";
                    var writing = "input#writing_";
                    var listening = "input#listening_";
                    var speaking = "input#speaking_";


                    var item = parseInt(i) + 2;

                    testScoresName = testScoresName + item;
                    testScoresNumber = testScoresNumber + item;
                    reading = reading + item;
                    writing = writing + item;
                    listening = listening + item;
                    speaking = speaking + item;


                    console.log(item);

                    testScores.push({
                        "test_scores_name": $(testScoresName).val(),
                        "test_scores_number": $(testScoresNumber).val(),
                        "reading": $(reading).val(),
                        "writing": $(writing).val(),
                        "listening": $(listening).val(),
                        "speaking": $(speaking).val(),
                    })
                }
                console.log(testScores);
                console.log(formData);
                var jsonString = JSON.stringify(testScores);

                formData.append('minimumTestScores', jsonString);


                $.ajax({
                    url: "{{ route('addProgramSubmit.post') }}",
                    enctype: 'multipart/form-data',
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        $('#submit').html('Submit');
                        $("#submit").attr("disabled", false);
                        document.getElementById("addProgramForm").reset();
                        CKEDITOR.instances.editor1.setData('');
                        $("#uploadCollegeImages").html("");
                        $("#success_messae span").html(response.success);
                        $('#success_messae').show();
                        window.setTimeout(function() {
                            location.reload()
                        }, 2000)
                        console.log(response);
                    }
                });
            }
        })
    }
</script>
@endsection