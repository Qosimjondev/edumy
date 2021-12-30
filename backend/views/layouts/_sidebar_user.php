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
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Mening kurslarim</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="<?= Url::to(['/video/index'])?>">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Barchalar kurslar</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="file"></i> <span class="align-middle">Sertifikatlar</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Shaxsiy profil</span>
                </a>
            </li>

        </ul>
    </div>
</nav>