<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

  <div class="article-thumbnail">
    <?php echo get_the_post_thumbnail( $post_id, array( 100, 100 ) );?>
  </div>

  <div class="article-content">
    <a href="<?php the_permalink(); ?> " class="article-title">
      <p class="meta"><?php echo get_the_date(); ?></p>
      <h3><?php the_title(); ?></h3>
    </a>

    <section class="post_content clearfix">
      <?php the_content( __("Read more &raquo;","wpbootstrap") ); ?>
    </section> <!-- end article section -->
  </div>

</article> <!-- end article -->