<?php
    add_action( 'wp_enqueue_scripts', function () {
        wp_enqueue_style( 'tingle', get_template_directory_uri() . '/tingle.min.css' );
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_script( 'tingle', get_template_directory_uri() . '/tingle.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'index', get_template_directory_uri() . '/index.js?v2.5', array(), '1.0.0', true );

    } );


    wp_deregister_script('jquery');

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    
?>