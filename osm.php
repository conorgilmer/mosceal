<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
</head>
<body>
  <div id="mapDiv" style="width: 800px; height: 500px"></div>
  <script>
    // position we will use later
    var lat = 53.3870814;
    var lon = -6.3375127;
    // initialize map
    map = L.map('mapDiv').setView([lat, lon], 13);
    // set map tiles source
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
      maxZoom: 18,
    }).addTo(map);
    // add marker to the map
    marker = L.marker([lat, lon]).addTo(map);
    // add popup to the marker
    marker.bindPopup("<b>Dunsink Observatory</b><br />Castleknock<br />Dublin").openPopup();
  </script>
</body>
</html>

