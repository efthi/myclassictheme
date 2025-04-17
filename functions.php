<?php
// থিমের সিএসএস ও জেএস ফাইল লোড করা
function my_theme_enqueue_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('my_script', get_template_directory_uri() . '/js/custom.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

// Navigation Menu নিবন্ধন
function register_my_menu() {
    register_nav_menu('main-menu', 'Main Navigation Menu');
}
add_action('after_setup_theme', 'register_my_menu');
?>
