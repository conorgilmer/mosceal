<?php
include_once("config.php");
include_once("includes/functions.php");

//print_r($_GET);die;

if(isset($_REQUEST['code'])){
	$gClient->authenticate();
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirect_url, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	$userProfile = $google_oauthV2->userinfo->get();
	//DB Insert
	$gUser = new Users();
	$gUser->checkUser('google',$userProfile['id'],$userProfile['given_name'],$userProfile['family_name'],$userProfile['email'],$userProfile['gender'],$userProfile['locale'],$userProfile['link'],$userProfile['picture']);
	$_SESSION['google_data'] = $userProfile; // Storing Google User Data in Session
	header("location: private_google.php");
	$_SESSION['token'] = $gClient->getAccessToken();
} else {
	$authUrl = $gClient->createAuthUrl();
}

if(isset($authUrl)) {
	$g_link= '<a class="btn btn-success btn-large" href="'.$authUrl.'">Login with Google</a>';
} else {
	$g_link= '<a href="logout.php?logout">Logout</a>';
}

?>


<?php 
$thisPage = "Home";
include ("inc/header.php"); 
include ("inc/menu.php");
?>

<!-- main page content -->
          <div class="wrapper">

<!--  button -->
<div class="container buttonbar">

 
  <a href="login_native.php" 
     class="btn btn-success btn-large">Login using Account</a>
<?php echo $g_link; ?>


</div>


          <!-- above the containers to push down the footer -->

              <div class="container">

                <div class="row">

                <div class="span12 helpDoc">

<!-- Page stuff -->


<h1>Mo Scéal</h1>
<pre>
Login on to see more particular information.
</pre>

<p>
<a href="http://info.flagcounter.com/niVM"><img src="http://s04.flagcounter.com/count2/niVM/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_1/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
</p>
<?php include ("inc/footer.php") ?>



