<?php
/*
 * @var $page_builder_metabox ExtraPageBuilder
 */
global $page_builder_metabox;
?>

<?php the_post(); ?>

<h1><?php the_title(); ?></h1>
<div class="content">
	<?php the_content(); ?>
	<?php echo $page_builder_metabox->get_front(); ?>
</div>