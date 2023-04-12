@extends('desa.nav')
@section('maps')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
crossorigin=""/>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
 integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
 crossorigin=""></script>
@endsection
@section('isi')
    <style>
        #map {
            height: 400px;

            border: 0px solid #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(101, 95, 83, 0.5);
        }
    </style>
    {{-- @foreach ($data_user as $data_u) --}}
    <div class="main-content">
        @foreach ($profil as $data)
            <!-- Section: inner-header -->
            <section class="inner-header divider layer-overlay overlay-dark-8"
                data-bg-img="{{ asset('storage/' . $data->gambar1) }}">
                <div class="container pt-90 pb-40">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                @foreach ($data_user as $data_u)
                                    <h2 class="text-uppercase text-white font-36">Desa {{ $data_u->name }}</h2>
                                    <ol class="breadcrumb text-left mt-10 white">
                                        {{-- <form action="{{Route('dashwebinput')}}" method="get">
                                @csrf
                                <input type="hidden" value="{{$data_u->id}}" name="id" > --}}
                                        <li><a href="">Beranda</a></li>
                                        {{-- </form> --}}
                                        <li><a href="#">Profil Desa</a></li>
                                        <li class="active" style="color: #fca311;">Tentang Desa</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
    {{-- @endforeach --}}

    <body class="">
        <div id="wrapper" class="clearfix">
            <section id="about">
                <div class="container pb-40">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="text-uppercase line-bottom-center mt-0">Profil<br><span class=""
                                        style="color: #F26522">Desa {{ $data_u->name }}</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <body class="fixed-header sidebar-right-close sidebar-left-close">

                    <div class="settings-sidebar-backdrop pink-gradient" style="margin-top: -90px;"></div>

                    <div class="container-fluid mt-1 main-container ">
                        <div class="row">
                            <div class="col-md-8 col-lg-8">
                                <div class="card fullscreen has-background-img ">
                                    <div id="printableArea">

                                        <div class="card-body">
                                            <div class="mb-0 content-color-secondary">


                                                <h3 style="text-align: left; margin-left: 50px;">A. Biodata Desa</h3>
                                                <p
                                                    style="text-align: justify; margin-left: 83px; text-indent: 3em; font-size: 17px;">
                                                    {{ $data_u->name }} adalah salah satu desa di Kecamatan
                                                    {{ $data_u->kecamatan }}, Kabupaten {{ $data_u->kabupaten }}, Provinsi
                                                    {{ $data_u->provinsi }},
                                                    Indonesia.</p>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-0 content-color-secondary">
                                                <h3 style="text-align: left; margin-left: 50px;">B. Sejarah Desa</h3>
                                                <p
                                                    style="text-align: justify; margin-left: 83px; text-indent: 3em; font-size: 17px;">
                                                    {!! $data->sejarah !!}</p>
                                            </div>
                                        </div>
                                        <br>
                                        <section id="about">
                                            <div class="container ml-100 pb-sm-50 " style="text-align: justify;">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-4">
                                                        <h3 class="line-bottom border-bottom mt-0 mt-sm-20">Visi
                                                        </h3>
                                                        <div style="font-size: 15px;">
                                                            {{ $data->visi }}
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-md-4">
                                                        <h3 class="line-bottom border-bottom mt-0 mt-sm-20">Misi
                                                        </h3>
                                                        <div style="font-size: 15px;">
                                                            {{ $data->misi }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="card mt-1 bg-light-primary border border-primary no-shadow">

                                        </div>

                                    </div>
                                    <div class="sharethis-inline-reaction-buttons"></div>
                                </div>



                            </div>
                            <!--  -->
                            <div class="col-md-4 col-lg-4">

                                <div class="card mb-1 z-index-1">
                                    <div class="card-header border-bottom">
                                        <div class="media">
                                            <div class="media-body">
                                                <h3 class="content-color-primary mb-0">Lokasi Desa</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="map"></div>
                                        <a href="#" onclick="window.open(googleMapsUrl, '_blank')">
                                            <button type="button" class="btn btn-primary btn-block mt-1">Klik di
                                                sini</button></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        #footer {
                            background-color: #142850;
                        }

                        .backTop {
                            position: fixed;
                            bottom: 0;
                            left: 0;
                            display: inline-block;
                            padding: 0.5em;
                            margin: 0.5em;
                        }

                        .backTop:hover {
                            cursor: pointer;
                        }
                    </style>
                    <div class="backTop z-index-1"><i class="fa fa-chevron-circle-up fa-3x"></i></div>
                    <script>
                        $(window).on('load', function() {
                            $('.backTop').hide();
                            $(window).scroll(function() {
                                if ($(this).scrollTop() > 100) {
                                    $(".backTop").fadeIn();
                                } else {
                                    $(".backTop").fadeOut();
                                }
                            });
                            $('.backTop').click(function() {
                                $("html, body").animate({
                                    scrollTop: 0
                                }, 500);
                            });
                        });
                    </script>
                    @endforeach
                @section('script')
                
                <script>
                    var map = L.map('map').setView([51.505, -0.09], 13);
                    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
                </script>
                @endsection
            </body>
        </section>
    </div>
</body>
@endsection
