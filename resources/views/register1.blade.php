<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESA.COM</title>
    <link href="https://i.postimg.cc/wj308LVk/images.png" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" type="text/css" href="reg/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="reg/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="reg/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="reg/css/iofrm-theme23.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
	integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
	crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin="">
	</script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
    <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>
    <style>
        #leafletMap-registration {
            height: 430px;
			width: 744px;
        
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(101, 95, 83, 0.5);
            /* The height is 400 pixels */
        }
        </style>
</head>
<body>
    <div class="form-body on-top-mobile">
        <div class="website-logo">
            <div><img src="https://i.postimg.cc/hGBKT07K/logo-removebg-preview.png" alt="" style="width:200px;"></div>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder simple-info">
                    <div><img src="reg/image-reg/graphic6.svg" alt=""></div>
                    <div><h3>Registrasi</h3></div>
                    <div><p>Masukkan letak desa anda</p></div>
                </div>
            </div>    
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="form-items" >
                            <div style="margin-left: -70px;margin-top:-40px" id="leafletMap-registration"></div>
                            <form action="/kekoordinat" method="post" enctype="multipart/form-data" style="margin-top: 20px">
                                @csrf
                               
                                <input type="text"  name="longtitude" id="longtitude" placeholder="longtitude">
                                <input type="text"  name="latitude" id="latitude" placeholder="latitude">

                               
            
                            </div>
                            <div class="row top-padding" style="margin-top:-40px">
                                <div class="col-12 col-sm-6">
                                    <label style="margin-left: 0px" for="chk1">Sudah punya akun ? <a href="/masuk" style="text-decoration: none;margin">Kembali ke login</a></label>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        <button id="submit" type="submit" class="ibtn less-padding" style="background-color: #F26522; color: #ffffff">Lanjutkan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
            
        </div>
    </div>
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
    }).setView([-7.9786395, 112.5617421], 2);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(leafletMap);
    
    let theMarker = {};

    leafletMap.on('click',function(e) {
        let latitude  = e.latlng.lat.toString().substring(0,15);
        let longitude = e.latlng.lng.toString().substring(0,15);
        // document.getElementById("latitude").value = latitude;
        // document.getElementById("longitude").value = longitude;
        let popup = L.popup()
            .setLatLng([latitude,longitude])
            .setContent("Kordinat : " + latitude +" - "+  longitude )
            .openOn(leafletMap);

        if (theMarker != undefined) {
            leafletMap.removeLayer(theMarker)
        }
        
        theMarker = L.marker([latitude,longitude]).addTo(leafletMap);  

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
    });leafletMap.addControl(search);
    


</script>
</html>
