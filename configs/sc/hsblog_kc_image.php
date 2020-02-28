<?php
return [
    'hsblog_kc_image' => [
        'name'     => 'Image',
        'icon'     => 'sl-paper-plane',
        'css_box'  => true,
        'category' => HSBLOG_SC_CATEGORY,
        'params'   => [
            'general' => [
                [
                    'type'  => 'attach_image_url',
                    'name'  => 'image',
                    'label' => 'Image'
                ],
                [
                    'type'  => 'text',
                    'name'  => 'translate_y',
                    'label' => 'TranslateY(% or px)',
                ],
            ]
        ]
    ]
];
