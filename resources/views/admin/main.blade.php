@extends('admin/admin')

@section('title','Dashboard')

@section('style')
    <style>
        .highcharts-figure, .highcharts-data-table table {
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
        .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
            padding: 0.5em;
        }
        .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }
        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

        .highcharts-background{
            backgroud: red;
        }
    </style>
@endsection

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>



        </div>

@endsection

@section('content')


<div class="content mt-3">

    <div class="animated fadeIn">
    <div class="content mt-3">



        <div class="row">

           <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">

                        <h4 class="mb-0">
                            <span class="count">{{$jumlahmajalahinternal}}</span>
                        </h4>
                        <p class="text-light">Majalah Internal</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">

                        <h4 class="mb-0">
                            <span class="count">{{$jumlahmajalaheksternal}}</span>
                        </h4>
                        <p class="text-light">Majalah Eksternal</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">

                        <h4 class="mb-0">
                            <span class="count">{{$jumlahpenelitian}}</span>
                        </h4>
                        <p class="text-light">Penelitian</p>

                    </div>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart3"></canvas>
                        </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">

                        <h4 class="mb-0">
                            <span class="count">{{$jumlahpengabdian}}</span>
                        </h4>
                        <p class="text-light">Pengabdian Masyrakat</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-4">
                        <div class="card-body pb-0">

                            <h4 class="mb-0">
                                <span class="count">{{$jumlahprosiding}}</span>
                            </h4>
                            <p class="text-light">Prosiding</p>

                            <div class="chart-wrapper px-3" style="height:70px;" height="70">
                                <canvas id="widgetChart4"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-4">
                        <div class="card-body pb-0">

                            <h4 class="mb-0">
                                <span class="count">{{$jumlahtugasakhir}}</span>
                            </h4>
                            <p class="text-light">Tugas Akhir</p>

                            <div class="chart-wrapper px-3" style="height:70px;" height="70">
                                <canvas id="widgetChart4"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-->
            <h3 class="mt-3">Penelitian</h3>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <figure class="highcharts-figure">
                        <div id="chartPenelitianTahun"></div>
                    </figure>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <figure class="highcharts-figure">
                        <div id="chartPenelitianFakultas"></div>
                    </figure>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <figure class="highcharts-figure">
                        <div id="chartPenelitianPerKategori"></div>
                    </figure>
                </div>
            </div>
            <h3 class="mt-3">Pengabdian</h3>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <figure class="highcharts-figure">
                        <div id="chartPengabdianPerTahun"></div>
                    </figure>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <figure class="highcharts-figure">
                        <div id="chartPengabdianPerFakultas"></div>
                    </figure>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <figure class="highcharts-figure">
                        <div id="chartPengabdianPerKategori"></div>
                    </figure>
                </div>
            </div>
            <h3 class="mt-3">Tugas Akhir</h3>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <figure class="highcharts-figure">
                        <div id="chartTugasAkhirPerWisuda"></div>
                    </figure>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <figure class="highcharts-figure">
                        <div id="chartTugasAkhirPerFakultas"></div>
                    </figure>
                </div>
            </div>



                <!--/social-box-->
            </div><!--/.col-->



        </div> <!-- .content -->
     </div>

</div>


@endsection

@push('js')
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
        });
        // Create the chart Penelitian
        Highcharts.chart('chartPenelitianTahun', {
            chart: {
                type: 'column',
                backgroundColor: '#d6eff9',
            },
            title: {
                text: 'Penelitian Per Tahun'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y} Penelitian'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
            },

            series: [
                {
                    name: "Tahun",
                    colorByPoint: true,
                    data: [
                        <?php foreach($tahun_penelitian as $item): ?>
                        {
                            name: <?= $item->tahun ?>,
                            y: <?= $item->total ?>
                        },
                        <?php endforeach; ?>
                    ]
                }
            ],
        });

        Highcharts.chart('chartPenelitianFakultas', {
            chart: {
                type: 'column',
                backgroundColor: '#FCFFC5',
            },
            title: {
                text: 'Penelitian Per Fakultas'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y} Penelitian'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
            },
            series: [
                {
                    name: "Fakultas",
                    colorByPoint: true,
                    data: [
                        <?php foreach($fakultas_penelitian as $item): ?>
                        <?php $fakultas = (string) $item->fakultas;  ?>


                        {
                            name:<?= "\"$fakultas\"" ?>,
                            y: <?= $item->total ?>
                        },
                        <?php endforeach; ?>
                    ]
                }
            ],

        });

        Highcharts.chart('chartPenelitianPerKategori', {
            chart: {
                type: 'column',
                backgroundColor: '#d6eff9',
            },
            title: {
                text: 'Penelitian Per Kategori'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y} Penelitian'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
            },
            series: [
                {
                    name: "Kategori",
                    colorByPoint: true,
                    data: [
                        <?php foreach($kategori_penelitian as $item): ?>
                        {
                            name:<?= "\"$item->kategori\"" ?>,
                            y: <?= $item->total ?>
                        },
                        <?php endforeach; ?>
                    ]
                }
            ],


        });

        // Create the chart Pengabdian
        Highcharts.chart('chartPengabdianPerTahun', {
            chart: {
                type: 'column',
                backgroundColor: '#d6eff9',
            },
            title: {
                text: 'Pengabdian Per Tahun'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y} Pengabdian'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
            },

            series: [
                {
                    name: "Tahun",
                    colorByPoint: true,
                    data: [
                        <?php foreach($tahun_pengabdian as $item): ?>
                        {
                            name: <?= $item->tahun ?>,
                            y: <?= $item->total ?>
                        },
                        <?php endforeach; ?>
                    ]
                }
            ],
        });

        Highcharts.chart('chartPengabdianPerFakultas', {
            chart: {
                type: 'column',
                backgroundColor: '#FCFFC5',
            },
            title: {
                text: 'Penelitian Per Fakultas'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y} Pengabdian'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
            },
            series: [
                {
                    name: "Fakultas",
                    colorByPoint: true,
                    data: [
                        <?php foreach($fakultas_pengabdian as $item): ?>
                        {
                            name:<?= "\"$item->fakultas\"" ?>,
                            y: <?= $item->total ?>
                        },
                        <?php endforeach; ?>
                    ]
                }
            ],

        });

        Highcharts.chart('chartPengabdianPerKategori', {
            chart: {
                type: 'column',
                backgroundColor: '#d6eff9',
            },
            title: {
                text: 'Pengabdian Per Kategori'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y} Pengabdian'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
            },
            series: [
                {
                    name: "Kategori",
                    colorByPoint: true,
                    data: [

                        <?php foreach($kategori_pengabdian as $item): ?>
                        {
                            name:<?= "\"$item->kategori\"" ?>,
                            y: <?= $item->total ?>
                        },
                        <?php endforeach; ?>
                    ]
                }
            ],

        });

        Highcharts.chart('chartTugasAkhirPerWisuda', {
            chart: {
                type: 'column',
                backgroundColor: '#d6eff9',
            },
            title: {
                text: 'Tugas Akhir Per Wisuda'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y} Tugas Akhir'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
            },
            series: [
                {
                    name: "Angkatan Wisuda",
                    colorByPoint: true,
                    data: [
                        {
                            name: 0,
                        },
                        <?php foreach($wisuda_tugasAkhir as $item): ?>
                        {
                            name:<?= $item->wisuda ?>,
                            y: <?= $item->total ?>
                        },
                        <?php endforeach; ?>
                    ]
                }
            ],

        });

        Highcharts.chart('chartTugasAkhirPerFakultas', {
            chart: {
                type: 'column',
                backgroundColor: '#FCFFC5',
            },
            title: {
                text: 'Tugas Akhir Per Fakultas'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y} Tugas Akhir'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
            },
            series: [
                {
                    name: "Fakultas",
                    colorByPoint: true,
                    data: [

                        <?php foreach($fakultas_tugasAkhir as $item): ?>
                        {
                            name:<?= "\"$item->fakultas\"" ?>,
                            y: <?= $item->total ?>
                        },
                        <?php endforeach; ?>
                    ]
                }
            ],

        });

    </script>
@endpush
