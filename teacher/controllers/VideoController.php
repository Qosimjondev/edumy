<?php

namespace teacher\controllers;
use yii\web\Controller;

class VideoController extends Controller{
    public function actionCreate(){
        return $this->render('create');
    }
}
?>