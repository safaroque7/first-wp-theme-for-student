<?php

function my_portfolio_css_and_js()
{
    wp_register_style('bootstrap-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css', array(), '5.3.7', 'all');
    wp_register_style('bootstrap-icons-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css', array(), '1.12.1.7', 'all');
    wp_register_style('swiper-bundle-min-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.12.1.7', 'all');

    wp_enqueue_style('bootstrap-min-css');
    wp_enqueue_style('bootstrap-icons-min-css');
    wp_enqueue_style('swiper-bundle-min-css');
    wp_enqueue_style('portfolio-stylesheet', get_stylesheet_uri());

    wp_enqueue_script('bootstrap-bundle-min-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js', array(), '5.3.7', true);
    wp_enqueue_script('swiper-bundle-min-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11', true);
}

add_action('wp_enqueue_scripts', 'my_portfolio_css_and_js');