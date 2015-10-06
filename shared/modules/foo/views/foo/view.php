<?php

/* @var $this yii\web\View */
/* @var $model foo\models\Foo */

$this->title = 'View @foo';
$this->params[ 'breadcrumbs' ][ ] = [ 'label' => '@foo', 'url' => [ 'index' ] ];
$this->params[ 'breadcrumbs' ][ ] = $this->title;
?>

<div class="page-header">
    <h1><?= \yii\helpers\Html::encode( $this->title ); ?></h1>
</div>

<div class="row">

    <div class="col-md-8">

        <?= \yii\widgets\DetailView::widget( [
            'model' => $model,
            'attributes' => [
                'id',
                'one',
                'two',
                'three',
            ],
        ] ); ?>

    </div>
    <!-- .col-md-8 -->

    <div class="col-md-4">

        <div class="panel panel-default">
            <div class="panel-body">

                <div class="pull-left"></div>
                <!-- .pull-left -->

                <div class="pull-right">
                    <?= \yii\helpers\Html::a( 'Cancel', [ 'index' ], [ 'class' => 'btn btn-default' ] ); ?>
                    <?= \yii\helpers\Html::a( 'Edit', [ 'update', 'id' => $model->id ], [ 'class' => 'btn btn-primary' ] ); ?>
                </div>
                <!-- .pull-right -->

            </div>
            <!-- .panel-body -->

            <ul class="list-group">
                <li class="list-group-item">
                    Would you like to delete @foo?
                    <?= \yii\helpers\Html::a( 'Yes!', [ 'delete', 'id' => $model->id ], [
                        'class' => 'text-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ] ); ?>
                </li>
            </ul>
            <!-- .list-group -->

        </div>
        <!-- .panel .panel-default -->

    </div>
    <!-- .col-md-4 -->

</div><!-- .row -->