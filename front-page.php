<?php get_header(); ?>

  <?php while(have_posts()) : the_post();
    
    /**______HERO BANNER SECTION______**/
    get_template_part( '/temp/hero-banner' );
    
    
   

  endwhile;?>

<?php get_footer(); ?>