<?php 
$thisPage = "Weather";
include ("inc/header.php");
include ("inc/menu.php");
?>

		   <!-- main page content -->
		  <div class="wrapper">
		  <!-- above the containers to push down the footer -->

		      <div class="container">

			<div class="row">


	<!-- Page stuff -->

	<h1>Weather Widgets</h1>
<h3>Weather Widgets Met Eireann</h3>
                        <div class="span4">
<iframe src="http://archive.met.ie/widgets/3daysummary.asp" style=" border-width:0 " width="134" height="222" frameborder="0" scrol
ling="no"></iframe>

         </div>
                        <div class="span4">
<iframe src="http://archive.met.ie/widgets/charts-mini.asp" style=" border-width:0 " width="134" height="222" frameborder="0" scrolling="no"></iframe>
         </div>
                        <div class="span4">
<iframe src="http://archive.met.ie/widgets/latest-mini.asp" style=" border-width:0 " width="134" height="222" frameborder="0" scrolling="no"></iframe>
         </div>


		</div>

			<div class="row">

<h3>Other Weather Widgets</h3>
                        <div class="span3">
<div style="margin:auto;text-align:center;"><div style="text-align:center;"><a target="_blank" style="font-size:14px;color:#039;font-family:arial;font-weight:bold; text-decoration:none;title="Golf WeatherOnline " href="https://www.weatheronline.co.uk/weather/maps/city?GLOC=&LANG=en&WMO=&LEVEL=100&R=400"></a></div><iframe width="145" height="130" marginheight="0" marginwidth="0" frameborder="0"
src="https://www.weatheronline.co.uk/cgi-bin/homecif?WMO=03969&L=en&WIDTH=145&HEIGHT=130&CLOUD=1&V=2">
</iframe>
</div>

                        </div>
                        <div class="span3">
                        </div>
                        <div class="span3">
                        </div>                        <div class="span3">
                        </div>
                        


<?php include ("inc/footer.php") ?>



