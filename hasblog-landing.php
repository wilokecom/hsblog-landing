<?php
/*
 * Plugin Name: HSBlog Landing
 * Plugin URI: https://wiloke.com
 * Author: wiloke
 * Author URI: https://wiloke.com
 * Description: HSBblog Landing
 *
 */

require_once plugin_dir_path(__FILE__).'vendor/autoload.php';
define('HSBLOG_LANDING_VERSION', '1.0');
define('HSBLOG_LANDING_DIR', plugin_dir_path(__FILE__));
define('HSBLOG_LANDING_URL', plugin_dir_url(__FILE__));
define('HSBLOG_LANDING_JS_URL', plugin_dir_url(__FILE__).'assets/js/');
define('HSBLOG_LANDING_CSS_URL', plugin_dir_url(__FILE__).'assets/css/');
define('HSBLOG_SC_CATEGORY', 'HSBlog');

/**
 * @return bool
 */
function hsblogLandingTemplatePath()
{
    global $kc;
    if (!function_exists('kc_add_map')) {
        return false;
    }
    
    $kc->set_template_path(HSBLOG_LANDING_DIR.'views/');
}

add_action('init', 'hsblogLandingTemplatePath', 99);

//if (is_admin()) {
    new \HSBlogLanding\RegisterShortcodes();
//} else {
    new \HSBlogLanding\EnqueueScripts();
//}
new \HSBlogLanding\RegisterSCOutputMap();
