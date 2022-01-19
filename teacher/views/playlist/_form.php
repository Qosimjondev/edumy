<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Playlist */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-lg-12">
<div class="playlist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_price')->textInput() ?>

    <?= $form->field($model, 'course_poster')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_categ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
