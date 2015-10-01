<?php

$base = dirname( dirname( __DIR__ ) );

/*
 * app aliases
 */

Yii::setAlias( 'console', "{$base}/console" );
Yii::setAlias( 'shared', "{$base}/shared" );
Yii::setAlias( 'front', "{$base}/www" );

/*
 * modules aliases
 */

Yii::setAlias( 'scaffold', '@shared/modules/scaffold' );