<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">
    <div class="d-flex flex-column justify-content-center align-items-center">

        <h2>Upload Video File</h2>

        <div class="upload-icon">
            <i></i>
        </div>
        <p class="text-muted">Drag and drop a file you want to upload</p>

        <?php $form=\yii\bootstrap5\ActiveForm::begin([
                'options'=>['enctype'=>'multipart/form-data']
        ])?>
        <?= $form->field($model,'file')->fileInput() ?>

        <div class="text-center">
            <?= \yii\bootstrap5\Html::submitButton('Send',['class'=>'btn btn-primary'])?>
        </div>

        <?php \yii\bootstrap5\ActiveForm::end() ?>
    </div>
</div>
