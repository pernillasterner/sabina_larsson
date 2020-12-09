<?php
/**
 * Hero Banner Background Image
 */
?>
<div class="site-hero-content"> 
  <?php 
  $heroBannerImage = get_field('hero_banner_image');
  if( !empty($heroBannerImage) ) : ?>
    <div class="hero-image" style="background-image: url(<?php echo $heroBannerImage['url']; ?>);"></div>
  <?php else : ?>
    <div class="hero-image" style="background-image: url(<?php echo get_theme_file_uri( '/img/default.jpg' ); ?>);"></div>
  <?php endif; ?>
  
  
  <?php
  /**
  * Hero Banner Content
  */ 
  $heroBannerTitle = get_field('hero_banner_title');
  $heroBannerText = get_field('hero_banner_text');
  if($heroBannerTitle || $heroBannerText) : ?>
    <div class="hero-content">
      <h2 class="hero-title"><?php echo $heroBannerTitle; ?></h2>
      <p class="hero-text"><?php echo $heroBannerText = wordwrap($heroBannerText, 35, "<br />\n"); ?></p>
    </div>
  <?php endif; ?>
</div>