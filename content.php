<article id="post-<?php the_ID(); ?>" class="gallery-article" <?php post_class(); ?>>
  <figure>
  <?php
  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
    the_post_thumbnail('large');
  }
  ?>
  <a href=""></a></figure>

  <?php the_title( '<h3>', '</h3>' ); ?>
  <?php the_content(); ?>
  <?php
    wp_link_pages( array(
      'before' => '<div class="page-links">' . __( 'Pages:', 'pivot' ),
      'after'  => '</div>',
    ) );
  ?>
  <?php edit_post_link( __( 'Edit', 'pivot' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
  <a class="gallery-article-read-more" href="<?php the_permalink(); ?>">Read More</a>
</article>