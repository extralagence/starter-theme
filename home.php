<h1><?php _e("Actualités"); ?></h1>
<?php while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="content">
    <?php the_content(); ?>
    </div>
<?php endwhile; ?>