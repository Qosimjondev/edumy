<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Video */
/* @var $form yii\bootstrap5\ActiveForm */
?>

<div class="video-form">
    <?php $form=\yii\bootstrap5\ActiveForm::begin([
            'options'=>['enctype'=>'multipart/form-data','method'=>'post'],
    ])?>
    <div class="row">
        <div class="col-lg-8" >
            <?= $form->field($model,'title')->textInput() ?>
            <br>
            <?= $form->field($model,'description')->textarea(['rows'=>6,'placeholder'=>'write description...']) ?>
            <br>
            <?= $form->field($model,'img')->fileInput()?>
            <br>

            <?= \yii\bootstrap5\Html::submitButton('Send',['class'=>['btn btn-primary']])?>
        </div>

        <div class="col-lg-4">
            <video width="100%" height="240" poster="<?= $model->getVideoPoster()?>" controls>
                <source src="<?= $model->getVideoLink()?>">
                Your browser does not support the video tag.
            </video>
            <h3><?= $model->title ?></h3>
            <a href="<?= $model->getVideoLink()?>">
                Open video
            </a>
            <?= $form->field($model,'status')->textInput()?>
        </div>
    </div>
    <?php \yii\bootstrap5\ActiveForm::end() ?>
</div>

