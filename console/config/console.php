<?php

$config = [

    'id' => 'console',
    'basePath' => dirname( __DIR__ ),
    'controllerNamespace' => 'console\\controllers',
    'bootstrap' => [ 'log' ],

    /*
     * components
     */

    'components' => [

        /*
         * components/cache
         */

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        /*
         * components/log
         */

        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => [ 'error', 'warning' ],
                ],
            ],
        ],
        
    ],

];

return $config;
