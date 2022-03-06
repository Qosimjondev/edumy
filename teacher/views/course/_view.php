<?php

/* @var $model \common\models\Course */

use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="col-md-4">
<div class="card m-4">
    <div class="card-img">
        <a href="<?= Url::to(['/course/start','id'=>$model->id])?>">
            <img src="<?= '/frontend/web/uploads/poster/'.$model->course_poster ?>" class="card-img-top" alt="card_img">
        </a>
    </div>
    <div class="card-body" style="text-align: center">
        <h5 class="card-title" style="font-size: 1.25rem"><?= $model->course_title ?></h5>
        <p class="text-muted"><?= $model->courseCateg->c_name ?></p>
        <h6><span class="flaticon-user"></span> <?= $model->course_author ?></h6>
        <div class="card-buttons">
            <?= Html::a("<i class='fa fa-edit'></i> Edit",['/course/update','id' => $model->id],['class' => 'btn btn-outline-success'])?>
            <?= Html::a("<i class='fa fa-trash'></i> Delete",['/course/delete','id' => $model->id],[
                    'class' => 'btn btn-outline-danger',
                    'method' => 'POST',
                    'style'=>[
                        'margin-left' => '10px'
                    ],
                    'data' => [
                        'confirm' => 'Are you sure what you want to delete this item ?',
                        'method' => 'post'
                    ]
            ])?>
        </div>
    </div>
</div>
</div>
