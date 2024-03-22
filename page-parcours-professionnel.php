

<?php get_header(); ?>


<section class="pro">   
   
        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'parcours-professionnel',
            'posts_per_page' => -1, // Pour afficher tous les articles de la catégorie
        );
        
        $query = new WP_Query( $args ); ?>
    
        <?php
        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
        ?>         
        <div class="pro-article">
                <div class="pro-a">
                    <h1><?php the_title(); ?></h1>                    
                        <p class="post__meta">
                            Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                            par <?php the_author(); ?> • <?php comments_number(); ?>
                        </p>
                </div>

                <div class="pro-d">
                <?php the_post_thumbnail('custom-size');?>
                </div>

                <div class="pro-b">                
      		            <?php the_excerpt(); ?>  
      		            <p>
                            <a href="<?php the_permalink(); ?>" class="post__content">Lire la suite</a>
                        </p>             
                </div>   
                             
                        
        </div>

        <?php endwhile; endif; ?>
        </section>  
        <h1>Page Pro</h1>


    <?php get_footer(); ?>
    