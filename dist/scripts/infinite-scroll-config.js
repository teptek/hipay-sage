jQuery(document).ready(function(e){var n=e(".article-container");n.infinitescroll({navSelector:".wp-prev-next",nextSelector:".next a",itemSelector:"article.post",debug:!0,loading:{msgText:"Chargement des contenus...",finishedMsg:"Aucun contenu à charger.",img:"http://i.imgur.com/6RMhx.gif"}},function(t){var i=e(t).css({opacity:0});i.imagesLoaded(function(){i.animate({opacity:1}),n.masonry("appended",i,!0)})}),console.log("scroll"),e(window).unbind(".infscr"),jQuery(".next a").click(function(){return jQuery(".article-container").infinitescroll("retrieve"),!1}),e(document).ajaxError(function(n,t,i){404==t.status&&e(".next a").remove()})});
//# sourceMappingURL=infinite-scroll-config.js.map
