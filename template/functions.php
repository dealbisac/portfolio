<?php

function pagetitle(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'pagetitle');


function portfolio_style(){
    
    wp_enqueue_style( 'portfolio-bootstrap-stylesheet', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style( 'portfolio-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), false, 'all' );
    wp_enqueue_style( 'portfolio-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), false, 'all' );
    wp_enqueue_style( 'portfolio-owl-carousel-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0.0',  'all' );

    wp_enqueue_style('portfolio_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'portfolio_style');



function include_jquery(){
    wp_deregister_script('jquery');

    wp_enqueue_script( 'jquery-scripts', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, 'all' );
    add_action('wp_enqueue_scripts', 'jquery-scripts');
}
add_action('wp_enqueue_scripts', 'include_jquery');


function loadjs(){
    wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, 'all' );
    wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/assets/js/custom.js', array(), false, 'all' );
    wp_enqueue_script( 'owl.carousel-scripts', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), false, 'all' );
    wp_enqueue_script( 'smoothscroll-scripts', get_template_directory_uri() . '/assets/js/smoothscroll.js', array(), false, 'all' );
}
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');
add_theme_support('widgets');

register_nav_menus(

    array(

        'top-menu' => __('Primary Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )



);

?> 