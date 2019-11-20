<?php
/*Custom Portfolio Post type start*/
function cw_post_type_news() {
$supports = array(
  'title', // post title
  'editor', // post content
  'author', // post author
  'thumbnail', // featured images
  'excerpt', // post excerpt
  'custom-fields', // custom fields
  'comments', // post comments
  'revisions', // post revisions
  'post-formats', // post formats
);
$labels = array(
  'name' => _x('Portfolio', 'plural'),
  'singular_name' => _x('Portfolio', 'singular'),
  'menu_name' => _x('Portfolio', 'admin menu'),
  'name_admin_bar' => _x('Portfolio', 'admin bar'),
  'add_new' => _x('Add New', 'add new'),
  'add_new_item' => __('Add New Project'),
  'new_item' => __('New Project'),
  'edit_item' => __('Edit Project'),
  'view_item' => __('View Project'),
  'all_items' => __('All Projects'),
  'search_items' => __('Search Projects'),
  'not_found' => __('No Projects found.'),
);
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'projects'),
  'has_archive' => true,
  'hierarchical' => false,
);
  register_post_type('portfolio', $args);
}
  add_action('init', 'cw_post_type_news');
?>
