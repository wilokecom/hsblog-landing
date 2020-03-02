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
    }
    
    public function register()
    {
        if (is_page_template('templates/hsblog-landing.php')) {
            wp_enqueue_script('hsbloglanding-scripts', HSBLOG_LANDING_JS_URL . 'scripts.js', true, HSBLOG_LANDING_VERSION);
            wp_enqueue_style('hsbloglanding-style', HSBLOG_LANDING_CSS_URL . 'styles.css', false, HSBLOG_LANDING_VERSION);
            wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, HSBLOG_LANDING_VERSION);
        }
    }
}
