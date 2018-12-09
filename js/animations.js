$("h3").on({
    'mouseover': function() {
        $(this).stop().animate({opacity: 0.5}, 500);
    },
    'mouseout': function() {
        $(this).stop().animate({opacity: 1}, 500);
    }
});

$(document).ready(function(){
    $('.loading').delay(3000).fadeOut("slow");
});

function clock(){
    now = new Date();
    var hours = now.getHours();
    var min = now.getMinutes();
    var sec = now.getSeconds();
    if (hours < 10){
        hours = "0" + hours;
    } 
    if (min < 10){
        min = "0" + min;
    } 
    if (sec < 10){
        sec = "0" + sec;
    } 
    document.getElementById('time').innerHTML = hours + ":" + min + ":" + sec;
    setTimeout("clock()", 1000);
}

onLoad = clock();