<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?> 
</head>


<body class="generic-header"<?php body_class(); ?>>

<section class="mini-menu">
        <div class="bonjour"> 
                    <?php 
                        if ( is_user_logged_in() ):
                            $current_user = wp_get_current_user(); 
                            echo "Bonjour, " . $current_user->user_firstname;
                        else:
                            echo "Bonjour, visiteur !";
                        endif; ?>
        </div>
        <div class="recherche">
                <?php get_search_form(); ?>
        </div>
</section>

    <header class="header-perso">
        <div class="logo">
        <a href="<?php echo home_url( '/' ); ?>">
    
        <img src="<?php echo get_template_directory_uri(); ?>/img/logobis.png" alt="Logo">
        </a> 
        </div>
       

    </header>  
    
<div class="menu-header">
             <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?> 
</div>  

<?php wp_body_open(); ?>


