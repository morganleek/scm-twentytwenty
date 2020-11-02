<?php 

// Front-end Assets
function _themename_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );
	
	// Front-end Styles
	wp_enqueue_style( '_themename-stylesheet', get_stylesheet_directory_uri() . '/dist/css/bundle.css', array(), '1.0.0', 'all' );
	// Backend Styles
	wp_enqueue_script( '_themename-scripts', get_stylesheet_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true);

	// Parent Print Style
	wp_enqueue_style( 'twentytwenty-print-style', get_template_directory_uri() . '/print.css', null, '1.0.0', 'print' );
}

add_action('wp_enqueue_scripts','_themename_assets');

// Admin Assets
function _themename_admin_assets() {
	// Nothing...
}

add_action('admin_enqueue_scripts','_themename_admin_assets');

function _themename_enqueue_block_editor_assets() {
	wp_enqueue_style( '_themename-admin-stylesheet', get_stylesheet_directory_uri() . '/dist/css/admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( '_themename-admin-scripts', get_stylesheet_directory_uri() . '/dist/js/admin.js', array(), '1.0.0', true);
}

add_action('enqueue_block_editor_assets', '_themename_enqueue_block_editor_assets');