<?php
/**
 * Template Name: Invest Home FR
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
    <h5><?php echo $calendar; ?></h5>
    <div class="container">
        <div class="timeline-bar"></div>
        <?php
        $args = array( 'post_type' =>   'post',
            'category_name' =>    'agenda-financier',
            'posts_per_page' =>  4
            //'offset' =>  1
        );
        query_posts( $args );
        ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php
            $page_description = get_post_meta($post->ID, "page_description", true);
            ?>

            <div id="post-<?php the_ID(); ?>" <?php post_class('clearfix col-md-3'); ?> class="timeline-item">
                <div class="timeline-date">
                    <div class="timeline-title">
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <div class="timeline-point"></div>
                    <?php if($page_description != '') {?>
                        <p class="meta"><?php echo $page_description; ?></p>
                    <?php } ?>
                </div>
            </div>

        <?php endwhile; ?>

        <?php else : ?>

            <article id="post-not-found">
                <h1><?php _e("No Posts Yet", "wpbootstrap"); ?></h1>
                <section class="post_content">
                    <p><?php _e("Sorry, What you were looking for is not here.", "wpbootstrap"); ?></p>
                </section>
            </article>

        <?php endif; ?>
    </div>
</div>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="row blog-list">
    <div class="container">
        <div class="col-md-6">
            <a class="category-link category-link-blue" href="<?php echo $invest_doc_links; ?>"><h5><?php echo $invest_doc_title; ?></h5></a>
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
            <a class="category-link category-link-blue" href="<?php echo $invest_doc_links; ?>"><h5><?php echo $cp_finance; ?></h5></a>
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

<div class="modal fade" tabindex="-1" role="dialog" id="ag-txt">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo "Comment participer à l’Assemblée Générale pour les actionnaires au porteur ?" ?></h4>
            </div>
            <div class="modal-body">
                <?php include "ag.php"; ?>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->