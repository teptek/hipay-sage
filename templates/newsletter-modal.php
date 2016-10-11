<?php

$site_lang = get_bloginfo('language');
$page_name = $post->ID;

// switch lang footer cta

if ($site_lang == 'fr-FR') {
    $post_id = 3268;
    $shortcode = '[contact-form-7 id="5349" title="Subscribe to our newsletter"]';
}
else {
    $shortcode = '[contact-form-7 id="5349" title="Keep in touch"]';
    $modal_title = 'Keep in touch';
}

$queried_post = get_post($post_id);
$title = $queried_post->post_title;
?>

<div class="modal fade" tabindex="-1" role="dialog" id="newsForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><?php echo $modal_title; ?></h2>
                <h5>Subscribe to our newsletter</h5>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode( $shortcode ); ?>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->