<?php

use yii\helpers\Url;

?>
<section class="dashboard_sidebar dn-1199">
    <div class="dashboard_sidebars">
        <div class="user_board">
            <div class="user_profile">
                <div class="media">
                    <div class="media-body">
                        <h4 class="mt-0">Start</h4>
                    </div>
                </div>
            </div>
            <div class="dashbord_nav_list">
                <ul>
                    <li class="active"><a href="#"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
                    <li><a href="#"><span class="flaticon-online-learning"></span> My Courses</a></li>
                    <li><a href="#"><span class="flaticon-shopping-bag-1"></span> Order</a></li>
                    <li><a href="#"><span class="flaticon-speech-bubble"></span> Messages</a></li>
                    <li><a href="#"><span class="flaticon-rating"></span> Reviews</a></li>
                    <li><a href="#"><span class="flaticon-like"></span> Bookmarks</a></li>
                    <li><a href="<?= Url::to(['video/create'])?>"><span class="flaticon-add-contact"></span> Add listing</a></li>
                </ul>
                <h4>Account</h4>
                <ul>
                    <li><a href="#"><span class="flaticon-settings"></span> Settings</a></li>
                    <li><a href="#"><span class="flaticon-logout"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
