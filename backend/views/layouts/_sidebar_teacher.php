<?php

use yii\helpers\Html;
use yii\helpers\Url;
$this->title='Education';
?>
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="<?= Url::to(['site/index'])?>">
            <img src="<?= Yii::getAlias('@web').'/img/avatars/logo.png'?>" class="avatar img-fluid rounded me-1" alt="User" />
            <span class="align-middle"><?php echo Html::encode($this->title)?></span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item active">
                <a class="sidebar-link" href="<?= Url::to(['site/index'])?>">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="<?= Url::to(['/video/index'])?>">
                    <i class="align-middle" data-feather="video"></i> <span class="align-middle">Video</span>
                </a>
            </li>

<!--            <li class="sidebar-item">-->
<!--                <a class="sidebar-link" href="#">-->
<!--                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>-->
<!--                </a>-->
<!--            </li>-->
<!---->
<!--            <li class="sidebar-item">-->
<!--                <a class="sidebar-link" href="#">-->
<!--                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>-->
<!--                </a>-->
<!--            </li>-->
<!---->
<!--            <li class="sidebar-item">-->
<!--                <a class="sidebar-link" href="#">-->
<!--                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>-->
<!--                </a>-->
<!--            </li>-->
        </ul>
    </div>
</nav>