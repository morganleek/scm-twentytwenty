<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>

		<header id="site-header" class="header-footer-group" role="banner">
			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">
          <?php
            // Search
          ?>

					<div class="header-titles">
						<?php
							// Site title or logo.
						?>
					</div><!-- .header-titles -->

				</div><!-- .header-titles-wrapper -->

        <?php if ( has_nav_menu( 'header' ) ) { ?>
          <div class="header-navigation-wrapper">
            <nav class="header-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">
              <ul class="header-menu reset-list-style">
								<?php
                  if ( has_nav_menu( 'header' ) ) {
                    wp_nav_menu(
                      array(
                        'container'  => '',
                        'items_wrap' => '%3$s',
                        'theme_location' => 'header',
                      )
                    );
                  } 
								?>
              </ul>
            </nav><!-- .header-menu-wrapper -->

          </div><!-- .header-navigation-wrapper -->
        <?php } ?>

			</div><!-- .header-inner -->

		</header><!-- #site-header -->

		<?php
