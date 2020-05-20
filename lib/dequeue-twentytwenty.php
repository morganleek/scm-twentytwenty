<?php
  function _themename_dequeue_twentytwenty() {
    remove_action('after_setup_theme', 'twentytwenty_theme_support');
  }

  add_action('after_setup_theme', '_themename_dequeue_twentytwenty', 5);