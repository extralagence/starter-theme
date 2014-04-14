<?php
/**
 * Created by PhpStorm.
 * User: JB
 * Date: 17/02/14
 * Time: 17:39
 */

/**********************
 *
 *
 *
 * CONTACT TEMPLATE METABOX
 *
 *
 *
 *********************/
global $contact_template_metabox;
$contact_template_metabox = new ExtraMetaBox(array(
	'id' => '_contact_template',
	'lock' => WPALCHEMY_LOCK_BOTTOM,
	'init_action' => 'extra_contact_admin_stylesheet',
	'title' => __('Paramètres de la page contact', "extra"),
	'types' => array('page'),
	'include_template' => array('template-contact.php'),
	'template' => THEME_MODULES_PATH . '/contact/admin/meta-template.php',
	'hide_editor' => true
));
function extra_contact_admin_stylesheet(){
	// CSS
	wp_enqueue_style('extra_metabox', EXTRA_INCLUDES_URI . '/extra-metabox/extra-metabox.less');
}

function extra_contact_enqueue_assets() {
	wp_enqueue_style( 'extra-contact-sidebar', THEME_MODULES_URI.'/contact/front/css/sidebar.less', array(), false, 'all' );

	if (is_page_template('template-contact.php')) {
		wp_enqueue_style('extra-contact-map', THEME_MODULES_URI.'/contact/front/css/contact-map.less');

		wp_enqueue_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBpFeTSnmCMi1Vb3LuLoAivc4D4CeA2YJs&sensor=false', array('jquery'), null, true);
		wp_enqueue_script('extra-contact-map', THEME_MODULES_URI.'/contact/front/js/contact-map.js', array('jquery', 'google-maps-api'), null, true);
	}
}
add_action('wp_enqueue_scripts', 'extra_contact_enqueue_assets');

?>
