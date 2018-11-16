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
<h3>Open Street Maps</h3>
                        <div class="span2">
                        </div>
                        <div class="span8">
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-7.922827005386353%2C53.094880926294834%2C-7.9136860370635995%2C53.09875274066654&amp;layer=mapnik&amp;marker=53.09681687703483%2C-7.918256521224976" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=53.09682&amp;mlon=-7.91826#map=17/53.09682/-7.91826">View Larger Map</a></small>
                        </div>
                        <div class="span2">
                        </div>     
		</div>

			<div class="row">

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
<h3>Other Maps</h3>

                        <div class="span2">
                        </div>
                        <div class="span8">

<b>Google Maps</b> used to be free to use its API but since June 2018 they have started charging so here is a link to a page, since i am declining to use it from now on <a target="_blank" href="gmaps.php">Google Maps Dunsink</a>
<br>
<b>Open Street Maps</b> stand alone page  <a target="_blank" href="osm.php">Open Street Maps Dunsink</a>

                        </div>
                        <div class="span2">
                        </div>     
		</div>



<?php include ("inc/footer.php") ?>



