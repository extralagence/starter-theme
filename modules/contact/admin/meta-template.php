<?php
/**
 * Created by PhpStorm.
 * User: vincent
 * Date: 07/03/2014
 * Time: 10:12
 */
?>

<div class="bloc">
	<h2><?php _e('Coordonnées', 'extra'); ?></h2>
	<p>
		<?php $mb->the_field('contact_title'); ?>
		<label for="<?php $mb->the_name(); ?>"><?php _e("Titre du bloc", "extra-admin"); ?></label>
		<input id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" type="text" value="<?php $mb->the_value(); ?>"/>
	</p>
	<p>
		<?php $mb->the_field('contact_subtitle'); ?>
		<label for="<?php $mb->the_name(); ?>"><?php _e("Sous titre du bloc", "extra-admin"); ?></label>
		<input id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" type="text" value="<?php $mb->the_value(); ?>"/>
	</p>
	<p>
		<?php $mb->the_field('contact_phone'); ?>
		<label for="<?php $mb->the_name(); ?>"><?php _e("Téléphone", "extra-admin"); ?></label>
		<input id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" type="text" value="<?php $mb->the_value(); ?>"/>
	</p>
	<p>
		<?php $mb->the_field('contact_email'); ?>
		<label for="<?php $mb->the_name(); ?>"><?php _e("Email", "extra-admin"); ?></label>
		<input id="<?php $mb->the_name(); ?>" name="<?php $mb->the_name(); ?>" type="text" value="<?php $mb->the_value(); ?>"/>
	</p>
</div>

<?php $mb->the_admin_map(); ?>