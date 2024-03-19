<?php 

/*
Template Name: Page Lire la suite
*/


get_header(); ?>
<h1>Single</h1>
<section class="single">
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="single-article">
     
      <?php the_post_thumbnail(); ?>

      <h1><?php the_title(); ?></h1>

      <div class="post__meta">
        <?php /*echo get_avatar( get_the_author_meta( 'ID' ), 40 ); */?>
        <p>
          Publié le <?php the_date(); ?>
          par <?php the_author(); ?>
          Dans la catégorie <?php the_category(); ?>
          Avec les étiquettes <?php the_tags(); ?>
        </p>
      </div>

      <div class="single-content">
        <div class="post__content">
          <?php the_content(); ?>
        </div>
      </div>

    </article>

  <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>