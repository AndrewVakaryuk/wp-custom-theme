<?php

function my_theme_scripts()
{
     wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'fontawesome',
        get_template_directory_uri() . '/assets/css/fontawesome.css'
    );

    wp_enqueue_style('my_theme_style', get_stylesheet_uri());

    wp_enqueue_style(
        'owl',
        get_template_directory_uri() . '/assets/css/owl.css'
    );

    // wp_enqueue_script(
    //     'wplesson-navigation',
    //     get_template_directory_uri() . '/assets/js/templatemo-script.js',
    //     array('jquery'),
    //     _S_VERSION,
    //     true
    // );
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');