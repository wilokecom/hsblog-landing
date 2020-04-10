<?php
return [
    'hsblog_kc_heading' => [
        'name'     => 'Heading',
        'icon'     => 'sl-paper-plane',
        'css_box'  => true,
        'category' => HSBLOG_SC_CATEGORY,
        'params'   => [
            'general' => [
                [
                    'type'  => 'text',
                    'name'  => 'heading',
                    'label' => 'Heading'
                ],
                [
                    'type'  => 'text',
                    'name'  => 'sup_heading',
                    'label' => 'Sup Heading'
                ],
                [
                    'type'  => 'text',
                    'name'  => 'description',
                    'label' => 'Description'
                ],
                [
                    'type'  => 'text',
                    'name'  => 'extra_class',
                    'label' => 'Extra Class',
                    'value' => ''
                ],
                [
                    'type'  => 'text',
                    'name'  => 'heading_class',
                    'label' => 'Heading Class',
                    'value' => ''
                ],
                [
                    'type'    => 'select',
                    'name'    => 'alignment',
                    'label'   => 'Alignment',
                    'value'   => 'center',
                    'options' => [
                        'center' => 'Center',
                        'left'   => 'Left',
                        'right'  => 'Right'
                    ]
                ],
                [
                    'type'  => 'colorpicker',
                    'name'  => 'heading_color',
                    'label' => 'Heading Color',
                    'value' => 'rgba(0, 0, 0, 0.8)'
                ],
                [
                    'type'  => 'colorpicker',
                    'name'  => 'sup_heading_color',
                    'label' => 'Sup Heading Color',
                    'value' => '#9F9FFF'
                ],
                [
                    'type'  => 'colorpicker',
                    'name'  => 'divide_color',
                    'label' => 'Divide Color',
                    'value' => '#FF9FEC'
                ]
            ]
        ]
    ]
];
