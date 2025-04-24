<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
  <div id="header_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<a href=""><img class='logo' src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo.png" /></a>
			</div>
			<div class="col-md-9">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <div class="container-fluid">
				<a class="navbar-brand" href="#">MyLogo</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<?php
				wp_nav_menu( array(
				  'theme_location'  => 'main_menu',
				  'menu_id'			=> 'nav',
				  'depth'           => 2,
				  'container'       => 'div',
				  'container_class' => 'collapse navbar-collapse',
				  'container_id'    => 'navbarNav',
				  'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0',
				 'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				  'walker'          => new WP_Bootstrap_Navwalker(), 
				) );
				?>
			  </div>
</nav>

				
			</div>
		</div>
	</div>
	</div>
	
	


  </header>
