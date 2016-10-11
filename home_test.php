<?php
/**
 * Template Name: Home Test
 */
?>

<?php
use Roots\Sage\Titles;
?>


<?php while (have_posts()) : the_post(); ?>
    <div class="page-header">
        <div class="page-header-content">
            <div class="container">
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
                    <a class="btn blue large" href="<?php echo $cta_link; ?>"><?php echo $cta_button; ?></a>
                <?php } ?>

                <div id="particles-js"></div>
            </div>
            <div class="container scroll-down">
                <div class="scroll-down-content">Défilez vers le bas<i>&darr;</i></div>
            </div>
        </div>
    </div>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
