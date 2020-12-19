<?php
/**
 * Section About Sabina
 */
?>


<div class="about-sabina-container">

  <div class="image-container">
    <h2 class="title"><?php echo get_field('quote'); ?></h2>
  
    <?php $image = get_field('image'); ?>
    
      <div class="about-sabina-image" style="background-image: url(<?php echo $image['url']; ?>);"><div class="image-opacity"></div></div>
 
  </div>

  <div class="content-container">
    <h3><?php echo get_field('title'); ?></h3>
    <p><?php echo get_field('content'); ?></p>
    <p class="signiture"><?php echo get_field('signiture'); ?></p>
  </div>

</div>

