<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Flint
 * @since 1.0.1
 */

?>

<footer id="colophon" class="fill site-footer" role="contentinfo">
  <div class="site-info container">
    <div class="row">
      <div id="custom-footer" class="col-xs-12 col-md-6">
        <a href="http://www.bbb.org/wyoming-and-northern-colorado/business-reviews/landscape-contractors/high-country-landscape-services-llc-in-fort-collins-co-46092747/#bbbonlineclick" target="_blank" rel="nofollow"><img src="https://seal-wynco.bbb.org/seals/blue-seal-250-52-whitetxt-bbb-46092747.png" style="border: 0;" alt="High Country Landscape Services LLC BBB Business Review" /></a>
      </div>
      <div id="credits" class="col-xs-12 col-md-6">
        <?php $theme = wp_get_theme(); ?>
        Proudly powered by <a href="http://wordpress.org/" title="A Semantic Personal Publishing Platform">WordPress</a><br />
        Theme: <a href="<?php echo $theme->get( 'ThemeURI' ) ?>"><?php echo $theme ?></a> by <?php echo $theme->get( 'Author' ) ?>
      </div>
    </div><!-- .site-info -->
  </div><!-- .row -->
</footer><!-- #colophon -->

<?php get_footer( 'close' );

