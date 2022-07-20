$(document).ready(function () {
    $('.menu').click(function () {
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.sidebar').addClass('active');
            $('.content').css({ marginLeft: "16%" })
        } else {
            $('.sidebar').removeClass('active');
            $('.content').css({ marginLeft: "0px" })
        }
    });
});
