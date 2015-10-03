<?php

$config = [

    'id' => 'back',
    'basePath' => dirname( __DIR__ ),
    'controllerNamespace' => 'back\\controllers',
    'defaultRoute' => 'dashboard',
    'bootstrap' => [ 'log' ],

    /*
     * components
     */

    'components' => [

        /*
         * components/urlManager
         */

        'urlManager' => [
            'enablePrettyUrl' => TRUE,
            'showScriptName' => FALSE,
        ],

        /*
         * components/request
         */

        'request' => [

            /*
             * Insert a secret key in the following
             * This is required by cookie validation
             */

            'cookieValidationKey' => 'W8p?(G4k32p@S5M',

        ],

        /*
         * components/cache
         */

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        /*
         * components/errorHandler
         */

        'errorHandler' => [
            'errorAction' => 'admin/error',
        ],

        /*
         * components/log
         */

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
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
