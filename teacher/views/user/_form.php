<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-info-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

            <div class="input-group pt-3 pb-3">
                <div class="custom-file">
                    <?= $form->field($model, 'img')->fileInput(['class'=>'custom-file-input','id'=>"inputGroupFile04"])->label(false) ?>
                    <label class="custom-file-label" for="inputGroupFile04">choose file....</label>
                </div>
            </div>
            <?= $form->field($model, 'location')->textarea([
                'rows'=>7,
                'class'=>'form-control',
                'style'=>['resize'=>'none'],
                'maxlength' => true]) ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'position')->dropDownList([
                "O'rta maktab"=>"O'rta maktab",
                "O'rta maxsus (kollej)"=>"O'rta maxsus (kollej)",
                "Bakalvr"=>"Bakalvr",
                "Magistratura"=>"Magistratura",
                "PhD"=>'Phd'
            ],['prompt'=>'Tanlang..']) ?>


            <?= $form->field($model, 'email')->Input('email',['placeholder'=>'example@gmail.com']) ?>

            <?= $form->field($model, 'age')->Input('number',['min'=>8,'step'=>1,]) ?>



            <?= $form->field($model, 'gender')->radioList([
                'ayol'=>'Ayol',
                'erkak'=>'Erkak'
            ],['class'=>'d-flex flex-column']) ?>

        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
