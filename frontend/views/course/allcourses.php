<?php

/* @var $dataProvider \yii\data\ActiveDataProvider*/

use yii\widgets\ListView;

$this->title='Kurslar';

?>
<section class="our-team pb50">
    <div class="container">
        <div class="row">
            <section class="col-md-12 col-lg-8 col-xl-9">
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <div class="instructor_search_result">
                            <p class="mt10 fz15"><span class="color-dark pr10">15 results</span> Showing 1–9 of</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <div class="candidate_revew_select text-right tac-xsd mb25">
                            <ul>
                                <li class="list-inline-item">
                                    <select class="selectpicker show-tick">
                                        <option>Newly published</option>
                                        <option>Recent</option>
                                        <option>Old Review</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php
                    echo ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' =>'_show_course',
                        'layout' =>"<div class='d-flex flex-wrap '>{items}</div>{pager}"
                    ]);
                ?>
</section>
