$(document).ready(function() {
  // Filter Region
  $(".btn").click(function(e) {
    e.preventDefault();
    var name = $(this).attr("id");
    $(".todos").hide();
    $("." + name).show();
    $("#filter .btn").css({ opacity: 0.25 });
    $(this).css({ opacity: 1 });
  });

  //Data Video
  $(".link-video").click(function(e) {
    e.preventDefault();
    var urlVideo =
      "https://www.youtube.com/embed/" +
      $(this).attr("data-video-id") +
      "?autoplay=1";
    $("#video").attr("src", urlVideo);

    $(".overlay").show();
  });

  //Close Video
  $(".video--close, .overlay").click(function(e) {
    e.preventDefault();
    $(".overlay").hide();
  });
});
