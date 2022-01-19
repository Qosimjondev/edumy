<?php

use lesha724\youtubewidget\Youtube;
use yii\helpers\Url;

/* @var $model common\models\Video  */
?>

<?php
$youtube=Youtube::widget([
        'video'=>$model->video_url,
        'iframeOptions'=>[
            'class'=>'youtube-video'
        ],
        'divOptions'=>[
            'class'=>'youtube-video-div'
        ],
        'height'=>400,
        'width'=>600,
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
    ]);
    $title=$model->video_title;
    $description=$model->video_description;
?>
<div class="col-lg-12" style="display: flex; justify-content: center">
    <div class="card" style="width: 38rem;">
        <?= $youtube?>
        <div class="card-body">
            <h5 class="card-title"><?= $title?></h5>
            <p class="card-text"><?= $description?></p>
            <a href="<?php echo Url::to(['video/index'])?>" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>
