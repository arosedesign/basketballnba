<?php

// AGGIUNTA STILE TEMA PADRE
add_action( 'wp_enqueue_scripts', 'template_styles' );
function template_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// RIMOZIONE READ MORE DA ABSTRACT
function new_excerpt_more($more) {
    global $post;
    remove_filter('excerpt_more', 'new_excerpt_more');
    return '';
}
add_filter('excerpt_more','new_excerpt_more',11);

// AGGIUNTA FEATURED A RSS
function featuredtoRSS($content) {
    global $post;
    if ( has_post_thumbnail( $post->ID ) ){
        $content = '<div>' . get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
    }
    return $content;
}

add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');

// AGGIUNTA CARTELLE PLUGIN AROSEDESIGN A SITEORIGIN
function arosedesign_add_widget_folders( $folders ){
    $folders[] = get_stylesheet_directory() . '/arosedesign_siteorigin/';
    return $folders;
}
add_action('siteorigin_widgets_widget_folders', 'arosedesign_add_widget_folders');


// FIX TITOLO ARCHIVIO
add_filter( 'get_the_archive_title', function ( $title ) {
    if( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
});

?>