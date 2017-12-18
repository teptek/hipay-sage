<?php
$event_text = get_post_meta($post->ID, "event_text", true);
$event_cta_text = get_post_meta($post->ID, "event_cta_text", true);
$event_cta_url = get_post_meta($post->ID, "event_cta_url", true);
?>

<?php if($event_text != '') {?>

    <div class="event-module">
        <div class="container">
            <div class="event-text"><?php echo $event_text ;?></div>
            <div class="event-cta">
                <a class="event-cta-link" href="<?php echo $event_cta_url ;?>"><?php echo $event_cta_text ;?></a>
            </div>
        </div>
    </div>

    <?php add_action( 'body_class', 'my_custom_class');
        function my_custom_class( $classes ) {
            // Add custom class
            $classes[] = 'event-module-body';
            return $classes;
        }
    ?>

<?php } ?>