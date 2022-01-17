<?php

use lesha724\youtubewidget\Youtube;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Videos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-12">
<div class="video-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Video', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'video_title',
            'video_description:ntext',
            [
                    'attribute' => 'Video_Url',
                    'format' => 'raw',
                    'content' => function ($data){
                        return Youtube::widget([
                            'video'=>$data->video_url,
                            'iframeOptions'=>[
                                'class'=>'youtube-video'
                            ],
                            'divOptions'=>[
                                'class'=>'youtube-video-div'
                            ],
                            'height'=>250,
                            'width'=>500,
                            'playerVars'=>[
                                'controls' => 1,
                                'autoplay' => 0,
                                'showinfo' => 0,
                                'start'   => 0,
                                'end' => 0,
                                'loop ' => 0,
                                'modestbranding'=>  1,
                                'fs'=>0,
                                'rel'=>1,
                                'disablekb'=>0
                            ],
                            'events'=>[
                                /*https://developers.google.com/youtube/iframe_api_reference?hl=ru*/
                                'onReady'=> 'function (event){
                        /*The API will call this function when the video player is ready*/
                        event.target.playVideo();
            }',
                            ]
                        ]);;

                    }
            ],
            'course_title',
            //'status',
            //'created_at',
            //'updated_at',
            //'created_by',
            [
                'class' => 'yii\grid\ActionColumn',
                'buttons'=>[
                    'update'=>function($url)
                    {
                        return \yii\bootstrap4\Html::a('Update',$url,['class'=>'btn btn-primary ',]);
                    },
                    'delete'=>function($url)
                    {
                        return Html::a('Delete',$url,['class'=>'btn btn-danger ml-2','data-method'=>'post','data-confirm'=>'Seryoz ?']);
                    },
                ],
                'template'=>'{update}{delete}',

            ],
        ],
    ]); ?>
</div>
</div>
