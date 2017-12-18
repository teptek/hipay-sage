<?php
$nextPost = get_next_post(true);
require __DIR__.'/../lang/content.php';
if($nextPost) {?>

    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($nextPost->ID), 'thumbnail_size' );
    $next_url = $thumb['0']; ?>

    <div class="other-articles-container next-article col-md-6">
        <div class="article-content data-href" data-href="<?php echo get_permalink(get_next_post(true)); ?>">
            <h2><?php echo $nextPost->post_title ?></h2>
            <div class="other-link"><?php echo $read_article; ?></div>
            <div class="article-bg" style="background-image:url('<?php echo $next_url; ?>')"></div>
        </div>
    </div>

<?php } ?>