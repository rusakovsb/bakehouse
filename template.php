<?php
/**
 * Implements hook_html_head_alter().
 * This will overwrite the default meta character type tag with HTML5 version.
 */
function bakehouse_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8'
  );
}

/**
 * Override or insert variables into the node template.
 */
function bakehouse_preprocess_node(&$variables) {
  $node = $variables['node'];
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
}

function bakehouse_menu_tree__main_menu($variables) {
  return '<nav class="navigation"><ul class="main-menu">' . $variables['tree'] . '</ul></nav>';
}

function bakehouse_menu_tree__menu_production($variables) {
  return '<nav class="navigation"><ul class="production-menu">' . $variables['tree'] . '</ul></nav>';
}

function bakehouse_menu_tree__menu_footer($variables) {
  return '<nav class="navigation"><ul class="footer-menu">' . $variables['tree'] . '</ul></nav>';
}

