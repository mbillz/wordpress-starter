<?php
// Hide admin
add_filter('acf/settings/show_admin', '__return_false');

// Add options pages
if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
  
  acf_add_options_page(array(
    'page_title' 	=> 'Menus',
		'menu_title'	=> 'Menus',
		'menu_slug' 	=> 'menu-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

// Add fields
foreach(glob(get_template_directory() . '/acf/fields/*.php') as $file) {
  require $file;
}