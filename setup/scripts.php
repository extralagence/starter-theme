<?php
/**********************
 *
 *
 *
 * JAVASCRIPTS
 *
 *
 *
 *********************/
function extra_theme_enqueue_scripts() {
	// MODERNIZR
	wp_enqueue_script('modernizr', get_stylesheet_directory_uri().'/assets/js/lib/modernizr.custom.js', array('jquery'), null, true);
	// COMMON
	wp_enqueue_script('extra-common', get_stylesheet_directory_uri().'/assets/js/common.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'extra_theme_enqueue_scripts');