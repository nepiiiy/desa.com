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
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            <nav style=" position: fixed;background: #fca311;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);">
                <div class="navbar">
                    <i class='bx bx-menu'></i>
                    <div class="logo"><img src="{{ asset('storage/' . $data_user->logo) }}" style="width:70px; height:70px;">
                    </div>
                    <div class="nav-links">
                        <div class="sidebar-logo">
                            <span class="logo-name"><img src="{{ asset('storage/' . $data_user->logo) }}"
                                    style="width:100px;"></span>

                            <i class='bx bx-x'></i>
                        </div>
                        <ul class="links">
                            <li><a>
                                    <form action="{{ Route('dashwebinput') }}" method="get">
                                        @csrf
                                        <input type="hidden" value="{{ $data_user->id }}" name="id">
                                        {{-- @dd($award->user_id) --}}
                                        <button style="font-family: 'Open Sans', sans-serif; " type="submit">
                                            <div
                                                style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                Beranda</div>
                                        </button>
                                    </form>
                                </a>
                            </li>

                            &ensp;&ensp;&ensp;&ensp;

                            <li><a class="nav-link {{ Request::is('tentangdesa') && Request::is('pemerintahdesa') ? '' : 'collapsed' }} "
                                    data-bs-target="#forms-nav" href="#">Profil Desa &ensp;</a>
                                <i class='bx bxs-chevron-down js-arrow arrow '></i>
                                <ul class="js-sub-menu sub-menu">
                                    <li style="width:150px">
                                        {{-- <a href="{{ route('tentangdesa') }}">Tentang Desa</a> --}}
                                        <a>
                                            <form action="{{ Route('btntentang') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                                <button style="font-family: 'Open Sans', sans-serif; " type="submit">
                                                    <div
                                                        style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                        Tentang Desa</div>
                                                </button>
                                            </form>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <form action="{{ Route('kestdesa') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                                <button style="font-family: 'Open Sans', sans-serif; " type="submit">
                                                    <div
                                                        style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                        Struktur Desa</div>
                                                </button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li><a class="nav-link {{ Request::is('karangtaruna') && Request::is('pkk') ? '' : 'collapsed' }} "
                                    data-bs-target="#forms-nav"href="#">Organisasi &ensp;</a>
                                <i class='bx bxs-chevron-down js-arrow arrow '></i>
                                <ul class="js-sub-menu sub-menu">
                                    <li style="width:150px">
                                        <a>
                                            <form action="{{ Route('kesttaruna') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                                <button style="font-family: 'Open Sans', sans-serif; " type="submit">
                                                    <div
                                                        style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                        Karang Taruna</div>
                                                </button>
                                            </form>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <form action="{{ Route('kepkk') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $data_user->id }}" name="id">
                                                <button style="font-family: 'Open Sans', sans-serif; " type="submit">
                                                    <div
                                                        style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                        PKK</div>
                                                </button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="#">Data &ensp;</a>
                                <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                                <ul class="htmlCss-sub-menu sub-menu">
                                    <li class="more" style="width:225px">
                                        <span><a class="nav-link {{ Request::is('grafikusia') && Request::is('grafikkelamin') && Request::is('grafikagama') && Request::is('grafikpendidikan') && Request::is('grafikperkawinan') ? '' : 'collapsed' }} "
                                                data-bs-target="#forms-nav"href="#">Dinamika Penduduk</a>
                                            <i class='bx bxs-chevron-right arrow more-arrow'></i>
                                        </span>
                                        <ul class="more-sub-menu sub-menu" style="">

                                            <li style="width:200px;">
                                                <a>
                                                    <form action="{{ Route('kegu') }}" method="get">
                                                        @csrf
                                                        <input type="hidden" value="{{ $data_user->id }}"
                                                            name="id">
                                                        <button style="font-family: 'Open Sans', sans-serif; "
                                                            type="submit">
                                                            <div
                                                                style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                                Grafik Usia</div>
                                                        </button>
                                                    </form>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <form action="{{ Route('kejk') }}" method="get">
                                                        @csrf
                                                        <input type="hidden" value="{{ $data_user->id }}"
                                                            name="id">
                                                        <button style="font-family: 'Open Sans', sans-serif; "
                                                            type="submit">
                                                            <div
                                                                style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                                Grafik Jenis Kelamin
                                                            </div>
                                                        </button>
                                                    </form>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <form action="{{ Route('keagama') }}" method="get">
                                                        @csrf
                                                        <input type="hidden" value="{{ $data_user->id }}"
                                                            name="id">
                                                        <button style="font-family: 'Open Sans', sans-serif; "
                                                            type="submit">
                                                            <div
                                                                style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                                Grafik Agama</div>
                                                        </button>
                                                    </form>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <form action="{{ Route('kepdd') }}" method="get">
                                                        @csrf
                                                        <input type="hidden" value="{{ $data_user->id }}"
                                                            name="id">
                                                        <button style="font-family: 'Open Sans', sans-serif; "
                                                            type="submit">
                                                            <div
                                                                style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                                Grafik Pendidikan</div>
                                                        </button>
                                                    </form>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <form action="{{ Route('kekawin') }}" method="get">
                                                        @csrf
                                                        <input type="hidden" value="{{ $data_user->id }}"
                                                            name="id">
                                                        <button style="font-family: 'Open Sans', sans-serif; "
                                                            type="submit">
                                                            <div
                                                                style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                                Grafik Perkawinan</div>
                                                        </button>
                                                    </form>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <form action="{{ Route('kesarana') }}" method="get">
                                            @csrf
                                            <input type="hidden" value="{{ $data_user->id }}" name="id">
                                            <button style="font-family: 'Open Sans', sans-serif; " type="submit">
                                                <div
                                                    style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                    Sarana</div>
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
                                    style="border-radius:100px; width:100px;">
                                <button style="font-family: 'Open Sans', sans-serif; " type="submit">
                                    <div
                                        style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                        Peraturan</div>
                                </button>
                            </form>
                        </li>

                        &ensp;&ensp;&ensp;&ensp;&ensp;

                        <li><a class="nav-link {{ Request::is('umkmdesa') && Request::is('pariwisatadesa') ? '' : 'collapsed' }} "
                                data-bs-target="#forms-nav" href="#">Potensi Desa &ensp;</a>
                            <i class='bx bxs-chevron-down js-arrow arrow '></i>
                            <ul class="js-sub-menu sub-menu">
                                <li style="width:125px">
                                    <form action="{{ Route('keumkm') }}" method="get">
                                        @csrf
                                        <input type="hidden" value="{{ $data_user->id }}" name="id">
                                        <button style="font-family: 'Open Sans', sans-serif; " type="submit">
                                            <div
                                                style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                UMKM</div>
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form action="{{ Route('kepw') }}" method="get">
                                        @csrf
                                        <input type="hidden" value="{{ $data_user->id }}" name="id">
                                        <button style="font-family: 'Open Sans', sans-serif; " type="submit">
                                            <div
                                                style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                Pariwisata</div>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>



                        <li><a class="nav-link {{ Request::is('beritadesa') && Request::is('penghargaandesa') && Request::is('galeridesa') ? '' : 'collapsed' }} "
                                data-bs-target="#forms-nav"href="#">Berita &ensp;</a>
                            <i class='bx bxs-chevron-down js-arrow arrow '></i>
                            <ul class="js-sub-menu sub-menu">
                                <li style="width:150px">
                                    <form action="{{ Route('keberita') }}" method="get">
                                        @csrf
                                        <input type="hidden" value="{{ $data_user->id }}" name="id">
                                        <button style="font-family: 'Open Sans', sans-serif; " type="submit">
                                            <div
                                                style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                Berita</div>
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form action="{{ Route('kepenghargaan') }}" method="get">
                                        @csrf
                                        <input type="hidden" value="{{ $data_user->id }}" name="id">
                                        <button style="font-family: 'Open Sans', sans-serif; " type="submit">
                                            <div
                                                style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                Penghargaan</div>
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form action="{{ Route('kegaleri') }}" method="get">
                                        @csrf
                                        <input type="hidden" value="{{ $data_user->id }}" name="id">
                                        <button style="font-family: 'Open Sans', sans-serif; " type="submit">
                                            <div
                                                style="background-color:#fca311;font-size:16px; font-family: 'Open Sans', sans-serif;color:#000;">
                                                Galeri</div>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="" style="margin-top:-12px">
                                <a class="btn" href="{{ route('dashweb') }}"
                                    style="background-color:#F26522; color:#fff; border-radius: 10px;"><b>Kembali</b></a>
                            </div>
                            <div class="" style="margin-top:-12px; margin-left:5%;">
                                @if (auth()->user() && auth()->user()->role == 'admindesa')
                                    <a class="btn" href="{{ route('dashboard') }}"
                                        style="background-color:#F26522; color:#fff; border-radius: 10px;"><b>Kelola
                                            Desa</b></a>
                                @endif
                            </div>
                        </li>


                        </ul>
                    </div>
                    <div class="search-box">
                        <i class='bx bx-search' Style="color:#fca311"></i>

                    </div>
                </div>
            </nav>
            <script src="{{ asset('script.js') }}"></script>

            @yield('isi')

            <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#262E3B">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <div class="text-widget">
              <p><img src="https://i.postimg.cc/x1Hnxwc2/Logo-Putih.png" style="width:70%"></p>
            </div>
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-20" style="color:#fff">
              &ensp;&ensp;&ensp;&ensp;&ensp;  <li><a href="#"><i class="fa fa-whatsapp"></i></a> </li>
              <li><a href="#"><i class="fa fa-instagram"></i></a> </li>
              <li><a href="#"><i class="fa fa-envelope"></i></a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Visi</h5>
            <ul class="list list-divider list-border" >
              <li style="color:#fff;text-align:justify;"><i class="fa fa-check-square-o mr-10 text-black-light" ></i> DENGAN SEMANGAT DAN KERJA SAMA AKAN MENGHASILKAN WEBSITE YANG BERGUNA BAGI SEMUA ORANG.</li>
            </ul>
            <h5 class="widget-title line-bottom">Misi</h5>
            <ul class="list list-divider list-border">
              <li style="color:#fff;text-align:justify;"><i class="fa fa-check-square-o mr-10 text-black-light"></i> MEMPERBAIKI KUALITAS WEBSITE AGAR LEBIH BAIK DAN LEBIH BERKEMBANG.</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Halaman</h5>
            <ul class="list list-border">
              <li><a href="/"style="color:#fff">Beranda</a></li>
              <li><a href="/about"style="color:#fff">Tentang</a></li>
              <li><a href="/contact"style="color:#fff">Kontak</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Kontak Kami</h5>
            <ul class="list list-border">
              <li style="color:#fff"><i class="fa fa-map-marker" style="font-size: 18px;color:#fff"></i>&ensp;Malang</li>
              <li style="color:#fff"><i class="fa fa-phone" style="font-size: 18px;color:#fff"></i>&ensp; +008 1234 6789</li>
              <li style="color:#fff"><i class="fa fa-envelope" style="font-size: 18px;color:#fff"></i>&ensp;xyz@example.com</li>
            </ul>
          </div>
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
