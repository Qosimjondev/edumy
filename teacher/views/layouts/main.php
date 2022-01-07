<?php

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@teacher/views/layouts/base.php');

?>
<div class="wrapper">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
    <?= $this->render("_header") ?>

    <?= $this->render("navmobile") ?>

    <?= $this->render("_sidebar") ?>

    <!-- Our Dashbord -->
    <div class="our-dashbord dashbord">
        <div class="dashboard_main_content">
            <div class="container-fluid">
                <div class="main_content_container">
                    <div class="row">
                        <?=$this->render('dashboard/sidebar'); ?>
                        <?=$this->render('dashboard/breadcrumb'); ?>
                        <?= $content ?>
                    </div>
                     <?=$this->render('dashboard/footer'); ?>
                </div>
            </div>
        </div>
    </div>

<a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>
<?php $this->endContent() ?>
