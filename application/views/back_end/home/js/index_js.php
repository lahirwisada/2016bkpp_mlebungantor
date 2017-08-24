<?php
$terbayar_perbulan = isset($terbayar_perbulan) ? $terbayar_perbulan : "[]";
$pendaftar_perbulan = isset($pendaftar_perbulan) ? $pendaftar_perbulan : "[2,3,4,5,6,7,8,9]";
$var_bulan = isset($var_bulan) ? $var_bulan : "[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]";
?>

<script type="text/javascript">

//    var plot = {
//        data_series: {data: null, label: 'Label'},
//        plot_setting: {
//            series: {
//                lines: {
//                    show: true,
//                    lineWidth: 1.5,
//                    fill: 0.05
//                },
//                points: {
//                    show: true
//                },
//                shadowSize: 0
//            },
//            grid: {
//                labelMargin: 10,
//                hoverable: true,
//                clickable: true,
//                borderWidth: 0
//            },
//            colors: ["#71a5e7"],
//            xaxis: {
//                tickColor: "transparent",
//                ticks: <?php echo $var_bulan; ?>,
//                tickDecimals: 0,
//                autoscaleMargin: 0,
//                font: {
//                    color: '#8c8c8c',
//                    size: 12
//                }
//            },
//            yaxis: {
//                ticks: 4,
//                tickDecimals: 0,
//                tickColor: "#e3e4e6",
//                font: {
//                    color: '#8c8c8c',
//                    size: 12
//                },
//                tickFormatter: function (val, axis) {
//                    if (val > 999999) {
//                        return (val / 1000000) + " Jt";
//                    } else if (val > 999) {
//                        return (val / 1000) + " Rb";
//                    } else {
//                        return val;
//                    }
////                return val;
//                }
//            },
//            legend: {
//                labelBoxBorderColor: 'transparent'
//            }
//        },
//        create_plot: function (element, data_series, label_series) {
//            plot.data_series.data = data_series;
//            plot.data_series.label = label_series
//            return $.plot(element, [plot.data_series], plot.plot_setting);
//        },
//        init: function () {
//            this.create_plot($("#plot-pendapatan"), <?php echo $terbayar_perbulan; ?>, 'Pendapatan');
//            this.create_plot($("#plot-penghuni"), <?php echo $pendaftar_perbulan; ?>, 'Pendaftar');
//        }
//    };
//
//    $(document).ready(function () {
//        plot.init();
//    });

    $(function () {
        /* reportrange */
        if ($("#reportrange").length > 0) {
            $("#reportrange").daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM.DD.YYYY',
                separator: ' to ',
                startDate: moment().subtract('days', 29),
                endDate: moment()
            }, function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            $("#reportrange span").html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        }
        /* end reportrange */



        /* Bar dashboard chart */
        Morris.Bar({
            element: 'dashboard-bar-1',
            data: [
                {y: 'jan', a: 75, b: 35},
                {y: 'feb', a: 64, b: 26},
                {y: 'mar', a: 78, b: 39},
                {y: 'apr', a: 82, b: 34},
                {y: 'may', a: 86, b: 39},
                {y: 'jun', a: 94, b: 40},
                {y: 'jul', a: 96, b: 41},
                {y: 'aug', a: 75, b: 35},
                {y: 'sep', a: 64, b: 26},
                {y: 'oct', a: 78, b: 39},
                {y: 'nov', a: 75, b: 35},
                {y: 'des', a: 64, b: 26}
                
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Total Staff', 'Kehadiran'],
            barColors: ['#33414E', '#3FBAE4'],
            gridTextSize: '10px',
            hideHover: true,
            resize: true,
            gridLineColor: '#E5E5E5'
        });
         
        /* END Bar dashboard chart */

        /* Line dashboard chart */
        Morris.Line({
            element: 'dashboard-line-1',
            data: [
                {y: '2014-10-10', a: 2, b: 4},
                {y: '2014-10-11', a: 4, b: 6},
                {y: '2014-10-12', a: 7, b: 10},
                {y: '2014-10-13', a: 5, b: 7},
                {y: '2014-10-14', a: 6, b: 9},
                {y: '2014-10-15', a: 9, b: 12},
                {y: '2014-10-16', a: 18, b: 20}
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Sales', 'Event'],
            resize: true,
            hideHover: true,
            xLabels: 'day',
            gridTextSize: '10px',
            lineColors: ['#3FBAE4', '#33414E'],
            gridLineColor: '#E5E5E5'
        });
        /* EMD Line dashboard chart */




        $(".x-navigation-minimize").on("click", function () {
            setTimeout(function () {
                rdc_resize();
            }, 200);
        });


    });


</script>


