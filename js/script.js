// Background effect

$(document).ready(() => {

    var movementStrength = 25;
    var height = movementStrength / $(window).height();
    var width = movementStrength / $(window).width();

    $(window).mousemove((e) => {
        var pageX = e.pageX - ($(window).width() / 2);
        var pageY = e.pageY - ($(window).height() / 2);
        var newValueX = width * pageX * -1 - 25;
        var newValueY = height * pageY * -1 - 50;
        $('.bg-container').css("background-position", newValueX + "px " + newValueY + "px");

    });

});



// Header 'Welcome' effect

$(document).ready(setTimeout(() => {

    $('.js-welcome-first').css({'visibility': 'hidden'});

    const secondEl = $('.js-welcome-second');
    secondEl.animate({left:'10px'}, 350);
    setTimeout(() => {
        secondEl.css({'padding': '0'});
    }, 500);

}, 1000));



// Form fill

$(document).ready(() => {
    
});