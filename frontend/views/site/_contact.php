<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="contact">
    <div class="site-contact">
        <div class="container">

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?= Html::tag('h2', Html::encode('CONTACT US'), ['class' => 'section-heading']) ?>
                    <?= Html::tag('h3', Html::encode('Lorem ipsum dolor sit amet consectetur.'), ['class' => 'section-subheading text-muted']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-6">

                        <?= $form->field($model, 'name')->label('')->textInput(['placeholder' => 'Your Name*']) ?>

                        <?= $form->field($model, 'email')->label('')->textInput(['placeholder' => 'Your Email*']) ?>

                        <?= $form->field($model, 'phone')->label('')->textInput(['placeholder' => 'Your Phone*']) ?>
                    </div>

                    <div class="col-md-6">
                        <?= $form->field($model, 'message')->textArea(['rows' => 6, 'placeholder' => 'Your Message*'])->label('') ?>
                    </div>
                </div>

                <div class="col-lg-12 text-center">
                    <?= Html::submitButton('Send Message', ['class' => 'btn btn-xl', 'name' => 'contact-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

            </div>
        </div>
</section>