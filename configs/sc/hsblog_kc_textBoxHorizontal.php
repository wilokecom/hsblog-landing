<?php
return [
    'hsblog_kc_textBoxHorizontal' => [
        'name'     => 'TextBoxHorizontal',
        'icon'     => 'sl-paper-plane',
        'css_box'  => true,
        'category' => HSBLOG_SC_CATEGORY,
        'params'   => [
            'general' => [
                [
                    'type'  => 'attach_image_url',
                    'name'  => 'icon_url',
                    'label' => 'Icon'
                ],
                [
                    'type'  => 'text',
                    'name'  => 'icon_text',
                    'label' => 'Icon Text'
                ],
             
                [
                    'type'  => 'text',
                    'name'  => 'title',
                    'label' => 'Title'
                ],
                [
                    'type'  => 'text',
                    'name'  => 'icon_class',
                    'label' => 'Icon Class',
                ],
                [
                    'type'  => 'text',
                    'name'  => 'desc',
                    'label' => 'Descriptions'
                ],
                [
                    'type'  => 'text',
                    'name'  => 'container_class',
                    'label' => 'Container Class',
                ],
                [
                    'type'  => 'color',
                    'name'  => 'color',
                    'label' => 'Color',
                ],
            ]
        ]
    ]
];
