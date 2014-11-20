<div id="wrapper">

	<header id="header">
		<div class="wrapper">
			<!-- SITE TITLE (LOGO) -->
			<?php if ( is_front_page() ): ?><h1 class="site-title"><span><?php bloginfo( "name" ); ?></span></h1>
			<?php else: ?><h2 class="site-title"><a href="<?php echo site_url( '/' ); ?>" title="<?php _e("Retour à l'accueil", 'extra'); ?>"><?php bloginfo( "name" ); ?></a></h2><?php endif; ?>
		</div>
		<!-- MAIN NAV -->
		<nav id="main-menu-container">
			<?php $args = array(
				'theme_location' 	=> 'main',
				'container'			=> null,
				'menu_id'			=> 'main-menu'
			);
			wp_nav_menu($args); ?>
		</nav>
	</header>