<?php
//get a wordpress feed 
//called by 
//echo getFeed('http://www.yourdomain.com/feed');
 
function getFeed($feed_url) {
     
    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);
     
     
    foreach($x->channel->item as $entry) {
        $small_post = substr($entry->description,0,120);
        $tstamp = $entry->pubDate;
	$title  = $entry->title;
	$link   = $entry->link;
        echo $tstamp.'<p><h3><i>'.$title.'</i></h3>';
        echo ''.$small_post.'... ';
        echo "<a target=frame2 href='".$link."'>Read More</a><hr> </p>";

    } /* end of foreach */

} /* end of fn */

?>




