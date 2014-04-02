// Home page sticky menu
(function($) {
  // Fire when DOM is ready, or elements are missing.
  $( function() {
    $('#navbar-sticky').affix({
            offset: {
              top: $('#masthead').height()
            }
      });
  });
}(jQuery));