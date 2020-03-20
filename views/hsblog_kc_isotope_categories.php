<?php

use HSBlogLanding\Helpers\SCHelper;

$atts = shortcode_atts(
    [
        'group'   => '',
        'site_id' => '',
        '_id'     => ''
    ],
    $atts
);

if (empty($atts['group'])) {
    return false;
}

if (empty($atts['group'])) {
    return false;
}

$currentBlogID = is_multisite() ? get_current_blog_id() : 0;
$aNavigations  = [];
$aItems        = [];

foreach ($atts['group'] as $oGroup) {
    $isMultiSite = false;
    if ($isMultiSite || (isset($oGroup->site_id) && !empty($oGroup->site_id))) {
        switch_to_blog($oGroup->site_id);
        $isMultiSite = true;
    }
    
    $catId = 0;
    if (isset($oGroup->manually_category_id) && !empty($oGroup->manually_category_id)) {
        $aCatId = [abs($oGroup->manually_category_id)];
    } else {
        $aCatId = SCHelper::getAutoComplete($oGroup->category_id);
    }
    
    $aPages = get_posts(
        [
            'category__in' => $aCatId,
            'post_type'    => 'page'
        ]
    );
    $oTerm  = get_term($aCatId[0]);
    
    if (!empty($aPages) && !is_wp_error($aPages)) {
        $aItems[$oTerm->slug] = [
            'items'   => $aPages,
            'site_id' => isset($oGroup->site_id) ? $oGroup->site_id : 0
        ];
    
        $aNavigations[$oTerm->slug] = $oTerm->name; 
    }
    
    if ($isMultiSite) {
        switch_to_blog($currentBlogID);
    }
}

if (!empty($aNavigations)) :
    $order = 1;

    ?>
    <div class="wil-isotope-wrapper">
        <div class="wil-sort button-group">
            <?php foreach ($aNavigations as $filter => $name) : ?>
                <button class="wil-btn wil-btn--white wil-btn--round wil-btn--md wil-btn--bold button <?php echo $order === 1 ? 'is-checked' : ''; ?>"
                        data-filter="<?php echo esc_attr('.'.$filter); ?>">
                    <?php echo esc_html($name); ?>
                </button>
                <?php $order++; endforeach; ?>
        
        </div>
        
        <div class="wil-grid grid">
            <?php foreach ($aItems as $taxonomy => $aPages) : ?>
                <?php foreach ($aPages['items'] as $pageOrder => $oPage) :
                ?>
                    <?php if (!empty($aPages['site_id'])) {
                        switch_to_blog($aPages['site_id']);
                    } ?>
                    <div class="demo grid-item <?php echo esc_attr($taxonomy); ?>">
                        <a href="<?php echo esc_url(get_permalink($oPage->ID)); ?>">
                            <?php echo get_the_post_thumbnail($oPage->ID, 'large'); ?>
                            <div class="link  link--white link--bold link--cabin pt-20">
                                <h2><?php echo get_the_title($oPage->ID); ?></h2>
                                <?php if (!empty($tagLine = get_post_meta($oPage->ID, 'tag_line'))) : ?>
                                    <p class="tagline"><?php echo $tagLine ?></p>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                    <?php if (!empty($aPages['site_id'])) {
                        switch_to_blog($currentBlogID);
                    } ?>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php
endif;
