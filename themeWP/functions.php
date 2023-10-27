<?php

add_action( 'wp_enqueue_scripts', 'add_assets' );

function add_assets()
{

    wp_enqueue_style(
        'my-blog-style', 
        get_stylesheet_uri() 
    );

    wp_enqueue_style(
        'my-blog-home-style', 
        get_template_directory_uri() . '/css/home.css'
    );
    
    wp_enqueue_script(
        'my-blog-bootstrap', 
        "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js",
        array(),
        false,
        true
    );

}
