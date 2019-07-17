jQuery(document).ready(function () {
  var $body = jQuery("body");
  jQuery(window).scroll(function () {
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 50) {
      $body.addClass("on-scroll");
    } else {
      $body.removeClass("on-scroll");
    }
  });
});
