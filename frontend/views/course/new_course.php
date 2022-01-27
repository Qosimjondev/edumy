<?php

use yii\helpers\Url;

?>
<section id="new-courses" class="our-courses pt90 pt650-992">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Yangi kurslar</h3>
                    <p>Eng yangi qo'shilgan video kurslar</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 business design">
            <div class="top_courses">
                <div class="thumb">
                    <img class="img-whp" src="<?= 'frontend/web/images/courses/t1.jpg'?>" alt="t1.jpg">
                    <div class="overlay">
                        <div class="tag">Best Seller</div>
                        <div class="icon"><span class="flaticon-like"></span></div>
                        <a class="tc_preview_course" href="<?=Url::to(['site/single-course', 'id'=>1])?>">Kurs haqida batafsil</a>
                    </div>
                </div>
                <div class="details">
                    <div class="tc_content">
                        <p>Ali TUFAN</p>
                        <h5>Introduction Web Design with HTML</h5>
                        <ul class="tc_review">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#">(6)</a></li>
                        </ul>
                    </div>
                    <div class="tc_footer">
                        <ul class="tc_meta float-left">
                            <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                            <li class="list-inline-item"><a href="#">1548</a></li>
                            <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                            <li class="list-inline-item"><a href="#">25</a></li>
                        </ul>
                        <div class="tc_price float-right">$69.95</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>