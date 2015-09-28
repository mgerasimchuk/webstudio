<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;



/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'picture')->textInput(['maxlength' => true]) */?>

    <?/*= $form->field($model, 'createdAt')->textInput() */?>

    <?/*= $form->field($model, 'updatedAt')->textInput() */?>

    <?= $form->field($model, 'categoryId')->dropDownList(ArrayHelper::map(\common\models\ProjectCategory::find()->all(), 'id', 'name')) ?>

    <div class="form-group">
        <?= $form->field($model, 'file')->fileInput() ?>
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
