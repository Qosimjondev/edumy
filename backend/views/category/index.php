<?php

use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barcha kurslar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="d-flex">
        <p>
            <?= Html::a("<i class='fa fa-plus' aria-hidden='true'></i> Kurs qo'shish",['create'],
                [
                    'class' => 'btn btn-outline-success',
                    'id'=>'addBtn',
                    'style'=>[
                        'display'=>'inline-block',
                    ],
                ]) ?>
        </p>
        <p style="margin-left: 20px">
            <?= Html::a("<i class='fa fa-bars' aria-hidden='true'></i> Bo'lim qo'shish",['/group/index'],
                [
                    'class' => 'btn btn-outline-info',
                    'style'=>[
                        'display'=>'inline-block',
                    ],
                ]) ?>
        </p>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>'{items}{pager}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute'=>'Kurs nomi',
                'value'=>function($data){
                    return $data->c_name;
                }
            ],
            [
                    'attribute'=>"Kurs Bo'limi",
                    'value'=>function($data){
                        return $data->g->g_name;
                    }
            ],
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>
<?php Modal::begin([
        'id' =>'category_modal'
])?>
<div id="category_blok"></div>
<?php
    Modal::end();
?>
</div>
<script>
    document.querySelector('#w0-filters').style.display='none';
</script>
