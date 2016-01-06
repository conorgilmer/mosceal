<?php

function getTumblr($url){

for ($num=0; $num<5; $num++){
        $request_url = $url . "/api/read?start=$num&num=5&type=text";
        //$request_url = "http://conorgilmer.tumblr.com/api/read?start=$num&num=5&type=text";
        $xml = simplexml_load_file($request_url);
        $title = $xml->posts->post->{'regular-title'};
        $post = $xml->posts->post->{'regular-body'};
        $link = $xml->posts->post['url'];
        $tstamp = $xml->posts->post['date'];
        $small_post = substr($post,0,120);
        echo $tstamp.'<p><h3><i>'.$title.'</i></h3>';
        echo ''.$small_post.'... ';
        echo "<a target=frame2 href='".$link."'>Read More</a><hr> </p>";
	} /* end of for */
} /* end of fn */
?>
