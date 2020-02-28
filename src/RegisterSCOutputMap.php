<?php

namespace HSBlogLanding;

/**
 * Class RegisterSCOutputMap
 * @package HSBlogWidgets
 */
class RegisterSCOutputMap
{
    public function __construct()
    {
        add_action('init', [$this, 'registerPath'], 99);
    }
    
    /**
     * @return bool
     */
    public function registerPath()
    {
        global $kc;
        if (!function_exists('kc_add_map')) {
            return false;
        }
        $kc->set_template_path(HSBLOG_LANDING_DIR.'views/');
    }
}
