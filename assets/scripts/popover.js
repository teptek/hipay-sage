jQuery(document).ready(function($) {
    $('[data-toggle="popover"]').popover().on('click', function (e) {
        $('.size-full').not(this).popover('hide');
    });
});