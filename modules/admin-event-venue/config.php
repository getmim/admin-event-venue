<?php

return [
    '__name' => 'admin-event-venue',
    '__version' => '0.0.3',
    '__git' => 'git@github.com:getmim/admin-event-venue.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-event-venue' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'admin' => NULL
            ],
            [
                'admin-event' => NULL
            ],
            [
                'admin-venue' => NULL
            ],
            [
                'lib-form' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'event-venue' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.event.edit' => [
                'organizer' => [
                    'label' => 'Organizer',
                    'type' => 'select',
                    'sl-filter' => [
                        'route' => 'adminObjectFilter',
                        'params' => [],
                        'query' => [
                            'type' => 'venue'
                        ]
                    ],
                    'rules' => [
                        'exists' => [
                            'model' => 'Venue\\Model\\Venue',
                            'field' => 'id'
                        ]
                    ]
                ]
            ]
        ]
    ]
];