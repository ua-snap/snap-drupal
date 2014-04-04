<?php

/**
 * @file
 * template.php
 */

// Add ability for Drupal to recognize templates by node _and_ display type.
// i.e. templates/node--projects--teaser.tpl.php
function snap_bootstrap_preprocess_node(&$variables) {
  $variables['theme_hook_suggestions'][] = 'node__' . $variables['type'] . '__' . $variables['view_mode'];
}
?>