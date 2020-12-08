<?php

// LOADING SCRIPTS
function add_theme_scripts() {
  // Loading CSS
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', null, 1.0, 'all' );
  // Loading JS
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', null, 1.0, true);
  // Loading FONTS
  wp_register_script( 'font-awesome', 'https://kit.fontawesome.com/4293e854d5.js', array(), 1.0, false );
  wp_enqueue_script('font-awesome');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// BASIC SETUP
function init() {
  // Navigation menu
  register_nav_menu( 'menu_right', 'Header Menu Right' );
  register_nav_menu( 'menu_left', 'Header Menu Left' );

  // Generate title tag
  add_theme_support('title-tag');
}

add_action( 'after_setup_theme', 'init' );