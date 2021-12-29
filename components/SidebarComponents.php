<?php
use common\models\Person;

class SidebarComponents extends \yii\base\Component
{

   public static function sidebar($userId)
   {
       $model=Person::findOne($userId);
       if($model->status === "1")
       {
           return $this->render('_sidebar_teacher');
           exit();
       }
       return $this->render('_sidebar_pupil');
   }
}
?>