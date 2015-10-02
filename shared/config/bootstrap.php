<?php

$base = dirname( dirname( __DIR__ ) );
Yii::setAlias( 'shared', "{$base}/shared" );

/*
 * app aliases
 */

Yii::setAlias( 'front', "{$base}/www" );
Yii::setAlias( 'back', "{$base}/admin" );
Yii::setAlias( 'console', "{$base}/console" );

/*
 * module aliases
 */

Yii::setAlias( 'scaffold', '@shared/modules/scaffold' );