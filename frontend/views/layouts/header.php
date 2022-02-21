<?php

use yii\helpers\Url;

?>

<header class="header-nav menu_style_home_five navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="<?=Url::base()?>/images/header-logo3.png" alt="header-logo3.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="<?=Url::home()?>" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="<?=Url::base()?>/images/header-logo2.png" alt="header-logo2.png">
                <span>edumy</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <div class="ht_left_widget home5 float-left">
                <ul>
                    <li class="list-inline-item">
                        <div class="header_top_lang_widget">
                            <div class="ht-widget-container">
                                <div class="vertical-wrapper">
                                    <h2 class="title-vertical home5">
                                        <span class="text-title">Yo'nalishlar</span> <i class="fa fa-angle-down show-down" aria-hidden="true"></i>
                                    </h2>
                                    <div class="content-vertical home5">
                                        <ul id="vertical-menu" class="mega-vertical-menu nav navbar-nav">
                                            <li><a href="#">IT va dasturlash <b class="caret"></b></a>
                                                <div class="dropdown-menu" style="width: 300px;height: auto; padding:5px;">
                                                    <div class="dropdown-menu-inner">
                                                        <div class="element-inner">
                                                            <div class="element-section-wrap">
                                                                <div class="element-container">
                                                                    <div class="element-row">
                                                                        <div class="col-lg-12">
                                                                            <div class="element-wrapper">
                                                                                <div class="widget-nav-menu">
                                                                                    <div class="element-list-wrapper wn-menu">
                                                                                        <ul class="element-menu-list">
                                                                                            <li>
                                                                                                <a href="/course/all?sub-category=web-dasturlash">Web dasturlash</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/course/all?sub-category=mobil-dasturlash">Mobil dasturlash</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/course/all?sub-category=desktop-dasturlash">Desktop dasturlash</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="element-warapper-btn" style="margin-bottom: 17px">
                                                                                    <a href="/course/all?category=it-va-dasturlash">
                                                                                        <div class="element-wrapper-sub-title">
                                                                                            Barcha kurslar                                                                                                    <i class="flaticon-right-arrow-1"></i>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#">Komputer grafikasi <b class="caret"></b></a>
                                                <div class="dropdown-menu" style="width: 300px;height: auto; padding:5px;">
                                                    <div class="dropdown-menu-inner">
                                                        <div class="element-inner">
                                                            <div class="element-section-wrap">
                                                                <div class="element-container">
                                                                    <div class="element-row">
                                                                        <div class="col-lg-12">
                                                                            <div class="element-wrapper">
                                                                                <div class="widget-nav-menu">
                                                                                    <div class="element-list-wrapper wn-menu">
                                                                                        <ul class="element-menu-list">
                                                                                            <li>
                                                                                                <a href="/course/all?sub-category=web-dasturlash">Web dasturlash</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/course/all?sub-category=mobil-dasturlash">Mobil dasturlash</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="/course/all?sub-category=desktop-dasturlash">Desktop dasturlash</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="element-warapper-btn" style="margin-bottom: 17px">
                                                                                    <a href="/course/all?category=it-va-dasturlash">
                                                                                        <div class="element-wrapper-sub-title">
                                                                                            Barcha kurslar                                                                                                    <i class="flaticon-right-arrow-1"></i>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#">Moliya va biznes</a></li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Xorijiy tillar</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item dn-1440">
                        <div class="ht_search_widget">
                            <div class="header_search_widget">
                                <form class="form-inline mailchimp_form">
                                    <input type="text" class="form-control mb-1 mr-sm-1" id="inlineFormInputMail2" placeholder="Kurslarni qidirish...">
                                    <button type="submit" class="btn btn-primary mb-2"><span class="flaticon-magnifying-glass"></span></button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item list_s dib-1440 dn">
                        <div class="search_overlay home5">
                            <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                                <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <?php if(Yii::$app->user->isGuest): ?>
                    <li class="last">
                        <a href="<?=Url::to(['site/signup'])?>"><i class="flaticon-edit"></i> Ro'yxatdan O'tish</a>
                    </li>
                    <li class="list_five">
                        <a href="<?=Url::to(['site/login'])?>"><i class="flaticon-user"></i> Kirish</a>
                    </li>
                <?php else: ?>
                <li class="list_two">
                    <a href="<?=Url::to(['site/logout'])?>" data-method="post"><span class="title">Chiqish</span></a>
                </li>
                <?php endif; ?>
                <li class="list_three">
                    <a href="#"><span class="title">Yordam</span></a>
                </li>
                <li class="list_one">
                    <a href="#"><span class="title">Kurslar</span></a>
                </li>
            </ul>
        </nav>
    </div>
</header>