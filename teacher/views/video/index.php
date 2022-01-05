<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Videos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Video', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'video_name',
            'description:ntext',
            'poster',
            'status',
            //'created_by',
            //'user_id',
            [
                    'attribute'=>'created_at',
                    'value'=>function($data){
                        return \Yii::$app->formatter->asDate($data->created_at);
                    }
            ],
            [
                    'attribute'=>'updated_at',
                    'value'=>function($data){
                        return \Yii::$app->formatter->asDate($data->updated_at);
                    }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
