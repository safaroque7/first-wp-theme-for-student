<?php

function themename_customize_register($wp_customize) {

    // ========== SECTION 1: Color Scheme ==========
    $wp_customize->add_section('themename_color_scheme', array(
        'title'       => __('Color Scheme', 'themename'),
        'priority'    => 120,
    ));

    // === Text Input ===
    $wp_customize->add_setting('themename_theme_options[text_test]', array(
        'default'    => 'value_xyz',
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control('themename_text_test', array(
        'label'    => __('Text Test', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[text_test]',
        'type'     => 'text',
    ));

    // === Radio Input ===
    $wp_customize->add_setting('themename_theme_options[color_scheme]', array(
        'default'    => 'value2',
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control('themename_color_scheme', array(
        'label'    => __('Color Scheme', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[color_scheme]',
        'type'     => 'radio',
        'choices'  => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));

    // === Checkbox ===
    $wp_customize->add_setting('themename_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control('display_header_text', array(
        'label'    => __('Display Header Text', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[checkbox_test]',
        'type'     => 'checkbox',
    ));

    // === Select Box ===
    $wp_customize->add_setting('themename_theme_options[header_select]', array(
        'default'    => 'value2',
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control('example_select_box', array(
        'label'    => __('Select Something:', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[header_select]',
        'type'     => 'select',
        'choices'  => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));

    // === Image Upload ===
    $wp_customize->add_setting('themename_theme_options[image_upload_test]', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => __('Image Upload Test', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[image_upload_test]',
    )));

    // === File Upload ===
    $wp_customize->add_setting('themename_theme_options[upload_test]', array(
        'default'    => '',
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'upload_test', array(
        'label'    => __('Upload Test', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[upload_test]',
    )));

    // === Color Picker ===
    $wp_customize->add_setting('themename_theme_options[link_color]', array(
        'default'           => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'              => 'option',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[link_color]',
    )));

    // === Page Dropdown ===
    $wp_customize->add_setting('themename_theme_options[page_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control('themename_page_test', array(
        'label'    => __('Page Test', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'themename_theme_options[page_test]',
        'type'     => 'dropdown-pages',
    ));

    // ========== SECTION 2: Home Slider ==========
    $wp_customize->add_section('_s_f_home_slider', array(
        'title'    => __('Home Slider', 'themename'),
        'priority' => 130,
    ));

    // === Category Dropdown ===
    $categories = get_categories();
    $cats = array();
    $default = '';

    if (!empty($categories)) {
        $default = $categories[0]->slug;
        foreach ($categories as $category) {
            $cats[$category->slug] = $category->name;
        }
    }

    $wp_customize->add_setting('_s_f_slide_cat', array(
        'default'    => $default,
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control('cat_select_box', array(
        'label'    => __('Select Category:', 'themename'),
        'section'  => '_s_f_home_slider',
        'settings' => '_s_f_slide_cat',
        'type'     => 'select',
        'choices'  => $cats,
    ));
}

add_action('customize_register', 'themename_customize_register');