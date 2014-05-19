<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--><!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]--><!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]--><!--[if gt IE 8]><!--><!--<![endif]-->
<meta charset="utf-8" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<title></title>
<meta content="" name="description" />
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link href="/sites/all/themes/snap_bootstrap/css/styles.css" rel="stylesheet" />
<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/smoothness/jquery-ui.css" rel="stylesheet" /><script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore-min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/1.4.11/jquery.scrollTo.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/highcharts/2.1.5/highcharts.min.js"></script><script src="js/exporting.src.js"></script><!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]--><?php

            require_once 'src/ChartsFetcher.php';
            error_reporting(E_ALL);

            ?><!-- fixed width is important because otherwise variability bars break on chart resize. -->
<div class="container" style="width: 950px !important;">
<h1 id="chartsTitle">See the climate outlook for your community.</h1>

<div class="row">
<div class="col-md-8">
<div id="variable_selections">
<div id="comm_select_wrapper">
<div class="ui-widget" style="z-index: 1001"><input id="comm_select_id" name="comm_select_id" type="hidden" value="" /> <input id="comm_select" name="community_selector" placeholder="Enter a community name" type="text" value="" /></div>
</div>

<div>
<div class="inline-controls pull-left">
<p>Dataset</p>

<div class="buttonset" id="variable_buttons"><input checked="checked" id="variable_temperature" name="dataset" type="radio" value="1" /><label for="variable_temperature">Temperature</label> <input id="variable_precipitation" name="dataset" type="radio" value="2" /><label for="variable_precipitation">Precipitation</label></div>
</div>

<div class="inline-controls inline-controls-right">
<p>Units</p>

<div class="buttonset" id="unit_buttons"><input checked="checked" id="unit_standard" name="units" type="radio" value="standard" /><label for="unit_standard">°F</label> <input id="unit_metric" name="units" type="radio" value="metric" /><label for="unit_metric">°C</label></div>
</div>
</div>

<div>
<p>Emissions scenario</p>

<div class="buttonset" id="scenario_buttons"><input id="scenario_b1" name="scenario" type="radio" value="b1" /><label for="scenario_b1">Low (B1)</label> <input checked="checked" id="scenario_a1b" name="scenario" type="radio" value="a1b" /><label for="scenario_a1b">Medium (A1B)</label> <input id="scenario_a2" name="scenario" type="radio" value="a2" /><label for="scenario_a2">High (A2)</label></div>

<div class="helpbuttons"><button id="dataset_help">More about scenarios</button></div>
</div>

<p>Inter–model variability</p>

<div class="buttonset" id="variability_buttons"><input checked="checked" id="variability_off" name="variability" type="radio" value="0" /><label for="variability_off">Off</label> <input id="variability_on" name="variability" type="radio" value="1" /><label for="variability_on">On</label></div>

<div class="helpbuttons"><button id="variability_help">More about inter–model variability</button></div>
</div>
</div>

<div class="col-md-4">
<div class="outlook-sidebar">
<p><strong><a href="http://www.uaf.edu/ces/"><img alt="cooperative extension" class="plain pull-right" src="/sites/default/files/pictures/ces.jpg" style="width: 100px; height: 100px;" /></a>Created by SNAP in cooperation with&nbsp;<abbr title="Cooperative Extension Service">CES.</abbr> </strong></p>

<p><strong>We offer climate outlooks for communities in this region:</strong></p>
<img alt="alaska-canada" class="plain" src="/sites/default/files/pictures/akcanada_extent.gif" style="width: 279px; height: 113px;" />

<p><a class="btn btn-success" href="http://cerberus.snap.uaf.edu">Return to SNAP home page</a></p>

</div>
</div>
</div>
<!-- end row -->

<div class="row">
<div class="md-col-12">
<div class="pull-right" id="chartTools" style="display: none;"><button id="export_options">Export</button></div>

<div id="chart_div">&nbsp;</div>

<div class="methods text">
<h1>How to interpret climate outlooks for your community</h1>

<p>You can examine SNAP community outlooks for certain key changes and threshold values—for example, higher mean monthly temperatures in the spring and fall may be of particular interest. This could signify any or all of these conditions:</p>

<ul>
    <li>a longer growing season</li>
    <li>a loss of ice and/or frozen ground needed for travel or food storage</li>
    <li>a shift in precipitation from snow to rain, which impacts water storage capacity and surface water availability</li>
</ul>

<p>Warmer, drier spring weather may also be an indicator for increased fire risk. In many locations, winter temperatures are projected to increase dramatically. Warmer winters may favor growth of species that are less cold-hardy (including desirable crops and invasive species), or it may decrease snowpack and increase the frequency of rain-on-snow events that impact wildlife. Higher temperatures across all seasons will likely impact permafrost and land-fast ice.</p>

<div class="helpbuttons"><button id="derive_help">Learn more about how we derived the community climate outlooks</button>

<div class="about_dialog" id="modal_block" style="display: none;">

<p><strong>Data sources: </strong>historical <abbr title="Parameter-elevation Regressions on Independent Slopes Model">PRISM</abbr> climatology data and downscaled outputs averaged from five <abbr title="General Circulation Models">GCMs</abbr>. <a href="/methods/downscaling">Learn more about how we downscale climate data from global to regional scales.</a></p>

<p><strong>We averaged results to smooth out short-term variability. </strong>Results are averaged across decades to lessen the influence of normal year-to-year climate variability on projected values. Averaging also tends to make overall projection trends clearer. Uncertainty is associated with each of these graphed values, and stems from:</p>

<ul>
    <li>modeling of atmospheric and oceanic movements used to create <abbr title="General Circulation Models">GCMs</abbr></li>
    <li>the <abbr title="Parameter-elevation Regressions on Independent Slopes Model">PRISM</abbr> downscaling process&gt;</li>
    <li>the assumptions made regarding greenhouse gas levels for each emissions scenario</li>
    <li><a href="/methods/uncertainty">Learn more about uncertainty in SNAP’s climate research work.</a></li>
</ul>

<p><strong>Standard deviations for temperature and precipitation </strong>between the 5 models and averaged over space, time, and the 3 scenarios are relatively small, mostly due to the averaging across space:</p>

<ul>
    <li>Precipitation: 5.8 mm - 13.8 mm (mean: 9.8 mm)</li>
    <li>Temperature: 0.5° C to 2.1° C&nbsp; (mean: 1.1° C)</li>
    <li>To compare, standard deviations across the 5 models for a particular spatial pixel could be as much as 500+ mm or &gt;5° C</li>
</ul>

<p><strong>Generally, precipitation is more uncertain than temperature.</strong> And, although our models project increases in precipitation, water availability may decrease in some areas due to longer growing seasons and warmer weather.</p>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="exportDialog" style="display: none;">
<fieldset><legend>Link</legend> <input id="export_link" readonly="readonly" style="width: 100%" value="linky linky" /></fieldset>

<fieldset><legend>High–resolution image for print</legend><button id="export_hires_png">Download high-resolution PNG (600 dpi, 10" wide)</button></fieldset>

<fieldset><legend>Vector format for posters (SVG)</legend>

<p>Programs such as Adobe Illustrator, GIMP, and ImageMagick are needed to work with this file format.</p>
<button id="export_svg">Download SVG (resolution–independent)</button></fieldset>
</div>

<div class="about_dialog" id="processingExportDialog" style="display: none;">
<h4><img src="images/ajax-loader-gray.gif" /> Processing image for export…</h4>

<p>Your download should begin shortly. High–resolution PNG images can take up to a minute to process on the server before the download begins. If you experience problems, please <a href="mailto:tkurkowski@alaska.edu">let us know</a>.</p>
</div>

<div class="about_dialog" id="about_scenarios" style="display: none;">
<p>The <abbr title="Intergovernmental Panel on Climate Change">IPCC</abbr> created scenarios to explore alternative futures. Scenarios cover a wide range of demographic, economic and technological driving forces, and resulting greenhouse gas emissions.</p>

<h4>A1B: Mid-range emissions scenario</h4>

<p>Very rapid economic growth, a global population that peaks in mid–century, rapid introduction of new and more efficient technologies, and a balance between fossil fuels and other energy sources.</p>

<h4>A2: Rapid increases in emissions</h4>

<p>High population growth, but slow economic development and slow technological change.</p>

<h4>B1: Emissions leveling and declining scenario</h4>

<p>Same global population as A1B, but with faster changes in economic structures toward a service and information economy.</p>
</div>

<div class="about_dialog" id="about_variability" style="display: none;">
<h4>Inter–Model variability</h4>

<p>Model variability refers to the standard deviation (SD), which provides a measure of dispersion around the mean. The vertical bars represent the SD across the 5 models. Their lengths represent one SD above and below this value:</p>

<ul>
    <li><strong>Small SD: </strong>models are in relative agreement</li>
    <li><strong>Large SD:</strong> choice of model is relatively important</li>
</ul>

<p>It is best to avoid drawing inferences from overlapping or non-overlapping bars. The only comparison to make is of their relative size, as it pertains to changes in the degree of agreement among the models.</p>
</div>
<script src="js/jquery.ba-bbq.min.js"></script><script src="js/charts.js"></script><script type="text/javascript">
        window.snapCharts.communities = <?php echo ChartsFetcher::fetchCommunitiesAsJson(); ?>;
    </script><script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','-UA-3978613-1');ga('send','pageview');
    </script>