<?php
$title="";
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title> Jump The Line | <?php echo ((isset($title)) ? $title : 'Dashboard'); ?> </title>
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

<!-- Fonts -->
<link rel="stylesheet" href="fonts/fonts.css">

<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" href="{{asset('app-assets/css/vendors.css')}}">
<!-- END VENDOR CSS-->
<!-- BEGIN STACK CSS-->
<link rel="stylesheet" href="{{asset('app-assets/css/app.css')}}">
<!-- END STACK CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<!-- END Page Level CSS-->
<link rel="stylesheet" href="{{asset('app-assets/css/plugins/calendars/fullcalendar.css')}}">
<link rel="stylesheet" href="{{asset('app-assets/vendors/css/calendars/fullcalendar.min.css')}}">
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('./assets/css/intlTelInput.css')}}">
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/CustomScrollbar.css')}}">
<!-- <link rel="stylesheet" href="app-assets/vendors/css/tables/datatable/datatables.min.css"> -->

<link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/new.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
<!-- END Custom CSS-->

<!-- Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />

<!-- Slick Slider -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-scrollbar@latest/simple-scrollbar.css">


<!-- Int-tel -->
<link rel="stylesheet" href="{{asset('assets/css/intlTelInput.css')}}">


</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar <?php if ($title == "Login" || $title == "Password Recovery" || $title == "Error404") {
                                                                                  echo "pt-0";
                                                                                } else {
                                                                                  echo "";
                                                                                } ?>" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    @yield('content')

   
</body>
{{-- <?php include('modal.php') ?> --}}

<!-- BEGIN VENDOR JS-->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>


<!-- Slick Slider -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('assets/js/function.js')}}"></script>


<script src="{{asset('app-assets/vendors/js/charts/chart.min.js')}}"></script>
<script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('app-assets/js/core/app.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/customizer.js')}}"></script>
<script src="{{asset('assets/js/chart.js')}}"></script>
<script src="{{asset('assets/js/jquery.repeater.min.js')}}"></script>
<script src="{{asset('assets/js/form-repeater.js')}}"></script>
<script src="{{asset('assets/js/chart.js')}}"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<!-- <script src="app-assets/vendors/js/tables/datatable/datatables.min.js" ></script> 
<script src="app-assets/js/scripts/tables/datatables/datatable-basic.js" ></script>  -->
<script src="{{asset('app-assets/vendors/js/charts/echarts/echarts.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/charts/chartjs/line/line.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/charts/chartjs/line/line-area.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/modal/components-modal.js')}}"></script>
<script src="{{asset('./assets/js/intlTelInput.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-scrollbar@latest/simple-scrollbar.min.js"></script>
<script>
    const SimpleScrollbar = require('simple-scrollbar');
    require('simple-scrollbar/simple-scrollbar.css')
</script>
<!-- Owl Carousel -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->


<!-- Int-tel -->
<script src="{{asset('assets/js/intlTelInput.js')}}"></script>







<!-- BEGIN VENDOR JS-->
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script>
    // Set paths
    // ------------------------------

    require.config({
        paths: {
            echarts: 'app-assets/vendors/js/charts/echarts'
        }
    });


    // Configuration
    // ------------------------------

    require(
        [
            'echarts',
            'echarts/chart/bar',
            'echarts/chart/line',
            'echarts/chart/scatter',
            'echarts/chart/pie'
        ],


        // Charts setup
        function(ec) {

            // Initialize chart
            // ------------------------------
            var myChart = ec.init(document.getElementById('column-chart'));

            // Chart Options
            // ------------------------------
            chartOptions = {

                // Setup grid
                grid: {
                    x: 60,
                    x2: 60,
                    y: 45,
                    y2: 25
                },

                // Add tooltip
                tooltip: {
                    trigger: 'axis'
                },

                // Add legend

                // Add custom colors
                color: ['#000000', '#BE2327', '#11b04f'],

                // Enable drag recalculate
                calculable: true,

                // Horizontal axis
                xAxis: [{
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                }],

                // Vertical axis
                yAxis: [{
                        type: 'value',
                        // name: 'Water',
                        axisLabel: {
                            formatter: '{value} K'
                        }
                    },
                    {
                        type: 'value',
                        name: 'Temperature',
                        axisLabel: {
                            formatter: '{value} °C'
                        }
                    }
                ],

                // Add series
                series: [{
                        name: 'Evaporation',
                        type: 'bar',
                        data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3]
                    },
                    {
                        name: 'Precipitation',
                        type: 'bar',
                        data: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3]
                    },

                ]
            };

            // Apply options
            // ------------------------------

            myChart.setOption(chartOptions);


            // Resize chart
            // ------------------------------

            $(function() {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".menu-toggle").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        myChart.resize();
                    }, 200);
                }
            });
        }
    );
</script>

<script>
    $(document).ready(function() {

        $('.items').slick({
            dots: false,
            arrows: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>


</body>

</html>