<?php

global $page_builder_metabox;
$page_builder_metabox = new ExtraPageBuilder(array(
	'id' => '_page_builder',
	'lock' => WPALCHEMY_LOCK_AFTER_POST_TITLE,
	'title' => __("Extra Page Builder", "extra"),
	'types' => array('page'),
	//'row_layouts' => array('1', '11', '111'),
	'blocks' => array(
		'image',
		'custom_editor',
		'slider',
		'map',
		'accordion'
	),
	'hide_editor' => true
));

function extra_page_builder_enqueue_assets() {
	wp_enqueue_style( 'extra-page-builder-front', THEME_MODULES_URI.'/page-builder/front/css/page-builder.less', array(), false, 'all' );

	// MAP
	wp_enqueue_style('extra-page-builder-block-map-front', EXTRA_INCLUDES_URI . '/extra-metabox/page-builder/blocks/Map/css/map-front.less');
	wp_enqueue_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBpFeTSnmCMi1Vb3LuLoAivc4D4CeA2YJs&sensor=false', array('jquery'), null, true);
	wp_enqueue_script('extra-page-builder-block-map-front', EXTRA_INCLUDES_URI . '/extra-metabox/page-builder/blocks/Map/js/map-front.js', array('jquery', 'google-maps-api'), null, true);

	// SLIDER
	wp_enqueue_style('extra-page-builder-block-slider-front', EXTRA_INCLUDES_URI . '/extra-metabox/page-builder/blocks/Slider/css/slider-front.less');
	wp_enqueue_script('extra-slider', EXTRA_URI . '/assets/js/lib/extra.slider.js', array('jquery'), null, true);
	wp_enqueue_script('extra-page-builder-block-slider-front', EXTRA_INCLUDES_URI . '/extra-metabox/page-builder/blocks/Slider/js/slider-front.js', array('jquery', 'extra-slider'), null, true);

	// ACCORDION
	wp_enqueue_style('extra-page-builder-block-accordion-front', EXTRA_INCLUDES_URI . '/extra-metabox/page-builder/blocks/Accordion/css/accordion-front.less');
	wp_enqueue_script('extra-page-builder-block-accordion-front', EXTRA_INCLUDES_URI . '/extra-metabox/page-builder/blocks/Accordion/js/accordion-front.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'extra_page_builder_enqueue_assets');