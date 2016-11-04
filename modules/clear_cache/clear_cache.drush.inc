<?php
/**
 * @file
 * Drush command file
 * Implement hook_drush_command()
 * 
*/
 function clear_cache_drush_command() { 
 $items['batman-clear-cache'] = array(
    'description' => dt('Execute a clear cache on the entire site, including views cache.'),
	'aliases' => array('batman'),
	'examples' => array(
      'drush batman-clear-cache' => 'Batman will instruct your site to clear all site caches, including views cache.',
      'drush batman' => 'An alias for clearing all site caches',
    ),
 );
 return $items;
  
}

/**
 * Drush command callback for batman-clear-cache.
 * similar to the clear_cache_truncate() function in clear_cache.clear.inc file, except here we are not returning any htmlcode
 */
function drush_clear_cache_batman_clear_cache() {
   // Change query-strings on css/js files to enforce reload for all users.
  _drupal_flush_css_js();

  registry_rebuild();
  drupal_clear_css_cache();
  drupal_clear_js_cache();

  // Rebuild the theme data. Note that the module data is rebuilt above, as
  // part of registry_rebuild().
  system_rebuild_theme_data();
  drupal_theme_rebuild();

  entity_info_cache_clear();
  node_types_rebuild();
  // node_menu() defines menu items based on node types so it needs to come
  // after node types are rebuilt.
  menu_rebuild();

  // Synchronize to catch any actions that were added or removed.
  actions_synchronize();
  
  // Ordered so clearing the page cache will always be the last action.
  // Note that the list includes views tables. The views moduile is not required. 
  $cached_tables = array('cache', 'cache_block', 'cache_bootstrap', 'cache_field', 'cache_filter', 'cache_image', 'cache_menu', 'cache_path', 'cache_views', 'cache_views_data', 'cache_page');
  foreach ($cached_tables as $cached_table) {
  db_truncate($cached_table)->execute();  
  }
  
  // Rebuild the bootstrap module list. We do this here so that developers
  // can get new hook_boot() implementations registered without having to
  // write a hook_update_N() function.
  _system_update_bootstrap_status();
  
  // write success message to screen
  drush_log(dt('Batman successfully cleared all cache! '), 'success');  

}
