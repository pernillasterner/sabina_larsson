<?php
/**
 * Section Position
 */
?>

<div class="position-container">

  <?php for($i = 1; $i <= 5; $i++) { 

    $image = get_field('image_' . $i); ?>

    <?php if($image['url']) : ?>
      <div class="position-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
    <?php endif; ?>

  <?php } ?>
  
</div>