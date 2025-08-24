<?php

//for title
add_theme_support('title-tag');

<<<<<<< HEAD




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
=======
// my-portfolio-theme-css-js
include_once get_template_directory() . '/includes/my-portfolio-theme-css-js.php';

// my-portfolio-theme-register-navbar
include_once get_template_directory() . '/includes/my-portfolio-theme-register-navbar.php';

// add-classes-on-main-menu-ul-li-a
include_once get_template_directory() . '/includes/add-classes-on-main-menu-ul-li-a.php';
>>>>>>> 57334194322fcca3a97c7925d0edb561a7777432
