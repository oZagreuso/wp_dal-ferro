
<h1>Page parcours-pro</h1>

<?php get_header(); ?>


<section class="parcours-pro">
<article class="petit-article">
<h1><?php the_title(); ?></h1>
        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'parcours-professionnel',
            'posts_per_page' => -1, // Pour afficher tous les articles de la catégorie
        );

        $query = new WP_Query( $args );  
        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
        ?>           
 <?php /*the_post_thumbnail('custom-size');*/?>
                
 

               
                
                <?php the_content(); ?>                

                <?php endwhile; endif; ?>
</article>
</section>

    <?php get_footer(); ?>