<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/register-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2023 03:38:05 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DESA KITA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://i.postimg.cc/SKnd1ZCd/logo-desa2-removebg-preview.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="log/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="log/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="log/font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="log/style.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
    <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>
</head>

<style>
    #leafletMap-registration {
        height: 430px;
        width: 500px;

        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(101, 95, 83, 0.5);
        /* The height is 400 pixels */
    }
</style>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <section class="fxt-template-animation fxt-template-layout15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-12 order-md-2 fxt-bg-img"
                    data-bg-image="https://i.postimg.cc/L5S32mnL/dsc-0969e.jpg">
                    <div class="fxt-intro">
                        <h1>DAFTAR</h1>
                        <p>Selamat datang di website DESAKITA. Silahkan daftarkan desa Anda dengan mengisi persyaratan
                            yang sudah ditentukan. Tunggu beberapa hari sampai akun Anda terverifikasi oleh Admin Web.
                        </p>
                        <div class="fxt-page-switcher">
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-12 order-md-1 fxt-bg-color">
                    <div class="fxt-content" style="margin-left:-36%;">
                        <div class="fxt-header">
							<img src="https://i.postimg.cc/XvrB6m2Z/logo-desa1-removebg-preview.png" alt=""
							style="width: 50%;margin-top:-15%;">
							@if ($errors->any())
								<div class="alert alert-danger col-md-12">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
                            <div style="width:160%; " id="leafletMap-registration"></div>
                        </div>
                        <br>
                        <form action="/kekoordinat" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <div class="row" style="width:165%;">
                                    <div class="col-md-6 col-12">

                                        <input type="hidden" name="latitude" id="latitude" placeholder="latitude">
                                        <input type="hidden" name="longtitude" id="longtitude"
                                            placeholder="longtitude">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="fxt-transformY-50 fxt-transition-delay-3">
                                    <label for="chk1">Sudah punya akun ? Kembali ke <a href="/masuk"
                                            style="text-decoration: none;">login</a></label>
                                    <div class="fxt-content-between">
                                        <button id="submit" type="submit" class="fxt-btn-fill"
                                            style="background-color:#0375b4; margin-left:130%; font-size:90%">Berikutnya</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="log/js/jquery-3.5.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="log/js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="log/js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="log/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="log/js/main.js"></script>

</body>
<script>
    // you want to get it of the window global
    const providerOSM = new GeoSearch.OpenStreetMapProvider();

    //leaflet map
    var leafletMap = L.map('leafletMap-registration', {
        fullscreenControl: true,
        // OR
        fullscreenControl: {
            pseudoFullscreen: false // if true, fullscreen to page width and height
        },
        minZoom: 5
    }).setView([-7.977914003560, 112.63416945934], 10);




    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(leafletMap);

    let theMarker = {};

    leafletMap.on('click', function(e) {
        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longitude = e.latlng.lng.toString().substring(0, 15);
        // document.getElementById("latitude").value = latitude;
        // document.getElementById("longitude").value = longitude;
        let popup = L.popup()
            .setLatLng([latitude, longitude])
            .setContent("Kordinat : " + latitude + " - " + longitude)
            .openOn(leafletMap);

        if (theMarker != undefined) {
            leafletMap.removeLayer(theMarker)
        }

        theMarker = L.marker([latitude, longitude]).addTo(leafletMap);

        document.querySelector("#longtitude").value = longitude;
        document.querySelector("#latitude").value = latitude;
    });


    var search = new GeoSearch.GeoSearchControl({
        provider: providerOSM,
        style: 'bar',
        showMarker: false,
        autoClose: true,
        retainZoomLevel: false,
        searchLabel: 'Cari....',
    });
    leafletMap.addControl(search);
</script>


<!-- Mirrored from affixtheme.com/html/xmee/demo/register-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2023 03:38:05 GMT -->

</html>
