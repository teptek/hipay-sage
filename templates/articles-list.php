<ul class="item-list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <li id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
            <a href="<?php the_permalink(); ?>" class="article-title">
                <p class="meta"><?php echo get_the_date(); ?></p>
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