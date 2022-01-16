<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Video */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="video-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'video_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'video_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput()->dropDownList($model->getStatusLabels()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
