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
] );

echo \yii\bootstrap\Nav::widget( [
    'options' => [ 'class' => 'navbar-nav navbar-right' ],
    'items' => [
        [ 'label' => '@todo', 'url' => [ '/scaffold/to-do' ] ],
        [ 'label' => '@foo', 'url' => [ '/scaffold/foo' ] ],
    ],
] );

\yii\bootstrap\NavBar::end();
?>

<div class="container">

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
