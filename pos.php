<?php
/**
 * Template Name: POS
 */
?>

<?php
use Roots\Sage\Titles;
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
if (empty($thumb['0'])) {
  $url = null;
} else {
  $url = 'style="background-image:url('.$thumb['0'].');"';
}
?>

<div class="page-header" <?=$url?>>
  <div class="page-header-content container">
    <h1><?= Titles\title(); ?></h1>

    <?php
    $page_description = get_post_meta($post->ID, "page_description", true);
    ?>

    <?php if($page_description != '') {?>
      <div class="page-description"><?php echo $page_description; ?></div>
    <?php } ?>

    <?php

    $cta_link = get_post_meta($post->ID, "cta_link", true);
    $cta_button = get_post_meta($post->ID, "cta_button", true);
    $cta_secondary_link = get_post_meta($post->ID, "cta_secondary_link", true);
    $cta_secondary_button = get_post_meta($post->ID, "cta_secondary_button", true);

    ?>

    <?php if($cta_button != '') {?>
      <a class="btn white large" href="<?php echo $cta_link; ?>"><?php echo $cta_button; ?></a>
    <?php } ?>
    <?php if($cta_secondary_button != '') {?>
      <a class="btn empty white large" target="_blank" href="<?php echo $cta_secondary_link; ?>"><?php echo $cta_secondary_button; ?></a>
    <?php } ?>

  </div>
  <div class="page-header-darklayer"></div>
</div>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>


  <div class="modal fade" tabindex="-1" role="dialog" id="lexception-vid" aria-hidden="true" aria-labelledby="lexception-vid">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <div><iframe autoplay="0" width="600" height="337" src="https://www.youtube.com/embed/uYoxMrwJrK4" frameborder="0" allowfullscreen></iframe></div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php endwhile; ?>
