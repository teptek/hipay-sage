jQuery(document).ready(function($) {
    $('.carousel').slick({
        autoplay: true,
        autoplaySpeed: 7000,
        fade: true,
        dots: true,
        infinite: true,
        speed: 500
    });
    $('.client-carousel').on('beforeChange', function (event, slick, nextSlide) {
        var dataId = nextSlide;
        $('#home-success').attr('bg-current', dataId);
    });
});