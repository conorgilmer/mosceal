

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
                      <li<?php if ($thisPage=="home") echo " class=\"active\"";?> ><a href="index.php">Home</a></li>
                      <li<?php if ($thisPage=="twitter") echo " class=\"active\"";?>><a href="twitter.php">Twitter</a></li>
                      <li<?php if ($thisPage=="google") echo " class=\"active\"";?>><a href="google.php">Google+</a></li>
                      <li<?php if ($thisPage=="facebook") echo " class=\"active\"";?>><a href="facebook.php">Facebook</a></li>
                      <li<?php if ($thisPage=="youtube") echo " class=\"active\"";?>><a href="youtube.php">YouTube</a></li>
                      <li<?php if ($thisPage=="instagram") echo " class=\"active\"";?>><a href="instagram.php">Instagram</a></li>
                      <li<?php if ($thisPage=="flickr") echo " class=\"active\"";?>><a href="flickr.php">Flickr</a></li>
                      <li<?php if ($thisPage=="mycv") echo " class=\"active\"";?>><a href="myCV.php">My CV</a></li>
                      <li<?php if ($thisPage=="projects") echo " class=\"active\"";?>><a href="projects.php">Projects</a></li>
                      <li<?php if ($thisPage=="about") echo " class=\"active\"";?>><a href="about.php">About</a></li>
                      <li<?php if ($thisPage=="colophon") echo " class=\"active\"";?>><a href="colophon.php">Colophon</a></li>
                    </ul>
                  </div><!--/.nav-collapse -->
                </div>
              </div>
            </div>

