<?php
return [
    'hsblog_kc_customer_review' => [
        'name'     => 'Customer Review',
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
                    'type'  => 'text',
                    'name'  => 'customer',
                    'label' => 'Customer Name',
                ],
                [
                    'type'  => 'text',
                    'name'  => 'support_name',
                    'label' => 'Support Name'
                ],
                [
                    'type'  => 'attach_image_url',
                    'name'  => 'quote_left_img',
                    'label' => 'Quote Left Img'
                ],
                [
                    'type'  => 'attach_image_url',
                    'name'  => 'quote_right_img',
                    'label' => 'Quote Right Img'
                ],
                [
                    'type'  => 'attach_image_url',
                    'name'  => 'icon',
                    'label' => 'Icon'
                ],
               
            ]
        ]
    ]
];
