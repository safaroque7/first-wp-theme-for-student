<?php

/**
 * 
 * 
 * 
 * add_classes_on_ul_li 
 * 
 * 
 * 
 * 
 */
function add_classes_on_ul_li_and_a($classes, $item, $args){
    if($args->theme_location === 'primary-menu'){
        $classes[] = 'nav-item';
    }
    return $classes;

}
add_filter('nav_menu_css_class', 'add_classes_on_ul_li_and_a', 10, 3);



/**
 * 
 * 
 * add_classes_on_li_a
 * 
 * 
 */
function add_classes_on_li_a($atts, $item, $args){
    if($args->theme_location === 'primary-menu'){
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_classes_on_li_a', 10, 3);