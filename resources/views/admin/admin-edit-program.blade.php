@extends('layouts.admin_app')
@section('content')
@php $application_status = getCurrentStatus() @endphp
@php $payment_status = getPaymentStatus() @endphp

<div class="page-content main-index">
    <div class="container-fluid">
        <div id="success_messae" class="alert alert-success" style="display: none;">
            <strong><span style="color: black;"></span></strong>
        </div>
        <form method="post" enctype="multipart/form-data" action="/admin-update-program">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h4 class="mb-sm-0">Programs</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Programs Logo</label>
                                <input type="file" id="programs_logo" name="programs_logo" accept=".png, .jpg, .jpeg" class="form-control">
                            </div>
                        </div>
                    </div>
                </div> -->
                <input type="hidden" name="id" value="{{$program_edit_detail->id}}">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Programs Name</label>
                                <input type="text" id="program_name" name="program_name" class="form-control" value="{{$program_edit_detail->programs_name}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Programs College Name</label>
                                <input type="text" id="program_college_name" disabled name="program_college_name" class="form-control" value="{{$program_edit_detail->college_name}}">
                                <input type="hidden" id="collegeid" name="collegeid" class="form-control" value="{{$program_edit_detail->college_id}}">
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
                            <input type="date" class="form-control" name="earliest_intake_date" id="earliest_intake_date" value="{{$program_edit_detail->earliest_intake_date}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Earliest Intake Type</label>
                                <select name="earliest_intake_type" id="earliest_intake_type" class="form-select" aria-label="Default select example">
                                    <option value="">Select Earliest Intake Type</option>
                                    <option value="Free" {{$program_edit_detail->earliest_intake_type == "Free" ? "selected" : ""}}>Free</option>
                                    <option value="Paid" {{$program_edit_detail->earliest_intake_type == "Paid" ? "selected" : ""}}>Paid</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <label>Earliest Intake Price</label>
                            <input type="text" disabled class="form-control" name="earliest_intake_price" id="earliest_intake_price" value="{{$program_edit_detail->earliest_intake_price}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Post-Secondary Discipline</label>
                                <select class="select2 form-control select2-multiple" multiple="multiple" name="post_secondary_discipline[]" id="post_secondary_discipline" data-placeholder="select ...">
                                <?php  
                                    $a = $program_edit_detail->post_secondary_discipline;
                                    $b = json_decode($a, true); 
                                    $d = count($post_secondary_discipline).'<br>';

                                    for($i = 0; $i<$d; $i++){   
                                        if(isset($b[$i]) == $post_secondary_discipline[$i]->id){ 
                                            echo '<option selected value="'.$post_secondary_discipline[$i]->id.'">'.$post_secondary_discipline[$i]->title.'</option>';
                                    }else{
                                        echo '<option value="'.$post_secondary_discipline[$i]->id.'">'.$post_secondary_discipline[$i]->title.'</option>';
                                    
                                        }
                                    } 

                                    ?>  
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
                                <select class="select2 form-control select2-multiple" multiple="multiple" name="post_secondary_sub_categories[]" id="post_secondary_sub_categories" data-placeholder="select ...">
                                <?php  
                                    $a = $program_edit_detail->post_secondary_sub_categories;
                                    $b = json_decode($a, true); 
                                    $d = count($post_secondary_sub_categories).'<br>';

                                    for($i = 0; $i<$d; $i++){   
                                        if(isset($b[$i]) == $post_secondary_sub_categories[$i]->id){ 
                                            echo '<option selected value="'.$post_secondary_sub_categories[$i]->id.'">'.$post_secondary_sub_categories[$i]->sub_cat_name.'</option>';
                                    }else{
                                        echo '<option value="'.$post_secondary_sub_categories[$i]->id.'">'.$post_secondary_sub_categories[$i]->sub_cat_name.'</option>';
                                        }
                                    } 
                                    ?>  
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group checkbox">
                                <input class="form-check-input" name="include_living_cost" {{$program_edit_detail->include_living_costs == "Yes" ? "checked" : ""}} type="checkbox" value="{{$program_edit_detail->include_living_costs}}" name="include_living_costs" id="include_living_costs">
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
                                            <input type="text" name="tuition_fee_min" id="tuition_fee_min" value="{{$program_edit_detail->tuition_fee_min}}" placeholder="&#8377;" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Max</label>
                                            <input type="text" name="tuition_fee_max" id="tuition_fee_max" value="{{$program_edit_detail->tuition_fee_max}}" placeholder="&#8377;" class="form-control">
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
                                            <input type="text" name="application_fee_min" id="application_fee_min" value="{{$program_edit_detail->application_fee_min}}" placeholder="&#8377;" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Max</label>
                                            <input type="text" name="application_fee_max" id="application_fee_max" value="{{$program_edit_detail->application_fee_max}}" placeholder="&#8377;" class="form-control">
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
                                <textarea id="editor1" name="editor1"><?php echo $program_edit_detail->program_summary; ?></textarea>
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
                            <input type="text" id="minimum_level_of_education_completed" name="minimum_level_of_education_completed" value="{{$program_edit_detail->minimum_level_of_education_completed}}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <label>Minimum GPA (%)</label>
                            <input type="text" id="minimum_gpa" name="minimum_gpa" value="{{$program_edit_detail->minimum_gpa}}" class="form-control">
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
                                                <input type="text" id="test_scores_name" name="test_scores_name" value="{{$program_edit_detail->test_scores_name}}" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Test Scores (Number) </label>
                                                <input type="text" id="test_scores_number" name="test_scores_number" value="{{$program_edit_detail->test_scores_number}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-md-3 mt-md-3">
                                            <div class="col-md-3">
                                                <label>Reading </label>
                                                <input type="text" id="reading" name="reading" value="{{$program_edit_detail->reading}}" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Writing </label>
                                                <input type="text" id="writing" name="writing" value="{{$program_edit_detail->writing}}" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Listening </label>
                                                <input type="text" id="listening" name="listening" value="{{$program_edit_detail->listening}}" class="form-control">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Speaking </label>
                                                <input type="text" id="speaking" name="speaking" value="{{$program_edit_detail->speaking}}"  class="form-control">
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
                                        <select name="status1" id="status1" class="form-select" aria-label="Default select example">
                                            <option value="">Select Program Intakes</option>
                                            <option value="Open" {{$program_edit_detail->status == 'Open' ? 'selected' : ""}}>Open</option>
                                            <option value="Likely" {{$program_edit_detail->status == 'Likely' ? 'selected' : ""}}>Likely Open</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Month / Year</label>
                                        <input type="month" id="month_year" name="month_year" min="{{date('Y-m', strtotime($program_edit_detail->month_year))}}" value="{{date('Y-m', strtotime($program_edit_detail->month_year))}}" class="form-control" placeholder="2022-09">
                                    </div>
                                </div>
                            </div> 
                            <div class="row mb-md-3 mt-md-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Open Date </label>
                                        <input id="open_date" name="open_date" type="date" value="{{date('Y-m-d', strtotime($program_edit_detail->open_date))}}" class="form-control"> 
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Submission Deadline</label>
                                        <select name="submission_deadline" id="submission_deadline" class="form-select" aria-label="Default select example">
                                            <option value="">Select Date Available</option>
                                            <option value="Data Available" {{ucfirst($program_edit_detail->submission_deadline) == ucfirst("Data Available") ? 'selected' : ""}}>Data available</option>
                                            <option value="No Data Available" {{ucfirst($program_edit_detail->submission_deadline) == ucfirst("No data available") ? 'selected' : ""}}>No data available</option>
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
                                        <input type="text" id="first_year_post_secondary_certificate" name="first_year_post_secondary_certificate" value="{{$program_edit_detail->first_year_post_secondary_certificate}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>1-Year T Level Program Including A Work Placement</label>
                                        <input type="text" id="first_year_t_level_program_including_a_work_placement" name="first_year_t_level_program_including_a_work_placement" value="{{$program_edit_detail->first_year_t_level_program_including_a_work_placement}}" class="form-control">
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
                                        <textarea name="commission_break_down" id="commission_break_down" cols="30" rows="2" class="form-control">{{$program_edit_detail->commission_break_down}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Disclaimer</label>
                                        <textarea name="disclaimer" id="disclaimer" cols="30" rows="2" class="form-control">{{$program_edit_detail->disclaimer}}</textarea>
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
        <?php  
            $a = $program_edit_detail->doc_requirement;
            $b = json_decode($a, true); 
              $d = count($req_doc).'<br>';

            for($i = 0; $i<$d; $i++){   
                if(isset($b[$i]) == $req_doc[$i]->id){ 
                echo ' <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col"> 
                                <input class="form-check-input" checked name="certificate_doc[]" type="checkbox" value="'.$req_doc[$i]->id.'" id="certificate_{{$documentsrequirment->id}}">
                                <label class="form-check-label" for="certificate">
                                   '.$req_doc[$i]->document_name.'
                                </label>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div>';
            }else{
                echo ' <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col"> 
                                <input class="form-check-input" name="certificate_doc[]" type="checkbox" value="'.$req_doc[$i]->id.'" id="certificate_{{$documentsrequirment->id}}">
                                <label class="form-check-label" for="certificate">
                                   '.$req_doc[$i]->document_name.'
                                </label>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div>';
              
                }
            } 

            ?> 
         
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
                             <select id="payment" name="payment" class="form-control">
                                 <option value="0">Selcet Payment Type</option>
                                <option value="percent" {{ucfirst($program_edit_detail->commission_type) == ucfirst("percent") ? 'selected' : ""}}>Percentage</option>
                                <option value="fixed" {{ucfirst($program_edit_detail->commission_type) == ucfirst("fixed") ? 'selected' : ""}}>Fixed</option>
                            </select>
                          </div>
                          <div class="row">
                          <div id="per" >
                              <label for="percentage" class="form-label">Percentage</label>
                            <input type="number" class="form-control" id="percentage" placeholder="Enter Payment Percentage" value="{{$program_edit_detail->amount_percentage}}" name="percentage">
                            
                            <label for="Tax" class="form-label mt-2">Tax</label>
                            <div class="col">
                                <label for="tax-percentage" class="form-label">Tax In Percentage</label>
                              <select class="form-select" id="tax_percentage" name="tax_percentage">
                                   <option disabled>select</option>
                                <?php for($i=1; $i<=50;$i++){ ?>
                                <option value="{{$i}}" {{$program_edit_detail->tax_percentage == $i ? 'selected' : ""}}>{{$i}}%</option>
                                <?php 
                                }
                                ?>
                              </select>
                            </div>
                            </div>
                            
                            <div id="fix" style="display:none;">
                              <label for="fixed" class="form-label">Fixed</label>
                              <input type="number" class="form-control" id="fixed" placeholder="Enter Payment Fixed" name="fixed" value="{{$program_edit_detail->tax_fixed}}">
                              <label for="Tax" class="form-label mt-2">Tax</label>
                            <div class="col">
                                <label for="tax-amount" class="form-label">Tax In Amount</label>
                              <input type="number" class="form-control" placeholder="Enter Tax In Amount" id="taxfixed" name="taxfixed" value="{{$program_edit_detail->amount_fixed}}">
                            </div>
                            </div>
                        </div>
                          
                        <div class="row mt-4">
                          </div>
                          <div class="mb-4 mt-2">
                            <label for="tax-type" class="form-label">Tax Type</label>
                             <select class="form-select" id="tax_type" name="tax_type">  
                              <option value="exclusive" {{ucfirst($program_edit_detail->tax_type) == ucfirst("exclusive") ? 'selected' : ""}}>Exclusive</option>
                              <option value="inclusive" {{ucfirst($program_edit_detail->tax_type) == ucfirst("inclusive") ? 'selected' : ""}}>Inclusive</option>
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



    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
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

</script>

@endsection