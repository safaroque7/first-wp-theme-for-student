<?php
function my_portfolio_theme_register_navbar()
{
    // register_nav_menus
    register_nav_menus(array(
        'primary-menu'          => __('Primary Menu', 'my-portfolio-theme'),
        'company-menu'          => __('Company Menu', 'my-portfolio-theme'),
        'recent-projects-menu'  => __('Recent Projects Menu', 'my-portfolio-theme'),
        'get-in-touch-menu'     => __('Get In Touch Menu', 'my-portfolio-theme'),
    ));
}
add_action('init', 'my_portfolio_theme_register_navbar');
