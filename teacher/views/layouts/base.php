<?php

/* @var $this \yii\web\View */
/* @var $content string */

use teacher\assets\AppAsset;
use frontend\assets\IeAsset;

use yii\bootstrap4\Html;

AppAsset::register($this);
IeAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php

    $this->registerMetaTag([
        'http-equiv'=> 'X-UA-Compatible',
        'content'=>'IE=edge'
    ]);

    $this->registerMetaTag([
        'name'=>'viewport',
        'content'=>'width=device-width, initial-scale=1',
    ]);

    $this->registerMetaTag([
        'name'=>'keywords',
        'content'=>'academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university'
    ]);

    $this->registerMetaTag([
        'name'=>'description',
        'content'=>'Edumy - LMS Online Education Course & School HTML Template'
    ]);
    ?>

    <!-- Title -->
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


</head>
<?php $this->beginBody() ?>

        <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage();?>
