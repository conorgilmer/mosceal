<?php 
$thisPage = "Pinterest";
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


<h1> My Pinterest Widget</h1>
<p>Pinterest stuff.</p>
 <div class="row text-center">


 
        <div class="span4">
<a data-pin-do="buttonFollow" href="https://www.pinterest.com/conorgilmer">Conor&nbsp;Gilmer</a>
<!-- Please call pinit.js only once per page -->
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
       </div>


        <div class="span4">
     <a data-pin-do="embedUser" href="https://www.pinterest.com/conorgilmer/"data-pin-scale-width="80" data-pin-scale-height="200" data-pin-board-width="400">    Visit Conor's profile on Pinterest.</a><!-- Please call pinit.js only once per page --><script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>    


        <div class="span4">
        </div>
       </div>
      </div><!-- /.row -->


<?php include ("inc/footer.php") ?>



