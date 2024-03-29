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


<p>I first learnt to play chess when I was 4, I played it in school and joined a club Phibsboro. My paricipation is mainly in the Leinster Leagues for the club, friendly games in the club and the club blitz competitions. Despite being a technologist, and indeed a computer game player in my youth, online chess has yet to grip me. I think chess is something which should be recognised as a sport, and given more support by government, it should be available to kids in school to learn for its many benefits, it is something people of different physical abilities and ages can compete on an equal playing field.  
</p>
<h2>Chess Links</h2>
<p>Irish Chess Union <a target="_blank" href="https://www.icu.ie">www.icu.ie</a></p>
<p>Leinster Chess Union <a target="_blank" href="http://www.leinsterchess.com">www.leinsterchess.com</a></p>
<p>Ulster Chess Union <a target="_blank" href="http://www.ulsterchess.org">www.ulsterchess.org</a></p>
<p>Cork Chess <a target="_blank" href="http://www.corkchess.com">www.corkchess.com</a></p>
<p>Phibsboro Chess Club <a target="_blank" href="https://www.phibsborochessclub.com">www.phibsborochessclub.com</a></p>
<p>FIDE <a target="_blank" href="https://www.fide.com">www.fide.com</a></p>
<p>Chess Online <a target="_blank" href="https://www.chess.com">www.chess.com</a></p>
<p>Chess Online <a target="_blank" href="https://lichess.org/@/conorjg">lichess.org/@/conorjg</a></p>


<?php include ("inc/footer.php") ?>



