<?php

$config = [

    'id' => 'api',
    'basePath' => dirname( __DIR__ ),
    'controllerNamespace' => 'api\\controllers',
    'defaultRoute' => 'default',
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
            'enableStrictParsing' => FALSE,
            'rules' => [
                [ 'class' => 'yii\rest\UrlRule', 'controller' => 'foo', 'pluralize' => FALSE ],
            ],
        ],

        /*
         * components/request
         */

        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],

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
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => [ 'error', 'warning' ],
                ],
            ],
        ],

    ],

    /*
     * modules
     */

    'modules' => [
        'common' => [
            'class' => 'common\Module',
        ],
        'v01' => [
            'class' => 'api\modules\v01\Module',
        ],
        'v02' => [
            'class' => 'api\modules\v02\Module',
        ],
    ],

];

return $config;
