
<h1>Page parcours-pro</h1>

<?php get_header(); ?>


<section class="parcours-pro">
    <div class="petit-article">

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

                <h1><?php the_title(); ?></h1>

                <?php the_post_thumbnail('custom-size');?>
                
                <?php the_content(); ?>                

                <?php endwhile; endif; ?>
    </div>
</section>

    <?php get_footer(); ?>