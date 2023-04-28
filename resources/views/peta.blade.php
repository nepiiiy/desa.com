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

     <!-- Load Leaflet from CDN -->
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" crossorigin="" />
     <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" crossorigin=""></script>
 
     <!-- Load Esri Leaflet from CDN -->
     <script src="https://unpkg.com/esri-leaflet@3.0.10/dist/esri-leaflet.js"></script>
     <script src="https://unpkg.com/esri-leaflet-vector@4.0.1/dist/esri-leaflet-vector.js"></script>
 
     <!-- Load Esri Leaflet Geocoder from CDN -->
     <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@^3.1.3/dist/esri-leaflet-geocoder.css">
     <script src="https://unpkg.com/esri-leaflet-geocoder@^3.1.3/dist/esri-leaflet-geocoder.js"></script>
 
     <style>
       body {
         margin: 0;
         padding: 0;
       }
       #map {
        height: 430px;
        width: 700px;

        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(101, 95, 83, 0.5);
       }
     </style>

</head>



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
                            <div id="map"></div>
                        </div>
                        <br>
                        <form action="/kekoordinat" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <div class="row" style="width:165%;">
                                    <div class="col-md-6 col-12">

                                        <input type="text" name="latitude" id="latitude" placeholder="latitude">
                                        <input type="text" name="longtitude" id="longtitude"
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

    const apiKey = "AAPK4f8785f6e76e4108b1c32d88f6f0ad32IiBITEDmC8SboRsc8w-xAlbTUoZ6y06ZlbJmaFAjPh9dTAAODIVIVaqKVXqdDHAl";

    const basemapEnum = "ArcGIS:Navigation";

  //   untuk map.on('click', function(e) {
    const map = L.map("map", {
      minZoom: 2
    })

    map.setView([-7.95623, 112.71194], 14); // Sydney

    L.esri.Vector.vectorBasemapLayer(basemapEnum, {
      apiKey: apiKey
    }).addTo(map);

    const searchControl = L.esri.Geocoding.geosearch({
      position: "topright",
      placeholder: "Enter an address or place e.g. 1 York St",
      useMapBounds: false,

      providers: [
        L.esri.Geocoding.arcgisOnlineProvider({
          apikey: apiKey,
          nearby: {
            lat: -33.8688,
            lng: 151.2093
          }
        })
      ]

    }).addTo(map);

    const results = L.layerGroup().addTo(map);

   
    let theMarker;

    map.on('click', function(e) {
      let latitude = e.latlng.lat.toString().substring(0, 15);
      let longitude = e.latlng.lng.toString().substring(0, 15);
      // document.getElementById("latitude").value = latitude;
      // document.getElementById("longitude").value = longitude;
      let popup = L.popup()
          .setLatLng([latitude, longitude])
          .setContent("Kordinat : " + latitude + " - " + longitude)
          .openOn(map);

      if (theMarker != undefined) {
          map.removeLayer(theMarker)
      }

      theMarker = L.marker([latitude, longitude]).addTo(map);

      document.querySelector("#longtitude").value = longitude;
      document.querySelector("#latitude").value = latitude;
  });

  searchControl.on("results", (data) => {
results.clearLayers();

if (theMarker != undefined) {
          map.removeLayer(theMarker)
      }

const latlng = data.results[0].latlng;
const latitude = latlng.lat;
const longitude = latlng.lng;


// Update the input fields with the new latitude and longitude


for (let i = data.results.length - 1; i >= 0; i--) {
  const marker = L.marker(data.results[i].latlng);

const lat = data.results[i].latlng.lat.toFixed(5);
const lng = data.results[i].latlng.lng.toFixed(5);

const lngLatString = `${lng}, ${lat}`;
marker.bindPopup(`<b>${lngLatString}</b><p>${data.results[i].properties.LongLabel}</p>`);
document.querySelector("#latitude").value = lat;
document.querySelector("#longtitude").value = lng;


  results.addLayer(marker);

  marker.openPopup();
}
});


  </script>

<!-- Mirrored from affixtheme.com/html/xmee/demo/register-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2023 03:38:05 GMT -->

</html>
