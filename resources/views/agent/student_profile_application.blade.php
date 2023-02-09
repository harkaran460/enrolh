@extends('layouts.agent_app')
@section('content')
    <div class="page-content p-15 mx-2">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white p-4 rounded-5">
                        <?php if(!empty($student_details)){ ?>
                        <div class="css-1y75kwg css-1jlq0r60">
                            <div class="css-q6cz2y css-1jlq0r62">
                                <div class="css-1jlq0r65 css-gqqadv">

                                    @php $firstcaracter = substr($student_details->first_name, 0, 1); @endphp

                                    <div data-testid="student-profile-{{ $student_details->id }}-initials-avatar" class="css-m8p8pp">{{ $firstcaracter }}</div>
                                </div>
                            </div>
                            <div class="css-1ca1ag7 css-1jlq0r61">
                                <div class="css-1yyj7dd css-1jlq0r63"><?php echo ucfirst($student_details->first_name);?>
                                    <?php echo ucfirst($student_details->middle_name);?>
                                    <?php echo ucfirst($student_details->last_name);?></div>
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
                                <span class="css-1ksf4ma css-1uorugc4 active-application">Applications
                                <span class="css-c6v9dn css-1uorugc2">
                                        @if (!empty($totalcount))
                                            {{ $totalcount }}@else{{ '0' }}
                                        @endif
                                    </span></span>
                            </a>
                            <a href="/student-payment/{{ $student_details->id }}">
                                <span class="css-1ksf4ma css-1uorugc4">Payments</span>
                            </a>
                        </div>

                        <div class="box-holder p-4">

                            <div class="bg-white ">

                        <div class="row overflow-hidden">
                            <div class="col-12">
                                <div class="css-120btev css-1piu9jy1">
                                    <div class="css-exg4v5 edqie6p13">
                                        <span aria-hidden="true" class="fa fa-shopping-cart shop_cart-spamain-one"></span>
                                        <span class="paid_unpaidApp-spamain">Unpaid Applications</span>
                                            <div class="success-message"></div>
                                            <div class="danger-message"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row overflow-hidden">
                            <div class="col-12">
                                <div class="myftable">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-center">
                                                    <button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                                </td>
                                                <th class="text-center" scope="col">Status </th>
                                                <th class="text-center" scope="col">App ID</th>
                                                <th class="text-center" scope="col">School Name</th>
                                                <th class="text-center" scope="col">Program</th>
                                                <th class="text-center" scope="col">ESL Start Date</th>
                                                <th class="text-center" scope="col">Start Date</th>
                                                <th class="text-center" scope="col">Fees</th>
                                                <th class="text-center" scope="col">Application Status</th>
                                                <th class="text-center" scope="col">Pay Fees</th>
                                                <th class="text-center" scope="col"></th>
                                                <th class="text-center" scope="col" colspan="4">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $total = 0; ?>
                                            @if (!empty($aplication_details))
                                                @foreach ($aplication_details as $details)
                                                    @if ($details->payment_status == 1)
                                                        <tr>
                                                            <td class="text-center">
                                                                <button class="btn border-0"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="">{{ $details->status_name }}</a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="/student-application-review/{{ $details->app_id }}">{{ $details->app_id }}</a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="/agent-college-details/{{ $details->college_id }}">{{ $details->program_college_name }}</a>
                                                                </td>
                                                            <td class="text-center">
                                                                <span>{{ $details->programs_name }}</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span>ESL</span>
                                                                <span class="">
                                                                    <select class="form-control mt-2" disabled style="width: 100px; margin: auto; padding: 5px 15px;">
                                                                        <option value="">N/A</option>
                                                                    </select>
                                                                </span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span>Academic</span>
                                                                <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Click to view courses ckecklist" aria-describedby="tooltip328" class="css-eogltt">
                                                                    {{ $details->status }}</span>
                                                                <span>
                                                                    <select class="form-select mt-2" style="padding: 4px 15px; font-size: 13px;">
                                                                        @php $intekdates = getIntekDate() @endphp
                                                                        @foreach ($intekdates as $intekdate)
                                                                            <option value="{{ $intekdate->earliest_intake_date }}"
                                                                                {{ $intekdate->earliest_intake_date == "$details->earliest_intake_date" ? 'selected' : '' }}>
                                                                                {{ date('Y - M', strtotime($intekdate->earliest_intake_date)) }}.
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span> Application Fee </span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span> {{ $details->application_fee_min }}</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span> {{$details->current_status}}</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="amount" class="form-control amount" value ="{{ $details->application_fee_min }}">
                                                                <input type="hidden" name="email" class="form-control email" value ="{{ $student_details->email }}">
                                                                <input type="hidden" name="mobile" class="form-control mobile" value ="{{ $student_details->phone_number }}">
                                                                <input type="hidden" name="disc" class="form-control disc" value ="Application Fees Payment">
                                                                <input type="hidden" name="appid" class="form-control appid" value ="{{ $details->app_id }}">
                                                                <input type="hidden" name="name" class="form-control name" value ="{{ $student_details->first_name }} {{ $student_details->last_name }}">
                                                                <input type="hidden" name="note" class="form-control note" value ="Application Fees Payment">
                                                                <input type="hidden" name="student_id" class="form-control sid" value ="{{$student_details->id}}">
                                                                <span style="margin: 5px 0; display: block;">
                                                                    <button id="rzp-button1" class="btn btn-success btn-lg fs-6">Pay</button>
                                                                </span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Application Note" class="application-note">
                                                                    <a href="#">
                                                                        <i class="fa-solid fa-note-sticky"></i>
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td class="action text-center">
                                                                <a href="/student-application-review/{{ $details->app_id }}" class="edit">
                                                                    <i class="fa-solid fa-pen-to-square fs-4"></i>
                                                                </a>
                                                            </td>
                                                            <td class="action text-center">
                                                                <a href="" class="delete" data-bs-toggle="modal" data-bs-target="#user-delete">
                                                                    <i class="fa-solid fa-trash fs-4"></i>
                                                                </a>
                                                                <div class="modal fade" id="user-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body text-center">
                                                                                <h2>Are You Sure</h2>
                                                                            </div>
                                                                            <div class="modal-footer d-flex justify-content-between">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                <button type="button" class="btn btn-danger">
                                                                                    <a href="/student-profile-application-delete/{{ $details->id }}">Delete</a>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!--Total -->
                                                        @php
                                                            $total += $details->application_fee_min;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                <!--{{ $aplication_details->links() }}   -->

                                            @endif

                                        </tbody>
                                        <tfoot>
                                            <tr class="">
                                                <td colspan="9">
                                                    <span class="float-end"> </span>
                                                </td>
                                                <td class="text-center">
                                                    <span><b style="color:#ff0000a1 !important"> Total </b> </span>
                                                </td>
                                                <td colspan="3" class="text-center">
                                                    <span><b style="color:#ff0000a1 !important"> {{ $total }} </b> </span>
                                                </td>
                                            </tr>
                                        </tfoot>

                                    </table>
                                    <div class="cpagination"> {{ $aplication_details->links() }} </div>
                                </div>
                            </div>
                        </div>


                         </div>
                        </div>




                        <div class="row overflow-hidden mt-3">
                            <div class="col-md-8">

                            </div>
                            <div class="col-md-4">
                                <div class="float-end mt-1">
                                    <a href="/search-and-apply/{{ $student_details->id }}">
                                        <button type="button" class="btn  btn1-primary">Find More Programs</button>
                                    </a>
                                    <!--<button type="button" class="btn btn-primary">Find More Programs</button>-->
                                </div>
                            </div>
                        </div>


                        <!--SECTION DONE BY KD-->

                        <div class="box-holder p-4">

                            <div class="bg-white ">

                        <div class="row overflow-hidden mt-3">
                            <div class="col-12">
                                <div class="css-1lgqrjk css-1piu9jy1">
                                    <div class="css-exg4v5 edqie6p13">
                                        <span aria-hidden="true" class="fa fa-shopping-cart shop_cart-spamain-two"></span>
                                        <span class="pl-2 pd_appSpa-main">Paid Applications</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row overflow-hidden">
                            <div class="col-12">
                                <div class="myftable">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Status </th>
                                                <th scope="col">App ID</th>
                                                <th scope="col">School Name</th>
                                                <th scope="col">Program</th>
                                                <th scope="col">ESL Start Date</th>
                                                <th scope="col">Start Date</th>
                                                <th scope="col">Fees</th>
                                                <th scope="col">Application Status</th>
                                                <th scope="col" colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($aplication_details))
                                                @foreach ($aplication_details as $details)
                                                    @if ($details->payment_status != 1)
                                                        <tr>
                                                            <td>{{ $details->status_name }}</td>
                                                            <td><a href="/student-application-review/{{ $details->app_id }}"> {{ $details->app_id }} </a>
                                                            </td>
                                                            <td><a href="/agent-college-details/{{ $details->college_id }}"> {{ $details->program_college_name }} </a>
                                                            </td>
                                                            <td><span> {{ $details->programs_name }} </span></td>
                                                            <td>
                                                                <span>ESL</span>
                                                                <span> N/A </span>
                                                            </td>
                                                            <td>
                                                                <span> Academic </span>
                                                                <span>{{ date('Y - M', strtotime($details->earliest_intake_date)) }}</span>
                                                            </td>
                                                            <td><span>Application Fee </span>
                                                                {{ $details->application_fee_min }}</td>
                                                                <td><span> {{$details->current_status}}</span></td>
                                                            <td>
                                                                <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Application Note" class="application-note">
                                                                    <a href="student_profile_review">
                                                                        <i class="fa-solid fa-note-sticky"></i>
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td class="action">
                                                                <a href="/student-application-review/{{ $details->app_id }}" class="edit">
                                                                    <i class="fa-solid fa-pen-to-square fs-4"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                                <!--{{ $aplication_details->links() }}-->
                                            @endif
                                        </tbody>

                                    </table>
                                    <div class="cpagination"> {{ $aplication_details->links() }} </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>

                        <!--SECTION DONE BY KD-->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .overflow-hidden {
            overflow: scroll !important;
            width: 100%;
        }

    .w-5.h-5 {
        width: 2%;
    }
    .paid_unpaidApp-spamain{
        color:#ff0000a1 !important;
    }
    .pd_appSpa-main{
        color:#008000cf !important;
    }
    .shop_cart-spamain-one{
        color:red !important;
    }
    .shop_cart-spamain-two{
        color:green !important;
    }

    </style>
@endsection
