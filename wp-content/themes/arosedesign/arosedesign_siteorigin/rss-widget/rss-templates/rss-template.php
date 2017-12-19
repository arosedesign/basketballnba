<?php
/*
    $xml=(wp_kses_post($instance['rss_url']));

    $xmlDoc = new DOMDocument();
    $xmlDoc->load($xml);
    $num = wp_kses_post($instance['numero_feed']);

    $x=$xmlDoc->getElementsByTagName('item');
    for ($i=0; $i<$num; $i++) {
        $item_title=$x->item($i)->getElementsByTagName('title')
            ->item(0)->childNodes->item(0)->nodeValue;
        $item_link=$x->item($i)->getElementsByTagName('link')
            ->item(0)->childNodes->item(0)->nodeValue;
        $item_desc=$x->item($i)->getElementsByTagName('description')
            ->item(0)->childNodes->item(0)->nodeValue;
        echo ("<div class='rssfeed'><h3><a href='" . $item_link
            . "'>" . $item_title . "</a></h3>");
        echo ("<a target ='_blank' title='BasketballNCAA - ". $item_title ."' href='" . $item_link
            . "'><p>" . $item_desc . "</a></p></div>");
    }
*/
?>