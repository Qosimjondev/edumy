<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Playlist */

$this->title = $model->getCourseName($model->course_title);
$this->params['breadcrumbs'][] = ['label' => 'Playlists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="col-lg-12">
<div class="playlist-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="col-md-4 mt-5">
        <div class="card user-card">
            <div class="card-header-img">
                <img class="img-fluid img-radius" src='<?= '/frontend/web/uploads/poster/'.$model->course_poster ?> ' alt="card-img" >
            </div>
            <div style="width: 90%; margin-top: 10px; text-align: center">
                <h5><?= $model->getCourseName($model->course_title) ?></h5>
                <p class="text-muted text-sm-center"><?= $model->course_categ ?></p>
                <h6>
                    <span class="flaticon-user"><i class="feather icon-user"></i></span>
                    <?=$model->course_author?>
                </h6>
                <br>
                <div class="progress" style="margin-left: 5%">
                    <div class="progress-bar progress-bar progress-bar-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <div style="text-align: right!important;">
                            <span class="text-muted">
                                0/12 (0%)
                            </span>
                </div>
                <br>
                <?= Html::a("Ma'lumotlar",['playlist/information','id'=>$model->id],['class'=>'btn btn-primary m-r-15 text-white enroll-info-button'])?>
                <?= Html::a('Boshlash',['playlist/start','id'=>$model->id],['class'=>'btn btn-success text-white'])?>
            </div>
        </div>
    </div>
</div>
</div>
