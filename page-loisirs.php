
<?php get_header(); ?>
<h1>Loisirs</h1>

<section class="loisirs">
    <div class="petit-article">

        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'loisirs',
            'posts_per_page' => -1, // Pour afficher tous les articles de la catégorie
        );

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
        ?>           

                <h1><?php the_title(); ?></h1>
                
                <?php the_content(); ?>                

                <?php endwhile; endif; ?>
    </div>
</section>

    <?php get_footer(); ?>
