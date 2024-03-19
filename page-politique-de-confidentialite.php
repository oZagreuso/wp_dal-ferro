
<h1>Condifentialite</h1>

<?php get_header(); ?>


<section class="confident">
    <div class="confident-article">
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>            
                <div class="confident-titre">
                    <h1><?php the_title(); ?></h1>
                    
                    <?php the_content(); ?>                

                    <?php endwhile; endif; ?>
                </div>
    </div>
</section>

    <?php get_footer(); ?>
