<?php
  if(!function_exists('___')) {
    function ___($object, $return = false) {
      $pre = '<pre>' . print_r($object, true) . '</pre>';
      if($return) {
        return $pre;
      }
      print $pre;
    }
  }

  function _themename_post_meta() {
    /* tanslators: %s: Post Date */
    printf(
      esc_html__( 'Posted on %s', '_themename' ),
      '<a href="'. esc_url(get_permalink( )) . '"><time datetime="' . esc_attr(get_the_date('c')) . 
      '">' . esc_html(get_the_date()) . '</time></a>'
    );
    /* tanslators: %s: Post Author */
    printf(
      esc_html__(' By %s ', '_themename'),
      '<a href="' . esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )) . '">' . esc_html
      (get_the_author( )) . '</a>'
    );
  }

  function _themename_readmore_link() {
    echo '<a href="' . esc_url(get_the_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">';
    /* tanslators: %s: Post Title */
    printf(
      wp_kses(
        __(' Read More <span class="u-screen-reader-text">About %s</span> ', '_themename'), 
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

  // function _themename_dump_filters_before() {
  //   global $wp_filter;
  //   print '<pre>';
  //   foreach($wp_filter as $k => $v) {
  //     print '"' . $k . '"' . "\n"; // Filter
  //     foreach($v->callbacks as $n => $m) {
  //       // $n = Priority
  //       foreach($m as $t => $s) {
  //         print "  " . $t . " (" . $n . ")\n";
  //       }
  //     }
  //   }
  //   print '</pre>';
  //   die();
  // }

  // add_action('init', '_themename_dump_filters_before', 100);