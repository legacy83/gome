<?php

/* @var $this yii\web\View */
/* @var $model foo\models\Foo */

$this->title = 'Show @foo';
$this->params[ 'breadcrumbs' ][ ] = [ 'label' => '@foo', 'url' => [ 'index' ] ];
$this->params[ 'breadcrumbs' ][ ] = $this->title;
?>

<div class="page-header">
    <h1><?= \yii\helpers\Html::encode( $this->title ); ?></h1>
</div>

<div class="row">
    <div class="col-md-12">

        <?= \yii\widgets\DetailView::widget( [
            'model' => $model,
            'attributes' => [
                'id',
                'one',
                'two',
                'three',
            ],
        ] ) ?>

        <p>
            <?= \yii\helpers\Html::a( 'Update', [ 'update', 'id' => $model->id ], [ 'class' => 'btn btn-primary' ] ) ?>
            <?= \yii\helpers\Html::a( 'Delete', [ 'delete', 'id' => $model->id ], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ] ) ?>
        </p>


    </div>
    <!-- .col-md-12 -->
</div><!-- .row -->