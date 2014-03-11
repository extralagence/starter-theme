<?php
/**
 * Created by PhpStorm.
 * User: vincent
 * Date: 17/02/2014
 * Time: 17:02
 */

function extra_add_contact_options_section ($sections) {
	$sections[] = array(
		'icon' => 'el-icon-phone',
		'title' => __('Bloc Contact', 'extra-admin'),
		'desc' => null,
		'fields' => array(
			array(
				'id' => 'contact_title',
				'type' => 'text',
				'title' => __('Titre du bloc', 'extra-admin'),
			),
			array(
				'id' => 'contact_phone_number',
				'type' => 'text',
				'title' => __('Numéro de téléphone', 'extra-admin'),
			),
		)
	);

	return $sections;
}
add_filter('extra_add_global_options_section', 'extra_add_contact_options_section');