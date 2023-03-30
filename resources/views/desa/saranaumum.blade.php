@extends('desa.nav')

@section('isi')

    <head>
        <style>
            .content-table {
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                min-width: 700px;
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
        <div class="main-content">
            <!-- Section: inner-header -->
            @foreach($profil as $gambar)
            <section class="inner-header divider layer-overlay overlay-dark-8"
                data-bg-img="{{asset('storage/'.$gambar->gambar1)}}">
                @endforeach
                <div class="container pt-90 pb-40">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                @foreach($data_user as $data_u)
                                <h2 class="text-uppercase text-white font-36">DESA {{ $data_u->name }}</h2>
                                <ol class="breadcrumb text-left mt-10 white">
                                    <li><a href="dashboard-desa.html">Beranda</a></li>
                                    <li><a href="#">Profil Desa</a></li>
                                    <li class="active" style="color: #fca311;">Sarana Umum</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Causes -->
            <section id="about">
                <div class="container pb-40">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="text-uppercase line-bottom-center mt-0">Sarana Umum <br><span class=""
                                        style="color: #F26522">DESA {{ $data_u->name }}</span></h2>
                                        @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <center>
                <table class="content-table" style="margin-top: -70px">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    @foreach ($sarana as $data)
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Balai RW</td>
                            <td>{{$data->rw}}</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Balai RT</td>
                            <td>{{$data->rt}}</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Paud</td>
                            <td>{{$data->paud}}</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>TK</td>
                            <td>{{$data->tk}}</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>SD</td>
                            <td>{{$data->sd}}</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>SMP</td>
                            <td>{{$data->smp}}</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>SMA/SMK</td>
                            <td>{{$data->sma}}</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Rumah Sakit</td>
                            <td>{{$data->rumah}}</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Puskesmas</td>
                            <td>{{$data->puskesmas}}</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Pos Kesehatan Desa</td>
                            <td>{{$data->kesehatan}}</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Posyandu</td>
                            <td>{{$data->posyandu}}</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Pos KB</td>
                            <td>{{$data->kb}}</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Praktik Dokter</td>
                            <td>{{$data->dokter}}</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Praktik Bidan</td>
                            <td>{{$data->bidan}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </center>
    </body>
@endsection
