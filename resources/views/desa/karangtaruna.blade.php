@extends('desa.nav')
<head>
<meta property="og:title" content="Fun with table 🏓 | responsive-table-react" />
  <meta name="description"
    content="Flexible & responsive table for React - A super user-friendly experience, start to use your table also on mobile!" />
  <meta property="og:description"
    content="Flexible & responsive table for React - A super user-friendly experience, start to use your table also on mobile!" />
  <link rel="canonical" href="https://marcogargano.github.io/responsive-table-react/" />
  <meta property="og:url" content="https://marcogargano.github.io/responsive-table-react/" />
  <meta property="og:site_name" content="responsive-table-react" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary" />
  <meta property="twitter:title" content="Fun with table 🏓 | responsive-table-react" />
  <link rel="stylesheet" href="src/components/ResponsiveTable.css">
<link href="{{ asset('css/bootstrap1.min.css') }}" rel="stylesheet" />
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap1.min.js') }}"></script></head>
@section('isi')

    <body class="">
        <div id="wrapper" class="clearfix">
            <!-- image header -->
            <style>
                .content-table {
                    border-collapse: collapse;
                    margin: 25px 0;
                    font-size: 0.9em;
                    width: 100%;
                    border-radius: 5px 5px 0 0;
                    overflow: hidden;
                    box-shadow: 0 0 20px rgba(218, 208, 208, 0.704);
                }

                .content-table th,
                .content-table td {
                    padding: 10px 10px;
                }

                .content-table tbody tr.active-row {
                    font-weight: bold;
                    color: #149DBB;
                    ;
                }

                table.rtr-table {
                    font-weight: 300;
                    margin: 0;
                    padding: 1rem;
                    box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.1);
                    background-color: #fff;
                    border-radius: 1rem;
                    position: relative;
                }

                @media screen and (min-width: 600px) {
                    table.rtr-table.custom-color tr:hover td {
                        color: var(--custom-color-table);
                    }
                }

                @media screen and (max-width: 600px) {
                    table.rtr-table.custom-color tr:hover td {
                        background-color: var(--custom-color-table);
                    }
                }

                @media screen and (max-width: 600px) {
                    table.rtr-table.custom-color td:not(:first-child):before {
                        color: var(--custom-color-table);
                    }
                }

                table.rtr-table.dark-mode {
                    filter: invert(0.9);
                }

                table.rtr-table.bordered {
                    /* border: solid 1px #000;
                    border-top: solid 1px #000;
                    border-left: solid 1px #000; */
                    border-radius: 0;
                    box-shadow: none;
                    padding: 0;
                }

                table.rtr-table.bordered th,
                table.rtr-table.bordered tr,
                table.rtr-table.bordered td {
                    /* border: solid 1px #000;
                    border-bottom: solid 1px #000;
                    border-right: solid 1px #000; */
                    border-radius: 0;
                }

                table.rtr-table.bordered tr:nth-child(even) {
                    background-color: #fafafa;
                }

                @media screen and (max-width: 600px) {
                    table.rtr-table.bordered {
                        /* border: solid 1px #000;
                        border-bottom: solid 1px #000; */
                    }

                    table.rtr-table.bordered th,
                    table.rtr-table.bordered td {
                        /* border: solid 1px #000; */
                    }

                    table.rtr-table.bordered tr {
                        /* border: solid 1px #000;
                        border-top: solid 1px #000;
                        border-bottom: solid 1px #000; */
                    }

                    table.rtr-table.bordered tr td:first-child {
                        /* border-top: solid 1px #000; */
                    }
                }

                table.rtr-table thead {
                    text-align: left;
                    width: 100%;
                    position: sticky;
                    top: 0;
                    z-index: 1;
                }

                table.rtr-table thead th {
                    padding: 1rem;
                    font-size: 90%;
                    /* border-bottom: solid 2px #000; */
                    background-color: rgba(238, 238, 238, 0.5);

                    /* border-radius: 0.5rem; */
                }

                @media screen and (max-width: 600px) {
                    table.rtr-table thead tr {
                        background-color: rgba(255, 255, 255, 0.5);

                        display: block;
                    }

                    table.rtr-table thead th {
                        display: none;
                    }
                }

                table.rtr-table tbody td {
                    /* border-top: solid 1px #000;
                    border-bottom: solid 1px #000; */
                    /* border-radius: 0.5rem; */
                    padding: 1rem;
                    text-align: lef;
                    word-break: break-word;
                }

                /* table.rtr-table tbody tr:hover td {
                    box-shadow: inset 0 0 0 2px white;
                    background-color: rgba(238, 238, 238, 0.3);
                    color: var(--custom-color-table);
                } */

                @media screen and (max-width: 600px) {
                    table.rtr-table tbody td {
                        display: block;
                        text-align: left;
                        transition: all 0.2s ease-in-out;
                        position: relative;
                        background: #eee;
                    }

                    table.rtr-table tbody td:before {
                        content: attr(data-label);
                        text-transform: uppercase;
                        font-weight: 700;
                        margin-right: 0.5rem;
                        opacity: 0.5;
                    }

                    table.rtr-table tbody td:after {
                        content: " ";
                        position: absolute;
                        right: 1.2rem;
                        left: auto;
                        top: 1rem;
                        bottom: auto;
                        height: 10px;
                        width: 10px;
                        border-bottom: solid 1px #333;
                        border-right: solid 1px #333;
                        transform: rotate(45deg);
                        pointer-events: none;
                    }

                    table.rtr-table tbody td:not(:first-child) {
                        position: relative;
                        height: 0;
                        padding: 0 1rem;
                        opacity: 0;
                        overflow: hidden;
                    }

                    table.rtr-table tbody td:not(:first-child):before {
                        content: attr(data-label);
                        font-size: 12px;
                        font-weight: 500;
                        color: seagreen;
                        text-transform: uppercase;
                        position: absolute;
                        top: -3px;
                    }

                    table.rtr-table tbody td:not(:first-child):after {
                        content: none;
                    }

                    table.rtr-table tbody tr.open td {
                        height: auto;
                        overflow: visible;
                        opacity: 1;
                        color: white;
                        background-color: var(--custom-color-table);
                    }

                    table.rtr-table tbody tr.open td:first-child {
                        margin-bottom: 0.5rem;
                    }

                    table.rtr-table tbody tr.open td:after {
                        border-bottom: none;
                        border-right: none;
                        border-top: solid 1px #000;
                        border-left: solid 1px #000;
                        top: 1.4rem;
                    }

                    table.rtr-table tbody tr.open td:not(:first-child) {
                        background-color: white;
                        color: #333;
                        padding: 0.7rem 1rem 0.5rem;
                    }
                }
            </style>
            @foreach ($profil as $gambar)
                <section class="inner-header divider layer-overlay overlay-dark-8"
                    data-bg-img="{{ asset('storage/' . $gambar->gambar2) }}">
                    <div class="container pt-200 pb-40">
            @endforeach
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-white font-45">Karang Taruna</h1>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="/dashweb/{{ $data_user[0]->id }}">Beranda</a></li>
                            <li><a href="#">Organisasi</a></li>
                            <li class="active" style="color: #fca311;">Karang Taruna</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <!-- Section: Causes -->
        <div style="margin-bottom: 20px;">
            <div class="container">
                <center>
                    <img src="https://i.postimg.cc/XYcGcrSh/Lambang-KT-removebg-preview.png"
                        style="width: 180px; margin-top: 20px;">
                    <h3 class="display-5">Struktur Karang Taruna</h3>
                    <h2 class="display-6 text-uppercase" style="color: #F26522; margin-bottom: 10px;">DESA
                        {{ $data_user[0]->name }}</h2>
                    <table class=" table-hover mt-3 content-table rtr-table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10px;">No.</th>
                                <th scope="col" style="text-align: center;">Photo</th>
                                <th scope="col" style="text-align: center;">Nama</th>
                                <th scope="col" style="text-align: center;">Jabatan</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($kt_struktur as $kt)
                            <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>
                                        <center><img style="width: 100px;height: 120px;"
                                                src="{{ asset('storage/' . $kt->gambar) }}" alt=""></center>
                                    </td>
                                    <td>
                                        <center>{{ $kt->nama }}</center>
                                    </td>
                                    <td>
                                        <center>{{ $kt->jabatans->jabatan }}</center>
                                    </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </center>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
    integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
        <script>
            $("#table-bordered").click(function () {
              $(".rtr-table").toggleClass("bordered");
            });
            $("#table-dark").click(function () {
              $(".rtr-table").toggleClass("dark-mode");
            });
            $(".rtr-table tr").click(function () {
              $(this).toggleClass("open");
            });
          </script>
        <!--END Section: Causes -->
    @endsection
