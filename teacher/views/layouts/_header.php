<?php

use yii\helpers\Url;

?>
<header class="header-nav menu_style_home_one dashbord_pages navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid">
        <nav>
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src=<?= '/teacher/web/images/header-logo.png'?> alt="header-logo.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="<?= Url::to(['site/index'])?>" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src=<?= '/teacher/web/images/header-logo.png'?> alt="header-logo.png">
                <img class="logo2 img-fluid" src=<?= '/teacher/web/images/header-logo.png'?> alt="header-logo.png">
                <span>edumy</span>
            </a>

            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li>
                    <a href="<?=Url::to(['/'])?>"><span class="title">Home</span></a>
                </li>

                <?php if(\Yii::$app->user->isGuest){?>
                    <li>
                        <a href="<?= Url::to(['site/login'])?>"><span class="flaticon-user"></span> Kirish</a>
                    </li>
                <?php
                }else{?>
                <li>
                    <a href="<?= Url::to(['site/logout'])?>" data-method="post"><span class="flaticon-user"></span> logout</a>
                </li>
                <?php }?>
            </ul>
            <ul class="header_user_notif pull-right dn-smd">
                <?= $this->render('_message')?>
                <?= $this->render('_info')?>
            </ul>
        </nav>
    </div>
</header>