(function ($, Drupal, window, document) {
  'use strict';

  // Example of Drupal behavior loaded.
  Drupal.behaviors.themeJS = {
    attach: function (context, settings) {
      if (typeof context['location'] !== 'undefined') { // Only fire on document load.

        $("#ui-id-2").replaceWith("<span>Photo Gallery</span>");
        $("#ui-id-1").replaceWith("<span>Photo Gallery</span>");

        /***** PARALLAX BG IMAGE SCROLL *****/

        var parallax = $('.pre-content'),
          speed = 0.2;

        $(window).on("resize scroll",function(e) {
          var isMobile = /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || window.innerWidth < 980;

          if (!isMobile) {
            var windowYOffset = window.pageYOffset,
              backgroundPos = "50% " + (windowYOffset * speed) + "px";

            parallax.css('backgroundPosition', backgroundPos);
          }
        });


      }
    }
  };

})(jQuery, Drupal, this, this.document);