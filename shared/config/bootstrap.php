<?php

$base = dirname( dirname( __DIR__ ) );
Yii::setAlias( 'shared', "{$base}/shared" );

/*
 * app aliases
 */

Yii::setAlias( 'console', "{$base}/console" );
Yii::setAlias( 'front', "{$base}/www" );

/*
 * module aliases
 */

Yii::setAlias( 'scaffold', '@shared/modules/scaffold' );