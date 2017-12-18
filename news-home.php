<?php
/**
 * Template Name: News Home
 */
?>

<?php

require('lang/content.php');

?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

<div class="row blog-one full">
    <?php
    $args = array( 'post_type' =>   'post',
        'category_name' =>    'blog-en',
        'posts_per_page' =>  1
    );
    query_posts( $args );
    ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
        $url = $thumb['0']; ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

            <div class="col-md-6 text-side">
              <div class="article-txt">
                  <a class="article-title" href="<?php the_permalink(); ?>">
                      <p class="meta"><?php echo get_the_date(); ?></p>
                      <h3><?php the_title(); ?></h3>
                  </a>
                  <section class="post_content clearfix">
                      <?php the_content( __("Read more &raquo;","wpbootstrap") ); ?>
                  </section> <!-- end article section -->
              </div>
            </div>
            <div class="col-md-6 article-thumbnail" style="background-image:url('<?php echo $url; ?>')">
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
<div class="row blog-list">
    <div class="container">
        <a href="/blog" class="category-link category-link-blue"><h5><?php echo $tag_blog; ?></h5></a>
        <?php
        $args = array( 'post_type' =>   'post',
            'category_name' =>    'blog-en',
            'posts_per_page' =>  3,
            'offset' =>  1
        );
        query_posts( $args );
        ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
            $url = $thumb['0']; ?>

        <a class="col-md-4 col-sm-6" href="<?php the_permalink(); ?> ">
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

                <div class="article-thumbnail">
                    <?php echo get_the_post_thumbnail( $post_id, 'full' );?>
                </div>

                <div class="article-txt">

                        <p class="meta"><?php echo get_the_date(); ?></p>
                        <h3><?php the_title(); ?></h3>

                </div>

            </article> <!-- end article -->
        </a>

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

<div class="row list-end">
    <div class="container">
        <div class="cp-list col-md-6">
            <a href="<?php echo $news_tag_link; ?>" class="category-link category-link-green"><h5><?php echo $tag_cp; ?></h5></a>
            <?php
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'cp-en',
                'posts_per_page' =>  3
            );
            query_posts( $args );
            ?>
            <?php get_template_part('templates/articles', 'list'); ?>
        </div>
        <div class="col-md-6">
            <a href="<?php echo $news_tag_link; ?>" class="category-link category-link-blue"><h5><?php echo $tag_press; ?></h5></a>
            <?php
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'presse-en',
                'posts_per_page' =>  3
            );
            query_posts( $args );
            ?>
            <?php get_template_part('templates/articles', 'list'); ?>
        </div>
    </div>
</div>
</div>