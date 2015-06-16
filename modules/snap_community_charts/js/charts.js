/*jshint: laxbreak:true */
// todo: move this (and other common reuse) up into a mixins file
// Mix in ability to toggle disabled form fields with jQuery
(function($) {
  $.fn.toggleDisabled = function() {
    return this.each(function() {
      this.disabled = !this.disabled;
    });
  };
})(jQuery);
// Prepare some functionality when page has loaded
$(function() {
  $('#variable_selections input[type="radio"]').change(function(e) {
    snapCharts.data[$(e.currentTarget).attr('name')] = $(e.currentTarget).val();
    snapCharts.changeParams();
  });
  $('#dataset_help').button({
    text: false,
    icons: {
      primary: 'ui-icon-help'
    }
  }).click(function(e) {
    $('#about_scenarios').show().dialog({
      draggable: false,
      modal: true,
      title: 'Representative Concentration Pathways',
      resizable: false,
      show: 'fade',
      position: { my: 'top', at: 'top+25', of: window},
      hide: 'fade',
      width: '700px',
      zindex: 50000,
      buttons: {
        'Close': function(e) {
          $(this).dialog('close');
        }
      }
    });
  });
  $('#baseline_help').button({
    text: false,
    icons: {
      primary: 'ui-icon-help'
    }
  }).click(function(e) {
    $('#about_baselines').show().dialog({
      draggable: false,
      modal: true,
      title: 'Historical Baselines',
      resizable: false,
      show: 'fade',
      position: { my: 'top', at: 'top+25', of: window},
      hide: 'fade',
      width: '700px',
      zindex: 50000,
      buttons: {
        'Close': function(e) {
          $(this).dialog('close');
        }
      }
    });
  });
 $('#variability_help').button({
    text: false,
    icons: {
      primary: 'ui-icon-help'
    }
  }).click(function(e) {
    $('#about_variability').show().dialog({
      draggable: false,
      modal: true,
      title: 'Variability Among Models',
      resizable: false,
      show: 'fade',
      position: { my: 'top', at: 'top+25', of: window},
      hide: 'fade',
      width: '700px',
      zindex: 50000,
      buttons: {
        'Close': function(e) {
          $(this).dialog('close');
        }
      }
    });
  });
  $('#derive_help').button({}).click(function(e) {
    $('#modal_block').show().dialog({
      draggable: false,
      modal: true,
      title: 'Community climate outlooks: core statistics and methods',
      resizable: false,
      show: 'fade',
      position: { my: 'top', at: 'top+25', of: window},
      hide: 'fade',
      width: '700px',
      zindex: 50000,
      buttons: {
        'Close': function(e) {
          $(this).dialog('close');
        }
      }
    });
  });
  // Initialize the button for the export modal
  $('#export_options').button({
    icons: {
      primary: 'ui-icon-print'
    }
  }).click(

  function(e) {
    $('#exportDialog').show().dialog({
      draggable: false,
      modal: true,
      title: 'Export chart for ' + snapCharts.data.communityName + ', ' + snapCharts.data.communityRegion,
      resizable: false,
      position: { my: 'top', at: 'top+25', of: window},
      show: 'fade',
      hide: 'fade',
      width: '700px',
      zindex: 50000,
      buttons: {
        'Close': function(e) {
          $(this).dialog('close');
        }
      }
    });
    $('#export_link').select();
    $('#export_hires_png').button().click(function(e) {
      $('#exportDialog').dialog('close');
      $('#processingExportDialog').show().dialog({
        draggable: false,
        modal: true,
        title: 'Processing image export&hellip;',
        resizable: false,
        position: { my: 'top', at: 'top+25', of: window},
        show: 'fade',
        hide: 'fade',
        width: '700px',
        zindex: 50000,
        buttons: {
          'OK': function(e) {
            $(this).dialog('close');
          }
        }
      });
      snapCharts.exportChart('png/hires');
    });
    $('#export_svg').button().click(function(e) {
      snapCharts.exportChart('svg');
    });
  });
  snapCharts.initialize();
  snapCharts.refreshState();
  snapCharts.fetchData();
});
// Encapsulate the AJAX functionality
snapCharts = {
  chart: null,
  // is defined when the chart is drawn
  data: {
    community: null,
    // id#
    communityName: null,
    region: null,
    // Alaska, Manitoba, etc
    country: null,
    // USA or CAN
    scenario: 'rcp60',
    // string, 'rcp45','rcp60','rcp85'
    units: 'standard',
    resolution: '10min',
    // string, '10min','2km'
    baseline: 'cru32',
    // string, 'cru32', 'prism'
    variability: 0,
    // default 0=off, 1=on
    dataset: 1,
    // default temperature =1, precip=2
    series: null,
    // actual data, keys are time spans
    standardDeviations: null,
    // keys are time spans
    yAxisTitle: null,
    title: null,
    subtitle: null
  },
  // Shorthand to manage rounding consistently
  round: function(value, precision) {
    return parseFloat(value.toFixed(precision));
  },
  // Intended to be called on page ready() event
  initialize: function() {
    $('#comm_select').focus().autocomplete({
      source: function(req, responseFn) {
        var re = $.ui.autocomplete.escapeRegex(req.term);
        var matcher = new RegExp(re, "i");
        var a = $.grep(snapCharts.communities, function(item, index) {
          return matcher.test(item.label);
        });
        responseFn(a);
      }
    }).bind('autocompletechange', function(event, ui) {
      if (false === _.isUndefined(ui.item) && false === _.isNull(ui.item)) {
        $('#comm_select_id').val(ui.item.value);
        snapCharts.data.community = ui.item.value;
      }
    }).bind('autocompletefocus', function(event, ui) {
      if (false === _.isUndefined(ui.item) && false === _.isNull(ui.item)) {
        event.preventDefault();
        $('#comm_select_id').val(ui.item.value);
        snapCharts.data.community = ui.item.value;
      }
    }).bind('autocompleteselect', function(event, ui) {
      event.preventDefault();
      $('#comm_select').val(ui.item.label);
      $('#comm_select_id').val(ui.item.value);
      snapCharts.data.community = ui.item.value;
      snapCharts.changeParams();
    }).keypress(function(e) {
      // if the enter key is pressed, try and search if there's a valid community id.
      if (13 === e.which) {
        if (false === _.isNull(snapCharts.data.community)) {
          snapCharts.data.community = $('#comm_select_id').val();
          snapCharts.changeParams();
        }
      }
    });
    $(window).bind('hashchange', function(e) {
      snapCharts.refreshState();
      snapCharts.fetchData();
    });
    $('#variable_selections .buttonset').buttonset();
  },
  // Prepare the chart for export.  The `type` parameter is expected to be a mime-type.
  exportChart: function(type) {
    snapCharts.refreshState();
    snapCharts.chart.exportChart({
      type: type
    });
  },
  // Examine the hashtags to rebuild the correct query parameters.  It's expected
  // that this will be called when the user changes parameters, or when the user
  // deep-links to this page, or when the user uses back/forward buttons in the browser.
  refreshState: function() {
    var params = $.bbq.getState(true); // perform type coercion
    snapCharts.data.community = params.community || null;
    snapCharts.data.scenario = params.scenario || 'rcp60'; // default scenario RCP 6.0
    snapCharts.data.variability = params.variability || 0; // default no variability
    snapCharts.data.dataset = params.dataset || 1; // default temp
    snapCharts.data.units = params.units || 'standard'; // default units
    snapCharts.data.baseline = params.baseline || 'cru32'; // default historical baseline
    //snapCharts.data.resolution = params.resolution || '10min';
    $('#variable_buttons input[value="' + snapCharts.data.dataset + '"]').prop('checked', 'checked').button('refresh');
    $('#scenario_buttons input[value="' + snapCharts.data.scenario + '"]').prop('checked', 'checked').button('refresh');
    $('#variability_buttons input[value="' + snapCharts.data.variability + '"]').prop('checked', 'checked').button('refresh');
    $('#unit_buttons input[value="' + snapCharts.data.units + '"]').prop('checked', 'checked').button('refresh');
    $('#baseline_buttons input[value="' + snapCharts.data.baseline + '"]').prop('checked', 'checked').button('refresh');
    // Flash for the user if no community is selected, and lock out the
    // controls for changing parameters.
    if (null === snapCharts.data.community) {
      $('#comm_select_wrapper').effect('highlight', {}, 3000);
      $('#variable_buttons').buttonset('disable');
      $('#scenario_buttons').buttonset('disable');
      $('#variability_buttons').buttonset('disable');
      $('#unit_buttons').buttonset('disable');
      $('#baseline_buttons').buttonset('disable');
      $('#baseline_help').button('disable');
      $('#dataset_help').button('disable');
      $('#variability_help').button('disable');
    } else {
      // Ensure the controls are enabled if there is a community
      $('#unit_buttons').buttonset('enable');
      $('#variable_buttons').buttonset('enable');
      $('#scenario_buttons').buttonset('enable');
      $('#variability_buttons').buttonset('enable');
      $('#baseline_buttons').buttonset('enable');
      $('#baseline_help').button('enable');
      $('#dataset_help').button('enable');
      $('#variability_help').button('enable');
    }
  },
  // Should be called when values change that need to update the hashtag.
  changeParams: function() {
    $.scrollTo('#chartsTitle', 400, {
      offset: -10,
      axis: 'y'
    });
    $.bbq.pushState({
      community: snapCharts.data.community,
      dataset: snapCharts.data.dataset,
      scenario: snapCharts.data.scenario,
      variability: snapCharts.data.variability,
      units: snapCharts.data.units,
      baseline: snapCharts.data.baseline
      //resolution: snapCharts.data.resolution
    });
  },
  fetchData: function() {
    // Only fetch the data if there are meaningful parameters to send.  Otherwise, ignore.
    if (
    false === _.isNull(snapCharts.data.community) && _.isNumber(snapCharts.data.dataset) && _.isString(snapCharts.data.scenario)) {
      $.get("charts_fetch_data.php", {
        community: snapCharts.data.community,
        dataset: snapCharts.data.dataset,
        scenario: snapCharts.data.scenario,
        variability: snapCharts.data.variability,
        baseline: snapCharts.data.baseline
        //resolution: snapCharts.data.resolution
      }, function(data) {
        snapCharts.data = data;
        $('#placeholderImage').remove();
        $('#location').html(": " + snapCharts.data.communityName + ', ' + snapCharts.data.communityRegion);
        $('#comm_select').val(snapCharts.data.communityName + ', ' + snapCharts.data.communityRegion);
        $('#comm_block').hide();
        $('#chartTools').show();
        $('#export_link').val(location.href);
        snapCharts.render();
      }, 'json');
    } else {
      // don't care.  this is the default case, i.e. no params chosen or present in the hashtags.
    }
  },
  // Manage steps in rendering the chart itself
  render: function() {
    snapCharts.refreshState();
    snapCharts.transformUnits();
    snapCharts.drawChart();
  },
  // This function manages the unit conversions.  The system gets input in standard units,
  // and we need to change the values and the GUI depending on what unit is selected.
  transformUnits: function() {
    // Setup the data depending on if showing metric or standard units
    // Default is standard units
    snapCharts.sdUnitConversionMapper = function(sd) {
      return snapCharts.round(sd, 2);
    }; // default 4 digits precision
    snapCharts.unitConversionMapper = function(value) {
      return snapCharts.round(value, 2);
    }; // null conversion
    if ('metric' === snapCharts.data.units) {
      if (1 === snapCharts.data.dataset) {
        snapCharts.unitName = '°C';
        snapCharts.yAxisTitle = 'Temperature (' + snapCharts.unitName + ')';
      } else {
        snapCharts.unitName = 'mm';
        snapCharts.yAxisTitle = 'Total Precipitation (' + snapCharts.unitName + ')';
      }
    } else {
      if (1 === snapCharts.data.dataset) {
        snapCharts.unitConversionMapper = function(value) {
          return snapCharts.round((value * (9 / 5) + 32), 1);
        };
        snapCharts.sdUnitConversionMapper = function(sd) {
          return snapCharts.round(sd * (9 / 5), 1);
        };

        snapCharts.unitName = '°F';
        snapCharts.yAxisTitle = 'Temperature (' + snapCharts.unitName + ')';
      } else {
        snapCharts.unitConversionMapper = function(value) {
          return snapCharts.round(value / 25.4, 2);
        };
        snapCharts.sdUnitConversionMapper = function(value) {
          return snapCharts.round(value / 25.4, 2);
        };
        snapCharts.unitName = 'in';
        snapCharts.yAxisTitle = 'Total Precipitation (' + snapCharts.unitName + ')';
      }
    }
    // This array holds the actual data that will be shown on the chart, after being
    // transformed from the source data into different units.
    snapCharts.unitConvertedData = {
      series: {},
      seriesRange: {}
    };

    // Transform the units
    _.each(snapCharts.data.series, function(e, i, l) {
      snapCharts.unitConvertedData.series[i] = _.map(e, snapCharts.unitConversionMapper);
    });

    _.each(snapCharts.data.seriesMins, function(e, i, l) {
      snapCharts.unitConvertedData.seriesRange[i] = _.map(e, snapCharts.unitConversionMapper);
    });

    _.each(snapCharts.data.seriesMaxs, function(e, i, l) {
      for(j = 0; j < 12; j++) {
        snapCharts.unitConvertedData.seriesRange[i][j] = new Array(2);
        snapCharts.unitConvertedData.seriesRange[i][j] = [snapCharts.unitConversionMapper(snapCharts.data.seriesMins[i][j]),snapCharts.unitConversionMapper(e[j]) ];
      }
    });

    snapCharts.unitConvertedData.minimum = snapCharts.unitConversionMapper(snapCharts.data.minimum);
    snapCharts.unitConvertedData.maximum = snapCharts.unitConversionMapper(snapCharts.data.maximum);
    // Update the GUI button unit names as appropriate
    if (1 === snapCharts.data.dataset) {
      $('#unit_standard').button('option', 'label', '°F');
      $('#unit_metric').button('option', 'label', '°C');
    } else {
      $('#unit_standard').button('option', 'label', 'in');
      $('#unit_metric').button('option', 'label', 'mm');
    }
  },
  // This draws the chart and also manages the unit buttons
  // (standard/metric).  Perhaps the button management code
  // can be removed from this, but it needs to be called whenever
  // the chart is drawn.
  drawChart: function() {
    if (snapCharts.data.communityRegion == "Northwest Territories" && snapCharts.data.baseline == "prism") {
        alert('Sorry, the Northwest Territories are only available for the CRU 3.2 baseline choice.');
        location.assign(snapConfig.url);
    }

    if (_.isUndefined(snapCharts.data.series)) {
      alert('Sorry, an error occurred, and the chart could not be loaded.');
      location.assign(snapConfig.url);
    }
    // Define a baseline configuration for the Highcharts y-axis.
    // This will be varied depending on dataset (below)
    yAxis = {
      min: snapCharts.unitConvertedData.minimum,
      max: snapCharts.unitConvertedData.maximum,
      title: {
        text: snapCharts.yAxisTitle,
        style: {
          fontFamily: 'Lato'
        }
      },
      labels: {
        enabled: true,
        style: {
          fontFamily: 'Lato'
        }
      }
    };
    if (snapCharts.data.variability === 0) {
    // Vary colors and other options depending on dataset,
    // by updating the Highcharts global configuration object.
    if (1 === snapCharts.data.dataset) {
      Highcharts.setOptions({
        colors: ['#999999', '#FECC5C', '#FD8D3C', '#F03B20', '#BD0026'],
        style: {
          fontFamily: 'Lato, Lato-Regular'
        }
      });
      // Add a horizontal line indicating freezing point
      yAxis.plotBands = [{
        value: snapCharts.unitConversionMapper(0),
        color: '#000',
        width: 1,
        label: {
          text: snapCharts.unitConversionMapper(0) + '°',
          align: 'right',
          style: {
            fontFamily: 'Lato',
            fontSize: '10px'
          }
        }
      }];
    } else {
      // Precipitation
      Highcharts.setOptions({
        colors: ['#999999', '#BAE4BC', '#7BCCC4', '#43A2CA', '#0868AC'],
        style: {
          fontFamily: 'Lato, Lato-Regular'
        }
      });
    }
    // Invoke the chart, interpolating some per-variable configs from above as needed
    snapCharts.chart = new Highcharts.Chart({
      yAxis: yAxis,
      // defined above
      chart: {
        height: 400,
        border: 'none',
        renderTo: 'chart_div',
        type: 'column',
        margin: [100, 30, 70, 70]
      },
      tooltip: {
        formatter: function() {
          return '<span style="color: #000; font-family: Lato">' + this.x + ' ' + this.series.name + '</span><br/><span>' + this.y + ' ' + snapCharts.unitName + '</span>';
        }
      },
      credits: {
            enabled: false
      },
      legend: {
        verticalAlign: 'top',
        align: 'center',
        y: 40,
        labelFormatter: function() {
          return '<span style="font-family: Lato; baseline-shift: .1ex">' + this.name + '</span>';
        }
      },
      plotOptions: {
        column: {
          pointPadding: 0.05,
          borderWidth: 0,
          shadow: false,
          animation: false,
          threshold: snapCharts.unitConversionMapper(0),
          groupPadding: 0.1,
          events: {
            legendItemClick: false
          }
        }
      },
      title: {
        y: 10,
        align: 'center',
        style: {
          fontFamily: 'Lato'
        },
        text: snapCharts.data.title
      },
      subtitle: {
        y: 30,
        align: 'center',
        style: {
          fontFamily: 'Lato'
        },
        text: snapCharts.data.subtitle
      },
      xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        labels: {
          style: {
            fontFamily: 'Lato'
          }
        },
        title: {
          style: {
            fontFamily: 'Lato'
          }
        }
      },
      exporting: {
        enabled: true,
        scale: 1,
        chartOptions: {
          credits: {
            enabled: true,
            position: {
              align: 'center',
              y: -35,
              x: 60,
              verticalAlign: 'bottom'
            },
            style: {
              'fontFamily': 'Lato, Lato-Regular',
              'fontSize': '8px',
              'width': '450px',
              'padding': '10px'
            },
            text: 'Due to variability among climate models and among years in a natural climate system, these graphs are useful for examining trends over time, rather than for precisely predicting monthly or yearly values. '
          },
          title: {
            align: 'center',
            y: 10,
            style: {
              'fontSize': '14px'
            }
          },
          legend: {
            align: 'center'
          },
          subtitle: {
            y: 30,
            align: 'center',
            style: {
              'fontSize': '10px'
            }
          },
        },
        url: './charts_export.php',
        buttons: {
          contextButton: {
            enabled: false
          },
          exportButton: {
            enabled: false
          },
          printButton: {
            enabled: false
          }
        }
      },
      series: [{
        name: '1961-1990',
        data: snapCharts.unitConvertedData.series.Historical
      }, {
        name: '2010-2019',
        data: snapCharts.unitConvertedData.series['2010-2019']
      }, {
        name: '2040-2049',
        data: snapCharts.unitConvertedData.series['2040-2049']
      }, {
        name: '2060-2069',
        data: snapCharts.unitConvertedData.series['2060-2069']
      }, {
        name: '2090-2099',
        data: snapCharts.unitConvertedData.series['2090-2099']
      }]
    });
  }
  if (snapCharts.data.variability === 1) {
    if (1 === snapCharts.data.dataset) {
      Highcharts.setOptions({
        colors: ['#999999', '#FECC5C', '#FD8D3C', '#F03B20', '#BD0026'],
        style: {
          fontFamily: 'Lato, Lato-Regular'
        }
      });
      // Add a horizontal line indicating freezing point
      yAxis.plotBands = [{
        value: snapCharts.unitConversionMapper(0),
        color: '#000',
        width: 1,
        label: {
          text: snapCharts.unitConversionMapper(0) + '°',
          align: 'right',
          style: {
            fontFamily: 'Lato',
            fontSize: '10px'
          }
        }
      }];
    } else {
      // Precipitation
      Highcharts.setOptions({
        colors: ['#999999', '#BAE4BC', '#7BCCC4', '#43A2CA', '#0868AC', '#0868AC'],
        style: {
          fontFamily: 'Lato, Lato-Regular'
        }
      });
    }
    snapCharts.chart = new Highcharts.Chart({
      yAxis: yAxis,
      // defined above
      chart: {
        height: 400,
        border: 'none',
        renderTo: 'chart_div',
        type: 'column',
        margin: [100, 30, 70, 70],
      },
      tooltip: {
        formatter: function() {
          if (this.series.name.indexOf("Range") === -1) {
            return '<span style="color: #000; font-family: Lato">' + this.x + ' ' + this.series.name + '</span><br/><span>' + this.y + ' ' + snapCharts.unitName + '</span>';
          } else {
            return '<span style="color: #000; font-family: Lato">' + this.x + ' ' + this.series.name + '</span><br/><span>' + this.point.low + snapCharts.unitName + ' to ' + this.point.high + ' ' + snapCharts.unitName + '</span>';
          }
        }
      },
      credits: {
        enabled: false
      },
      legend: {
        verticalAlign: 'top',
        align: 'center',
        y: 40,
        labelFormatter: function() {
          return '<span style="font-family: Lato; baseline-shift: .1ex">' + this.name + '</span>';
        }
      },
      plotOptions: {
        column: {
          pointPadding: 0.05,
          borderWidth: 0,
          shadow: false,
          animation: false,
          threshold: snapCharts.unitConversionMapper(0),
          groupPadding: 0.1,
          events: {
            legendItemClick: false
          }
        },
        errorbar: {
          animation: false
        }
      },
      title: {
        y: 10,
        align: 'center',
        style: {
          fontFamily: 'Lato'
        },
        text: snapCharts.data.title
      },
      subtitle: {
        y: 30,
        align: 'center',
        style: {
          fontFamily: 'Lato'
        },
        text: snapCharts.data.subtitle
      },
      xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        labels: {
          style: {
            fontFamily: 'Lato'
          }
        },
        title: {
          style: {
            fontFamily: 'Lato'
          }
        }
      },
      exporting: {
        enabled: true,
        scale: 1,
        chartOptions: {
          credits: {
            enabled: true,
            position: {
              align: 'center',
              y: -35,
              x: 60,
              verticalAlign: 'bottom'
            },
            style: {
              'fontFamily': 'Lato, Lato-Regular',
              'fontSize': '8px',
              'width': '450px',
              'padding': '10px'
            },
            text: 'Due to variability among climate models and among years in a natural climate system, these graphs are useful for examining trends over time, rather than for precisely predicting monthly or yearly values. '
          },
          title: {
            align: 'center',
            y: 10,
            style: {
              'fontSize': '14px'
            }
          },
          legend: {
            align: 'center'
          },
          subtitle: {
            y: 30,
            align: 'center',
            style: {
              'fontSize': '10px'
            }
          }
        },
        url: './charts_export.php',
        buttons: {
          contextButton: {
            enabled: false
          },
          exportButton: {
            enabled: false
          },
          printButton: {
            enabled: false
          }
        }
      },
      series: [{
        name: '1961-1990',
        data: snapCharts.unitConvertedData.series.Historical
      }, {
        name: '2010-2019',
        data: snapCharts.unitConvertedData.series['2010-2019']
      }, {
        name: '2010-2019 Range',
        type: 'errorbar',
        data: snapCharts.unitConvertedData.seriesRange['2010-2019']
      }, {
        name: '2040-2049',
        data: snapCharts.unitConvertedData.series['2040-2049']
      }, {
        name: '2040-2049 Range',
        type: 'errorbar',
        data: snapCharts.unitConvertedData.seriesRange['2040-2049']
      }, {
        name: '2060-2069',
        data: snapCharts.unitConvertedData.series['2060-2069']
      }, {
        name: '2060-2069 Range',
        type: 'errorbar',
        data: snapCharts.unitConvertedData.seriesRange['2060-2069']
      }, {
        name: '2090-2099',
        data: snapCharts.unitConvertedData.series['2090-2099']
      }, {
        name: '2090-2099 Range',
        type: 'errorbar',
        data: snapCharts.unitConvertedData.seriesRange['2090-2099']
      }]
    });
  }
  if (snapCharts.data.variability === 2) {
    if (1 === snapCharts.data.dataset) {
      Highcharts.setOptions({
        colors: ['#999999', '#FECC5C', '#FD8D3C', '#F03B20', '#BD0026'],
        style: {
          fontFamily: 'Lato, Lato-Regular'
        }
      });
      // Add a horizontal line indicating freezing point
      yAxis.plotBands = [{
        value: snapCharts.unitConversionMapper(0),
        color: '#000',
        width: 1,
        label: {
          text: snapCharts.unitConversionMapper(0) + '°',
          align: 'right',
          style: {
            fontFamily: 'Lato',
            fontSize: '10px'
          }
        }
      }];
    } else {
      // Precipitation
      Highcharts.setOptions({
        colors: ['#999999', '#BAE4BC', '#7BCCC4', '#43A2CA', '#0868AC', '#0868AC'],
        style: {
          fontFamily: 'Lato, Lato-Regular'
        }
      });
    }
    snapCharts.chart = new Highcharts.Chart({
      yAxis: yAxis,
      // defined above
      chart: {
        height: 400,
        border: 'none',
        renderTo: 'chart_div',
        type: 'columnrange',
        margin: [100, 30, 70, 70]
      },
      tooltip: {
        formatter: function() {
          return '<span style="color: #000; font-family: Lato">' + this.x + ' ' + this.series.name + '</span><br/><span>' + this.point.low + snapCharts.unitName + ' to ' + this.point.high + snapCharts.unitName + '</span>';
        }
      },
      credits: {
        enabled: false
      },
      legend: {
        verticalAlign: 'top',
        align: 'center',
        y: 40,
        labelFormatter: function() {
          return '<span style="font-family: Lato; baseline-shift: .1ex">' + this.name + '</span>';
        }
      },
      plotOptions: {
        columnrange: {
          pointPadding: 0.1,
          borderWidth: 0,
          shadow: false,
          animation: true,
          groupPadding: 0.1,
          events: {
            legendItemClick: false
          }
        }
      },
      title: {
        y: 10,
        align: 'center',
        style: {
          fontFamily: 'Lato'
        },
        text: snapCharts.data.title
      },
      subtitle: {
        y: 30,
        align: 'center',
        style: {
          fontFamily: 'Lato'
        },
        text: snapCharts.data.subtitle
      },
      xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        labels: {
          style: {
            fontFamily: 'Lato'
          }
        },
        title: {
          style: {
            fontFamily: 'Lato'
          }
        }
      },
      exporting: {
        enabled: true,
        scale: 1,
        chartOptions: {
          credits: {
            enabled: true,
            position: {
              align: 'center',
              y: -35,
              x: 60,
              verticalAlign: 'bottom'
            },
            style: {
              'fontFamily': 'Lato, Lato-Regular',
              'fontSize': '8px',
              'width': '450px',
              'padding': '10px'
            },
            text: 'Due to variability among climate models and among years in a natural climate system, these graphs are useful for examining trends over time, rather than for precisely predicting monthly or yearly values. '
          },
          title: {
            align: 'center',
            y: 10,
            style: {
              'fontSize': '14px'
            }
          },
          legend: {
            align: 'center'
          },
          subtitle: {
            y: 30,
            align: 'center',
            style: {
              'fontSize': '10px'
            }
          }
        },
        url: './charts_export.php',
        buttons: {
          contextButton: {
            enabled: false
          },
          exportButton: {
            enabled: false
          },
          printButton: {
            enabled: false
          }
        }
      },
      series: [{
        name: '1961-1990',
        data: snapCharts.unitConvertedData.seriesRange['Historical']
      }, {
        name: '2010-2019',
        data: snapCharts.unitConvertedData.seriesRange['2010-2019']
      }, {
        name: '2040-2049',
        data: snapCharts.unitConvertedData.seriesRange['2040-2049']
      }, {
        name: '2060-2069',
        data: snapCharts.unitConvertedData.seriesRange['2060-2069']
      }, {
        name: '2090-2099',
        data: snapCharts.unitConvertedData.seriesRange['2090-2099']
      }]
    });
     }
  }
};
