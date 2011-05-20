(function ($) {
  Drupal.behaviors.social_facebook = {
    attach: function(context, settings) {
      FB.init({
         appId  : settings.canvas.appid,
         status : true, // check login status
         cookie : true, // enable cookies to allow the server to access the session
         xfbml  : true  // parse XFBML
       });
    }
  };
})(jQuery);
