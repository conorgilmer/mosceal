<?php 
$thisPage = "Graphs";
include ("inc/header.php");
include ("inc/menu.php");
?>

<!-- main page content -->
          <div class="wrapper">
          <!-- above the containers to push down the footer -->

              <div class="container">

                <div class="row">

                <div class="span12 helpDoc">

<!-- Page stuff -->


<h1>Graphs</h1>
<p>Over the years I have used a number of packages to generate graphs, simple enough graphs such as line, bar, pie etc. I have used some open source ones <a target="_blank" href="http://phpmygraph.abisvmm.nl/">PhpMyGraph</a>(offline at the moment) and <a target="_blank" href="https://naku.dohcrew.com/libchart/pages/introduction/">LibChart</a> (Reading from a MySql and using PHP to generated the graphs), before using <a target="_blank" href="https://developers.google.com/chart/">Google Charts</a> in recent years, using JSON, PHP and MySql. 
I hope to put up some of my observations, and how-tos regarding my adventures with them here.

<h2>LibChart</h2>
<p>I like these for Pie Charts (2 and 3 D), Multiplie Line Charts and Bar Charts. I dont like the watermarked/LibChart title, and I would like to be able to title the columns but it is a powerful graph generator.
Not that much of an issue on most servers now but you needed PHP with GD Version: 2.0 or higher
FreeType Version: 2.0 or higher.</p>


<h2>PhpMyGraph</h2>
<p>I always like these graphs for simplicity, negatives are there is no Pie Chart, and the randomise colour for Bar Charts contradict what you would expect in some charts, probably needs some customising.</p>

<h2>Google Charts</h2>
<p>A tremendous resource and options in graphs to produce. Plenty of documentation on line. One thing I like is the dynamic charts you can create and read information from a google spreadsheet.</p>


<?php include ("inc/footer.php") ?>



