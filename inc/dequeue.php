<?php
  function _themename_dequeue_twentytwenty() {
    // Menus
    remove_action( 'init', 'twentytwenty_menus' );
    // TwentyTwenty Theme Support
    remove_action( 'after_setup_theme' , 'twentytwenty_theme_support' );
    // More TwentyTwenty Theme Support
    remove_action( 'customize_register', array( 'TwentyTwenty_Customize', 'register' ) );
    // Remove Edit Links
    remove_filter( 'edit_post_link', 'twentytwenty_edit_post_link', 10 );
    // Remove Widgets
    remove_action( 'widgets_init', 'twentytwenty_sidebar_registration', 10 );
    // Remve Classic Editor Styles
    remove_action( 'init', 'twentytwenty_classic_editor_styles', 10 );
    // Editor Styles
    remove_action( 'enqueue_block_editor_assets', 'twentytwenty_block_editor_styles', 1 );

    // Add Theme Supports Removed Above
    
    // Align Wide Support
    add_theme_support( 'align-wide' );
    // Title Support
    add_theme_support( 'title-tag' );
  }

  add_action('after_setup_theme', '_themename_dequeue_twentytwenty', 5);

  function _themename_customize_preview_init() {
    // Remove Inline Styles
    remove_action( 'wp_enqueue_scripts', 'twentytwenty_register_styles' );
  }

  add_action( 'wp_enqueue_scripts', '_themename_customize_preview_init', 1 );

  // Customize Live Updates
  remove_action( 'customize_preview_init', 'twentytwenty_customize_preview_init' );

  // Remove parent templates
  function _themename_filter_theme_page_templates($page_templates, $this_theme, $post) {
    if ( isset( $page_templates['templates/template-cover.php'] ) ) {
      unset( $page_templates['templates/template-cover.php'] );
    }
    if ( isset( $page_templates['templates/template-full-width.php'] ) ) {
      unset( $page_templates['templates/template-full-width.php'] );
    }
    return $page_templates;
  }

  add_filter( 'theme_page_templates', '_themename_filter_theme_page_templates', 20, 3 );
