<?php 
session_start();
$thisPage = "TV";
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
                      <h1>Satellite TV</h1>
            </div>
           <!-- main page content -->
          <div class="wrapper">
          <!-- above the containers to push down the footer -->

   <div class="container">

                <div class="row">

                <div class="span12 helpDoc">

<!-- Page stuff -->


<!--h1>TV</h1-->


<p>Growing out of my interest in Sport but more substantially, the News and Current Affairs, I got into Satellite TV, originally trying to get satellite feeds from news channels, but then the more relaxed effort to get TV channels from different satellites. Here I shall list the stations I like and what satellite they are available on, but also links of interest.
</p>
<h2>Links</h2>
<p>
<p>Satellite Index <a target="_blank" href="https://www.satindex.de/">www.satindex.de/</a></p>
<p>Lyngsat List of Stations<a target="_blank" href="https://www.lyngsat.com/">lyngsat.com</a></p>
<p>King of Sat<a target="_blank" href="https://en.kingofsat.net/">kingofsat.net</a></p>
<p>Freesat<a target="_blank" href="https://freesat.co.uk/">www.freesat.co.uk</a></p>

</p>
<?php include ("inc/footer.php") ?>



