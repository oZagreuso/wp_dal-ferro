<?php get_header(); ?>


<section class="archive-container">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="archive-article">
                <div class="archive-a">
                    <h1><?php the_title(); ?></h1>                    
                        <p class="post__meta">
                            Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                            par <?php the_author(); ?> • <?php comments_number(); ?>
                        </p>
                </div>

                <div class="archive-d">
                <?php the_post_thumbnail('custom-size');?>
                </div>

                <div class="archive-b">                
      		            <?php the_excerpt(); ?>  
      		            <p>
                            <a href="<?php the_permalink(); ?>" class="post__content">Lire la suite</a>
                        </p>             
                </div>                               
                        
    </div>
 
	<?php endwhile; endif; ?>
</section>

<h1>Archive</h1>
<?php get_footer(); ?>
