@extends('layouts.student_app')
@section('content')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
 
</head>

    <div class="page-content payment-page">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-md-12">
                   
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-summary-tab" data-bs-toggle="pill" data-bs-target="#pills-summary" type="button" role="tab" aria-controls="pills-summary" aria-selected="true">Summary</button>
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
                            
                            <div class="row bg-white p-4">
                                <div class="col-md-5">
                                    <table class="table table-bordered">
                                        <tbody><tr>
                                            <th>Order ID</th>
                                            <th>Date</th>
                                            <th>Account</th>
                                            <th>Items</th>
                                        </tr> 
                                    </tbody></table>
                                    <div class="form-group mt-md-4"> 
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary fs-5" type="button">Prev</button> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center m-auto">
                                    <p class="fs-4">Page: 1 / 1</p>
                                </div>
                                <div class="col-md-5">
                                    <table class="table table-bordered">
                                        <tbody><tr>
                                            <th>Amount  </th>
                                            <th>Method</th>
                                            <th>Credit Balance	</th>
                                            <th>Actions</th>
                                        </tr> 
                                    </tbody></table>
                                    <div class="form-group mt-md-4"> 
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary fs-5" type="button">Next</button> 
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