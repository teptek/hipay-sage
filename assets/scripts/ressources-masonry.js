// career masonry filter


jQuery(document).ready(function($) {

    $('#ressources-masonry').multipleFilterMasonry({
        itemSelector: '.vc_row',
        filtersGroupSelector:'.masonry-filter',
        selectorType: 'list',
        gutter: 25
    });

});