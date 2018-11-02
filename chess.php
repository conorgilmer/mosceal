<?php 
session_start();
$thisPage = "Chess";
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
                      <h1>Chess
            </div>
           <!-- main page content -->
          <div class="wrapper">
          <!-- above the containers to push down the footer -->

   <div class="container">

                <div class="row">

                <div class="span12 helpDoc">

<!-- Page stuff -->


<!--h1>Colophon</h1-->


<p> 
</p>
<h2>Chess Links</h2>
<p>Irish Chess Union <a target="_blank" href="https://www.icu.ie">www.icu.ie</a></p>
<p>Leinster Chess Union <a target="_blank" href="http://www.leinsterchess.com">www.leinsterchess.com</a></p>
<p>FIDE <a target="_blank" href="https://www.fide.com">www.fide.com</a></p>


<?php include ("inc/footer.php") ?>



