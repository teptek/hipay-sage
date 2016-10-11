<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <div id="post-<?php the_ID(); ?>" <?php post_class('clearfix col-md-3'); ?> class="timeline-item">
        <div class="timeline-date">
            <div class="timeline-title">
                <h4><?php the_title(); ?></h4>
            </div>
            <div class="timeline-point"></div>
            <p class="meta"><?php echo get_the_date(); ?></p>
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