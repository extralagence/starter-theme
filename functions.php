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
function extra_theme_setup() {
	// MATCH EDITOR CSS
	add_editor_style('assets/css/editor-style.less');
}

add_action('after_setup_theme', 'extra_theme_setup');
/**********************
 *
 *
 *
 * LESS VARS
 *
 *
 *
 *********************/
function extra_theme_less_vars($vars, $handle) {
	$vars['font1'] = 'arial, sans-serif';
	$vars['font2'] = 'georgia, sans-serif';
	$vars['white'] = '#FFFFFF';
	$vars['black'] = '#000000';
	$vars['dark'] = '#333333';
	$vars['grey'] = '#CCCCCC';
	$vars['highlight'] = 'blue';
	return $vars;
}

add_filter('less_vars', 'extra_theme_less_vars', 10, 2);
/**********************
 *
 *
 *
 * FAVICON
 *
 *
 *
 *********************/
function extra_favicon() {  ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo home_url("/"); ?>apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo home_url("/"); ?>apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo home_url("/"); ?>apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo home_url("/"); ?>apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo home_url("/"); ?>apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo home_url("/"); ?>apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo home_url("/"); ?>apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo home_url("/"); ?>apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php echo home_url("/"); ?>favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php echo home_url("/"); ?>favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo home_url("/"); ?>favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php echo home_url("/"); ?>favicon-160x160.png" sizes="160x160" />
    <meta name="msapplication-TileColor" content="#2d89ef" />
    <meta name="msapplication-TileImage" content="<?php echo home_url("/"); ?>/mstile-144x144.png" />
<?php }
add_action('wp_head', 'extra_favicon');
add_action('admin_head', 'extra_favicon');
add_action('login_head', 'extra_favicon');
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
