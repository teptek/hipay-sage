<?php
/**
 * Template Name: Enterprise
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

require('lang/content.php');
?>


<?php while (have_posts()) : the_post(); ?>
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
  <div class="page-header-links">
    <ul class="nav nav-enterprise" role="tablist">
      <li><a href="#payment-methods"><?php echo $enterprise_payment; ?></a></li>
      <li><a href="#risk"><?php echo $enterprise_risk; ?></a></li>
      <li><a href="#data"><?php echo $enterprise_data; ?></a></li>
      <li><a href="#dashboard"> <?php echo $enterprise_monitoring; ?></a></li>
      <li><a href="#user-experience" ><?php echo $enterprise_ux; ?></a></li>
      <li><a href="#payment-hub"><?php echo $enterprise_hub; ?></a></li>
    </ul>
  </div>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
