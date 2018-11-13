<?php 
session_start();
$thisPage = "Radio";
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
                      <h1>Radio</h1>
            </div>
           <!-- main page content -->
          <div class="wrapper">
          <!-- above the containers to push down the footer -->

   <div class="container">

                <div class="row">

                <div class="span12 helpDoc">

<!-- Page stuff -->


<!--h1>Radio</h1-->


<p>
I have always been interested in Radio and electronics, in the days before the internet I enjoyed listening through an earpiece to far flung stations (trainspotter like).<br> I was interested in news and current affairs, and back then there were many european particularly central and eastern european radio stations, now not so much but a lot of chinese broadcasting on SW.<br>
 While studying Physics in Maynooth I took the option to do an Amateur Radio Course, and nigh on 12 years later took the  <a target="_blank" href="https://www.comreg.ie">Comreg</a>/<a target="_blank" href="http://www.irts.ie">Irish Radio Transmitters Society</a> run Examination and got the Licence and Call Sign <b>ei5gab</b>.<br> 
In recent years many stations have been switched off on the AM frequencies. 
One consequence is some of the frequencies are a little clearer, although interference from other electronic devices is considerable. A few countries like Norway, are looking at closing down FM stations in the short term.
</p>
<p>
<h2>Links</h2>
<p>Medium Wave Channels <a target="_blank" href="https://mwradio.eu/">www.mwradio.eu</a></p>
<p>Medium and Long Wave Channels <a target="_blank" href="http://mediumwaveradio.com/">www.mediumwaveradio.com</a></p>
<p>Short Wave Frequencies <a target="_blank" href="https://www.short-wave.info/">www.short-wave.info</a></p>
<p>Ham Radio Ireland Information <a target="_blank" href="https://www.hamradio.ie/">www.hamradio.ie</a></p>
<p>Comreg Radio Amateurs <a target="_blank" href="https://www.comreg.ie/industry/radio-spectrum/licensing/search-licence-type/radio-amateurs-2/">www.comreg.ie</a></p>
<p>Radio Society of Great Britain <a target="_blank" href="https://rsgb.org/">rsgb.org</a></p>

</p>
<?php include ("inc/footer.php") ?>



