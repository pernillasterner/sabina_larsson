<?php get_header(); 

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
    echo do_shortcode( '[instagram-feed width=70 num=12 showbutton=false customavatar="https://scontent-arn2-2.xx.fbcdn.net/v/t1.0-9/29339999_10156171285496322_6272156092009021440_o.jpg?_nc_cat=108&ccb=2&_nc_sid=09cbfe&_nc_ohc=BwNdjye0Mf8AX-UhlrZ&_nc_ht=scontent-arn2-2.xx&oh=959ea8262e4f5348d03bdece43d680f1&oe=601DFDFA" disablemobile=true showfollow=false]' );


  ?>
    
  <?php endwhile;?>

<?php get_footer(); ?>