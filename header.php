<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
  <div id="header_area">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<a href=""><img class='logo' src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo.png" /></a>
			</div>
		</div>
	</div>
	</div>
    <nav>
      <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </nav>
  </header>
