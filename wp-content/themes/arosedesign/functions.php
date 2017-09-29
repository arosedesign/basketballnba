<?php

add_action( 'wp_enqueue_scripts', 'arosedesign_styles' );
function arosedesign_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}



?>