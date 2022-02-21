<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Slider */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="slider-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="d-flex flex-row-reverse">

        <?= Html::a("<i class='fa fa-trash' aria-hidden='true'></i> Delete", ['delete', 'id' => $model->id], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

        <?= Html::a("<i class='fa fa-edit' aria-hidden='true'></i> Update",['update','id'=>$model->id],
            [
                'class' => 'btn btn-outline-success',
                'style'=>[
                    'display'=>'inline-block',
                ],
            ]) ?>

        <?= Html::a("<i class='fa fa-home' aria-hidden='true'></i> Index",['index'],
            [
                'class' => 'btn btn-outline-info',
                'style'=>[
                    'display'=>'inline-block',
                ],
            ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description',
            'link',
        ],
    ]) ?>

</div>
