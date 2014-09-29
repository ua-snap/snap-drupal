// Home page sticky menu
(function($) {
  // Fire when DOM is ready, or elements are missing.
  $( function() {

    var homeNavbarHeight = $('#nav-sticky').outerHeight();
    var nonhomeNavbarHeight = $('body.not-front #navbar').height();
    var offsetHeight = homeNavbarHeight > nonhomeNavbarHeight ? homeNavbarHeight : nonhomeNavbarHeight;
    $('#nav-wrapper').css('min-height', offsetHeight);

    $('#navbar-sticky').affix({
            offset: {
              top: $('#masthead').outerHeight()
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