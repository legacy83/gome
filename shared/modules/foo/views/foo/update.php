<?php

/* @var $this yii\web\View */
/* @var $model foo\models\Foo */

$this->title = 'Edit @foo';
$this->params[ 'breadcrumbs' ][] = [ 'label' => '@foo', 'url' => [ 'index' ] ];
$this->params[ 'breadcrumbs' ][] = [ 'label' => $model->id, 'url' => [ 'view', 'id' => $model->id ] ];
$this->params[ 'breadcrumbs' ][] = $this->title;
?>

    <div class="page-header">
        <h1><?= \yii\helpers\Html::encode( $this->title ); ?></h1>
    </div>

<?php $form = \yii\bootstrap\ActiveForm::begin( [ 'layout' => 'horizontal' ] ); ?>

    <div class="row">

        <div class="col-md-8">

            <?= $form->field( $model, 'one' )->textInput( [ 'maxlength' => TRUE ] ); ?>
            <?= $form->field( $model, 'two' )->textInput( [ 'maxlength' => TRUE ] ); ?>
            <?= $form->field( $model, 'three' )->textInput( [ 'maxlength' => TRUE ] ); ?>
            <?= $form->field( $model, 'four' )->dropDownList( \foo\models\Foo::fourOptions() ); ?>
            <?= $form->field( $model, 'five' )->textarea( [ 'rows' => 6 ] ); ?>

        </div>
        <!-- .col-md-8 -->

        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="pull-left"></div>
                    <!-- .pull-left -->

                    <div class="pull-right">
                        <?= \yii\helpers\Html::a( 'Cancel', [ 'view', 'id' => $model->id ], [ 'class' => 'btn btn-default' ] ); ?>
                        <?= \yii\helpers\Html::submitButton( 'Update', [ 'class' => 'btn btn-primary' ] ); ?>
                    </div>
                    <!-- .pull-right -->

                </div>
                <!-- .panel-body -->
            </div>
            <!-- .panel .panel-default -->

        </div>
        <!-- .col-md-4 -->

    </div><!-- .row -->

<?php \yii\bootstrap\ActiveForm::end(); ?>