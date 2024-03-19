<h1>politique cookies</h1> 

<?php get_header(); ?>

<section class="cookies">
    <div class="cookies-article">
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>            
            <div class="cookies-titre">
                <h1><?php the_title(); ?></h1>
                
                <?php the_content(); ?>                

                <?php endwhile; endif; ?>
            </div>
    </div>
</section>

    <?php get_footer(); ?>