<?php

function main_style() {

    wp_enqueue_style('style-principal', get_stylesheet_uri());   
    wp_enqueue_style('style-personnalise', get_template_directory_uri() . './assets/css/header-style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style-personnalise', get_template_directory_uri() . './assets/css/custom-colors.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'main_style');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

register_nav_menus( array
                    (
                        'main' => 'Menu Principal', // 1er paramètre = slug, second = nom administration wordpress
                        'footer' => 'Bas de page', 
                    ) );


// Dans votre fichier functions.php



// Ajoute le code HTML de la bannière à l'en-tête
add_action('wp_head', 'complianz_banner_in_header');

function complianz_banner_in_header() {
?>

<?php
}

// Redimensionner automatiquement les images dans les articles
function custom_content_image_sizes($sizes) {
    $sizes = array(        
        'thumbnail' => __( 'Thumbnail' ),
        'medium'    => __( 'Medium' ),
        'large'     => __( 'Large' ),
        'custom-size' => __( 'Custom Size' ), // Ajoutez une taille personnalisée
    );
    return $sizes;
}
add_filter('image_size_names_choose', 'custom_content_image_sizes');

// Ajoutez une nouvelle taille d'image personnalisée
add_image_size('custom-size', 286, 228, true);


