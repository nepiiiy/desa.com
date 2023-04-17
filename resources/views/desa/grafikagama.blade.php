@extends('desa.nav')

@section('isi')

    <head>
        <style>
            #chartdiv {
                width: 200%;
                height: 750px;
                font-size: 11px;
            }
        </style>

        <style>
            .content-table {
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                min-width: 100%;
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
        <div class="row">
            <div class="col-2 col-md-12">
        <div class="container pb-40">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-2 col-md-8 col-md-offset-2" style="margin-top: 100px;">
                        <h2 class="text-uppercase line-bottom-center mt-0" style="text-align:center">Grafik Agama<br><span
                                class="" style="color: #F26522; align:center">Desa {{ $data_user[0]->name }}
                            </span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Section: Causes -->
            <div class="col-2 col-md-12">
                <script src="https://www.amcharts.com/lib/3/amcharts.js" style="color:#fff"></script>
                <script src="https://www.amcharts.com/lib/3/pie.js" style="color:#fff"></script>
                <script src="https://www.amcharts.com/lib/3/themes/light.js" style="color:#fff"></script>
                <div id="chartdiv" style="margin-top: -100px; margin-left: -50%;"></div>
                <script>
                    var chart = AmCharts.makeChart("chartdiv", {
                        "type": "pie",
                        "theme": "light",
                        "dataProvider": [{
                            "country": "Islam",
                            "litres": {{ $islam }}
                        }, {
                            "country": "Kristen Protestan",
                            "litres": {{ $kristen }}
                        }, {
                            "country": "Kristen     Katolik",
                            "litres": {{ $katolik }}
                        }, {
                            "country": "Hindu",
                            "litres": {{ $hindu }}
                        }, {
                            "country": "Budha",
                            "litres": {{ $budha }}
                        }, {
                            "country": "Konghucu",
                            "litres": {{ $konghucu }}
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
            </div>
            <center>
            <div class="col-2 col-md-5">
                <table class="content-table col-2">
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
                            <td>Islam</td>
                            <td>{{ $islam }}</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kristen Protestan</td>
                            <td>{{ $kristen }}</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Kristen Katolik</td>
                            <td>{{ $katolik }}</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Hindu</td>
                            <td>{{ $hindu }}</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Budha</td>
                            <td>{{ $budha }}</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Konghucu</td>
                            <td>{{ $konghucu }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </center>
    </body>
@endsection
