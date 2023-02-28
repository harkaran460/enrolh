@extends('layouts.agent_app')
@section('content')
<div class="modal fade" id="addNewStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="">
        <div class="modal-dialog" style="max-width: 600px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body " style="height: 600px; overflow-Y: scroll;">
                    <p>Please provide a legitimate email address for your student that is actively monitored by them. Their country is required to forward applications to our partner schools. Note: ApplyBoard will not communicate with your student via email or other methods.</p>

                    <div class="mb-3">
                        <label class="form-label">CONTACT INFORMATION</label>
                        <input type="email" class="form-control mb-3" placeholder="Email">
                        <input type="tel" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PERSONAL INFORMATION</label>
                        <input type="text" class="form-control mb-3" placeholder="Given Name">
                        <input type="text" class="form-control mb-3" placeholder="Middle Name">
                        <input type="text" class="form-control mb-3" placeholder="Family Name">
                        <input  type="text" id="datepicker" class="form-control mb-3"  placeholder="Birth Date">
                        <select class="form-select " aria-label="Default select example">
                            <option selected>Country of Citizenship</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3 gndr-ads">
                        <label class="form-label">Gender</label>
                        <div class="d-flex flex-row sg">
                            <div class="w-100 me-3 d-flex align-items-center">
                                <input class="mt-1 d-none" type="radio" name="select-gender" id="radiomale" checked>
                                <label class="w-100 pt-3 ps-2" for="radiomale">Male</label>
                            </div>
                            <div class="w-100 d-flex align-items-center">
                                <input class="mt-1 d-none" type="radio" name="select-gender" id="radiofemale">
                                <label class="w-100 pt-3 ps-2" for="radiofemale">Female</label>
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">LEAD MANAGEMENT</label>
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Referral Source</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Country of Interest</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Services of Interest</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I confirm that I have received express written consent from the student whom I am creating this profile for and I can provide proof of their consent upon request. To learn more please refer to the <a href="#">Personal Data Consent</a> article.
                        </label>
                    </div>
                </div>
                <div class="modal-footer d-flex flex-row">
                    <button type="button" class="btn px-4" style="background-color: #FFE5E4;" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary px-4 bg">Create Student</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel cardView">
                <span class="icon blue"><img src="assetsAgent/img/card1.png"></span>
                <span class="info">All<strong>Application</strong></span>
                <span class="count blue">@if($totalApplication!=''){{$totalApplication}}@else 0 @endif</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel cardView">
                <span class="icon green"><img src="assetsAgent/img/card2.png"></span>
                <span class="info">Offers<strong>Received</strong></span>
                <span class="count greenText">@if($totalapproveApplication!=''){{$totalapproveApplication}}@else 0 @endif</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel cardView">
                <span class="icon orange"><img src="assetsAgent/img/card3.png"></span>
                <span class="info">Total<strong>Students</strong></span>
                <span class="count orange">@if($totalstudent!=''){{$totalstudent}}@else 0 @endif</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel cardView">
                <span class="icon pink"><img src="assetsAgent/img/card4.png"></span>
                <span class="info">Total<strong>Payments</strong></span>
                <span class="count pink">@if($totalamount!='')Rs. {{$totalamount}}@else 0 @endif</span>
            </div>
        </div>
    </div>
</div>
<div class="dashboardView">
    <div class="dashboardViewLeft">
        <div class="panel">
            <div class="pHead">
                <span class="h5">Summary</span>
                <div class="control">
                    <?php echo '<select class="form-select" name="years" id="year">' . PHP_EOL; $start_from="2022"; for($i = $start_from; $i <=date("Y"); $i++){echo '<option id="year"'.PHP_EOL; if($i==date("Y")){echo 'selected'.PHP_EOL;}echo 'value="' . $i . '">' . $i . '</option>' . PHP_EOL;}echo '</select>';?>
                </div>
            </div>
            <div class="pBody">
                <ul class="nav nav-tabs customTabs" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation"><button class="nav-link active" id="paid-applications-tab" data-bs-toggle="pill" data-bs-target="#paid-applications">Paid Applications</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="paid-students-tab" data-bs-toggle="pill" data-bs-target="#paid-students">Paid Students</button></li>
                </ul>
                <div class="tab-content p-4" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="paid-applications" role="tabpanel" aria-labelledby="paid-applications-tab"><div class="chart-container"><canvas id="myChartsd"></canvas></div></div>
                    <div class="tab-pane fade" id="paid-students" role="tabpanel" aria-labelledby="paid-students-tab"><div class="chart-container"><canvas id="myChart213"></canvas></div></div>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="pHead">
                <span class="h5">Application Reminders</span>
            </div>
            <div class="pBody">
                <div class="table-responsive">
                    <table class="table tableCustomStudent">
                        <thead>
                            <th>APP ID</th>
                            <th>STUDENT NAME</th>
                            <th>PROGRAM NAME</th>
                            <th>SCHOOL NAME</th>
                            <th class="text-center">REQUIEMENTS</th>
                        </thead>
                        <tbody>
    
                            @if(!empty($application_list))
                            @foreach ($application_list as $applist)
                           @if($applist['totalmissing'] >0)
                                <tr>
                                <td><a href="#">{{$applist['appid']}}</a></td>
                                <td><a href="#">{{$applist['name']}}</a></td>
                                <td><a href="#">{{$applist['programs_name']}}</a></td>
                                <td><a href="#">{{$applist['program_college_name']}}</a></td>
                                <td class="requiements-list">
                                    <ul class="text-center">
                                        <li>
                                            <a href="#">
                                                <div class="text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="REQUIEMENTS">{{$applist['totalmissing']}}</div>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            @endif
    
    
                        </tbody>
                    </table>
                </div>
                <div class="btnGroup justify-content-center">
                    <a href="=" class="btn btn-secondary">View More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboardViewRight">
        <div class="panel DashProfile">
            <div class="pHead"></div>
            <div class="pBody">
                <div class="profileImg"><img src="assetsAgent/img/profile.jpg"></div>
                <p class="text"><strong>{{$student_list->name}} {{$student_list->lastname}}</strong><br>Client Relationship Manager <br> @if($totalamount!='')Rs. {{$totalamount}}@else 0 @endif<br><a href="mailto:{{$student_list->email}}"><i class="fa-solid fa-envelope"></i> {{$student_list->email}}</a><br><a href="tel:{{$student_list->phone_number}}"><i class="fa-solid fa-phone"></i>{{$student_list->phone_number}}</a></p>
                <div class="btnGroup justify-content-start"><a href="javascript: void(0);" class="btn-secondary btn">View Profile</a></div>
            </div>
        </div>

        <div class="panel">
            <div class="pBody">
                <span class="h5"><strong>Monthly Applcations</strong></span>
                <p class="text">This month <br><br>
                    @if(!empty($monthly_income['current_month']))
                    <strong>Rs. {{$monthly_income['current_month']}}</strong>
                    @if($monthly_income['current_month'] >= $monthly_income['last_month_revenue']) <br>
                    <span class="greenColor">{{$monthly_income['percentage']}}% <i class="mdi mdi-arrow-up"></i></span> From previous
                    @else
                    <span class="redColor">{{$monthly_income['percentage']}}% <i class="mdi mdi-arrow-down"></i></span> From previous
                    @endif
                    <br><br><strong>Rs. {{$monthly_income['last_month_revenue']}}</strong>
                    @endif
                </p>
                <div class="btnGroup justify-content-start">
                    <a href="javascript: void(0);" class="btn-secondary btn">View More</a>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="pHead">
                <span class="h5">Application Status</span>
            </div>
            <div class="pBody">
                <table class="table tableCustomStudent">
                    <tbody>
                        <?php foreach ($statuslist as $key => $value) { ?>
                            @if($value >0)
                            <tr>
                                <td><p class="mb-0">{{$key}}</p></td>
                                <td><p class="mb-0 font-size-18"><b>{{$value}}</b></p></td>
                            </tr>
                            @endif
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="pHead">
                    <span class="h5">Commissions by Quarter</span>
                </div>
                <div class="pBody commissions-by">
                    <div id="chartDiv" style="height: 300px;"> </div>
                    <ul>
                        <li><span class="size"></span> USD</li>
                        <li><span class="size"></span> CAD</li>
                        <li><span class="size"></span> GBP</li>
                        <li><span class="size"></span> EUR</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pHead">
                            <span class="h5">Wallet Details</span>
                        </div>
                        <div class="pBody walletView">
                            <span>CAD <strong>₹ 0</strong></span>
                            <span>EUR <strong>₹ 0</strong></span>
                            <span>AUD <strong>₹ 0</strong></span>
                            <span>USD <strong>₹ 0</strong></span>
                            <span>GBP <strong>₹ 0</strong></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pHead">
                            <span class="h5">Notice Board</span>
                        </div>
                        <div class="pBody noticeBoard">
                            <?php if(!empty($notice_board)) { foreach ($notice_board as $list) { ?><span class=""><strong>{{$list->notice_title}}</strong>{{$list->notice_des}} <span>{{date('d-M-Y', strtotime($list->created_at))}}</span></span><?php } }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="pHead">
                    <span class="h5">Revenue</span>
                </div>
                <div class="pBody revenueView">
                    <span>Potential Commission <strong>4</strong></span>
                    <span>Earned <strong>0</strong></span>
                    <span>Withdrawn <strong>0</strong></span>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel">
                <div class="pHead">
                    <span class="h5">Team Proformance</span>
                </div>
                <div class="pBody">
                    <div class="table-responsive">
                        <table class="table tableCustomStudent" id="csmTable" style="vertical-align: middle;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Status </th>
                                    <th>Students</th>
                                    <th>Application</th>
                                    <th>Fees Paid</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($team_performance))
                                @foreach($team_performance as $team)
                                <tr>
                                    <td>
                                        <div class="d-flex w-100">
                                            <div class="image-content">
                                                <img src="assetsAgent/img/user-img.png" class="img-fluid" alt="">
                                                <h2>{{$team ->name}}</h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="deposit-btn">
                                            <a href="" class="status-success">{{$team ->status}}</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="price-list">
                                            NA
                                        </div>
                                    </td>
                                    <td>NA</td>
                                    <td>NA</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="btnGroup justify-content-center">
                        <a href="=" class="btn btn-secondary">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-none">
    <h5 class="font-size-18"><b> School</b></h5>
    <?php if(!empty($college_list )) { foreach ($college_list as $collegename) { ?> <div class="col-md-2 col-6"><div id="school1"></div><div class="collage-name"><h5><a href="/agent-college-details/{{$collegename->id}}">{{$collegename->college_name}}</a></h5></div></div> <?php } } ?> 
</div>
    <script src="{{ asset('assetsAgent/js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="https://code.jscharting.com/2.9.0/jscharting.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>-->
    <script>

    $(document).ready(function() {
            $('#year').change(function(){
            var year=$('#year').val();
                 $.ajax({
                    type: "GET",
                    url: "yearChartReq",
                    data: { year: year},
                    success: function(val){
                         myChartsd.data = val;
                         myChartsd.update();
                        //  console.log(val);
                    try{
                    }catch(e) {
                        alert('Exception while request..');
                        }
                    },
                    error: function(){
                        alert('Error while request..');
                    }
                });
        });
    });

        const ctx11 = document.getElementById('myChartsd').getContext('2d');

        const myChartsd = new Chart(ctx11, {
            type: 'bar',
            data: {!! $dataSet !!},
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        // Disable the on-canvas tooltip
                        enabled: false,

                        external: function(context) {
                            // Tooltip Element
                            let tooltipEl = document.getElementById('chartjs-tooltip');

                            // Create element on first render
                            if (!tooltipEl) {
                                tooltipEl = document.createElement('div');
                                tooltipEl.id = 'chartjs-tooltip';
                                tooltipEl.innerHTML = '<table class="table table-borderless" style="border-radius:0"></table>';
                                document.body.appendChild(tooltipEl);
                            }

                            // Hide if no tooltip
                            const tooltipModel = context.tooltip;
                            if (tooltipModel.opacity === 0) {
                                tooltipEl.style.opacity = 0;
                                return;
                            }

                            // Set caret Position
                            tooltipEl.classList.remove('above', 'below', 'no-transform');
                            if (tooltipModel.yAlign) {
                                tooltipEl.classList.add(tooltipModel.yAlign);
                            } else {
                                tooltipEl.classList.add('no-transform');
                            }

                            function getBody(bodyItem) {
                                return bodyItem.lines;
                            }

                            // Set Text
                            if (tooltipModel.body) {
                                const titleLines = tooltipModel.title || [];
                                const bodyLines = tooltipModel.body.map(getBody);

                                let innerHtml = '<thead>';

                                titleLines.forEach(function(title) {
                                    innerHtml += '<tr><th class="">' + title + '</th></tr>';
                                });
                                innerHtml += '</thead><tbody>';

                                bodyLines.forEach(function(body, i) {
                                    const colors = tooltipModel.labelColors[i];
                                    let style = 'color:' + colors.backgroundColor;
                                    style += '; border-color:' + colors.borderColor;
                                    style += '; border-width: 2px';
                                    style += '; font-size: 13px';
                                    const span = '<span style="' + style + '">' + body + '</span>';
                                    innerHtml += '<tr><td>' + span + '</td></tr>';
                                });
                                innerHtml += '</tbody>';

                                let tableRoot = tooltipEl.querySelector('table');
                                tableRoot.innerHTML = innerHtml;
                            }

                            const position = context.chart.canvas.getBoundingClientRect();
                            const bodyFont = Chart.helpers.toFont(tooltipModel.options.bodyFont);

                            // Display, position, and set styles for font
                            tooltipEl.style.opacity = 1;
                            tooltipEl.style.position = 'absolute';
                            tooltipEl.style.left = position.left + window.pageXOffset + tooltipModel.caretX + 'px';
                            tooltipEl.style.top = position.top + window.pageYOffset + tooltipModel.caretY + 'px';
                            tooltipEl.style.font = bodyFont.string;
                            tooltipEl.style.padding = tooltipModel.padding + 'px ' + tooltipModel.padding + 'px';
                            tooltipEl.style.pointerEvents = 'none';
                        }
                    }
                },

                interaction:{
                    mode: 'index',
                    // titleColor: '#000',
                    backgroundColor: '#fff',
                    borderColor: 'rgba(0,0,0,0.7)',
                    borderWidth: 2,
                    displayColors:false,
                    padding: 20

                },
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        beginAtZero: true,
                        stacked: true
                    }
                }
            }
        });

        // myChartsd.style.height = '300px';
        // myChartsd.canvas.parentNode.style.height = '300px';

        const ctx112 = document.getElementById('myChart213').getContext('2d');
        const myChart213 = new Chart(ctx112, {
                    type: 'bar',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                        datasets: [{
                            label: 'Studets',
                            data: {!! $dataSetstd !!},
                            backgroundColor: 'rgba(255,99,132,0.2)',
                            borderColor: 'rgba(255,99,132,1)',
                            borderWidth: 1

                        }]
                    },
                     options: {
                         plugins: {
                            legend: {
                                display: false
                            },
                         },
                        scales: {
                            x: {
                                stacked: true
                            },
                            y: {
                                beginAtZero: true,
                                stacked: true
                            }
                        }
                    }
                });

        // myChartsd.resize('400px', '500px');

    </script>
<!--Commissions by Quarter graph-->
  <script>
    var chart = JSC.chart("chartDiv", {
        debug: true,
        type: '',
        legend_visible: false,
        xAxis: {
            crosshair_enabled: true,
            scale: { type: 'data' }
        },
        yAxis: {
            orientation: 'left',
            formatString: ''
        },
        defaultSeries: {
            firstPoint_label_text: '<b>%seriesName</b>',
            defaultPoint_marker: {
                type: 'circle',
                size: 8,
                fill: 'white',
                outline: { width: 2, color: 'currentColor' }
            }
        },
        title_label_text: '',
        series: [{
                name: '',
                points: [
                    ['Q1', 0],
                    ['Q2', 97.5],
                    ['Q3', 56.4],
                    ['Q4', 109.2]
                ]
            },
            {
                name: '',
                points: [
                    ['Q1', 0],
                    ['Q2', 79.5],
                    ['Q3', 95.4],
                    ['Q4', 97.2]
                ]
            },
            {
                name: '',
                points: [
                    ['Q1', 0],
                    ['Q2', 111.5],
                    ['Q3', 66.4],
                    ['Q4', 29.2]
                ]
            },
            {
                name: '',
                points: [
                    ['Q1', 0],
                    ['Q2', 56.5],
                    ['Q3', 56.4],
                    ['Q4', 56.2]
                ]
            }
        ]
    });
</script>
@endsection
