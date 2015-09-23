<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\widgets\Header;
use app\widgets\LeftMenu;

$asset = backend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<!--сворачиваем левый навигатор в зависимости от того авторизирован ли пользователь-->
<body class = "skin-green <?= (Yii::$app->user->isGuest) ? 'sidebar-collapse' : '' ?>" ">
<?php $this->beginBody() ?>

<div class="wrap">
    <?
    echo Header::widget([
        'isGuest' => Yii::$app->user->isGuest,
        'baseUrl' => $baseUrl
    ])?>
    <?
    echo LeftMenu::widget([
        'isGuest' => Yii::$app->user->isGuest,
        'baseUrl' => $baseUrl
    ])?>

    <?= $this->render('content', ['content' => $content]) ?>
    <?= $this->render('footer', ['baseUrl' => $baseUrl]) ?>

    <div class="control-sidebar-bg"></div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
