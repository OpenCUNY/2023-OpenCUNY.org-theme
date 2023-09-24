<?php
    
    
    function opencuny_theme_support(){
        // Adds dynamic page title support
        add_theme_support('title-tag');
        // Adds featured image to post edit screen
        add_theme_support('post_thumbnails');
    }

    add_action('after_setup_theme', 'opencuny_theme_support');

    function opencuny_register_styles(){
        // Insert most up-to-date CSS file into page headers
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('opencuny-styles', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    }

    add_action( 'wp_enqueue_scripts', 'opencuny_register_styles');

    if ( ! function_exists( 'opencuny_register_nav_menu' ) ) {
        // calls user-created header and footer menus
        function opencuny_register_nav_menu(){
            register_nav_menus( array(
            'footer-menu' => __( 'Footer Menu', 'text_domain' ),
            'header-menu' => __( 'Header Menu', 'text_domain' ),
        ) );        }
    }
    
    add_action( 'after_setup_theme', 'opencuny_register_nav_menu', 0 );


    function opencuny_accordian_script() {
        // inserts the accordian.js into the footer so accordians can be used on any page (e.g. frontpage.php)
        wp_enqueue_script('opencuny-accordian', get_template_directory_uri() . '/assets/js/accordian.js', array(), '1.0', true);
    }
    
    add_action( 'wp_enqueue_scripts', 'opencuny_accordian_script');

// This loads the QR code generator script on pages with the qr-code templaste
function qr_code_generator() {
  if ( is_page_template( 'qr-code.php' ) ) {
    wp_enqueue_script( 'qr_generator_js', get_template_directory_uri() . '/assets/js/qrcode.js' );
    wp_enqueue_script( 'qr_form_js', get_template_directory_uri() . '/assets/js/qrcode-form.js' );
  }
}
add_action( 'wp_head', 'qr_code_generator' );
