<html>
<head>
<meta charset="utf-8" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<title></title>
<meta content="" name="description" />
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link href="/sites/all/themes/snap_bootstrap/css/styles.css" rel="stylesheet" />
<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/smoothness/jquery-ui.css" rel="stylesheet" /><script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore-min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/1.4.11/jquery.scrollTo.min.js"></script><!--<script src="//cdnjs.cloudflare.com/ajax/libs/highcharts/2.1.5/highcharts.min.js"></script>--><script src="https://code.highcharts.com/4.1.5/highcharts.js"></script><script src="https://code.highcharts.com/4.1.5/highcharts-more.js"></script><script src="js/exporting.src.js"></script>

<?php
            require_once 'src/ChartsFetcher.php';
?>
<link rel="shortcut icon" href="/sites/all/themes/snap_bootstrap/snap.ico" />
</head>
<body id="charts">
<div class="container" style="width: 980px !important;">
<div class="row">
<div class="col-md-5">
    <a href="https://www.snap.uaf.edu">
        <img class="logo" src="/sites/all/themes/snap_bootstrap/images/SNAP_acronym_color_lato.png" alt="" />
    </a>
    <h1>Community Charts</h1>
    <p>Explore temperature and precipitation projections for communities across Alaska and Canada shown here. <a href="http://ckan.snap.uaf.edu/dataset/community-charts-temperature-and-precipitation">Download all community charts data</a> from SNAP's data site. <a href="https://www.snap.uaf.edu">Or, return to the SNAP home page.</a></p>
</div>
<div class="col-md-7">
<img alt="alaska-canada" class="plain" src="/sites/default/files/pictures/akcanada_extent.png" style="width: 579px; height: 313px;" />
</div>
</div>
<div class="row">
<h2 id="chartsTitle">Type the name of a community in the box below to get started.</h2>
<div id="variable_selections">
<div class="col-md-12"
<div id="comm_select_wrapper">
<div class="ui-widget" style="z-index: 1001"><input id="comm_select_id" name="comm_select_id" type="hidden" value="" /> <input id="comm_select" name="community_selector" placeholder="Enter a community name" type="text" value="" /></div>
</div>

<div>
<div class="col-md-6">
<div class="inline-controls pull-left">
<p>Dataset</p>

<div class="buttonset" id="variable_buttons"><input checked="checked" id="variable_temperature" name="dataset" type="radio" value="1" /><label for="variable_temperature">Temperature</label> <input id="variable_precipitation" name="dataset" type="radio" value="2" /><label for="variable_precipitation">Precipitation</label></div>
</div>

<div class="inline-controls inline-controls-right">
<p>Units</p>

<div class="buttonset" id="unit_buttons"><input checked="checked" id="unit_standard" name="units" type="radio" value="standard" /><label for="unit_standard">°F</label> <input id="unit_metric" name="units" type="radio" value="metric" /><label for="unit_metric">°C</label></div>
</div>

<div class="inline-controls pull-left-padded">
  <p>Historical Baseline</p>

  <div class="buttonset" id="baseline_buttons"><input checked="checked" id="baseline_cru" name="baseline" type="radio" value="cru32" /><label for="baseline_cru">CRU 3.2</label><input id="baseline_prism" name="baseline" type="radio" value="prism" /><label for="baseline_prism">PRISM</label></div>

<div class="helpbuttons"><button id="baseline_help">Historical Baselines</button></div>
<br/>
<span style="font-size: 10px;">* Northwest Territories communities only available for CRU 3.2 baseline choice. </span>
</div>
</div>
</div>

<div class="col-md-6">
<div class="inline-controls pull-left">
<p>Representative Concentration Pathways </p>

<div class="buttonset" id="scenario_buttons"><input id="scenario_rcp45" name="scenario" type="radio" value="rcp45" /><label for="scenario_rcp45">Low (RCP 4.5)</label> <input checked="checked" id="scenario_rcp60" name="scenario" type="radio" value="rcp60" /><label for="scenario_rcp60">Medium (RCP 6.0)</label> <input id="scenario_rcp85" name="scenario" type="radio" value="rcp85" /><label for="scenario_rcp85">High (RCP 8.5)</label></div>

<div class="helpbuttons"><button id="dataset_help">Representative Concentration Pathways</button></div>
</div>

<div class="inline-controls pull-left">
<p>Inter-model variability</p>

<div class="buttonset" id="variability_buttons"><input checked="checked" id="variability_off" name="variability" type="radio" value="0" /><label for="variability_off">Off</label> <input id="variability_overlay" name="variability" type="radio" value="1" /><label for="variability_overlay">Range</label></div>

<div class="helpbuttons"><button id="variability_help">Variability Among Models</button></div>
</div>
</div>
</div>
</div>
<!-- end row -->

<div class="row">
<div class="md-col-12">

<div id="chart_div">&nbsp;</div>
<div id="chartTools" style="display: none;"><button id="export_options">Download this chart</button></div>
<br/>
<div id="credits">Due to variability among climate models and among years in a natural climate system, these graphs are useful for examining trends over time, rather than for precisely predicting monthly or yearly values.</div>
<div class="methods text">
<h3>How to interpret climate outlooks for your community</h3>

<p>You can examine SNAP community outlooks for certain key changes and threshold values—for example, higher mean monthly temperatures in the spring and fall may be of particular interest. This could signify any or all of these conditions:</p>

<ul>
    <li>a longer growing season</li>
    <li>a loss of ice and/or frozen ground needed for travel or food storage</li>
    <li>a shift in precipitation from snow to rain, which impacts water storage capacity and surface water availability</li>
</ul>

<p>Note: Precipitation may occur as either rain or snow, but is reported for all months in terms of rainwater equivalent.</p>

<p>Warmer, drier spring weather may also be an indicator for increased fire risk. In many locations, winter temperatures are projected to increase dramatically. Warmer winters may favor growth of species that are less cold-hardy (including desirable crops and invasive species), or it may decrease snowpack and increase the frequency of rain-on-snow events that impact wildlife. Higher temperatures across all seasons will likely impact permafrost and land-fast ice. <a id="derive_help">Learn more about how we derived the community climate outlooks</a>
</p>

<div class="about_dialog" id="modal_block" style="display: none;">

<p><strong>Data sources: </strong>Historical <abbr title="Parameter-elevation Regressions on Independent Slopes Model">PRISM</abbr> and CRU TS 3.2 climatology data (1961-1990) and downscaled outputs averaged from five <abbr title="General Circulation Models">GCMs</abbr>. <a href="https://www.snap.uaf.edu/methods/downscaling">Learn more about how we downscale climate data from global to regional scales.</a></p>

<p><strong>We averaged results to smooth out short-term variability. </strong>Results are averaged across decades to lessen the influence of normal year-to-year climate variability on projected values. Averaging also tends to make overall projection trends clearer. Uncertainty is associated with each of these graphed values, and stems from:</p>

<ul>
    <li>modeling of atmospheric and oceanic movements used to create <abbr title="General Circulation Models">GCMs</abbr></li>
    <li>the downscaling process</li>
    <li>the assumptions made regarding greenhouse gas levels for each emissions scenario</li>
    <li><a href="https://www.snap.uaf.edu/methods/uncertainty">Learn more about uncertainty in SNAP’s climate research work.</a></li>
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

<p>Your download should begin shortly. High–resolution PNG images can take up to a minute to process on the server before the download begins. If you experience problems, please <a href="mailto:takurkowski@alaska.edu">let us know</a>.</p>
</div>

<div class="about_dialog" id="about_baselines" style="display: none;">

<p>Climate Research Unit (CRU) and Parameter elevation Regression on Independent Slopes Model (PRISM) refer to two different models used by different research groups to create gridded climate datasets from available historical information.  </p>

<p>Historical climate information is available from only a limited number of climate stations across Alaska and western Canada.  These climate stations are not only few and far between, but also tend to be located in low-lying towns and cities, rather than in inaccessible locations such as mountain ranges.  Thus, estimating historical (baseline) data for regularly spaced intervals on a map (gridded data) poses a challenge for modelers. </p> 

<p>Most of SNAP's downscaled modeling relies on PRISM as a baseline, as described here: <a href="https://www.snap.uaf.edu/methods/downscaling">Downscaling Methods</a>.  PRISM creates fine-scale climate grids using not only climate station data but also the location of each grid point relative to nearby climate stations, and its elevation, slope, direction of slope, proximity to coastlines, and other features. Baseline historical PRISM data and future projections downscaled using two-kilometer PRISM baseline grids represent one of the choices available in this chart tool.</p>

<p>CRU grids rely on similar, but not identical, modeling techniques.  Thus, comparing PRISM-downscaled data to CRU-downscaled data offers a perspective on model uncertainty related to the challenges of creating gridded climate data from limited historical data.  CRU data are coarser, but cover a broader area, including Canada's Northwest Territories, for which PRISM data are not currently available.  Baseline CRU data and future projections downscaled using CRU grids at 10' latitude and longitude (about 18 km) represent the other choice available in this chart tool.</p>
</div>

<div class="about_dialog" id="about_scenarios" style="display: none;">
<p>The four different Representative Concentration Pathways (RCPs) adopted by the IPCC as of its fifth Assessment Report (AR5) in 2014 depict a range of possible future atmospheric greenhouse gas concentrations. These pathways represent four climate futures, extrapolated out to the year 2100, based on a range of possible future human behaviors. Their numerical values (2.6, 4.5, 6.0, and 8.5) measure radiative forcing values (W/m2) relative to pre-industrial values. For example, RPC 6.0 projects that in 2100 the concentration of greenhouse gases will be such that the solar energy absorbed by each square meter of Earth (rather than radiated back into space) will be, on average, six watts per meter squared greater than it was in 1750.</p>

<h4>RCP 4.5 (low)</h4>

<p>This pathway assumes that emissions peak around 2040, and that radiative forcing is stabilized shortly after 2100. SNAP terms this the “low” scenario.  It was developed at the Pacific Northwest National Laboratory’s Joint Global Change Research Institute in the United States.</p>

<h4>RCP 6.0 (medium)</h4>

<p>This RCP assumes that a range of technologies and strategies for reducing greenhouse gas emissions are developed, allowing emissions to peak around 2080, then decline, with total radiative forcing stabilized shortly after 2100. This is SNAP’s “medium” scenario. It was developed at the National Institute for Environmental Studies in Japan.</p>

<h4>RCP 8.5 (high)</h4>

<p>This potential future is characterized by increasing greenhouse gas emissions continuing through the 21st century. SNAP uses this as its “high” scenario. It was developed at the International Institute for Applied Systems Analysis, Austria.</p>

<h4>Note</h4>
<p>An additional set of projections, RCP 2.6, posits that greenhouse gas emissions peak between 2010 and 2020 and decline substantially thereafter. It was developed by at the PBL Netherlands Environmental Assessment Agency. Because its premises are unrealistic in light of current global emissions, SNAP does not use this pathway for modeling purposes.</p>
</div>

<div class="about_dialog" id="about_variability" style="display: none;">
<p>SNAP uses five different global circulation models (GCMs) as a basis for our down-scaled climate projections, as explained on this website under "Methods".  Slight variations between these models allow us to consider a range of possible future climate conditions. This chart tool offers users a way to visualize this variability. </p>

<p>If you click on "Range", you will see a bar graph for your selected community with black lines extending above and below each bar.  The colored bars represent the average (mean) values from all five models, and the black lines show the lowest and highest values among the five models used.   Baseline years have no range values, because they are derived directly from climate station data, rather than from the five models.

<p>If you click on "Off", the bar chart will show the five-model average with no black lines indicating range.</p>
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
</body>
</html>
