<?php
// থিমের সিএসএস ও জেএস ফাইল লোড করা

//Theme Title
add_theme_support('title-tag');

//Theme StyleSheet
function myClassictheme_style(){
	wp_register_style('bootstrap', get_template_directory_uri().'/dist/css/bootstrap/bootstrap.min.css', array(), '5.3.5', 'all');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('myClassic_style', get_stylesheet_uri(), array(), '1.0.0');
	
		
}

add_action('wp_enqueue_scripts', 'myClassictheme_style');

//Javascript Files
function myClassictheme_scripts(){
	wp_enqueue_script('bootstrap.bundle.min', get_template_directory_uri().'/dist/css/bootstrap/bootstrap.min.css', array(), '5.3.5', 'false');
	
}

add_action('wp_enqueue_scripts', 'myClassictheme_scripts');

?>



