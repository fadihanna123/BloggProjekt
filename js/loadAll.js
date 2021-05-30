"use strict";
// Om man trycker på valfri tagg som har class ajax då ladda in funktionen Loader
$(function () {
    $(document)
        .off("click")
        .on("click", ".ajax", () => {
        $(".ajaxRequest").empty();
        loader($("ajax").attr("data-ajax"));
    });
    // Om man trycker på valfri knapp som har input submit och då skickas formulärdata till request mappens filer
    $(document)
        .off("submit")
        .on("submit", "form", (event) => {
        event.preventDefault();
        $.ajax({
            url: "includes/requests/" + $(this).attr("action") + ".php",
            type: "POST",
            data: $(this).serialize(),
        }).done((data) => {
            $(".ajaxRequest").empty().append(data);
        });
    });
    // Ladda in innehållet från pages mappens filer
    const loader = (target) => {
        const req = $("[data-ajax='" + target + "']").attr("data-post");
        $.ajax({
            url: "includes/loader.php",
            type: "POST",
            data: "page=" + target + "&request=" + req,
        }).done((data) => {
            $(".ajaxLoader").empty().append(data);
        });
    };
});
