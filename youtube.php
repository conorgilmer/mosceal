<?php 
$thisPage = "YouTube";
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


<h1> My YouTube Videos</h1>
<p>Some videos I posted on YouTube.</p>
 <div class="row text-center">

<iframe id="ytplayer" type="text/html" width="640" height="360"
src="https://www.youtube.com/embed/?listType=user_uploads&list=cjgilmer"
frameborder="0" allowfullscreen></iframe>

      </div><!-- /.row -->

<h1> Follow My YouTube Videos</h1>
<p>Follow me button .</p>
 <div class="row text-center">

<script src="https://apis.google.com/js/platform.js"></script>

<div class="g-ytsubscribe" data-channelid="UCS6IZ_ydBtmigY15y2qdZ8g" data-layout="full" data-count="default"></div>

</div>

<?php include ("inc/footer.php") ?>



