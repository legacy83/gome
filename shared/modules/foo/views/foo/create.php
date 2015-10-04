<?php /* @var $this yii\web\View */ ?>
<?php $this->title = 'New @foo'; ?>

<div class="page-header">
    <h1><?= \yii\helpers\Html::encode( $this->title ) ?></h1>
</div>

<form action="<?= \yii\helpers\Url::toRoute( [ '/foo/foo/create' ] ); ?>" method="post" class="form-horizontal">

    <input type="hidden" name="_csrf">

    <div class="row">

        <div class="col-md-8">

            <div class="form-group">

                <label for="inputField1" class="col-sm-2 control-label">@one</label>

                <div class="col-sm-10">
                    <input type="text" name="inputField1" class="form-control" id="inputField1" placeholder="@one">
                </div>

            </div>

            <div class="form-group">

                <label for="inputField2" class="col-sm-2 control-label">@two</label>

                <div class="col-sm-10">
                    <input type="text" name="inputField2" class="form-control" id="inputField2" placeholder="@two">
                </div>

            </div>

            <div class="form-group">

                <label for="inputField3" class="col-sm-2 control-label">@three</label>

                <div class="col-sm-10">
                    <input type="text" name="inputField3" class="form-control" id="inputField3" placeholder="@three">
                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="pull-left"></div>

                    <div class="pull-right">

                        <input class="btn btn-default" type="submit" name="createSubmitCancel" value="Cancel">
                        <input class="btn btn-primary" type="submit" name="createSubmitCreate" value="Create">

                    </div>

                </div>

            </div>

        </div>

    </div>

</form>