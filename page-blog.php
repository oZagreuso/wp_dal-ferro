<?php get_header(); ?>
<h1>Blog</h1>
<div class="blog-titre-principal">
 	<h1>Le blog Developpement Factor</h1>
</div>
	<section class="blog-container">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="blog-article">
			<h2><?php the_title(); ?></h2>
      
        	<?php the_post_thumbnail(); ?>
            
            <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> • <?php comments_number(); ?>
            </p>
            
      		<?php the_excerpt(); ?>
              
      		<p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
		</article>
	</section>
	<?php endwhile; endif; ?>
	<?php posts_nav_link(); ?>
<?php get_footer(); ?>