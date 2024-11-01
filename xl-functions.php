<?php

/**
 * Plugin Name: XL popup
 * Plugin URI: http://www.xltheme.com/product/xl-popup/
 * Description: This is a popup plugin.
 * Author: Khandaker Ikrama
 * Author URI: http://www.ikrama.info/
 * Text Domain: xl
 * Version: 1.1
 */

//Load Scripts
require_once dirname( __FILE__ ) . '/lib/xl-scripts.php';

//Load Markup
function xl_popup()
{
    require_once dirname(__FILE__) . '/public/view.php';
}
add_action('wp_footer', 'xl_popup');

//Settings
require_once dirname( __FILE__ ) . '/vendors/admin/class.settings-api.php';
require_once dirname( __FILE__ ) . '/vendors/admin/xl-settings.php';
new xl_WeDevs_Settings_API_option();