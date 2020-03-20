<?php

namespace HSBlogLanding\Helpers;

/**
 * Class SCHelper
 * @package HSBlogWidgets\Helpers
 */
class SCHelper
{
    /**
     * @param $aRawInput
     *
     * @return array|bool
     */
    public static function getAutoComplete($aRawInput)
    {
        if (empty($aRawInput)) {
            return false;
        }
        
        $aCategories = [];
        $aParse      = explode(',', $aRawInput);
        foreach ($aParse as $rawCategory) {
            $aParseCategory = explode(':', $rawCategory);
            $aCategories[]  = $aParseCategory[0];
        }
        
        return $aCategories;
    }
}
