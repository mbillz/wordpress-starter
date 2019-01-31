<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">-->
  <!-- <meta property="og:url" content="<?php echo site_url(); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php echo get_field('meta_description', 'option'); ?>" />
  <meta property="og:image" content="<?php echo get_field('meta_image', 'option')['url']; ?>" /> -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- begin site wrapper -->
<div class="site-wrapper">