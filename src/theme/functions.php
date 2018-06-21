<?php

// Featured image support
add_theme_support( 'post-thumbnails' );

// SVG image support
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

// Add stylesheets and scripts
function theme_scripts() {
	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css', false, 1.0 );
	wp_enqueue_script( 'script.js', get_template_directory_uri() . '/js/script.js', false, 1.0, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// Disable auto generation of thumbnails
function add_image_insert_override($sizes){
	unset( $sizes['thumbnail']);
	unset( $sizes['medium']);
	unset( $sizes['large']);
	return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'add_image_insert_override' );

// Add theme title support
add_theme_support( 'title-tag' );