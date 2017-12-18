<?php
$prevPost = get_previous_post(true);
$nextPost = get_next_post('category');
require __DIR__.'/../lang/content.php';

if(!$nextPost) {
    $col_post = "col-md-12";
} else {
    $col_post = "col-md-6";
}

if($prevPost) {?>

    <?php

    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($prevPost->ID), 'thumbnail_size' );

    if (empty($thumb['0'])) {
        $prev_url = null;
    } else {
        $prev_url = 'style="background-image:url('.$thumb['0'].');"';
    }

    ?>

    <div class="other-articles-container previous-article <?php echo $col_post; ?>">
        <div class="article-content data-href" data-href="<?php echo get_permalink(get_previous_post(true)); ?>">
            <h2><?php echo $prevPost->post_title ?></h2>
            <div class="other-link"><?php echo $read_article; ?></div>
            <div class="article-bg" <?php echo $prev_url; ?>></div>
        </div>
    </div>

<?php } ?>