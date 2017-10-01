<?php
/**
 * Revija Child Theme functions and definitions
 *
 */

if (!function_exists('revija_child_css')) {

	add_action('wp_print_styles', 'revija_child_css');

	function revija_child_css() {

		if (!is_admin()) {

			wp_enqueue_style( 'revija_child-styles', get_stylesheet_directory_uri() . '/style.css' );

			if (is_rtl()) {
				wp_enqueue_style( 'revija_child-styles-rtl', get_stylesheet_directory_uri() . '/rtl.css' );
			}

		}

	}

}