<?php
return [
    'hsblog_kc_button' => [
        'name'     => 'Button',
        'icon'     => 'sl-paper-plane',
        'css_box'  => true,
        'category' => HSBLOG_SC_CATEGORY,
        'params'   => [
            'general' => [
                [
                    'type'  => 'text',
                    'name'  => 'text',
                    'label' => 'Text',
                    'value'   => 'Button',
                ],
                [
                    'type'  => 'text',
                    'name'  => 'link_url',
                    'label' => 'Url',
                    'value'   => '#',
                ],
                [
                    'type'  => 'text',
                    'name'  => 'span_class',
                    'label' => 'Text class'
                ],
                [
                    'type'  => 'text',
                    'name'  => 'link_class',
                    'label' => 'Button class',
                    'value' => 'wil-btn  mt-80 wil-btn--white wil-btn--lg wil-btn--pill'
                ],
                [
                    'type'  => 'attach_image_url',
                    'name'  => 'icon_url',
                    'label' => 'Icon'
                ],
            ]
        ]
    ]
];
