<?php
/**
 * Template for Workshop Haga
 * Setup query to show the 'haga workshops' post type and 
 * output the content.
 */


$args = array(
  'post_type' => 'workshop_haga',
  'post_status' => 'publish',
  'posts_per_page' => 1
);
$workshops_haga = new WP_Query($args); ?>

<div id="<?php echo 'classes'; ?>" class="site-workshop-content workshop-haga"> 

  <?php while( $workshops_haga->have_posts() ) : $workshops_haga->the_post(); ?>
    <?php 
    $image50 = get_field('image_50');
    ?>

    <div class="image-container" style="background-image: url(<?php echo $image50['url']; ?>)"></div>
      <div class="content-container">
        <div class="content-inner-container">
    
          <div class="title-container">
            <h2 class="title"><?php echo get_field('title'); ?></h2>
            <p class="sub_heading"><?php  echo get_field('sub_title'); ?></p>
          </div>

          <?php $dates = get_field('dates'); ?>
          <div class="info-container">
            <p class="info"><?php echo get_field('info'); ?></p>

            <?php for($i = 0; $i <= 5; $i++) { ?>

              <?php if( !empty($dates['date_' . $i]) ) : ?>
              <p class="date"><?php echo $dates['date_' . $i]; ?></p>
              <?php endif; ?>

            <?php } ?>

          </div>

          <button class="haga-workshop-btn" type="submit"><a href="https://www.hagabadet.se/kurser/workshop-event/">BOKA</a></button>
        
        </div>
      </div>

  <?php endwhile; ?>
</div>

<?php wp_reset_postdata(); ?>
