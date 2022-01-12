<?php


namespace teacher\controllers;


use yii\web\Controller;

class CoursesController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}