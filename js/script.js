$(document).ready(() => {
    // Background effect
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



    // Header 'Welcome' effect
    setTimeout(() => {

        $('.js-welcome-first').css({'visibility': 'hidden'});

        const secondEl = $('.js-welcome-second');
        secondEl.animate({left:'5px'}, 350);
        setTimeout(() => {
            secondEl.css({'padding': '0'});
        }, 500);

    }, 1000)



    // Form fill
    $('.js-form-fill').click(() => {
        $('#js-name-el').val('guest');
        $('#js-pass-el').val('guest');
    });

});