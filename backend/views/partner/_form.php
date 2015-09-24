<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Partner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="partner-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'picture')->textInput(['maxlength' => true]) */?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'createdAt')->textInput() */?>

    <?/*= $form->field($model, 'updatedAt')->textInput() */?>




    <div class="form-group">
        <?= $form->field($model, 'file')->fileInput() ?>
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>


</div>


