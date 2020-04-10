<?php
return [
    'hsblog_kc_demo' => [
        'name'     => 'Demo',
        'icon'     => 'sl-paper-plane',
        'css_box'  => true,
        'category' => HSBLOG_SC_CATEGORY,
        'params'   => [
            'general' => [
                [
                    'type'  => 'text',
                    'name'  => 'text',
                    'label' => 'Text',
                ],  
                [
                    'type'  => 'attach_image_url',
                    'name'  => 'image',
                    'label' => 'Image'
                ],
                [
                    'type'  => 'text',
                    'name'  => 'extra_class',
                    'label' => 'Extra Class',
                ],
            ]
        ]
    ]
];
