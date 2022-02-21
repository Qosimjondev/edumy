<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kurs kategoriyasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a("<i class='fa fa-plus' aria-hidden='true'></i> Create group",['create'],
            [
                'class' => 'btn btn-outline-success',
                'style'=>[
                    'display'=>'inline-block',
                ],
            ]) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>'{items} {pager}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'g_name',
            'poster',
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>


</div>
