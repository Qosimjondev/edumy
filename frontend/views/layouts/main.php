<?php

/* @var $content string */


use frontend\assets\MainAsset;
use frontend\widgets\navwidget\NavWidget;
use yii\bootstrap4\Html;
use yii\bootstrap4\Breadcrumbs;
use frontend\assets\IeAsset;
use yii\helpers\Url;



MainAsset::register($this);
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
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <div class="preloader"></div>

        <?= $this->render("header") ?>
        <?= $this->render('modal.php') ?>
        <?= NavWidget::widget(); ?>
        <?php if (Yii::$app->controller->route == 'site/index'): ?>
            <?= $this->render('slider') ?>;
        <?php else: ?>
            <section class="inner_page_breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 text-center">
                            <div class="breadcrumb_content">
                                <h4 class="breadcrumb_title"><?=$this->title?></h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=Url::home()?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?=$this->title?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>


        <?= $content ?>

        <?=$this->render('footer'); ?>

    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>