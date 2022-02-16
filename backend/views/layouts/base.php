<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;

use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\helpers\Url;

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
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?= (Yii::getAlias('@web').'/img/avatars/logo.png')?>">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?php echo $this->render('_sidebar_user') ?>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <img src="<?= Yii::getAlias('@web').'/img/avatars/user.png'?>" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                                <span class="text-dark"><?= Yii::$app->user->identity->username?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="<?= Url::to(['/user/setting'])?>">
                                    <i class="align-middle" data-feather="user"></i>   Shaxsiy cabinet
                                </a>
                                <a class="dropdown-item" href="<?= Url::to(['/site/logout'])?>">
                                    <i class="align-middle" data-feather="log-out"></i> Log out
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    <?= $content ?>
                </div>
            </main>

            <?php echo $this->render('_footer')?>
        </div>
    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
