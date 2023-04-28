
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <title>Esri Leaflet</title>

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
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        width: 40%;
        height:40%;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        color: #323232;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <div style="margin-top: 30%">
    <input type="text" name="latitude" id="latitude" placeholder="latitude">
    <input type="text" name="longtitude" id="longtitude" placeholder="longtitude">
</div>
    

    <script>

      const apiKey = "AAPK4f8785f6e76e4108b1c32d88f6f0ad32IiBITEDmC8SboRsc8w-xAlbTUoZ6y06ZlbJmaFAjPh9dTAAODIVIVaqKVXqdDHAl";

      const basemapEnum = "ArcGIS:Navigation";

    //   untuk map.on('click', function(e) {
      const map = L.map("map", {
        minZoom: 2
      })

      map.setView([-33.8688, 151.2093], 14); // Sydney

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
  </body>
</html>