
$(document).ready(function () {
    $('#taula').DataTable();

    $('.article').hide();
    $('.comment').hide();
    $('#deviceInfo').hide();

    $('.article').slideDown();
    $('.comment').slideDown();
    $('#deviceInfo').slideDown();




});

$(window).bind('scroll', function () {
    parallaxScroll();
});

function parallaxScroll() {
    var scrolled = $(window).scrollTop();
    $('#menu').css('top', maxTop() + 'px');
    function maxTop() {
        if ((85 - (scrolled) * .75) > 0) {
            return (85 - (scrolled) * .75);
        } else {
            return 0;
        }
    }
}
            