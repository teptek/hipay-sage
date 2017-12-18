<?php
/**
 * Template Name: Contact
 */
?>

<?php
require('lang/content.php');
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
