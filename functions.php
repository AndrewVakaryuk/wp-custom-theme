<?php

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('my_theme_setup')) :
    function my_theme_setup()
    {
      load_theme_textdomain('my_theme', get_template_directory() . '/languages');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support(
          'html5',
          array(
              'search-form',
              'comment-form',
              'comment-list',
              'video',
              'gallery',
              'caption',
              'style',
              'script',
          )
        );

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
    wp_enqueue_style('my_theme_style', get_template_directory_uri() . '/assets/css/main.min.css');

    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
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


function my_theme_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar-search', 'my_theme'),
            'id' => 'sidebar-search',
            'description' => esc_html__('Add widgets here.', 'my_theme'),
            'before_widget' => '<div class="col-lg-12"><div class="sidebar-item search">',
            'after_widget' => '</div></div>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Sidebar-recent', 'my_theme'),
            'id' => 'sidebar-recent',
            'description' => esc_html__('Add widgets here.', 'my_theme'),
            'before_widget' => '<div class="col-lg-12"><div class="sidebar-item recent-posts">',
            'after_widget' => '</div></div>',
            'before_title' => '<div class="sidebar-heading"><h2>',
            'after_title' => '</h2></div>'
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Sidebar-categories', 'my_theme'),
            'id' => 'sidebar-categories',
            'description' => esc_html__('Add widgets here.', 'my_theme'),
            'before_widget' => '<div class="col-lg-12"><div class="sidebar-item categories">',
            'after_widget' => '</div></div>',
            'before_title' => '<div class="sidebar-heading"><h2>',
            'after_title' => '</h2></div>'
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Sidebar-tags', 'my_theme'),
            'id' => 'sidebar-tags',
            'description' => esc_html__('Add widgets here.', 'my_theme'),
            'before_widget' => '<div class="col-lg-12"><div class="sidebar-item tags">',
            'after_widget' => '</div></div>',
            'before_title' => '<div class="sidebar-heading"><h2>',
            'after_title' => '</h2></div>'
        )
    );
}
add_action('widgets_init', 'my_theme_widgets_init');


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