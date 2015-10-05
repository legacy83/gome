<?php

/* @var $this yii\web\View */
/* @var $searchCriteria foo\models\FooCriteria */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '@foo';
$this->params[ 'breadcrumbs' ][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">

        <div class="page-header">
            <h1><?= \yii\helpers\Html::encode( $this->title ); ?></h1>
        </div>

        <?= \yii\grid\GridView::widget( [
            'dataProvider' => $dataProvider,
            'filterModel' => $searchCriteria,
            'columns' => [
                'id',
                'one',
                'two',
                'three',
                [ 'class' => 'yii\grid\ActionColumn' ],
            ],
        ] ); ?>

        <div class="pull-right">
            <p><?= \yii\helpers\Html::a( 'New @foo', [ 'create' ], [ 'class' => 'btn btn-primary' ] ) ?></p>
        </div>

    </div>
    <!-- .col-md-12 -->
</div><!-- .row -->