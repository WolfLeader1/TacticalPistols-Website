$(document).ready(function () {
    $(document).foundation();
    $(document).on('open.fndtn.reveal', '[data-reveal]', function () {
        var modal = $(this);
        modal.find("img").each(function () {
            var elm = $(this);
            if (elm.data("src").length) {
                tewve.LazyLoadImage(elm);
            }
        });
    });
});

var tewve = (function () {
    var LazyLoadImage = function (sourceImage) {
        var dummyImage = document.createElement("img");
        dummyImage.src = sourceImage.data("src");
        dummyImage.style.display = "none";
        dummyImage.onload = function () {
            sourceImage.attr("src", dummyImage.src);
            sourceImage.removeAttr("data-src");
            $(dummyImage).remove();
        };
        document.body.appendChild(dummyImage);
    }
    return {
        LazyLoadImage: LazyLoadImage
    }
}());