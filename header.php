<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container">
   
    <div class="site-header__menu group">
      <nav class="main-navigation">
        <div class="logo-sabina-larsson">
          <a href="<?php echo home_url(); ?>"><img src="https://cdn.freebiesupply.com/logos/large/2x/50x50-logo-black-and-white.png" alt=""></a>
        </div>
        <div class="main-menu">
        <?php wp_nav_menu(array(
          'theme_location' => 'menu_left',
          'menu_class' =>'header-menu-left'
          )); ?>
          <div class="headline-sabina-larsson"><a href="<?php echo home_url(); ?>">SABINA LARSSON</a></div>
        <?php wp_nav_menu(array(
          'theme_location' => 'menu_right',
          'menu_class' => 'header-menu-right'
          )); ?>
          </div>
        <div class="social-icons">
          <ul>
            <li><a href="https://www.yogaalliance.org/TeacherPublicProfile?tid=265555" target="_blank"><i class="fas fa-infinity"></i></a></li>
            <li><a href="https://www.instagram.com/sabinalarssonyoga" target="_blank"><i class="fab fa-instagram"></i></i></a></li>
            <li><a href="https://www.facebook.com/SabinaLarssonYoga/" target="_blank"><i class="fab fa-facebook"></i></i></a></li>
          </ul>
        </div>
        <div class="hamburger">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </nav>
    </div>
  </div>
</header>