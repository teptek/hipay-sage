<?php
/**
 * Template Name: Home
 */

use Roots\Sage\Titles;
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
if (empty($thumb['0'])) {
  $url = null;
} else {
  $url = 'style="background-image:url('.$thumb['0'].');"';
}
?>

<?php while (have_posts()) : the_post(); ?>

  <div class="page-header" <?=$url?>>
    <div class="page-header-content container-left">
      <?php
      $page_description = get_post_meta($post->ID, "page_description", true);
      $cta_link = get_post_meta($post->ID, "cta_link", true);
      $cta_button = get_post_meta($post->ID, "cta_button", true);
      $cta_secondary_link = get_post_meta($post->ID, "cta_secondary_link", true);
      $cta_secondary_button = get_post_meta($post->ID, "cta_secondary_button", true);

      $widget_content_label = get_post_meta($post->ID, "widget_content_label", true);
      $widget_content_text = get_post_meta($post->ID, "widget_content_text", true);
      $widget_content_url = get_post_meta($post->ID, "widget_content_url", true);

      ?>

      <?php if($page_description != '') {?>
        <h1 class="page-description"><?php echo $page_description; ?></h1>
      <?php } ?>
      <?php if($cta_button != '') {?>
        <a class="btn blue large anim header-link"><?php echo $cta_button; ?></a>
      <?php } ?>
        <?php if($cta_secondary_button != '') {?>
            <a href="<?php echo $cta_link; ?>" class="btn empty white large"><?php echo $cta_secondary_button; ?></a>
        <?php } ?>

        <?php if($widget_content_text != '') {?>
            <a class="widget-content" href="<?php echo "$widget_content_url"; ?>">
                <div class="widget-content-label"><?php echo $widget_content_label; ?></div>
                <div class="widget-content-text"><?php echo $widget_content_text; ?></div>
            </a>
        <?php } ?>

      <div class="page-header-darklayer"></div>
    </div>
  </div>

<?php get_template_part('templates/content', 'page'); ?>

<div class="modal fade" tabindex="-1" role="dialog" id="nature-decouverte-video" aria-hidden="true" aria-labelledby="nature-decouverte-video">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <div>
          <iframe id="nature-video-frame" autoplay="0" width="600" height="337" src="https://www.youtube.com/embed/Hl90ZHWL4wI" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php endwhile; ?>