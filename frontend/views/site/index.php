<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Edumy';
?>

<?php
    $url=Yii::$app->basePath.'/views/course/index.php';
    include $url;
?>

<?php echo $this->render('/course/top_courses')?>

<?php echo $this->render('/course/divider')?>

<?php echo $this->render('/course/direction')?>

<?php echo $this->render('/course/user_comment')?>


