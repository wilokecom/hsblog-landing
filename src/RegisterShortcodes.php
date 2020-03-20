<?php

namespace HSBlogLanding;

/**
 * Class RegisterShortcodes
 * @package HSBlogWidgets
 */
class RegisterShortcodes
{
    private $aSc = [];
    
    public function __construct()
    {
        add_action('init', [$this, 'registerShortcodes'], 99);
    }
    
    /**
     * @return array
     */
    protected function getConfigurations()
    {
        foreach (glob(HSBLOG_LANDING_DIR.'configs/sc/*.php') as $filename) {
            $aConfig   = include $filename;
            $this->aSc = array_merge($this->aSc, $aConfig);
        }
        
        return $this->aSc;
    }
    
    public function registerShortcodes()
    {
        if (function_exists('kc_add_map')) {
            global $kc;
            
            $aConfiguration = $this->getConfigurations();
            foreach ($aConfiguration as $key => $aScItem) {
                if (isset($aScItem['general'])) {
                    $aScItem['general'][] = [
                        'name'        => 'extra_class',
                        'label'       => 'Extra Class',
                        'type'        => 'text',
                        'admin_label' => true
                    ];
                }
                
                if (!isset($aScItem['styling'])) {
                    $aScItem['styling'] = [
                        [
                            'name' => 'css_custom',
                            'type' => 'css'
                        ]
                    ];
                }
                
                $aConfiguration[$key] = $aScItem;
            }
            
            $kc->add_map($aConfiguration);
        }
    }
}
