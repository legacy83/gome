<?php

/* @var $this yii\web\View */
/* @var $model foo\models\Foo */

$this->title = 'Edit @foo';
$this->params[ 'breadcrumbs' ][ ] = [ 'label' => '@foo', 'url' => [ '/foo/foo/index' ] ];
$this->params[ 'breadcrumbs' ][ ] = [ 'label' => $model->id, 'url' => [ '/foo/foo/show', 'id' => $model->id ] ];
$this->params[ 'breadcrumbs' ][ ] = $this->title;
?>

<div class="page-header">
    <h1><?= \yii\helpers\Html::encode( $this->title ); ?></h1>
</div>

<div class="row">
    <div class="col-md-12">

        <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>
        <?= $form->field( $model, 'one' )->textInput( [ 'maxlength' => TRUE ] ) ?>
        <?= $form->field( $model, 'two' )->textInput( [ 'maxlength' => TRUE ] ) ?>
        <?= $form->field( $model, 'three' )->textInput( [ 'maxlength' => TRUE ] ) ?>

        <div class="form-group">
            <?= \yii\helpers\Html::submitButton( 'Update', [ 'class' => 'btn btn-primary' ] ) ?>
        </div>

        <?php \yii\bootstrap\ActiveForm::end(); ?>

    </div>
    <!-- .col-md-12 -->
</div><!-- .row -->