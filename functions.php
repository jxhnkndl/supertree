<?php

// Get site version
$version = wp_get_theme()->get( 'Version' );

// Remove unused default WordPress fields
function st_remove_default_fields() {
  remove_post_type_support( 'page', 'editor' );
  remove_post_type_support( 'post', 'editor' );
  remove_post_type_support( 'concert', 'editor' );
  remove_post_type_support( 'youtube-video', 'editor' );
}

add_action( 'init', 'st_remove_default_fields' );