<?php

/**
 * Template Name: Custom Search Page
 *
 * This template can be used to create a custom search page for your WordPress site.
 */

get_header(); ?>

<div id="search" class="search-container">
    <main id="main-search" class="main-search" role="main">

        <?php if ( have_posts() ) : ?>
            
            <?php while ( have_posts() ) : the_post(); ?>

                <?php                    
                    get_template_part( 'template-parts/content', get_post_format() );
                ?>

            <?php endwhile; ?>

            <?php 
          
            if ( $wp_query->post_count === 1 ) {
                wp_redirect( get_permalink() );
                exit;
            } else {
                the_posts_navigation(); 
            }
            ?>

        <?php else : ?>

            <p><?php esc_html_e( 'Aucun Résultat trouvé', 'online-resume' ); ?></p>

        <?php endif; ?>

    </main>
</div>

<?php
get_sidebar();
get_footer();

