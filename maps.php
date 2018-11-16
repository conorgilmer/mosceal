<?php 
$thisPage = "Maps";
include ("inc/header.php");
include ("inc/menu.php");
?>

		   <!-- main page content -->
		  <div class="wrapper">
		  <!-- above the containers to push down the footer -->

		      <div class="container">

			<div class="row">


	<!-- Page stuff -->

	<h1>Maps Embedded</h1>
<h3>Bing Maps</h3>
                        <div class="span2">
         </div>
                        <div class="span8">
<div>
     <iframe width="500" height="400" frameborder="0" src="https://www.bing.com/maps/embed?h=400&w=500&cp=53.37696282613374~-6.601505239276935&lvl=11&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
     </iframe>
     <div style="white-space: nowrap; text-align: center; width: 500px; padding: 6px 0;">
        <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=53.37696282613374~-6.601505239276935&amp;sty=r&amp;lvl=11&amp;FORM=MBEDLD">View Larger Map</a> &nbsp; | &nbsp;
        <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=53.37696282613374~-6.601505239276935&amp;sty=r&amp;lvl=11&amp;rtp=~pos.53.37696282613374_-6.601505239276935____&amp;FORM=MBEDLD">Get Directions</a>
    </div>
</div>
         </div>
                        <div class="span2">
         </div>
		</div>

			<div class="row">
<h3>Static Bing Map using Key</h3>
                        <div class="span2">
                        </div>
                        <div class="span8">
<img width="600" src="https://dev.virtualearth.net/REST/V1/Imagery/Map/Road/53.3870841%2C-6.3375127/13?mapSize=600,300&format=png&pushpin=53.3870841,-6.3375127;64;Dunskink%20Observatory&key=AqVkgH9oUfYEhKsnmYwF6AeeoojoQKp2MF-dZPUHGFr4Eah9gEfMxiG031qB-b_Q" alt="Bing Map of 53.3870841,-6.3375127">
                        </div>
                        <div class="span2">
                        </div>     
		</div>

			<div class="row">
<h3>Static Yandex Maps</h3>
                        <div class="span2">
                        </div>
                        <div class="span8">
<img width="600" src="https://static-maps.yandex.ru/1.x/?lang=en-US&ll=-6.3375127,53.3870841&z=14&l=map&size=600,300&pt=-6.3375127,53.3870841,pmgrm1" alt="Yandex Map of -6.3375127,53.3870841">
                        </div>
                        <div class="span2">
                        </div>     
		</div>

			<div class="row">
<h3>Open Street Maps</h3>

                        <div class="span2">
                        </div>
                        <div class="span8">
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
  <div id="mapDiv" style="width: 800px; height: 500px"></div>
                        </div>
                        <div class="span2">
                        </div>     
		</div>



<?php include ("inc/footer.php") ?>



