<?php
/**********************
 *
 *
 *
 * THEME SETUP
 *
 *
 *
 *********************/
function _blank_setup() {
	// MATCH EDITOR CSS
	add_editor_style('assets/css/editor-style.less');
}

add_action('after_setup_theme', '_blank_setup');
/**********************
 *
 *
 *
 * LESS VARS
 *
 *
 *
 *********************/
function _blank_less_vars($vars, $handle) {
	$vars['font1'] = 'arial, sans-serif';
	$vars['font2'] = 'georgia, sans-serif';
	$vars['white'] = '#FFFFFF';
	$vars['black'] = '#000000';
	$vars['dark'] = '#333333';
	$vars['grey'] = '#CCCCCC';
	$vars['highlight'] = 'blue';
	return $vars;
}

add_filter('less_vars', '_blank_less_vars', 10, 2);
/**********************
 *
 *
 *
 * ADMIN ONLY STUFF
 *
 *
 *
 *********************/
include_once 'setup/admin/setup.php';
