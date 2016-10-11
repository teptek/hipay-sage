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
?>


<?php while (have_posts()) : the_post(); ?>
  <div class="page-header" <?=$url?>>
    <div class="page-header-content">
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

      ?>

      <?php if($cta_button != '') {?>
        <a class="btn blue-tpp" large squar"e" href="<?php echo $cta_link; ?>"><?php echo $cta_button; ?></a>
      <?php } ?>
      <div class="page-header-links">
        <ul class="nav nav-enterprise" role="tablist">
          <li><a href="#payment-methods">Payment methods</a></li>
          <li><a href="#risk">Risk management</a></li>
          <li><a href="#data">Data & Analytics</a></li>
          <li><a href="#dashboard">Real-time monitoring</a></li>
          <li><a href="#user-experience" >User Experience</a></li>
          <li><a href="#payment-hub" >Payment Hub</a></li>
        </ul>
      </div>
      <div class="page-header-darklayer"></div>
    </div>
  </div>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
