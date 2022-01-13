<?php

namespace teacher\controllers;
use common\models\Video;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class VideoController extends Controller{


    public function actionCreate()
    {
        $model =new Video();
        if($this->request->isPost){
            if($model->load(\Yii::$app->request->post()) & $model->save()){
                return $this->redirect(['view','id'=>$model->id]);
            }
            $model->getErrors();
        }
        return $this->render(
            'create',
            ['video' =>$model]
        );
    }
    public function actionView($id)
    {
        return  $this->render(
            'view',
            ['model'=>$this->findModel($id)]
        );
    }
    public function actionPlaylist()
    {
        return $this->render('playlist');
    }
    public function actionUpdate($id){

        $model=$this->findModel($id);

        return $this->render(
            'update',
            ['model'=>$model]);
    }

    protected function findModel($id)
    {
        if(($model=Video::findOne($id)) !== null){
            return $model;
        }
        throw new NotFoundHttpException('Video does not exsisit');
    }
}
?>