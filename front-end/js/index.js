
$(document).ready(function () {

    $('#btn-home').on('click', function () {

        var scrollPos = $("#card-home").offset().top;
        $(window).scrollTop(scrollPos);
    });

    $('#btn-como-part').on('click', function () {
        var scrollPos = $("#card-como-part").offset().top;
        $(window).scrollTop(scrollPos);
    });

    $('#btn-premios').on('click', function () {
        var scrollPos = $("#card-premios").offset().top;
        $(window).scrollTop(scrollPos);
    });

    $('#btn-produtos-part').on('click', function () {
        var scrollPos = $("#card-produtos-part").offset().top;
        $(window).scrollTop(scrollPos);
    });

    // ↓ Não possuem card para dar foco ↓

    // $('#btn-receitas').on('click', function () {
    //      var scrollPos = $("#").offset().top;
    //     $(window).scrollTop(scrollPos);
    // });

    // $('#btn-pilulas').on('click', function () {
    //      var scrollPos = $("#").offset().top;
    //     $(window).scrollTop(scrollPos);
    // });

    // $('#btn-ganhadore').on('click', function () {
    //      var scrollPos = $("#").offset().top;
    //     $(window).scrollTop(scrollPos);

});