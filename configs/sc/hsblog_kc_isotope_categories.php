<?php
$aFields = [];
if (is_multisite()) {
    $aBlogIDs = get_sites();
    $aOptions[''] = '----';
    foreach ($aBlogIDs as $oBlog) {
        $aOptions[$oBlog->blog_id] = $oBlog->domain;
    }
    
    $aFields[] = [
        'type'    => 'select',
        'label'   => 'Specify site',
        'name'    => 'site_id',
        'options' => $aOptions
    ];
}

$aFields[] = [
    'type'        => 'autocomplete',
    'label'       => __('Autocomplete', 'KingComposer'),
    'name'        => 'category_id',
    'options'     => [
        'multiple' => false
    ],
    // You can remove 'options' to use default settings.
    'description' => ''
];

$aFields[] = [
    'type'        => 'text',
    'label'       => 'Enter in Category id',
    'name'        => 'manually_category_id',
    'options'     => [
        'multiple' => false
    ],
    // You can remove 'options' to use default settings.
    'description' => ''
];

return [
    'hsblog_kc_isotope_categories' => [
        'name'     => 'Isotope Categories',
        'icon'     => 'sl-paper-plane',
        'css_box'  => true,
        'category' => HSBLOG_SC_CATEGORY,
        'params'   => [
            'general' => [
                [
                    'type'   => 'group',
                    'label'  => 'Settings',
                    'name'   => 'group',
                    'params' => $aFields
                ]
            ]
        ]
    ]
];
