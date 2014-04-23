// Home page sticky menu
(function($) {
  // Fire when DOM is ready, or elements are missing.
  $( function() {
    $('#navbar-sticky').affix({
            offset: {
              top: $('#masthead').height()
            }
      });

    $('body.not-front #navbar').affix({
        offset: {
          top: 0
        }
    });

    $(window).resize(function () {
        $('body.not-front #navbar').width($('body').width());
    });
    $(window).scroll(function () {
        $('body.not-front #navbar').width($('body').width());
    });

  });
}(jQuery));