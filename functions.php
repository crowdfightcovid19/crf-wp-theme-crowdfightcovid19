<?php

// Walker for the flat menu
include_once __DIR__ . "/classes/class.cfct_header_nav_walker.php";
include_once __DIR__ . "/vendor/bettershortcodeparser/better-shortcode-parser.php";

// Includes all the shortcodes
include_once __DIR__ . "/shortcodes/shortcode_load.php";

// Removes jQuery only on the frontend of the site, as we
// include our own one via CDN for compatibility with Bootstrap 4
function cfct_remove_default_jquery_frontend(){
    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');   
}
add_filter('wp_enqueue_scripts', 'cfct_remove_default_jquery_frontend', PHP_INT_MAX);

// Adds the style file from the theme to the frontend
function cfct_add_theme_scripts() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action ('wp_enqueue_scripts', 'cfct_add_theme_scripts', PHP_INT_MAX);

// Registers the navigation menu to be used on the header
function cfct_register_menus() {
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
        )
    );
}
add_action('init', 'cfct_register_menus');

// Disables the AutoP to avoid bad HTML output
remove_filter('the_content', 'wpautop');