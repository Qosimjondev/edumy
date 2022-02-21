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
            <!-- Home -->
            <li class="sidebar-item active">
                <a class="sidebar-link" href="<?= Url::to(['site/index'])?>">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Home</span>
                </a>
            </li>
            <!--Add Course -->
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?= Url::to(['/category/index'])?>">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Kurs qo'shish</span>
                </a>
            </li>
            <!-- Category-->
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?= Url::to(['/group/index'])?>" data-method="post">
                    <i class="align-middle" data-feather="inbox"></i> <span class="align-middle">Bo'limlar</span>
                </a>
            </li>
            <!-- Slider-->
            <li class="sidebar-item active">
                <a class="sidebar-link" href="<?= Url::to(['/slider/index'])?>">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Slider</span>
                </a>
            </li>
            <!-- Personal Information-->
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?= Url::to(['/user/setting'])?>" data-method="post">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Shaxsiy ma'lumotlar</span>
                </a>
            </li>

        </ul>
    </div>
</nav>