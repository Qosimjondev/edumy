<?php

namespace teacher\controllers;

use common\models\Video;
use yii\base\Security;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * VideoController extends the Controller.
 */
class VideoController extends Controller
{
    public function actionCreate(){
        return $this->render('create');
    }
}