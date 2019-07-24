<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php the_title(); ?> - South MCR IT Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <?php wp_head();?>
  </head>
<body <?php body_class(array('woocommerce', 'woocommerce-page')); ?>>
<header>
    <img class="bannerimg" src="<?php echo get_template_directory_uri(); ?>/images/WebsiteHeader.jpg" alt="S MCR IT Solutions Logo" />
    <nav class="navbar navbar-expand-md bg-dark navbar-dark" role="navigation">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		         <span class="navbar-toggler-icon"></span>
	       </button>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'top-menu',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker(),
		) );
		?>
    </nav>
</header>
