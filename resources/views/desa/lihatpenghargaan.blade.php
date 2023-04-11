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

    <!-- Favicon and Touch Icons -->
    <link href="https://i.postimg.cc/wj308LVk/images.png" rel="shortcut icon" type="image/png">
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
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
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
        a,
        a:link,
        a:visited {
            color: #eb4938;
            text-decoration: none
        }

        a:active,
        a:hover {
            color: #666;
            text-decoration: none
        }

        b,
        strong {
            font-weight: 500
        }

        li,
        #menu ul {
            margin: 0;
            padding: 0;
            list-style: none
        }

        #sidebar-wrapper {
            width: 300px;
            word-wrap: break-word;
            overflow: hidden;
            margin: 4em auto;
            background: #fff;
        }

        h2 {
            background: #f26522 none repeat scroll 0% 0%;
            padding: 12px;
            border-radius: 8px;
            color: #F5EEEE;
            text-align: center;
            margin-bottom: 0px;
            margin-top: 0px;
            box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.3) inset, 0px 1px 2px rgb(0, 0, 0);
        }

        .popular-posts ul {
            padding: 0 !important
        }

        .popular-posts ul li {
            list-style: none;
            border-bottom: 1px solid #ccc;
            padding: 0 0 10px;
            margin: 10px 10px 0
        }

        .popular-posts ul li:last-child {
            border-bottom: 0
        }

        .popular-posts ul li:hover {
            text-decoration: none
        }

        .popular-posts ul li .item-title a {
            font-weight: 700;
            color: #333;
            display: block;
            padding: 0 10px 0 0;
            font-size: 12px;
            font-family: 'segoe UI', sans-serif
        }

        .popular-posts ul li .item-title a:hover {
            color: #e74c3c;
            text-decoration: none
        }

        .PopularPosts img {
            background: #ddd;
            border: 1px solid #bbb;
            display: block;
            float: right;
            height: 90px;
            margin-left: 8px;
            padding: 4px;
            width: 70px
        }

        .PopularPosts .item-snippet {
            font-size: 11px;
            font-weight: 300;
            margin-top: 10px;
            color: #555
        }

        ul.recent-posts-container li {
            padding: 5px 0px;
            min-height: 65px;
            list-style-type: none;
            margin: 10px 10px 0px;
        }

        ul.recent-posts-container {
            counter-reset: countposts;
            list-style-type: none;
        }

        ul.recent-posts-container li:before {
            content: counter(countposts, decimal);
            display: none;
            counter-increment: countposts;
            z-index: 2;
            float: left font-size: 16px;
            color: #4D4D4D;
            background: #F7F7F7;
            padding: 9px 14px;
            border: 1px solid #efefef;
        }

        .recent-posts-container a {
            text-decoration: none;
        }

        .recent-posts-container a:hover {
            color: #4DACE3;
        }

        .post-date {
            color: #e0c0c6;
            font-size: 11px;
            float: right;
        }

        .recent-post-title a {
            font-size: 13px;
            text-transform: uppercase;
            color: #5C4D4D;
        }

        .recent-post-title {
            margin: 5px 0px;
        }

        .recent-posts-details {
            border-top: 4px solid #AC707A;
            margin-top: 5px;
            padding-top: 5px;
        }

        .recent-posts-details a {
            color: #888;
        }

        a.readmorelink {
            color: #4DACE3;
        }

        .recent-posts-container {
            width: 100%;
            min-height: 70px;
            margin: 5px 0px 5px 0px;
            padding: 0;
            font-size: 12px;
        }

        /* CSS label */
        .widget-content.cloud-label-widget-content {
            display: inline-block;
            width: 100%;
        }

        .widget-content.list-label-widget-content {
            padding: 0;
        }

        .widget-content.cloud-label-widget-content {
            display: inline-block;
        }

        .label-size-1,
        .label-size-2,
        .label-size-3,
        .label-size-4,
        .label-size-5 {
            font-size: 100%;
            opacity: 1
        }

        .cloud-label-widget-content {
            text-align: left;
            padding: 10px;
        }

        .label-count {
            white-space: nowrap;
            display: inline-block;
        }

        #sidebar-wrapper .Label li {
            position: relative;
            color: #444;
            padding: 0px;
            margin: 0px;
            text-align: left;
            width: 108%;
            font-size: 90%;
            transition: all 0.3s ease-out 0s;
            margin-left: -26px;
        }

        #sidebar-wrapper .Label li:hover {
            background: #fff;
            color: #cf4d35;
        }

        #sidebar-wrapper .Label li:before {
            content: "";
            position: absolute;
            width: 0;
            height: 100%;
            background: #4fafe9;
            transition: all .2s ease-in-out;
        }

        #sidebar-wrapper .Label li:hover:before {
            width: 100%;
        }

        #sidebar-wrapper .Label li a {
            padding: 0 0 0 10px;
            display: block;
            position: relative;
            line-height: 42px;
            color: #787878;
            text-decoration: none;
            transition: all .3s ease-out
        }

        #sidebar-wrapper .Label li a:hover {
            color: #fff;
        }

        #sidebar-wrapper .Label li span {
            float: right;
            height: 42px;
            line-height: 42px;
            width: 42px;
            text-align: center;
            display: inline-block;
            background: #4fafe9;
            color: #FFF;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2
        }

        #sidebar-wrapper .Label li:nth-child(1) span,
        #sidebar-wrapper .Label li:nth-child(1):before,
        #sidebar-wrapper .Label li:nth-child(7) span,
        #sidebar-wrapper .Label li:nth-child(7):before {
            background: #ca85ca;
        }

        #sidebar-wrapper .Label li:nth-child(2) span,
        #sidebar-wrapper .Label li:nth-child(2):before,
        #sidebar-wrapper .Label li:nth-child(8) span,
        #sidebar-wrapper .Label li:nth-child(8):before {
            background: #e54e7e;
        }

        #sidebar-wrapper .Label li:nth-child(3) span,
        #sidebar-wrapper .Label li:nth-child(3):before,
        #sidebar-wrapper .Label li:nth-child(9) span,
        #sidebar-wrapper .Label li:nth-child(9):before {
            background: #61c436;
        }

        #sidebar-wrapper .Label li:nth-child(4) span,
        #sidebar-wrapper .Label li:nth-child(4):before,
        #sidebar-wrapper .Label li:nth-child(10) span,
        #sidebar-wrapper .Label li:nth-child(10):before {
            background: #f4b23f;
        }

        #sidebar-wrapper .Label li:nth-child(5) span,
        #sidebar-wrapper .Label li:nth-child(5):before,
        #sidebar-wrapper .Label li:nth-child(11) span,
        #sidebar-wrapper .Label li:nth-child(11):before {
            background: #46c49c;
        }

        #sidebar-wrapper .Label li:nth-child(6) span,
        #sidebar-wrapper .Label li:nth-child(6):before,
        #sidebar-wrapper .Label li:nth-child(12) span,
        #sidebar-wrapper .Label li:nth-child(12):before {
            background: #607ec7;
        }

        #sidebar-wrapper .label-size {
            position: relative;
            display: block;
            float: left;
            margin: 0 4px 4px 0;
            font-size: 13px;
            transition: all 0.3s;
        }

        #sidebar-wrapper .label-size a {
            background: #fff;
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 1)0, rgba(250, 250, 250, 1)70%, rgba(246, 246, 246, 1)99%, rgba(246, 246, 246, 1)100%);
            display: inline-block;
            color: #444;
            padding: 5px 8px;
            font-weight: 400;
            border: 1px solid #e3e3e3;
            background-repeat: repeat-y;
            background-size: 100% 90px;
            background-position: 0 -30px;
            transition: all .3s
        }

        #sidebar-wrapper .label-count {
            opacity: 0;
            visibility: hidden;
            font-size: 85%;
            display: inline-block;
            position: absolute;
            top: -10px;
            right: -10px;
            background: #4fafe9;
            color: #fff;
            white-space: nowrap;
            padding: 0;
            width: 22px;
            height: 22px;
            line-height: 22px;
            border-radius: 100%;
            text-align: center;
            z-index: 1;
            transition: all .3s
        }

        #sidebar-wrapper .label-size:hover .label-count {
            opacity: 1;
            visibility: visible;
            top: -5px
        }

        #sidebar-wrapper .label-size a:hover {
            color: #444;
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 1)0, rgba(250, 250, 250, 1)18%, rgba(255, 255, 255, 1)99%, rgba(255, 255, 255, 1)100%);
            background-position: 0 0
        }

        .Label li {
            background: transparent;
            float: left;
            padding: 5px;
            margin: 0;
            text-align: left;
            width: 45%;
            transition: all .3s ease-out;
        }

        .Label li:hover {
            color: #cf4d35;
        }

        .Label li a {
            color: #aaa;
            transition: all .3s ease-out;
        }

        .Label li a:hover {
            color: #cf4d35;
        }

        .Label li span {
            float: right;
            color: #aaa;
            margin: 0;
            padding: 4px 6px;
            text-align: center;
            font-size: 13px;
            font-weight: 400;
            border-radius: 2px;
        }

        .Label li span:hover {
            color: #cf4d35
        }

        .label-size {
            position: relative;
            background: #3f414a;
            color: #fff;
            display: block;
            float: left;
            margin: 0 1px 1px 0;
            font-size: 14px;
            transition: all 0.4s;
        }

        .label-size a {
            display: inline-block;
            color: #fff;
            padding: 6px 8px;
            font-weight: 400;
        }

        .label-size a:hover {
            background: #23242a;
            color: #fff;
            transition: all 0.2s;
        }

        font-style:normal;
        font-weight:normal;
        text-decoration:none;
        color:#fff;
        transition:initial;
        }

        label-size:hover,
        .label-size:hover {
            background: #e1a66c;
            color: #fff;
        }

        .label-count {
            opacity: 0;
            visibility: hidden;
            font-size: 85%;
            display: inline-block;
            position: absolute;
            top: -10px;
            right: -10px;
            background: #fb4646;
            color: #fff;
            white-space: nowrap;
            padding: 0;
            width: 22px;
            height: 22px;
            line-height: 22px;
            border-radius: 100%;
            text-align: center;
            z-index: 1;
            transition: all .3s
        }

        .label-size:hover .label-count {
            opacity: 1;
            visibility: visible;
            top: -5px
        }
    </style>
</head>

<body class="">

    <!-- Header -->
    <header class="header">
        <div class="header-nav">

        </div>
    </header>

    <!-- image header -->
    <section class="inner-header divider layer-overlay overlay-dark-8"
        style="background-image: url('https://i.postimg.cc/vBwkZM4Z/bgberita.jpg');background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;">
        <div class="container pt-200 pb-40">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        {{-- @dd($data_user) --}}
                        @foreach ($berita as $item)
                            <form action="{{ Route('kepenghargaan') }}">
                                <input type="hidden" value="{{ $item->user->id }}" name="id">
                                <button style="margin-bottom: 50px; background-color:transparent; border:none;"><img
                                        src="https://i.postimg.cc/gctp9m1b/left-arrow-removebg-preview.png"
                                        style="width: 35px;"></button>
                            </form>
                        @endforeach
                        @foreach ($berita as $penghargaan)
                            <h1 class="text-white font-40 text-uppercase">{{ $penghargaan->user->name }}</h1>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Causes -->
    {{-- @dd($penghargaan) --}}
    <section>
        <div class="col-sm-6 col-md-3" style="margin-top: 30px">
            <div class="container mt-30 mb-30" style="margin-left: -80px;">
                <center>
                    @foreach ($berita as $peng)
                        <div style="background-color: #f6f6f6; max-width: 850px; border-radius: 10px;">
                            <h3>{{ $peng->judul }}</h3>

                            <div class="car pt-20 pb-20">

                                <section id="home" class="divider"
                                    style="width: 110vh; border-radius: 10px; height: 70vh;">

                                    <div class="fullwidth-carousel" data-nav="true">
                                        @foreach (json_decode($peng->gambar) as $gambar)
                                            <div class="carousel-item bg-img-cover"> <img
                                                    src="{{ asset('storage/imgpenghargaan/' . $gambar) }}">
                                            </div>
                                        @endforeach

                                    </div>
                                </section>
                                <script>
                                    $(document).ready(function() {
                                        $('.slider').slick({
                                            infinite: true,
                                            slidesToShow: 3,
                                            slidesToScroll: 1
                                        });
                                    });
                                </script>

                                <p>{{ $peng->tanggal }}</p>
                            </div>
                </center>
            </div>
            <div class="section mt-50 mb-50"
                style="background-color: #f6f6f6; padding: 20px; border-radius: 10px; width: 923px; margin-left: 25px;">
                {!! $peng->isi !!}
            </div>
            @endforeach
        </div>
        </div>
        {{-- @dd($berita) --}}
        <div class="col-sm-6 col-md-3" style="margin-top: 25px;">
            <div id='sidebar-wrapper' style="margin-left: 650px;">
                <div class="sidebar1-wrapper">
                    <div class="sidebar1 section" id="sidebar1">
                        <div class="widget HTML" id="HTML2">
                            <h2 class="title" style="height: 60px; font-size: 14px;">Post Terakhir <br>
                                Penghargaan Desa {{ $penghargaan->user->name }}
                            </h2>


                            <div class="widget-content">
                                <script style="text/javascript">
                                    var posts_no = 5;
                                    var showpoststhumbs = false;
                                    var readmorelink = true;
                                    var showcommentslink = true;
                                    var posts_date = true;
                                </script>
                                <script src="/feeds/posts/default?orderby=published&amp;alt=json-in-script&amp;callback=showlatestpostswiththumbs">
                                </script>
                                <ul class="recent-posts-container">
                                    {{-- @dd($peng) --}}
                                    @foreach ($penghargaaaan as $award)
                                        <li class="recent-posts-list">
                                            <div class="recent-post-title"><a
                                                    href="/lihatpeng/{{ $award->id }}/{{ $award->user_id }}"
                                                    target="_top"><img src="{{ asset('storage/' . $award->cover) }}"
                                                        style="width: 90px; height:65px;">
                                                    <div style="margin-left: 100px; margin-top: -69px;">
                                                        {{ Str::limit($award->judul, 15) }}</div>
                                                </a></div>
                                            <div style="margin-left: 100px;">
                                                {{ Str::limit($award->subjudul, 20) }}<br><br></div>
                                            <div class="recent-posts-details">
                                                <div class="post-date">{{ $award->tanggal }}</div><a
                                                    class="readmorelink"
                                                    href="/lihatpeng/{{ $award->id }}/{{ $award->user_id }}"
                                                    target="_top">Selengkapnya</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                //<![CDATA[
                $(function() {
                    $('#sidebar-wrapper .widget-content').hide();
                    $('#sidebar-wrapper h2:first').addClass('active').next().slideDown('slow');
                    $('#sidebar-wrapper  h2').css('cursor', 'pointer').click(function() {
                        if ($(this).next().is(':hidden')) {
                            $('#sidebar-wrapper h2').removeClass('active').next().slideUp('slow');
                            $(this).toggleClass('active').next().slideDown('slow');
                        }
                    });
                });
                //]]>
            </script>
        </div>
    </section>


    <!--END Section: Causes -->

    <footer id="footer" class="footer divider">
        <div class="footer-top layer-overlay overlay-dark-8">
            <div class="container pt-60 pb-30">
                <div class="row">
                    <div class="col-md-12">
                        <div class="horizontal-contact-widget mt-30 pt-30 text-center">
                            <div class="col-sm-12 col-sm-3">
                                <div class="each-widget"> <img src="https://i.postimg.cc/hG5nVkNm/sign-up-3.png">
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
                                <div class="each-widget"> <img src="https://i.postimg.cc/Jzy0vQmj/complete.png">
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
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
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

</body>

<!-- Mirrored from kodesolution.com/html/2017/helpingpro-html/demo/index-mp-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 08:58:55 GMT -->

</html>
