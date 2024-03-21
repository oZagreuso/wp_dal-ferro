<?php 

/*
Template Name: Page Lire la suite
*/

?>
<h1>Test</h1>
<?php get_header(); ?>

<section class="resume">   
    <article class="resume-article">    
      
      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>  
     
                <div class="resume-a">
                    <h1><?php the_title(); ?></h1>                     
                </div>

                <div class="resume-d">
                    <?php the_post_thumbnail('custom-size');?>
                </div>

                <div class="resume-b">                 
                    <?php the_excerpt(); ?>    
                </div>         

        <?php endwhile; endif; ?>

               
</article>
</section>

    <?php get_footer(); ?>
    