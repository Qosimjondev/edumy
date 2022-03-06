<?php

/* @var $dataProvider \yii\data\ActiveDataProvider*/

use yii\widgets\ListView;
use yii\widgets\Pjax;


$this->title='Kurslar';

?>
<section class="our-team pb50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="row d-flex flex-row-reverse">
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                       <?php Pjax::begin()?>
                            <div class="candidate_revew_select text-right tac-xsd mb25">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown button
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                       <?php Pjax::end()?>
                    </div>
                </div>

                    <?php
                        echo ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemView' =>'_show_course',
                            'layout' =>"<div class='d-flex flex-wrap justify-content-between' style='min-height: 900px;'>{items}</div>\n
                                        <div class='col-lg-12' id='pagination_pager'><div id='pagination-pager'>{pager}</div></div>",
                            'itemOptions' =>[
                                    'tag' => null,
                            ],
                            'options' => [
                                    'class' => 'row',
                                    'id' => null,
                            ],

                        ]);
                    ?>

            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="selected_filter_widget style2 mb30">
                    <div id="accordion" class="panel-group">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Categories</a>
                                </h4>
                            </div>
                            <div id="panelBodySoftware" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="category_sidebar_widget">
                                        <ul class="category_list">
                                            <li><a href="#">Photoshop <span class="float-right">(03)</span></a></li>
                                            <li><a href="#">Adobe Illustrator <span class="float-right">(15)</span></a></li>
                                            <li><a href="#">Graphic Design <span class="float-right">(126)</span></a></li>
                                            <li><a href="#">Sketch <span class="float-right">(1,584)</span></a></li>
                                            <li><a href="#">InDesign <span class="float-right">(34)</span></a></li>
                                            <li><a href="#">CorelDRAW <span class="float-right">(58)</span></a></li>
                                            <li><a href="#">After Effects <span class="float-right">(06)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selected_filter_widget style2 mb30">
                    <div id="accordion" class="panel-group">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodyPrice" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Price</a>
                                </h4>
                            </div>
                            <div id="panelBodyPrice" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="cl_pricing_slider">
                                        <div id="slider-range"></div>
                                        <p class="text-center">
                                            <input class="sl_input" type="text" id="amount">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selected_filter_widget style2">
                    <div id="accordion" class="panel-group">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panelBodyAuthors" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Author</a>
                                </h4>
                            </div>
                            <div id="panelBodyAuthors" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="cl_skill_checkbox">
                                        <div class="content ui_kit_checkbox style2 text-left">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck80">
                                                <label class="custom-control-label" for="customCheck80">Chris Convrse <span class="float-right">(03)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Morten Rand <span class="float-right">(15)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Rayi Villalobos  <span class="float-right">(125)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">James William <span class="float-right">(1.584)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">Jen Kramery <span class="float-right">(34)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">Chris Notder  <span class="float-right">(58)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">Kramery Chris <span class="float-right">(06)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">James William <span class="float-right">(62)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                <label class="custom-control-label" for="customCheck8">Chris Notder <span class="float-right">(43)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                <label class="custom-control-label" for="customCheck9">Rayi Villalobos <span class="float-right">(23)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                <label class="custom-control-label" for="customCheck10">Kramery Chris <span class="float-right">(57)</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

