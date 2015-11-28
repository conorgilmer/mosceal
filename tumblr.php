<?php 
$thisPage = "Tumblr";
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
<div class="row">
	<h1>Tumblr Buttons</h1>
<div class="span4">

<h3>Tumblr Post</h3>
<a class="tumblr-share-button" data-color="blue" data-notes="right" href="https://embed.tumblr.com/share"></a>
<script>!function(d,s,id){var js,ajs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://secure.assets.tumblr.com/share-button.js";ajs.parentNode.insertBefore(js,ajs);}}(document, "script", "tumblr-js");</script>

</div>
<div class="span4">
<h3>Follow Button (Generic)</h3>


<iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="20" width="65" src="https://platform.tumblr.com/v2/follow_button.html?type=follow&amp;tumblelog=conorgilmer&amp;color=blue"></iframe>

</div>
<div class="span4">
<h3>Follow Button (Name)</h3>
<iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="20" width="200" src="https://platform.tumblr.com/v2/follow_button.html?type=follow-blog&amp;tumblelog=conorgilmer&amp;color=blue"></iframe>
</div>
</div>
<?php include ("inc/footer.php") ?>



