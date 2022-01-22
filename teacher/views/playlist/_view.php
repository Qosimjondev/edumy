<?php

/* @var $model \common\models\Playlist */

use yii\helpers\Url;

?>
<div class="col-md-4">
<div class="card m-4">
    <div class="card-img">
        <img src="<?= '/frontend/web/uploads/poster/'.$model->course_poster ?>" class="card-img-top" alt="card_img">
    </div>
    <div class="card-body" style="text-align: center">
        <h5 class="card-title" style="font-size: 1.25rem"><?= $model->getCourseName($model->course_title) ?></h5>
        <p class="text-muted"><?= $model->course_categ ?></p>
        <h6><span class="flaticon-user"></span> <?= $model->course_author ?></h6>
        <div class="card-buttons">
            <a href="<?= Url::to(['playlist/information','id'=>$model->id])?>" class="btn btn-success">Ma'lumotlar</a>
            <a href="<?= Url::to(['playlist/start','id'=>$model->id])?>" class="btn btn-primary">Boshlash</a>
        </div>
    </div>
</div>
</div>