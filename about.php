<?php

/**
 * Author: Conor Gilmer (conor.gilmer@gmail.com)
 */

session_start();
$thisPage = "About";
include ("inc/header.php");
if(!isset($_SESSION['google_data'])){
        include ("inc/menu.php");}
else {
        include ("inc/private/menu.php");}
?>

<!-- main page content -->
          <div class="wrapper">
          <!-- above the containers to push down the footer -->

              <div class="container">

                <div class="row">

                <div class="span12 helpDoc">

<!-- Page stuff -->


<h1>About</h1>
<pre>
## Mo Scéal (My Story) - a bit of my social presence and stuff

This site is just a list of various web stuff, links social media etc. A kind of online desktop.
And also fiddle about with an API or seven, widgets buttons

Should Include
- Twitter (buttons, my tweets, hastagged, other tweets)
- Google+ (Badge, plusone, share, embedde post)
- Facebook (like, embedded feed, share, message)
- YouTube (my videos)
- Instagram (gallery)
- flickr (gallery)
- tumblr (buttons, feed and widget)
- linkedIn share button

Also include
- My CV
- Projects

May Also include some of my interests and projects I have worked on
- Chess
- Radio
- Politics / Elections

#To Do/ Ideas
- Add printerst widgets
- Add send tweet, form, php, ajaz, jquery?
- Add google plus feed

## Mise
Author: http://ie.linkedin.com/in/conorgilmer

</pre>
<?php include ("inc/footer.php") ?>



