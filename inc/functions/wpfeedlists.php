<?php
//get a wordpress feed returns a html list
//called by 
//echo getFeed('http://www.yourdomain.com/feed');
 
function getFeed($feed_url) {
     
    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);
     
    echo "<ul>";
     
    foreach($x->channel->item as $entry) {
        $small_post = substr($entry->description,0,120);
        $tstamp = $entry->pubDate; //not used
        echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a> " .$small_post . "</li>";

    }
    echo "</ul>";
}

?>




