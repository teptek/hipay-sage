<?php
/**
 * Template Name: Signup
 */
?>

<?php
add_action( 'after_setup_theme', 'remove_default_menu', 20 );
function remove_default_menu(){
  unregister_nav_menu( 'primary_navigation' );
}
?>


<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

