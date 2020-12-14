<?php
/**
 * Template for PT Yoga
 * Setup query to show the 'PT Yoga' post type and 
 * output the content.
 */


$args = array(
  'post_type' => 'pt_yoga',
  'post_status' => 'publish',
  'posts_per_page' => 1
);
$pt_yoga = new WP_Query($args); 
?>


<div id="<?php echo 'pt-yoga'; ?>" class="site-workshop-content"> 

  <?php while( $pt_yoga->have_posts() ) : $pt_yoga->the_post(); ?>

    <div class="pt_yoga_container">
      <div class="info">
          <h2 class="heading"><?php echo get_field('heading'); ?></h2>
          <p class="content"><?php echo get_field('content'); ?></p>
      </div>
      <div class="notification"><strong>Anmälan via mejl </strong><a class="mailto" href = "mailto: sabinalarssonyoga@outlook.com">sabinalarssonyoga@outlook.com</a></div>
      <div class="classes">
          <div class="pt_one">
            <?php $pt_one = get_field('class_pt_yoga'); ?>
            <h3><?php echo $pt_one['pt_one_title'];?></h3>
            <p><?php echo $pt_one['one_time'];?></p>
            <p><?php echo $pt_one['five_times'];?></p>
            <p><?php echo $pt_one['ten_times'];?></p>
          </div>
          <div class="pt_duo">
            <?php $pt_duo = get_field('class_pt_duo_yoga'); ?>
            <h3><?php echo $pt_duo['pt_duo_title'];?></h3>
            <p><?php echo $pt_duo['one_time'];?></p>
            <p><?php echo $pt_duo['five_times'];?></p>
            <p><?php echo $pt_duo['ten_times'];?></p>
          </div>
          <div class="pt_online">
            <?php $pt_online = get_field('class_pt_online_yoga'); ?>
            <h3><?php echo $pt_online['pt_online_title'];?></h3>
            <p><?php echo $pt_online['one_time'];?></p>
            <p><?php echo $pt_online['five_times'];?></p>
            <p><?php echo $pt_online['ten_times'];?></p>
          </div>
      </div>
    </div>
   

  <?php endwhile; ?>
</div>

<!-- Restor global post data -->
<?php wp_reset_postdata(); ?>