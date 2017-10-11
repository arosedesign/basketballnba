<?php

add_action( 'wp_enqueue_scripts', 'template_styles' );
function template_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function new_excerpt_more($more) {
    global $post;
    remove_filter('excerpt_more', 'new_excerpt_more');
    return '';
}
add_filter('excerpt_more','new_excerpt_more',11);

function featuredtoRSS($content) {
    global $post;
    if ( has_post_thumbnail( $post->ID ) ){
        $content = '<div>' . get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
    }
    return $content;
}

add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');

function custom_plugin_arosedesign($folders){
    $folders[] = 'arosedesign_siteorigin/';
    return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'custom_plugin_arosedesign');

?>