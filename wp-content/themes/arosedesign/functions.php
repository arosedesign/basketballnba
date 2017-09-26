<?php
/**
 * Arosedesign Theme functions and definitions
 *
 */

if (!function_exists('arosedesign_css')) {

	add_action('wp_print_styles', 'arosedesign_css');

	function arosedesign_css() {

		if (!is_admin()) {

			wp_enqueue_style( 'arosedesign_css-styles', get_stylesheet_directory_uri() . '/style.css' );

			if (is_rtl()) {
				wp_enqueue_style( 'arosedesign_css-styles-rtl', get_stylesheet_directory_uri() . '/rtl.css' );
			}

		}

	}

}