<?php

use common\models\Category;
use common\models\Group;
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
        $select=Category::find()->all();
        $item=ArrayHelper::map($select,'id','c_name');
        $prompt=['prompt' => 'Select category...'];
        ?>

            <?php $form = ActiveForm::begin([
                'options'=>['enctype'=>'multipart/form-data']
            ]); ?>
        <div class="row">
            <div class="col-lg-6">

                <?= $form->field($model, 'course_title')->textInput() ?>

                <?= $form->field($model, 'course_price')->textInput(['id'=>'narx']) ?>

                <?= $form->field($model, 'course_description')->textarea(['rows'=>7,'style'=>['resize'=>'none']])?>

            </div>
            <div class="col-lg-6">

                <label>Poster for Course</label>

                <?= $form->field($model, 'imageFile')->fileInput()->label(false) ?>

                <?= $form->field($model, 'course_categ')->dropDownList($item,$prompt) ?>

                <?= $form->field($model, 'course_author')->textInput() ?>

                <?= $form->field($model, 'status')->dropDownList($model->getStatusLabels()) ?>

                <div class="form-group">

                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>

                </div>

            </div>
        </div>

            <?php ActiveForm::end(); ?>

    </div>
</div>