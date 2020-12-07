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
    <div class="site-header__menu group">
      <nav class="main-navigation">
        <div class="logo-sabina-larsson"></div>
        <div class="main-menu">
        <?php wp_nav_menu(array(
          'theme_location' => 'menu_left',
          'menu_class' =>'header-menu-left'
          )); ?>
          <div class="headline-sabina-larsson">SABINA LARSSON</div>
        <?php wp_nav_menu(array(
          'theme_location' => 'menu_right',
          'menu_class' => 'header-menu-right'
          )); ?>
          </div>
        <div class="social-icons"></div>
      </nav>
    </div>
  </div>
</header>