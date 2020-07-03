<?php 
  // Remove .is-twentytwenty body class
  add_filter( 'body_class', function( $classes ) {
    $temp_classes = array_flip($classes);
    if(isset($temp_classes['is-twentytwenty'])) {
      unset($temp_classes['is-twentytwenty']);
    }
    return array_flip($temp_classes);
  } );

  function _themename_twentytwenty_site_logo_args($args, $defaults) {
    $args['single_wrap'] = '<div class="%1$s faux-heading"><h1>%2$s</h1></div>';
    return $args;
  }
	add_filter( 'twentytwenty_site_logo_args', '_themename_twentytwenty_site_logo_args', 10, 2 );

  add_filter( 'twentytwenty_post_meta_location_single_bottom', '__return_empty_string' );
  add_filter( 'twentytwenty_post_meta_location_single_top', '__return_empty_string' );

  // function _themename_customize_register( $wp_customize ) {
  //   $wp_customize->selective_refresh->add_partial(
  //     'hide_site_title',
  //     array(
  //       'selector'        => '.header-titles [class*=site-]:not(.site-description)',
  //       'render_callback' => '_themename_get_title',
  //     )
  //   );

  //   $wp_customize->add_setting(
  //     'hide_site_title',
  //     array(
  //       'capability'        => 'edit_theme_options',
  //       'sanitize_callback' => '_themename_sanitize_checkbox',
  //       'transport'         => 'postMessage',
  //     )
  //   );

  //   $wp_customize->add_control(
  //     'hide_site_title',
  //     array(
  //       'type'        => 'checkbox',
  //       'section'     => 'title_tagline',
  //       'priority'    => 11,
  //       'label'       => __( 'Hide Site Title/Logo', 'twentytwenty' ),
  //       'description' => __( '' ),
  //     )
  //   );

  //   // Footer Panel
  //   $wp_customize->add_setting( 
  //     '_themename_footer_phone' , array(
  //       'capability' => 'edit_theme_options',
  //       'default'    => '+61-(0)-455-335-325',
  //       'transport'  => 'postMessage',
  //     )
  //   );

  //   $wp_customize->add_setting( 
  //     '_themename_footer_email' , array(
  //       'capability' => 'edit_theme_options',
  //       'default'    => 'contact@joshrush.co',
  //       'transport'  => 'postMessage',
  //     )
  //   );

  //   $wp_customize->add_section(
  //     '_themename_footer_panel',
  //     array(
  //       'title'      => __( 'Footer' ),
  //       'priority'   => 200,
  //       'capability' => 'edit_theme_options',
  //     )
  //   );
    
  //   $wp_customize->add_control( 
  //     '_themename_footer_email', array(
  //       'type'        => 'email', // code_editor
  //       'section'     => '_themename_footer_panel',
  //       'priority'    => 11,
  //       'label'       => __( 'Email' ),
  //       'description' => __( '' ),
  //     ) 
  //   );

  //   $wp_customize->add_control( 
  //     '_themename_footer_phone', array(
  //       'type'        => 'url', // code_editor
  //       'section'     => '_themename_footer_panel',
  //       'priority'    => 11,
  //       'label'       => __( 'Phone Number' ),
  //       'description' => __( '' ),
  //     ) 
  //   );
  // }

  // add_action( 'customize_register', '_themename_customize_register', 10, 1 );

  // function _themename_get_title() {
  //   if ( get_theme_mod( 'hide_site_title', true ) ) {
  //     return '';
  //   }
  //   return bloginfo( 'name' );
  // }

  // function _themename_sanitize_checkbox( $checked ) {
  //   return ( ( isset( $checked ) && true === $checked ) ? true : false );
  // }

  // function _themename_twentytwenty_site_description($html, $args, $classname, $contents) {
  //   if ( get_theme_mod( 'hide_site_title', true ) ) {
  //     return '';
  //   }

  //   return $html;
  // }

  // add_filter( 'twentytwenty_site_logo', '_themename_twentytwenty_site_description', 20, 4 );

  // Theme Setup
  function _themename_setup() {
    // Font Sizes
    /*
    add_theme_support(
			'editor-font-sizes',
			array()
    );
    */

    // Remove Custom Font Sizes
    add_theme_support('disable-custom-font-sizes');

    // Font Sizes - using 'add_theme_support('editor-font-sizes', ...' forces a style size and not a class one
    // global $_wp_theme_features;
    // if(isset($_wp_theme_features['editor-font-sizes'][0])) {
    //   $_wp_theme_features['editor-font-sizes'][0][2]['size'] = 15;
    //   unset($_wp_theme_features['editor-font-sizes'][0][0]);
    //   unset($_wp_theme_features['editor-font-sizes'][0][1]);
    //   unset($_wp_theme_features['editor-font-sizes'][0][3]);
    //   $_wp_theme_features['editor-font-sizes'][0] = array_values($_wp_theme_features['editor-font-sizes'][0]);
    // }

    // Hide Heading Search
    set_theme_mod( 'enable_header_search', false );

    // Custom Colour Palette
    /*
		add_theme_support(
			'editor-color-palette',
			array(
				array(
				  'name'  => __( 'Grey', 'twentynineteen' ),
				  'slug'  => 'grey',
				  'color' => '#f1f2f2',
        ),
        array(
				  'name'  => __( 'Dark', 'twentynineteen' ),
				  'slug'  => 'dark',
				  'color' => '#646464',
				),
				array(
				  'name'  => __( 'Black', 'twentynineteen' ),
				  'slug'  => 'black',
				  'color' => '#000000',
        ),
        array(
				  'name'  => __( 'Berry', 'twentynineteen' ),
				  'slug'  => 'berry',
				  'color' => '#bd1577',
				),
				array(
				  'name'  => __( 'Blue', 'twentynineteen' ),
				  'slug'  => 'blue',
				  'color' => '#2484c6',
				),
				array(
				  'name'  => __( 'Orange', 'twentynineteen' ),
				  'slug'  => 'orange',
				  'color' => '#f26522',
				),
				array(
				  'name'  => __( 'Green', 'twentynineteen' ),
				  'slug'  => 'green',
				  'color' => '#00944a',
				),
				array(
				  'name'  => __( 'Yellow', 'twentynineteen' ),
				  'slug'  => 'yellow',
				  'color' => '#eea320',
				)
			)
    );
    */
	}
	
  add_action( 'after_setup_theme', '_themename_setup', 100 );
  
  // twentytwenty site description
  add_filter( 'twentytwenty_site_description', '_return_empty_string', 10, 3 );

  // add meta tags to body class
  // function _themename_body_class($classes, $class) {
  //   global $wp_query;
  //   if ( is_singular() ) {
  //     // get id
  //     $post_id = $wp_query->get_queried_object_id();
  //     // get desktop meta
  //     $desktop = get_post_meta( $post_id, 'scm_sidebar_plugin_desktop_title_visible', true );
  //     if($desktop) {
  //       $classes[] = 'hide-title-desktop';
  //     }
  //     // get mobile meta
  //     $mobile = get_post_meta( $post_id, 'scm_sidebar_plugin_mobile_title_visible', true );
  //     if($mobile) {
  //       $classes[] = 'hide-title-mobile';
  //     }
  //   }
  //   return $classes;
  // }

  // add_filter( 'body_class', '_themename_body_class', 10, 2 );

  // hide some blocks from user
  // function _themename_allowed_block_types( $allowed_blocks ) {  
  //   return array(
  //     'scm/block-list-post-type',
  //     'core/paragraph',
  //     'core/image',
  //     'core/heading',
  //     'core/gallery',
  //     'core/list',
  //     'core/quote',
  //     'core/pullquote',
  //     'core/audio',
  //     'core/file',
  //     'core/group',
  //     'core/separator',
  //     'core/buttons',
  //     'core/columns',
  //     'core/media-text',
  //     'core/spacer',
  //     'core/cover',
  //     'core/shortcode'
  //   );
  // }

  // add_filter( 'allowed_block_types', '_themename_allowed_block_types' );

  function _themename_init() {
    remove_filter( 'edit_post_link', 'twentytwenty_edit_post_link', 10 );
  }
  add_action( 'init', '_themename_init' );