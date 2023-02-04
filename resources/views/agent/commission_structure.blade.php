@extends('layouts.agent_app')
@section('content')
<div class="page-content h-100">
        <div class="container-fluid">
            <div class="row">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Commission Structure</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">General Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Banking Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-doc" type="button" role="tab" aria-controls="pills-doc" aria-selected="false">Upload Documents</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-agree" type="button" role="tab" aria-controls="pills-agree" aria-selected="false">Agreement</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <div>
                                    <div class="commission d-flex justify-content-between">
                                        <div class="me-4">
                                            <label for="country">Country</label>
                                            <select class="form-select" id="country" aria-label="Default select example">
                                                <option selected>Select Country</option>
                                                <option value="1">Australia</option>
                                                <option value="2">India</option>
                                                <option value="3">Japan</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="state">State</label>
                                            <select class="form-select" id="state" aria-label="Default select example">
                                                <option selected>Select</option>
                                                <option value="1">---</option>
                                                <option value="2">---</option>
                                                <option value="3">---</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="d-flex pt-4 main-commission-checkbox">
                                     
                                    <div class="form-group pe-3">
                                        <input type="checkbox" id="university">
                                        <label for="university">University</label>
                                    </div>

                                    <div class="form-group pe-3">
                                        <input type="checkbox" id="college">
                                        <label for="college">College</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="checkbox" id="offer">
                                        <label for="offer">Offer</label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="d-flex float-end">
                                    <a href="#"><button type="button" class="btn btn-primary py-1 me-4">Download CSV</button></a>
                                    <a href="#"><button type="button" class="btn btn-primary py-1">Print</button></a>
                                </div>
                            </div>
                            <div class="col-12 overflow-auto pt-4">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>#</th>
                                        <th>COUNTRY</th>
                                        <th>STATE</th>
                                        <th>INSTITUTE</th>
                                        <th>UNIVERSITY / COLLEGE</th>
                                        <th>NORMAL COMMISSION</th>
                                        <th>OFFER</th>
                                        <tr>
                                            <td>1</td>
                                            <td>Canada</td>
                                            <td>NovaScotia</td>
                                            <td>Acadia University</td>
                                            <td>University</td>
                                            <td>CAD 2160</td>
                                            <td>No offer</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Canada</td>
                                            <td>NovaScotia</td>
                                            <td>Acadia University</td>
                                            <td>University</td>
                                            <td>CAD 2160</td>
                                            <td>No offer</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Canada</td>
                                            <td>NovaScotia</td>
                                            <td>Acadia University</td>
                                            <td>University</td>
                                            <td>CAD 2160</td>
                                            <td>No offer</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Canada</td>
                                            <td>NovaScotia</td>
                                            <td>Acadia University</td>
                                            <td>University</td>
                                            <td>CAD 2160</td>
                                            <td>No offer</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Canada</td>
                                            <td>NovaScotia</td>
                                            <td>Acadia University</td>
                                            <td>University</td>
                                            <td>CAD 2160</td>
                                            <td>No offer</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Canada</td>
                                            <td>NovaScotia</td>
                                            <td>Acadia University</td>
                                            <td>University</td>
                                            <td>CAD 2160</td>
                                            <td>No offer</td>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="col-md-4">
                            <form class="border rounded">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">CHANNEL PARTNER NAME</label>
                                    <input type="text" class="form-control" id="validationCustom01" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Country<span class="text-danger">*</span></label>
                                    <select class="form-select" id="exampleFormControlInput2" required>
                                        <option selected value="">Select</option>
                                        <option>---</option>
                                        <option>---</option>
                                        <option>---</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">State<span class="text-danger">*</span></label>
                                    <select class="form-select" id="exampleFormControlInput3" required>
                                        <option selected value="">Select</option>
                                        <option>---</option>
                                        <option>---</option>
                                        <option>---</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput4" class="form-label">City<span class="text-danger">*</span></label>
                                    <select class="form-select" id="exampleFormControlInput4" required>
                                        <option selected value="">Select</option>
                                        <option>---</option>
                                        <option>---</option>
                                        <option>---</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom04" class="form-label">MOBILE<span class="text-danger">*</span></label>
                                    <div class="d-flex">
                                        <div class="w-15">
                                            <select class="form-select" id="validationCustom04" required>
                                                <option selected value="">+91</option>
                                                <option>+80</option>
                                            </select>
                                        </div>
                                        <div class="w-75 ms-2">
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Contact Person<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword2" class="form-label">DESIGNATION<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="exampleInputPassword2">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword3" class="form-label">ADDRESS<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="exampleInputPassword3">
                                </div>
                            </form>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="col-md-4">
                            <form class="border rounded">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">ACCOUNT NAME<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Eg: John Doe" required>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">ACCOUNT NUMBER<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Your account number" required>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">BANK NAME<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Add bank name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom04" class="form-label">BANK ADDRESS<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Add bank address" required>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom05" class="form-label">ORGANIZATION NUMBER (OPTIONAL)</label>
                                    <input type="text" class="form-control" id="validationCustom05" placeholder="Add organization number" required>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom06" class="form-label">INSTITUTION NUMBER (ONLY FOR BANKS OF CANADA)</label>
                                    <input type="text" class="form-control" id="validationCustom06" placeholder="Add institution number" required>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom07" class="form-label">TRANSIT NUMBER (ONLY FOR BANKS OF CANADA)</label>
                                    <input type="text" class="form-control" id="validationCustom07" placeholder="Add transit name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom08" class="form-label">SWIFT CODE<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="validationCustom08" placeholder="Add swift code" required>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom09" class="form-label">SWIFT CODE<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="validationCustom09" placeholder="Add ifsc code" required>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom09" class="form-label">SWIFT CODE<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="validationCustom09" placeholder="Add ifsc code" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">COMMENTS</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="N/A" rows="3"></textarea>
                                </div>
                            </form>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-doc" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <h5>Add Documents</h5>
                        <p>Accepted file type: .jpg .jpeg .pdf .doc</p>
                        <div class="drag text-center">
                            <label for="file-upload" class="custom-file-upload">
                                <i class="fa fa-cloud-upload"></i> Drag &amp; <br> Drop Files <br> Here
                            </label>
                            <input id="file-upload" type="file" />
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-agree" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="col-12">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>TERMS AND CONDITIONS FOR RECRUITERS</h4>
                                    <h5>LAST MODIFIED: 27/01/2022</h5>
                                </div>
                                <div>
                                    <a href="add-training.php"><button type="button" class="btn btn-primary py-1 me-4">Download</button></a>
                                </div>
                            </div>
                            <div class="pt-4">
                                <h4>Dfavo AS Recruiter Terms</h4>
                                <ol type="1">
                                    <li>DEFINITIONS</li>
                                    <p>In these Recruiter Terms, capitalised terms shall have the meanings set out in Schedule 1 or otherwise defined in the Agreement.</p>
                                    <li>DEFINITIONS</li>
                                    <p>In these Recruiter Terms, capitalised terms shall have the meanings set out in Schedule 1 or otherwise defined in the Agreement.</p>
                                    <li>DEFINITIONS</li>
                                    <p>In these Recruiter Terms, capitalised terms shall have the meanings set out in Schedule 1 or otherwise defined in the Agreement.</p>
                                    <li>DEFINITIONS</li>
                                    <p>In these Recruiter Terms, capitalised terms shall have the meanings set out in Schedule 1 or otherwise defined in the Agreement.</p>
                                    <li>DEFINITIONS</li>
                                    <p>In these Recruiter Terms, capitalised terms shall have the meanings set out in Schedule 1 or otherwise defined in the Agreement.</p>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection