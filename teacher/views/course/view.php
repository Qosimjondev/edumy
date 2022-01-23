<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Playlist */

$this->title = $model->course_title;
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
        <div class="vh-100 view-card">
            <div class="col-md-4">
                <div class="card m-4" style="min-height: 450px">
                    <div class="card-img">
                        <img src="<?= '/frontend/web/uploads/poster/'.$model->course_poster ?>" class="card-img-top" alt="card_img">
                    </div>
                    <div class="card-body" style="text-align: center">
                        <h5 class="card-title" style="font-size: 1.25rem"><?= $model->course_title ?></h5>
                        <p class="text-muted"><?= $model->course_categ ?></p>
                        <h6><span class="flaticon-user"></span> <?= $model->course_author ?></h6>
                        <div class="card-buttons">
                            <a href="<?= Url::to(['course/information','id'=>$model->id])?>" class="btn btn-success">Ma'lumotlar</a>
                            <a href="<?= Url::to(['course/start','id'=>$model->id])?>" class="btn btn-primary">Boshlash</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
