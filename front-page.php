

<?php get_header(); ?>

<section class="front">
<div class="front-x">
    <div class="front-article">
        
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>  

                    <div class="front-a">
                        <h1><?php the_title(); ?></h1>               
             
                        <p class="post__meta">
                            Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                            par <?php the_author(); ?> • <?php comments_number(); ?>
                        </p>
                    </div>

                    <div class="front-b">
      		            <?php the_excerpt(); ?>  
      		            <p>
                            <a href="<?php the_permalink(); ?>" class="post__content">Lire la suite</a>
                        </p>             
                    </div>

                    <div class="front-d">
                        <?php /*the_post_thumbnail('custom-size');*/ ?>
                    </div>

                <?php endwhile; endif; ?>
        </div>  
       
    </div>
    <div class="front-y">
            <a>
        <img src="<?php echo get_template_directory_uri(); ?>/img/font-frontpage.png" alt="logo-background">
            </a>
        </div>
        
<h1>frontpage</h1>
</section>

<?php get_footer(); ?>