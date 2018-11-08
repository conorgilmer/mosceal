<?php 
session_start();
$thisPage = "Surfing";
include ("inc/header.php");

if(!isset($_SESSION['google_data'])){
	include ("inc/menu.php");}
else if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
	die($_SESSION['loggedIn'] . " logined in in ");
	include ("inc/private/menu.php");}
else {
	include ("inc/private/menu.php");}
?>

<!-- main page -->

          <div class="jumbotron">
                      <h1>Surfing</h1>
            </div>
           <!-- main page content -->
          <div class="wrapper">
          <!-- above the containers to push down the footer -->

   <div class="container">

                <div class="row">

                <div class="span12 helpDoc">

<!-- Page stuff -->


<!--h1>Surfing</h1-->


<p>In recent years I have been shanghai'ed into going surfing in the west of ireland, it is something I am awful at, but enjoy it tremendously.
Places we have gone include, Lahinch, Bundoran/Tullan/Rossnowlough, Sligo/Strandhill, and Westport/Carrownisky. One thing I have learned is the importance of booties.</p>

<h2>Links</h2>
<p>Lahinch Surf School <a target="_blank" href="https://lahinchsurfschool.com/">www.lahinchsurfschool.com</a></p>
<p>Surf Mayo, Louisburg/Carownisky <a target="_blank" href="https://www.surfmayo.com/">www.surfmayo.com</a></p>
<p>Turf N'Surf, Bundoran <a target="_blank" href="http://www.turfnsurf.ie/">www.turfnsurf.ie</a></p>
<p>Bundoran Surfworld <a target="_blank" href="https://bundoransurfco.com/">www.turfnsurf.ie</a></p>
<p>Strandhill Surf School <a target="_blank" href="https://www.strandhillsurfschool.com/">www.strandhillsurfschool.com</a></p>

<?php include ("inc/footer.php") ?>



