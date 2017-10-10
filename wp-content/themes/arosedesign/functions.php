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


?>