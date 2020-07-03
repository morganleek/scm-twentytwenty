<?php
  function _themename_nav($args = array()) {
    $defaults = array(
      'theme_location'  => 'header-menu',
      'menu'            => '',
      'container'       => 'div',
      'container_class' => 'menu-container',
      'container_id'    => '',
      'menu_class'      => 'menu',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '<span class="mobile-only expander"></span>',
      'items_wrap'      => '<ul>%3$s</ul>',
      'depth'           => 2,
      'walker'          => ''
    );
    // Combine defaults and args
    $_args = wp_parse_args($args, $defaults);
    // Generate menu
    if($_args['echo'] === false) {
      return wp_nav_menu($_args);
    }
    wp_nav_menu($_args);
  }

  function _themename_register_menu() {
    register_nav_menus(
      array( 
        'primary' => __('Header Menu', 'scm') // Main Navigation
      )
    );
  }

  function _themename_menu_wrapper($args = '') {
    $args['container'] = false;
    return $args;
  }
  
  // Add Actions
  add_action( 'init', '_themename_register_menu' );
  // Add Filters
  add_filter( 'wp_nav_menu_args', '_themename_menu_wrapper' );

  // Remove Actions after Init
  function _themename_remove_actions_menus() {
    remove_action( 'init', 'twentytwenty_menus' );
  }
  add_action( 'init', '_themename_remove_actions_menus', 10);


  
  // function _themename_add_anchor( $atts, $item, $args ) {
  //   $atts['href'] .= ( !empty( $item->xfn ) ? '#' . $item->xfn : '' );
  //   return $atts;
  // }

  // add_filter( 'nav_menu_link_attributes', '_themename_add_anchor', 10, 3 );