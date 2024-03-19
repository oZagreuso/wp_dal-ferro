
<?php get_header(); ?>
<h1>Condifentialite</h1>

<section class="confident">
    <div class="confident-article">
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>            

                <h1><?php the_title(); ?></h1>
                
                <?php the_content(); ?>                

                <?php endwhile; endif; ?>
    </div>
</section>

    <?php get_footer(); ?>
    