jQuery(document).ready(function($) {
    $('li[role="presentation"]').on( "click", function() {
        !window.vc_iframe&&vc_round_charts()
    });
});