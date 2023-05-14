$(function() {
    $(".licznik2 > span").each(function() {
        $(this)
        .data("width", $(this).width())
        .width(0)
        .animate({
            width: $(this).data("width")
        }, 1500);
    });
});