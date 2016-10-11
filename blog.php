<?php
/**
 * Template Name: Blog
 */
?>

<?php

require('lang/content.php');
use Roots\Sage\Titles;
?>

<div class="container">
    <div class="col-md-7 articles-feed">

        <?php
        $args = array( 'post_type' =>   'post',
            'category_name' =>    'blog',
            'posts_per_page' =>  6,
            'paged' =>  $paged
        );
        query_posts( $args );
        ?>

        <h3 class="cat-name"><?php echo "Blog"; ?></h3>

        <div class="article-container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

                    <div class="article-thumbnail">
                        <?php echo get_the_post_thumbnail( $post_id, array(100, 100) );?>
                    </div>

                    <div class="article-content">
                        <a href="<?php the_permalink(); ?> " class="article-title">
                            <p class="meta"><?php echo get_the_date(); ?></p>
                            <h3><?php the_title(); ?></h3>
                        </a>

                        <section class="post_content clearfix">
                            <?php the_content( __("Read more &raquo;","wpbootstrap") ); ?>
                        </section> <!-- end article section -->
                    </div>

                </article> <!-- end article -->

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

        <?php if (function_exists('page_navi')) { // if expirimental feature is active ?>

            <?php page_navi(); // use the page navi function ?>

        <?php } else { // if it is disabled, display regular wp prev & next links ?>
            <nav class="wp-prev-next">
                <ul class="pager">
                    <li class="previous"><?php previous_posts_link(_e('', "wpbootstrap")) ?></li>
                    <li class="next"><?php next_posts_link(_e('', "wpbootstrap")) ?></li>

                </ul>
            </nav>
        <?php } ?>

    </div>
    <div class="col-md-4 last-articles-blog">

        <h4><?php echo $last_blog; ?></h4>
        <?php
        $args = array( 'post_type' =>   'post',
            'category_name' =>    'blog',
            'posts_per_page' =>  4
        );
        query_posts( $args );
        ?>
        <?php get_template_part('templates/timeline-list'); ?>
    </div>
</div>