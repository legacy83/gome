<?php

/* @var $this \yii\web\View */
/* @var $content string */

\back\assets\DashboardAsset::register( $this );
$this->beginPage();
?>
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

<?= \back\components\bootstrap\DashboardNavBar::widget(); ?>

<div class="container">

    <?= \back\components\bootstrap\DashboardAlert::widget(); ?>

    <?= $content; ?>

    <hr>

    <footer>
        <p>&copy; Gome <?= date( 'Y' ); ?></p>
    </footer>

</div>

<?php $this->endBody(); ?>

</body>
</html>

<?php $this->endPage(); ?>