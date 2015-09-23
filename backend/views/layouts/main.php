<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\widgets\Body;

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
    <?echo Body::widget([
        'isGuest' => Yii::$app->user->isGuest,
        'baseUrl' => $baseUrl,
        'content' => $content
    ])?>
    <div class="control-sidebar-bg"></div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
