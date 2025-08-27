<?php

//for title
add_theme_support('title-tag');

// my-portfolio-theme-css-js
require_once get_template_directory() . '/includes/my-portfolio-theme-css-js.php';

// my-portfolio-theme-register-navbar
require_once get_template_directory() . '/includes/my-portfolio-theme-register-navbar.php';

// add-classes-on-main-menu-ul-li-a
require_once get_template_directory() . '/includes/add-classes-on-main-menu-ul-li-a.php';

// add-classes-on-main-menu-ul-li-a
require_once get_template_directory() . '/includes/section-1-ads.php';

// add-classes-on-main-menu-ul-li-a
require_once get_template_directory() . '/includes/advertisements.php';

// customizer-student
// require_once get_template_directory() . '/includes/customizer-student.php';

function customizer_function_name($wp_customize)
{
    $wp_customize->add_section('advertisement_upload', array(
        'title'         =>  __('Upload image', 'my-portfolio-theme'),
        'description'   =>  '',
        'priority'      =>  120
    ));
    $wp_customize->add_setting('advertisement_upload_setting', array(
        'default'       =>  'xyz',
        'capability'    =>  'edit_theme_options',
        'type'          =>  'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'advertisement_upload_setting',
        array(
            'label'    => __('Upload Advertisement Image', 'my-portfolio-theme'),
            'section'  => 'advertisement_upload',
            'settings' => 'advertisement_upload_setting',
        )
    ));
}
add_action('customize_register', 'customizer_function_name');
