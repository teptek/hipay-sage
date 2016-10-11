<?php
/*
Template Name: Event
*/
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

<div class="row clear-row">

    <div id="content" class="clearfix container">

        <div id="main" class="col-md-12 clearfix" role="main">
            <?php
            $args = array( 'post_type' =>   'post',
                'category_name' =>    'event',
                'posts_per_page' =>  10
            );
            query_posts( $args );
            ?>



            <ul class="item-list vertical-timeline">
                <div class="timeline-bar"></div>
                <?php
                    if (have_posts()) : while (have_posts()) : the_post();
                    $page_description = get_post_meta($post->ID, "page_description", true);
                    $event_link = get_post_meta($post->ID, "lien_evenement", true);
                ?>

                    <li id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
                        <div class="timeline-point"></div>
                        <a href="<?php echo $event_link; ?>" target="_blank" class="article-title">

                            <p class="meta">
                                <?php if($page_description != '') {?>
                                    <?php echo $page_description; ?>
                                <?php } ?>
                            </p>
                            <h4><?php the_title(); ?></h4>
                        </a>
                    </li>

                <?php endwhile; ?>

                <?php else : ?>

                    <li id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
                        <a href="<?php the_permalink(); ?>" class="article-title">
                            <p class="meta"><?php _e("No Posts Yet", "wpbootstrap"); ?></p>
                            <h4><?php _e("Sorry, What you were looking for is not here.", "wpbootstrap"); ?></h4>
                        </a>
                    </li>

                <?php endif; ?>
            </ul>

        </div>

    </div> <!-- end #content -->