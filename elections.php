<?php 
session_start();
$thisPage = "Elections";
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
                      <h1>Elections</h1>
            </div>
           <!-- main page content -->
          <div class="wrapper">
          <!-- above the containers to push down the footer -->

   <div class="container">

                <div class="row">

                <div class="span12 helpDoc">

<!-- Page stuff -->


<!--h1>Elections</h1-->


<p>I have always been interested in politics and elections. Here are some links to good sites about elections in Ireland.
</p>

<h2>Election Data and Psephologist Analysis Links</h2>
<p>ElectionsIreland.org <a target="_blank" href="http://www.electionsireland.org">www.electionsireland.org</a></p>
<p>Adrian Kavanaghs Blog<a target="_blank" href="https://adriankavanaghelections.org/">www.adriankavanaghelections.org</a></p>
<p>Irish Elections <a target="_blank" href="http://www.irelandelection.com">www.irelandelection.com</a></p>
<p>Nicholas Whytes Northern Ireland Elections <a target="_blank" href="http://www.ark.ac.uk/elections/">www.ark.ac.uk/elections</a></p>
<p>The Mathematics of Irish Elections <a target="_blank" href="http://www.math.nus.edu.sg/aslaksen/voting.html">http://www.math.nus.edu.sg/aslaksen/voting.html</a></p>
<p>Joshua Leinsdorf (US Election Psephologist)<a target="_blank" href="http://www.leinsdorf.com/index.html">www.leinsdorf.com</a></p>



<?php include ("inc/footer.php") ?>



