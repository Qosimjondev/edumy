<?php

use yii\helpers\Url;

?>
<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2">
                <img class="nav_logo_img img-fluid float-left mt20" src="<?= Url::base()?>/images/header-logo.png" alt="header-logo.png">
                <span>edumy</span>
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item">
                    <div class="search_overlay">
                        <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                            <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                        </a>
                        <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                            <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
                            <div id="mk-fullscreen-search-wrapper2">
                                <form method="get" id="mk-fullscreen-searchform2">
                                    <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
                                    <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-inline-item"><a href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div>
    <nav id="menu" class="stylehome1">
        <ul>
            <li><a href="<?= Url::home()?>">Home</a></li>

            <li><span>IT va dasturlash</span>
                <ul>
                    <li><a href=""> Web dasturlash</a></li>
                    <li><a href="">Desktop dasturlash</a></li>
                    <li><a href="#">Mobile dasturlash</a></li>
                </ul>
            </li>
            <li><span>Komputer grafikasi</span>
                <ul>
                    <li><a href="">Dizayn</a></li>
                    <li><a href="">Motion grafikasi</a></li>
                </ul>
            </li>
            <li><a href="">Moliya va biznes</a></li>
            <li><a href="">Xorijiy tillar</a></li>
        </ul>
    </nav>
</div>
