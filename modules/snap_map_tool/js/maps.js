/*jshint laxbreak:true */

// Global mapping variables
var map;

window.snap = {};

_.mixin({
  'isFalsy' : function(v) {
    return _.isUndefined(v) || _.isNull(v) || _.isEmpty(v) || _.isNaN(v);
  }
});

snap.defaults = {
  interval: 'decadalAverages',
  range: '2050-2059',
  variable: 'temperature',
  scenario: 'A1B',
  zoom: 3,
  latitude: 65,
  longitude: -145
};


snap.submenus = {
  'intervals' : {
    'prefix' : 'as',
    'defaultText' : 'Please choose a period.',
    'items': {
      'decadalAverages' : {
        'name' : '10&ndash;year averages',
        'description' : 'Decadal averages, for example, the mean value across 2010&ndash;2019.'
      },
      'spring' : {
        'name' : 'spring averages',
        'description' : 'Averages across March, April, and May'
      },
      'summer' : {
        'name' : 'summer averages',
        'description' : 'Averages across June, July, and August'
      },
      'fall' : {
        'name' : 'fall averages',
        'description' : 'Averages across September, October, and November'
      },
      'winter' : {
        'name' : 'winter averages',
        'description' : 'Averages across December, January, and February'
      }
    }
  },
  'observedIntervals' : {
    'prefix' : 'as',
    'defaultText' : 'Please choose a period.',
    'items': {
      'decadalAverages' : {
        'name' : '30&ndash;year averages',
        'description' : 'Decadal averages across 1961&ndash;1990'
      },
      'spring' : {
        'name' : 'spring averages',
        'description' : 'Averages across March, April, and May'
      },
      'summer' : {
        'name' : 'summer averages',
        'description' : 'Averages across June, July, and August'
      },
      'fall' : {
        'name' : 'fall averages',
        'description' : 'Averages across September, October, and November'
      },
      'winter' : {
        'name' : 'winter averages',
        'description' : 'Averages across December, January, and February'
      }
    }
  },
  'nonseasonalIntervals' : {
    'prefix' : 'as',
    'renderer' : {
      // needs to return prefix: and title:
      getTitleJson : function() {
        return {
          prefix:'',
          title:'as 10&ndash;year averages'
        };
      },
      getContent : function() {
        return '<p style="margin: 1ex">Decadal averages, for example, the mean value across 2010-2019.</p>';
      }
    }
  },
  'nonseasonalObservedIntervals' : {
    'prefix' : 'as',
    'renderer' : {
      // needs to return prefix: and title:
      getTitleJson : function() {
        return {
          prefix:'',
          title:'as 30&ndash;year averages'
        };
      },
      getContent : function() {
        return '<p style="margin: 1ex">Decadal averages across 1961&ndash;1990.</p>';
      }
    }
  },
  'ranges' :  {
    'commaAfter' : true,
    'prefix' : 'from',
    'defaultText' : 'Please choose a decade.',
    items: {
      '2010-2019' : {
        'name' : '2010&ndash;2019',
        'description' : 'Mean value across 2010&ndash;2019'
      },
      '2020-2029' : {
        'name' : '2020&ndash;2029',
        'description' : 'Mean value across 2020&ndash;2029'
      },
      '2030-2039' : {
        'name' : '2030&ndash;2039',
        'description' : 'Mean value across 2030&ndash;2039'
      },
      '2040-2049' : {
        'name' : '2040&ndash;2049',
        'description' : 'Mean value across 2040&ndash;2049'
      },
      '2050-2059' : {
        'name' : '2050&ndash;2059',
        'description' : 'Mean value across 2050&ndash;2059'
      },
      '2060-2069' : {
        'name' : '2060&ndash;2069',
        'description' : 'Mean value across 2060&ndash;2069'
      },
      '2070-2079' : {
        'name' : '2070&ndash;2079',
        'description' : 'Mean value across 2070&ndash;2079'
      },
      '2080-2089' : {
        'name' : '2080&ndash;2089',
        'description' : 'Mean value across 2080&ndash;2089'
      },
      '2090-2099' : {
        'name' : '2090&ndash;2099',
        'description' : 'Mean value across 2090&ndash;2099'
      }
    }
  },
  'historicalRange' : {
    'prefix' : '',
    'renderer' : {
      // needs to return prefix: and title:
      getTitleJson : function() {
        return {
          prefix:'',
          title:'1961&ndash;1990'
        };
      },
      getContent : function() {
        return '<p>Data averaged over 1961&ndash;1990.</p>';
      }
    }
  },
  'historicalInterval' : {
    'prefix' : '',
    'renderer' : {
      getTitleJson : function() {
        return {
          prefix: 'as',
          title: '30 year average'
        };
      },
      getContent : function() {
        return '<p></p>';
      }
    }
  },
  'scenarios' :  {
    'commaAfter' : true,
    'prefix' : 'assuming',
    'defaultText' : 'Please choose a scenario.',
    items: {
      'A2' : {
        'name' : 'rapid increases in emissions (<span>A2</span>)',
        'description' : 'The A2 scenario describes a heterogeneous world with high population growth, slow economic development and slow technological change.'
      },
      'A1B' : {
        'name' : 'mid&ndash;range emissions (<span>A1B</span>)',
        'description' : 'The A1B scenario assumes a world of rapid economic growth, a global population that peaks mid-century, rapid introduction of new and more efficient technologies, and a balance between fossil fuels and other energy sources.'
      },
      'B1' : {
        'name' : 'leveling or declining emissions (<span>B1</span>)',
        'description' : 'The B1 scenario describes a convergent world, with the same global population as A1B, but with more rapid changes in economic frameworks toward a service and information economy.'
      }
    }
  },
  'resolution' : {
    'commaAfter' : true,
    'prefix' : '',
    'renderer' : {
      getTitleJson : function() {
        return {
          prefix: 'at',
          title: '2km resolution'
        };
      },
      getContent : function() {
        return '<p style="margin: 1ex;">Data has been downscaled to 2&times;2 km spatial resolution. <a href="downscaling.php">More info&hellip;</a></p>';
      }
    }
  },
  'model' : {
    'commaAfter' : true,

    // This will insert a <br/> before this submenu is rendered to force it to a new line.
    'breakBefore' : true,
    'prefix' : '',
    'renderer' : {
      getTitleJson : function() {
        return {
          prefix: 'from the',
          title: '5-model average'
        };
      },
      getContent : function() {
        return '<p style="margin: 1ex;">Data is an average of 5 GCM&rsquo;s. <a href="/downscaling.php#model_selection">More info&hellip;</a></p>';
      }
    }
  }
};


// Define menu structure
snap.menus = {
  'variable' : {
    prefix: '',
    defaultText: 'Please choose a variable.',
    items: {
      'observedTemperature' : {
        'name' : 'Historical PRISM Average Temperature',
        'description' : 'This is average annual temperature for the given date range calculated by averaging over each year and then over the given date range. &ldquo;Average Temperature&rdquo; is actually the midrange temperature of maximum and minimum temperatures recorded by weather stations. Midrange is considered an acceptable surrogate for average temperature, as most weather stations do not record average temperatures.',
        'submenus' : {
          'interval' : window.snap.submenus.observedIntervals,
          'historical' : window.snap.submenus.historicalRange,
          'resolution' : window.snap.submenus.resolution
        },
        'metadataId' : false
      },
      'observedPrecipitation' : {
        'name' : 'Historical PRISM Total Precipitation',
        'description' : 'This is average total annual precipitation (rain and snow water equivalent) for the given range. This is calculated by finding the sum of precipitation for each year, and then averaging over the given date range.',
        'submenus' : {
          'interval' : window.snap.submenus.observedIntervals,
          'historical' : window.snap.submenus.historicalRange,
          'resolution' : window.snap.submenus.resolution
        },
        'metadataId' : false
      },
      'observedDayOfFreeze' : {
        'name' : 'Historical PRISM Day of Freeze',
        'description' : 'Estimated day where consecutive monthly midpoint temperatures transition from positive to negative, indicating the day of freeze.',
        'submenus' : {
          'historicalInterval' : window.snap.submenus.nonseasonalObservedIntervals,
          'historical' : window.snap.submenus.historicalRange,
          'resolution' : window.snap.submenus.resolution
        },
        'metadataId' : false
      },
      'observedDayOfThaw' : {
        'name' : 'Historical PRISM Day of Thaw',
        'description' : 'Estimated day where consecutive monthly midpoint temperatures transition from negative to positive, indicating the day of thaw.',
        'submenus' : {
          'historicalInterval' : window.snap.submenus.nonseasonalObservedIntervals,
          'historical' : window.snap.submenus.historicalRange,
          'resolution' : window.snap.submenus.resolution
        },
        'metadataId' : false
      },
      'observedLengthOfGrowingSeason' : {
        'name' : 'Historical PRISM Length of Growing Season',
        'description' : 'Estimated number of days between day of thaw and day of freeze.',
        'submenus' : {
          'historicalInterval' : window.snap.submenus.nonseasonalObservedIntervals,
          'historical' : window.snap.submenus.historicalRange,
          'resolution' : window.snap.submenus.resolution
        },
        'breakAfter' : true,
        'metadataId' : false
      },
      'temperature' : {
        'name' : 'Projected GCM Average Temperature',
        'description' : 'This is average annual temperature for the given date range.  This is calculated by averaging over each year and then averaging over the given date range.',
        'submenus' : {
          // 'key' => 'value', where key is the same as the key in the window.snap.state object.
          'interval' : window.snap.submenus.intervals,
          'range' : window.snap.submenus.ranges,
          'scenario' : window.snap.submenus.scenarios,
          'model' : window.snap.submenus.model,
          'resolution' : window.snap.submenus.resolution
        },
        'metadataId' : {
          'decadal' : 20,
          'seasonal' : 24
        }
      },
      'precipitation' : {
        'name' : 'Projected GCM Total Precipitation',
        'description' : 'This is average total annual precipitation (rain and snow water equivalent) for the given range. This is calculated by finding the sum of precipitation for each year, and then averaging over the given date range.',
        'submenus' : {
          'interval' : window.snap.submenus.intervals,
          'range' : window.snap.submenus.ranges,
          'scenario' : window.snap.submenus.scenarios,
          'model' : window.snap.submenus.model,
          'resolution' : window.snap.submenus.resolution
        },
        'metadataId' : {
          'decadal' : 21,
          'seasonal' : 25
        }
      },
      'dayOfFreeze' : {
        'name' : 'Projected GCM Day of Freeze',
        'description' : 'Estimated day where consecutive monthly midpoint temperatures transition from positive to negative, indicating the day of freeze.',
        'submenus' : {
          'interval' : window.snap.submenus.nonseasonalIntervals,
          'range' : window.snap.submenus.ranges,
          'scenario' : window.snap.submenus.scenarios,
          'model' : window.snap.submenus.model,
          'resolution' : window.snap.submenus.resolution
        },
        'metadataId' : 19
      },
      'dayOfThaw' : {
        'name' : 'Projected GCM Day of Thaw',
        'description' : 'Estimated day where consecutive monthly midpoint temperatures transition from negative to positive, indicating the day of thaw.',
        'submenus' : {
          'interval' : window.snap.submenus.nonseasonalIntervals,
          'range' : window.snap.submenus.ranges,
          'scenario' : window.snap.submenus.scenarios,
          'model' : window.snap.submenus.model,
          'resolution' : window.snap.submenus.resolution
        },
        'metadataId' : 19
      },
      'lengthOfGrowingSeason' : {
        'name' : 'Projected GCM Length of Growing Season',
        'description' : 'Estimated number of days between day of thaw and day of freeze.',
        'submenus' : {
          'interval' : window.snap.submenus.nonseasonalIntervals,
          'range' : window.snap.submenus.ranges,
          'scenario' : window.snap.submenus.scenarios,
          'model' : window.snap.submenus.model,
          'resolution' : window.snap.submenus.resolution
        },
        'metadataId' : 26
      }
    }
  }
};


// The intent of these 'renderers' is to build up a list of menus from a (possibly)
// ragged list of suboptions.  This was ported from PHP to JS so that the native
// GUI client runs faster, and to keep all the domain knowledge in one spot.
snap.renderers = {

  // for e and i definitions, see the _.each() loop that provides data.
  // optionsList is a jQuery ul object.
  'renderListItem' : function(e, i, source, category, optionsList) {

    optionsList.append($('<li/>', {
      'class' : ( i === window.snap.state[category] ) ? 'active' : ''
    })
    .click(function(e) {
      // swap out the map on click
      $('.menuOptions').hide();
      $('.menuSpacer').removeClass('menuSpacerToggle');
      window.snap.state[$(this).data('category')] = $(this).data('option');
      validateState();
      addMap();
    })
    .data('category', category)
    .data('option', i)
    .html(e.name)
    .hover(

      function(e) {
        $('.menuOptions :visible').parent().height(  );
        var category = $(e.currentTarget).data('category');
        var option = $(e.currentTarget).data('option');
        $('#' + category + '_descriptions').find('p').html(source.items[option].description);
        
        // Correct the height if the rendered content is not the right size.
        // todo: do this with CSS, no javascript
        var textHeight = $('#' + category + '_descriptions').find('p').height();
        var wrapperHeight = $('.active .menuOptions').height();

        if( wrapperHeight < textHeight ) {
          $('.active .menuOptions').height(textHeight + 16 ); // increase height + 8px padding
        }

      },
      function(e) {
        var category = $(e.currentTarget).data('category');
        $('#' + category + '_descriptions').find('p').html(source.defaultText);
      }

    ));
    
    if( true === e.breakAfter ) {
      optionsList.append('<hr/>');
    }
  },
  //todo: make this into a single object, refactor to smaller methods
  // This method is responsible for taking a menu object and painting it.  If defined,
  // the renderer methods are called on the object to handle varying cases.
  'standard' : function(el, category, source) {

    // Will be used to aggregate a title for the map suitable for printing.
    var titleString = '';

    var wrapper = $('<div/>', {
      'class' : 'wrapper'
    });

    var titleJson = ( _.isObject(source.renderer) ) ? source.renderer.getTitleJson() : {
      prefix: source.prefix,
      title: source.items[window.snap.state[category]].name
    };

    var title = $(
      _.template(
        '<h4 class="menuOption" data-variable="variable"><%= prefix %> <%= title %></h4>'
        + '<div class="menuSpacer"></div>'
        , titleJson
      )
    )
    // assign the necessary hooks to the parent element
    .data('category', category)
    // show the menu
    .click(
      function(e) {

        e.stopPropagation();
        $('.menuOptions').hide();
        $('.menuSpacer').removeClass('menuSpacerToggle');
        var el = $(this);

        if( false === ( el.parent().hasClass('active') ) ) {
          el.parent().addClass('active');
          el.parent().find('.menuSpacer').addClass('menuSpacerToggle');
          var content = $('#' + el.data('category') + '_content').show();

          // If the menu juts out the right side of the browser window, move it.
          if(content.outerWidth() + content.offset().left > $(window).width() ) {
            content.css('right', '1em');
          }

        } else {
          el.parent().removeClass('active');
        }
      }
    ).hover(
      function(e) {
        $(this).parent().find('.menuSpacer').css('opacity', 1.0);
      },
      function(e) {
        $(this).parent().find('.menuSpacer').css('opacity', 0.5);
      }
    );

    var content = $('<div/>', {
      'class' : 'menuOptions',
      'id' : category + '_content',
      'style' : 'display: none;'
    });

    if( _.isObject(source.renderer) ) {
      content.append(source.renderer.getContent());
    } else {
      content.append(
        $('<div/>', {
          'class' : 'descriptions',
          'id' : category + '_descriptions'
        })
        .data('category', category)
        .append(
          $('<p/>')
          .html(source.defaultText)
        )
      );

      var optionsList = $('<ul/>');

      _.each(source.items, function(e, i, l) {
        window.snap.renderers.renderListItem(e, i, source, category, optionsList);
      }, this);

      content.append(optionsList);
    }

    el.append(wrapper.append(title).append(content));
    
    // To enable the text string describing the map to be built
    return titleJson;
  }
};

function buildMenus() {

  $('#mapMenu').empty();

  // build the variables menu, always
  window.snap.renderers.standard($('#mapMenu'), 'variable', window.snap.menus.variable);

  // get the active variable and render its submenus
  _.each(window.snap.menus.variable.items[window.snap.state.variable].submenus, function(e, source, l) {
    if( true === e.breakBefore ) {
      $('#mapMenu').append('<br/>');
    }
    window.snap.renderers.standard($('#mapMenu'), source, e);
  });

  // Resize the map here?  Why?
  // TODO BBQ
  resize();
}

// Manage changes to application state here.
function writeHash() {

  // Update the lat/lon/zoom.
  window.snap.state.zoom = map.getZoom();
  window.snap.state.latitude = map.getCenter().lat();
  window.snap.state.longitude = map.getCenter().lng();
  
  // Update the URL hash.
  $.bbq.pushState(window.snap.state);

  // Update link field
  $('#link_field').val(window.location.href);

  // update the link to the metadata, if needed
  var metadataId = false;
  if( true === _.isObject(window.snap.menus.variable.items[window.snap.state.variable].metadataId )) {
    if( 'decadalAverages' === window.snap.state.interval ) {
      metadataId = window.snap.menus.variable.items[window.snap.state.variable].metadataId['decadal'];
    } else {
      metadataId = window.snap.menus.variable.items[window.snap.state.variable].metadataId['seasonal'];
    }
  } else if( false !== window.snap.menus.variable.items[window.snap.state.variable].metadataId ) {
    metadataId = window.snap.menus.variable.items[window.snap.state.variable].metadataId;
  } else {
    // This case should explicitly hide the metadata link -- for Historical data sets
    metadataId = false;
  }

  // Wire up the modal, if there is metadat to show with this model.
  if(false === metadataId ) {
    $('#metadataLink').hide();
  } else {
    $('#metadataLink')
      .show()
      .on('click', function(e) {
        $('#metadataModal')
          .html('<iframe height="600px" width="100%" src="https://athena.snap.uaf.edu:8080/geonetwork/srv/en/metadata.show.embedded?id='+metadataId+'"></iframe>')
          .dialog({
            draggable: false,
            resizable: false,
            title: 'Metadata',
            minWidth: 800,
            minHeight: 600,
            modal: true
          });
      });
  }
}

// Produce an HTML legend for display on the map.
function drawLegend() {

  try {

    // yuck, but, this maintains the 'keys' between the static data.
    var legendKey = window.snap.mapUrls[window.snap.state.variable].prefix;
    if( false === _.isUndefined(window.snap.mapUrls[window.snap.state.variable][window.snap.state.interval]) ) {
      legendKey += '_'
      + window.snap.mapUrls[window.snap.state.variable][window.snap.state.interval];
    }

    if( _.isUndefined(legendKey) ) {
      throw 'Data set not defined when trying to draw legend.';
    }
    var legend = window.snap.mapLegends[legendKey];

    var el = $('#legend_wrapper').empty().append(_.template('<h4><%= title %></h4>', legend));
    var table = $('<table/>');
    _.each(legend.colors, function(e, i) {
      $('<tr/>')
        .append(_.template(
          '<td style="background-color: <%= color %>"><img style="height: 17px;" src="images/colors/<%= file %>.gif"/></td>'
          + '<td><%= range %></td>'
          , { color: '#' + e, file: e, range: i }
        ))
        .appendTo(table);
    });
    el.append(table).show();

  } catch(e) {

    $('#legend_wrapper').hide();

  }
}

// Some combinations of map variables aren't valid.  Fix them here if necessary.
function validateState() {

  switch( window.snap.state.variable ) {
    
    // these three data sets don't allow range, scenario, or interval choices
    case 'observedDayOfThaw': // fallthru
    case 'observedDayOfFreeze': // fallthru
    case 'observedLengthOfGrowingSeason': // fallthru
      window.snap.state.scenario = '';
      window.snap.state.range = '';
      window.snap.state.interval = 'decadalAverages';
      writeHash();
      break;

    // these data sets don't allow range, or scenario choices
    case 'observedPrecipitation': // fallthru
    case 'observedTemperature': // fallthru
      if(_.isFalsy(window.snap.state.interval)) {
        window.snap.state.interval = window.snap.state.defaults.interval;
      }
      window.snap.state.scenario = '';
      window.snap.state.range = '';
      writeHash();
      break;

    // these variables only allow one range, decadalVerages
    case 'dayOfFreeze': //fallthru
    case 'dayOfThaw': //fallthru
    case 'lengthOfGrowingSeason': //fallthru

      if(_.isFalsy(window.snap.state.scenario)) {
        window.snap.state.scenario = window.snap.defaults.scenario;
      }
      if(_.isFalsy(window.snap.state.range)) {
        window.snap.state.range = window.snap.defaults.range;
      }

      window.snap.state.interval = 'decadalAverages';
      writeHash();
      break;

    case 'temperature'://fallthru
    case 'precipitation':

      if(_.isFalsy(window.snap.state.interval)) {
        window.snap.state.interval = window.snap.defaults.interval;
      }

      if(_.isFalsy(window.snap.state.scenario)) {
        window.snap.state.scenario = window.snap.defaults.scenario;
      }

      if(_.isFalsy(window.snap.state.range)) {
        window.snap.state.range = window.snap.defaults.range;
      }
      writeHash();
      break;

    default:
      break;
  }
}

// Adds a new map layer overlay, based on current user settings
function addMap() {

  // Update URL with new map
  $.bbq.pushState(snap.state);

  var tilepath;
  switch(window.snap.state.variable) {
    // these data sets have a different pattern for constructing the URLs.
    // better fix: template it.
    case 'observedDayOfThaw': // fallthru
    case 'observedDayOfFreeze': // fallthru
    case 'observedLengthOfGrowingSeason': // fallthru
      tilepath = window.snap.mapUrls.baseUrl
        + window.snap.mapUrls[window.snap.state.variable].prefix
        + window.snap.mapUrls.urlSuffix;
      break;
            
    case 'observedPrecipitation': // fallthru
    case 'observedTemperature': // fallthru
      tilepath = window.snap.mapUrls.baseUrl
        + window.snap.mapUrls[window.snap.state.variable].prefix
        + '_'
        + window.snap.mapUrls[window.snap.state.variable][window.snap.state.interval]
        + window.snap.mapUrls.urlSuffix;
      break;
    
    default:
      tilepath = window.snap.mapUrls.baseUrl
        + window.snap.mapUrls[window.snap.state.variable].prefix
        + '_'
        + window.snap.mapUrls[window.snap.state.variable][window.snap.state.interval]
        + window.snap.mapUrls[window.snap.state.variable].postfix
        + '_'
        + window.snap.mapUrls.scenarios[window.snap.state.scenario]
        + '_'
        + window.snap.state.range.replace('-','_')
        + window.snap.mapUrls.urlSuffix;
      break;
  }
  
  window.snap.map = new google.maps.ImageMapType({
    getTileUrl: function(tile, zoom) {
      return tilepath + "/" + zoom + "/" + tile.x + "/" + tile.y + ".png";
    },
    tileSize: new google.maps.Size(256, 256),
    opacity: 0.75
  });

  map.overlayMapTypes.push(null); // create empty overlay entry
  map.overlayMapTypes.setAt("0", window.snap.map);

  gnames = new google.maps.ImageMapType({
    getTileUrl: function(a, z) {
      var tiles = 1 << z, X = (a.x % tiles);
      if(X < 0) { X += tiles; }
      return "https://mt0.google.com/vt/v=apt.116&hl=en-US&x=" +
      X + "&y=" + a.y + "&z=" + z + "&s=G&lyrs=h";
    },
    tileSize: new google.maps.Size(256, 256),
    isPng: false,
    maxZoom: 20,
    name: "lyrs=h",
    alt: "Hybrid labels"
  });

  map.overlayMapTypes.push(null); // create empty overlay entry
  map.overlayMapTypes.setAt("1",gnames );

  drawLegend();
  buildMenus();

}

/*
* Google Map initialization function
* Called on the initial page load.
* Sets up default map space, values, etc.
*/
function init() {

  map = new google.maps.Map(document.getElementById('map_canvas'), {

    zoom: window.snap.state.zoom,
    minZoom: 2,
    'center': new google.maps.LatLng(window.snap.state.latitude, window.snap.state.longitude),
    disableDefaultUI: true,
    navigationControl: true,
    navigationControlOptions: {
      position: google.maps.ControlPosition.RIGHT_TOP
    },
    scaleControl: true,
    mapTypeControl: true,
    mapTypeId: google.maps.MapTypeId.TERRAIN
  });

//  resize();
}

// called when the page is resized to resize the map to make it as large as possible
var resize = function() {

  var bodyHeight = $('body').height();
  var headerHeight = $('#map_header').height();
  var mapBarHeight = $('#map_menu_bar').height();
  var footerHeight = $('#map_footer').height();

  // +21px to get a bit of extra room below the footer.
  // Because many items are floating, the DOM doesn't quite give us what we expect
  // for the true wrapped height of the header.  todo/fix
  var availableHeight = bodyHeight - (headerHeight + footerHeight + mapBarHeight + 30);
  if (availableHeight > 0) {
    $("#map_canvas").height(availableHeight);
  }

  google.maps.event.trigger(map, 'resize');

};

snap.mapUrls = {
  'baseUrl' : 'https://tiles.snap.uaf.edu/tilecache/tilecache.py/2.11.0/',
  'urlSuffix' : '',

  'precipitation' : {
    'prefix' : 'pr',
    'decadalAverages' : 'decadal_mean_annual_total',
    'winter' : 'decadal_mean_DJF_total',
    'summer' : 'decadal_mean_JJA_total',
    'spring' : 'decadal_mean_MAM_total',
    'fall' : 'decadal_mean_SON_total',
    'postfix' : '_mm_5modelAvg'
  },

  'temperature' : {
    'prefix' : 'tas',
    'decadalAverages' : 'decadal_mean_annual_mean',
    'winter' : 'decadal_mean_DJF_mean',
    'summer' : 'decadal_mean_JJA_mean',
    'spring' : 'decadal_mean_MAM_mean',
    'fall' : 'decadal_mean_SON_mean',
    'postfix' : '_c_5modelAvg'
  },

  'dayOfFreeze' : {
    'prefix' : 'dof',
    'decadalAverages' : '5modelAvg',
    'postfix':''
  },

  'dayOfThaw' : {
    'prefix' : 'dot',
    'decadalAverages' : '5modelAvg',
    'postfix':''
  },

  'lengthOfGrowingSeason' : {
    'prefix' : 'logs',
    'decadalAverages' : '5modelAvg',
    'postfix':''
  },

  'observedTemperature' : {
    'prefix' : 'tas',
    'decadalAverages' : 'annual_mean_c_akcan_prism_1961_1990',
    'winter' : '30year_DJF_mean_c_akcan_prism_1961_1990',
    'summer' : '30year_JJA_mean_c_akcan_prism_1961_1990',
    'spring' : '30year_MAM_mean_c_akcan_prism_1961_1990',
    'fall' : '30year_SON_mean_c_akcan_prism_1961_1990'
  },

  'observedPrecipitation' : {
    'prefix' : 'pr',
    'decadalAverages' : '30year_mean_annual_total_mm_akcan_prism_1961_1990',
    'winter' : '30year_mean_DJF_total_mm_akcan_prism_1961_1990',
    'summer' : '30year_mean_JJA_total_mm_akcan_prism_1961_1990',
    'spring' : '30year_mean_MAM_total_mm_akcan_prism_1961_1990',
    'fall' : '30year_mean_SON_total_mm_akcan_prism_1961_1990'
  },
  'observedDayOfFreeze' : {
    'prefix' : 'dof_akcan_prism_1961_1990'
  },

  'observedDayOfThaw' : {
    'prefix' : 'dot_akcan_prism_1961_1990'
  },

  'observedLengthOfGrowingSeason' : {
    'prefix' : 'logs_akcan_prism_1961_1990'
  },

  'scenarios': {
    'A1B' : 'sresa1b',
    'A2' : 'sresa2',
    'B1' : 'sresb1'
  }
};

snap.mapLegends = {
'tas_decadal_mean_SON_mean' : { 'title':'Temperature (&deg;C)', 'colors' : {
  '9.6 to 16.2' : 'D62F27',
  '7.4 to 9.5' : 'E05138',
  '5.1 to 7.3' : 'EB6E4B',
  '2.9 to 5.0' : 'F2885E',
  '0.6 to 2.8' : 'F7A474',
  '-1.6 to 0.5' : 'FCC58D',
  '-3.9 to -1.7' : 'FFE3A6',
  '-6.1 to -4.0' : 'FFFFBF',
  '-8.4 to -6.2' : 'E3E8BE',
  '-10.6 to -8.5' : 'CAD4BE',
  '-12.9 to -10.7' : 'AEBDBC',
  '-15.1 to -13.0' : '95ACBD',
  '-17.4 to -15.2' : '7B98BA',
  '-19.6 to -17.5' : '6187B8',
  '-22.0 to -19.7' : '4575B5'}
},
'dof_5modelAvg' :  { 'title':'Date Range', 'colors' : {
  'Primarily Frozen' : 'E1E1E1',
  'Jan 1 &ndash; Oct 2' : 'F0E5CE',
  'Oct 3 &ndash; Oct 7' : 'E0CBA2',
  'Oct 8 &ndash; Oct 18' : 'D1B479', // absorb two categories in this bucket (RM544)
  'Oct 19 &ndash; Oct 22' : 'E0CF89',
  'Oct 23 &ndash; Oct 25' : 'F0E8A3',
  'Oct 26 &ndash; Oct 29' : 'FFFFBF',
  'Oct 30 &ndash; Nov 1' : 'D3F0B9',
  'Nov 2 &ndash; Nov 4' : 'AAE3B5',
  'Nov 5 &ndash; Nov 7' : '7DD4AE',
  'Nov 8 &ndash; Nov 11' : '61C2A0',
  'Nov 12 &ndash; Nov 18' : '57AD8E',
  'Nov 19 &ndash; Dec 30' : '4E9C7E',
  'Rarely Freezes' : '458A6F'
  }
},

'dot_5modelAvg' : { 'title':'Date Range', 'colors' :  {
  'Rarely Freezes' : '458A6F',
  'Jan 1 &ndash; Mar 20' : '4E9C7E',
  'Mar 21 &ndash; Mar 27' : '57AD8E',
  'Mar 28 &ndash; Mar 30' : '61C2A0',
  'Mar 31 &ndash; Apr 2' : '7DD4AE',
  'Apr 3 &ndash; Apr 6' : 'AAE3B5',
  'Apr 7 &ndash; Apr 12' : 'D3F0B9',
  'Apr 13 &ndash; Apr 16' : 'FFFFBF',
  'Apr 17 &ndash; Apr 19' : 'F0E8A3',
  'Apr 20 &ndash; Apr 23' : 'E0CF89',
  'Apr 24 &ndash; May 2' : 'D1B479', // two categories in this bucket (RM544)
  'Apr 3 &ndash; May 9' : 'E0CBA2',
  'May 10 &ndash; Dec 30' : 'F0E5CE',
  'Primarily Frozen' : 'E1E1E1'}
},

'logs_5modelAvg' :  { 'title':'# of Days &gt; 0&deg;C', 'colors' : {
  '0 to 24' : 'E1E1E1',
  '25 to 49' : 'F0E5CE',
  '50 to 73' : 'E0CBA2',
  '74 to 122' : 'D1B479', // merge two groups in this bucket (RM544)
  '123 to 146' : 'E0CF89',
  '147 to 170' : 'F0E8A3',
  '171 to 195' : 'FFFFBF',
  '196 to 219' : 'D3F0B9',
  '220 to 243' : 'AAE3B5',
  '244 to 268' : '7DD4AE',
  '269 to 292' : '61C2A0',
  '293 to 316' : '57AD8E',
  '317 to 341' : '4E9C7E',
  '342 to 365' : '458A6F'}
},

'pr_decadal_mean_annual_total': { 'title':'Total Precipitation (mm)', 'colors' : {
  '3294 to 15523' : '248391',
  '2323 to 3293' : '489499',
  '1643 to 2322' : '65A39E',
  '1254 to 1642' : '82B5A6',
  '963 to 1253' : 'A1C7AC',
  '768 to 962' : 'C2DBB4',
  '671 to 767' : 'E1EDB9',
  '574 to 670' : 'FFFFBF',
  '526 to 573' : 'F2E4A5',
  '477 to 525' : 'E6CA8A',
  '428 to 476' : 'D6AD6F',
  '380 to 427' : 'C79558',
  '331 to 379' : 'BA8045',
  '283 to 330' : 'AB6A32',
  '136 to 282' : '9C551F'}
},

'pr_decadal_mean_DJF_total' :  { 'title':'Total Precipitation (mm)', 'colors' : {
  '751 to 5559' : '248391',
  '396 to 750' : '489499',
  '233 to 395' : '65A39E',
  '154 to 232' : '82B5A6',
  '116 to 153' : 'A1C7AC',
  '91 to 115' : 'C2DBB4',
  '77 to 90' : 'E1EDB9',
  '70 to 76' : 'FFFFBF',
  '66 to 69' : 'F2E4A5',
  '63 to 65' : 'E6CA8A',
  '60 to 62' : 'D6AD6F',
  '57 to 59' : 'C79558',
  '51 to 56' : 'BA8045',
  '41 to 50' : 'AB6A32',
  '14 to 40' : '9C551F'}
},

'pr_decadal_mean_JJA_total': { 'title':'Total Precipitation (mm)', 'colors' : {
  '565 to 3269' : '248391',
  '399 to 564' : '489499',
  '335 to 398' : '65A39E',
  '297 to 334' : '82B5A6',
  '271 to 296' : 'A1C7AC',
  '246 to 270' : 'C2DBB4',
  '233 to 245' : 'E1EDB9',
  '220 to 232' : 'FFFFBF',
  '207 to 219' : 'F2E4A5',
  '195 to 206' : 'E6CA8A',
  '182 to 194' : 'D6AD6F',
  '156 to 181' : 'C79558',
  '131 to 155' : 'BA8045',
  '105 to 130' : 'AB6A32',
  '15 to 104' : '9C551F'}
},

'pr_decadal_mean_MAM_total' :  { 'title':'Total Precipitation (mm)', 'colors' : {
  '604 to 2710' : '248391',
  '377 to 603' : '489499',
  '264 to 376' : '65A39E',
  '195 to 263' : '82B5A6',
  '151 to 194' : 'A1C7AC',
  '125 to 150' : 'C2DBB4',
  '108 to 124' : 'E1EDB9',
  '99 to 107' : 'FFFFBF',
  '90 to 98' : 'F2E4A5',
  '82 to 89' : 'E6CA8A',
  '73 to 81' : 'D6AD6F',
  '64 to 72' : 'C79558',
  '56 to 63' : 'BA8045',
  '38 to 55' : 'AB6A32',
  '11 to 37' : '9C551F'}
},

'pr_decadal_mean_SON_total' :  { 'title':'Total Precipitation (mm)', 'colors' : {
  '1303 to 5569' : '248391',
  '839 to 1302' : '489499',
  '543 to 838' : '65A39E',
  '396 to 542' : '82B5A6',
  '290 to 395' : 'A1C7AC',
  '227 to 289' : 'C2DBB4',
  '185 to 226' : 'E1EDB9',
  '164 to 184' : 'FFFFBF',
  '142 to 163' : 'F2E4A5',
  '121 to 141' : 'E6CA8A',
  '100 to 120' : 'D6AD6F',
  '79 to 99' : 'C79558',
  '58 to 78' : 'BA8045',
  '37 to 57' : 'AB6A32',
  '0 to 36' : '9C551F'
}},

'tas_decadal_mean_annual_mean' :  { 'title':'Temperature (&deg;C)', 'colors' : {
  '9.2 to 15.6' : 'D62F27',
  '7.0 to 9.1' : 'E05138',
  '4.7 to 6.9' : 'EB6E4B',
  '2.4 to 4.6' : 'F2885E',
  '0.1 to 2.3' : 'F7A474',
  '-2.1 to 0.0' : 'FCC58D',
  '-4.4 to -2.2' : 'FFE3A6',
  '-6.7 to -4.5' : 'FFFFBF',
  '-8.9 to -6.8' : 'E3E8BE',
  '-11.2 to -9.0' : 'CAD4BE',
  '-13.5 to -11.3' : 'AEBDBC',
  '-15.7 to -13.6' : '95ACBD',
  '-18.0 to -15.8' : '7B98BA',
  '-20.3 to -18.1' : '6187B8',
  '-22.6 to -20.4' : '4575B5'
}},
'tas_decadal_mean_DJF_mean' :  { 'title':'Temperature (&deg;C)', 'colors' : {
  '3.6  to 9.3' : 'D62F27',
  '1.2  to 3.5' : 'E05138',
  '-1.2 to 1.1' : 'EB6E4B',
  '-3.7 to -1.3' : 'F2885E',
  '-6.1 to -3.8' : 'F7A474',
  '-8.5 to -6.2' : 'FCC58D',
  '-10.9 to -8.6' : 'FFE3A6',
  '-13.3 to -11.0' : 'FFFFBF',
  '-15.8 to -13.4' : 'E3E8BE',
  '-18.2 to -15.9' : 'CAD4BE',
  '-20.6 to -18.3' : 'AEBDBC',
  '-23.0 to -20.7' : '95ACBD',
  '-25.4 to -23.1' : '7B98BA',
  '-27.8 to -25.5' : '6187B8',
  '-30.4 to -27.9' : '4575B5'
}},
'tas_decadal_mean_JJA_mean' :  { 'title':'Temperature (&deg;C)', 'colors' : {
  '18.4 to 29' : 'D62F27',
  '16.6 to 18.3' : 'E05138',
  '14.9 to 16.5' : 'EB6E4B',
  '13.4 to 14.8' : 'F2885E',
  '12.0 to 13.3' : 'F7A474',
  '10.6 to 11.9' : 'FCC58D',
  '9.3 to 10.5' : 'FFE3A6',
  '7.9 to 9.2' : 'FFFFBF',
  '6.4 to 7.8' : 'E3E8BE',
  '4.8 to 6.3' : 'CAD4BE',
  '2.7 to 4.7' : 'AEBDBC',
  '0.2 to 2.6' : '95ACBD',
  '-3.0 to 0.1' : '7B98BA',
  '-7.1 to -3.1' : '6187B8',
  '-15.6 to -7.2' : '4575B5'
} },
'tas_decadal_mean_MAM_mean' : { 'title':'Temperature (&deg;C)', 'colors' :  {
  '8.9 to 14.6' : 'D62F27',
  '6.5 to 8.8' : 'E05138',
  '4.1 to 6.4' : 'EB6E4B',
  '1.7 to 4.0' : 'F2885E',
  '-0.7  to 1.6' : 'F7A474',
  '-3.1 to  -0.8' : 'FCC58D',
  '-5.4 to -3.2' : 'FFE3A6',
  '-7.8 to -5.5' : 'FFFFBF',
  '-10.2 to -7.9' : 'E3E8BE',
  '-12.6 to -10.3' : 'CAD4BE',
  '-15.0 to -12.7' : 'AEBDBC',
  '-17.4 to -15.1' : '95ACBD',
  '-19.7 to -17.5' : '7B98BA',
  '-22.1 to -19.8' : '6187B8',
  '-24.6 to -22.2' : '4575B5'
  }}
};

// Add duplicate references so that historical data uses the same legends
snap.mapLegends['tas_annual_mean_c_akcan_prism_1961_1990'] = snap.mapLegends['tas_decadal_mean_annual_mean'];
snap.mapLegends['tas_30year_MAM_mean_c_akcan_prism_1961_1990'] = snap.mapLegends['tas_decadal_mean_MAM_mean'];
snap.mapLegends['tas_30year_JJA_mean_c_akcan_prism_1961_1990'] = snap.mapLegends['tas_decadal_mean_JJA_mean'];
snap.mapLegends['tas_30year_SON_mean_c_akcan_prism_1961_1990'] = snap.mapLegends['tas_decadal_mean_SON_mean'];
snap.mapLegends['tas_30year_DJF_mean_c_akcan_prism_1961_1990'] = snap.mapLegends['tas_decadal_mean_DJF_mean'];
snap.mapLegends['pr_30year_mean_annual_total_mm_akcan_prism_1961_1990'] = snap.mapLegends['pr_decadal_mean_annual_total'];
snap.mapLegends['pr_30year_mean_MAM_total_mm_akcan_prism_1961_1990'] = snap.mapLegends['pr_decadal_mean_MAM_total'];
snap.mapLegends['pr_30year_mean_JJA_total_mm_akcan_prism_1961_1990'] = snap.mapLegends['pr_decadal_mean_JJA_total'];
snap.mapLegends['pr_30year_mean_SON_total_mm_akcan_prism_1961_1990'] = snap.mapLegends['pr_decadal_mean_SON_total'];
snap.mapLegends['pr_30year_mean_DJF_total_mm_akcan_prism_1961_1990'] = snap.mapLegends['pr_decadal_mean_DJF_total'];
snap.mapLegends['dof_akcan_prism_1961_1990'] = snap.mapLegends['dof_5modelAvg'];
snap.mapLegends['dot_akcan_prism_1961_1990'] = snap.mapLegends['dot_5modelAvg'];
snap.mapLegends['logs_akcan_prism_1961_1990'] = snap.mapLegends['logs_5modelAvg'];
