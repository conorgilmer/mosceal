<?php 
session_start();
$thisPage = "Colophon";
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
                      <h1>Colophon</h1>
            </div>
           <!-- main page content -->
          <div class="wrapper">
          <!-- above the containers to push down the footer -->

   <div class="container">

                <div class="row">

                <div class="span12 helpDoc">

<!-- Page stuff -->


<!--h1>Colophon</h1-->


<p> Well these pages need to acknowledge some technologies and people who inspired them. Naturally technologies like PHP, HTML, CSS, Bootstrap, API's and widgets from google+, facebook, youtube, instragram, flickr, twitter, tumblr, pinterest and foursquare. Also the lecture notes of Conor O'Reilly and Daniel Griffin.
</p>
<p>
Also some old friends such as the vim(<a target="_blank" href="http://www.vim.org">www.vim.org</a>) editor and gimp(<a target="_blank" href="http://www.gimp.org">www.gimp.org</a>) were used to edit code and images, a useful online tool I like is Pixlr(<a target="_blank" href="http://www.pixlr.com">www.pixlr.com</a>).
</p>
<p>Developed locally on Linux(Ubuntu) with Apache, MySql and PHP, also then tweaked on XAMPP(<a target="_blank" href="http://www.xampp.org">www.xampp.org</a>) and MAMP (<a target="_blank" href="http://www.mamp.info">www.mamp.info<a>).
</p>
<?php include ("inc/footer.php") ?>



