<?php

/*
 * Aliases
 */

$base = dirname( dirname( __DIR__ ) );
Yii::setAlias( 'console', "{$base}/console" );
Yii::setAlias( 'www', "{$base}/www" );

/*
 * Shared Aliases
 */

Yii::setAlias( 'shared', "{$base}/shared" );
Yii::setAlias( 'scaffold', '@shared/modules/scaffold' );