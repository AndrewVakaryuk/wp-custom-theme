<?php

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('my_theme_setup')) :
    function my_theme_setup()
    {
      load_theme_textdomain('my_theme', get_template_directory() . '/languages');
      load_theme_textdomain('wplesson', get_template_directory() . '/languages');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'header-menu' => esc_html__('Primary', 'my_theme'),
            )
        );
    }
endif;
add_action('after_setup_theme', 'my_theme_setup');

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
        _S_VERSION,
        true
    );

    wp_enqueue_script(
        'owl',
        get_template_directory_uri() . '/assets/js/owl.js',
        array('jquery'),
        _S_VERSION,
        true
    );

    wp_enqueue_script(
        'slick',
        get_template_directory_uri() . '/assets/js/slick.js',
        array('jquery'),
        _S_VERSION,
        true
    );

    wp_enqueue_script(
        'isotope',
        get_template_directory_uri() . '/assets/js/isotope.js',
        array('jquery'),
        _S_VERSION,
        true
    );

    wp_enqueue_script(
        'accordions',
        get_template_directory_uri() . '/assets/js/accordions.js',
        array('jquery'),
        _S_VERSION,
        true
    );

    wp_enqueue_script(
        'custom',
        get_template_directory_uri() . '/assets/js/custom.js',
        array('jquery'),
        _S_VERSION,
        true
    );
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );