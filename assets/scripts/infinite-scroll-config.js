jQuery( document ).ready( function( $ ) {
    var $container = $('.article-container');

    $container.infinitescroll({
        navSelector: '.wp-prev-next',
        nextSelector: '.next a',
        itemSelector: 'article.post',
        debug: true,
        loading: {
            msgText: 'Chargement des contenus...',
            finishedMsg: 'Aucun contenu à charger.',
            img: 'http://i.imgur.com/6RMhx.gif'
        }
    }, function (newElements) {
        var $newElems = $(newElements).css({
            opacity: 0
        });
        $newElems.imagesLoaded(function () {
            $newElems.animate({
                opacity: 1
            });
            $container.masonry('appended', $newElems, true);
        });
    });

    console.log('scroll');
    $(window).unbind('.infscr');
    jQuery(".next a").click(function () {
        jQuery('.article-container').infinitescroll('retrieve');
        return false;
    });
    $(document).ajaxError(function (e, xhr, opt) {
        if (xhr.status == 404) $('.next a').remove();
    });
});