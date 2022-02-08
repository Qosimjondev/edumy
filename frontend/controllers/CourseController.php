<?php

namespace frontend\controllers;

use common\models\Course;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;

class CourseController extends Controller
{
    public function behaviors()
    {
        return [
            [
                'class'=>AccessControl::class,
                'rules'=>[
                    [
                        'actions'=>['index'],
                        'allow'=>true,
                        'roles'=>['@']
                    ]
                ]
            ],
        ];
    }

    public function actionIndex()
    {
        $query=Course::find();
        $dataProvider=new ActiveDataProvider([
            'query'=>$query,
        ]);
       return $this->render('index',['dataProvider'=>$dataProvider]);
    }
}