<?php

namespace backend\controllers;

use common\models\Slider;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class SliderController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider=new ActiveDataProvider([
            'query'=>Slider::find(),
        ]);
        return $this->render('index',[
            'dataProvider'=>$dataProvider]);
    }

    public function actionCreate()
    {
        $model = new Slider();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        return $this->render('update',[
            'model'=>$model
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view',[
            'model'=>$this->findModel($id)
        ]);
    }
    protected function findModel($id)
    {
        if( $model = Slider::findOne(['id'=>$id]) !== null)
        {
            return $model;
        }
        throw new NotFoundHttpException('slider not found');
    }
}