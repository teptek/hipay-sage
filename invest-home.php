<?php
/**
 * Template Name: Invest Home
 */
?>

<?php

require('lang/content.php');

?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="timeline timeline-white">
    <h5>Calendar</h5>
    <div class="container">
        <div class="timeline-bar"></div>
        <?php
        $args = array( 'post_type' =>   'post',
            'category_name' =>    'agenda-financier',
            'posts_per_page' =>  4,
            'offset' =>  1
        );
        query_posts( $args );
        ?>
        <?php get_template_part('templates/timeline'); ?>
    </div>
</div>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="row blog-list">
    <div class="container">
        <div class="col-md-6">
            <a class="category-link category-link-blue" href="/documentation-en"><h5>Documentation</h5></a>
            <?php
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'documentation',
                'posts_per_page' =>  4,
                'offset' =>  1
            );
            query_posts( $args );
            ?>
            <?php get_template_part('templates/articles', 'list'); ?>
        </div>
        <div class="col-md-6">
            <a class="category-link category-link-blue" href="/documentation-en"><h5><?php echo $cp_finance; ?></h5></a>
            <?php
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'cp_finance',
                'posts_per_page' =>  3,
                'offset' =>  1
            );
            query_posts( $args );
            ?>
            <?php get_template_part('templates/articles', 'list'); ?>
        </div>
    </div>
</div>