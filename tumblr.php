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

</div>
<div class="span4">
<h3>Post on Tumblr</h3>
<a class="tumblr-share-button" data-color="blue" data-notes="right" href="https://embed.tumblr.com/share"></a>
<script>!function(d,s,id){var js,ajs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://secure.assets.tumblr.com/share-button.js";ajs.parentNode.insertBefore(js,ajs);}}(document, "script", "tumblr-js");</script>

<h3>Follow Button (Generic)</h3>


<iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="20" width="65" src="https://platform.tumblr.com/v2/follow_button.html?type=follow&amp;tumblelog=conorgilmer&amp;color=blue"></iframe>

<h3>Follow Button (Name)</h3>
<iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="20" width="120" src="https://platform.tumblr.com/v2/follow_button.html?type=follow-blog&amp;tumblelog=conorgilmer&amp;color=blue"></iframe>
</div>
<div class="span4">
<h3>A Tumblr Post/Widget</h3>
<div class="tumblr-post" data-href="https://embed.tumblr.com/embed/post/fbS6b1IDfYRnrcGbrog61g/119934876610" data-did="eabbba35e8e3d44898f21663cf50b4bdd7ce1474"><a href="http://conorgilmer.tumblr.com/post/119934876610/viber-skype-and-whatsapp">http://conorgilmer.tumblr.com/post/119934876610/viber-skype-and-whatsapp</a></div><script async src="https://secure.assets.tumblr.com/post.js"></script>
</div>
<div class="span4">
<h3>Post returned by PHP</h3>
<?php
for ($num=0; $num<3; $num++){
	$request_url = "http://conorgilmer.tumblr.com/api/read?start=$num&num=5&type=text";
	$xml = simplexml_load_file($request_url);
	$title = $xml->posts->post->{'regular-title'};
	$post = $xml->posts->post->{'regular-body'};
	$link = $xml->posts->post['url'];
	$small_post = substr($post,0,120);
	echo '<h3>'.$title.'</h3>';
	echo '<p>'.$small_post.'</p>';
	echo "....";
	echo "</br><a target=frame2 href='".$link."'>Read More</a>";
}
?>


</div>
</div>
</div>
<?php include ("inc/footer.php") ?>



