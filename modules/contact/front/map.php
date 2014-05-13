<?php
/**
 * Created by PhpStorm.
 * User: vincent
 * Date: 07/03/2014
 * Time: 10:10
 */

global $contact_template_metabox, $post;

$contact_template_metabox->the_meta();

$data = $contact_template_metabox->get_data_map();

$contact_location = array(
	'latitude'  => $data['lat'],
	'longitude' => $data['lon']
);
wp_localize_script('extra-contact-map', 'contact_location', $contact_location);

?>
<h2 class="contact-map-title"><?php $contact_template_metabox->the_value('contact_title'); ?></h2>
<div class="contact-map-subtitle"><?php $contact_template_metabox->the_value('contact_subtitle'); ?></div>
<div class="contact-map-phone">
	<span class="icon icon-iphone"></span>
	<?php _e('Tél :', 'extra'); ?> <?php $contact_template_metabox->the_value('contact_phone'); ?>
</div>
<div class="contact-map-email">
	<span class="icon icon-email"></span>
	<?php _e('Email :', 'extra'); ?> <a href="mailto:<?php $contact_template_metabox->the_value('contact_email');?>"><?php $contact_template_metabox->the_value('contact_email'); ?></a>
</div>

<img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $data['lat']; ?>,<?php echo $data['lon']; ?>&zoom=12&size=300x270&maptype=roadmap&sensor=true&markers=<?php echo $data['lat']; ?>,<?php echo $data['lon']; ?>" >

<a class="link-important map-link" href="#contact-map-big"><?php _e("Agrandir la carte", "extra"); ?></a>
<div style="display: none;">
	<div id="contact-map-big"></div>
</div>