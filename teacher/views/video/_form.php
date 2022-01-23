<?php

use common\models\Course;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Video */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="video-form">

    <?php
        $course_title=Course::find()->all();
        $prompt=[ 'prompt'=>'Select cours category...'];
        $items=ArrayHelper::map($course_title);
    ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'video_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'video_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_id')->dropDownList($items,$prompt) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
