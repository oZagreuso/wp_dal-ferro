<h1>Archive</h1>

<?php get_header(); ?>

<section class="blog-container">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="blog-article">
			<h2><?php the_title(); ?></h2>
      
        	<?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('custom-size');?>
                </div>
            <?php else : ?>
                <div class="post-thumbnail">
				<?php echo wp_get_attachment_image(get_option('/img/design.png'), 'custom-size'); ?>
                </div>
            <?php endif; ?>
            
            <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> • <?php comments_number(); ?>
            </p>
            
      		<?php the_excerpt(); ?>       

      		<p>
                <a href="<?php the_permalink(); ?>" class="post__content">Lire la suite</a>
            </p> 

		</article>

	<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
