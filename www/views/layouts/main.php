<?php /* @var $this \yii\web\View */ ?>
<?php /* @var $content string */ ?>
<?php \front\assets\AppAsset::register( $this ); ?>
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

<?= \front\components\bootstrap\SiteTopNavBar::widget(); ?>

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
