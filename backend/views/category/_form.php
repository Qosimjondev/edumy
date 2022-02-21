<?php

use backend\models\Group;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">
    <?php
        $items=ArrayHelper::map(Group::find()->all(),'id','g_name');
        $prompt=['prompt'=>'Select course Category...'];
    ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'c_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'g_id')->dropDownList($items,$prompt) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-outline-success','id'=>'course_btn']) ?>
        <?= Html::a('Orqaga',['index'],['class'=>'btn btn-outline-danger'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
