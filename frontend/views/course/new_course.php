<?php


use yii\helpers\Url;

/* @var $model \common\models\Course */
?>
<?php
    $basePath=\Yii::$app->basePath;
?>
<div class="item">
    <div class="top_courses home2 mb0">
        <div class="thumb">
            <img class="img-whp" src="<?= '/frontend/web/uploads/poster/'.$model->course_poster ?>" alt="<?= $model->course_title?>">
            <div class="overlay">
                <div class="tag">Best Seller</div>
                <div class="icon"><span class="flaticon-like"></span></div>
                <a class="tc_preview_course" href="#">Preview Course</a>
            </div>
        </div>
        <div class="details">
            <div class="tc_content">
                <p class="text-center"><?= $model->course_author?></p>
                <h5 class="text-center"><?= $model->course_title ?></h5>
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
                <div class="tc_price float-right"><?= $model->course_price ?></div>
            </div>
        </div>
    </div>
</div>
