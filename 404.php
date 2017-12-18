<?php require('lang/content.php'); ?>


<div class="page-header">
  <div class="page-header-content">
    <h1><?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?></h1>

    <?php
    $page_description = get_post_meta($post->ID, "page_description", true);
    ?>

    <a href="/" class="btn white"><?php echo $back_home; ?></a>
  </div>
</div>

<?php //get_search_form(); ?>
