<?php register_nav_menus(
        array(
        'primary' => __( 'Primary menu' ),
        'footer' => __( 'Footer menu' )
        )
    );

    
    function theme_enqueue_styles() {
        wp_enqueue_style( 'style', get_stylesheet_directory_uri() .'/style.css' );   
        wp_enqueue_script( 'portfolio', get_stylesheet_directory_uri() .'/script.js', array(), '1.0.0', true );
        }

    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

    
    function portfolio_setup() {                                         // pour ajouter "image mise en avant" sur la création de posts 
        add_theme_support( 'post-thumbnails' );
        add_theme_support('title-tag');
        add_theme_support('custom-logo');                               // pour ajouter l'ajout de logo dans wordpress 
    }
    add_action( 'after_setup_theme', 'portfolio_setup' );




    add_image_size('custom-thumbnail', 300, 200, true);                 // pour ajouter une nouvelle taille d'image

