<?php

use common\models\Video;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Playlist */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-lg-12">
<div class="playlist-form">
    <?php
        $course=Video::find()->all();
        $item=ArrayHelper::map($course,'id','course_title');
        $prompt=['prompt'=>'Select course title...'];
        $select=[
                'Dasturlash' =>[
                        'web'=>'Web Dasturlash',
                        'mobile'=>'Mobile Dasturlash',
                        'desktop'=>'Desktop Dasturlash'
                ],
                'Komputer grafikasi'=>[
                        'web dizayn'=>'Web dizayn',
                        'branding'=>'Branding',
                        'motion grafika'=>'Motion grafika',
                        'modellashtirish'=>'Modellashtirish',
                        'video montaj'=>'Video montaj'
                ],
                'moliya va biznes' =>'Moliya va Biznes',
                'xorijiy tillar'=>'Xorijiy tillar'
        ];
        $choice=['prompt'=>'Course category...']
    ?>

    <?php $form = ActiveForm::begin([
            'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'course_title')->dropDownList($item,$prompt) ?>

    <?= $form->field($model, 'course_price')->textInput(['id'=>'narx']) ?>

    <label>Poster for Course</label>

    <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>

    <?= $form->field($model, 'course_categ')->dropDownList($select,$choice) ?>


    <?= $form->field($model, 'course_description')->textarea(['rows'=>7,'style'=>['resize'=>'none']])?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
