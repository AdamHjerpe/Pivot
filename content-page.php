<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Pivot
 */
?>
<article id="post-<?php the_ID(); ?>" class="gallery-article" <?php post_class(); ?>>
  <figure>
    <img src="http://placekitten.com/g/350/244" />
    <a href="#"></a>
  </figure>
  <?php the_title( '<h3>', '</h3>' ); ?>
  <?php the_content(); ?>
  <?php
  	wp_link_pages( array(
  		'before' => '<div class="page-links">' . __( 'Pages:', 'pivot' ),
  		'after'  => '</div>',
  	) );
  ?>
  <?php edit_post_link( __( 'Edit', 'pivot' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
  <a href="">Read More</a>
</article>
