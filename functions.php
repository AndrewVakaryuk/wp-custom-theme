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

    wp_enqueue_style(
        'owl',
        get_template_directory_uri() . '/assets/css/owl.css'
    );

    wp_enqueue_style('my_theme_style', get_stylesheet_uri());

    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js',
        array('jquery'),
        '1.0.0',
        true
    );

    wp_enqueue_script(
        'owl',
        get_template_directory_uri() . '/assets/js/owl.js',
        array('jquery'),
        '1.0.0',
        true
    );

    wp_enqueue_script(
        'slick',
        get_template_directory_uri() . '/assets/js/slick.js',
        array('jquery'),
        '1.0.0',
        true
    );

    wp_enqueue_script(
        'isotope',
        get_template_directory_uri() . '/assets/js/isotope.js',
        array('jquery'),
        '1.0.0',
        true
    );

    wp_enqueue_script(
        'accordions',
        get_template_directory_uri() . '/assets/js/accordions.js',
        array('jquery'),
        '1.0.0',
        true
    );

    wp_enqueue_script(
        'custom',
        get_template_directory_uri() . '/assets/js/custom.js',
        array('jquery'),
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');