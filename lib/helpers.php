<?php 

if(!function_exists('___')) {
  function ___($object, $return = false) {
    $html = '<pre>' . print_r($obj, true) . '</pre>';
    if($return) {
      return $html;
    }
    print $html;
  }
}

function _themename_twentytwenty_post_meta() {
  /* tanslators: %s: Post Date */
  printf(
    esc_html__( 'Posted on %s', 'scm_twentytwenty' ),
    '<a href="'. esc_url(get_permalink( )) . '"><time datetime="' . esc_attr(get_the_date('c')) . 
    '">' . esc_html(get_the_date()) . '</time></a>'
  );
  /* tanslators: %s: Post Author */
  printf(
    esc_html__(' By %s ', 'scm_twentytwenty'),
    '<a href="' . esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )) . '">' . esc_html
    (get_the_author( )) . '</a>'
  );
}

function _themename_twentytwenty_readmore_link() {
  echo '<a href="' . esc_url(get_the_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">';
  /* tanslators: %s: Post Title */
  printf(
    wp_kses(
      __(' Read More <span class="u-screen-reader-text">About %s</span> ', 'scm_twentytwenty'), 
      [
        'span' => [
          'class' => []
        ]
      ]
    ),
    get_the_title()
  );
  echo '</a>';
}