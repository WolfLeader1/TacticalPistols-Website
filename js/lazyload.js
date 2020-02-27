
$(function () {
    $('.modal').on("show.bs.modal", function () {
        $(this).find(".lazy").each(function () {
            $(this).attr('src', $(this).attr('data-src'));
        });
    });
});