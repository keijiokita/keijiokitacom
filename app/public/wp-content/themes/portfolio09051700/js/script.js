/* iOS low power mode */
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



// page-top
window.addEventListener('scroll',() => {
  const pageTop = document.getElementById('page-top'); 
  if(window.pageYOffset >= 300) {  
    pageTop.classList.add('fadein'); 
  } else {
    pageTop.classList.remove('fadein');
  }
});