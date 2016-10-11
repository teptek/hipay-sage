// career masonry filter


jQuery(document).ready(function($) {

    $('#masonry-container').multipleFilterMasonry({
        itemSelector: '.item',
        filtersGroupSelector:'.masonry-filter',
        selectorType: 'list',
        gutter: 25
    });

});