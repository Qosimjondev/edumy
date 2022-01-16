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
                    <a href="#"><span class="title">Home</span></a>
                </li>

                <?php if(\Yii::$app->user->isGuest){?>
                    <li>
                        <a href="<?= Url::to(['site/login'])?>"><span class="flaticon-user"></span> Kirish</a>
                    </li>
                <?php
                }else{?>
                <li>
                    <a href="<?= Url::to(['site/logout'])?>"><span class="flaticon-user"></span> logout</a>
                </li>
                <?php }?>
            </ul>
            <ul class="header_user_notif pull-right dn-smd">
                <li class="user_notif">
                    <div class="dropdown">
                        <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-email"></span></a>
                        <div class="dropdown-menu notification_dropdown_content">
                            <div class="so_heading">
                                <p>Notifications</p>
                            </div>
                            <div class="so_content" data-simplebar="init">
                                <ul>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                    <li>
                                        <h5>Status Update</h5>
                                        <p>This is an automated server response message. All systems are online.</p>
                                    </li>
                                </ul>
                            </div>
                            <a class="view_all_noti text-thm" href="#">View all alerts</a>
                        </div>
                    </div>
                </li>

                <li class="user_setting">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src=<?= '/teacher/web/images/team/e1.png'?> alt="e1.png"></a>
                        <div class="dropdown-menu">
                            <div class="user_set_header">
                                <img class="float-left" src=<?= '/teacher/web/images/team/e1.png'?> alt="e1.png">
                                <p>Kim Hunter <br><span class="address"><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e18a888c89948f958493a1868c80888dcf828e8c">[email&#160;protected]</a></span></p>
                            </div>
                            <div class="user_setting_content">
                                <a class="dropdown-item active" href="#">My Profile</a>
                                <a class="dropdown-item" href="#">Messages</a>
                                <a class="dropdown-item" href="#">Purchase history</a>
                                <a class="dropdown-item" href="#">Help</a>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>