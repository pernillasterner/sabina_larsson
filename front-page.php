<?php get_header(); 

// Get the new response code
var_dump(http_response_code());

?>

  <?php while(have_posts()) : the_post(); ?>


  <?php
    
    /**______HERO BANNER SECTION______**/
    get_template_part( '/template-parts/hero-banner' );


    /**______WORKSHOP SECTION______**/
    get_template_part( '/template-parts/workshop' );
    
    
    /**______POSITION SECTION______**/
    get_template_part( '/template-parts/position' );


    /**______WORKSHOP SECTION______**/
    get_template_part( '/template-parts/course' );


    /**______REVIEWS SECTION______**/
    get_template_part( '/template-parts/review' );


    /**______PT YOGA SECTION______**/
    get_template_part( '/template-parts/pt-yoga' );


    /**______CLASSES SECTION______**/
    get_template_part( '/template-parts/class' );


    /**______INSPIRATION SECTION______**/
    get_template_part( '/template-parts/inspiration' );


    /**______CLASSES SECTION______**/
    get_template_part( '/template-parts/workshop-haga' );


    /**______ABOUT SABINA SECTION______**/
    get_template_part( '/template-parts/about-sabina' );
    
    /**______INSTAGRAM FEED______**/
    echo do_shortcode( '[instagram-feed]' );


  ?>
    
  <?php endwhile;?>

<?php get_footer(); ?>