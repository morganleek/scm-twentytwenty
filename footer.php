    <footer>
      <div class="container">
        <?php if ( has_nav_menu( 'footer' ) ) { ?>
          <div class="footer-navigation-wrapper">
            <nav class="footer-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">
              <ul class="footer-menu reset-list-style">
                <?php
                  if ( has_nav_menu( 'footer' ) ) {
                    wp_nav_menu(
                      array(
                        'container'  => '',
                        'items_wrap' => '%3$s',
                        'theme_location' => 'footer',
                      )
                    );
                  } 
                ?>
              </ul>
            </nav><!-- .footer-menu-wrapper -->

          </div><!-- .footer-navigation-wrapper -->
        <?php } ?>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>