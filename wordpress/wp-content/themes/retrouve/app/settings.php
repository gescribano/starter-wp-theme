<?php

/**
 * Support post thumbnails / featured images
 */
add_theme_support( 'post-thumbnails' );

/**
 * Register custom nav menus
 */
function pydp_register_nav_menus_hook() {
  register_nav_menus(
    array(  
      'header' => "Header Menu", 
      'footer-left' => "Footer Menu Left",
      'footer-right' => "Footer Menu Right",
    )
  );
} 
add_action( 'init', 'pydp_register_nav_menus_hook' );

/**
 * Custom theme image sizes
 */
// add_image_size( 'cdi-listing', 209, 131, 0 );


/**
 * Remove emoji support.
 */
function grd_remove_emoji() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  // Remove from TinyMCE
  add_filter( 'tiny_mce_plugins', 'grd_remove_tinymce_emoji' );
}
add_action( 'init', 'grd_remove_emoji' );
/**
 * Filter out the tinymce emoji plugin.
 */
function grd_remove_tinymce_emoji( $plugins ) {
  if ( ! is_array( $plugins ) ) {
    return array();
  }
  return array_diff( $plugins, array( 'wpemoji' ) );
}
