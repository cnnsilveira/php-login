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