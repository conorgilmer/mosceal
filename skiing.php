<?php 
session_start();
$thisPage = "Skiing";
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
                      <h1>Skiing</h1>
            </div>
           <!-- main page content -->
          <div class="wrapper">
          <!-- above the containers to push down the footer -->

   <div class="container">

                <div class="row">

                <div class="span12 helpDoc">

<!-- Page stuff -->


<!--h1>Skiing</h1-->


<p>I lived in Norway many moons ago, one disease i contracted there was the love of skiing, bad as I am at it I love it. And so now every spring I empty my wallet and go skiing, in Austria in recent years, but have skied in Norway, Italy, France and Germany many times now. I will add some links to the places and ski holiday providers and groups, I have found decent here.
</p>

<h2>Links</h2>
<p>Pension Enzian Saalbach <a target="_blank" href="http://pensionenzian.com/en/">www.pensionenzian.com</a></p>
<p>SkiMcNeill <a target="_blank" href="http://www.skimcneill.com/">www.skimcneill.com</a></p>
<p>Hemsedal Resort <a target="_blank" href="https://www.hemsedal.com/en">www.hemsedall.com</a></p>
<p>Siegi Tours <a target="_blank" href="http://www.siegitours.com/">www.siegitours.com</a></p>


<?php include ("inc/footer.php") ?>



