<?php
use yii\widgets\Breadcrumbs;
?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?= $this->title ?>
    </h1>
    <?= Breadcrumbs::widget([
'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
    </section>

<section class="content">
    <?= $content ?>
</section>
</div>