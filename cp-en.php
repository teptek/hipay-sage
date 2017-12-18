<?php
/**
 * Template Name: Press EN
 */
?>

<?php

require('lang/content.php');

?>

<div class="container">
    <div class="col-md-7 articles-feed">

        <?php

        $site_lang = get_bloginfo('language');

        $args = array( 'post_type' =>   'post',
            'category_name' =>    'presse-en, cp-en',
            'posts_per_page' =>  6,
            'paged' =>  $paged
        );
        query_posts( $args );
        ?>

        <h3 class="cat-name"><?php echo "Press"; ?></h3>

        <div class="article-container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

                    <div class="article-tag">
                        <?php
                        if ( in_category( array( 'presse', 'presse-en')) ) {
                            echo $tag_press;
                        } else {
                            echo $invest_cp_press_title;
                        }
                        ?>
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

        <h4><?php echo $last_cp; ?></h4>
        <?php
        $args = array( 'post_type' =>   'post',
            'category_name' =>    'presse-en, cp-en',
            'posts_per_page' =>  4
        );
        query_posts( $args );
        ?>
        <?php get_template_part('templates/timeline-list'); ?>
    </div>
</div>