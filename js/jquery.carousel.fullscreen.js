/******************************************************************************
Transforms the basic Twitter Bootstrap Carousel into Fullscreen Mode
@author Fabio Mangolini
     http://www.responsivewebmobile.com
******************************************************************************/
jQuery(document).ready(function() {

$('.carousel').carousel({
    pause: false,
    interval: 7000
   
});
var totalHeight = $(window).outerHeight();
/* totalHeight = totalHeight - 120; */


$('.carousel').css({'margin': 0, 'width': $(window).outerWidth(), 'height':totalHeight});
$('.carousel .item').css({ 'width': '100%', 'height':totalHeight});
$('.carousel-inner div.item img').each(function() {
var imgSrc = $(this).attr('src');
$(this).parent().css({'background': 'url('+imgSrc+') center top no-repeat', '-webkit-background-size': '100%', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover'});
$(this).remove();
});

$(window).on('resize', function() {
$('.carousel').css({'width': $(window).outerWidth(), 'max-height': totalHeight});
});

}); 
