(function ($, Drupal, window, document) {
  'use strict';

  // Example of Drupal behavior loaded.
  Drupal.behaviors.themeJS = {
    attach: function (context, settings) {
      if (typeof context['location'] !== 'undefined') { // Only fire on document load.

        $("#ui-id-2").replaceWith("<span>Photo Gallery</span>");
        $("#ui-id-1").replaceWith("<span>Photo Gallery</span>");

      }
    }
  };

})(jQuery, Drupal, this, this.document);