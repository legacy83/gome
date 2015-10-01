<?php

defined( 'YII_DEBUG' ) or define( 'YII_DEBUG', TRUE );
defined( 'YII_ENV' ) or define( 'YII_ENV', 'dev' );

require( __DIR__ . '/../../shared/vendor/autoload.php' );
require( __DIR__ . '/../../shared/vendor/yiisoft/yii2/Yii.php' );
require( __DIR__ . '/../../shared/config/bootstrap.php' );

$config = yii\helpers\ArrayHelper::merge(
    require( __DIR__ . '/../../shared/config/main.php' ),
    require( __DIR__ . '/../config/main.php' )
);

( new yii\web\Application( $config ) )->run();