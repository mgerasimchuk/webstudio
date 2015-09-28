<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TeamMember */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-member-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'picture')->textInput(['maxlength' => true]) */?>

    <?= $form->field($model, 'socialTwitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'socialFacebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'socialLinkedIn')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'createdAt')->textInput() */?>

    <?/*= $form->field($model, 'updatedAt')->textInput() */?>

    <div class="form-group">
        <?= $form->field($model, 'file')->fileInput() ?>
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
