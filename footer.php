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
  <div id="map-canvas" />
</section>
<!-- /.map-holder -->
<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgsKkMMp_Pj7XDEtLeFiw854uR1Ky2Iew&sensor=true">
    </script>
</script>
<script type="text/javascript">
 function initialize() {
   var mapOptions = {
     center: new google.maps.LatLng(59.3333, 14.5167),
     zoom: 13,
     mapTypeId: google.maps.MapTypeId.ROADMAP
   };
   var map = new google.maps.Map(document.getElementById("map-canvas"),
       mapOptions);
 }
 google.maps.event.addDomListener(window, 'load', initialize);
</script>
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