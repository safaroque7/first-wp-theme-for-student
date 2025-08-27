<?php
function advertisement_customizer($wp_customize)
{
    // Main Panel
    $wp_customize->add_panel('ads_panel', array(
        'title'       => __('Advertisements', 'newsportal'),
        'description' => __('Manage advertisements by section', 'newsportal'),
        'priority'    => 161,
    ));

    // Header Ads Section
    $wp_customize->add_section('header_ads_section', array(
        'title'    => __('Header Ads', 'newsportal'),
        'panel'    => 'ads_panel',
        'priority' => 10,
    ));

    $wp_customize->add_setting('header_ad_code', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('header_ad_code', array(
        'label'    => __('Header Ad Code', 'newsportal'),
        'section'  => 'header_ads_section',
        'type'     => 'textarea',
    ));

    // Sidebar Ads Section
    $wp_customize->add_section('sidebar_ads_section', array(
        'title'    => __('Sidebar Ads', 'newsportal'),
        'panel'    => 'ads_panel',
        'priority' => 20,
    ));

    $wp_customize->add_setting('sidebar_ad_code', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('sidebar_ad_code', array(
        'label'    => __('Sidebar Ad Code', 'newsportal'),
        'section'  => 'sidebar_ads_section',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'advertisement_customizer');
