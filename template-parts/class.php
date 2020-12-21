<?php
/**
 * Template for Workshop
 * Setup query to show the 'workshops' post type and 
 * output the content.
 */


$args = array(
  'post_type' => 'class',
  'post_status' => 'publish',
  'posts_per_page' => 1
);
$classes = new WP_Query($args); ?>

<div id="classes" class="site-workshop-content"> 

  <?php while( $classes->have_posts() ) : $classes->the_post(); ?>
    <?php 
    $image50 = get_field('image_50');
    ?>

    <div class="image-container" style="background-image: url(<?php echo $image50['url']; ?>)"></div>
      <div class="content-container">
        <div class="content-inner-container">
    
          <div class="title-container">
            <h2 class="title"><?php echo get_field('heading'); ?></h2>
            <p class="sub_heading"><?php  echo get_field('sub_heading'); ?></p>
          </div>

          <?php
          $classes_info = [];
          array_push($classes_info, get_field('drottningtorget'));
          array_push($classes_info, get_field('alvstrand'));
          array_push($classes_info, get_field('haga'));
      
          foreach($classes_info as $class_info) : ?>
            <div class="container-class">
              <h2><?php echo $class_info['title']; ?></h2>
              <?php for($i = 1; $i <= 3; $i++) : ?>
                <?php if( !empty($class_info['general_info_' . $i]) ) : ?>
                  <p><?php echo $class_info['general_info_' . $i];?></p>
                <?php endif; ?>
              <?php endfor; ?>
            </div>
          <?php endforeach; ?>
       
        </div>
      </div>

  <?php endwhile; ?>
</div>

<?php wp_reset_postdata(); ?>
