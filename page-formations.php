<?php get_header(); ?>
<h1>Page formations</h1>
<section class="formations">
    <div class="petit-article">

                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>  

                <div class="formations-titre">
                <h1><?php the_title(); ?></h1>                
                <?php the_content(); ?>                
                </div>
                <?php endwhile; endif; ?>

    </div>
</section>

<?php get_footer(); ?>
