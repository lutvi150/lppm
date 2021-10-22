@extends('template/template')

@section('title','Statistik | LPPM UDINUS')

@section('style')
<style>
    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 310px;
        max-width: 800px;
        margin: 1em auto;
    }

    #container {
        height: 400px;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #EBEBEB;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }

    .highcharts-background {
        backgroud: red;
    }

</style>
<style>
    .lds-ripple {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }

    .lds-ripple div {
        position: absolute;
        border: 4px solid rgb(223, 30, 30);
        opacity: 1;
        border-radius: 50%;
        animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
    }

    .lds-ripple div:nth-child(2) {
        animation-delay: -0.5s;
    }

    @keyframes lds-ripple {
        0% {
            top: 36px;
            left: 36px;
            width: 0;
            height: 0;
            opacity: 1;
        }

        100% {
            top: 0px;
            left: 0px;
            width: 72px;
            height: 72px;
            opacity: 0;
        }
    }

</style>
@endsection

@section('container')

<div class="container mt-5" style="padding-top:50px">
    <h1 class="text-center">STATISTIKA</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <figure class="highcharts-figure text-center">

                <div class="lds-ripple chartSkimPerPeriode">
                    <div></div>
                    <div></div>
                </div>
                <div id="chartSkimPerPeriode" hidden></div>
            </figure>
        </div>
        <div class="col-md-6">
            <figure class="hightcharts-figure">
                <div class="lds-ripple chartSkimTotalSemua">
                    <div></div>
                    <div></div>
                </div>
                <div id="chartSkimTotalSemua"></div>
            </figure>
        </div>
        <div class="col-md-6">
            <figure class="hightcharts-figure">
                <label for="">Grafik Biaya Yang Di Setujui Per SKIM</label>
                <div id="chartBiayaSetujui"></div>
            </figure>
        </div>
        <div class="col-md-6">
            <figure class="hightcharts-figure">
                <label for="">Total Biaya Per Jenis SKIM</label>
                <div id="chartBiayaTotal"></div>
            </figure>
        </div>
        <div class="col-md-12">
            <figure class="hightchart-figure">
                <label for="">Grafik Total Luaran</label>
                <div id="chartTotalLuaran"></div>
            </figure>
        </div>
        <div class="col-md-12">
            <figure class="hightcharts-figure">
                <label for="">Grafik Luaran</label>
                <div id="chartLuaran"></div>
            </figure>
        </div>
    </div>
</div>








@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
    $(document).ready(function () {
        $('input[name="tabs"]').click(function () {
            $(this).tab('show');
            $(this).removeClass('active');
        });
        getSkimPerPeriode()
        getSkimTotalSemua()
        chartBiayaSetujui()
        chartBiayaTotal()
        chartTotalLuaran()
        chartLuaran()

    });
    // Create the chart Penelitian
    function getSkimPerPeriode() {
        $.ajax({
            type: "GET",
            url: "{{ route('skim.periode') }}",
            data: "data",
            dataType: "JSON",
            success: function (response) {
                if (response.status == 'success') {
                    $(".chartSkimPerPeriode").attr("hidden", true)
                    $("#chartSkimPerPeriode").removeAttr("hidden")
                    chartSkimPerPeriode(response)
                }
            }
        });
    }

    function chartSkimPerPeriode(response) {
        Highcharts.chart('chartSkimPerPeriode', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik SKIM'
            },
            subtitle: {
                text: 'Per Periode'
            },
            xAxis: {
                categories: response.categories,
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (millions)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' millions'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: response.series
        });
    }
    function getSkimTotalSemua() {
        $.ajax({
            type: "GET",
            url: "{{ route('skim.total.semua') }}",
            data: "data",
            dataType: "JSON",
            success: function (response) {
                if (response.status=='success') {
                    $(".chartSkimTotalSemua").attr('hidden',true)
                    $("#chartSkimTotalSemua").removeAttr('hidden')
                    chartSkimTotalSemua(response)
                }
            }
        });
     }
    // create chart skim total semua
    function chartSkimTotalSemua(response) {
        Highcharts.chart('chartSkimTotalSemua', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Grafik Total SKIM Semua Periode'
            },
            subtitle: {
                text: 'Semua Periode'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: response.series,
            }]
        });
    }
    // chart biaya setujui
    function chartBiayaSetujui() {
        Highcharts.chart('chartBiayaSetujui', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik SKIM'
            },
            subtitle: {
                text: 'Per Periode'
            },
            xAxis: {
                categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (millions)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' millions'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Year 1800',
                data: [107, 31, 635, 203, 2]
            }, {
                name: 'Year 1900',
                data: [133, 156, 947, 408, 6]
            }, {
                name: 'Year 2000',
                data: [814, 841, 3714, 727, 31]
            }, {
                name: 'Year 2016',
                data: [1216, 1001, 4436, 738, 40]
            }]
        });
    }
    // chart biaya total
    function chartBiayaTotal() {
        Highcharts.chart('chartBiayaTotal', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Grafik SKIM'
            },
            subtitle: {
                text: 'Per Periode'
            },
            xAxis: {
                categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (millions)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' millions'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Year 1800',
                data: [107, 31, 635, 203, 2]
            }, {
                name: 'Year 1900',
                data: [133, 156, 947, 408, 6]
            }, {
                name: 'Year 2000',
                data: [814, 841, 3714, 727, 31]
            }, {
                name: 'Year 2016',
                data: [1216, 1001, 4436, 738, 40]
            }]
        });
    }
    //grafik total luaran
    function chartTotalLuaran() {
        Highcharts.chart('chartTotalLuaran', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Grafik SKIM'
            },
            subtitle: {
                text: 'Per Periode'
            },
            xAxis: {
                categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (millions)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' millions'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Year 1800',
                data: [107, 31, 635, 203, 2]
            }, {
                name: 'Year 1900',
                data: [133, 156, 947, 408, 6]
            }, {
                name: 'Year 2000',
                data: [814, 841, 3714, 727, 31]
            }, {
                name: 'Year 2016',
                data: [1216, 1001, 4436, 738, 40]
            }]
        });
    }
    // grafik luaran
    function chartLuaran() {
        Highcharts.chart('chartLuaran', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik SKIM'
            },
            subtitle: {
                text: 'Per Periode'
            },
            xAxis: {
                categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (millions)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' millions'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Year 1800',
                data: [107, 31, 635, 203, 2]
            }, {
                name: 'Year 1900',
                data: [133, 156, 947, 408, 6]
            }, {
                name: 'Year 2000',
                data: [814, 841, 3714, 727, 31]
            }, {
                name: 'Year 2016',
                data: [1216, 1001, 4436, 738, 40]
            }]
        });
    }

</script>
@endpush
