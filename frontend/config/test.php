<?php
return [
    'id' => 'app-frontend-tests',
    'components' => [
        'encrypt' => [
            'class' => 'frontend\components\Encrypt',
        ],
        'assetManager' => [
            'basePath' => __DIR__ . '/../web/assets',
        ],
        'urlManager' => [
            'showScriptName' => true,
        ],
        'request' => [
            'cookieValidationKey' => 'test',
        ],
    ],
];
