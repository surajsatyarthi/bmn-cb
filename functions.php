<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
}
// Theme setup
add_action( 'after_setup_theme', 'child_theme_setup' );
function child_theme_setup() {
    // Add support for title tag
    add_theme_support( 'title-tag' );
   
    // Add support for custom logo
    add_theme_support( 'custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ) );
   
    // Add support for post thumbnails (featured images)
    add_theme_support( 'post-thumbnails' );
   
    // Register navigation menu (only primary, as footer is now hard-coded)
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'blankslate-child' ),
    ) );
}
// Enqueue Font Awesome for icons
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4' );
}
// Enqueue custom child scripts (e.g., for hamburger menu)
function enqueue_child_scripts() {
    wp_enqueue_script('child-menu-js', get_stylesheet_directory_uri() . '/js/menu.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_child_scripts');
?>