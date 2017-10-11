<?php

/*
Widget Name: Basketballncaa feed widget
Description: Plugin che prende l'ultimo post da BasketballNCAA
Author: Arosedesign
*/

class Basketballncaa_feed_widget extends SiteOrigin_Widget {

    function get_template_name($instance) {
        return '';
    }

    function get_style_name($instance) {
        return '';
    }
}

siteorigin_widget_register('rss-basketballncaa', __FILE__, 'Basketballncaa_feed_widget');

