<?php

// LOADING SCRIPTS
function add_theme_scripts() {
  // Loading CSS
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  // Loading JS
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', null, 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// BASIC SETUP
function init() {
  // Generate title tag
  add_theme_support('title-tag');
}

add_action( 'after_setup_theme', 'init' );