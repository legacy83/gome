<?php

/* @var $this yii\web\View */
/* @var $model foo\models\Foo */
/* @var $models array */

$this->title = '@foo';
$this->params[ 'breadcrumbs' ][] = $this->title;
?>

<div class="page-header">
    <h1><?= \yii\helpers\Html::encode( $this->title ); ?></h1>
</div>

<div class="row">

    <div class="col-md-12">

        <table class="table table-hover table-bordered">

            <thead>
            <tr>
                <th>ID</th>
                <th>@one</th>
                <th>@two</th>
                <th>@three</th>
                <th></th>
            </tr>
            </thead>

            <tbody>

            <?php foreach ( $models as $model ) : ?>

                <tr>
                    <td><?php echo $model->id; ?></td>
                    <td>@one</td>
                    <td>@two</td>
                    <td>@three</td>
                    <td>

                        <a href="<?= \yii\helpers\Url::toRoute( [ '/foo/foo/show', 'id' => $model->id ] ); ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                        <a href="<?= \yii\helpers\Url::toRoute( [ '/foo/foo/edit', 'id' => $model->id ] ); ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="<?= \yii\helpers\Url::toRoute( [ '/foo/foo/destroy', 'id' => $model->id ] ); ?>"><span class="glyphicon glyphicon-trash"></span></a>

                    </td>
                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    </div>

    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">

                <div class="pull-left"></div>

                <div class="pull-right">

                    <a class="btn btn-primary" href="<?= \yii\helpers\Url::toRoute( [ '/foo/foo/create' ] ); ?>">New
                        @foo</a>

                </div>

            </div>
        </div>

    </div>

</div>