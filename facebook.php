<?php 
$thisPage = "Facebook";
include ("inc/header.php"); 
include ("inc/menu.php");
?>

		   <!-- main page content -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=620303288027649";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		  <div class="wrapper">
		  <!-- above the containers to push down the footer -->

		      <div class="container">

			<div class="row">


	<!-- Page stuff -->

	<h1>Facebook Stuff</h1>
<p>Facebook widgets for the Chess Club page <a target="_blank" href="https://www.facebook.com/PhibsboroChessClub/">www.facebook.com/PhibsboroChessClub</a> </p>
<div class="span12">
<h2>Buttons</h2>
<div class="fb-like" data-href="https://www.facebook.com/phibsborochessclub/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

<div class="fb-follow" data-href="https://www.facebook.com/phibsborochessclub/" data-layout="standard" data-show-faces="true"></div>


<div class="fb-send" data-href="https://www.facebook.com/phibsborochessclub/"></div>

</div>
<div class="span4">
<h2>Chess Club Page<h2>
<div class="fb-page" data-href="https://www.facebook.com/phibsborochessclub" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/phibsborochessclub"><a href="https://www.facebook.com/phibsborochessclub">Facebook</a></blockquote></div></div>


</div>

<div class="span4">
<h2>Chess Club Page<h2>
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FPhibsboroChessClub&width=350&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:350px; height:450px; background: white; float:left; " allowtransparency="true"></iframe>
</div>

<div class="span4">
<h2>Embedded Post</h2>
<div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-post" data-href="https://www.facebook.com/PhibsboroChessClub/posts/761260177320636" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/PhibsboroChessClub/posts/761260177320636"><p>Results and final league tables http://www.leinsterchess.com/</p>Posted by <a href="https://www.facebook.com/PhibsboroChessClub/">Phibsboro Chess Club</a> on&nbsp;<a href="https://www.facebook.com/PhibsboroChessClub/posts/761260177320636">Wednesday, April 22, 2015</a></blockquote></div></div>
</div>

<?php include ("inc/footer.php") ?>



