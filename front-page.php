<?php
/**
 * The template for displaying the front page
 *
 * Template file used to render the Site Front Page,
 * whether the front page displays the Blog Posts Index
 * or a static page.
 *
 * @package Freshly Cut
 * @since 0.2.0
 */

get_header();
flint_get_sidebar( 'header' );
?>

  <div id="primary" class="content-area container interior">

    <div class="row">

      <div class="col-xs-12 col-md-8 col-lg-9 splash">
        <img src="https://highcountryls.com/wp-content/uploads/2014/01/140.jpg">
      </div>

      <div id="content" class="col-xs-12 col-md-4 col-lg-3" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

        <?php
          $type = get_post_type();
          if ( 'post' === $type ) :
            get_template_part( 'format', get_post_format() );
          else :
            get_template_part( 'type', $type );
          endif;
        ?>

        <?php endwhile; ?>

        <?php flint_content_nav( 'nav-below' ); ?>

      </div><!-- #content .site-content -->

      <?php flint_get_sidebar( 'right' ); ?>

    </div><!-- .row -->

  </div><!-- #primary .content-area -->

  <section class="testimonial">
    <div class="container">
      <div class="row">
        <blockquote class="col-xs-12">
          <p class="hidden">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
          <footer class="text-right hidden">Johnny Appleseed</footer>
        </blockquote>
      </div><!-- .row -->
    </div><!-- .container -->
  </section><!-- #testimonial -->

  <section class="container interior">
    <div class="row">
      <div class="col-xs-12 col-md-4 contact">
        <h2>Contact</h2>
        <?php echo do_shortcode( "[contact-form to='mbeall@starverte.com,office@highcountryls.com' subject='Contact Form'][contact-field label='Name' type='name' required='1'/][contact-field label='Email' type='email' required='1'/][contact-field label='Comment' type='textarea' required='1'/][/contact-form]" ); ?>
      </div><!-- .contact -->
      <div class="col-xs-12 col-md-4 services services-left">
        <div class="row">
          <div class="col-xs-3 img-service">
            <img src="https://dev.highcountryls.com/wp-content/uploads/2014/01/140-e1467771654136-150x150.jpg">
          </div><!-- .img-service -->
          <div class="col-xs-9 service-description">
            <h4>Color</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quam justo, vulputate ut urna vel, gravida sollicitudin libero. Sed malesuada elementum.</p>
          </div><!-- .service-description -->
        </div><!-- .row -->
        <div class="row">
          <div class="col-xs-3 img-service">
            <img src="https://dev.highcountryls.com/wp-content/uploads/2014/05/DSCN0272-e1467771857578-150x150.jpg">
          </div><!-- .img-service -->
          <div class="col-xs-9 service-description">
            <h4>Irrigation</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quam justo, vulputate ut urna vel, gravida sollicitudin libero. Sed malesuada elementum.</p>
          </div><!-- .service-description -->
        </div><!-- .row -->
        <div class="row">
          <div class="col-xs-3 img-service">
            <img src="https://dev.highcountryls.com/wp-content/uploads/2014/01/DSCN03671-e1467772015388-150x150.jpg">
          </div><!-- .img-service -->
          <div class="col-xs-9 service-description">
            <h4>Renovation/Install</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quam justo, vulputate ut urna vel, gravida sollicitudin libero. Sed malesuada elementum.</p>
          </div><!-- .service-description -->
        </div><!-- .row -->
      </div><!-- .col-xs-12 .col-md-4 -->
      <div class="col-xs-12 col-md-4 services services-right">
        <div class="row">
          <div class="col-xs-3 img-service">
            <img src="https://dev.highcountryls.com/wp-content/uploads/2014/01/DSCN0267-e1467771165584-150x150.jpg" />
          </div><!-- .img-service -->
          <div class="col-xs-9 service-description">
            <h4>Maintenance</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quam justo, vulputate ut urna vel, gravida sollicitudin libero. Sed malesuada elementum.</p>
          </div><!-- .service-description -->
        </div><!-- .row -->
        <div class="row">
          <div class="col-xs-3 img-service">
            <img src="https://dev.highcountryls.com/wp-content/uploads/2014/05/067-e1467772121732-150x150.jpg">
          </div><!-- .img-service -->
          <div class="col-xs-9 service-description">
            <h4>Snow Removal</h4>
            <p>Whether you need two inches or two feet of snow removed, our fleet is ready day and night, weekends and holidays.</p>
          </div><!-- .service-description -->
        </div><!-- .row -->
      </div><!-- .col-xs-12 .col-md-4 -->
    </div><!-- .row -->
  </section><!-- .container .interior -->
</div><!-- #page -->

<?php flint_get_sidebar( 'footer' ); ?>
<?php get_footer(); ?>

