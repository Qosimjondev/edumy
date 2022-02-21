<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Group */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-form">

    <?php $form = ActiveForm::begin(['options'=>[
            'enctype'=>'multipart/form-data',
            'class'=>'form-control'
    ],]); ?>

    <?= $form->field($model, 'g_name')->textInput(['maxlength' => true,'class'=>'form-control']) ?>

    <?= $form->field($model, 'posterImg')->fileInput(['class'=>'form-control']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
