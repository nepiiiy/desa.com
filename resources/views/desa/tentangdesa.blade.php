@extends('desa.nav')

@section('isi')
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
                                        <li><a href="/dashweb/{{ $data_user[0]->id }}">Beranda</a></li>
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
                                                    style="text-align: justify; margin-left: 83px; text-indent: 3em; font-size: 15px;">
                                                    {{ $data_u->name }} adalah salah satu desa di Kecamatan
                                                    {{ $data_u->kecamatan }}, Kabupaten {{ $data_u->kabupaten }}, Provinsi
                                                    {{ $data_u->provinsi }},
                                                    Indonesia.</p>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-0 content-color-secondary" style="text-align: justify; margin-left:83px;text-indent: 3em;">
                                                <h3 style="text-align: left; text-indent:0em; margin-left:-33px;">B. Sejarah Desa</h3>
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
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31668.027706724726!2d109.35274030377245!3d-7.183246168073183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6feffdb0412969%3A0x5027a76e3564d90!2sKuta%2C%20Kec.%20Belik%2C%20Kabupaten%20Pemalang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1676349979848!5m2!1sid!2sid"
                                            width="600" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></style>
                                        <button class="btn btn-primary btn-block mt-1">Buka Peta</button>
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
                </body>
            </section>
        </div>
    </body>
@endsection
