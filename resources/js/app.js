require('bootstrap');

// NAVBAR SCROLL

$(function() {
    console.log("in ready");
    // Transition effect for navbar 
    $(window).on("scroll",(function() {

      // checks if window is scrolled more than 500px, adds/removes solid class
    if($(this).scrollTop() > 500) { 
        $('.navbar').addClass('solid');
    } else {

        $('.navbar').removeClass('solid');
    }
    }));
});