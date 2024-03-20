


<?php get_header(); ?>

<section class="contact">
    <div class="contact-article">
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>            
                <div class="contact-titre">
                <h1><?php the_title(); ?></h1>
                
                <?php the_content(); ?>                
                </div>
                <?php endwhile; endif; ?>
    </div>
</section>
<h1>Page Real Contact</h1>
    <?php get_footer(); ?>

 
