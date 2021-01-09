<?php
/**
 * Template for Courses
 * Setup query to show the 'courses' post type and 
 * output the content.
 */


$args = array(
  'post_type' => 'course',
  'post_status' => 'publish',
  'posts_per_page' => 1
);
$courses = new WP_Query($args);
?>

<div id="courses" class="site-workshop-content"> 

  <?php while( $courses->have_posts() ) : $courses->the_post(); ?>
  
    <?php 
    $image50 = get_field('image_50');
    $content = get_field('content_1');
    ?>

    <div class="image-container" style="background-image: url(<?php echo $image50['url']; ?>)"></div>
      <div class="content-container">
        <div class="content-inner-container">
    
          <div class="title-container">
            <h2 class="title"><?php echo $content['title']; ?></h2>
            <p class="date"><?php  echo $content['date']; ?></p>
          </div>

          <?php
          // Loop through all custom fields
            for ($i = 1; $i <= 2; $i++) {
              
              $content = get_field('content_' . $i); ?>
            
              <div class="info-container">
                <h3 class="heading"><?php  echo $content['heading']; ?></h3>
                <h4 class="sub-heading"><?php  echo $content['sub_heading']; ?></h4>
                <p class="time"><?php  echo $content['time']; ?></p>
                <div class="textarea">
                  <p class="text"><?php  echo $content['text']; ?></p>
                </div>
                <h6 class="price">Pris: <?php  echo $content['price']; ?>kr</h6>
              </div>
            <?php } ?>
  
          <div class="notification"><strong>Betalning sker vid anmälan.</strong><a class="mailto" href = "mailto: sabinalarssonyoga@outlook.com">sabinalarssonyoga@outlook.com</a></div>
        
        </div>

        <div class="general-info">
          <div class="location">
            <h3>PLATS</h3>
            <p class="place"><?php echo $content['place']; ?></p>
            <p class="adress"><?php echo $content['adress']; ?></p>
          </div>
          <div class="payment">
            <h3>BETALNING</h3>
            <p class="swish">Swish: 123 190 01 82</p>
            <p class="bankgiro">Bankgiro: 5529-6065</p>
          </div>
        </div>
      </div>

  <?php endwhile; ?>
</div>

<?php wp_reset_postdata(); ?>
