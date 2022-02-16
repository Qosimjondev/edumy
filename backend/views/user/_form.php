<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserInfo */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="user-info-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="userInfoUpdateButtons d-flex" style="flex-direction: row-reverse; letter-spacing: 1px;">
        <p>
            <?= Html::a('Bekor qilish',['setting'],
                [
                    'class' => 'btn btn-outline-danger',
                    'style'=>[
                        'display'=>'inline-block',
                        'margin-left'=>'10px'
                    ],
                ]) ?>
        </p>
        <p>
            <?= Html::submitButton('<i class="fa fa-save"> </i> Saqlash',
                [
                    'class' => 'btn btn-outline-success btn-shadow-primary',
                    'style'=>[
                        'display'=>'inline-block',

                    ],
                ]) ?>
        </p>

    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
            <div class="custom-file" style="margin-top: 32px; margin-bottom:15px">
                <?= $form->field($model, 'img')->fileInput(['class'=>'form-control','id'=>"customFile"])->label(false) ?>
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

            <?= $form->field($model, 'age')->Input('number',['min'=>8,'step'=>1,'maxlength'=>true]) ?>



            <?= $form->field($model, 'gender')->radioList([
                'erkak'=>'Erkak',
                'ayol'=>'Ayol'
            ],['class'=>'d-flex flex-column']) ?>

        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
