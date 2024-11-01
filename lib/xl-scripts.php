<?php

function xl_popup_scripts() {

    if (!is_admin()) {
        wp_enqueue_script('xl_custom_js', plugins_url('/../assets/js/custom.js', __FILE__), array('jquery'), 1.0, true);
        wp_enqueue_script('xl_cookie_js', plugins_url('/../vendors/js.cookie.js', __FILE__), array(), 1.0, true);
        wp_enqueue_style('xl_custom_css', plugins_url('/../assets/css/custom.css', __FILE__));
    }
}

add_action('wp_enqueue_scripts', 'xl_popup_scripts');

