<?php
/**
 * Section Inspiration
 */
?>


<div class="position-container">

  <?php for($i = 1; $i <= 5; $i++) { 

    $image = get_field('inspiration_image_' . $i); ?>

    <div class="position-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>

  <?php } ?>
  
</div>
