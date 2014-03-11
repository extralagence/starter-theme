<?php
/**
 * Created by PhpStorm.
 * User: vincent
 * Date: 17/02/2014
 * Time: 11:34
 */

/**********************
 *
 *
 *
 * JAVASCRIPTS
 *
 *
 *
 *********************/
function _blank_enqueue_scripts() {
	// MODERNIZR
	wp_enqueue_script('modernizr', get_stylesheet_directory_uri().'/assets/js/lib/modernizr.custom.js', array('jquery'), null, true);
	// COMMON
	wp_enqueue_script('extra-common', get_stylesheet_directory_uri().'/assets/js/common.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', '_blank_enqueue_scripts');