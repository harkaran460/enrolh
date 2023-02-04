@extends('layouts.agent_app')
@section('content')

 <div class="page-content payment-page ">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-md-12">
                   
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-summary-tab" data-bs-toggle="pill" data-bs-target="#pills-summary" type="button" role="tab" aria-controls="pills-summary" aria-selected="true">Summary</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-advanced-commissions-tab" data-bs-toggle="pill" data-bs-target="#pills-advanced-commissions" type="button" role="tab" aria-controls="pills-advanced-commissions" aria-selected="false">Advanced Commissions</button>
                        </li> 
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-summary" role="tabpanel" aria-labelledby="pills-summary-tab">
                            <h2>Account Balances</h2>

                            <div class="main-account-balances">
                                <div class="muiBox-root-heading">
                                    <h4><b>Commissions</b></h4>
                                    <div class="icon ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="The Blance shows what you owe applyBord. The founds are credited to and recouped form your Commissions account.">
                                        <i class="fa-solid fa-circle-question"></i>
                                    </div>
                                </div>
                                <ul class="main-account-list">
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li> 
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li> 
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li> 
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li>  
                                </ul>
                            </div>

                            <div class="main-account-balances">
                                <div class="muiBox-root-heading">
                                    <h4><b>ApplyCredits</b></h4>
                                    <div class="icon ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="The Balance can be Used to make payments with in Enrol Here. It is not withdrawable">
                                        <i class="fa-solid fa-circle-question"></i>
                                    </div>
                                </div>
                                <ul class="main-account-list">
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li> 
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li> 
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li> 
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li>  
                                </ul>
                            </div>

                            <div class="main-account-balances">
                                <div class="muiBox-root-heading">
                                    <h4><b>Advanced Commissions</b></h4>
                                    <div class="icon ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="The Balance can be Used to make payments with in Enrol Here. It is not withdrawable">
                                        <i class="fa-solid fa-circle-question"></i>
                                    </div>
                                </div>
                                <ul class="main-account-list">
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li> 
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li> 
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li> 
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li>  
                                </ul>
                            </div>

                            <h3 class="mt-md-4 mb-md-4"><b> Payment History <i class="fa-solid fa-filter" id="payments-filter"></i></b></h3>
                            <div class="row payment-history">
                                <div class="col-md-6">
                                    <div class="row bg--color">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="fs-5 text-light">Search</label>
                                                <input class="form-control" type="text" name="" placeholder="Search here...">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 text-light">Payment Method</label>
                                            <ul class="icon-payment">
                                                <li><i class="fa-brands fa-cc-stripe text-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="stripe"></i></li>
                                                <li><i class="fa-solid fa-right-left text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Manual Payment"></i></li>
                                                <li><i class="fa-solid fa-money-bill-1 text-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Account Credit"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <label class="fs-5 text-light"> Amount Range </label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" placeholder="Min">
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="fs-4 text-light">to</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" placeholder="Max">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 text-light"> Type </label>
                                            <ul class="payment-type">
                                                <li><span>A</span></li>
                                                <li><span>S</span></li>
                                                <li><span>X</span></li>
                                                <li><span>C</span></li>
                                                <li><span>O</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>

                            <div class="payment-history-table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Student</th>
                                            <th scope="col">Items</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Method</th>
                                            <th scope="col">Credit Balance</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2219028	</td>
                                            <td>2022-07-20</td>
                                            <td><a href="agent_student_profile"> Sunpreet Kaur</a></td>
                                            <td>
                                                <span class="payment-type green" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Agent Commission Payment">
                                                    <span>C</span>
                                                </span>
                                                Commission: [1311633] University Diploma - General Studies, University of the Fraser Valley
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>($868.05 CAD)</li>
                                                    <li>($868.05 CAD)</li>
                                                    <li>£0.00 GBP</li>
                                                    <li>$0.00 AUD</li>
                                                    <li>€0.00 EUR</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="payment-icon">
                                                    <i class="fa-solid fa-money-bill-1"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>($868.05 CAD)</li>
                                                    <li>($868.05 CAD)</li>
                                                    <li>£0.00 GBP</li>
                                                    <li>$0.00 AUD</li>
                                                    <li>€0.00 EUR</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="view-detalis">
                                                    <a href="" class="btn btn-primary px-3">View Detalis</a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2219028	</td>
                                            <td>2022-07-20</td>
                                            <td><a href="agent_student_profile"> </a></td>
                                            <td>
                                                <span class="payment-type" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Agent Commission Payment">
                                                    <span>O</span>
                                                </span>
                                                Commission: [1311633] University Diploma - General Studies, University of the Fraser Valley
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>($868.05 CAD)</li>
                                                    <li>($868.05 CAD)</li>
                                                    <li>£0.00 GBP</li>
                                                    <li>$0.00 AUD</li>
                                                    <li>€0.00 EUR</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="payment-icon"> 
                                                    <i class="fa-solid fa-money-bill-1"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>($868.05 CAD)</li>
                                                    <li>($868.05 CAD)</li>
                                                    <li>£0.00 GBP</li>
                                                    <li>$0.00 AUD</li>
                                                    <li>€0.00 EUR</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="view-detalis">
                                                    <a href="" class="btn btn-primary px-3">View Detalis</a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2219028	</td>
                                            <td>2022-07-20</td>
                                            <td><a href="agent_student_profile"> Sunpreet Kaur</a></td>
                                            <td>
                                                <span class="payment-type green" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Agent Commission Payment">
                                                    <span>C</span>
                                                </span>
                                                Commission: [1311633] University Diploma - General Studies, University of the Fraser Valley
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>($868.05 CAD)</li>
                                                    <li>($868.05 CAD)</li>
                                                    <li>£0.00 GBP</li>
                                                    <li>$0.00 AUD</li>
                                                    <li>€0.00 EUR</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="payment-icon">
                                                    <i class="fa-solid fa-money-bill-1"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>($868.05 CAD)</li>
                                                    <li>($868.05 CAD)</li>
                                                    <li>£0.00 GBP</li>
                                                    <li>$0.00 AUD</li>
                                                    <li>€0.00 EUR</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="view-detalis">
                                                    <a href="" class="btn btn-primary px-3">View Detalis</a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2219028	</td>
                                            <td>2022-07-20</td>
                                            <td><a href="agent_student_profile"></a></td>
                                            <td>
                                                <span class="payment-type" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Agent Commission Payment">
                                                    <span>O</span>
                                                </span>
                                                Commission: [1311633] University Diploma - General Studies, University of the Fraser Valley
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>($868.05 CAD)</li>
                                                    <li>($868.05 CAD)</li>
                                                    <li>£0.00 GBP</li>
                                                    <li>$0.00 AUD</li>
                                                    <li>€0.00 EUR</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="payment-icon">
                                                    <i class="fa-solid fa-money-bill-1"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>($868.05 CAD)</li>
                                                    <li>($868.05 CAD)</li>
                                                    <li>£0.00 GBP</li>
                                                    <li>$0.00 AUD</li>
                                                    <li>€0.00 EUR</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="view-detalis">
                                                    <a href="" class="btn btn-primary px-3">View Detalis</a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2219028	</td>
                                            <td>2022-07-20</td>
                                            <td><a href="agent_student_profile"> Sunpreet Kaur</a></td>
                                            <td>
                                                <span class="payment-type green" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Agent Commission Payment">
                                                    <span>C</span>
                                                </span>
                                                Commission: [1311633] University Diploma - General Studies, University of the Fraser Valley
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>($868.05 CAD)</li>
                                                    <li>($868.05 CAD)</li>
                                                    <li>£0.00 GBP</li>
                                                    <li>$0.00 AUD</li>
                                                    <li>€0.00 EUR</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="payment-icon">
                                                    <i class="fa-solid fa-money-bill-1"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>($868.05 CAD)</li>
                                                    <li>($868.05 CAD)</li>
                                                    <li>£0.00 GBP</li>
                                                    <li>$0.00 AUD</li>
                                                    <li>€0.00 EUR</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="view-detalis">
                                                    <a href="" class="btn btn-primary px-3">View Detalis</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-advanced-commissions" role="tabpanel" aria-labelledby="pills-advanced-commissions-tab">
                            
                            <div class="main-account-balances">
                                <div class="muiBox-root-heading">
                                    <h4><b>Advanced Commissions</b></h4>
                                    <div class="icon ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="The Blance shows what you owe applyBord. The founds are credited to and recouped form your Commissions account.">
                                        <i class="fa-solid fa-circle-question"></i>
                                    </div>
                                </div>
                                <ul class="main-account-list">
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li> 
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li> 
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li> 
                                    <li>
                                        <div class="muiListItemAvatar-root">
                                            <div class="muiAvatar-circular">$</div>
                                        </div>
                                        <div class="muiListItemText-multiline ms-3"> 
                                            <div class="d-flex justify-content"> 
                                                <h4>USD</h4> 
                                                <h5 class="ms-auto"><b> $0.00</b></h5>
                                            </div> 
                                            <h5>United States Dollar</h5>
                                        </div> 
                                    </li>  
                                </ul>
                            </div>

                            <h3 class="mt-md-4 mb-md-4"><b> Transaction History </b></h3>


                            <div class="transaction-history">
                                <table class="fold-table table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Credit</th>
                                            <th>Debit</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="view">
                                            <td>May 06, 2022</td>
                                            <td>
                                                Advanced Commission Deposit: Better Together Program - India - In-Advance Commission Promotion - ...</td>
                                            <td></td>
                                            <td>$1,200.00 CAD</td>
                                        </tr>
                                        <tr class="fold">
                                            <td></td>
                                            <td>
                                                <span class="float-left">TRANSACTION DETAILS</span>
                                                <span class="float-end">TRANSACTION ID: b54a792c-2330-44a5-96a0-3f3534d2d126</span> 
                                                <p>Advanced Commission Deposit: Better Together Program - India - In-Advance Commission Promotion - Fall 2022</p>
                                            </td>
                                            <td></td>
                                            <td>$1,200.00 CAD</td>  
                                        </tr>

                                        <tr class="view">
                                            <td>May 06, 2022</td>
                                            <td>
                                                Advanced Commission Deposit: Better Together Program - India - In-Advance Commission Promotion - ...</td>
                                            <td></td>
                                            <td>$1,200.00 CAD</td>
                                        </tr>
                                        <tr class="fold">
                                            <td></td>
                                            <td>
                                                <span class="float-left">TRANSACTION DETAILS</span>
                                                <span class="float-end">TRANSACTION ID: b54a792c-2330-44a5-96a0-3f3534d2d126</span> 
                                                <p>Advanced Commission Deposit: Better Together Program - India - In-Advance Commission Promotion - Fall 2022</p>
                                            </td>
                                            <td></td>
                                            <td>$1,200.00 CAD</td>  
                                        </tr>

                                        <tr class="view">
                                            <td>May 06, 2022</td>
                                            <td> Advanced Commission Deposit: Better Together Program - India - In-Advance Commission Promotion - ...</td>
                                            <td>$1,200.00 CAD</td>
                                            <td></td>
                                        </tr>
                                        <tr class="fold">
                                            <td></td>
                                            <td>
                                                <span class="float-left">TRANSACTION DETAILS</span>
                                                <span class="float-end">TRANSACTION ID: b54a792c-2330-44a5-96a0-3f3534d2d126</span> 
                                                <p>Advanced Commission Deposit: Better Together Program - India - In-Advance Commission Promotion - Fall 2022</p>
                                            </td>
                                            <td></td>
                                            <td>$1,200.00 CAD</td>  
                                        </tr>

                                        <tr class="view">
                                            <td>May 06, 2022</td>
                                            <td> Advanced Commission Deposit: Better Together Program - India - In-Advance Commission Promotion - ...</td>
                                            <td>$1,200.00 CAD</td>
                                            <td></td>
                                        </tr>
                                        <tr class="fold">
                                            <td></td>
                                            <td>
                                                <span class="float-left">TRANSACTION DETAILS</span>
                                                <span class="float-end">TRANSACTION ID: b54a792c-2330-44a5-96a0-3f3534d2d126</span> 
                                                <p>Advanced Commission Deposit: Better Together Program - India - In-Advance Commission Promotion - Fall 2022</p>
                                            </td>
                                            <td></td>
                                            <td>$1,200.00 CAD</td>  
                                        </tr>

                                        <tr class="view">
                                            <td>May 06, 2022</td>
                                            <td>
                                                Advanced Commission Deposit: Better Together Program - India - In-Advance Commission Promotion - ...</td>
                                            <td></td>
                                            <td>$1,200.00 CAD</td>
                                        </tr>
                                        <tr class="fold">
                                            <td></td>
                                            <td>
                                                <span class="float-left">TRANSACTION DETAILS</span>
                                                <span class="float-end">TRANSACTION ID: b54a792c-2330-44a5-96a0-3f3534d2d126</span> 
                                                <p>Advanced Commission Deposit: Better Together Program - India - In-Advance Commission Promotion - Fall 2022</p>
                                            </td>
                                            <td></td>
                                            <td>$1,200.00 CAD</td>  
                                        </tr>
                                              
                                    </tbody>
                                </table>

                                <div class="col d-flex justify-content-start align-items-center py-3"> 

                                    <div class="d-flex flex-row border-end pe-2">
                                        <span class="d-flex align-items-center pe-2">Row:</span>
                                        <select class="form-select" aria-label="Default select example"> 
                                            <option value="10">10</option>
                                            <option value="25" selected>25</option>
                                            <option value="50">50</option>
                                        </select> 
                                    </div>

                                    <nav aria-label="Page navigation example" class="d-flex">
                                        <ul class="pagination p-0 m-0 pe-3">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <span class="d-flex align-items-center border-startps-2">1 - 20 of 150</span>
                                    </nav> 
                                </div>

                            </div>

                        </div>
                    </div>

                </div> 
            </div> 
        </div>
    </div>
    
@endsection