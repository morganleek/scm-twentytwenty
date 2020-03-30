<?php 

// Front-end Assets
function scm_twentytwenty_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );
	
	// Parent Style
	wp_enqueue_style( 'twentytwenty-style', get_template_directory_uri() . '/style.css', array(), $theme_version );
	// Front-end Styles
	wp_enqueue_style( 'scm_twentytwenty-stylesheet', get_stylesheet_directory_uri() . '/dist/css/bundle.css', array(), $theme_version, 'all' );
	// Backend Styles
	wp_enqueue_script( 'scm_twentytwenty-scripts', get_stylesheet_directory_uri() . '/dist/js/bundle.js', array('jquery'), $theme_version, true);
}

add_action('wp_enqueue_scripts','scm_twentytwenty_assets');

// Admin Assets
function scm_twentytwenty_admin_assets() {
	wp_enqueue_style( 'scm_twentytwenty-admin-stylesheet', get_stylesheet_directory_uri() . '/dist/css/admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'scm_twentytwenty-admin-scripts', get_stylesheet_directory_uri() . '/dist/js/admin.js', array(), '1.0.0', true);
}

add_action('admin_enqueue_scripts','scm_twentytwenty_admin_assets');