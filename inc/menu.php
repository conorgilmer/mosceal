

<!-- Menu menu.php  -->
       <!-- stationary nav bar -->
            <div class="navbar navbar-fixed-top">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" href="index.php">Mo Scéal</a>
                  <div class="nav-collapse">
                    <ul class="nav">
                      <li<?php if ($thisPage=="Home") echo " class=\"active\"";?> ><a href="index.php">Home</a></li>


                      <li<?php if ($thisPage=="Twitter") echo " class=\"active\"";?>><a href="twitter.php">Twitter</a></li>
                      <li<?php if ($thisPage=="Google") echo " class=\"active\"";?>><a href="google.php">Google+</a></li>
                      <li<?php if ($thisPage=="Facebook") echo " class=\"active\"";?>><a href="facebook.php">Facebook</a></li>

 <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Others
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
                      <li<?php if ($thisPage=="YouTube") echo " class=\"active\"";?>><a href="youtube.php">YouTube</a></li>
                      <li<?php if ($thisPage=="Instagram") echo " class=\"active\"";?>><a href="instagram.php">Instagram</a></li>
                      <li<?php if ($thisPage=="Flickr") echo " class=\"active\"";?>><a href="flickr.php">Flickr</a></li>
                      <li<?php if ($thisPage=="Tumblr") echo " class=\"active\"";?>><a href="tumblr.php">Tumblr</a></li>
                      <li<?php if ($thisPage=="LinkedIn") echo " class=\"active\"";?>><a href="linkedin.php">LinkedIn</a></li>
                      <li<?php if ($thisPage=="Pinterest") echo " class=\"active\"";?>><a href="pinterest.php">Pinterest</a></li>
                      <li<?php if ($thisPage=="Foursquare") echo " class=\"active\"";?>><a href="foursquare.php">Foursquare</a></li>
	</ul>
        </li>
                      <li<?php if ($thisPage=="CV") echo " class=\"active\"";?>><a href="myCV.php">My CV</a></li>
                      <li<?php if ($thisPage=="Projects") echo " class=\"active\"";?>><a href="projects.php">Projects</a></li>
                      <li<?php if ($thisPage=="About") echo " class=\"active\"";?>><a href="about.php">About</a></li>
                      <li<?php if ($thisPage=="Colophon") echo " class=\"active\"";?>><a href="colophon.php">Colophon</a></li>
                    </ul>
                  </div><!--/.nav-collapse -->
                </div>
              </div>
            </div>

