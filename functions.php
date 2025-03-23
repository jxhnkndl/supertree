<?php

// Remove admin bar from site preview
add_filter( 'show_admin_bar', '__return_false' );

// Remove unused default WordPress fields
function st_remove_default_fields() {
  remove_post_type_support( 'page', 'editor' );
  remove_post_type_support( 'post', 'editor' );
  remove_post_type_support( 'concert', 'editor' );
  remove_post_type_support( 'video', 'editor' );
}

add_action( 'init', 'st_remove_default_fields' );

// Load styles
function st_enqueue_styles() {
  $theme_version = wp_get_theme()->get( 'Version' );

  wp_enqueue_style(
    'st-theme-styles',
    get_template_directory_uri() . '/style.css',
    array(),
    $theme_version,
    'all'
  );
}

add_action( 'wp_enqueue_scripts', 'st_enqueue_styles' );