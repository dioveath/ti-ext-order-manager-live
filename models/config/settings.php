<?php

return [
    'form' => [
        'toolbar' => [
            'buttons' => [
                'back' => [
                    'label' => 'lang:admin::lang.button_icon_back',
                    'class' => 'btn btn-outline-secondary',
                    'href' => 'settings',
                ],
                'save' => [
                    'label' => 'lang:admin::lang.button_save',
                    'class' => 'btn btn-primary',
                    'data-request' => 'onSave',
                    'data-progress-indicator' => 'admin::lang.text_saving',
                ],
                'reset' => [
                    'label' => 'Reset',
                    'class' => 'btn btn-outline-secondary',
                    'data-request' => 'onReset',
                    'data-progress-indicator' => 'Reseting',
                ],
            ]
        ],
        'fields' => [
            'domain' => [
                'type' => 'text',
                'span' => 'left',
                'label' => 'Your current Domain',
                'default' => url(''),
            ],
            'is_live' => [
                'type' => 'radiotoggle',
                'default' => 'staging',
                'label' => 'Is this a live site?',
                'options' => [
                    'staging' => 'Staging',
                    'live' => 'Live',
                ],                
            ]
        ]
    ]
];

?>