@extends('layouts.agent_app')
@section('content')
<?php //echo "<pre>";print_r($payment_details);?>

    <div class="page-content p-15 mx-1">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white p-4 mb-md-3">
                        <?php if(!empty($student_details)){ ?>
                            <div class="css-1y75kwg css-1jlq0r60">
                                <div class="css-q6cz2y css-1jlq0r62">
                                    <div class="css-1jlq0r65 css-gqqadv">

                                        @php $firstcaracter = substr($student_details->first_name, 0, 1); @endphp

                                        <div data-testid="student-profile-{{ $student_details->id }}-initials-avatar"
                                            class="css-m8p8pp">{{ $firstcaracter }}</div>
                                    </div>
                                </div>
                                <div class="css-1ca1ag7 css-1jlq0r61">

                                    <div class="css-1yyj7dd css-1jlq0r63"><?php echo ucfirst($student_details->first_name);?>
                                    <?php echo ucfirst($student_details->middle_name);?>
                                     <?php echo ucfirst($student_details->last_name);?></div>

                                 <div>

                                    <div>
                                        <span class="css-1ai5g3s css-1jlq0r64">{{ $student_details->id }}</span>
                                        <span class="css-1ai5g3s css-1jlq0r64">|</span>
                                        <span class="css-1ai5g3s css-1jlq0r64">
                                            <a href="mailto:{{ $student_details->email }}">{{ $student_details->email }}</a>
                                        </span>
                                        <span class="css-1ai5g3s css-1jlq0r64">|</span>
                                        <span class="css-1ai5g3s css-1jlq0r64">
                                            <a href="tel:{{ $student_details->phone_number }}">+91
                                                {{ $student_details->phone_number }}</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php }?>

                        <div class="css-1sqs8up css-1uorugc3">
                            <a href="/agent-student-profile/{{ $student_details->id }}">
                                <span class="css-1ksf4ma css-1uorugc4 ">Profile</span>
                            </a>
                            <a href="/search-and-apply/{{ $student_details->id }}">
                                <span class="css-1ksf4ma css-1uorugc4">Search and Apply</span>
                            </a>
                            <a href="/student-profile-application/{{ $student_details->id }}">
                                <span class="css-1ksf4ma css-1uorugc4">Applications<span class="css-c6v9dn css-1uorugc2">3</span></span>
                            </a>
                            <a href="/student-payment/{{ $student_details->id }}">
                                <span class="css-1ksf4ma css-1uorugc4 active-application">Payments</span>
                            </a>
                        </div>
                    </div>

                    <h3 class="mt-md-4 mb-md-4"><b> Account Balances</b></h3>

                    <div class="main-account-balances">
                        <div class="muiBox-root-heading">
                            <h5><b>Commissions</b></h5>
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
                        <div class="col-md-5 ">
                            <div class="table-responsive-sm">


                            <table class="table table-bordered">
                                <tr>
                                    <th>SN.</th>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Account</th>
                                    <th>Items</th>
                                    <th>Amount</th>
                                    <th>Method</th>
                                    <th>Credit Balance	</th>
                                    <th>Application Status</th>
                                    <th>Payment  Status</th>
                                    <th>Remarks</th>
                                </tr>
                                @if(!empty($payment_details))
                                <?php $count = 1; ?>
                                @foreach ($payment_details as $pd)
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$pd->payment_id}}</td>
                                    <td>{{$pd->created_at}}</td>
                                    <td>NA</td>
                                    <td>{{$pd->appid}}</td>
                                    <td>{{$pd->amount}}</td>
                                    <td>Online</td>
                                    <td>{{$pd->payment_amount}}</td>
                                    <td>{{$pd->app_status}}</td>
                                    <td>{{$pd->payment_status}}</td>
                                    <td>{{$pd->other}}</td>
                                </tr>
                                <?php $count++  ?>
                                @endforeach
                                @endif
                            </table>
                            <div class="form-group mt-md-4">
                                <div class="d-grid gap-2">
                                   {{ $payment_details->links() }}
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
