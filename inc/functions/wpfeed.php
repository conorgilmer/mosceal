<?php
 
function getFeed($feed_url) {
     
    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);
     
    echo "<ul>";
     
    foreach($x->channel->item as $entry) {
        $small_post = substr($entry->description,0,120);
        echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a> " .$small_post . "</li>";
    }
    echo "</ul>";
}



//echo getFeed('http://www.webwayz.com/feed');

?>




