<?php

function custom_plugin_arosedesign($folders){
    $folders[] = plugin_dir_path(__FILE__).'rss-basketballncaa/';
    return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'custom_plugin_arosedesign');

