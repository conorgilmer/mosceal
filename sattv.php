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
<p>Lyngsat List of Stations <a target="_blank" href="https://www.lyngsat.com/">lyngsat.com</a></p>
<p>King of Sat <a target="_blank" href="https://en.kingofsat.net/">kingofsat.net</a></p>
<p>Freesat <a target="_blank" href="https://freesat.co.uk/">www.freesat.co.uk</a></p>
</div>
</div>
</div>


                      <div class="container">

                        <div class="row">


        <!-- Page stuff -->

<h2>Satellite / Stations</h2>
                        <div class="span4">
<h3>Astra 28.2/28.5 East</h3>
<ul>
<li>PBS America</li>
<li>Travel Channel</li>
<li>Al Jazzera </li>
<li>France 24 </li>
<li>CNN </li>
<li>EuroNews </li>
<li>BBC News </li>
<li>CNBC </li>
<li>Russia Today </li>
<li>Bloomberg </li>
<li>TRT World </li>
<li>BBC Four</li>
<li>Quest</li>
<li>Yesterday</li>
</ul>
                        </div>
                        <div class="span4">
<h3>Astra 19.2 East</h3>
<ul>
<li>DW (English)</li>
<li>BBC World</li>
<li>Russia Today </li>
<li>Eurosport (German) </li>
<li>N-TV (German) - News Channel </li>
<li>France 24 </li>
<li>TRT World </li>
<li>RAI News 24 (Italian) </li>
<li>Sky News Int  </li>
<li>ARTE (German & French)</li>
</ul>
                        </div>
                        <div class="span4">
<h3>Hotbird 13.0 East</h3>
<ul>
<li>DW (English)</li>
<li>Russia Today</li>
<li>Russia Today Doc</li>
<li>RAI News 24 (Italian) </li>
</ul>

                        </div>


</div>
</div>


                      <div class="container">

                        <div class="row">


                        <div class="span4">
<h3>5.0 West</h3>
<ul>
<li>ARTE (French)</li>
<li>France 2</li>
<li>France 3</li>
<li>France 4</li>
</ul>
                        </div>
                        <div class="span4">
<h3>5.0 East</h3>
                        </div>
                        <div class="span4">
<h3>9.0 East</h3>
<li>EBS </li>
<li>EBS + </li>
<li>BBC World </li>
<li>Bloomberg </li>
                        </div>




<?php include ("inc/footer.php") ?>



