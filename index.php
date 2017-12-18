<?php

require('lang/content.php');
use Roots\Sage\Titles;
?>

<div class="container">
  <div class="page-header">
    <div class="page-header-content">
      <h2><?= Titles\title(); ?></h2>
    </div>
  </div>
  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php //get_search_form(); ?>
  <?php endif; ?>

  <div class="row">
    <div class="col-md-7">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>
    </div>
  </div>
</div>
