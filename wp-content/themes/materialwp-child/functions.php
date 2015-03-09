<?php
/**
 * @package materialwpChild
 * @subpackage Functions
 **/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

add_action('wp_enqueue_scripts', 'load_javascript_files');
function load_javascript_files() {
	wp_register_script('childjs', get_stylesheet_directory_uri() . '/js/child.js', array('jquery'), true );
	wp_enqueue_script('childjs');
}
?>