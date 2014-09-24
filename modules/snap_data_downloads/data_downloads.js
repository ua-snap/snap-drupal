(function($) {

  jQuery(document).ready(function() {

      jQuery('.dataAccordion').each( function(index, element) { 
          jQuery(this).accordion({
            navigation: true,
            autoHeight: false,
            collapsible: true,
            active: false
            });
      });

      if( window.location.hash ) {
        jQuery.scrollTo($('a[href="'+window.location.hash+'"]'), 1000, { offset: -50 });
        window.location.hash = ''; // clear this to prevent user from seeing dissonance between url + opened folds
      }

  });

  jQuery('.metadataLink')
        .click( function(e) {

          jQuery('#metadataModal')
            .html('<iframe height="600px" width="100%" src="<?php echo Config::$geonetworkMetadataUrlBase; ?>'+$(e.target).data('geonetwork-metadata-id')+'"></iframe>')
            .dialog({
              draggable: false,
              resizable: false,
              title: 'Metadata',
              minWidth: 800,
              minHeight: 600,
              modal: true
            });
          return false; // prevent page reload
        });

}(jQuery));
