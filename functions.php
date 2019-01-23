<?php

function portfolio_style(){

    wp_enqueue_style('portfolio_default_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'portfolio_style');

?>

