<?php
/**
 * Section Review
 */
?>

<?php
$args = array(
  'post_type' => 'review',
  'post_status' => 'publish',
  'posts_per_page' => 3,
  'orderby' => 'rand'
);
$reviews = new WP_Query($args); ?>

<div class="review-container">
  <?php while( $reviews->have_posts() ) : $reviews->the_post(); ?> 

    <div class="review">
      <p class="comment"><?php echo get_field('content'); ?></p>
      <p class="comment_by"><strong><?php echo get_field('from'); ?></strong></p>
    </div>
  
  <?php endwhile; ?>
</div>