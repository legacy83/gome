<?php

/* @var $this yii\web\View */
/* @var $model foo\models\Foo */

$this->title = 'Show @foo';
$this->params[ 'breadcrumbs' ][] = [ 'label' => '@foo', 'url' => [ 'index' ] ];
$this->params[ 'breadcrumbs' ][] = $this->title;
?>

<div class="page-header">
    <h1><?= \yii\helpers\Html::encode( $this->title ); ?></h1>
</div>

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

                <div class="pull-left"></div>

                <div class="pull-right">

                    <a class="btn btn-default" href="<?= \yii\helpers\Url::toRoute( [ '/foo/foo' ] ); ?>">Cancel</a>
                    <a class="btn btn-primary"
                       href="<?= \yii\helpers\Url::toRoute( [ '/foo/foo/edit', 'id' => $model->id ] ); ?>">Edit</a>

                </div>

            </div>

            <ul class="list-group">
                <li class="list-group-item">
                    Would you like to destroy @foo?
                    <a class="text-danger"
                       href="<?= \yii\helpers\Url::toRoute( [ '/foo/foo/destroy', 'id' => $model->id ] ); ?>">Yes!</a>
                </li>
            </ul>

        </div>

    </div>

</div>