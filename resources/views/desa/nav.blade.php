<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/html/2017/helpingpro-html/demo/index-mp-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 08:54:06 GMT -->

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="HelpingPro - Nonprofit, Crowdfunding & Charity HTML5 Template" />
    <meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>DESA.COM</title>
    @yield('maps')
    <!-- Favicon and Touch Icons -->
    <link href="https://i.postimg.cc/SKnd1ZCd/logo-desa2-removebg-preview.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/css-plugin-collections.css') }}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset('css/menuzord-skins/menuzord-rounded-boxed.css') }}"
        rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{ asset('js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />

    <!-- CSS | Theme Color -->
    <link href="{{ asset('css/colors/theme-skin-orange.css') }}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset('js/jquery-plugin-collection.js') }}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset('js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


<![endif]-->
    <style>
        .bg-hover-theme-colored:hover {
            background: #F26522 !important;
            border-radius: %;
            border-color: #F26522 !important;
            color: #fff !important;
        }
    </style>
</head>

@foreach ($data_user as $data_user)

    <body class="">
        <div id="wrapper" class="clearfix">
            <!-- preloader -->
            {{-- <div id="preloader">
            <div id="spinner">
                <img class="floating" src="https://i.postimg.cc/wj308LVk/images.png" alt="">
                <h5 class="line-height-50 font-18 ml-15">Loading <b>Desa.COM</b></h5>
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div> --}}
            <!-- Header -->
            <header class="header">

                <div class="header-nav">
                    <div class="header-nav-wrapper navbar-scrolltofixed" style="background-color: #fca311 ;">
                        <div class="container">
                            <nav id="menuzord" class="menuzord default" style="background-color: #fca311 ;">
                                <img src="{{ asset('storage/' . $data_user->logo) }}"
                                    style="width: 5%; height:6%; margin-left: -67%; margin-top:5px; margin-bottom:5px;">
                                {{-- <form action="{{ Route('dashwebinput') }}" method="get">
                                @csrf
                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                <img src="{{ asset('storage/' . $data_user->logo) }}"
                                    style="width: 5%; height:6%; margin-left: -630px; margin-top:5px; margin-bottom:5px;">
                            </form> --}}
                                <ul class="menuzord-menu">
                                    <li style="margin-left: -60px;"><button
                                            style="background-color: #fca311 ;border: #fca311; cursor: default;"></button>
                                    </li>
                                    <li>
                                        <form action="{{ Route('dashwebinput') }}" method="get"
                                            class="bg-hover-theme-colored" style="border-radius:100px; width:100px;">
                                            @csrf
                                            <input type="hidden" value="{{ $data_user->id }}" name="id"
                                                class="bg-hover-theme-colored">


                                            {{-- @dd($award->user_id) --}}


                                            <button class="bg-hover-theme-colored"
                                                style="margin:2px 40px 0px 20px;margin-left: 0%;font-weight:550; color:#333333; font-size:13px; font-family: 'Open Sans', sans-serif;width:100px; background-color:#fca311; border-radius:100px;"
                                                type="submit">
                                                <div
                                                    style="background-color:#fca311; border-radius:100px;width:90px;"class="bg-hover-theme-colored ">
                                                    Beranda</div>
                                            </button>
                                        </form>
                                    </li>
                                    {{-- <li><a class="nav-link {{ Request::is('dashdesa')? '' : 'collapsed' }} "href="{{ route('dashdesa') }}" style="margin-left: 70px;">Beranda</a> --}}
                                    <ul class="">
                                        <ul class="">
                                        </ul>
                                        </li>
                                    </ul>
                                    </li>
                                    <li><a class="nav-link {{ Request::is('tentangdesa') && Request::is('pemerintahdesa') ? '' : 'collapsed' }} "
                                            data-bs-target="#forms-nav" href="#">Profil Desa &ensp;</a>
                                        <ul class="dropdown">

                                            {{-- <a href="{{ route('tentangdesa') }}">Tentang Desa</a> --}}
                                            <form action="{{ Route('btntentang') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                                <button
                                                    style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                    type="submit">
                                                    <div style="background-color:#fff">Tentang Desa</div>
                                                </button>
                                            </form>
                                    </li>

                                    <li>
                                        <form action="{{ Route('kestdesa') }}" method="get">
                                            @csrf
                                            <input type="hidden" value="{{ $data_user->id }}" name="id">
                                            <button
                                                style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                type="submit">
                                                <div style="background-color:#fff">Struktur Desa</div>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                                </li>
                                <li><a class="nav-link {{ Request::is('karangtaruna') && Request::is('pkk') ? '' : 'collapsed' }} "
                                        data-bs-target="#forms-nav"href="#">Organisasi &ensp;</a>
                                    <ul class="dropdown">
                                        <li>
                                            <form action="{{ Route('kesttaruna') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                                <button
                                                    style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                    type="submit">
                                                    <div style="background-color:#fff">Karang Taruna</div>
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="{{ Route('kepkk') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                                <button
                                                    style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                    type="submit">
                                                    <div style="background-color:#fff">PKK</div>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Data &ensp;</a>
                                    <ul class="dropdown">
                                        <li><a class="nav-link {{ Request::is('grafikusia') && Request::is('grafikkelamin') && Request::is('grafikagama') && Request::is('grafikpendidikan') && Request::is('grafikperkawinan') ? '' : 'collapsed' }} "
                                                data-bs-target="#forms-nav"href="#">Dinamika Penduduk</a>
                                            <ul class="dropdown">
                                                <li>
                                                <li>
                                                    <form action="{{ Route('kegu') }}" method="get">
                                                        @csrf
                                                        <input type="hidden" value="{{ $data_user->id }}"
                                                            name="id">
                                                        <button
                                                            style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                            type="submit">
                                                            <div style="background-color:#fff">Grafik Usia</div>
                                                        </button>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="{{ Route('kejk') }}" method="get">
                                                        @csrf
                                                        <input type="hidden" value="{{ $data_user->id }}"
                                                            name="id">
                                                        <button
                                                            style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                            type="submit">
                                                            <div style="background-color:#fff">Grafik Jenis Kelamin
                                                            </div>
                                                        </button>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="{{ Route('keagama') }}" method="get">
                                                        @csrf
                                                        <input type="hidden" value="{{ $data_user->id }}"
                                                            name="id">
                                                        <button
                                                            style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                            type="submit">
                                                            <div style="background-color:#fff">Grafik Agama</div>
                                                        </button>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="{{ Route('kepdd') }}" method="get">
                                                        @csrf
                                                        <input type="hidden" value="{{ $data_user->id }}"
                                                            name="id">
                                                        <button
                                                            style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                            type="submit">
                                                            <div style="background-color:#fff">Grafik Pendidikan</div>
                                                        </button>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="{{ Route('kekawin') }}" method="get">
                                                        @csrf
                                                        <input type="hidden" value="{{ $data_user->id }}"
                                                            name="id">
                                                        <button
                                                            style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                            type="submit">
                                                            <div style="background-color:#fff">Grafik Perkawinan</div>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <form action="{{ Route('kesarana') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                                <button
                                                    style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                    type="submit">
                                                    <div style="background-color:#fff">Sarana</div>
                                                </button>
                                            </form>
                                        </li>
                                </li>
                                </ul>
                                </li>
                                <li>
                                    <form action="{{ Route('keperaturan') }}" method="get">
                                        @csrf
                                        <input type="hidden" value="{{ $data_user->id }}" name="id"
                                            class="bg-hover-theme-colored" style="border-radius:100px; width:100px;">
                                        <button class="bg-hover-theme-colored"
                                            style="margin:2px 40px 0px 20px;margin-left: 0%;font-weight:550; color:#333333; font-size:13px; font-family: 'Open Sans', sans-serif;width:100px; background-color:#fca311; border-radius:100px;"
                                            type="submit">
                                            <div
                                                style="background-color:#fca311; border-radius:100px;width:90px;"class="bg-hover-theme-colored ">
                                                Peraturan</div>
                                        </button>
                                    </form>
                                </li>
                                <li style="margin-top: -94px; margin-left: 79%; width: 100%;"><a
                                        class="nav-link {{ Request::is('umkmdesa') && Request::is('pariwisatadesa') ? '' : 'collapsed' }} "
                                        data-bs-target="#forms-nav" href="#">Potensi Desa &ensp;</a>
                                    <ul class="dropdown">
                                        <li>
                                            <form action="{{ Route('keumkm') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                                <button
                                                    style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                    type="submit">
                                                    <div style="background-color:#fff">UMKM</div>
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="{{ Route('kepw') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                                <button
                                                    style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                    type="submit">
                                                    <div style="background-color:#fff">Pariwisata</div>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <li style="margin-top: -94px; margin-left: 101%; width: 100%"><a
                                        class="nav-link {{ Request::is('beritadesa') && Request::is('penghargaandesa') && Request::is('galeridesa') ? '' : 'collapsed' }} "
                                        data-bs-target="#forms-nav"href="#">Berita &ensp;</a>
                                    <ul class="dropdown">
                                        <li>
                                            <form action="{{ Route('keberita') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                                <button
                                                    style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                    type="submit">
                                                    <div style="background-color:#fff">Berita</div>
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="{{ Route('kepenghargaan') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                                <button
                                                    style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                    type="submit">
                                                    <div style="background-color:#fff">Penghargaan</div>
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="{{ Route('kegaleri') }}" method="get">
                                            @csrf
                                            <input type="hidden" value="{{ $data_user->id }}" name="id">
                                            <button
                                                style="margin-left: 9%;font-weight: 550; font-size: 13px; font-family: 'Open Sans', sans-serif; color: #585656;"
                                                type="submit">
                                                <div style="background-color:#fff">Galeri</div>
                                            </button>
                                        </form>
                                    </li>
                                    </ul>
                                </li>
                                </ul>
                                <div class="pull-right flip hidden-sm hidden-xs mt-20 pt-5">
                                    <a class="btn" href="{{ route('dashweb') }}"
                                        style="background-color:#F26522; color:#fff; border-radius: 10px; margin-left: 90%;"><b>Kembali</b></a>
                                </div>
                                <div class="pull-right flip hidden-sm hidden-xs mt-20 pt-5"
                                    style="margin-right: -80px;">
                                    @if (auth()->user() && auth()->user()->role == 'admindesa')
                                        <a class="btn" href="{{ route('dashboard') }}"
                                            style="background-color:#F26522; color:#fff; border-radius: 10px;"><b>Kelola
                                                Desa</b></a>
                                    @endif
                                </div>
                                <div class="pull-right flip hidden-sm hidden-xs mt-20 pt-5"
                                    style="margin-right: -0px;">
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>

            @yield('isi')

            <footer id="footer" class="footer divider">
                <div class="footer-top layer-overlay overlay-dark-8">
                    <div class="container pt-60 pb-30">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="horizontal-contact-widget mt-30 pt-30 text-center">
                                    <div class="col-sm-12 col-sm-3">
                                        <div class="each-widget"> <img
                                                src="https://i.postimg.cc/hG5nVkNm/sign-up-3.png">
                                            <h5 class="text-white">Registrasi</h5>
                                            <p>Admin memasukkan data sesuai ketentuan</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-sm-3 mt-sm-50">
                                        <div class="each-widget"> <img src="https://i.postimg.cc/bwM8nX7t/id-1.png">
                                            <h5 class="text-white">Verifikasi</h5>
                                            <p>Menunggu persetujuan dari admin website</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-sm-3 mt-sm-50">
                                        <div class="each-widget"> <img src="https://i.postimg.cc/9XTp5GX5/login.png">
                                            <h5 class="text-white">Login</h5>
                                            <p>Login dengan memasukkan email dan password</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-sm-3 mt-sm-50">
                                        <div class="each-widget"> <img
                                                src="https://i.postimg.cc/Jzy0vQmj/complete.png">
                                            <h5 class="text-white">Selesai</h5>
                                            <p>Selamat admin sudah bisa mengelola akun desa tersebut</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul
                                    class="list-inline styled-icons icon-hover-theme-colored icon-gray icon-circled text-center mt-30 mb-10">
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid p-20" style="background-color: #e9940a;">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <p class="text-white font-11 m-0">Copyright &copy;2023 Desa.com</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
@endforeach

<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('js/custom.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript"
    src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}"></script>
@yield('script')

</body>

<!-- Mirrored from kodesolution.com/html/2017/helpingpro-html/demo/index-mp-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 08:58:55 GMT -->

</html>
