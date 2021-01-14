// Om man trycker på valfri tagg som har class ajax då ladda in funktionen Loader
$(function () {
  $(document)
    .unbind("click")
    .on("click", ".ajax", () => {
      $(".ajaxRequest")!.empty();
      loader($(this).attr("data-ajax")!);
    });
  // Om man trycker på valfri knapp som har input submit och då skickas formulärdata till request mappens filer
  $(document)
    .unbind("submit")
    .on(
      "submit",
      "form",
      (event: JQuery.SubmitEvent<Document, undefined, any, any>) => {
        event.preventDefault();
        $.ajax({
          url: "includes/requests/" + $(this).attr("action") + ".php",
          type: "POST",
          data: $(this).serialize(),
        }).done((data) => {
          $(".ajaxRequest")!.empty().append(data);
        });
      }
    );
});
// Ladda in innehållet från pages mappens filer
const loader = (target: string) => {
  const req = $("[data-ajax='" + target + "']")!.attr("data-post");

  $.ajax({
    url: "includes/loader.php",
    type: "POST",
    data: "page=" + target + "&request=" + req,
  }).done((data) => {
    $(".ajaxLoader")!.empty().append(data);
  });
};
