<?php

$site_lang = get_bloginfo('language');
$page_name = $post->ID;

// switch lang footer cta

if ($site_lang == 'fr-FR') {
    $post_id = 6600;
    $shortcode = '[contact-form-7 title="Newsletter fr"]';
    $modal_title = 'Restons en contact';
    $modal_title2 = 'Inscrivez-vous à la newsletter';
    $modal_form = 'subscribe-form-fr.php';
}
elseif ($site_lang == 'it-IT') {
    $post_id = 6600;
    $shortcode = '[contact-form-7 title="Iscriviti alla newsletter"]';
    $modal_title = 'Teniamoci in contatto';
    $modal_title2 = 'Iscriviti alla newsletter';
    $modal_form = 'subscribe-form-en.php';
}
else {
    $shortcode = '[contact-form-7 id="5349" title="Newsletter en"]';
    $modal_title = 'Keep in touch';
    $modal_title2 = 'Subscribe to our newsletter';
    $modal_form = 'subscribe-form-en.php';
}

$queried_post = get_post($post_id);
$title = $queried_post->post_title;
?>

<div class="modal fade" tabindex="-1" role="dialog" id="newsForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><?php echo $modal_title; ?></h2>
                <h5><?php echo $modal_title2; ?></h5>
            </div>
            <div class="modal-body">
                <?php include "$modal_form"?>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->