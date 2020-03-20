<?php

namespace HSBlogLanding;

/**
 * Class EnqueueScripts
 * @package HSBlogWidgets
 */
class EnqueueScripts
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'register']);
        add_filter('hsblog-childtheme/filter/enqueue-jquery', [$this, 'includeJQuery'], 99);
    }
    
    /**
     * @param $status
     *
     * @return bool
     */
    public function includeJQuery($status)
    {
        if (is_page_template('templates/hsblog-landing.php')) {
            return true;
        }
        
        return $status;
    }
    
    public function register()
    {
        if (is_page_template('templates/hsblog-landing.php')) {
            wp_enqueue_script('jquery-isotope', HSBLOG_LANDING_JS_URL.'isotope.pkgd.min.js', ['jquery'], HSBLOG_LANDING_VERSION, true);
            wp_enqueue_script('hsbloglanding-scripts', HSBLOG_LANDING_JS_URL.'scripts.js', ['jquery'], HSBLOG_LANDING_VERSION, true);
            wp_enqueue_style('hsbloglanding-style', HSBLOG_LANDING_CSS_URL.'styles.css', [], HSBLOG_LANDING_VERSION);
            wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', [], HSBLOG_LANDING_VERSION);
        }
    }
}
