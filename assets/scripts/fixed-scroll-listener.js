(function($) {

    $(window).scroll(function(event){
        if($(window).scrollTop() + $(window).height() > $(document).height() - 300) {
            $('.last-articles-blog').css('display', 'none');
        } else {
            $('.last-articles-blog').css('display', 'block');
        }
    });

})(jQuery);