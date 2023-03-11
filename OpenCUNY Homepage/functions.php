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

	
	// Inserts the accordian.js into the footer
	function opencuny_accordian_script() {
		wp_enqueue_script('opencuny-accordian', get_template_directory_uri() . '/accordian.js', array(), '1.0', true);
	}
	add_action( 'wp_enqueue_scripts', 'opencuny_accordian_script');
?>

