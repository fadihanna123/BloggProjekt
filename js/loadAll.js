// Om man trycker på valfri tagg som har class ajax då ladda in funktionen Loader
$(function () {
    var _this = this;
    $(document)
        .off("click")
        .on("click", ".ajax", function () {
        $(".ajaxRequest").empty();
        loader($("ajax").attr("data-ajax"));
    });
    // Om man trycker på valfri knapp som har input submit och då skickas formulärdata till request mappens filer
    $(document)
        .off("submit")
        .on("submit", "form", function (event) {
        event.preventDefault();
        $.ajax({
            url: "includes/requests/" + $(_this).attr("action") + ".php",
            type: "POST",
            data: $(_this).serialize()
        }).done(function (data) {
            $(".ajaxRequest").empty().append(data);
        });
    });
    // Ladda in innehållet från pages mappens filer
    var loader = function (target) {
        var req = $("[data-ajax='" + target + "']").attr("data-post");
        $.ajax({
            url: "includes/loader.php",
            type: "POST",
            data: "page=" + target + "&request=" + req
        }).done(function (data) {
            $(".ajaxLoader").empty().append(data);
        });
    };
});
