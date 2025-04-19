<?php
// থিমের সিএসএস ও জেএস ফাইল লোড করা

//Theme Title
add_theme_support('title-tag');

//Theme StyleSheet
function myClassictheme_style(){
	wp_enqueue_style('myClassic_style', get_stylesheet_uri(), array(), '1.0.0');
}

add_action('wp_enqueue_scripts', 'myClassictheme_style');


?>



