<?php

namespace teacher\controllers;
use common\models\Video;
use yii\web\Controller;

class VideoController extends Controller{


    public function actionCreate()
    {
        $model =new Video();
        return $this->render(
            'create',
            ['video' =>$model]
        );
    }
    public function actionPlaylist()
    {
        return $this->render('playlist');
    }
}
?>