<?php

use yii\bootstrap4\Carousel;
use yii\widgets\ListView;

/* @var $dataProvider \common\models\Course */

?>
<section class="popular-courses bgc-thm2">
    <div class="container-fluid style2">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0 text-black">Yangi kurslar</h3>
                    <p class="text-muted">Eng yangi qo'shilgan video darslar.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" >
                    <?php
                        echo ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemView'=>'/course/new_course',
                            'itemOptions'=>[
                                'tag'=>false
                            ],
                            'layout' => '<div class="d-flex flex-row" id="popular_course_item">{items}</div>{pager}',
                            'options'=>[
                                'id'=>'popular_course'
                            ],
                        ]);
                    ?>
               <div id="button-controls">
                   <div class="owl-nav">
                       <div class="owl-prev" style=""><i class="flaticon-left-arrow"></i></div>
                       <div class="owl-next" style=""><i class="flaticon-right-arrow-1"></i></div>
                   </div>
                   <div class="owl-dots" style="display: none;"></div>
               </div>
            </div>
            </div>
        </div>
</section>
