<?php 
$thisPage = "Twitter";
include ("inc/header.php");
include ("inc/menu.php");
?>

		   <!-- main page content -->
		  <div class="wrapper">
		  <!-- above the containers to push down the footer -->

<!-- Twitter Send tweets -->
            <!--  button -->
            <div class="container buttonbar">
            <p align="right">

              <a href="twitter_post.php"
                 class="btn btn-success btn-large">A Tweet</a>

              <a href="twitter_postForm.php"
                 class="btn btn-success btn-large">A Tweet Form : PHP</a>

              <a href="twitter_postFormAJAX.php"
                 class="btn btn-success btn-large">A Tweet Form : AJAX</a>

              <a href="twitter_postFormJQueryAJAX.php"
                 class="btn btn-success btn-large">A Tweet Form : JQuery AJAX</a>
            </p>
            </div>

		      <div class="container">

			<div class="row">


	<!-- Page stuff -->

	<h1>Twitter Stuff</h1>


<h3>Twitter Buttons</h3>
			<div class="span3">
<a href="https://twitter.com/conorgilmer" class="twitter-follow-button" data-show-count="false">Follow @conorgilmer</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
			<div class="span3">
<a href="https://twitter.com/intent/tweet?screen_name=conorgilmer" class="twitter-mention-button" data-related="conorgilmer">Tweet to @conorgilmer</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
			<div class="span3">
<a href="https://twitter.com/intent/tweet?button_hashtag=irishchess" class="twitter-hashtag-button" data-related="conorgilmer">Tweet #irishchess</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
			<div class="span3">
<a href="https://twitter.com/intent/tweet?screen_name=conorgilmer" class="twitter-mention-button" data-related="conorgilmer">Tweet to @conorgilmer</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
			</div>
			<div class="row">
			<div class="span4">
              <h3>My Tweets</h3>
              <a class="twitter-timeline" href="https://twitter.com/conorgilmer" data-widget-id="393732727855259648">Tweets by @conorgilmer</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

         </div> 
			<div class="span4">
  <h3>#irishchess</h3>
<p><a class="twitter-timeline" href="https://twitter.com/hashtag/irishchess" data-widget-id="667173465485635585">#irishchess Tweets</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


         </div> 
			<div class="span4">
  <h3>Chess Club Tweets</h3>
<a class="twitter-timeline" href="https://twitter.com/phibsborochess" data-widget-id="667734738489221120">Tweets by @phibsborochess</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

         </div> 
<?php include ("inc/footer.php") ?>



