<?php 

// Front-end Assets
function _themename_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );
	
	// Parent Style
	wp_enqueue_style( 'twentytwenty-style', get_template_directory_uri() . '/style.css', array(), $theme_version );
	// Front-end Styles
	wp_enqueue_style( '_themename-stylesheet', get_stylesheet_directory_uri() . '/dist/css/bundle.css', array(), $theme_version, 'all' );
	// Backend Styles
	wp_enqueue_script( '_themename-scripts', get_stylesheet_directory_uri() . '/dist/js/bundle.js', array('jquery'), $theme_version, true);
}

add_action('wp_enqueue_scripts','_themename_assets');

// Admin Assets
function _themename_admin_assets() {
	wp_enqueue_style( '_themename-admin-stylesheet', get_stylesheet_directory_uri() . '/dist/css/admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( '_themename-admin-scripts', get_stylesheet_directory_uri() . '/dist/js/admin.js', array(), '1.0.0', true);
}

add_action('admin_enqueue_scripts','_themename_admin_assets');