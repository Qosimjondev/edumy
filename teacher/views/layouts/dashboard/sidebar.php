<?php

use yii\helpers\Url;

?>
<div class="col-lg-12">
    <div class="dashboard_navigationbar dn db-1199">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
            <ul id="myDropdown" class="dropdown-content">
                <li><a href="<?= Url::home()?>"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
                <li class="active"><a href="<?=Url::to(['courses/index'])?>"><span class="flaticon-online-learning"></span> My Courses</a></li>
                <li><a href="page-my-order.html"><span class="flaticon-shopping-bag-1"></span> Order</a></li>
                <li><a href="page-my-message.html"><span class="flaticon-speech-bubble"></span> Messages</a></li>
                <li><a href="page-my-review.html"><span class="flaticon-rating"></span> Reviews</a></li>
                <li><a href="page-my-bookmarks.html"><span class="flaticon-like"></span> Bookmarks</a></li>
                <li><a href="page-my-listing.html"><span class="flaticon-add-contact"></span> Add listing</a></li>
            </ul>
        </div>
    </div>
</div>