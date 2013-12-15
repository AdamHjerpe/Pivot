<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Pivot
 */

get_header(); ?>

<!-- 	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
 -->
 		<section class="article-gallery">
 		  <header class="section-header">
 		    <h2>Our Recent Work</h2>
 		  </header>
 			<div class="wrapper">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php pivot_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>
		</div>
		<!-- /.wrapper -->
		</section>
		<!-- /.article-gallery -->
		<!-- </main><!-- #main -->
	<!--</div><!-- #primary --> -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>