<?php

use yii\helpers\Url;
?>
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
                                                    <a href="<?= Url::to(['/course/all-courses','id'=>1])?>">Web dasturlash</a>
                                                </li>
                                                <li>
                                                    <a href="<?= Url::to(['/course/all-courses','id'=>2])?>">Desktop dasturlash</a>
                                                </li>
                                                <li>
                                                    <a href="<?= Url::to(['/course/all-courses','id'=>3])?>">Mobil dasturlash</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="element-warapper-btn" style="margin-bottom: 17px">
                                        <a href="<?= Url::to(['/course/all-course'])?>">
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
                                                    <a href="<?= Url::to(['/course/all-courses','id'=>4])?>">Web Dizayn </a>
                                                </li>
                                                <li>
                                                    <a href="<?= Url::to(['/course/all-courses','id'=>5])?>">Branding</a>
                                                </li>
                                                <li>
                                                    <a href="<?= Url::to(['/course/all-courses','id'=>6])?>">Motion grafika</a>
                                                </li>
                                                <li>
                                                    <a href="<?= Url::to(['/course/all-courses','id'=>7])?>">Modellashtirish</a>
                                                </li>
                                                <li>
                                                    <a href="<?= Url::to(['/course/all-courses','id'=>8])?>">Video montaj</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="element-warapper-btn" style="margin-bottom: 17px">
                                        <a href="<?= Url::to(['/course/all-course'])?>">
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
<li><a href="<?= Url::to(['/course/all-courses','id'=>9])?>">Moliya va biznes</a></li>
<li>
    <a href="<?= Url::to(['/course/all-courses','id'=>10])?>" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Xorijiy tillar</a>
</li>



