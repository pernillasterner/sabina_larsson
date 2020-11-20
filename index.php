<?php get_header(); ?>

  <?php while(have_posts()) : ?>
    <?php the_post(); ?>
    <!-- ADD ACF -->
  <?php endwhile; ?>

<?php get_footer(); ?>