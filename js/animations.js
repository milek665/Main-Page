$(document).ready(function(){
    $('.loading').delay(3000).fadeOut("slow");
});

$("h3").on({
    'mouseover': function() {
        $(this).stop().animate({opacity: 0.5}, 500);
    },
    'mouseout': function() {
        $(this).stop().animate({opacity: 1}, 500);
    }
});

function clock(){
    now = new Date();
    let hours = now.getHours();
    let min = now.getMinutes();
    let sec = now.getSeconds();
    if (hours < 10){
        hours += "0";
    } 
    if (min < 10){
        min += "0";
    } 
    if (sec < 10){
        sec += "0";
    } 
    document.getElementById('time').innerHTML = hours + ":" + min + ":" + sec;
    setTimeout("clock()", 1000);
}

onLoad = clock();