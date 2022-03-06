<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Course';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="playlist-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create Course', ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?=ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_view',
        'layout' => '<div class="d-flex flex-wrap mt-4 vh-100 ">{items}</div>{pager}',
        'itemOptions' => ['tag'=>null]
    ]);?>

</div>
