<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container">
    <!-- ADD ICON HERE -->
    <div class="site-header__menu group">
      <nav class="main-navigation">
        <?php wp_nav_menu(array('theme_location' => 'menu_left')); ?>
          <!-- ADD SABINA LARSSON TITLE HERE -->
        <?php wp_nav_menu(array('theme_location' => 'menu_right')); ?>
      </nav>
      <!-- ADD SOCIAL ICONS HERE -->
    </div>
  </div>
</header>