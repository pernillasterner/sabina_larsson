<?php get_header(); ?>

  <?php while(have_posts()) : the_post(); ?>


  <?php
    
    /**______HERO BANNER SECTION______**/
    get_template_part( '/template-parts/hero-banner' );


    /**______WORKSHOP SECTION______**/
    get_template_part( '/template-parts/workshop' );



    /**______POSITION SECTION______**/
    get_template_part( '/template-parts/position' );


  ?>
    
  <?php endwhile;?>

<?php get_footer(); ?>