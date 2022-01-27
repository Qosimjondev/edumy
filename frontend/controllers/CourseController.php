<?php

namespace frontend\controllers;

class CourseController extends \yii\web\Controller
{
    public function actionLatestCourse()
    {
        return $this->render('new_course');
    }
}