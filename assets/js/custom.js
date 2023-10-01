jQuery('.gallery').each(function() { // the containers for all your galleries
    jQuery(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
});

var text_rotator = function () {
  /**
   * Text rotator
   */
  jQuery(".js-rotating").Morphext({
    // The [in] animation type. Refer to Animate.css for a list of available animations.
    animation: mybibibig_js_settings.hero_animation,
    // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
    separator: "|",
    // The delay between the changing of each phrase in milliseconds.
    speed: parseInt(mybibibig_js_settings.hero_speed),
    complete: function () {
      // Called after the entrance animation is executed.
    }
  });
};

text_rotator();