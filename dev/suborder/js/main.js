$(document).ready(function () {
    var x1, y1;
    x1 = $('#about').position().left;
    y1 = $('#about').position().top;

    if((navigator.userAgent.indexOf("Firefox") != -1)
        || (navigator.userAgent.indexOf("Chrome") != -1)){
        window.scrollTo(x1, y1);
    }
    else{
      $("html, body").animate({
        scrollTop: y1
      }, {duration: 800, queue: false});

      $("html, body").animate({
        scrollLeft: x1
      }, {duration: 800, queue: false});
    }
});
