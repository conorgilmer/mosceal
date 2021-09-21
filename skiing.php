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


<p>I lived in Norway many moons ago, one disease i contracted there was the love of skiing, bad as I am at it I love it. And so now every spring I empty my wallet and go skiing, in Austria in recent years, but have skied in Norway, Italy, France and Germany many times now. I will add some links to the places I have stayed, resorts  and ski holiday providers and groups, I have found decent and useful links here. I have done both package deals, and bespoke/a la carte holidays, there is benefits and challenges with both methods..
</p>

<h2>Links</h2>
<p>Pension Enzian Saalbach <a target="_blank" href="http://pensionenzian.com/en/">www.pensionenzian.com</a></p>
<p>Hemsedal Resort <a target="_blank" href="https://www.hemsedal.com/en">www.hemsedal.com</a></p>
<p>Les Chalets du Jardin Alpin, Serre Chevalier <a target="_blank" href="https://www.montagne-vacances.com/fr/appartement-duplex-3-pieces-6-personnes-31,serre-chevalier-1400_19601.html">Les Chalets du Jardin Alpin</a></p>
<p>Barenbachhof Hotel Saalbach <a target="_blank" href="https://www.baerenbachhof.com/">www.baerenbachhof.com</a></p>
<p>Siegi Tours <a target="_blank" href="http://www.siegitours.com/">www.siegitours.com</a></p>
<p>Bad Hindelang / Oberjoch Residence Algaeublick <a target="_blank" href="http://www.allgblick.privat.t-online.de/index.html">Book</a> , <a target="_blank" href="www.allgaeublick.net">www.allgaeublick.net</a></p>
<p>Serre Chevalier <a target="_blank" href="https://www.serre-chevalier.com/en/winter/">www.serre-chevalier.com</a></p>
<p>Val Thorens <a target="_blank" href="http://www.valthorens.com/en/home-page.1.html">www.valthorens.com</a></p>

<p>SkiMcNeill <a target="_blank" href="http://www.skimcneill.com/">www.skimcneill.com</a></p>
<p>Directski <a target="_blank" href="https://www.directski.com/">www.directski.com</a></p>
<p>Top Flight <a target="_blank" href="https://www.topflight.ie/">www.topflight.ie</a></p>
<p>Inghams Ski Holidays <a target="_blank" href="https://www.inghams.co.uk/ski-holidays">www.inghams.co.uk/ski-holidays</a></p>
<p>O'Leary Travel <a target="_blank" href="http://www.bookaholiday.ie">www.bookaholiday.ie</a></p>
<p>Navan Travel <a target="_blank" href="https://www.travalue.ie/ski">www.travalue.ie/ski</a></p>
<p>Snow Forecast <a target="_blank" href="https://www.snow-forecast.com/">www.snow-forecast.com</a></p>
<p>On the Snow <a target="_blank" href="https://www.onthesnow.com/">www.onthesnow.com</a></p>

<h2>Tips</h2>
<p>One thing I recommend is to check when the school mid terms breaks are, normally it increases the prices for flights, accommodation, and availablilty. Once or twice we had extra traffic on the slopes and lifts since 1/2 of Holland, seemed to be skiing the same week as us.</p>

<p>ZigZagSki List School Holidays <a target="_blank" href="http://www.zigzagski.com/calendar2019/">www.zigzagski.com/calendar2019/</a></p>
<p>European School Holidays <a target="_blank" href="https://www.schoolholidayseurope.eu/">www.schoolholidayseurope.eu</a></p>

<p>Booking an a la carte trip, really involves booking, your flights, connection, accommodation, and sorting ski-pass and rental when you are there. Often it works out better to get a bus or train or even hire a car, depending on the resort and airport you are travelling through.</p> 
<p>Being able to ski to your door is nice, but it is more essential to not have to lug your skis back and forth between your accommodation and the 1st ski lift.</p>

<p>I have travelled to ski holidays in the Alps, from Dublin through airports such as, Bergamo(Milan), Lyon, Turin, Grenoble, Vienna, Salzburg, Memmingham, Brataslava, and Munich. So often there are different routes to get to a resort.</p>

<p>Clothes, ski jacket, salapettes, gloves, hat and ski-socks. A thermal layer Merino Wool, light, warm and non smelling, is one I really like. Goggles and shades, depending on conditions you can switch between them. Get Sun block and lip balm.</p>

<p>I tend to ski with a small backpack(rather that trying to stuff things into your pockets), so I carry water, I have a platypus but sometimes just bring a bottle of water, you'd be surprised how dehydrating skiing is, an extra layer in case it gets cold, or to store layer if it heats up, a hat (to replace the helmet when sitting outside), sunblcok, lipbalm, battery pack for your mobile phone, googles or shades depending on which you are using while skiing.
</p>
<p>I rent my equipment, since I think it is too much hassle, carrying them on planes. If you are buying equipment, skiboots are perhaps the best since they can be specially fitted to you, also a helmet maybe a good to purchase and fits easier in your case.</p>

<?php include ("inc/footer.php") ?>



