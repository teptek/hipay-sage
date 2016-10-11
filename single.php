<?php
//use Roots\Sage\Titles;
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$url = $thumb['0'];
?>

<?php if (isset($url)) { ?>
    <div class="page-header" style="background-image:url(<?=$url?>);"></div>
<?php } ?>

<?php get_template_part('templates/content-single', get_post_type()); ?>
