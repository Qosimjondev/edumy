<?php

/* @var $this \yii\web\View */
/* @var $content string */

use teacher\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href=<?php echo '/teacher/web/images/favicon.ico'?> sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href=<?php echo '/teacher/web/images/favicon.ico'?> sizes="128x128" rel="shortcut icon" />
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrapper">
        <div class="preloader"></div>

        <?php echo $this->render('_header')?>
        <?php echo $this->render('_sidebar')?>
        <div class="our-dashbord dashbord">
            <div class="dashboard_main_content">
                <div class="container-fluid">
                    <div class="main_content_container">
                        <div class="row">
                            <?= $content?>
                        </div>
                        <?= $this->render('_footer')?>
                    </div>
                </div>
            </div>
        </div>
        <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
