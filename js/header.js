$(document).ready(setTimeout(() => {
    $('.js-welcome-first').css({'visibility': 'hidden'});

    const secondEl = $('.js-welcome-second');
    secondEl.animate({left:'10px'}, 350);
    setTimeout(() => {
        secondEl.css({'padding': '0'});
    }, 500);

}, 1000));