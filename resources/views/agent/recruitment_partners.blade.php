@extends('layouts.agent_app')
@section('content') 
 
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-row justify-content-between align-items-center">
                    <h1>Recruitment Partners</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-12">
                    <div class="row overflow-hidden" id="student-table">
                        <div class="col-12 position-relative">
                            <div class="myftable">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Actions</th> 
                                            <th scope="col">ID</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Last Visit</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Recruiter Type</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Comapny Name</th>
                                            <th scope="col">Agreement Signed</th>
                                            <th scope="col">Commission</th>
                                            <th scope="col"># of Students</th>
                                            <th scope="col"># of Paid Students</th> 
                                            <th scope="col"># of Applications</th>
                                            <th scope="col">Has Referral Link</th>
                                            <th scope="col">Application Status</th>
                                            <th scope="col">Suspended</th>
                                            <th scope="col">Blocked</th>
                                            <th scope="col">Recruitment Partner Manager</th>
                                            <th scope="col">Partnership Tier</th> 
                                            <th scope="col">Overridden Partnership Tier</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control pl-5 me-6" >
                                            </td>

                                            <td>
                                                <input type="date" class="form-control">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control pl-5 me-6" >
                                            </td>
                                            <td>
                                                <input type="text" class="form-control pl-5 me-6">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control pl-5 me-6">
                                            </td>
                                            <td>
                                                <select name="" class="form-select">
                                                    <option></option>
                                                    <option value="none">None</option>
                                                    <option value="staff">Staff</option>
                                                    <option value="owner">Owner</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control pl-5 me-6">
                                            </td>
                                            <td> 
                                                <input type="text" class="form-control pl-5 me-6">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control pl-5 me-6">
                                            </td>
                                            <td>
                                                <select name="" class="form-select">
                                                    <option></option>
                                                    <option value="none">None</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td>
                                                <select name="" class="form-select" aria-label="Default select example">
                                                    <option></option>
                                                    <option value="none">None</option>
                                                    <option value="active">Active</option>
                                                    <option value="deactivated">Deactivated</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" class="form-select me-5" aria-label="Default select example">
                                                    <option></option>
                                                    <option value="none">None</option>
                                                    <option value="true">True</option>
                                                    <option value="false">False</option>
                                                </select>
                                            </td> 
                                            <td>
                                                <select name="" class="form-select me-5" aria-label="Default select example">
                                                    <option></option>
                                                    <option value="none">None</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td> 
                                            <td>
                                                <select name="" class="form-select" aria-label="Default select example">
                                                    <option>--</option>
                                                    <option value="Mohit Ghai">Mohit Ghai</option> 
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" class="form-select" aria-label="Default select example">
                                                    <option></option>
                                                    <option value="none">None</option>
                                                    <option value="dormant">Dormant</option>
                                                    <option value="new">New</option>
                                                    <option value="bronze">Bronze</option>
                                                    <option value="sliver">Sliver</option>
                                                    <option value="gold">Gold</option>
                                                    <option value="platinum">Platinum</option>
                                                </select>
                                            </td> 
                                            <td>
                                                <select name="" class="form-select" aria-label="Default select example">
                                                    <option></option>
                                                    <option value="none">None</option>
                                                    <option value="dormant">Dormant</option>
                                                    <option value="new">New</option>
                                                    <option value="bronze">Bronze</option>
                                                    <option value="sliver">Sliver</option>
                                                    <option value="gold">Gold</option>
                                                    <option value="platinum">Platinum</option>
                                                </select>
                                            </td>  
                                        </tr>
 
                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href=""><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href=""><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href=""><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
    
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-danger text-white px-2 py-1 rounded-pill text-center">Deactivated</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
    
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-success text-white px-2 py-1 rounded-pill text-center">Active</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
    
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-danger text-white px-2 py-1 rounded-pill text-center">Deactivated</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
    
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-danger text-white px-2 py-1 rounded-pill text-center">Deactivated</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
    
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-danger text-white px-2 py-1 rounded-pill text-center">Deactivated</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
    
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-success text-white px-2 py-1 rounded-pill text-center">Active</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
    
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-danger text-white px-2 py-1 rounded-pill text-center">Deactivated</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-danger text-white px-2 py-1 rounded-pill text-center">Deactivated</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-danger text-white px-2 py-1 rounded-pill text-center">Deactivated</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-success text-white px-2 py-1 rounded-pill text-center">Active</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-danger text-white px-2 py-1 rounded-pill text-center">Deactivated</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-danger text-white px-2 py-1 rounded-pill text-center">Deactivated</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td>
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-danger text-white px-2 py-1 rounded-pill text-center">Deactivated</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td> 
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-success text-white px-2 py-1 rounded-pill text-center">Active</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>
  
                                        <tr>
                                            <td>
                                                <div class="actions-list">
                                                    <ul>
                                                        <li><a href="recruitment_partner_id" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit"><i class="fa-solid fa-pencil"></i></a></li>
                                                        <li><a href="agentDashboard" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dashboard"><i class="fa-solid fa-gauge-high"></i></a></li>
                                                        <li><a href="payments" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Payment"><i class="fa-solid fa-credit-card"></i></a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td><a href="#">2024650</a></td>
                                            <td>20-Sep-2020</td>
                                            <td>28-Jul-2022</td>
                                            <td>info@unitravel.co</td>
                                            <td>Sukhwinder Singh</td>
                                            <td>Brar</td>
                                            <td>Owner</td>
                                            <td>India</td>
                                            <td>Chandigarh</td>
                                            <td>EnrolHere</td>
                                            <td>Yes</td> 
                                            <td>0%</td>
                                            <td><a href="">0</a></td>
                                            <td>0</td>
                                            <td><a href="">0</a></td>
                                            <td>False</td>
                                            <td>
                                                <div class="bg-danger text-white px-2 py-1 rounded-pill text-center">Deactivated</div>
                                            </td>
                                            <td>False</td>
                                            <td>Yes</td>
                                            <td>
                                                <a href="">mohit.ghai@applyboard.com</a>
                                            </td>
                                            <td>Gold</td>
                                            <td> </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col d-flex justify-content-start align-items-center py-3">
 
                    <nav aria-label="Page navigation example " class="d-flex px-3">
                        <ul class="pagination p-0 m-0 pe-3">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                        <span class="d-flex align-items-center border-startps-2">1 - 20 of 300</span>
                    </nav>

                </div>

            </div>
        </div> 
    </div>
 
@endsection