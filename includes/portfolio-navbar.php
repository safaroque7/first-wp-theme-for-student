<?php
function my_portfolio_navbar(){
    register_nav_menus(array(
        'primary-menu'          =>  __('Primary Menu', 'myPortfolioTheme'),
        'company-menu'          =>  __('Company Menu', 'myPortfolioTheme'),
        'recent-projects-menu'  =>  __('Recent Projects Menu', 'myPortfolioTheme'),
        'get-in-touch-menu'     =>  __('Get In Touch Menu', 'myPortfolioTheme'),
    ));
}
add_action('init', 'my_portfolio_navbar');