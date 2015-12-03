<?php 
$thisPage = "Foursquare";
include ("inc/header.php"); 
include ("inc/menu.php");
?>

		   <!-- main page content -->

		  <div class="wrapper">
		  <!-- above the containers to push down the footer -->

		      <div class="container">

			<div class="row">


	<!-- Page stuff -->

	<h1>Foursquare Stuff</h1>
<div class="span12">
<h2>Buttons</h2>
</div>
<div class="span4">
<!-- Place this anchor tag where you want the button to go -->
<a href="https://foursquare.com/user/41414734" class="fourSq-widget" data-type="follow" data-fuid="41414734" data-user-name="Conor Gilmer">Follow us on Foursquare</a>

<!-- Place this script somewhere after the anchor tag above. If you have multiple buttons, only include the script once. -->
<script type='text/javascript'>
  (function() {
    window.___fourSq = {};
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.src = 'http://platform.foursquare.com/js/widgets.js';
    s.async = true;
    var ph = document.getElementsByTagName('script')[0];
    ph.parentNode.insertBefore(s, ph);
  })();
</script>
</div>

<div class="span4">
</div>

<div class="span4">
</div>


</div>

<?php include ("inc/footer.php") ?>



