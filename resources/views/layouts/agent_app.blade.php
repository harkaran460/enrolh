<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8" />
    <title>Agent Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAgent/css/ion.rangeSlider.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAgent/css/bootstrap.min.css') }}"
        id="bootstrap-style" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAgent/css/app.min.css') }}" id="app-style" />
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('assetsAgent/css/daterangepicker.css') }}">-->
    
    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAgent/css/icons.min.css') }}" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAgent/css/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAgent/css/chosen.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAgent/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAgent/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAgent/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAgent/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsAgent/css/responsive.css') }}">

</head>

<body>

    <div id="loading" class="d-none">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two" style="left:20px;"></div>
                <div class="object" id="object_three" style="left:40px;"></div>
                <div class="object" id="object_four" style="left:60px;"></div>
                <div class="object" id="object_five" style="left:80px;"></div>
            </div>
        </div>
    </div>
    
    <header class="mainHeader">
        <a href="javascript:void(0)" class="brandName"><img src="assetsAgent/img/Enrolhere.png"><img src="assetsAgent/img/eh.png"></a>
        <a href="javascript:void(0)" class="toggleSide"><img src="assetsAgent/img/bars.png"></a>
        <span class="pageTitle">Dashboard</span>
        <a class="mainHeaderNotify" href="/important_notice"><img src="assetsAgent/img/bell.png"></a>
        <div class="dropdown profileLogin">
            <img src="assetsAgent/img/profile.png">
            <a type="button" data-bs-toggle="dropdown">{{Auth::user()->name}} <strong>{{Auth::user()->email}}</strong></a>
            <div class="dropdown-menu dropdown-menu-end"> 
                <a class="dropdown-item" href="/recruitment_partner_id">Profile</a> 
                <a class="dropdown-item" href="/logout"><span key="t-logout">Logout</span></a>
            </div>
        </div> 
    </header>

    <section class="mainWrapper">
        <aside class="leftSide">
            <?php $permissions = check_permission()?>
            @foreach ($permissions as $permission)
            <a href="/{{$permission->slug}}"><?php echo $permission->icon;?><span>{{$permission->page_title}}</span></a>
            @endforeach
        </aside>
        <section class="wrapperInner">
            @yield('content')
        </section>
        <footer class="mainFooter">© Enrollhere 2022 All Rights Reserved.</footer>
    </section>

        <script>
            var base_path = '{{ url('/') }}';
        </script>
        
        <!-- Javascript -->
        <script src="{{ asset('assetsAgent/js/jquery.min.js') }}"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.3.2/ckeditor.js"></script>-->
        
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="{{ asset('assetsAgent/js/chosen.jquery.min.js') }}"></script>
        <script src="{{ asset('assetsAgent/js/moment.min.js') }}"></script>
         
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


        <!--<script src="{{ asset('assetsAgent/js/daterangepicker.min.js') }}"></script>-->
        <!--<script src="{{ asset('assetsAgent/js/litepicker.js') }}"></script>--> 

        <!--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-apexcharts"></script>

        <script src="{{ asset('assetsAgent/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assetsAgent/js/metisMenu.min.js') }}"></script> 
        <script src="{{ asset('assetsAgent/js/simplebar.min.js') }}"></script>
        
        <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

        <script src="{{ asset('assetsAgent/js/waves.min.js') }}"></script>
        <script src="{{ asset('assetsAgent/js/jquery.fancybox.min.js') }}"></script>
        <!--<script src="{{ asset('assetsAgent/js/apexcharts.min.js') }}"></script>-->
        <!--<script src="{{ asset('assetsAgent/js/canvasjs.min.js') }}"></script>-->
        <!--<script src="{{ asset('assetsAgent/js/chart.js') }}"></script>-->

        <script src="{{ asset('assetsAgent/js/select2.min.js') }}"></script>
        <!--<script src="{{ asset('assetsAgent/js/ecommerce-select2.init.js') }}"></script>-->
        <!--<script src="{{ asset('assetsAgent/js/dashboard.init.js') }}"></script>-->
        <!--<script src="{{ asset('assetsAgent/js/ion.rangeSlider.min.js') }}"></script>-->
        <!--<script src="{{ asset('assetsAgent/js/range-sliders.init.js') }}"></script>-->
        
        <!--<script src="https://code.jscharting.com/latest/jscharting.js"></script>-->

        <!-- Main js -->
        <script src="{{ asset('assetsAgent/js/app.js') }}"></script>
        <script src="{{ asset('assetsAgent/js/main.js') }}"></script>
        <script src="{{ asset('assetsAgent/js/custom.js') }}"></script>
        <script src="{{ asset('assetsAgent/js/agent_custom.js') }}"></script>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            $(document).on('click', '.toggleSide', function(){
                $(".mainWrapper, .mainHeader").toggleClass("mini");
            })
        </script>
        <script>
            $('body').on('click','#rzp-button1',function(e){
                e.preventDefault();
                var amount = $('.amount').val();
                var email = $('.email').val();
                var mobile = $('.mobile').val();
                var disc = $('.disc').val();
                var appid = $('.appid').val();
                var name = $('.name').val();
                var note = $('.note').val();
                var student_id = $('.sid').val();
                var amount = $('.amount').val();
                var total_amount = amount * 100;
                var options = {
                    "key": "{{ env('razorpay_api_key') }}", // Enter the Key ID generated from the Dashboard
                    "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                    "currency": "INR",
                    "name": name,
                    "description": disc,
                    "image": "https://design.enrolhere.com/mainAssets/assets/img/sdasdad.png",
                    "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                    "handler": function (response){
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            type:'POST',
                            url:"{{ route('payment') }}",
                            data:{razorpay_payment_id:response.razorpay_payment_id,amount:amount,student_id:student_id,appid:appid,disc:disc},
                            success:function(data){
                                if(data.success =='paid'){
                                    $('.success-message').html('<span class="alert alert-success">Thank You ! Your application fees paid successfully</span>');   
            
                                }else
                                {
                                    $('.danger-message').html('<span class="alert alert-danger ">OOPS ! Your application fees payment failed, Please try again</span>');    
                                }
                                setTimeout(function(){
                                window.location.reload(); 
                                },5000); 




                            }
                        });
                    },
                    "prefill": {
                        "name": name,
                        "email": email,
                        "contact": mobile
                    },
                    "notes": {
                        "address": note
                    },
                    "theme": {
                        "color": "#F37254"
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
            });
      
            // click body js 
            const checkbox = document.getElementById('checkbox');

            checkbox.addEventListener('change', () => {
                document.body.classList.toggle('dark');
            });

            $(".gallery-list a").fancybox();
            
            $(function() {
                
                $( "#datepicker" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'yy-mm-dd'
                });
            });
            
    
            var _seed = 42;
            Math.random = function() {
                _seed = _seed * 16807 % 2147483647;
                return (_seed - 1) / 2147483646;
            };
            
            const ctxdd = document.getElementById('myChartsdsd');
            new Chart(ctxdd, {
                type: 'pie',
                data: {
                  labels: [
                        '1-Year Post-Secondary Certificate',
                        '2-Year Undergraduate Diploma',
                        'Grade 12'
                      ],
                  datasets: [{
                        // label: 'My First Dataset',
                        data: [300, 50, 100],
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4
                      }]
                }
              });
            

            
            $(document).ready(function() {
                let data = {
                    dataValues: [
                        [5],
                        [1, 2, 3, 4, 5, 6, 7],
                        [1, 2, 3, 4, 5, 6, 7],
                        [2],
                        [1, 2, 3, 4, 5, 6, 7, 8, 9],
                        [1, 2, 3, 4, 5, 6],
                        [2, 2],
                        [2],
                        [],
                        [],
                        [],
                        [],
                    ],
                    legend: [],
                    legendColors: ["#2a50ed", "#3A458D", "#2a50ed", "#F06370", "#FBB652", "#F06370", "#3A458D", "#3A458D", "#3A458D"],
                    barLabels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    labelColors: ["#444", "#444", "#444", "#444"]
                };
            
                let options = {
                    chartWidth: "60%",
                    chartHeight: "60%",
                    chartTitle: "",
                    chartTitleColor: "black",
                    chartTitleFontSize: "2rem",
                    yAxisTitle: "",
                    xAxisTitle: "",
                    barValuePosition: "center",
                    barSpacing: "1%"
                };
            
                let element = "#testDiv";
            
                drawBarChart(data, options, element);
            
                function drawBarChart(data, options, element) {
                    drawChartContainer(element);
                    drawChartTitle(options);
                    drawChartLegend(data);
                    drawYAxisTitle(options);
                    drawYAxis(data);
                    drawChartGrid(data, options);
                    drawXAxis(data, options);
                    drawXAxisTitle(options);
                }
            
                function drawChartContainer(element) {
                    $(element).prepend("<div class='chartContainer'></div>");
                    $(element).css("height", "100%");
                }
            
                function drawChartTitle(options) {
                    $(".chartContainer").append("<div class='chartTitle'>" + options.chartTitle + "</div>");
                    $(".chartTitle").css("color", options.chartTitleColor);
                    $(".chartTitle").css("font-size", options.chartTitleFontSize);
                }
            
                function drawChartLegend(data) {
                    $(".chartContainer").append("<div class='chartLegend'></div>");
                    for (let i = 0; i < data.legend.length; i++) {
                        $(".chartLegend").append("<div class='legendKey legendKey" + i + "'></div>");
                        $(".legendKey" + i).css("background-color", data.legendColors[i]);
                        $(".chartLegend").append("<span>" + data.legend[i] + "</span>");
                    }
                }
            
                function drawYAxisTitle(options) {
                    $(".chartContainer").append("<div class='yAxisTitle'>" + options.yAxisTitle + "</div>");
                }
            
                function drawYAxis(data) {
                    $(".chartContainer").append("<div class='yAxis'></div>");
                    let maximum = maxScale(tallestBar(data));
                    let order = Math.floor(Math.log(maximum) / Math.LN10 +
                        0.000000001);
                    for (let i = 1; i > 0; i = i - 0.2) {
                        if (order < 0) {
                            $(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(Math.abs(order - 1)) + "</div>");
                        } else {
                            $(".yAxis").append("<div class='yAxisLabel'>" + (maximum * i).toFixed(0) + "</div>");
                        }
                    }
                }
            
                function tallestBar(data) {
                    let sum = 0;
                    for (let i = 0; i < data.dataValues.length; i++) {
                        let sumArray = data.dataValues[i].reduce((a, b) => a + b, 0);
                        if (sumArray > sum) {
                            sum = sumArray;
                        }
                        return sum;
                    }
                }
            
                function maxScale(n) {
                    let order = Math.floor(Math.log(n) / Math.LN10 + 0.000000001); // 2
                    let multiple = Math.pow(10, order);
                    let result = Math.ceil(n * 1.1 / multiple) * multiple;
                    if (order > 0) {
                        return result;
                    } else if (order == 0) {
                        return result.toFixed(1);
                    } else {
                        return result.toFixed(Math.abs(order));
                    }
                }
            
                function drawChartGrid(data, options) {
                    $(".chartContainer").append("<div class='chartGrid'></div>");
            
                    let maximum = maxScale(tallestBar(data));
            
                    let barWidth = 100 / (data.dataValues.length + 2);
            
                    for (let i = 0; i < data.dataValues.length; i++) {
                        $(".chartGrid").append("<div class='bar bar" + i + "'></div>");
                        $(".bar" + i).css("height", "100%");
                        $(".bar" + i).css("width", barWidth + "%");
                        for (let j = 0; j < data.dataValues[i].length; j++) {
            
                            if (data.dataValues[i][j]) {
                                $(".bar" + i).prepend("<div class='innerBar innerBar" + i + j + "'></div");
            
                                let height = data.dataValues[i][j] / maximum * 100;
                                $(".innerBar" + i + j).css("height", height + "%");
                                $(".innerBar" + i + j).css("background-color", data.legendColors[j]);
                                $(".innerBar" + i + j).append("<p class='barValue'>" + data.dataValues[i][j] + "</p>");
                                $(".barValue").css("align-self", options.barValuePosition);
                                $(".barValue").css("margin", "0");
                            }
                        }
                    }
                    $(".bar").css("margin", "0 " + options.barSpacing);
                }
            
                function drawXAxis(data, options) {
                    $(".chartContainer").append("<div class='emptyBox'></div>");
                    $(".chartContainer").append("<div class='xAxis'></div>");
            
                    let barWidth = 100 / (data.barLabels.length + 2);
            
                    for (let i = 0; i < data.barLabels.length; i++) {
                        $(".xAxis").append("<div class='xAxisLabel xAxisLabel" + i + "'>" + data.barLabels[i] + "</div>");
                        $(".xAxisLabel").css("width", barWidth + "%");
                        $(".xAxisLabel" + i).css("color", data.labelColors[i]);
                    }
            
                    $(".xAxisLabel").css("margin", "0 " + options.barSpacing);
                }
            
                function drawXAxisTitle(options) {
                    $(".chartContainer").append("<div class='xAxisTitle'>" + options.xAxisTitle + "</div>");
                }
                
                $("#about_us > div.col-md-8 > div > div.bg-white.p-3.mt-3 > p").addClass("fs-4")
                $("#about_us > div.col-md-8 > div > div.bg-white.p-3.mt-3 > ul li").addClass("fs-4").css("line-height", "1.4285em")
                $("#about_us > div.col-md-8 > div > div.bg-white.p-3.mt-3 > p:nth-child(3)").remove();
                $("#about_us > div.col-md-8 > div > div.bg-white.p-3.mt-3 > p:nth-child(4)").remove();
                $("#about_us > div.col-md-8 > div > div.bg-white.p-3.mt-3 > p:nth-child(6)").remove();
                
                // $(".avatar .avatar-img").on("error", function(){
                //     $(this).attr('src', 'https://via.placeholder.com/56');
                // });
                
                // const imgas = document.querySelector("#school > div > div > div > div.avatar > a > img");
                

                // imgas.addEventListener('error', function handleError() {
                //   const defaultImage =
                //     'https://bobbyhadz.com/images/blog/javascript-show-div-on-select-option/banner.webp';
                
                //   imgas.src = defaultImage;
                //   imgas.alt = 'default';
                // });

            
            });
            function funaction(id)
            {
               // var action = $('#action_'+id).find(":selected").val();
               this.form.submit();
                
            }
        </script>
        
        
      

</body>

</html>
