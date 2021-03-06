<?php

namespace frontend\controllers;

use common\models\Course;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;

class CourseController extends Controller
{
//    public function behaviors()
//    {
//        return [
//            [
//                'class'=>AccessControl::class,
//                'rules'=>[
//                    [
//                        'actions'=>['index'],
//                        'allow'=>true,
//                        'roles'=>['@']
//                    ]
//                ]
//            ],
//        ];
//    }

    public function actionIndex()
    {
        $query=Course::find();
        $dataProvider=new ActiveDataProvider([
            'query'=>$query,
        ]);
       return $this->render('index',['dataProvider'=>$dataProvider]);
    }

    public function actionSearch($search)
    {
        $query=Course::find()
            ->with('createdBy')
            ->latest()
            ->orderBy(['created_at'=>SORT_DESC]);
        if($search)
        {
          $query->byKeyword($search);
        };
        $dataProvider=new ActiveDataProvider([
            'query'=>$query
        ]);
        return $this->render('search',[
            'dataProvider'=>$dataProvider
        ]);
    }
    public function actionAllCourses($id)
    {
        $query=Course::find()
            ->with('courseCateg')
            ->latest();
            if($id){
              $query->byCategory($id);
            }
        $dataProvider=new ActiveDataProvider([
            'query' => $query,
            'pagination' =>[
                'pageSize' => 6
            ],
            'sort' => [
                'defaultOrder' =>[
                    'created_at' => SORT_DESC
                ]
            ]
        ]);
        return $this->render('allcourses',[
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAllCourse()
    {
        $query=Course::find()
            ->latest();
        $dataProvider=new ActiveDataProvider([
            'query'=>$query
        ]);

        return $this->render('allcourse',[
            'dataProvider' => $dataProvider
        ]);
    }
    public function actionFinance()
    {
        $query=Course::find()
            ->finance();
    }
}