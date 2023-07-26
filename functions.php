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