<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

?>

<!-- <header class="site-header"> -->
  <div class="page-header">
  <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true">extra</i>
  <
    <div class="site-header__menu group">
			<?php 
				if (is_user_logged_in()) {
					wp_nav_menu(array(
            'container' => 'nav',
            'container_class' => 'main-navigation',
						'theme_location' => 'logged-in',
					));
				} else {
					wp_nav_menu(array(
            'container' => 'nav',
            'container_class' => 'main-navigation',
						'theme_location' => 'logged-out',
					));
				}
			?>
			<!-- php_navigation() -->
      <!-- nav class="main-navigation">
        <ul>
          <li class="page-item site-header__util"><a href="<?php echo esc_url(site_url('/')); ?>">Home</a></li>
          <li class="page-item site-header__util"><a href="<?php echo esc_url(site_url('/events')); ?>">Events</a></li>
          <li class="page-item site-header__util"><a href="https://signup.westsoundbrewers.com/">Join WSB Club</a></li>
          <li class="page-item site-header__util"><a href="<?php echo esc_url(site_url('/sample-page')); ?>">About</a></li>
          <?php if (is_user_logged_in()) { ?>
            <li class="page-item site-header__util">
              <a href="<?php echo wp_logout_url(); ?>"
                class="btn  btn--dark-orange float-left btn--with-photo"
                >
                <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 28); ?></span>
                <span class="btn__text">Log Out</span>
              </a>
            </li>
          <?php } else { ?>
            <li class="page-item site-header__util"><a href="<?php echo wp_login_url(); ?>"
                class="btn btn--small btn--orange float-left push-right">Login</a>
            </li>
            <li class="page-item site-header__util"><a href="<?php echo wp_registration_url(); ?>"
                class="btn btn--small  btn--dark-orange float-left">Register</a></li>
          <?php } ?>

        </ul>
      </nav -->
    </div>
  </div>
<!-- </header> -->
