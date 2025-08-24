<?php
function newsportal_ads_customizer( $wp_customize ) {

    // Main Panel
    $wp_customize->add_panel( 'ads_panel', array(
        'title'       => __( 'Advertisements', 'newsportal' ),
        'description' => __( 'Manage advertisements by section', 'newsportal' ),
        'priority'    => 160,
    ));

    // Loop দিয়ে Section 1–4 বানানো
    for ( $s = 1; $s <= 4; $s++ ) {

        $section_id = "ads_section_$s";

        // Subsection inside Panel
        $wp_customize->add_section( $section_id, array(
            'title'    => sprintf( __( 'Section %d', 'newsportal' ), $s ),
            'panel'    => 'ads_panel',
            'priority' => 10 + $s,
        ));

        // Dropdown → কতগুলো বিজ্ঞাপন
        $wp_customize->add_setting( "{$section_id}_count", array(
            'default' => 1,
            'sanitize_callback' => 'absint',
        ));

        $wp_customize->add_control( "{$section_id}_count", array(
            'label'   => __( 'Number of Ads', 'newsportal' ),
            'section' => $section_id,
            'type'    => 'select',
            'choices' => array(
                1 => '1',
                2 => '2',
                3 => '3',
                4 => '4',
            ),
        ));

        // সর্বোচ্চ ৪টা বিজ্ঞাপন ফিল্ড
        for ( $i = 1; $i <= 4; $i++ ) {

            // Adsense Code
            $wp_customize->add_setting( "{$section_id}_adsense_$i", array(
                'default' => '',
                'sanitize_callback' => 'wp_kses_post',
            ));
            $wp_customize->add_control( "{$section_id}_adsense_$i", array(
                'label'   => sprintf( __( 'Ad %d: Adsense Code', 'newsportal' ), $i ),
                'section' => $section_id,
                'type'    => 'textarea',
                'active_callback' => function() use ( $section_id, $i ) {
                    return ( get_theme_mod( "{$section_id}_count", 1 ) >= $i );
                }
            ));

            // Image Upload
            $wp_customize->add_setting( "{$section_id}_image_$i", array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            ));
            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "{$section_id}_image_$i", array(
                'label'   => sprintf( __( 'Ad %d: Upload Image', 'newsportal' ), $i ),
                'section' => $section_id,
                'active_callback' => function() use ( $section_id, $i ) {
                    return ( get_theme_mod( "{$section_id}_count", 1 ) >= $i );
                }
            )));

            // Link
            $wp_customize->add_setting( "{$section_id}_link_$i", array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            ));
            $wp_customize->add_control( "{$section_id}_link_$i", array(
                'label'   => sprintf( __( 'Ad %d: Link', 'newsportal' ), $i ),
                'section' => $section_id,
                'type'    => 'url',
                'active_callback' => function() use ( $section_id, $i ) {
                    return ( get_theme_mod( "{$section_id}_count", 1 ) >= $i );
                }
            ));
        }
    }
}
add_action( 'customize_register', 'newsportal_ads_customizer' );