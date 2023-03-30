@extends('desa.nav')

@section('isi')

    <head>

        <style>
            #chartdiv {
                width: 100%;
                height: 500px;
                font-size: 11px;
            }
        </style>
        <style>
            .content-table {
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                min-width: 400px;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

            .content-table thead tr {
                background-color: #F26522;
                color: #ffffff;
                text-align: left;
                font-weight: bold;
            }

            .content-table th,
            .content-table td {
                padding: 12px 15px;
            }

            .content-table tbody tr {
                border-bottom: 1px solid #dddddd;
            }

            .content-table tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }

            .content-table tbody tr:last-of-type {
                border-bottom: 2px solid #F26522;
                ;
            }

            .content-table tbody tr.active-row {
                font-weight: bold;
                color: #F26522;
                ;
            }
        </style>
    </head>

    <body class="">

        <!-- Section: Causes -->
        <div class="container pb-40">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase line-bottom-center mt-0" style="text-align:center">Grafik Pendidikan<br><span class=""
                            style="color: #F26522; align:center">Desa {{ $data_user[0]->name }}
                            </span></h2>

                    </div>
                </div>
            </div>
        </div>
        <!-- Section: Causes -->
        <script src="https://www.amcharts.com/lib/3/amcharts.js" style="color:#fff"></script>
        <script src="https://www.amcharts.com/lib/3/pie.js" style="color:#fff"></script>
        <script src="https://www.amcharts.com/lib/3/themes/light.js" style="color:#fff"></script>
        <div id="chartdiv" style="margin-top: -100px;"></div>
        <script>
            var chart = AmCharts.makeChart("chartdiv", {
                "type": "pie",
                "theme": "light",
                "dataProvider": [{
                    "country": "SD",
                    "litres": {{$sd}}
                }, {
                    "country": "SMP",
                    "litres": {{$smp}}
                }, {
                    "country": "SMA/SMK",
                    "litres": {{$sma}}
                }, {
                    "country": "D3",
                    "litres": {{$d3}}
                }, {
                    "country": "Sarjana/D4",
                    "litres": {{$d4}}
                }, {
                    "country": "S2",
                    "litres": {{$s2}}
                }, ],
                "valueField": "litres",
                "titleField": "country",
                "balloon": {
                    "fixedPosition": true
                },
                "export": {
                    "enabled": true
                }
            });
        </script>
        <table class="content-table" style="margin-left: 475px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>SD</td>
                    <td>{{$sd}}</td>
                </tr>
                <tr >
                    <td>2</td>
                    <td>SMP</td>
                    <td>{{$smp}}</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>SMA/SMK</td>
                    <td>{{$sma}}</td>
                </tr>
                <tr >
                    <td>4</td>
                    <td>D3</td>
                    <td>{{$d3}}</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Sarjana/D4</td>
                    <td>{{$d4}}</td>
                </tr>
                <tr >
                    <td>6</td>
                    <td>S2</td>
                    <td>{{$s2}}</td>
                </tr>
            </tbody>
        </table>
    @endsection
