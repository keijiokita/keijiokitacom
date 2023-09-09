function PageTopAnime() {
  var scroll = $(window).scrollTop();
  if (scroll >= 200) {
    $("#page-top").removeClass("DownMove");
    $("#page-top").addClass("UpMove");
  } else {
    if ($("#page-top").hasClass("UpMove")) {
      $("#page-top").removeClass("UpMove");
      $("#page-top").addClass("DownMove");
    }
  }
}

$(window).scroll(function () {
  PageTopAnime();
});

$(window).on("load", function () {
  PageTopAnime();
});

$("#page-top a").click(function () {
  $("body,html").animate(
    {
      scrollTop: 0,
    },
    500
  );
  return false;
});

/* ios low power mode */

(function ($) {
  var $body,
    $detectVideo,
    isLowPowerMode = false;

  // low power mode?
  function judgeLowPowerMode() {
    var video_promise = $detectVideo.play();
    video_promise.catch(function (error) {
      isLowPowerMode = true;
      $body.addClass("low-power-mode");
      $detectVideo.removeAttribute("autoplay");
    });
  }

  // DOMContentLoaded
  $(function () {
    // DOM define
    $body = $("body");
    $detectVideo = document.getElementById("detect-video");

    // execute
    judgeLowPowerMode();
  });
})(jQuery);