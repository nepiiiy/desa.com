@extends('desa.nav')

@section('isi')

    <head>
        <style>
            .content-table {
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                width: 100%;
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

            td a:hover {
                text-decoration: underline;
            }
        </style>
    </head>

    <body class="">
        <!-- image header -->
        @foreach ($profil as $gambar)
            <section class="inner-header divider layer-overlay overlay-dark-8"
                data-bg-img="{{ asset('storage/' . $gambar->gambar1) }}">
        @endforeach
        <div class="container pt-200 pb-40">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-white font-45">Peraturan Desa</h1>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <!-- Section: Causes -->
        <div style="margin-bottom: 20px; margin-top: 20px; ">
            <div class="container pt-15 pr-15 pb-20 pl-15" style="background-color: #F6F6F6; border-radius: 10px;">
                <center>
                    @foreach ($data_user as $data_u)
                        <h2 class="text-uppercase line-bottom-center mt-0">PERATURAN<br><span class=""
                                style="color: #F26522">Desa {{ $data_u->name }}</h2>
                    @endforeach
                    <div class="col-2 col-md-10">
                        <table class="content-table col-2" style="text-align: justify;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th style="text-align:center;">Nomor & Tanggal Penetapan</th>
                                    <th style="text-align:center;">Tentang</th>
                                    <th style="text-align:center;">Peraturan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $index=>$row)
                                    <tr>
                                        <td>{{ $index + $data->firstItem() }}</td>
                                        <td>{{ $row->nomor }}</td>
                                        <td>{{ $row->tentang }}</td>
                                        <td style="text-align:center;">
                                            <a href="{{ asset('storage/' . $row->peraturan) }}" target="_blank">Lihat</a>
                                        </td>
                                      </tr>
                                      @endforeach
                            </tbody>
                        </table>
                    </div>
                </center>
                <center>
                {{ $data->links()}}
                </center>
            </div>
        </div>
        <!--END Section: Causes -->
        @endsection


        