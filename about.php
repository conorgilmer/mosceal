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


          <div class="jumbotron">
                      <h1>About these pages</h1>
            </div>
 
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
- YouTube (my videos, follow widget)
- Instagram (gallery)
- flickr (gallery)
- tumblr (buttons, feed and widget)
- linkedIn (share button, profile widget)
- ello widget
- Printest button
- foursquare button
- Static Maps (Bing, Open Street Maps, Yandex..)
- Dynamic Maps (Bing)

Also include
- My CV (Details, Skills, Education, Hobbies, Travels/Map of countries I have visited)
- Projects
- Other Links

May Also include some of my interests and projects I have worked on
- Chess
- Radio
- Satellite TV
- Skiing and Surfing Links
- Weather Widgets
- Politics / Elections

#To Do/ Ideas
- Add printerst widgets
- Add send tweet, form, php, ajax, jquery?
- Add google plus feed
- Add hobby pages Radio, Skiing, Surfing and Chess
- Links to other pages and sites I have about 
- Dynamic Maps (Google, MapQuest) 

## Mise
Author: http://ie.linkedin.com/in/conorgilmer

</pre>
<?php include ("inc/footer.php") ?>



