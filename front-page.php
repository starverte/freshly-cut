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
        <?php
          query_posts( array( 'page_id' => 268 ) );

          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post();
              the_content();
            }
          }

          wp_reset_query();
        ?>
      </div><!-- .contact -->
      <div class="col-xs-12 col-md-4 services services-left">
        <div class="row">
          <div class="col-xs-3 img-service">
            <img src="https://highcountryls.com/wp-content/uploads/2016/08/hcls-home-color.jpg">
          </div><!-- .img-service -->
          <div class="col-xs-9 service-description">
            <h4>Color</h4>
            <p>A colorful annual program on your property can increase curb appeal and add value. Color can create a sense of peace and well-being, flowers brighten everyone's day.</p>
          </div><!-- .service-description -->
        </div><!-- .row -->
        <div class="row">
          <div class="col-xs-3 img-service">
            <img src="https://highcountryls.com/wp-content/uploads/2016/08/hcls-home-irrigation.jpg">
          </div><!-- .img-service -->
          <div class="col-xs-9 service-description">
            <h4>Irrigation</h4>
            <p>Our irrigation department is knowledgeable in all aspects of irrigation. We can help our customers find solutions to not only conserve water but to also make your property look its best all while staying within your budget.</p>
          </div><!-- .service-description -->
        </div><!-- .row -->
        <div class="row">
          <div class="col-xs-3 img-service">
            <img src="https://highcountryls.com/wp-content/uploads/2016/08/hcls-home-renovation.jpg">
          </div><!-- .img-service -->
          <div class="col-xs-9 service-description">
            <h4>Renovation/Install</h4>
            <p>High Country Landscape Services has an experienced installation/renovation department to help create a visually appealing landscape for your home or office. Our renovation technicians can create a small project to a complete overhaul. You imagine the perfect landscape, and we will create it.</p>
          </div><!-- .service-description -->
        </div><!-- .row -->
      </div><!-- .col-xs-12 .col-md-4 -->
      <div class="col-xs-12 col-md-4 services services-right">
        <div class="row">
          <div class="col-xs-3 img-service">
            <img src="https://highcountryls.com/wp-content/uploads/2016/08/hcls-home-maintenance.jpg" />
          </div><!-- .img-service -->
          <div class="col-xs-9 service-description">
            <h4>Maintenance</h4>
            <p>High Country Landscape Services strives to deliver the highest quality of service and products for our customers. We manage landscape maintenance for several properties in Northern Colorado, ranging from large business to residential and everything in between. A well-maintained property can add so much value.</p>
          </div><!-- .service-description -->
        </div><!-- .row -->
        <div class="row">
          <div class="col-xs-3 img-service">
            <img src="https://highcountryls.com/wp-content/uploads/2016/08/hcls-home-snow.jpg">
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
