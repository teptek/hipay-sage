<div class="container">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <?php get_template_part('templates/entry-meta'); ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="tag-section">
            <?php
            $posttags = get_the_tags();
            if ($posttags) {
                foreach($posttags as $tag) {
                    echo '<a class="tag" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
                }
            }
            ?>
        </div>
      <section>
        <?php the_content(); ?>
      </section>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </article>
  <?php endwhile; ?>
</div>

<div class="row other-articles">

  <?php if (($wp_query->current_post +1) == ($wp_query->post_count)) {
    echo 'This is the last post';
  } ?>
  <?php get_template_part('templates/previous-post'); ?>
  <?php get_template_part('templates/next-post'); ?>
</div>
</div>