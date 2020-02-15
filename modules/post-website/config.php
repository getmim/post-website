<?php

return [
    '__name' => 'post-website',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/post-website.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/post-website' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'admin' => NULL
            ],
            [
                'post' => NULL
            ],
            [
                'lib-formatter' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'PostWebsite\\Model' => [
                'type' => 'file',
                'base' => 'modules/post-website/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'post' => [
                'website' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'PostWebsite\\Model\\PostWebsite',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'post-website'
                ]
            ],
            'post-website' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];