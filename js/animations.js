$("h3").on({
    'mouseover': function() {
        $(this).stop().animate({opacity: 0.5}, 500);
    },
    'mouseout': function() {
        $(this).stop().animate({opacity: 1}, 500);
    }
});