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
	wp_enqueue_script('bootstrap.bundle.min', get_template_directory_uri().'/dist/js/bootstrap/bootstrap.bundle.min.js', array(), '5.3.5', 'false');
	
}

add_action('wp_enqueue_scripts', 'myClassictheme_scripts');


//Custom logo change function
function myClassictheme_customlogo_register($wp_customize){
	$wp_customize->add_section('myClassictheme_header_area', 
	array(
	'title'=> __('Header Area', 'myclassictheme'),
	'description'=> 'If you interested to update your headers area, you can do it here',));
	
	$wp_customize->add_setting('myClassictheme_logo', 
	array(
	'default'=>get_bloginfo('template_directory').'assets/img/logo.png',));
	
	$wp_customize-> add_control( new WP_Customize_Image_Control( $wp_customize, 'myClassictheme_logo',
	array(
		'label'=>'Logo Upload',
		'setting'=>'myClassictheme_logo',
		'section'=>'myClassictheme_header_area',
				
	))); 
}

add_action('customize_register', 'myClassictheme_customlogo_register');



/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/dist/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//Nav Menu Register
register_nav_menu('main_menu', __('Main Menu', 'myclassictheme'));






?>



