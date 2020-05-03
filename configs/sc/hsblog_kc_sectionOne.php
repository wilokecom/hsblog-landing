<?php
return [
    'hsblog_kc_sectionOne' => [
        'name'     => 'SectionOne',
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
                    'name'  => 'video_url',
                    'label' => 'Video url',
                ],
                [
                    'type'  => 'text',
                    'name'  => 'title',
                    'label' => 'Title',
                ],
                [
                    'type'  => 'text',
                    'name'  => 'sub_title',
                    'label' => 'Sub title',
                ],  
                [
                    'type'  => 'text',
                    'name'  => 'content',
                    'label' => 'Content',
                ],  
                [
                    'type'  => 'text',
                    'name'  => 'img_pos',
                    'label' => 'Image Position',
                ],  
                [
                    'type'  => 'text',
                    'name'  => 'btn_text',
                    'label' => 'Button text',
                ],  
                [
                    'type'  => 'text',
                    'name'  => 'btn_link',
                    'label' => 'Button link',
                ],  
                [
                    'type'  => 'attach_image_url',
                    'name'  => 'icon_play',
                    'label' => 'Icon play'
                ],

            ]
        ]
    ]
];
