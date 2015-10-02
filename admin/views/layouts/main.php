<?php /* @var $this \yii\web\View */ ?>
<?php /* @var $content string */ ?>
<?php \back\assets\AppAsset::register( $this ); ?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language; ?>">
<head>
    <meta charset="<?= Yii::$app->charset; ?>">
    <title><?= \yii\helpers\Html::encode( $this->title ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= \yii\helpers\Html::csrfMetaTags(); ?>
    <?php $this->head(); ?>
</head>
<body>

<?php $this->beginBody(); ?>

<?php
$brandLabel = 'Gome Dashboard';
$brandIcon = "<i class=\"glyphicon glyphicon-wrench\"></i>&nbsp;";
\yii\bootstrap\NavBar::begin( [
    'brandLabel' => "{$brandIcon}<span>{$brandLabel}</span>",
    'options' => [ 'class' => 'navbar-default navbar-fixed-top', ],
    'innerContainerOptions' => [ 'class' => 'container-fluid' ],
] );
?>

<?php \yii\bootstrap\NavBar::end(); ?>

<nav class="navbar navbar-inverse navbar-fixed-top hidden" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand brand" href="<?= Yii::$app->homeUrl; ?>">
                <i class="glyphicon glyphicon-wrench"></i>
                <span>Gome Dashboard</span>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?= Yii::$app->homeUrl; ?>">Home</a></li>
                <li><a href="<?= \yii\helpers\Url::toRoute( [ '/scaffold/to-do' ] ); ?>">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= \yii\helpers\Url::toRoute( [ '/scaffold/to-do' ] ); ?>">@todo</a></li>
                <li><a href="<?= \yii\helpers\Url::toRoute( [ '/scaffold/foo' ] ); ?>">@foo</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <?= $this->render( 'partials/flash-messages.php' ); ?>

    <?= $content; ?>

    <hr>

    <footer>
        <p>&copy; Gome <?php echo date( 'Y' ); ?></p>
    </footer>

</div>

<?php $this->endBody(); ?>

</body>
</html>

<?php $this->endPage(); ?>
