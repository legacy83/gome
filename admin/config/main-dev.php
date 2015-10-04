<?php

$config = [ ];

if ( !YII_ENV_TEST ) {
    $config[ 'bootstrap' ][] = 'debug';
    $config[ 'modules' ][ 'debug' ] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => [ '192.168.*' ],
    ];
}

return $config;