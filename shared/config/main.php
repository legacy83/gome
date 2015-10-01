<?php

return [

    'vendorPath' => dirname( __DIR__ ) . '/vendor',

    /*
     * components
     */

    'components' => [

        /*
         * components/db
         */

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=gome',
            'username' => 'gome',
            'password' => 'gome@secret',
            'charset' => 'utf8',
        ],

    ],

    /*
     * params
     */

    'params' => [ ],

];