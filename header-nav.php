<?php
/**
 * The Header for our theme.
 *
 * Displays the navigation menu
 *
 * @package Freshly Cut
 * @since 0.2.0
 */

?>

  <nav class="fill navbar navbar-cerulean" role="navigation">
    <h1 class="screen-reader-text"><?php esc_html_e( 'Menu', 'flint' ); ?></h1>
    <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'flint' ); ?>"><?php esc_html_e( 'Skip to content', 'flint' ); ?></a></div>
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>
      </div><!-- .navbar-header -->

      <div class="collapse navbar-collapse navbar-primary">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'flint_nav_fallback', 'walker' => new Flint_Walker_Nav_Menu_Navbar ) ); ?>
        <span class="navbar-text navbar-right" style="color:#fff;font-weight:bold;">970.800.1829</span>
      </div><!-- .navbar-collapse -->
    </div><!-- .container -->
  </nav><!-- .navbar -->

