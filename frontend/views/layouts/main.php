<?php

/* @var $content string */


use frontend\assets\MainAsset;
use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html dir="ltr" lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords"
              content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
        <meta name="description" content="Edumy - LMS Online Education Course & School">
        <meta name="CreativeLayers" content="ATFN">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href="<?= Url::base() ?>/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon"/>
        <link href="<?= Url::base() ?>/images/favicon.ico" sizes="128x128" rel="shortcut icon"/>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <div class="preloader"></div>

        <?= $this->render("header") ?>
        <?= $this->render("modal") ?>
        <?= $this->render("navmobile") ?>
        <?php if (Yii::$app->controller->route == 'site/index'): ?>
            <?= $this->render('slider') ?>;
        <?php else: ?>
            <section class="inner_page_breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 text-center">
                            <div class="breadcrumb_content">
                                <h4 class="breadcrumb_title"><?= $this->title ?></h4>
                                <?= Breadcrumbs::widget([
                                    'itemTemplate' => "<li class='breadcrumb-item'>{link}</li>\n", // template for all links
                                    'homeLink' => [
                                            'label' => 'Home',
                                            'url' => ['site/index'],
                                            'encode' => false,
                                    ],
                                    'links' => $this->params['breadcrumbs'] ?? [],
                                ]); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>


        <?=$content?>


        <!-- Our Footer -->
        <section class="footer_one">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                        <div class="footer_contact_widget">
                            <h4>CONTACT</h4>
                            <p>329 Queensberry Street, North Melbourne </p>
                            <p>VIC 3051, Australia.</p>
                            <p>123 456 7890</p>
                            <p><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                  data-cfemail="9be8eeebebf4e9efdbfeffeef6e2b5f8f4f6">[email&#160;protected]</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                        <div class="footer_company_widget">
                            <h4>COMPANY</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="page-contact.html">Contact</a></li>
                                <li><a href="#">Become a Teacher</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                        <div class="footer_program_widget">
                            <h4>PROGRAMS</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Nanodegree Plus</a></li>
                                <li><a href="#">Veterans</a></li>
                                <li><a href="#">Georgia</a></li>
                                <li><a href="#">Self-Driving Car</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                        <div class="footer_support_widget">
                            <h4>SUPPORT</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Language Packs</a></li>
                                <li><a href="#">Release Status</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
                        <div class="footer_apps_widget">
                            <h4>MOBILE</h4>
                            <div class="app_grid">
                                <button class="apple_btn btn-dark">
								<span class="icon">
									<span class="flaticon-apple"></span>
								</span>
                                    <span class="title">App Store</span>
                                    <span class="subtitle">Available now on the</span>
                                </button>
                                <button class="play_store_btn btn-dark">
								<span class="icon">
									<span class="flaticon-google-play"></span>
								</span>
                                    <span class="title">Google Play</span>
                                    <span class="subtitle">Get in on</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Footer Middle Area -->
        <section class="footer_middle_area p0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 pb15 pt15">
                        <div class="logo-widget home1">
                            <img class="img-fluid" src="/images/header-logo.png" alt="header-logo.png">
                            <span>EDUMY</span>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 brdr_left_right">
                        <div class="footer_menu_widget">
                            <ul>
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><a href="#">Privacy</a></li>
                                <li class="list-inline-item"><a href="#">Terms</a></li>
                                <li class="list-inline-item"><a href="#">Sitemap</a></li>
                                <li class="list-inline-item"><a href="#">Purchase</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
                        <div class="footer_social_widget mt15">
                            <ul>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Footer Bottom Area -->
        <section class="footer_bottom_area pt25 pb25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="copyright-widget text-center">
                            <p>Copyright Edumy © 2019. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>