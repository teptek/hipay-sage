<?php
/**
 * Template Name: Payment methods
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
      <a class="btn empty white large downscroll" href="<?php echo $cta_secondary_link; ?>"><?php echo $cta_secondary_button; ?></a>
    <?php } ?>

  </div>
  <div class="page-header-darklayer"></div>
</div>

<?php
require('lang/content.php');
?>

<div class="vc_row wpb_row vc_row-fluid">
  <div class="highlight">
    <p><?php echo $pm_intro; ?></p>
  </div>
</div>

<div class="container nav-country">
  <ul role="tablist">
    <li class="active" role="presentation"><a role="tab" href="#map-world" aria-controls="world" data-toggle="tab"><?php echo $pm_world; ?></a></li>
    <li role="presentation"><a role="tab" href="#map-europe" aria-controls="europe" data-toggle="tab"><?php echo $pm_europe; ?></a></li>
    <li role="presentation"><a role="tab" href="#map-south-america" aria-controls="south-america" data-toggle="tab"><?php echo $pm_south_america; ?></a></li>
    <li role="presentation"><a role="tab" href="#map-asia" aria-controls="asia" data-toggle="tab"><?php echo $pm_asia; ?></a></li>
  </ul>
</div>

<div class="tab-content">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile; ?>
</div>

<script>
  jQuery(document).ready(function($) {
    $('li[role="presentation"] a').on( "shown.bs.tab", function() {
      !window.vc_iframe&&vc_round_charts()
    });
  });
</script>