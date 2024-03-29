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
<p>Bad Hindelang / Oberjoch Residence Berg Blick <a target="_blank" href="https://bergblick-bad-hindelang.de/">Bergblick Bad Hindelang / OberJoch</a></p>

<p>Livigno <a target="_blank" href="https://www.livigno.eu/en/slopes">www.livigno.eu</a></p>
<p>Hemsedal <a target="_blank" href="https://hemsedal.com/skistar-hemsedal">www.hemsedal.com</a></p>
<p>Saalbach<a target="_blank" href="https://skicircus.saalbach.com/en/skiing">www.saalbach.com</a></p>
<p>Ski Amade <a target="_blank" href="https://www.skiamade.com">www.skiamade.com</a></p>
<p>Serre Chevalier <a target="_blank" href="https://www.serre-chevalier.com/en/winter/">www.serre-chevalier.com</a></p>
<p>Val Thorens <a target="_blank" href="http://www.valthorens.com/en/home-page.1.html">www.valthorens.com</a></p>

<p>SkiMcNeill <a target="_blank" href="http://www.skimcneill.com/">www.skimcneill.com</a></p>
<p>Directski <a target="_blank" href="https://www.directski.com/">www.directski.com</a></p>
<p>Top Flight <a target="_blank" href="https://www.topflight.ie/">www.topflight.ie</a></p>
<p>Inghams Ski Holidays <a target="_blank" href="https://www.inghams.co.uk/ski-holidays">www.inghams.co.uk/ski-holidays</a></p>
<p>O'Leary Travel <a target="_blank" href="http://www.bookaholiday.ie">www.bookaholiday.ie</a></p>
<p>Navan Travel <a target="_blank" href="https://www.travalue.ie/ski">www.travalue.ie/ski</a></p>
<p>Travel Solutions <a target="_blank" href="https://www.travel-solutions.co.uk/tour_categories/ski/">www.travel-solutions.co.uk/tour_categories/ski/</a> (flying from Belfast or Dublin)</p>
<p>Snow Forecast <a target="_blank" href="https://www.snow-forecast.com/">www.snow-forecast.com</a></p>
<p>Snow Forecast <a target="_blank" href="https://www.yr.no/en/">www.yr.no/en/</a> (Norwegian Met Office)</p>
<p>On the Snow <a target="_blank" href="https://www.onthesnow.com/">www.onthesnow.com</a></p>
<p>Ski Club of Ireland <a target="_blank" href="https://www.skiclub.ie/">www.skiclub.ie</a> Kilternan.</p>
<p>Irish Association of Snowsports Instructors (IASI) <a target="_blank" href="https://iasisnowsports.ie/">www.iasisnowsports.ie</a>.</p>
<p>British Association of Snowsports Instructors (BASI) <a target="_blank" href="https://www.basi.org.uk/">www.basi.org.uk</a>.</p>

<p>German Railways - DB <a target="_blank" href="https://www.bahn.com/en">www.bahn.com</a></p>
<p>Austrian Railways - OBB <a target="_blank" href="https://fahrplan.oebb.at/webapp/"> OBB Fahrplan Booking (Scotty)</a></p>
<h2>Flights</h2>
<p>RyanAir <a target="_blank" href="https://www.ryanair.com/">www.ryanair.com</a> to Salzburg, Klagenfurt(2023), Ljubljana, Brataslava, Bergamo, Grenoble, Memmigham, and Vienna(LaudaAir)</p>
<p>Aer Lingus <a target="_blank" href="https://www.aerlingus.com/">www.aerlingus.com</a> Munich, Vienna, Milan, Geneva, Zurich, and Lyon</p>
<p>Jet2.com <a target="_blank" href="https://www.jet2.com/">www.jet2.com</a>(from Belfast Intl.) to Salzburg.</p>
<p>Swiss <a target="_blank" href="https://www.swiss.com/">www.swiss.com</a> to Zurich.</p>
<p>TUI <a target="_blank" href="https://www.tuiholidays.ie/">www.tuiholidays.ie</a>(from Dublin, Cork & Shannon) to Salzburg, Innsbruck and Vienna.</p>
<p>Luftansa <a target="_blank" href="https://www.luftansa.com/">www.luftansa.com</a> to Munich.</p>
<p><b>Airports</b> Austria : 
<a target="_blank" href="https://www.salzburg-airport.com/en/">Salzburg</a>, 
<a target="_blank" href="https://airport-klagenfurt.at/en/home">Klagenfurt</a>, 
<a target="_blank" href="https://www.innsbruck-airport.com/en/">Innsbruck</a>, 
<a target="_blank" href="https://www.viennaairport.com/en/passengers">Vienna</a>. 
Italy : <a target="_blank" href="https://www.milanbergamoairport.it/en/">Bergamo (Milan)</a>, 
<a target="_blank" href="https://www.milanairports.com/en">Milan Airports (Malpensa and Linate)</a>, 
<a target="_blank" href="https://www.aeroportoditorino.it/en">Turin</a>. 
Slovakia : <a target="_blank" href="https://www.bts.aero/en/">Bratislava</a>. 
Slovenia : <a target="_blank" href="https://www.lju-airport.si/">Ljubljana</a>. 
Germany : <a target="_blank" href="https://www.munich-airport.com/">Munich</a>, 
<a target="_blank" href="https://www.memmingen-airport.com/">Memmingham</a>. 
France : <a target="_blank" href="https://www.lyonaeroports.com/en">Lyon</a>, 
<a target="_blank" href="https://www.chambery-airport.com/en/en">Chambery</a>, 
<a target="_blank" href="https://www.grenoble-airport.com/en/en">Grenoble</a>. 
Switzerland : <a target="_blank" href="https://www.gva.ch/en/">Geneva</a>, 
<a target="_blank" href="https://www.flughafen-zuerich.ch/en/passengers">Zurich</a> 
</p>
<p><b>Airport Transfers/Taxis</b>
<a target="_blank" href="https://salzburgtaxi.eu/">Salzburg Taxis</a> 
<a target="_blank" href="https://www.austriatransfer.com/en/">Austria Transfer</a> 
</p>
<h2>Tips</h2>
<p>One thing I recommend is to check when the school mid terms breaks are, normally it increases the prices for flights, accommodation, and availablilty. Once or twice we had extra traffic on the slopes and lifts since 1/2 of Holland, seemed to be skiing the same week as us.</p>

<p>European School Holidays (Warringtonbears)<a target="_blank" href="http://warringtonbears.org.uk/snowheads/eric2223.pdf">2022-2023 - European School Holidays (PDF)</a></p>

<p>ZigZagSki List School Holidays <a target="_blank" href="http://www.zigzagski.com/calendar2019/">www.zigzagski.com/calendar2019/</a></p>
<p>European School Holidays <a target="_blank" href="https://www.schoolholidayseurope.eu/">www.schoolholidayseurope.eu</a></p>

<p>Booking an a la carte trip, really involves booking, your flights, connection, accommodation, and sorting ski-pass and rental when you are there. Often it works out better to get a bus or train or even hire a car, depending on the resort and airport you are travelling through.</p> 
<p>Being able to ski to your door is nice, but it is more essential to not have to lug your skis back and forth between your accommodation and the 1st ski lift.</p>

<p>I have travelled to ski holidays in the Alps, from Dublin through airports such as, Bergamo(Milan), Lyon, Turin, Grenoble, Vienna, Salzburg, Memmingham, Brataslava, and Munich. So often there are different routes to get to a resort.</p>

<p>Clothes, ski jacket, salapettes, gloves, hat and ski-socks. A thermal layer Merino Wool, light, warm and non smelling, is one I really like. Goggles and shades, depending on conditions you can switch between them. Get Sun block and lip balm.</p>

<p>I rent my equipment, since I think it is too much hassle, carrying them on planes. If you are buying equipment, skiboots are perhaps the best since they can be specially fitted to you, also a helmet maybe a good to purchase and fits easier in your case.</p>

<p>It is a good idea to sort your equipment out ASAP, e.g. if you arrive on the saturday, sort it out if you can, so when you start on sunday you are ready to go. You should have your details available, if booking in advance you can send them your details, weight, height, shoe size, how experienced you are first time, beginner, intermediate, expert etc.,  what sort of equipment you require, Skis, Boots, Helmet, poles. It can quicken things up if you book equipment in advance and send them your details, you can always change the boots size if they are not comfortable when you are trying them on. And dont leave it to the last day when you are handing back your rental gear to pay, since it will be hectic.</p>

<h2>Travel Journalists/Writers</h2>
<p>Some commentators on travel I have always found informed and with practical advice on travel (especially during these covid times) are..</p>
<p>Simon Calder <a target="_blank" href="https://www.simoncalder.co.uk/">www.simoncalder.co.uk</a></p>
<p>Eoghan Corry <a target="_blank" href="https://eoghancorry.com/">www.eoghancorry.com</a></p>

<h3><b>Ski Blogs</b></h3>
<p>Abigail Butcher <a target="_blank" href="https://www.abibutcher.com/">www.abibutcher.com</a></p>
<p>Ski Independence <a target="_blank" href="https://www.ski-i.com/blog/">www.ski-i.com/blog/</a></p>

<h3><b>Government Travel advice</b></h3>
<p>Due to COVID-19 government travel advice is well worth checking, particularly issues like masks, testing and quarantining, hopefully now in 2023 they are all gone never to return</p>
<p>Dept. of Foreign Affairs Travel Advice <a target="_blank" href="https://www.dfa.ie/travel/travel-advice/">www.dfa.ie/travel/travel-advice/</a></p>
<p>UK Dept. of Foreign Affairs Travel Advice <a target="_blank" href="https://www.gov.uk/foreign-travel-advice">www.gov.uk/foreign-travel-advice</a></p>


<?php include ("inc/footer.php") ?>



