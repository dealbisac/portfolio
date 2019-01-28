<?php

function portfolio_style(){

    wp_enqueue_style('portfolio_default_style', get_stylesheet_uri());

    #Boostrap_Files
    wp_enqueue_style('bootstrap_style', get_theme_file_uri('/css/bootstrap.min.css'));
    wp_enqueue_style('fontawesome_style', get_theme_file_uri('/css/font-awesome.min.css'));
    wp_enqueue_style('animate_style', get_theme_file_uri('/css/animate.css'));
    wp_enqueue_style('magnific_popup_style', get_theme_file_uri('/css/magnific-popup.css'));

    #Font Files
    wp_enqueue_style('fontawesome', get_theme_file_uri('/fonts/FontAwesome.otf'));

    #JS Files
    wp_enqueue_script('bootstrap_min_js', get_theme_file_uri('/js/bootstrap.min.js'), array(), 1.2, 'all');
    wp_enqueue_script('custom_js', get_theme_file_uri('/js/custom.js'), array(), false, 'all');
    wp_enqueue_script('jquery_js', get_theme_file_uri('/js/jquery.js'), array(), false, 'all');
    wp_enqueue_script('jquery_magnific-popup_js', get_theme_file_uri('/js/owl.carousel.min.js'), array(), false, 'all');
    wp_enqueue_script('jquery.parallax_js', get_theme_file_uri('/js/owl.carousel.min.js'), array(), false, 'all');
    wp_enqueue_script('owl_magnific-popup-options_js', get_theme_file_uri('/js/owl.carousel.min.js'), array(), false, 'all');
    wp_enqueue_script('smoothscroll_js', get_theme_file_uri('/js/smoothscroll.js'), array(), false, 'all');
    wp_enqueue_script('wow.min_js', get_theme_file_uri('/js/owl.carousel.min.js'), array(), false, 'all');
}

add_action('wp_enqueue_scripts', 'portfolio_style');

?>

