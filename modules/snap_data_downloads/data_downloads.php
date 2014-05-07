<?php

$imagePath = drupal_get_path('module', 'snap_data_downloads').'/images/';

$Cruts31DataAlert = <<<html

<div class="ui-widget cruts-31-data-alert" style="margin: 1em 0;">
  <div class="ui-state-highlight ui-corner-all" style="padding: 1ex;"> 
    <p style="margin: 0; padding: 1ex;"> 
    <span class="ui-icon ui-icon-info" style="float: left; margin-right: 1ex;"></span>
The Climatic Research Unit (CRU) <a href="http://badc.nerc.ac.uk/view/badc.nerc.ac.uk__ATOM__dataent_1256223773328276">discovered a systematic error</a> in their CRUTS v3.1 precipitation data, and have addressed those errors with a new update (v3.1.01).  All previous SNAP products based upon CRUTS v3.1 precipitation have been updated to reflect this update to 3.1.01.  <strong>SNAP encourages users to download this new update and discard the previous CRU TS v3.1 precipitation data</strong>.
  </div>
</div>

html;

$snap_data_downloads_content = <<<html



<h3 id="Projected">Modeled historical and projected data</h3>

<div class="dataAccordionWrapper">

<div class="dataAccordion">

<h3><a href="#dataset=Historical_Estimates_and_Projections_of_Sea_Ice_Concentration">Historical estimates and projections of sea ice concentration &ndash; 0.4&deg; CMIP5/AR5</a></h3>
<div>
<p><img src="${imagePath}polar_extent.png" alt="polar extent" />This set of files includes modeled historical estimates and future projections of monthly sea ice concentration (in percent cover, 0&ndash;100) for each month of every year from January 1860&ndash;December 2100* at 0.4 x 0.4&deg; spatial resolution from 5 top ranking CMIP5 global climate models (GCMs). Each file represents a single month in a given year.</p>
<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>NA</td></tr>
<tr><th scope="row">Spatial resolution</th><td>0.4&deg;</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Polar</td></tr>
</tbody>
</table>


<h4>Metadata</h4><p><a href="#" class="metadataLink" data-geonetwork-metadata-id="101">Historical estimates and projections of sea ice concentration AR5</a></p>
<h4>Products</h4>
<ul>
  <li><a href="/files/data/monthly/sic_con_pct_5-Models_historical_01-12_1860-2005.zip">sic_con_pct_5-Models_historical_01-12_1860-2005.zip</a> (1.2 GB)</li>
  <li><a href="/files/data/monthly/sic_con_pct_5-Models_rcp85_01-12_2006-2100.zip">sic_con_pct_5-Models_rcp85_01-12_2006-2100.zip</a> (621 MB)</li>
</ul>
</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=Historical_Daily_Mean_Quantile_Mapped_Temperatures">Historical daily mean quantile mapped temperatures &ndash; 2.5&deg; CMIP5/AR5</a></h3>
<div>
<p><img src="${imagePath}worldwide_extent.png" alt="worldwide extent" />These data include quantile&ndash;mapped historical model runs of AR5 daily mean temperature (tas,&deg; C) for each day of every year from 1958&ndash;2005 at 2.5 x 2.5 degree spatial resolution across 3 AR5 models utilizing the “historical” GCM model run. They are 365 multi&ndash;band geoTIFF files, one file per year, each band representing one day of the year, with no leap years.</p>
<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1958&ndash;2001 ERA&ndash;40</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2.5&deg;</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Worldwide</td></tr>
</tbody>
</table>


<h4>Metadata</h4><p><a href="#" class="metadataLink" data-geonetwork-metadata-id="114">Historical daily mean quantile mapped temperatures &ndash; 2.5&deg; AR5</a></p>
<h4>Products</h4><p><a href="/files/data/monthly/tas_mean_C_AR5_3-Models_historical_365_1958-2005.zip">tas_mean_C_AR5_3-Models_historical_365_1958-2005.zip</a> (840 MB)</p>
</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=Projected_Daily_Mean_Quantile_Mapped_Temperatures">Projected daily mean quantile mapped temperatures &ndash; 2.5&deg; CMIP5/AR5</a></h3>
<div>
<p><img src="${imagePath}worldwide_extent.png" alt="worldwide extent" />These data include quantile&ndash;mapped historical model runs of AR5 daily mean temperature (tas,&deg; C) for each day of every year from 2006&ndash;2100 at 2.5 x 2.5 degree spatial resolution across 3 AR5 models and 2 RCPs. They are 365 multi&ndash;band geoTIFF files, one file per year, each band representing one day of the year, with no leap years.</p>
<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1958&ndash;2001 ERA&ndash;40</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2.5&deg;</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Worldwide</td></tr>
</tbody>
</table>


<h4>Metadata</h4><p><a href="#" class="metadataLink" data-geonetwork-metadata-id="100">Projected daily mean quantile mapped temperatures &ndash; 2.5&deg; AR5</a></p>
<h4>Products</h4>
<ul>
  <li><a href="/files/data/monthly/tas_mean_C_AR5_3-Models_rcp60_365_2006-2100.zip">tas_mean_C_AR5_3-Models_rcp60_365_2006-2100.zip</a> (1.7 GB)</li>
  <li><a href="/files/data/monthly/tas_mean_C_AR5_3-Models_rcp85_365_2006-2100.zip">tas_mean_C_AR5_3-Models_rcp85_365_2006-2100.zip</a> (1.7 GB)</li>
</ul>
</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=Historical_Daily_Quantile_Mapped_Near_Surface_Wind_Velocity">Historical daily quantile mapped near surface wind velocity &ndash; 2.5&deg; CMIP5/AR5</a></h3>
<div>
<p><img src="${imagePath}worldwide_extent.png" alt="worldwide extent" />These data include quantile&ndash;mapped historical model runs of AR5 daily near surface wind velocity (uas: West/East component of wind, vas: North/South component, m/s) for each day of every year from 1958&ndash;2100 at 2.5 x 2.5 degree spatial resolution across 3 AR5 models utilizing the “historical” GCM model run. They are 365 multi&ndash;band geoTIFF files, one file per year, each band representing one day of the year, with no leap years.</p>
<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1958&ndash;2001 ERA&ndash;40</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2.5&deg;</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Worldwide</td></tr>
</tbody>
</table>


<h4>Metadata</h4><p><a href="#" class="metadataLink" data-geonetwork-metadata-id="115">Historical daily quantile mapped near surface wind velocity &ndash; 2.5&deg; AR5</a></p>
<h4>Products</h4>
<ul>
  <li><a href="/files/data/monthly/uas_mean_mps_AR5_3-Models_historical_365_1958-2005.zip">uas_mean_mps_AR5_3-Models_historical_365_1958-2005.zip</a> (826 MB)</li>
  <li><a href="/files/data/monthly/vas_mean_mps_AR5_3-Models_historical_365_1958-2005.zip">vas_mean_mps_AR5_3-Models_historical_365_1958-2005.zip</a> (820 MB)</li>
</ul>
</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=Projected_Daily_Quantile_Mapped_Near_Surface_Wind_Velocity">Projected daily quantile mapped near surface wind velocity &ndash; 2.5&deg; CMIP5/AR5</a></h3>
<div>
<p><img src="${imagePath}worldwide_extent.png" alt="worldwide extent" />These data include quantile&ndash;mapped projections of AR5 daily near surface wind velocity (uas: West/East component of wind, vas: North/South component, m/s) for each day of every year from 1958&ndash;2100 at 2.5 x 2.5 degree spatial resolution across 3 AR5 models and 2 RCPs. They are 365 multi&ndash;band geoTIFF files, one file per year, each band representing one day of the year, with no leap years.</p>
<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1958&ndash;2001 ERA&ndash;40</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2.5&deg;</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Worldwide</td></tr>
</tbody>
</table>


<h4>Metadata</h4><p><a href="#" class="metadataLink" data-geonetwork-metadata-id="116">Projected daily quantile mapped near surface wind velocity &ndash; 2.5&deg; AR5</a></p>
<h4>Products</h4>
<ul>
  <li><a href="/files/data/monthly/uas_mean_mps_AR5_3-Models_rcp60_365_2006-2100.zip">uas_mean_mps_AR5_3-Models_rcp60_365_2006-2100.zip</a> (1.6 GB)</li>
  <li><a href="/files/data/monthly/uas_mean_mps_AR5_3-Models_rcp85_365_2006-2100.zip">uas_mean_mps_AR5_3-Models_rcp85_365_2006-2100.zip</a> (1.6 GB)</li>
  <li><a href="/files/data/monthly/vas_mean_mps_AR5_3-Models_rcp60_365_2006-2100.zip">vas_mean_mps_AR5_3-Models_rcp60_365_2006-2100.zip</a> (1.6 GB)</li>
  <li><a href="/files/data/monthly/vas_mean_mps_AR5_3-Models_rcp85_365_2006-2100.zip">vas_mean_mps_AR5_3-Models_rcp85_365_2006-2100.zip</a> (1.6 GB)</li>
</ul>
</div>
</div>


<!-- AR5-uploads -->
<br/>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=projected_monthly_temperature_and_precipitation_2km_ar5">Projected monthly temperature and precipitation - 2km CMIP5/AR5</a></h3>
<div>
<p><img src="${imagePath}akcanada_extent.png" alt="alaska-canada extent" />Projected (2006&ndash;2100: RCP 4.5, 6.0. 8.5 scenarios) monthly average temperature and total precipitation from 5 AR5 GCMs that perform best across Alaska and the Arctic, downscaled to 2km via the <a href="/methods/downscaling">delta method.</a> A 5&ndash;Model Average is also included.</p>
<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2km</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska and Western Canada (YT, BC, AB, SK, MB)</td></tr>
</tbody>
</table>


<h4>Temperature</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="120">Projected Monthly Average Temperature 2km AR5</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">RCP 4.5</th>
<th scope="col">RCP 6.0</th>
<th scope="col">RCP 8.5</th>
</tr>
</thead>

<tbody>


<tr>
<th scope="row">5&ndash;model Average</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_5modelAvg_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_5modelAvg_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_5modelAvg_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
</tr>

<tr>
<th scope="row">CCSM4</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_CCSM4_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_CCSM4_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_CCSM4_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
</tr>



<tr>
<th scope="row">GFDL-CM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_GFDL-CM3_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_GFDL-CM3_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_GFDL-CM3_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
</tr>



<tr>
<th scope="row">GISS-E2-R</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_GISS-E2-R_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_GISS-E2-R_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_GISS-E2-R_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
</tr>


<tr>
<th scope="row">IPSL-CM5A-LR</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_IPSL-CM5A-LR_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_IPSL-CM5A-LR_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_IPSL-CM5A-LR_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
</tr>


<tr>
<th scope="row">MRI-CGCM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_MRI-CGCM3_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_MRI-CGCM3_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_mean_C_AK_CAN_AR5_MRI-CGCM3_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (2.5 GB)
</td>
</tr>



</tbody>
</table>

<h4>Precipitation</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="121">Projected Monthly Total Precipitation 2km AR5</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col">Model</th>
<th scope="col">RCP 4.5</th>
<th scope="col">RCP 6.0</th>
<th scope="col">RCP 8.5</th>
</tr>
</thead>
<tbody>


<tr>
<th scope="row">5&ndash;model Average</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_5modelAvg_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_5modelAvg_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_5modelAvg_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
</tr>


<tr>
<th scope="row">CCSM4</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_CCSM4_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_CCSM4_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_CCSM4_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
</tr>



<tr>
<th scope="row">GFDL-CM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_GFDL-CM3_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_GFDL-CM3_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_GFDL-CM3_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (2.3 GB)
</td>
</tr>



<tr>
<th scope="row">GISS-E2-R</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_GISS-E2-R_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_GISS-E2-R_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_GISS-E2-R_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
</tr>



<tr>
<th scope="row">IPSL-CM5A-LR</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_IPSL-CM5A-LR_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_IPSL-CM5A-LR_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_IPSL-CM5A-LR_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
</tr>



<tr>
<th scope="row">MRI-CGCM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_MRI-CGCM3_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_MRI-CGCM3_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (2.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_total_mm_AK_CAN_AR5_MRI-CGCM3_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (2.3 GB)
</td>
</tr>



</tbody>
</table>

</div>
</div>

<!-- end first AR5 block -->
<!-- second block -->

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=projected_derived_temperature_products_2km_ar5">Projected derived temperature products - 2km CMIP5/AR5</a></h3>
<div>
<p><img src="${imagePath}akcanada_extent.png" alt="alaska-canada extent" />Projected (2010&ndash;2100: RCP 4.5, 6.0. 8.5 scenarios) derived temperature products from 5 AR5 GCMs that perform best across Alaska and the Arctic, downscaled to 2km via the <a href="/methods/downscaling">delta method.</a> A 5&ndash;Model Average is also included.</p>
<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2km</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska and Western Canada (YT, BC, AB, SK, MB)</td></tr>
</tbody>
</table>


<h4>Temperature</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="122">Projected derived temperature products - 2km CMIP5/AR5 Decadal Summaries by Month, Year</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">RCP 4.5</th>
<th scope="col">RCP 6.0</th>
<th scope="col">RCP 8.5</th>
</tr>
</thead>

<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_5modelAvg_rcp45.zip">2010&ndash;2100</a> (328 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_5modelAvg_rcp60.zip">2010&ndash;2100</a> (327 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_5modelAvg_rcp85.zip">2010&ndash;2100</a> (328 MB)
</td>
</tr>


<tr>
<th scope="row">CCSM4</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_CCSM4_rcp45.zip">2010&ndash;2100</a> (329 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_CCSM4_rcp60.zip">2010&ndash;2100</a> (328 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_CCSM4_rcp85.zip">2010&ndash;2100</a> (330 MB)
</td>
</tr>




<tr>
<th scope="row">GFDL-CM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_GFDL-CM3_rcp45.zip">2010&ndash;2100</a> (326 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_GFDL-CM3_rcp60.zip">2010&ndash;2100</a> (327 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_GFDL-CM3_rcp85.zip">2010&ndash;2100</a> (327 MB)
</td>
</tr>




<tr>
<th scope="row">GISS-E2-R</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_GISS-E2-R_rcp45.zip">2010&ndash;2100</a> (330 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_GISS-E2-R_rcp60.zip">2010&ndash;2100</a> (329 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_GISS-E2-R_rcp85.zip">2010&ndash;2100</a> (330 MB)
</td>
</tr>


<tr>
<th scope="row">IPSL-CM5A-LR</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_IPSL-CM5A-LR_rcp45.zip">2010&ndash;2100</a> (328 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_IPSL-CM5A-LR_rcp60.zip">2010&ndash;2100</a> (327 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_IPSL-CM5A-LR_rcp85.zip">2010&ndash;2100</a> (328 MB)
</td>
</tr>



<tr>
<th scope="row">MRI-CGCM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_MRI-CGCM3_rcp45.zip">2010&ndash;2100</a> (329 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_MRI-CGCM3_rcp60.zip">2010&ndash;2100</a> (328 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/tas_decadal_summaries_AK_CAN_2km_MRI-CGCM3_rcp85.zip">2010&ndash;2100</a> (329 MB)
</td>
</tr>



</tbody>
</table>

<h4>Season Day of Freeze, Thaw, Length of Growing Season</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="127">Projected derived temperature products - 2km CMIP5/AR5 Decadal Summaries by Season Day of Freeze, Thaw, Length of Growing Season</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">RCP 4.5</th>
<th scope="col">RCP 6.0</th>
<th scope="col">RCP 8.5</th>
</tr>
</thead>
<tbody>


<tr>
<th scope="row">5&ndash;model Average</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_5modelAvg_rcp45.zip">2010&ndash;2100</a> (43 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_5modelAvg_rcp60.zip">2010&ndash;2100</a> (43 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_5modelAvg_rcp85.zip">2010&ndash;2100</a> (43 MB)
</td>
</tr>

<tr>
<th scope="row">CCSM4</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_CCSM4_rcp45.zip">2010&ndash;2100</a> (43 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_CCSM4_rcp60.zip">2010&ndash;2100</a> (42 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_CCSM4_rcp85.zip">2010&ndash;2100</a> (42 MB)
</td>
</tr>


<tr>
<th scope="row">GFDL-CM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_GFDL-CM3_rcp45.zip">2010&ndash;2100</a> (41 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_GFDL-CM3_rcp60.zip">2010&ndash;2100</a> (41 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_GFDL-CM3_rcp85.zip">2010&ndash;2100</a> (41 MB)
</td>
</tr>


<tr>
<th scope="row">GISS-E2-R</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_GISS-E2-R_rcp45.zip">2010&ndash;2100</a> (43 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_GISS-E2-R_rcp60.zip">2010&ndash;2100</a> (43 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_GISS-E2-R_rcp85.zip">2010&ndash;2100</a> (43 MB)
</td>
</tr>


<tr>
<th scope="row">IPSL-CM5A-LR</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_IPSL-CM5A-LR_rcp45.zip">2010&ndash;2100</a> (43 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_IPSL-CM5A-LR_rcp60.zip">2010&ndash;2100</a> (42 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_IPSL-CM5A-LR_rcp85.zip">2010&ndash;2100</a> (42 MB)
</td>
</tr>


<tr>
<th scope="row">MRI-CGCM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_MRI-CGCM3_rcp45.zip">2010&ndash;2100</a> (42 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_MRI-CGCM3_rcp60.zip">2010&ndash;2100</a> (42 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/dot_dof_logs_AK_CAN_2km_MRI-CGCM3_rcp85.zip">2010&ndash;2100</a> (42 MB)
</td>
</tr>



</tbody>
</table>

</div>
</div>

<!-- end second block -->
<!-- start third ar5 block -->

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=projected_derived_precipitation_products_2km_ar5">Projected derived precipitation products - 2km CMIP5/AR5</a></h3>
<div>
<p><img src="${imagePath}akcanada_extent.png" alt="alaska-canada extent" />Projected (2010&ndash;2100: historical run and RCP 4.5, 6.0. 8.5 scenarios) derived precipitation products from 5 AR5 GCMs that perform best across Alaska and the Arctic, downscaled to 2km via the <a href="/methods/downscaling">delta method.</a> A 5&ndash;Model Average is also included.</p>
<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2km</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska and Western Canada (YT, BC, AB, SK, MB)</td></tr>
</tbody>
</table>


<h4>Precipitation</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="126">Projected derived precipitation products - 2km CMIP5/AR5 Decadal Summaries by Month, Year, or Season</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">RCP 4.5</th>
<th scope="col">RCP 6.0</th>
<th scope="col">RCP 8.5</th>
</tr>
</thead>

<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_5modelAvg_rcp45.zip">2010&ndash;2100</a> (314 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_5modelAvg_rcp60.zip">2010&ndash;2100</a> (314 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_5modelAvg_rcp85.zip">2010&ndash;2100</a> (316 MB)
</td>
</tr>


<tr>
<th scope="row">CCSM4</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_CCSM4_rcp45.zip">2010&ndash;2100</a> (315 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_CCSM4_rcp60.zip">2010&ndash;2100</a> (315 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_CCSM4_rcp85.zip">2010&ndash;2100</a> (318 MB)
</td>
</tr>




<tr>
<th scope="row">GFDL-CM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_GFDL-CM3_rcp45.zip">2010&ndash;2100</a> (321 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_GFDL-CM3_rcp60.zip">2010&ndash;2100</a> (322 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_GFDL-CM3_rcp85.zip">2010&ndash;2100</a> (325 MB)
</td>
</tr>




<tr>
<th scope="row">GISS-E2-R</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_GISS-E2-R_rcp45.zip">2010&ndash;2100</a> (316 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_GISS-E2-R_rcp60.zip">2010&ndash;2100</a> (315 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_GISS-E2-R_rcp85.zip">2010&ndash;2100</a> (317 MB)
</td>
</tr>


<tr>
<th scope="row">IPSL-CM5A-LR</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_IPSL-CM5A-LR_rcp45.zip">2010&ndash;2100</a> (314 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_IPSL-CM5A-LR_rcp60.zip">2010&ndash;2100</a> (314 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_IPSL-CM5A-LR_rcp85.zip">2010&ndash;2100</a> (317 MB)
</td>
</tr>



<tr>
<th scope="row">MRI-CGCM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_MRI-CGCM3_rcp45.zip">2010&ndash;2100</a> (317 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_MRI-CGCM3_rcp60.zip">2010&ndash;2100</a> (318 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_CAN_2km/pr_decadal_summaries_AK_CAN_2km_MRI-CGCM3_rcp85.zip">2010&ndash;2100</a> (319 MB)
</td>
</tr>



</tbody>
</table>


</div>
</div>

<!-- Start 771km AR5 -->
<br/>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=projected_monthly_temperature_and_precipitation_771m_ar5">Projected monthly temperature and precipitation &ndash; 771m CMIP5/AR5</a></h3>
<div>
<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />Projected (2006&ndash;2100: RCP 4.5, 6.0. 8.5 scenarios) monthly average temperature and total precipitation from 5 AR5 GCMs that perform best across Alaska and the Arctic, downscaled to 771m via the <a href="/methods/downscaling">delta method.</a> A 5&ndash;Model Average is also included.</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1971&ndash;2000 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska</td></tr>
</tbody>
</table>



<h4>Temperature</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="118">Projected Monthly Average Temperature 771m AR5</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">RCP 4.5</th>
<th scope="col">RCP 6.0</th>
<th scope="col">RCP 8.5</th>
</tr>
</thead>

<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_5modelAvg_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (4.7 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_5modelAvg_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (4.7 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_5modelAvg_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
</tr>

<tr>
<th scope="row">CCSM4</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_CCSM4_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_CCSM4_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_CCSM4_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
</tr>



<tr>
<th scope="row">GFDL-CM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_GFDL-CM3_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_GFDL-CM3_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_GFDL-CM3_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
</tr>



<tr>
<th scope="row">GISS-E2-R</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_GISS-E2-R_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_GISS-E2-R_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_GISS-E2-R_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
</tr>


<tr>
<th scope="row">IPSL-CM5A-LR</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_IPSL-CM5A-LR_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_IPSL-CM5A-LR_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_IPSL-CM5A-LR_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
</tr>


<tr>
<th scope="row">MRI-CGCM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_MRI-CGCM3_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_MRI-CGCM3_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_mean_C_AK_AR5_MRI-CGCM3_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (4.8 GB)
</td>
</tr>



</tbody>
</table>

<h4>Precipitation</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="119">Projected Monthly Total Precipitation 771m AR5</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">RCP 4.5</th>
<th scope="col">RCP 6.0</th>
<th scope="col">RCP 8.5</th>
</tr>
</thead>
<tbody>


<tr>
<th scope="row">5&ndash;model Average</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_5modelAvg_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (4.1 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_5modelAvg_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (4.1 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_5modelAvg_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (4.2 GB)
</td>
</tr>


<tr>
<th scope="row">CCSM4</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_CCSM4_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (4.1 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_CCSM4_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (4.1 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_CCSM4_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (4.1 GB)
</td>
</tr>



<tr>
<th scope="row">GFDL-CM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_GFDL-CM3_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (4.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_GFDL-CM3_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (4.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_GFDL-CM3_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (4.3 GB)
</td>
</tr>



<tr>
<th scope="row">GISS-E2-R</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_GISS-E2-R_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (4.1 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_GISS-E2-R_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (4.1 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_GISS-E2-R_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (4.2 GB)
</td>
</tr>



<tr>
<th scope="row">IPSL-CM5A-LR</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_IPSL-CM5A-LR_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (4.1 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_IPSL-CM5A-LR_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (4.1 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_IPSL-CM5A-LR_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (4.2 GB)
</td>
</tr>



<tr>
<th scope="row">MRI-CGCM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_MRI-CGCM3_rcp45_01_2006-12_2100.zip">2006&ndash;2100</a> (4.1 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_MRI-CGCM3_rcp60_01_2006-12_2100.zip">2006&ndash;2100</a> (4.2 GB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_total_mm_AK_AR5_MRI-CGCM3_rcp85_01_2006-12_2100.zip">2006&ndash;2100</a> (4.2 GB)
</td>
</tr>



</tbody>
</table>

</div>
</div>

<!-- end first 771m AR5 block -->
<!-- second 771m block -->

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=projected_derived_temperature_products_771km_ar5">Projected derived temperature products &ndash; 771m CMIP5/AR5</a></h3>
<div>
<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />Projected (2010&ndash;2100: historical run and RCP 4.5, 6.0. 8.5 scenarios) derived temperature products from 5 AR5 GCMs that perform best across Alaska and the Arctic, downscaled to 771m via the <a href="/methods/downscaling">delta method.</a> A 5&ndash;Model Average is also included.</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1971&ndash;2000 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska</td></tr>
</tbody>
</table>



<h4>Temperature</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="125">Projected derived temperature products &ndash; 771m CMIP5/AR5 Decadal Summaries by Month, Year</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">RCP 4.5</th>
<th scope="col">RCP 6.0</th>
<th scope="col">RCP 8.5</th>
</tr>
</thead>

<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_5modelAvg_rcp45.zip">2010&ndash;2100</a> (633 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_5modelAvg_rcp60.zip">2010&ndash;2100</a> (633 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_5modelAvg_rcp85.zip">2010&ndash;2100</a> (633 MB)
</td>
</tr>


<tr>
<th scope="row">CCSM4</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_CCSM4_rcp45.zip">2010&ndash;2100</a> (635 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_CCSM4_rcp60.zip">2010&ndash;2100</a> (634 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_CCSM4_rcp85.zip">2010&ndash;2100</a> (634 MB)
</td>
</tr>




<tr>
<th scope="row">GFDL-CM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_GFDL-CM3_rcp45.zip">2010&ndash;2100</a> (638 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_GFDL-CM3_rcp60.zip">2010&ndash;2100</a> (637 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_GFDL-CM3_rcp85.zip">2010&ndash;2100</a> (638 MB)
</td>
</tr>




<tr>
<th scope="row">GISS-E2-R</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_GISS-E2-R_rcp45.zip">2010&ndash;2100</a> (634 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_GISS-E2-R_rcp60.zip">2010&ndash;2100</a> (634 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_GISS-E2-R_rcp85.zip">2010&ndash;2100</a> (634 MB)
</td>
</tr>


<tr>
<th scope="row">IPSL-CM5A-LR</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_IPSL-CM5A-LR_rcp45.zip">2010&ndash;2100</a> (635 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_IPSL-CM5A-LR_rcp60.zip">2010&ndash;2100</a> (636 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_IPSL-CM5A-LR_rcp85.zip">2010&ndash;2100</a> (636 MB)
</td>
</tr>



<tr>
<th scope="row">MRI-CGCM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_MRI-CGCM3_rcp45.zip">2010&ndash;2100</a> (634 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_MRI-CGCM3_rcp60.zip">2010&ndash;2100</a> (634 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/tas_decadal_summaries_AK_771m_MRI-CGCM3_rcp85.zip">2010&ndash;2100</a> (634 MB)
</td>
</tr>



</tbody>
</table>

<h4>Season Day of Freeze, Thaw, Length of Growing Season</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="123">Projected derived temperature products &ndash; 771m CMIP5/AR5 Decadal Summaries by Season Day of Freeze, Thaw, Length of Growing Season</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">RCP 4.5</th>
<th scope="col">RCP 6.0</th>
<th scope="col">RCP 8.5</th>
</tr>
</thead>
<tbody>


<tr>
<th scope="row">5&ndash;model Average</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_5modelAvg_rcp45.zip">2010&ndash;2100</a> (84 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_5modelAvg_rcp60.zip">2010&ndash;2100</a> (83 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_5modelAvg_rcp85.zip">2010&ndash;2100</a> (79 MB)
</td>
</tr>

<tr>
<th scope="row">CCSM4</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_CCSM4_rcp45.zip">2010&ndash;2100</a> (82 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_CCSM4_rcp60.zip">2010&ndash;2100</a> (82 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_CCSM4_rcp85.zip">2010&ndash;2100</a> (79 MB)
</td>
</tr>


<tr>
<th scope="row">GFDL-CM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_GFDL-CM3_rcp45.zip">2010&ndash;2100</a> (81 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_GFDL-CM3_rcp60.zip">2010&ndash;2100</a> (80 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_GFDL-CM3_rcp85.zip">2010&ndash;2100</a> (79 MB)
</td>
</tr>


<tr>
<th scope="row">GISS-E2-R</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_GISS-E2-R_rcp45.zip">2010&ndash;2100</a> (83 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_GISS-E2-R_rcp60.zip">2010&ndash;2100</a> (82 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_GISS-E2-R_rcp85.zip">2010&ndash;2100</a> (80 MB)
</td>
</tr>


<tr>
<th scope="row">IPSL-CM5A-LR</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_IPSL-CM5A-LR_rcp45.zip">2010&ndash;2100</a> (81 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_IPSL-CM5A-LR_rcp60.zip">2010&ndash;2100</a> (80 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_IPSL-CM5A-LR_rcp85.zip">2010&ndash;2100</a> (79 MB)
</td>
</tr>


<tr>
<th scope="row">MRI-CGCM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_MRI-CGCM3_rcp45.zip">2010&ndash;2100</a> (81 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_MRI-CGCM3_rcp60.zip">2010&ndash;2100</a> (81 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/dot_dof_logs_AK_771m_MRI-CGCM3_rcp85.zip">2010&ndash;2100</a> (79 MB)
</td>
</tr>



</tbody>
</table>

</div>
</div>

<!-- end second block -->
<!-- start third ar5 block -->

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=projected_derived_precipitation_products_771m_ar5">Projected derived precipitation products &ndash; 771m CMIP5/AR5</a></h3>
<div>
<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />Projected (2010&ndash;2100: historical run and RCP 4.5, 6.0. 8.5 scenarios) derived precipitation products from 5 AR5 GCMs that perform best across Alaska and the Arctic, downscaled to 771m via the <a href="/methods/downscaling">delta method.</a> A 5&ndash;Model Average is also included.</p>


<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1971&ndash;2000 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska</td></tr>
</tbody>
</table>


<h4>Precipitation</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="124">Projected derived precipitation products &ndash; 771m CMIP5/AR5 Decadal Summaries by Month, Year, or Season</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">RCP 4.5</th>
<th scope="col">RCP 6.0</th>
<th scope="col">RCP 8.5</th>
</tr>
</thead>

<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_5modelAvg_rcp45.zip">2010&ndash;2100</a> (613 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_5modelAvg_rcp60.zip">2010&ndash;2100</a> (613 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_5modelAvg_rcp85.zip">2010&ndash;2100</a> (621 MB)
</td>
</tr>


<tr>
<th scope="row">CCSM4</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_CCSM4_rcp45.zip">2010&ndash;2100</a> (609 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_CCSM4_rcp60.zip">2010&ndash;2100</a> (609 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_CCSM4_rcp85.zip">2010&ndash;2100</a> (617 MB)
</td>
</tr>




<tr>
<th scope="row">GFDL-CM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_GFDL-CM3_rcp45.zip">2010&ndash;2100</a> (625 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_GFDL-CM3_rcp60.zip">2010&ndash;2100</a> (628 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_GFDL-CM3_rcp85.zip">2010&ndash;2100</a> (636 MB)
</td>
</tr>




<tr>
<th scope="row">GISS-E2-R</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_GISS-E2-R_rcp45.zip">2010&ndash;2100</a> (611 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_GISS-E2-R_rcp60.zip">2010&ndash;2100</a> (610 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_GISS-E2-R_rcp85.zip">2010&ndash;2100</a> (618 MB)
</td>
</tr>


<tr>
<th scope="row">IPSL-CM5A-LR</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_IPSL-CM5A-LR_rcp45.zip">2010&ndash;2100</a> (616 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_IPSL-CM5A-LR_rcp60.zip">2010&ndash;2100</a> (612 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_IPSL-CM5A-LR_rcp85.zip">2010&ndash;2100</a> (622 MB)
</td>
</tr>



<tr>
<th scope="row">MRI-CGCM3</th>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_MRI-CGCM3_rcp45.zip">2010&ndash;2100</a> (613 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_MRI-CGCM3_rcp60.zip">2010&ndash;2100</a> (615 MB)
</td>
<td>
<a href="/files/data/monthly/AR5/monthly/AK_771m/pr_decadal_summaries_AK_771m_MRI-CGCM3_rcp85.zip">2010&ndash;2100</a> (619 MB)
</td>
</tr>



</tbody>
</table>


</div>
</div>


<!-- end AR5 update -->


<br/>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=projected_monthly_temperature_and_precipitation_771m">Projected monthly temperature and precipitation - 771m CMIP3/AR4</a></h3>
<div>
<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />Projected (2001-2100: B1, A1B, and A2 scenarios) monthly average temperature and total precipitation from 5 AR4 GCMs that perform best across Alaska and the Arctic, downscaled to 771m via the <a href="/methods/downscaling">delta method.</a> A 5-Model Average is also included.</p>
<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1971&ndash;2000 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska</td></tr>
</tbody>
</table>


<h4>Temperature</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="34">Projected Monthly Average Temperature 771m AR4</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">B1</th>
<th scope="col">A1B</th>
<th scope="col">A2</th>
</tr>
</thead>
<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td><a href="/files/data/monthly/tas_AK_771m_5modelAvg_sresb1_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_5modelAvg_sresb1_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
<td>
<a href="/files/data/monthly/tas_AK_771m_5modelAvg_sresa1b_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_5modelAvg_sresa1b_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_771m_5modelAvg_sresa2_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_5modelAvg_sresa2_2050_2099.zip">2050&ndash;2099</a> (2.5 GB)</td>
</tr>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="/files/data/monthly/tas_AK_771m_cccma_cgcm3_1_sresb1_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_cccma_cgcm3_1_sresb1_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
<td>
<a href="/files/data/monthly/tas_AK_771m_cccma_cgcm3_1_sresa1b_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_cccma_cgcm3_1_sresa1b_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_771m_cccma_cgcm3_1_sresa2_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_cccma_cgcm3_1_sresa2_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="/files/data/monthly/tas_AK_771m_gfdl_cm2_1_sresb1_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_gfdl_cm2_1_sresb1_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
<td>
<a href="/files/data/monthly/tas_AK_771m_gfdl_cm2_1_sresa1b_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_gfdl_cm2_1_sresa1b_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_771m_gfdl_cm2_1_sresa2_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_gfdl_cm2_1_sresa2_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
</tr>


<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="/files/data/monthly/tas_AK_771m_miroc3_2_medres_sresb1_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_miroc3_2_medres_sresb1_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
<td>
<a href="/files/data/monthly/tas_AK_771m_miroc3_2_medres_sresa1b_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_miroc3_2_medres_sresa1b_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_771m_miroc3_2_medres_sresa2_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_miroc3_2_medres_sresa2_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
</tr>
<tr>
<th scope="row">mpi_echam5</th>
<td><a href="/files/data/monthly/tas_AK_771m_mpi_echam5_sresb1_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_mpi_echam5_sresb1_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
<td>
<a href="/files/data/monthly/tas_AK_771m_mpi_echam5_sresa1b_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_mpi_echam5_sresa1b_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_771m_mpi_echam5_sresa2_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_mpi_echam5_sresa2_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="/files/data/monthly/tas_AK_771m_ukmo_hadcm3_sresb1_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_ukmo_hadcm3_sresb1_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
<td>
<a href="/files/data/monthly/tas_AK_771m_ukmo_hadcm3_sresa1b_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_ukmo_hadcm3_sresa1b_2050_2100.zip">2050&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_771m_ukmo_hadcm3_sresa2_2001_2049.zip">2001&ndash;2049</a> (2.5 GB)<br/>
<a href="/files/data/monthly/tas_AK_771m_ukmo_hadcm3_sresa2_2050_2099.zip">2050&ndash;2099</a> (2.6 GB)</td>
</tr>


</tbody>
</table>


<h4>Precipitation</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="35">Projected Monthly Total Precipitation 771m AR4</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">B1</th>
<th scope="col">A1B</th>
<th scope="col">A2</th>
</tr>
</thead>
<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td><a href="/files/data/monthly/pr_AK_771m_5modelAvg_sresb1_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_5modelAvg_sresb1_2050_2100.zip">2050&ndash;2100</a> (2.2 GB)</td>
<td>
<a href="/files/data/monthly/pr_AK_771m_5modelAvg_sresa1b_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_5modelAvg_sresa1b_2050_2100.zip">2050&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_771m_5modelAvg_sresa2_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_5modelAvg_sresa2_2050_2099.zip">2050&ndash;2099</a> (2.2 GB)</td>
</tr>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="/files/data/monthly/pr_AK_771m_cccma_cgcm3_1_sresb1_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_cccma_cgcm3_1_sresb1_2050_2100.zip">2050&ndash;2100</a> (2.2 GB)</td>
<td>
<a href="/files/data/monthly/pr_AK_771m_cccma_cgcm3_1_sresa1b_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_cccma_cgcm3_1_sresa1b_2050_2100.zip">2050&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_771m_cccma_cgcm3_1_sresa2_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_cccma_cgcm3_1_sresa2_2050_2100.zip">2050&ndash;2100</a> (2.3 GB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="/files/data/monthly/pr_AK_771m_gfdl_cm2_1_sresb1_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_gfdl_cm2_1_sresb1_2050_2100.zip">2050&ndash;2100</a> (2.3 GB)</td>
<td>
<a href="/files/data/monthly/pr_AK_771m_gfdl_cm2_1_sresa1b_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_gfdl_cm2_1_sresa1b_2050_2100.zip">2050&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_771m_gfdl_cm2_1_sresa2_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_gfdl_cm2_1_sresa2_2050_2100.zip">2050&ndash;2100</a> (2.3 GB)</td>
</tr>


<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="/files/data/monthly/pr_AK_771m_miroc3_2_medres_sresb1_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_miroc3_2_medres_sresb1_2050_2100.zip">2050&ndash;2100</a> (2.3 GB)</td>
<td>
<a href="/files/data/monthly/pr_AK_771m_miroc3_2_medres_sresa1b_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_miroc3_2_medres_sresa1b_2050_2100.zip">2050&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_771m_miroc3_2_medres_sresa2_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_miroc3_2_medres_sresa2_2050_2100.zip">2050&ndash;2100</a> (2.3 GB)</td>
</tr>
<tr>
<th scope="row">mpi_echam5</th>
<td><a href="/files/data/monthly/pr_AK_771m_mpi_echam5_sresb1_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_mpi_echam5_sresb1_2050_2100.zip">2050&ndash;2100</a> (2.2 GB)</td>
<td>
<a href="/files/data/monthly/pr_AK_771m_mpi_echam5_sresa1b_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_mpi_echam5_sresa1b_2050_2100.zip">2050&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_771m_mpi_echam5_sresa2_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_mpi_echam5_sresa2_2050_2100.zip">2050&ndash;2100</a> (2.3 GB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="/files/data/monthly/pr_AK_771m_ukmo_hadcm3_sresb1_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_ukmo_hadcm3_sresb1_2050_2100.zip">2050&ndash;2100</a> (2.2 GB)</td>
<td>
<a href="/files/data/monthly/pr_AK_771m_ukmo_hadcm3_sresa1b_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_ukmo_hadcm3_sresa1b_2050_2100.zip">2050&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_771m_ukmo_hadcm3_sresa2_2001_2049.zip">2001&ndash;2049</a> (2.1 GB)<br/>
<a href="/files/data/monthly/pr_AK_771m_ukmo_hadcm3_sresa2_2050_2099.zip">2050&ndash;2099</a> (2.3 GB)</td>
</tr>


</tbody>
</table>

</div>
</div>


<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=projected_derived_temperature_771m">Projected derived temperature products - 771m CMIP3/AR4</a></h3>
<div>

<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />Projected (2010&ndash;2100: B1, A1B, and A2 scenarios) derived temperature products from 5 AR4 GCMs that perform best across Alaska and the Arctic, downscaled to 771m via the <a href="/methods/downscaling">delta method.</a>  A 5-Model Average is also included.</p>
<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1971&ndash;2000 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Decadal</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska</td></tr>
</tbody>
</table>



<h4>Decadal Summaries by Month, Year, or Season</h4>

<h5>Metadata by product</h5>
<ul>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="39">Projected Decadal Averages of Monthly Mean Temperatures 771m AR4</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="41">Projected decadal averages of annual Mean Temperatures 771m AR4</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="42">Projected decadal averages of seasonal Mean Temperatures 771m AR4</a></li>
</ul>
<h5>All products by model and scenario</h5>


<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">B1</th>
<th scope="col">A1B</th>
<th scope="col">A2</th>
</tr>
</thead>
<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_5modelAvg_sresb1.zip">2001&ndash;2100</a> (638 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_5modelAvg_sresa1b.zip">2001&ndash;2100</a> (637 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_5modelAvg_sresa2.zip">2001&ndash;2100</a> (637 MB)</td>
</tr>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_cccma_cgcm3_1_sresb1.zip">2001&ndash;2100</a> (639 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_cccma_cgcm3_1_sresa1b.zip">2001&ndash;2100</a> (639 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_cccma_cgcm3_1_sresa2.zip">2001&ndash;2100</a> (638 MB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_gfdl_cm2_1_sresb1.zip">2001&ndash;2100</a> (637 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_gfdl_cm2_1_sresa1b.zip">2001&ndash;2100</a> (637 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_gfdl_cm2_1_sresa2.zip">2001&ndash;2100</a> (637 MB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_miroc3_2_medres_sresb1.zip">2001&ndash;2100</a> (641 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_miroc3_2_medres_sresa1b.zip">2001&ndash;2100</a> (640 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_miroc3_2_medres_sresa2.zip">2001&ndash;2100</a> (640 MB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_mpi_echam5_sresb1.zip">2001&ndash;2100</a> (639 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_mpi_echam5_sresa1b.zip">2001&ndash;2100</a> (640 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_mpi_echam5_sresa2.zip">2001&ndash;2100</a> (640 MB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_ukmo_hadcm3_sresb1.zip">2001&ndash;2100</a> (642 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_ukmo_hadcm3_sresa1b.zip">2001&ndash;2100</a> (642 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_771m_ukmo_hadcm3_sresa2.zip">2001&ndash;2100</a> (642 MB)</td>
</tr>

</tbody>
</table>

<h4>Day of Freeze, Thaw, Length of Growing Season</h4>
<p>
Estimated Julian days of freeze and thaw (dof, dot) are calculated by assuming a linear change in temperature between consecutive months. Mean monthly temperatures are used to represent daily temperature on the 15th day of each month. When consecutive monthly midpoints have opposite sign temperatures, the day of transition (freeze or thaw) is the day between them on which temperature crosses 0&deg; C. The length of growing season (logs) refers to the number of days between the days of freeze and thaw.  More detailed explanations are discussed in the metadata.
</p>

<h5>Date of Freeze, Thaw</h5>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="38">Projected Day of Freeze or Thaw 771 AR4 </a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">B1</th>
<th scope="col">A1B</th>
<th scope="col">A2</th>
</tr>
</thead>
<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td><a href="/files/data/derived/dof_dot_AK_771m_5modelAvg_sresb1.zip">2001&ndash;2100</a> (51 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_771m_5modelAvg_sresa1b.zip">2001&ndash;2100</a> (51 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_771m_5modelAvg_sresa2.zip">2001&ndash;2100</a> (52 MB)</td>
</tr>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="/files/data/derived/dof_dot_AK_771m_cccma_cgcm3_1_sresb1.zip">2001&ndash;2100</a> (52 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_771m_cccma_cgcm3_1_sresa1b.zip">2001&ndash;2100</a> (52 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_771m_cccma_cgcm3_1_sresa2.zip">2001&ndash;2100</a> (52 MB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="/files/data/derived/dof_dot_AK_771m_gfdl_cm2_1_sresb1.zip">2001&ndash;2100</a> (52 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_771m_gfdl_cm2_1_sresa1b.zip">2001&ndash;2100</a> (51 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_771m_gfdl_cm2_1_sresa2.zip">2001&ndash;2100</a> (52 MB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="/files/data/derived/dof_dot_AK_771m_miroc3_2_medres_sresb1.zip">2001&ndash;2100</a> (51 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_771m_miroc3_2_medres_sresa1b.zip">2001&ndash;2100</a> (51 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_771m_miroc3_2_medres_sresa2.zip">2001&ndash;2100</a> (51 MB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="/files/data/derived/dof_dot_AK_771m_mpi_echam5_sresb1.zip">2001&ndash;2100</a> (51 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_771m_mpi_echam5_sresa1b.zip">2001&ndash;2100</a> (51 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_771m_mpi_echam5_sresa2.zip">2001&ndash;2100</a> (52 MB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="/files/data/derived/dof_dot_AK_771m_ukmo_hadcm3_sresb1.zip">2001&ndash;2100</a> (52 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_771m_ukmo_hadcm3_sresa1b.zip">2001&ndash;2100</a> (51 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_771m_ukmo_hadcm3_sresa2.zip">2001&ndash;2100</a> (52 MB)</td>
</tr>

</tbody>
</table>

<h5>Length of Growing Season</h5>
<p><strong>Metadata</strong> <a href="#" class="metadataLink"  data-geonetwork-metadata-id="37">Projected Length of Growing Season 771 AR4</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">B1</th>
<th scope="col">A1B</th>
<th scope="col">A2</th>
</tr>
</thead>
<tbody>


<tr>
<th scope="row">5&ndash;model Average</th>
<td><a href="/files/data/derived/logs_AK_771m_5modelAvg_sresb1.zip">2001&ndash;2100</a> (31 MB)</td>
<td><a href="/files/data/derived/logs_AK_771m_5modelAvg_sresa1b.zip">2001&ndash;2100</a> (31 MB)</td>
<td><a href="/files/data/derived/logs_AK_771m_5modelAvg_sresa2.zip">2001&ndash;2100</a> (31 MB)</td>
</tr>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="/files/data/derived/logs_AK_771m_cccma_cgcm3_1_sresb1.zip">2001&ndash;2100</a> (31 MB)</td>
<td><a href="/files/data/derived/logs_AK_771m_cccma_cgcm3_1_sresa1b.zip">2001&ndash;2100</a> (31 MB)</td>
<td><a href="/files/data/derived/logs_AK_771m_cccma_cgcm3_1_sresa2.zip">2001&ndash;2100</a> (32 MB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="/files/data/derived/logs_AK_771m_gfdl_cm2_1_sresb1.zip">2001&ndash;2100</a> (31 MB)</td>
<td><a href="/files/data/derived/logs_AK_771m_gfdl_cm2_1_sresa1b.zip">2001&ndash;2100</a> (31 MB)</td>
<td><a href="/files/data/derived/logs_AK_771m_gfdl_cm2_1_sresa2.zip">2001&ndash;2100</a> (31 MB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="/files/data/derived/logs_AK_771m_miroc3_2_medres_sresb1.zip">2001&ndash;2100</a> (31 MB)</td>
<td><a href="/files/data/derived/logs_AK_771m_miroc3_2_medres_sresa1b.zip">2001&ndash;2100</a> (30 MB)</td>
<td><a href="/files/data/derived/logs_AK_771m_miroc3_2_medres_sresa2.zip">2001&ndash;2100</a> (31 MB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="/files/data/derived/logs_AK_771m_mpi_echam5_sresb1.zip">2001&ndash;2100</a> (31 MB)</td>
<td><a href="/files/data/derived/logs_AK_771m_mpi_echam5_sresa1b.zip">2001&ndash;2100</a> (30 MB)</td>
<td><a href="/files/data/derived/logs_AK_771m_mpi_echam5_sresa2.zip">2001&ndash;2100</a> (31 MB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="/files/data/derived/logs_AK_771m_ukmo_hadcm3_sresb1.zip">2001&ndash;2100</a> (32 MB)</td>
<td><a href="/files/data/derived/logs_AK_771m_ukmo_hadcm3_sresa1b.zip">2001&ndash;2100</a> (31 MB)</td>
<td><a href="/files/data/derived/logs_AK_771m_ukmo_hadcm3_sresa2.zip">2001&ndash;2100</a> (32 MB)</td>
</tr>

</tbody>
</table>

</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=projected_derived_precipitation_771m">Projected derived precipitation products - 771m CMIP3/AR4</a></h3>
<div>

<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />Projected (2010-2100: B1, A1B, and A2 scenarios) derived precipitation products from 5 AR4 GCMs that perform best across Alaska and the Arctic, downscaled to 771m via the <a href="/methods/downscaling">delta method.</a>  A 5-Model Average is also included.
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1971&ndash;2000 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Decadal</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska</td></tr>
</tbody>
</table>


<h4>Decadal Summaries by month, year, or season</h4>

<h5>Metadata by product</h5>
<ul>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="62">Projected Decadal Averages of Monthly Total Precipitation 771m AR4</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="43">Projected decadal averages of annual Total Precipitation 771m AR4</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="36">Projected decadal averages of seasonal Total Precipitation 771m AR4</a></li>
</ul>

<h5>All products by model and scenario</h5>


<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">B1</th>
<th scope="col">A1B</th>
<th scope="col">A2</th>
</tr>
</thead>
<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_5modelAvg_sresb1.zip">2001&ndash;2100</a> (612 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_5modelAvg_sresa1b.zip">2001&ndash;2100</a> (619 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_5modelAvg_sresa2.zip">2001&ndash;2100</a> (619 MB)</td>
</tr>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_cccma_cgcm3_1_sresb1.zip">2001&ndash;2100</a> (612 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_cccma_cgcm3_1_sresa1b.zip">2001&ndash;2100</a> (618 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_cccma_cgcm3_1_sresa2.zip">2001&ndash;2100</a> (621 MB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_gfdl_cm2_1_sresb1.zip">2001&ndash;2100</a> (618 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_gfdl_cm2_1_sresa1b.zip">2001&ndash;2100</a> (626 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_gfdl_cm2_1_sresa2.zip">2001&ndash;2100</a> (623 MB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_miroc3_2_medres_sresb1.zip">2001&ndash;2100</a> (613 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_miroc3_2_medres_sresa1b.zip">2001&ndash;2100</a> (618 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_miroc3_2_medres_sresa2.zip">2001&ndash;2100</a> (618 MB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_mpi_echam5_sresb1.zip">2001&ndash;2100</a> (609 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_mpi_echam5_sresa1b.zip">2001&ndash;2100</a> (617 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_mpi_echam5_sresa2.zip">2001&ndash;2100</a> (614 MB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_ukmo_hadcm3_sresb1.zip">2001&ndash;2100</a> (610 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_ukmo_hadcm3_sresa1b.zip">2001&ndash;2100</a> (621 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_771m_ukmo_hadcm3_sresa2.zip">2001&ndash;2100</a> (620 MB)</td>
</tr>

</tbody>
</table>

</div>
</div>

<br/>


<div class="dataAccordion">
<h3><a href="#dataset=projected_monthly_temperature_and_precipitation_2km">Projected monthly temperature and precipitation - 2 km CMIP3/AR4</a></h3>
<div>

<p><img src="${imagePath}akcanada_extent.png" alt="alaska-canada extent" />Projected (2001&ndash;2100: B1, A1B, and A2 scenarios) monthly temperature and precipitation from 5 AR4 GCMs that perform best across Alaska and the Arctic, downscaled to 2 km via the <a href="/methods/downscaling">delta method.</a>  A 5-Model Average is also included.
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2 km</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska and Western Canada (YT, BC, AB, SK, MB)</td></tr>
</tbody>
</table>


<h4>Temperature</h4>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="29">Projected Monthly Average Temperature 2 km AR4</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">B1</th>
<th scope="col">A1B</th>
<th scope="col">A2</th>
</tr>
</thead>
<tbody>


<tr>
<th scope="row">5&ndash;model Average</th>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_5modelAvg_sresb1.zip">2001&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_5modelAvg_sresa1b.zip">2001&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_5modelAvg_sresa2.zip">2001&ndash;2100</a> (2.6 GB)</td>
</tr>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_cccma_cgcm3_1_sresb1.zip">2001&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_cccma_cgcm3_1_sresa1b.zip">2001&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_cccma_cgcm3_1_sresa2.zip">2001&ndash;2100</a> (2.6 GB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_gfdl_cm2_1_sresb1.zip">2001&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_gfdl_cm2_1_sresa1b.zip">2001&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_gfdl_cm2_1_sresa2.zip">2001&ndash;2100</a> (2.6 GB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_miroc3_2_medres_sresb1.zip">2001&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_miroc3_2_medres_sresa1b.zip">2001&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_miroc3_2_medres_sresa2.zip">2001&ndash;2100</a> (2.6 GB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_mpi_echam5_sresb1.zip">2001&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_mpi_echam5_sresa1b.zip">2001&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_mpi_echam5_sresa2.zip">2001&ndash;2100</a> (2.6 GB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_ukmo_hadcm3_sresb1.zip">2001&ndash;2100</a> (2.7 GB)</td>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_ukmo_hadcm3_sresa1b.zip">2001&ndash;2100</a> (2.6 GB)</td>
<td><a href="/files/data/monthly/tas_AK_CAN_2km_ukmo_hadcm3_sresa2.zip">2001&ndash;2100</a> (2.7 GB)</td>
</tr>

</tbody>
</table>

<h4>Precipitation</h4>
<p><strong>Metadata </strong> <a href="#" class="metadataLink"  data-geonetwork-metadata-id="32">Projected Monthly Total Precipitation 2 km AR4</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">B1</th>
<th scope="col">A1B</th>
<th scope="col">A2</th>
</tr>
</thead>
<tbody>


<tr>
<th scope="row">5&ndash;model Average</th>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_5modelAvg_sresb1.zip">2001&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_5modelAvg_sresa1b.zip">2001&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_5modelAvg_sresa2.zip">2001&ndash;2100</a> (2.3 GB)</td>
</tr>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_cccma_cgcm3_1_sresb1.zip">2001&ndash;2100</a> (2.4 GB)</td>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_cccma_cgcm3_1_sresa1b.zip">2001&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_cccma_cgcm3_1_sresa2.zip">2001&ndash;2100</a> (2.3 GB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_gfdl_cm2_1_sresb1.zip">2001&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_gfdl_cm2_1_sresa1b.zip">2001&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_gfdl_cm2_1_sresa2.zip">2001&ndash;2100</a> (2.4 GB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_miroc3_2_medres_sresb1.zip">2001&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_miroc3_2_medres_sresa1b.zip">2001&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_miroc3_2_medres_sresa2.zip">2001&ndash;2100</a> (2.3 GB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_mpi_echam5_sresb1.zip">2001&ndash;2100</a> (2.4 GB)</td>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_mpi_echam5_sresa1b.zip">2001&ndash;2100</a> (2.4 GB)</td>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_mpi_echam5_sresa2.zip">2001&ndash;2100</a> (2.4 GB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_ukmo_hadcm3_sresb1.zip">2001&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_ukmo_hadcm3_sresa1b.zip">2001&ndash;2100</a> (2.3 GB)</td>
<td><a href="/files/data/monthly/pr_AK_CAN_2km_ukmo_hadcm3_sresa2.zip">2001&ndash;2100</a> (2.3 GB)</td>
</tr>

</tbody>
</table>

</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=projected_derived_temperature_2km">Projected derived temperature products - 2 km CMIP3/AR4</a></h3>
<div>

<p><img src="${imagePath}akcanada_extent.png" alt="alaska-canada extent" />
Projected (2010&ndash;2100: B1, A1B, and A2 scenarios) derived temperature products from 5 AR4 GCMs that perform best across Alaska and the Arctic, downscaled to 2km via the <a href="/methods/downscaling">delta method.</a>  A 5-Model Average is also included.
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2 km</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Decadal</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska and Western Canada (YT, BC, AB, SK, MB)</td></tr>
</tbody>
</table>


<h4>Decadal Summaries by month, year, or season</h4>

<h5>Metadata by product</h5>
<ul>
<li>
<a href="#" class="metadataLink"  data-geonetwork-metadata-id="22">Projected Decadal Averages of Monthly Mean Temperatures 2km AR4</a>
</li>
<li>
<a href="#" class="metadataLink"  data-geonetwork-metadata-id="20">Projected decadal averages of annual Mean Temperatures 2km AR4</a>
</li>
<li>
<a href="#" class="metadataLink"  data-geonetwork-metadata-id="24">Projected decadal averages of seasonal Mean Temperatures 2km AR4</a>
</li>
</ul>

<h5>All products by model and scenario</h5>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">B1</th>
<th scope="col">A1B</th>
<th scope="col">A2</th>
</tr>
</thead>
<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_5modelAvg_sresb1.zip">2001&ndash;2100</a> (375 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_5modelAvg_sresa1b.zip">2001&ndash;2100</a> (375 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_5modelAvg_sresa2.zip">2001&ndash;2100</a> (376 MB)</td>
</tr>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_cccma_cgcm3_1_sresb1.zip">2001&ndash;2100</a> (333 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_cccma_cgcm3_1_sresa1b.zip">2001&ndash;2100</a> (333 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_cccma_cgcm3_1_sresa2.zip">2001&ndash;2100</a> (333 MB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_gfdl_cm2_1_sresb1.zip">2001&ndash;2100</a> (332 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_gfdl_cm2_1_sresa1b.zip">2001&ndash;2100</a> (332 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_gfdl_cm2_1_sresa2.zip">2001&ndash;2100</a> (332 MB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_miroc3_2_medres_sresb1.zip">2001&ndash;2100</a> (332 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_miroc3_2_medres_sresa1b.zip">2001&ndash;2100</a> (334 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_miroc3_2_medres_sresa2.zip">2001&ndash;2100</a> (336 MB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_mpi_echam5_sresb1.zip">2001&ndash;2100</a> (332 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_mpi_echam5_sresa1b.zip">2001&ndash;2100</a> (333 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_mpi_echam5_sresa2.zip">2001&ndash;2100</a> (332 MB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_ukmo_hadcm3_sresb1.zip">2001&ndash;2100</a> (334 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_ukmo_hadcm3_sresa1b.zip">2001&ndash;2100</a> (336 MB)</td>
<td><a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_ukmo_hadcm3_sresa2.zip">2001&ndash;2100</a> (336 MB)</td>
</tr>

</tbody>
</table>

<h4>Day of Freeze, Thaw, Length of Growing Season</h4>
<p>
Estimated Julian days of freeze and thaw (dof, dot) are calculated by assuming a linear change in temperature between consecutive months. Mean monthly temperatures are used to represent daily temperature on the 15th day of each month. When consecutive monthly midpoints have opposite sign temperatures, the day of transition (freeze or thaw) is the day between them on which temperature crosses 0&deg; C. The length of growing season (logs) refers to the number of days between the days of freeze and thaw.  More detailed explanations are discussed in the metadata.
</p>

<h5>Day of Freeze, Thaw</h5>

<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="19">Projected Day of Freeze or Thaw 2km AR4</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">B1</th>
<th scope="col">A1B</th>
<th scope="col">A2</th>
</tr>
</thead>
<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_5modelAvg_sresb1.zip">2001&ndash;2100</a> (27 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_5modelAvg_sresa1b.zip">2001&ndash;2100</a> (27 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_5modelAvg_sresa2.zip">2001&ndash;2100</a> (27 MB)</td>
</tr>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_cccma_cgcm3_1_sresb1.zip">2001&ndash;2100</a> (27 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_cccma_cgcm3_1_sresa1b.zip">2001&ndash;2100</a> (27 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_cccma_cgcm3_1_sresa2.zip">2001&ndash;2100</a> (27 MB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_gfdl_cm2_1_sresb1.zip">2001&ndash;2100</a> (27 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_gfdl_cm2_1_sresa1b.zip">2001&ndash;2100</a> (27 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_gfdl_cm2_1_sresa2.zip">2001&ndash;2100</a> (27 MB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_miroc3_2_medres_sresb1.zip">2001&ndash;2100</a> (27 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_miroc3_2_medres_sresa1b.zip">2001&ndash;2100</a> (27 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_miroc3_2_medres_sresa2.zip">2001&ndash;2100</a> (27 MB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_mpi_echam5_sresb1.zip">2001&ndash;2100</a> (27 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_mpi_echam5_sresa1b.zip">2001&ndash;2100</a> (27 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_mpi_echam5_sresa2.zip">2001&ndash;2100</a> (27 MB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_ukmo_hadcm3_sresb1.zip">2001&ndash;2100</a> (27 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_ukmo_hadcm3_sresa1b.zip">2001&ndash;2100</a> (27 MB)</td>
<td><a href="/files/data/derived/dof_dot_AK_CAN_2km_ukmo_hadcm3_sresa2.zip">2001&ndash;2100</a> (27 MB)</td>
</tr>

</tbody>
</table>

<h5>Length of Growing Season</h5>
<p><strong>Metadata </strong><a href="#" class="metadataLink"  data-geonetwork-metadata-id="26">Projected Length of Growing Season 2km AR4</a></p>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">B1</th>
<th scope="col">A1B</th>
<th scope="col">A2</th>
</tr>
</thead>
<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td><a href="/files/data/derived/logs_AK_CAN_2km_5modelAvg_sresb1.zip">2001&ndash;2100</a> (17 MB)</td>
<td><a href="/files/data/derived/logs_AK_CAN_2km_5modelAvg_sresa1b.zip">2001&ndash;2100</a> (17 MB)</td>
<td><a href="/files/data/derived/logs_AK_CAN_2km_5modelAvg_sresa2.zip">2001&ndash;2100</a> (17 MB)</td>
</tr>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="/files/data/derived/logs_AK_CAN_2km_cccma_cgcm3_1_sresb1.zip">2001&ndash;2100</a> (17 MB)</td>
<td><a href="/files/data/derived/logs_AK_CAN_2km_cccma_cgcm3_1_sresa1b.zip">2001&ndash;2100</a> (17 MB)</td>
<td><a href="/files/data/derived/logs_AK_CAN_2km_cccma_cgcm3_1_sresa2.zip">2001&ndash;2100</a> (17 MB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="/files/data/derived/logs_AK_CAN_2km_gfdl_cm2_1_sresb1.zip">2001&ndash;2100</a> (17 MB)</td>
<td><a href="/files/data/derived/logs_AK_CAN_2km_gfdl_cm2_1_sresa1b.zip">2001&ndash;2100</a> (17 MB)</td>
<td><a href="/files/data/derived/logs_AK_CAN_2km_gfdl_cm2_1_sresa2.zip">2001&ndash;2100</a> (17 MB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="/files/data/derived/logs_AK_CAN_2km_miroc3_2_medres_sresb1.zip">2001&ndash;2100</a> (17 MB)</td>
<td><a href="/files/data/derived/logs_AK_CAN_2km_miroc3_2_medres_sresa1b.zip">2001&ndash;2100</a> (17 MB)</td>
<td><a href="/files/data/derived/logs_AK_CAN_2km_miroc3_2_medres_sresa2.zip">2001&ndash;2100</a> (17 MB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="/files/data/derived/logs_AK_CAN_2km_mpi_echam5_sresb1.zip">2001&ndash;2100</a> (17 MB)</td>
<td><a href="/files/data/derived/logs_AK_CAN_2km_mpi_echam5_sresa1b.zip">2001&ndash;2100</a> (17 MB)</td>
<td><a href="/files/data/derived/logs_AK_CAN_2km_mpi_echam5_sresa2.zip">2001&ndash;2100</a> (17 MB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="/files/data/derived/logs_AK_CAN_2km_ukmo_hadcm3_sresb1.zip">2001&ndash;2100</a> (17 MB)</td>
<td><a href="/files/data/derived/logs_AK_CAN_2km_ukmo_hadcm3_sresa1b.zip">2001&ndash;2100</a> (17 MB)</td>
<td><a href="/files/data/derived/logs_AK_CAN_2km_ukmo_hadcm3_sresa2.zip">2001&ndash;2100</a> (17 MB)</td>
</tr>

</tbody>
</table>

</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=projected_derived_precipitation_2km">Projected derived precipitation products - 2 km CMIP3/AR4</a></h3>
<div>

<p><img src="${imagePath}akcanada_extent.png" alt="alaska-canada extent" />
Projected (2010-2100: B1, A1B, and A2 scenarios) derived precipitation products from 5 AR4 GCMs that perform best across Alaska and the Arctic, downscaled to 2km via the <a href="/methods/downscaling">delta method.</a>  A 5-Model Average is also included.
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Decadal</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska and Western Canada (YT, BC, AB, SK, MB)</td></tr>
</tbody>
</table>


<h4>Decadal Summaries by month, year, and season</h4>

<h5>Metadata by product</h5>
<ul>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="23">Projected Decadal Averages of Monthly Total Precipitation 2km AR4</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="21">Projected decadal averages of annual Total Precipitation 2km AR4</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="25">Projected decadal averages of seasonal Total Precipitation 2km AR4</a></li>
</ul>

<h5>All products by model and scenario</h5>

<table class="downloadsTable">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">B1</th>
<th scope="col">A1B</th>
<th scope="col">A2</th>
</tr>
</thead>
<tbody>

<tr>
<th scope="row">5&ndash;model Average</th>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_5modelAvg_sresb1.zip">2001&ndash;2100</a> (351 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_5modelAvg_sresa1b.zip">2001&ndash;2100</a> (353 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_5modelAvg_sresa2.zip">2001&ndash;2100</a> (353 MB)</td>
</tr>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_cccma_cgcm3_1_sresb1.zip">2001&ndash;2100</a> (318 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_cccma_cgcm3_1_sresa1b.zip">2001&ndash;2100</a> (320 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_cccma_cgcm3_1_sresa2.zip">2001&ndash;2100</a> (321 MB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_gfdl_cm2_1_sresb1.zip">2001&ndash;2100</a> (319 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_gfdl_cm2_1_sresa1b.zip">2001&ndash;2100</a> (321 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_gfdl_cm2_1_sresa2.zip">2001&ndash;2100</a> (320 MB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_miroc3_2_medres_sresb1.zip">2001&ndash;2100</a> (317 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_miroc3_2_medres_sresa1b.zip">2001&ndash;2100</a> (319 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_miroc3_2_medres_sresa2.zip">2001&ndash;2100</a> (319 MB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_mpi_echam5_sresb1.zip">2001&ndash;2100</a> (318 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_mpi_echam5_sresa1b.zip">2001&ndash;2100</a> (320 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_mpi_echam5_sresa2.zip">2001&ndash;2100</a> (320 MB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_ukmo_hadcm3_sresb1.zip">2001&ndash;2100</a> (318 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_ukmo_hadcm3_sresa1b.zip">2001&ndash;2100</a> (320 MB)</td>
<td><a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_ukmo_hadcm3_sresa2.zip">2001&ndash;2100</a> (320 MB)</td>
</tr>

</tbody>
</table>

</div>

</div>

<br/>

<div class="dataAccordion">


<h3><a href="#dataset=projected_monthly_potential_evapostranspiration_2km">Projected monthly potential evapotranspiration -  2km CMIP3/AR4</a></h3>
<div>
  <p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />Projected (2001-2099: A1B scenario) monthly total potential evapotranspiration from 5 AR4 GCMs that perform best across Alaska and the Arctic, utilizing 2km downscaled temperature as model inputs.
</p>
<p>These potential evapotranspiration (PET) estimates were produced using the Hamon equation, which calculates PET as a function of temperature and day length.  Potential evapotranspiration may also be influenced by cloud cover, humidity, and wind speed.  The Hamon equation can not explicitly account for variability in these aspects of weather and climate, so it may over or underestimate changes in PET if humidity, cloud cover, or wind speeds change substantially.  In addition, the Hamon equation was developed to calculate daily potential evapotranspiration, and so these estimates, based on monthly data, may differ from those calculated from daily data. We can also provide PET estimated by the Priestley-Taylor equation and standard equations for estimating the surface radiation budget from temperature. Priestley-Taylor data come with a much longer list of assumptions, including those that apply to the Hamon equation.  Scripts used to produce both the Harmon and Priestley-Taylor versions are <a href="https://github.com/ua-snap/potential-evapotranspiration" rel="external">available online</a>.
</p>


<table class="overview">
  <tbody>
    <tr>
      <th scope="row">Baseline reference climate</th>
      <td>1961–1990 PRISM</td>
    </tr>
    <tr>
      <th scope="row">Spatial resolution</th>
      <td>2km</td>
    </tr>
    <tr>
      <th scope="row">Temporal resolution</th>
      <td>Monthly</td>
    </tr>
    <tr>
      <th scope="row">Spatial extent</th>
      <td>Alaska</td>
    </tr>
  </tbody>
</table>


<h4>Metadata by product</h4>

<p><strong>Metadata</strong> <a href="#" class="metadataLink"  data-geonetwork-metadata-id="69"> Projected monthly total potential evapotranspiration 2km AR4</a></p>
<p><strong>Equations used to derive data:</strong> <a href="attachments/Hamon_PET_equations.pdf">Hamon PET equations</a> (PDF)</p>

<h4>Data</h4>

<table class="downloadsTable" style="width: auto">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">A1B</th>
</tr>
</thead>
<tbody>


<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="files/data/pet/pet_AK_2km_cccma_cgcm3_1_sresa1b.zip">2001&ndash;2099</a> (757 MB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="files/data/pet/pet_AK_2km_gfdl_cm2_1_sresa1b.zip">2001&ndash;2099</a> (759MB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="files/data/pet/pet_AK_2km_miroc3_2_medres_sresa1b.zip">2001&ndash;2099</a> (770MB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="files/data/pet/pet_AK_2km_mpi_echam5_sresa1b.zip">2001&ndash;2099</a> (769MB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="files/data/pet/pet_AK_2km_ukmo_hadcm3_sresa1b.zip">2001&ndash;2099</a> (762MB)</td>
</tr>

</tbody>
</table>

</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=projected_derived_potential_evapostranspiration_2km">Projected derived potential evapotranspiration -  2km CMIP3/AR4</a></h3>
<div>
  <p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />Projected (2001-2099: A1B scenario) monthly total potential evapotranspiration from 5 AR4 GCMs that perform best across Alaska and the Arctic, utilizing 2km downscaled temperature as model inputs.
</p>
<p>These potential evapotranspiration (PET) estimates were produced using the Hamon equation, which calculates PET as a function of temperature and day length.  Potential evapotranspiration may also be influenced by cloud cover, humidity, and wind speed.  The Hamon equation can not explicitly account for variability in these aspects of weather and climate, so it may over or underestimate changes in PET if humidity, cloud cover, or wind speeds change substantially.  In addition, the Hamon equation was developed to calculate daily potential evapotranspiration, and so these estimates, based on monthly data, may differ from those calculated from daily data. We can also provide PET estimated by the Priestley-Taylor equation and standard equations for estimating the surface radiation budget from temperature. Priestley-Taylor data come with a much longer list of assumptions, including those that apply to the Hamon equation.  Scripts used to produce both the Harmon and Priestley-Taylor versions are <a href="https://github.com/ua-snap/potential-evapotranspiration" rel="external">available online</a>.
</p>


<table class="overview">
  <tbody>
    <tr>
      <th scope="row">Baseline reference climate</th>
      <td>1961–1990 PRISM</td>
    </tr>
    <tr>
      <th scope="row">Spatial resolution</th>
      <td>2km</td>
    </tr>
    <tr>
      <th scope="row">Temporal resolution</th>
      <td>Decadal</td>
    </tr>
    <tr>
      <th scope="row">Spatial extent</th>
      <td>Alaska</td>
    </tr>
  </tbody>
</table>


<h4>Decadal Summaries by Month, Year, or Season</h4>
<h5>Metadata by product</h5>

<ul>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="73">Projected decadal averages of monthly total potential evapotranspiration 2km AR4</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="74">Projected decadal averages of annual total potential evapotranspiration 2km AR4</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="75">Projected decadal averages of seasonal total potential evapotranspiration 2km AR4</a></li>
</ul>

<p><strong>Equations used to derive data:</strong> <a href="attachments/Hamon_PET_equations.pdf">Hamon PET equations</a> (PDF)</p>

<h4>Data</h4>

<table class="downloadsTable" style="width: auto">
<thead>
<tr>
<td>&nbsp;</td>
<th scope="col" colspan="3">Scenario</th>
</tr>
<tr>
<th scope="col" style="text-align: left;">Model</th>
<th scope="col">A1B</th>
</tr>
</thead>
<tbody>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="files/data/pet/pet_decadal_summaries_AK_2km_cccma_cgcm3_1_sresa1b.zip">2001&ndash;2099</a> (188MB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="files/data/pet/pet_decadal_summaries_AK_2km_gfdl_cm2_1_sresa1b.zip">2001&ndash;2099</a> (187MB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="files/data/pet/pet_decadal_summaries_AK_2km_miroc3_2_medres_sresa1b.zip">2001&ndash;2099</a> (188MB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="files/data/pet/pet_decadal_summaries_AK_2km_mpi_echam5_sresa1b.zip">2001&ndash;2099</a> (189MB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="files/data/pet/pet_decadal_summaries_AK_2km_ukmo_hadcm3_sresa1b.zip">2001&ndash;2099</a> (189MB)</td>
</tr>




</tbody>
</table>

</div>

</div>


<br/>
<div class="dataAccordion">


<h3><a href="#dataset=projected_monthly_snow_day_fraction_771m">Projected decadal averages of monthly snow-day fraction 771m CMIP3/AR4</a></h3>
<div>
  <p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />
  These snow-day fraction estimates were produced by applying equations relating decadal average monthly temperature to snow-day fraction to downscaled decadal average monthly temperature. Separate equations were used to model the relationship between decadal monthly average temperature and the fraction of wet days with snow for seven geographic regions in the state: Arctic, western Alaska, Interior, Cook Inlet, SW Islands, SW Interior, and the Gulf of Alaska coast.
</p><p>
Although the equations developed here provide a reasonable fit to the data, model evaluation demonstrated that some stations are consistently less well described by regional models than others. It is unclear why this occurs, but it is like related to localized climate conditions. Very few weather stations with long records are located above 500m elevation in Alaska, so the equations used here were developed primarily from low-elevation weather stations. It is not clear whether the equations will be completely appropriate in the mountains. Finally, these equations summarize a long-term monthly relationship between temperature and precipitation type that is the result of short-term weather variability. In using these equations to make projections of future snow, as assume that these relationships remain stable over time, and we do not know how accurate that assumption is.
</p>

 <ul>
  <li><a href="/files/data/snow_day_fraction/snow_fraction_data_users_guide.pdf">See the user&rsquo;s guide for these data</a> (PDF) for information on methodology and validation for these data</li>
  <li><a href="/attachments/McAfee2013_snowDay.pdf">See this paper</a> (PDF) for detailed information on the construction of this data and its implications</li>
  <li><a href="https://github.com/ua-snap/snowfraction">Download the scripts</a> used to generate these data</li>
</ul>

<table class="overview">
  <tbody>
    <tr>
      <th scope="row">Baseline reference climate</th>
      <td>1971&ndash;2000 PRISM</td>
    </tr>
    <tr>
      <th scope="row">Spatial resolution</th>
      <td>771m</td>
    </tr>
    <tr>
      <th scope="row">Temporal resolution</th>
      <td>Monthly</td>
    </tr>
    <tr>
      <th scope="row">Spatial extent</th>
      <td>Alaska</td>
    </tr>
  </tbody>
</table>


<h4>Metadata by product</h4>

<p><strong>Metadata</strong> <a href="#" class="metadataLink"  data-geonetwork-metadata-id="84">Projected decadal averages of monthly snow-day fraction 771m AR4</a></p>


<h4>Data</h4>

<table class="downloadsTable" style="width: auto">
<thead>
<tr><th scope="col">Model</th>
<th scope="col">Data</th></tr>
</thead>
<tbody>

<tr>
<th scope="row">cccma_cgcm31</th>
<td><a href="files/data/snow_day_fraction/fs_decadal_mean_monthly_mean_pct_cccma_cgcm3_1_2010_2099.zip">2010&ndash;2099</a> (479 MB)</td>
</tr>

<tr>
<th scope="row">gfdl_cm2_1</th>
<td><a href="files/data/snow_day_fraction/fs_decadal_mean_monthly_mean_pct_gfdl_cm2_1_2010_2099.zip">2010&ndash;2099</a> (491MB)</td>
</tr>

<tr>
<th scope="row">miroc3_2_medres</th>
<td><a href="files/data/snow_day_fraction/fs_decadal_mean_monthly_mean_pct_miroc3_2_medres_2010_2099.zip">2010&ndash;2099</a> (461MB)</td>
</tr>

<tr>
<th scope="row">mpi_echam5</th>
<td><a href="files/data/snow_day_fraction/fs_decadal_mean_monthly_mean_pct_mpi_echam5_2010_2099.zip">2010&ndash;2099</a> (476MB)</td>
</tr>

<tr>
<th scope="row">ukmo_hadcm3</th>
<td><a href="files/data/snow_day_fraction/fs_decadal_mean_monthly_mean_pct_ukmo_hadcm3_2010_2099.zip">2010&ndash;2099</a> (470MB)</td>
</tr>

</tbody>
</table>

</div>
</div>

</div>

<!-- HistoricalData -->

<div class="methods text" id="Historical">
<h3>Historically observed data</h3>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">

<h3><a href="#dataset=historical_sea_ice_atlas">Historical Sea Ice Atlas: observed estimates of sea ice concentration in Alaska waters</a></h3>
<div>

<p><img src="${imagePath}sea-ice-atlas-extent.png" alt="" />
Data were compiled from several historical sea ice data sources into spatially and temporally standardized data sets that include sea ice concentrations (0&ndash;100%) for the seas surrounding the state of Alaska, USA.</p>
<table class="overview">
<tbody>
<tr><th scope="row">Spatial resolution</th><td>&frac14;&times;&frac14; degree</td></tr>
<tr><th scope="row">Temporal resolution</th><td>weekly and monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska marine waters</td></tr>
<tr><th scope="row">Temporal extent</th><td>Weekly, 1953&ndash;2013; Monthly, 1850&ndash;2013</td></tr>
</tbody>
</table>


<h4>Downloads</h4>

<table class="downloadsTable smallTable">
<thead>
<tr>
<th scope="col">Metadata</th>
<th scope="col">Data</th>
</tr>
</thead>
<body>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="106">Monthly Observed Estimates of Sea Ice Concentration in Alaska Waters</a></td>
<td>
<a href="/files/data/monthly/sic_con_pct_monthly_historical_01_1850-12_2013.zip">1850&ndash;2013</a> (5.6 MB)

</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">

<h3><a href="#dataset=historical_monthly_temperature_and_precipitation_771m_CRUTS30">Historical monthly temperature and precipitation - 771m CRU TS 3.0</a></h3>
<div>

<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />
Historical (1901&ndash;2006) monthly average temperature and total precipitation from CRU TS 3.0 climate data, downscaled to 771m via the <a href="/methods/downscaling">delta method.</a>
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1971&ndash;2000 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska</td></tr>
</tbody>
</table>


<h4>Downloads</h4>

<table class="downloadsTable smallTable">
<thead>
<tr>
<th scope="col">Metadata</th>
<th scope="col">Data</th>
</tr>
</thead>
<body>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="45">Historical Monthly Average Temperature 771m CRUTS3.0/3.1</a></td>
<td>
<a href="/files/data/CRUTS3.0/tas_AK_771m_CRU_TS30_historical_1901_1949.zip">1901&ndash;1949</a> (2.5 GB)
<a href="/files/data/CRUTS3.0/tas_AK_771m_CRU_TS30_historical_1950_2006.zip">1950&ndash;2006</a> (2.9 GB)
</td>
</tr>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="44">Historical Monthly Total Precipitation 771m CRUTS3.0/3.1.01</a></td>
<td>
<a href="/files/data/CRUTS3.0/pr_AK_771m_CRU_TS30_historical_1901_1949.zip">1901&ndash;1949</a> (2.1 GB)
<a href="/files/data/CRUTS3.0/pr_AK_771m_CRU_TS30_historical_1950_2006.zip">1950&ndash;2006</a> (2.4 GB)
</td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=historical_monthly_temperature_and_precipitation_771m">Historical monthly temperature and precipitation - 771m CRU TS 3.1/3.1.01</a></h3>
<div>

<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />
Historical (1901&ndash;2009) monthly average temperature and total precipitation from CRU TS 3.1.01 climate data, downscaled to 771m via the <a href="/methods/downscaling">delta method.</a>
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1971&ndash;2000 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska</td></tr>
</tbody>
</table>


<h4>Downloads</h4>

<?php echo getCruts31DataAlert(); ?>

<table class="downloadsTable smallTable">
<thead>
<tr>
<th scope="col">Metadata</th>
<th scope="col">Data</th>
</tr>
</thead>
<body>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="45">Historical monthly average temperature 771m CRUTS3.1</a></td>
<td>
<a href="/files/data/monthly/tas_AK_771m_CRU_TS31_historical_1901_1949.zip">1901&ndash;1949</a> (2.5 GB)
<a href="/files/data/monthly/tas_AK_771m_CRU_TS31_historical_1950_2009.zip">1950&ndash;2009</a> (3.0 GB)
</td>
</tr>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="44">Historical monthly total precipitation 771m CRUTS3.1.01</a></td>
<td>
<a href="/files/data/monthly/pr_AK_771m_CRU_TS31_historical_1901_1949.zip">1901&ndash;1949</a> (2.1 GB)
<a href="/files/data/monthly/pr_AK_771m_CRU_TS31_historical_1950_2009.zip">1950&ndash;2009</a> (2.5 GB)
</td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=historical_derived_temperature_771m_CRUTS30">Historical derived temperature products - 771m CRU TS 3.0</a></h3>
<div>

<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />
Historical (1910&ndash;1999) derived temperature products from CRU TS 3.0 climate data, downscaled to 771m via the <a href="/methods/downscaling">delta method.</a>
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1971&ndash;2000 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Decadal</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska</td></tr>
</tbody>
</table>


<h4>Decadal summaries by month, year, and season</h4>

<h5>Metadata by product</h5>
<ul>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="47">Historical decadal averages of monthly mean temperatures 771m CRUTS3.0</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="49">Historical decadal averages of annual mean temperatures 771m CRUTS3.0</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="51">Historical decadal averages of seasonal mean temperatures 771m CRUTS3.0</a></li>
</ul>

<h5>All products</h5>
<pre class="productDownloads">
<a href="/files/data/CRUTS3.0/tas_decadal_summaries_AK_771m_CRU_TS30_historical.zip">tas_decadal_summaries_AK_771m_CRU_TS30_historical.zip</a> (593 MB)
</pre>

<h4>Day of freeze, thaw, length of growing season</h4>
<p>
Estimated Julian days of freeze and thaw (dof, dot) are calculated by assuming a linear change in temperature between consecutive months. Mean monthly temperatures are used to represent daily temperature on the 15th day of each month. When consecutive monthly midpoints have opposite sign temperatures, the day of transition (freeze or thaw) is the day between them on which temperature crosses 0&deg; C. The length of growing season (logs) refers to the number of days between the days of freeze and thaw. More detailed explanations are discussed in the metadata.
</p>

<table class="downloadsTable">
<thead>
<tr>
<th scope="col">Metadata</th>
<th scope="col">Data</th>
</tr>
</thead>
<body>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="53">Historical day of freeze or thaw 771m CRUTS3.0</a></td>
<td>
<a href="/files/data/CRUTS3.0/dof_dot_AK_771m_CRU_TS30_historical.zip">dof_dot_AK_771m_CRU_TS30_historical.zip</a> (52 MB)
</td>
</tr>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="55">Historical length of growing season 771m CRUTS3.0</a></td>
<td>
<a href="/files/data/CRUTS3.0/logs_AK_771m_CRU_TS30_historical.zip">logs_AK_771m_CRU_TS30_historical.zip</a> (32 MB)
</td>
</tr>
</tbody>
</table>


</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=historical_derived_temperature_771m">Historical derived temperature products - 771m CRU TS 3.1</a></h3>
<div>


<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />
Historical (1910&ndash;2009) derived temperature products from CRU TS 3.1 climate data, downscaled to 2 km via the <a href="/methods/downscaling">delta method.</a>
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1971&ndash;2000 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Decadal</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska</td></tr>
</tbody>
</table>


<h4>Decadal summaries by month, year, and season</h4>

<h5>Metadata by product</h5>
<ul>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="47">Historical decadal averages of monthly mean temperatures 771m CRUTS3.1</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="49">Historical decadal averages of annual mean temperatures 771m CRUTS3.1</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="51">Historical decadal averages of seasonal mean temperatures 771m CRUTS3.1</a></li>
</ul>

<h5>All products</h5>
<pre class="productDownloads">
<a href="/files/data/derived/tas_decadal_summaries_AK_771m_CRU_TS31_historical.zip">tas_decadal_summaries_AK_771m_CRU_TS31_historical.zip</a> (707 MB)
</pre>

<h4>Day of freeze, thaw, length of growing season</h4>
<p>
Estimated Julian days of freeze and thaw (dof, dot) are calculated by assuming a linear change in temperature between consecutive months. Mean monthly temperatures are used to represent daily temperature on the 15th day of each month. When consecutive monthly midpoints have opposite sign temperatures, the day of transition (freeze or thaw) is the day between them on which temperature crosses 0&deg; C. The length of growing season (logs) refers to the number of days between the days of freeze and thaw.  More detailed explanations are discussed in the metadata.
</p>


<table class="downloadsTable">
<thead>
<tr>
<th scope="col">Metadata</th>
<th scope="col">Data</th>
</tr>
</thead>
<body>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="53">Historical day of freeze or thaw 771m CRUTS3.1</a></td>
<td>
<a href="/files/data/derived/dof_dot_AK_771m_CRU_TS31_historical.zip">dof_dot_AK_771m_CRU_TS31_historical.zip</a> (58 MB)
</td>
</tr>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="55">Historical length of growing season 771m CRUTS3.1</a></td>
<td>
<a>
<a href="/files/data/derived/logs_AK_771m_CRU_TS31_historical.zip">logs_AK_771m_CRU_TS31_historical.zip</a> (35 MB)
</a>
</td>
</tr>
</tbody>
</table>


</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=historical_derived_precipitation_771m_CRUTS30">Historical derived precipitation products - 771m CRU TS 3.0</a></h3>
<div>


<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />
Historical (1910&ndash;1999) derived precipitation products from CRUTS 3.0 climate data, downscaled to 771m via the <a href="/methods/downscaling">delta method.</a>
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1971&ndash;2000 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Decadal</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska</td></tr>
</tbody>
</table>



<h4>Decadal summaries by month, year, and season</h4>

<h5>Metadata by product</h5>
<ul>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="57">Historical decadal averages of monthly total precipitation 771m CRUTS3.0</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="59">Historical decadal averages of annual Total Precipitation 771m CRUTS3.0</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="61">Historical decadal averages of seasonal Total Precipitation 771m CRUTS3.0</a></li>
</ul>

<h5>All products</h5>
<pre class="productDownloads">
<a href="/files/data/CRUTS3.0/pr_decadal_summaries_AK_771m_CRU_TS30_historical.zip">pr_decadal_summaries_AK_771m_CRU_TS30_historical.zip</a> (593 MB)
</pre>
</div>

<h3><a href="#dataset=historical_derived_precipitation_771m">Historical derived precipitation products - 771m CRU TS 3.1.01</a></h3>
<div>

<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />
Historical (1910-2009) derived precipitation products from CRU TS 3.1.01 climate data, downscaled to 2 km via the <a href="/methods/downscaling">delta method.</a>
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1971&ndash;2000 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>771m</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Decadal</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska</td></tr>
</tbody>
</table>


<h4>Decadal summaries by month, year, and season</h4>

<?php echo getCruts31DataAlert(); ?>

<h5>Metadata by product</h5>
<ul>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="57">Historical decadal averages of monthly total precipitation 771m CRUTS3.1.01</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="59">Historical decadal averages of annual Total Precipitation 771m CRUTS3.1.01</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="61">Historical decadal averages of seasonal Total Precipitation 771m CRUTS3.1.01</a></li>
</ul>

<h5>All products</h5>
<pre class="productDownloads">
<a href="/files/data/derived/pr_decadal_summaries_AK_771m_CRU_TS31_historical.zip">pr_decadal_summaries_AK_771m_CRU_TS31_historical.zip</a> (655 MB)
</pre>


</div>
</div>
<br/>

<div class="dataAccordionWrapper">
<div class="dataAccordion">

<h3><a href="#dataset=historical_monthly_temperature_and_precipitation_2km_CRUTS30">Historical monthly Temperature and Precipitation - 2 km CRU TS 3.0</a></h3>
<div>

<p><img src="${imagePath}akcanada_extent.png" alt="alaska-canada extent" />
Historical (1901-2009) monthly average temperature and total precipitation from CRU TS 3.0 climate data, downscaled to 2 km via the <a href="/methods/downscaling">delta method.</a>
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2 km</td></tr>
<tr><th scope="row">Temporal resolution</th><td>monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska and Western Canada (YT, BC, AB, SK, MB)</td></tr>
</tbody>
</table>


<table class="downloadsTable">
<thead>
<tr>
<th scope="col">Metadata</th>
<th scope="col">Data</th>
</tr>
</thead>
<body>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="28">Historical monthly average temperature 2km CRUTS3.0</a></td>
<td>
<a href="/files/data/CRUTS3.0/tas_AK_CAN_2km_CRU_TS30_historical.zip">tas_AK_CAN_2km_CRU_TS30_historical.zip</a> (2.6 GB)
</td>
</tr>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="31">Historical monthly total precipitation 2km CRUTS3.0</a></td>
<td>
<a>
<a href="/files/data/CRUTS3.0/pr_AK_CAN_2km_CRU_TS30_historical.zip">pr_AK_CAN_2km_CRU_TS30_historical.zip</a> (2.2 GB)
</a>
</td>
</tr>
</tbody>
</table>

</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=historical_monthly_temperature_and_precipitation_2km">Historical monthly Temperature and Precipitation - 2 km CRU TS 3.1/3.1.01</a></h3>
<div>

<p><img src="${imagePath}akcanada_extent.png" alt="alaska-canada extent" />
Historical (1901-2009) monthly average temperature and total precipitation from CRU TS 3.1/3.1.01 climate data, downscaled to 2 km via the <a href="/methods/downscaling">delta method.</a>
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2 km</td></tr>
<tr><th scope="row">Temporal resolution</th><td>monthly</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska and Western Canada (YT, BC, AB, SK, MB)</td></tr>
</tbody>
</table>


<?php echo getCruts31DataAlert(); ?>

<table class="downloadsTable">
<thead>
<tr>
<th scope="col">Metadata</th>
<th scope="col">Data</th>
</tr>
</thead>
<body>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="28">Historical monthly average temperature 2km CRUTS 3.1</a></td>
<td>
<a href="/files/data/monthly/tas_AK_CAN_2km_CRU_TS31_historical.zip">tas_AK_CAN_2km_CRU_TS31_historical.zip</a> (2.9 GB)
</td>
</tr>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="31">Historical monthly total precipitation 2km CRUTS 3.1.01</a></td>
<td>
<a>
<a href="/files/data/monthly/pr_AK_CAN_2km_CRU_TS31_historical.zip">pr_AK_CAN_2km_CRU_TS31_historical.zip</a> (2.5 GB)
</a>
</td>
</tr>
</tbody>
</table>

</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=historical_derived_temperature_2km_CRUTS30">Historical derived temperature products - 2 km CRU TS 3.0</a></h3>
<div>

<p><img src="${imagePath}akcanada_extent.png" alt="alaska-canada extent" />
Historical (1910-2009) derived temperature products from CRU TS 3.0 climate data, downscaled to 2 km via the <a href="/methods/downscaling">delta method.</a>
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2 km</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Decadal</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska and Western Canada (YT, BC, AB, SK, MB)</td></tr>
</tbody>
</table>


<h4>Decadal summaries by month, year, and season</h4>
<h5>Metadata by product</h5>

<ul>

<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="46">Historical decadal averages of monthly mean temperatures 2km CRUTS3.0</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="48">Historical decadal averages of annual mean temperatures 2km CRUTS3.0</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="50">Historical decadal averages of seasonal mean temperatures 2km CRUTS3.0</a></li>

</ul>

<h5>All products</h5>
<pre class="productDownloads">
<a href="/files/data/CRUTS3.0/tas_decadal_summaries_AK_CAN_2km_CRU_TS30_historical.zip">tas_decadal_summaries_AK_CAN_2km_CRU_TS30_historical.zip</a> (331 MB)
</pre>

<h4>Day of freeze, thaw, length of growing season</h4>
<p>
Estimated Julian days of freeze and thaw (dof, dot) are calculated by assuming a linear change in temperature between consecutive months. Mean monthly temperatures are used to represent daily temperature on the 15th day of each month. When consecutive monthly midpoints have opposite sign temperatures, the day of transition (freeze or thaw) is the day between them on which temperature crosses 0&deg; C. The length of growing season (logs) refers to the number of days between the days of freeze and thaw.  More detailed explanations are discussed in the metadata.
</p>

<table class="downloadsTable">
<thead>
<tr>
<th scope="col">Metadata</th>
<th scope="col">Data</th>
</tr>
</thead>
<body>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="52">Historical day of freeze or thaw 2km CRUTS3.0</a></td>
<td>
<a href="/files/data/CRUTS3.0/dof_dot_AK_CAN_2km_CRU_TS30_historical.zip">dof_dot_AK_CAN_2km_CRU_TS30_historical.zip</a> (27 MB)
</td>
</tr>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="54">Historical length of growing season 2km CRUTS3.0</a></td>
<td>
<a href="/files/data/CRUTS3.0/logs_AK_CAN_2km_CRU_TS30_historical.zip">logs_AK_CAN_2km_CRU_TS30_historical.zip</a> (17 MB)
</td>
</tr>
</tbody>
</table>

</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=historical_derived_temperature_2km">Historical derived temperature products - 2 km CRU TS 3.1</a></h3>
<div>

<p><img src="${imagePath}akcanada_extent.png" alt="alaska-canada extent" />
Historical (1910-2009) derived temperature products from CRU TS 3.1 climate data, downscaled to 2 km via the <a href="/methods/downscaling">delta method.</a>
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2 km</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Decadal</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska and Western Canada (YT, BC, AB, SK, MB)</td></tr>
</tbody>
</table>


<h4>Decadal summaries by month, year, and season</h4>

<h5>Metadata by product</h5>

<ul>

<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="46">Historical decadal averages of monthly mean temperatures 2km CRUTS3.1</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="48">Historical decadal averages of annual mean temperatures 2km CRUTS3.1</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="50">Historical decadal averages of seasonal mean temperatures 2km CRUTS3.1</a></li>

</ul>

<h5>All products</h5>
<pre class="productDownloads">
<a href="/files/data/derived/tas_decadal_summaries_AK_CAN_2km_CRU_TS31_historical.zip">tas_decadal_summaries_AK_CAN_2km_CRU_TS31_historical.zip</a> (368 MB)
</pre>

<h4>Day of freeze, thaw, length of growing season</h4>
<p>
Estimated Julian days of freeze and thaw (dof, dot) are calculated by assuming a linear change in temperature between consecutive months. Mean monthly temperatures are used to represent daily temperature on the 15th day of each month. When consecutive monthly midpoints have opposite sign temperatures, the day of transition (freeze or thaw) is the day between them on which temperature crosses 0&deg; C. The length of growing season (logs) refers to the number of days between the days of freeze and thaw.  More detailed explanations are discussed in the metadata.
</p>

<table class="downloadsTable">
<thead>
<tr>
<th scope="col">Metadata</th>
<th scope="col">Data</th>
</tr>
</thead>
<body>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="52">Historical day of freeze or thaw 2km CRUTS3.1</a></td>
<td>
<a href="/files/data/derived/dof_dot_AK_CAN_2km_CRU_TS31_historical.zip">dof_dot_AK_CAN_2km_CRU_TS31_historical.zip</a> (30 MB)
</td>
</tr>
<tr>
<td><a href="#" class="metadataLink"  data-geonetwork-metadata-id="54">Historical length of growing season 2km CRUTS3.1</a></td>
<td>
<a href="/files/data/derived/logs_AK_CAN_2km_CRU_TS31_historical.zip">logs_AK_CAN_2km_CRU_TS31_historical.zip</a> (19 MB)
</td>
</tr>
</tbody>
</table>

</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=historical_derived_precipitation_2km_CRUTS30">Historical derived precipitation products - 2 km CRU TS 3.0</a></h3>
<div>

<p><img src="${imagePath}akcanada_extent.png" alt="alaska-canada extent" />
Historical (1910&ndash;2009) derived precipitation products from CRUTS 3.0 climate data, downscaled to 2 km via the <a href="/methods/downscaling">delta method.</a>
</p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2 km</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Decadal</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska and Western Canada (YT, BC, AB, SK, MB)</td></tr>
</tbody>
</table>


<h4>Decadal summaries by month, year, and season</h4>
<h5>Metadata by product</h5>

<ul>

<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="56">Historical decadal averages of monthly total precipitation 2km CRUTS3.0</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="58">Historical decadal averages of annual Total Precipitation 2km CRUTS3.0</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="60">Historical decadal averages of seasonal Total Precipitation 2km CRUTS3.0</a></li>

</ul>

<h5>All products</h5>
<pre class="productDownloads">
<a href="/files/data/CRUTS3.0/pr_decadal_summaries_AK_CAN_2km_CRU_TS30_historical.zip">pr_decadal_summaries_AK_CAN_2km_CRU_TS30_historical.zip</a> (312 MB)
</div>

<h3><a href="#dataset=historical_derived_precipitation_2km">Historical derived precipitation products - 2 km CRU TS 3.1.01</a></h3>
<div>

<p><img src="${imagePath}akcanada_extent.png" alt="alaska-canada extent" />
Historical (1910&ndash;2009) derived precipitation products from CRUTS 3.1.01 climate data, downscaled to 2 km via the <a href="/methods/downscaling"><a href="/methods/downscaling">delta method.</a></a> </p>

<table class="overview">
<tbody>
<tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990 PRISM</td></tr>
<tr><th scope="row">Spatial resolution</th><td>2 km</td></tr>
<tr><th scope="row">Temporal resolution</th><td>Decadal</td></tr>
<tr><th scope="row">Spatial extent</th><td>Alaska and Western Canada (YT, BC, AB, SK, MB)</td></tr>
</tbody>
</table>


<h4>Decadal summaries by month, year, and season</h4>

<?php echo getCruts31DataAlert(); ?>

<h5>Metadata by product</h5>

<ul>

<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="56">Historical decadal averages of monthly total precipitation 2km CRUTS3.1.01</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="58">Historical decadal averages of annual Total Precipitation 2km CRUTS3.1.01</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="60">Historical decadal averages of seasonal Total Precipitation 2km CRUTS3.1.01</a></li>

</ul>

<h5>All products</h5>
<pre class="productDownloads">
<a href="/files/data/derived/pr_decadal_summaries_AK_CAN_2km_CRU_TS31_historical.zip">pr_decadal_summaries_AK_CAN_2km_CRU_TS31_historical.zip</a> (345 MB)
</div>
</div>

<br/>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=historical_monthly_potential_evapotranspiration_2km">Historical monthly potential evapotranspiration -  2km CRUTS3.0</a></h3>
<div>
<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />Historical (1901-2006) monthly total potential evapotranspiration utilizing CRU TS 3.0 climate data downscaled to 2 km via the <a href="/methods/downscaling">delta method.</a></p>

<p>These potential evapotranspiration (PET) estimates were produced using the Hamon equation, which calculates PET as a function of temperature and day length.  Potential evapotranspiration may also be influenced by cloud cover, humidity, and wind speed.  The Hamon equation can not explicitly account for variability in these aspects of weather and climate, so it may over or underestimate changes in PET if humidity, cloud cover, or wind speeds change substantially.  In addition, the Hamon equation was developed to calculate daily potential evapotranspiration, and so these estimates, based on monthly data, may differ from those calculated from daily data. We can also provide PET estimated by the Priestley-Taylor equation and standard equations for estimating the surface radiation budget from temperature. Priestley-Taylor data come with a much longer list of assumptions, including those that apply to the Hamon equation.  Scripts used to produce both the Harmon and Priestley-Taylor versions are <a href="https://github.com/ua-snap/potential-evapotranspiration" rel="external">available online</a>.</p>


<table class="overview">
  <tbody>
    <tr>
      <th scope="row">Baseline reference climate</th>
      <td>1961–1990 PRISM</td>
    </tr>
    <tr>
      <th scope="row">Spatial resolution</th>
      <td>2km</td>
    </tr>
    <tr>
      <th scope="row">Temporal resolution</th>
      <td>monthly</td>
    </tr>
    <tr>
      <th scope="row">Spatial extent</th>
      <td>Alaska</td>
    </tr>
  </tbody>
</table>



<h4>Metadata</h4>
<p><strong>Metadata</strong> <a href="#" class="metadataLink"  data-geonetwork-metadata-id="67">Historical monthly total potential evapotranspiration 2km CRUTS3.0</a></p>
<p><strong>Equations used to derive data:</strong> <a href="attachments/Hamon_PET_equations.pdf">Hamon PET equations</a> (PDF)</p>

<h4>Data</h4>
<ul><li><a href="files/data/pet/pet_AK_2km_CRU_TS30_historical.zip">1901&ndash;2006</a> (726MB)</li></ul>

</div>
</div>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=historical_derived_potential_evapotranspiration_2km">Historical derived potential evapotranspiration -  2km CRUTS3.0</a></h3>
<div>

<p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />Historical (1910-1999) monthly total potential evapotranspiration utilizing CRU TS 3.0 climate data downscaled to 2 km via the <a href="/methods/downscaling">delta method.</a></p>

<p>These potential evapotranspiration (PET) estimates were produced using the Hamon equation, which calculates PET as a function of temperature and day length.  Potential evapotranspiration may also be influenced by cloud cover, humidity, and wind speed.  The Hamon equation can not explicitly account for variability in these aspects of weather and climate, so it may over or underestimate changes in PET if humidity, cloud cover, or wind speeds change substantially.  In addition, the Hamon equation was developed to calculate daily potential evapotranspiration, and so these estimates, based on monthly data, may differ from those calculated from daily data. We can also provide PET estimated by the Priestley-Taylor equation and standard equations for estimating the surface radiation budget from temperature. Priestley-Taylor data come with a much longer list of assumptions, including those that apply to the Hamon equation.  Scripts used to produce both the Harmon and Priestley-Taylor versions are <a href="https://github.com/ua-snap/potential-evapotranspiration" rel="external">available online</a>.</p>

<table class="overview">
  <tbody>
    <tr>
      <th scope="row">Baseline reference climate</th>
      <td>1961–1990 PRISM</td>
    </tr>
    <tr>
      <th scope="row">Spatial resolution</th>
      <td>2km</td>
    </tr>
    <tr>
      <th scope="row">Temporal resolution</th>
      <td>Decadal</td>
    </tr>
    <tr>
      <th scope="row">Spatial extent</th>
      <td>Alaska</td>
    </tr>
  </tbody>
</table>



<h4>Metadata by product</h4>
<ul>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="70">Historical decadal averages of monthly total potential evapotranspiration 2km CRUTS3.0</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="71">Historical decadal averages of annual total potential evapotranspiration 2km CRUTS3.0</a></li>
<li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="72">Historical decadal averages of seasonal total potential evapotranspiration 2km CRUTS3.0</a></li>
</ul>
<p><strong>Equations used to derive data:</strong> <a href="attachments/Hamon_PET_equations.pdf">Hamon PET equations</a> (PDF)</p>

<h4>All products by model and scenario</h4>
<ul><li><a href="files/data/pet/pet_decadal_summaries_AK_2km_CRU_TS30_historical.zip">1910&ndash;1999</a> (181MB)</li></ul>

</div>

</div>

<br/>

<div class="dataAccordionWrapper">
<div class="dataAccordion">
<h3><a href="#dataset=historical_monthly_snow_day_fraction_771m">Historical decadal averages of monthly snow-day fraction 771m CRU TS 3.1</a></h3>
<div>
  <p><img src="${imagePath}ak_extent.jpg" alt="alaska extent" />
  These snow-day fraction estimates were produced by applying equations relating decadal average monthly temperature to snow-day fraction to downscaled decadal average monthly temperature. Separate equations were used to model the relationship between decadal monthly average temperature and the fraction of wet days with snow for seven geographic regions in the state: Arctic, western Alaska, Interior, Cook Inlet, SW Islands, SW Interior, and the Gulf of Alaska coast.
</p>
  <p>
Although the equations developed here provide a reasonable fit to the data, model evaluation demonstrated that some stations are consistently less well described by regional models than others. It is unclear why this occurs, but it is likely related to localized climate conditions. Very few weather stations with long records are located above 500m elevation in Alaska, so the equations used here were developed primarily from low-elevation weather stations. It is not clear whether the equations will be completely appropriate in the mountains. Finally, these equations summarize a long-term monthly relationship between temperature and precipitation type that is the result of short-term weather variability. In using these equations to make projections of future snow, as assume that these relationships remain stable over time, and we do not know how accurate that assumption is.
</p>
<ul>
    <li><a href="/files/data/snow_day_fraction/snow_fraction_data_users_guide.pdf">See the user&rsquo;s guide for these data</a> (PDF) for information on methodology and validation for these data</li>
  <li><a href="/attachments/McAfee2013_snowDay.pdf">See this paper</a> (PDF) for detailed information on the construction of this data and its implications</li>
  <li><a href="https://github.com/ua-snap/snowfraction">Download the scripts</a> used to generate these data</li>
</ul>
  
<table class="overview">
  <tbody>
    <tr>
      <th scope="row">Baseline reference climate</th>
      <td>1971&ndash;2000 PRISM</td>
    </tr>
    <tr>
      <th scope="row">Spatial resolution</th>
      <td>771m</td>
    </tr>
    <tr>
      <th scope="row">Temporal resolution</th>
      <td>monthly</td>
    </tr>
    <tr>
      <th scope="row">Spatial extent</th>
      <td>Alaska</td>
    </tr>
  </tbody>
</table>


<h4>Metadata by product</h4>

<p><strong>Metadata</strong> <a href="#" class="metadataLink"  data-geonetwork-metadata-id="83">Historical decadal averages of monthly snow-day fraction 771m CRUTS3.1</a></p>

<h4>Data</h4>
<p><a href="/files/data/snow_day_fraction/fs_decadal_mean_monthly_mean_pct_cru_TS31_historical_1910_2009.zip">1910-2009</a> (250MB)</p>


</div>


</div>


            </div>

<!-- start IEM -->



<div class="methods text" id="Research">
<h3>Research data</div>
</div>

<p class="intro"><img class="pull-right" src="${imagePath}IEM_web_thumbnail.png" style="width: 400px;" />We are developing data specifically for several broad scale modeling projects. Learn more about the projects related to these data (including collaborators and funding sources) on respective project pages.</p>
  
<p>Data are preliminary and are constantly being vetted and updated by our research group. Their use should be limited to these modeling projects, but are shared here for stakeholder review and general communication of our data efforts. Data used in these broad-scale modeling projects must:</p>
<ul>
  <li>use 1×1km pixel resolution,</li>
  <li>cover data-poor regions of Alaska, the Yukon Territories, and parts of northern British Columbia,</li>
  <li>include monthly data for the early 1900s to 2100, and </li>
  <li>must adhere to model-specific requirements to produce plausible outputs. Because input data did not already exist at this level of detail, we have downscaled variables of interest to an intermediate resolution when available and then applied common raster resampling methods down to 1×1km pixel sizes. We have also kept the range of the data within accepted bounds and consistent across related variables.<br>
  </li>
</ul>




<div class="dataAccordionWrapper">
<div class="dataAccordion">

<h3><a href="#dataset=IEM_ancillary">Ancillary data: elevation, slope, slope complexity, aspect, land cover, fire history (burned area)</a></h3>
<div>

<table class="overview iem" style="display: static;">
<thead>
  <tr>
    <th scope="col">Dataset</th><th scope="col">Original spatial resolution</th><th scope="col">Final spatial resolution</th><th scope="col">Temporal resolution</th></tr>
</thead>
<tbody>
  <tr>
    <td>Elevation, slope, slope complexity, aspect</td><td>2km</td><td>1km</td><td>&nbsp;</td></tr>
  <tr>
    <td>Land cover</td><td>500m</td><td>1km</td><td>2005, but highly modified classes</td></tr>
  <tr>
    <td>Fire history (burned area)</td><td>vector format</td><td>1km</td><td>1917&mdash;2011</td></tr>
</tbody>
</table>

<div style="clear: both"></div>
<h4>Metadata</h4>
<ul>
  <li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="86">Elevation</a></li>
  <li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="88">Slope</a></li>
  <li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="98">Slope complexity</a></li>
  <li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="87">Aspect</a></li>
  <li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="91">Land cover</a></li>
  <li><a href="#" class="metadataLink"  data-geonetwork-metadata-id="90">Fire history (burned area)</a></li>
</ul>
<h4>Downloads</h4>
<p><a href="/files/data/iem/ancillary/iem_ancillary_data.zip">Ancillary IEM Data</a>, 35MB</p>

  </div>
</div>


<div class="dataAccordionWrapper">
  <div class="dataAccordion">
    <h3><a href="#dataset=IEM_historical_temperature">Historical temperature</a></h3>
    <div>
      <table>
        <tbody>
          <tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990</td></tr>
          <tr><th scope="row">Original spatial resolution</th><td>0.5&deg;</td></tr>
          <tr><th scope="row">Final spatial resolution</th><td>1 km</td></tr>
          <tr><th scope="row">Temporal resolution</th><td>1901 - 2009</td></tr>
        </tbody>
      </table>
      <h4>Metadata</h4>
      <p><a href="#" class="metadataLink"  data-geonetwork-metadata-id="93">Historical temperature</a></p>
      <h4>Downloads</h4>
      <p><a href="/files/data/iem/cru_ts31/tas_mean_C_iem_cru_TS31_1901_2009.zip">Historical temperature</a>, 6.6 GB</p>
    </div>
  </div>
</div>


<div class="dataAccordionWrapper">
  <div class="dataAccordion">
    <h3><a href="#dataset=IEM_historical_precipitation">Historical precipitation</a></h3>
    <div>
            <table>
        <tbody>
          <tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990</td></tr>
          <tr><th scope="row">Original spatial resolution</th><td>0.5&deg;</td></tr>
          <tr><th scope="row">Final spatial resolution</th><td>1 km</td></tr>
          <tr><th scope="row">Temporal resolution</th><td>1901 - 2009</td></tr>
        </tbody>
      </table>
            <h4>Metadata</h4>
      <p><a href="#" class="metadataLink"  data-geonetwork-metadata-id="94">Historical precipitation</a></p>
      <h4>Downloads</h4>
      <p><a href="/files/data/iem/cru_ts31/pr_total_mm_iem_cru_TS31_1901_2009.zip">Historical precipitation</a>, 3.0 GB</p>
    </div>
  </div>
</div>

<div class="dataAccordionWrapper">
  <div class="dataAccordion">
    <h3><a href="#dataset=IEM_historical_radiation">Historical surface downwelling shortwave radiation</a></h3>
    <div>
            <table>
        <tbody>
          <tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990</td></tr>
          <tr><th scope="row">Original spatial resolution</th><td>0.5&deg;</td></tr>
          <tr><th scope="row">Final spatial resolution</th><td>1 km</td></tr>
          <tr><th scope="row">Temporal resolution</th><td>1901 - 2009</td></tr>
        </tbody>
      </table>
            <h4>Metadata</h4>
      <p><a href="#" class="metadataLink"  data-geonetwork-metadata-id="85">Historical surface downwelling shortwave radiation</a></p>
      <h4>Downloads</h4>
      <p><a href="/files/data/iem/cru_ts31/rsds_mean_MJ-m2-d1_iem_cru_TS31_1901_2009.zip">Historical surface downwelling shortwave radiation</a>, 6.3 GB</p>
    </div>
  </div>
</div>

<div class="dataAccordionWrapper">
  <div class="dataAccordion">
    <h3><a href="#dataset=IEM_historical_vapor">Historical vapor pressure</a></h3>
    <div>      <table>
        <tbody>
          <tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990</td></tr>
          <tr><th scope="row">Original spatial resolution</th><td>0.5&deg;</td></tr>
          <tr><th scope="row">Final spatial resolution</th><td>1 km</td></tr>
          <tr><th scope="row">Temporal resolution</th><td>1901 - 2009</td></tr>
        </tbody>
      </table>
      <h4>Metadata</h4>
      <p><a href="#" class="metadataLink"  data-geonetwork-metadata-id="80">Historical vapor pressure</a></p>      
      <h4>Downloads</h4>
      <p><a href="/files/data/iem/cru_ts31/vap_mean_hPa_iem_cru_TS31_1901_2009.zip">Historical vapor pressure</a>, 2.4 GB</p>
    </div>
  </div>
</div>

<div class="dataAccordionWrapper">
  <div class="dataAccordion">
    <h3><a href="#dataset=IEM_projected_temperature">Projected temperature</a></h3>
    <div>
      <table>
        <tbody>
          <tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990</td></tr>
          <tr><th scope="row">Original spatial resolution</th><td>1.875&ndash;3.75&deg;</td></tr>
          <tr><th scope="row">Final spatial resolution</th><td>1 km</td></tr>
          <tr><th scope="row">Temporal resolution</th><td>2001&ndash;2100</td></tr>
        </tbody>
      </table>
            <h4>Metadata</h4>
      <p><a href="#" class="metadataLink"  data-geonetwork-metadata-id="89">Projected temperature</a></p>
      <h4>Downloads</h4><ul>
      <li><a href="/files/data/iem/a1b/tas_mean_C_iem_cccma_cgcm3_1_sresa1b_2001_2100.zip">tas_mean_C_iem_cccma_cgcm3_1_sresa1b_2001_2100.zip</a>,  6.2 GB</li>
      <li><a href="/files/data/iem/a1b/tas_mean_C_iem_mpi_echam5_sresa1b_2001_2100.zip">tas_mean_C_iem_mpi_echam5_sresa1b_2001_2100.zip</a>, 6.2 GB</li>
      <li><a href="/files/data/iem/a2/tas_mean_C_iem_cccma_cgcm3_1_sresa2_2001_2100.zip">tas_mean_C_iem_cccma_cgcm3_1_sresa2_2001_2100.zip</a>, 7.0 GB</li>
      <li><a href="/files/data/iem/a2/tas_mean_C_iem_mpi_echam5_sresa2_2001_2100.zip">tas_mean_C_iem_mpi_echam5_sresa2_2001_2100.zip</a>, 6.2 GB</li>
      <li><a href="/files/data/iem/b1/tas_mean_C_iem_cccma_cgcm3_1_sresb1_2001_2100.zip">tas_mean_C_iem_cccma_cgcm3_1_sresb1_2001_2100.zip</a>, 7.0 GB</li>
      <li><a href="/files/data/iem/b1/tas_mean_C_iem_mpi_echam5_sresb1_2001_2100.zip">tas_mean_C_iem_mpi_echam5_sresb1_2001_2100.zip</a>, 7.0 GB</li></ul>
    </div>
  </div>
</div>

<div class="dataAccordionWrapper">
  <div class="dataAccordion">
    <h3><a href="#dataset=IEM_projected_precipitation">Projected precipitation</a></h3>
    <div>
            <table>
        <tbody>
          <tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990</td></tr>
          <tr><th scope="row">Original spatial resolution</th><td>1.875&ndash;3.75&deg;</td></tr>
          <tr><th scope="row">Final spatial resolution</th><td>1 km</td></tr>
          <tr><th scope="row">Temporal resolution</th><td>2001&ndash;2100</td></tr>
        </tbody>
      </table>
            <h4>Metadata</h4>
      <p><a href="#" class="metadataLink"  data-geonetwork-metadata-id="92">Historical precipitation</a></p>
      <h4>Downloads</h4><ul>
      <li><a href="/files/data/iem/a1b/pr_total_mm_iem_cccma_cgcm3_1_sresa1b_2001_2100.zip">pr_total_mm_iem_cccma_cgcm3_1_sresa1b_2001_2100.zip</a>, 6.1 GB</li>
      <li><a href="/files/data/iem/a1b/pr_total_mm_iem_mpi_echam5_sresa1b_2001_2100.zip">pr_total_mm_iem_mpi_echam5_sresa1b_2001_2100.zip</a>, 6.0 GB</li>
      <li><a href="/files/data/iem/a2/pr_total_mm_iem_cccma_cgcm3_1_sresa2_2001_2100.zip">pr_total_mm_iem_cccma_cgcm3_1_sresa2_2001_2100.zip</a>, 6.7 GB</li>
      <li><a href="/files/data/iem/a2/pr_total_mm_iem_mpi_echam5_sresa2_2001_2100.zip">pr_total_mm_iem_mpi_echam5_sresa2_2001_2100.zip</a>, 6.0 GB</li>
      <li><a href="/files/data/iem/b1/pr_total_mm_iem_cccma_cgcm3_1_sresb1_2001_2100.zip">pr_total_mm_iem_cccma_cgcm3_1_sresb1_2001_2100.zip</a>, 6.6 GB</li>
      <li><a href="/files/data/iem/b1/pr_total_mm_iem_mpi_echam5_sresb1_2001_2100.zip">pr_total_mm_iem_mpi_echam5_sresb1_2001_2100.zip</a>, 6.0 GB</li></ul>
    </div>
  </div>
</div>

<div class="dataAccordionWrapper">
  <div class="dataAccordion">
    <h3><a href="#dataset=IEM_projected_radiation">Projected surface downwelling shortwave radiation</a></h3>
    <div>
            <table>
        <tbody>
          <tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990</td></tr>
          <tr><th scope="row">Original spatial resolution</th><td>1.875&ndash;3.75&deg;</td></tr>
          <tr><th scope="row">Final spatial resolution</th><td>1 km</td></tr>
          <tr><th scope="row">Temporal resolution</th><td>2001&ndash;2100</td></tr>
        </tbody>
      </table>
            <h4>Metadata</h4>
      <p><a href="#" class="metadataLink"  data-geonetwork-metadata-id="82">Historical surface downwelling shortwave radiation</a></p>
      <h4>Downloads</h4><ul>
      <li><a href="/files/data/iem/a1b/rsds_mean_MJ-m2-d1_iem_cccma_cgcm3_1_sresa1b_2001_2100.zip">rsds_mean_MJ-m2-d1_iem_cccma_cgcm3_1_sresa1b_2001_2100.zip</a>, 5.8 GB</li>
      <li><a href="/files/data/iem/a1b/rsds_mean_MJ-m2-d1_iem_mpi_echam5_sresa1b_2001_2100.zip">rsds_mean_MJ-m2-d1_iem_mpi_echam5_sresa1b_2001_2100.zip</a>, 5.8 GB</li>
      <li><a href="/files/data/iem/a2/rsds_mean_MJ-m2-d1_iem_cccma_cgcm3_1_sresa2_2001_2100.zip">rsds_mean_MJ-m2-d1_iem_cccma_cgcm3_1_sresa2_2001_2100.zip</a>, 5.8 GB</li>
      <li><a href="/files/data/iem/a2/rsds_mean_MJ-m2-d1_iem_mpi_echam5_sresa2_2001_2100.zip">rsds_mean_MJ-m2-d1_iem_mpi_echam5_sresa2_2001_2100.zip</a>, 5.8 GB</li>
      <li><a href="/files/data/iem/b1/rsds_mean_MJ-m2-d1_iem_cccma_cgcm3_1_sresb1_2001_2100.zip">rsds_mean_MJ-m2-d1_iem_cccma_cgcm3_1_sresb1_2001_2100.zip</a>, 5.8 GB</li>
      <li><a href="/files/data/iem/b1/rsds_mean_MJ-m2-d1_iem_mpi_echam5_sresb1_2001_2100.zip">rsds_mean_MJ-m2-d1_iem_mpi_echam5_sresb1_2001_2100.zip</a>, 5.8 GB</li></ul>   
    </div>
  </div>
</div>

<div class="dataAccordionWrapper">
  <div class="dataAccordion">
    <h3><a href="#dataset=projected_vapor">Projected vapor pressure</a></h3>
    <div>
            <table>
        <tbody>
          <tr><th scope="row">Baseline reference climate</th><td>1961&ndash;1990</td></tr>
          <tr><th scope="row">Original spatial resolution</th><td>1.875&ndash;3.75&deg;</td></tr>
          <tr><th scope="row">Final spatial resolution</th><td>1 km</td></tr>
          <tr><th scope="row">Temporal resolution</th><td>2001&ndash;2100</td></tr>
        </tbody>
      </table>
      <h4>Metadata</h4>
      <p><a href="#" class="metadataLink"  data-geonetwork-metadata-id="81">Historical vapor pressure</a></p>
      <h4>Downloads</h4>
      <ul>
     <li><a href="/files/data/iem/a1b/vap_mean_hPa_iem_cccma_cgcm3_1_sresa1b_2001_2100.zip">vap_mean_hPa_iem_cccma_cgcm3_1_sresa1b_2001_2100.zip</a>, 2.2 GB</li>
     <li><a href="/files/data/iem/a1b/vap_mean_hPa_iem_mpi_echam5_sresa1b_2001_2100.zip">vap_mean_hPa_iem_mpi_echam5_sresa1b_2001_2100.zip</a>, 2.2 GB</li>
     <li><a href="/files/data/iem/a2/vap_mean_hPa_iem_cccma_cgcm3_1_sresa2_2001_2100.zip">vap_mean_hPa_iem_cccma_cgcm3_1_sresa2_2001_2100.zip</a>, 2.2 GB</li>
     <li><a href="/files/data/iem/a2/vap_mean_hPa_iem_mpi_echam5_sresa2_2001_2100.zip">vap_mean_hPa_iem_mpi_echam5_sresa2_2001_2100.zip</a>, 2.2 GB</li>
     <li><a href="/files/data/iem/b1/vap_mean_hPa_iem_cccma_cgcm3_1_sresb1_2001_2100.zip">vap_mean_hPa_iem_cccma_cgcm3_1_sresb1_2001_2100.zip</a>, 2.2 GB</li>
     <li><a href="/files/data/iem/b1/vap_mean_hPa_iem_mpi_echam5_sresb1_2001_2100.zip">vap_mean_hPa_iem_mpi_echam5_sresb1_2001_2100.zip</a>, 2.2 GB</li></ul>
    </div>
  </div>
</div>

<div id="metadataModal"></div>

html;

?>