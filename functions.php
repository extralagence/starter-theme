<?php
/**
 * Created by PhpStorm.
 * User: vincent
 * Date: 19/02/2014
 * Time: 17:22
*/

function _blank_less_vars( $vars, $handle ) {
	$vars[ 'white' ] = '#FFFFFF';
	$vars[ 'black' ] = '#3d3c3f';
	$vars[ 'dark' ] = '#9e9d9f';
	$vars[ 'grey' ] = '#eaeaeb';
	$vars[ 'pink' ] = '#c9007b';
	return $vars;
}
add_filter( 'less_vars', '_blank_less_vars', 10, 2 );

function _blank_setup() {

	// MATCH EDITOR CSS
	add_editor_style('assets/css/editor-style.less');
}
add_action('after_setup_theme', '_blank_setup');

include_once 'setup/admin/setup.php';