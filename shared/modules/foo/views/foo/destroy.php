<?php

/* @var $this yii\web\View */
/* @var $model foo\models\Foo */

$this->title = 'Destroy @foo';
$this->params[ 'breadcrumbs' ][] = [ 'label' => '@foo', 'url' => [ '/foo/foo/index' ] ];
$this->params[ 'breadcrumbs' ][] = [ 'label' => $model->id, 'url' => [ '/foo/foo/show', 'id' => $model->id ] ];
$this->params[ 'breadcrumbs' ][] = $this->title;
?>

<div class="page-header">
    <h1><?= \yii\helpers\Html::encode( $this->title ); ?></h1>
</div>

<form action="<?= \yii\helpers\Url::toRoute( [ '/foo/foo/destroy' ] ); ?>" method="post">

    <input type="hidden" name="_csrf">
    <input type="hidden" name="id" value="<?= \yii\helpers\Html::encode( $model->id ); ?>">

    <div class="row">

        <div class="col-md-8">

            <table class="table table-hover table-bordered">

                <thead>
                <tr>
                    <th>ID</th>
                    <th><?= \yii\helpers\Html::encode( $model->id ); ?></th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <th>@one</th>
                    <td>@one</td>
                </tr>
                <tr>
                    <th>@two</th>
                    <td>@two</td>
                </tr>
                <tr>
                    <th>@three</th>
                    <td>@three</td>
                </tr>
                </tbody>

            </table>

        </div>

        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-body">

                    <p>Are you sure about destroying @foo?</p>

                    <div class="pull-left"></div>

                    <div class="pull-right">

                        <input type="submit" class="btn btn-default" name="destroySubmitNo" value="No">
                        <input type="submit" class="btn btn-danger" name="destroySubmitYes" value="Yes">

                    </div>

                </div>

            </div>

        </div>

    </div>

</form>