<?php

namespace HSBlogLanding;

/**
 * Class ModifyAutoComplete
 * @package HSBlogLanding
 */
class ModifyAutoComplete
{
    public function __construct()
    {
        add_filter('kc_autocomplete_group[1][category_id]', [$this, 'queryCategories']);
        add_filter('kc_autocomplete_group[0][category_id]', [$this, 'queryCategories']);
    }
    
    /**
     * @param $aQuery
     *
     * @return bool
     */
    public function queryCategories($aQuery)
    {
        $aTerms = get_terms(['name__like' => $aQuery['s'], 'taxonomy' => 'category']);
        if (empty($aTerms) || is_wp_error($aTerms)) {
            return false;
        }
        
        $aResponse['__session'] = $aQuery['__session'];
        
        foreach ($aTerms as $oTerm) {
            $aResponse['category'][] = $oTerm->term_id.':'.$oTerm->name;
        }
        
        return $aResponse;
    }
}
