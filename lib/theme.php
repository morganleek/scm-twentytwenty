<?php 
  // Remove .is-twentytwenty body class
  add_filter( 'body_class', function( $classes ) {
    $temp_classes = array_flip($classes);
    if(isset($temp_classes['is-twentytwenty'])) {
      unset($temp_classes['is-twentytwenty']);
    }
    return array_flip($temp_classes);
  } );

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

  //   // Mailchimp Panel
  //   // Appended
  //   $wp_customize->add_setting( 
  //     '_themename_subscribe_form_html' , array(
  //       'capability'        => 'edit_theme_options',
  //       'default'   => '<!-- Insert HTML Form -->',
  //       'transport' => 'postMessage',
  //     )
  //   );

  //   $wp_customize->add_section(
  //     '_themename_subscribe_form',
  //     array(
  //       'title'      => __( 'Subscribe Form' ),
  //       'priority'   => 45,
  //       'capability' => 'edit_theme_options',
  //     )
  //   );
    
  //   $wp_customize->add_control( 
  //     '_themename_subscribe_form_html', array(
  //       'type'        => 'code_editor',
  //       'section'     => '_themename_subscribe_form',
  //       'priority'    => 11,
  //       'label'       => __( 'Subscribe Form HTML' ),
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

  function _themename_init() {
    remove_filter( 'edit_post_link', 'twentytwenty_edit_post_link', 10 );
  }
  add_action( 'init', '_themename_init' );