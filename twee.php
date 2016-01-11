<?php

// old no longer working
  function parse_feed($process) {

        $xml = new SimpleXMLElement($process);

        $n=0;
        foreach($xml->entry as $entry) {
            $tweets[$n] = array($entry->published,$entry->content);
            $n++;
        }
        return $tweets;
    }

    $twitter_username = 'conorgilmer';
    $twitter_entries = 5;
    $feed = "https://twitter.com/search?q=%40conorgilmer";;
    //$feed = "http://search.twitter.com/search.atom?q=from:" . $twitter_username . "&rpp=".$twitter_entries;

    $feed = file_get_contents($feed);
try {
    $tweets = parse_feed($feed);
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}


    $n=0;
    $n_t = count($tweets);
    while($n < $n_t) {
        echo "<div class=\"tweet\"><img src=\"img/tweet.png\" valign=\"absmiddle\" /> ";
        echo $tweets[$n][1][0];
        echo "</div>";
        echo "<div class=\"date\">".$tweets[$n][0][0]."</div>";
        $n++;
    }

?>
