<?php
/**********************
 *
 *
 *
 * STYLEHSEETS
 *
 *
 *
 *********************/
function extra_theme_enqueue_styles() {
	// EXTRA CONTENT
	wp_enqueue_style( 'extra-content', get_stylesheet_directory_uri() . '/assets/css/content.less', array(), false, 'all' );
	// EXTRA LAYOUT
	wp_enqueue_style( 'extra-layout', get_stylesheet_directory_uri() . '/assets/css/layout.less', array(), false, 'all' );
	// EXTRA LAYOUT
	wp_enqueue_style( 'extra-header', get_stylesheet_directory_uri() . '/assets/css/header.less', array(), false, 'all' );
	// EXTRA LAYOUT
	wp_enqueue_style( 'extra-footer', get_stylesheet_directory_uri() . '/assets/css/footer.less', array(), false, 'all' );
	// EXTRA SIDEBAR
	wp_enqueue_style( 'extra-sidebar', get_stylesheet_directory_uri() . '/assets/css/sidebar.less', array(), false, 'all' );
}
add_action('wp_enqueue_scripts', 'extra_theme_enqueue_styles', 5);