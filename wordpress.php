<?php 
$thisPage = "Wordpress";
include ("inc/header.php"); 
include ("inc/menu.php");
include ("inc/functions/wpfeed.php");
?>

	   <!-- main page content -->
	  <div class="wrapper">
	  <!-- above the containers to push down the footer -->

	      <div class="container">

		<div class="row">

		<div class="span12 helpDoc">

<!-- Page stuff -->
<div class="row">
<h1>Wordpress Website feeds returned by php</h1>
<div class="span4">
<h2>Webwayz</h2>
<?php echo getFeed("http://www.webwayz.com/feed"); ?>
</div>

<div class="span4">
<h2>My Blog Posts</h2>
<?php echo getFeed("http://www.conorgilmer.com/feed"); ?>
</div>



<div class="span4">
<h2>Chess Club posts</h2>
<?php echo getFeed("http://www.phibsborochessclub.com/feed"); ?>

</div>

</div>
</div>
<?php include ("inc/footer.php") ?>



