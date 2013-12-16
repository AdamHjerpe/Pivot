<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pivot
 */
?>

</div>
<!-- /.wrapper -->
<section class="map-holder">
  <header class="section-header">
    <h2>Our Location</h2>
  </header>
  <div id="map-canvas">
    <?php
      echo do_shortcode('[google-map-v3 shortcodeid="TO_BE_GENERATED" width="100%" height="452" zoom="12" maptype="roadmap" mapalign="center" directionhint="false" language="default" poweredby="false" maptypecontrol="true" pancontrol="true" zoomcontrol="true" scalecontrol="true" streetviewcontrol="true" scrollwheelcontrol="false" draggable="true" tiltfourtyfive="false" enablegeolocationmarker="false" addmarkermashup="false" addmarkermashupbubble="false" addmarkerlist="Karlskoga{}1-default.png" bubbleautopan="true" distanceunits="miles" showbike="false" showtraffic="false" showpanoramio="false"]
' );;
    ?>
  </div>
</section>
<!-- /.map-holder -->
<footer class="main-footer">
  <div class="wrapper">
    <section class="social-icons">
      <div class="twitter-icon"></div>
      <div class="facebook-icon"></div>
      <div class="google-plus-icon"></div>
    </section>
    <section class="footer-logo-holder">
      <h1><span>.</span>PIV<i class="fa-repeat"></i>T</h1>
    </section>
  </div>
</footer>
<!-- /.main-footer -->


<!--
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'pivot_credits' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'pivot' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'pivot' ), 'Pivot', '<a href="http://adamhjerpe.se" rel="designer">Adam Hjerpe</a>' ); ?>
		</div>
	</footer>
</div> -->

<?php wp_footer(); ?>

</body>
</html>