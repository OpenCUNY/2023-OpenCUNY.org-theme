<?php
    
    
    // Add theme support for dynamic page titles and featured images
function opencuny_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'opencuny_theme_support');

// Register and enqueue styles
function opencuny_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('opencuny-styles', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'opencuny_register_styles');

// Register header and footer menus
function opencuny_register_nav_menu() {
    register_nav_menus(array(
        'footer-menu' => __('Footer Menu', 'text_domain'),
        'header-menu' => __('Header Menu', 'text_domain'),
    ));
}
add_action('after_setup_theme', 'opencuny_register_nav_menu', 0);

// Enqueue the accordion script
function opencuny_accordion_script() {
    wp_enqueue_script('opencuny-accordion', get_template_directory_uri() . '/assets/js/accordion.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'opencuny_accordion_script');

// Enqueue scripts based on page templates
function load_scripts_based_on_template() {
    if (is_page_template('qr-code.php')) {
        wp_enqueue_script('qr_generator_js', get_template_directory_uri() . '/assets/js/qrcode.js');
        wp_enqueue_script('qr_form_js', get_template_directory_uri() . '/assets/js/qrcode-form.js');
    } 
}
add_action('wp_head', 'load_scripts_based_on_template');




