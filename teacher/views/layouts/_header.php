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
                    <li class="list-inline-item dn-1440">
                        <div class="ht_search_widget">
                            <div class="header_search_widget">
                                <form class="form-inline mailchimp_form">
                                    <input type="email" class="form-control mb-2 mr-sm-2" id="inlineFormInputMail2" placeholder="Search for the software or skills you want to learn">
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
                <li class="last">
                    <a href="page-contact.html"><i class="flaticon-edit"></i> Ro'yxatdan O'tish</a>
                </li>
                <li class="list_five">
                    <a href="<?=Url::to(['site/login'])?>"><i class="flaticon-user"></i> Kirish</a>
                </li>
                <li class="list_three">
                    <a href="#"><span class="title">Yordam</span></a>
                </li>
                <li class="list_two">
                    <a href="<?=Url::to(['site/contact'])?>"><span class="title">Bog'lanish</span></a>
                </li>
                <li class="list_one">
                    <a href="#"><span class="title">Kirish</span></a>
                </li>
            </ul>
        </nav>
    </div>
</header>