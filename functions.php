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

//for title
add_theme_support('title-tag');





// ডোমেইন চেক (.edu.bd ছাড়া গ্রহণ করবে না)
add_filter('wpcf7_validate_text*', 'validate_school_domain', 20, 2);
function validate_school_domain($result, $tag) {
    if ($tag->name == 'school-domain') {
        $value = isset($_POST['school-domain']) ? sanitize_text_field($_POST['school-domain']) : '';
        if (!preg_match('/\.edu\.bd$/', $value)) {
            $result->invalidate($tag, "শুধুমাত্র .edu.bd ডোমেইন গ্রহণযোগ্য।");
        }
    }
    return $result;
}



// ইউনিক ইমেইল চেক
add_filter('wpcf7_validate_email*', 'validate_unique_school_email', 20, 2);
function validate_unique_school_email($result, $tag) {
    if ($tag->name == 'school-email') {
        $email = isset($_POST['school-email']) ? sanitize_email($_POST['school-email']) : '';

        // Flamingo দিয়ে আগের এন্ট্রি খুঁজবে
        global $wpdb;
        $exists = $wpdb->get_var(
            $wpdb->prepare("SELECT meta_value FROM {$wpdb->prefix}postmeta WHERE meta_key='_field_school-email' AND meta_value=%s", $email)
        );

        if ($exists) {
            $result->invalidate($tag, "এই ইমেইল দিয়ে আগে ডাউনলোড করা হয়েছে। অন্য ইমেইল ব্যবহার করুন।");
        }
    }
    return $result;
}


require_once get_template_directory() . '/includes/section-1-ads.php';