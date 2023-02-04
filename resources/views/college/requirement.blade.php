@extends('layouts.college_app')
@section('content')
<div class="page-content main-index h-100 requirement-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Requirement According Program</h4>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="10certificate" type="checkbox" value="certificate" id="10certificate">
                                <label class="form-check-label" for="10certificate">
                                    10th certificate 
                                </label>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="12certificate" type="checkbox" value="certificate" id="12certificate">
                                <label class="form-check-label" for="12certificate">
                                    12th certificate  
                                </label>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="graduation-certificate" type="checkbox" value="certificate" id="graduation-certificate">
                                <label class="form-check-label" for="graduation-certificate">
                                    Graduation certificate
                                </label>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="post-graduation-certificate" type="checkbox" value="certificate" id="post-graduation-certificate">
                                <label class="form-check-label" for="post-graduation-certificate">
                                   Post graduation certificate 
                                </label>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
        </div>
        
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="graduation-transcript" type="checkbox" value="" id="graduation-transcript">
                                <label class="form-check-label" for="graduation-transcript">
                                    Graduation transcript 
                                </label>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
            
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="post-graduation-transcript" type="checkbox" value="" id="post-graduation-transcript">
                                <label class="form-check-label" for="post-graduation-transcript">
                                    Post graduation transcript
                                </label>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="IELTS-score-certificate" type="checkbox" value="" id="IELTS-score-certificate">
                                <label class="form-check-label" for="IELTS-score-certificate">
                                    IELTS score certificate
                                </label>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="cv" type="checkbox" value="" id="cv">
                                <label class="form-check-label" for="cv">
                                    CV
                                </label>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
            
        </div>
        
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="experience-certificate" type="checkbox" value="" id="experience-certificate">
                                <label class="form-check-label" for="experience-certificate">
                                    Experience certificate 
                                </label>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="migration-certificate" type="checkbox" value="" id="migration-certificate">
                                <label class="form-check-label" for="migration-certificate">
                                    Migration certificate
                                </label>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="backlog-certificate" type="checkbox" value="" id="backlog-certificate">
                                <label class="form-check-label" for="backlog-certificate">
                                    Backlog certificate
                                </label>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="consent-form" type="checkbox" value="" id="consent-form">
                                <label class="form-check-label" for="consent-form">
                                    Consent form
                                </label>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">  
                        <div class="form-group">  
                            <div class="col">
                                <input class="form-check-input" name="additional-certificate" type="checkbox" value="" id="additional-certificate">
                                <label class="form-check-label" for="additional-certificate">
                                    Additional certificate
                                </label>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"> 
                <div class="col">
                    <input class="btn btn-primary" name="submit" type="submit" value="Submit"> 
                </div>
            </div>
        </div>
        
        

    </div> 
</div>
@endsection