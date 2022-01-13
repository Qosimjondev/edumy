<?php

use common\models\Video;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

?>
<div class="col-lg-12">
    <div class="dashboard_navigationbar dn db-1199">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
            <ul id="myDropdown" class="dropdown-content">
                <li><a href="#"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
                <li><a href="#"><span class="flaticon-online-learning"></span> My Courses</a></li>
                <li class="active"><a href="#"><span class="flaticon-shopping-bag-1"></span> Order</a></li>
                <li><a href="#"><span class="flaticon-speech-bubble"></span> Messages</a></li>
                <li><a href="#"><span class="flaticon-rating"></span> Reviews</a></li>
                <li><a href="#"><span class="flaticon-like"></span> Bookmarks</a></li>
                <li><a href="<?= Url::to(['video/create'])?>>"><span class="flaticon-pencil"></span> Video</a></li>
                <li><a href="<?= Url::to(['video/playlist'])?>"><span class="flaticon-add-contact"></span> Add listing</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-xl-12">
    <div class="row">
        <div class="col-lg-12">
            <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                <h4 class="title float-left">Add video</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/index'])?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Add Video</li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-12">
            <div class="my_course_content_container">
                <div class="my_setting_content mb30">
                    <div class="my_setting_content_header">
                        <div class="my_sch_title">
                            <h4 class="m0">Basic info</h4>
                        </div>
                    </div>
                    <?php $form=ActiveForm::begin([
                            'options'=>['enctype/multipart/form-data']
                    ])?>
                    <div class="row my_setting_content_details pb0">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <?= $form->field($video,'video_title')->textInput(['class'=>'form-control','placeholder'=>'video title...'])?>
<!--                                        <label for="formGroupExampleInput1">Video title</label>-->
<!--                                        <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="UX/UI">-->
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <?= $form->field($video,'video_url')->textInput(['class'=>'form-control','placeholder'=>'https://www.youtube.com/watch....'])?>
<!--                                        <label for="formGroupExampleInput3">Video URl</label>-->
<!--                                        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="https://www.example.com/watch">-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my_setting_content_details">
                        <div class="col-xl-6">
                            <div class="my_profile_select_box form-group">
                                <?= $form->field($video,'status')->dropDownList([
                                        Video::UN_PUBLISHED =>'UN_PUBLISHED',
                                        Video::PUBLISHED => 'PUBLISHED'
                                ],
                                ['class'=>'selectpicker'])?>
<!--                                <label for="exampleFormControlInput5">Category</label><br>-->
<!--                                <select class="selectpicker">-->
<!--                                    <option>0</option>-->
<!--                                    <option>1</option>-->
<!--                                </select>-->
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <?= $form->field($video,'course_title')->textInput(['class'=>'form-control','placeholder'=>'course title'])?>
<!--                                <label for="formGroupExampleInput3">Course title</label>-->
<!--                                <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="course title">-->
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="my_resume_textarea">
                                <div class="form-group">
                                    <?= $form->field($video,'video_description')->textarea(['rows'=>7,'placeholder'=>'Video Description...'])?>
<!--                                    <label for="exampleFormControlTextarea1">Video description</label>-->
<!--                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my_setting_content_details">
                        <div class="col-lg-12">
                            <?= Html::submitButton('Save <span class="flaticon-right-arrow-1 ml-15"><span> ',['class'=>'my_setting_savechange_btn btn btn_thm'])?>
<!--                            <button type="submit" class="my_setting_savechange_btn btn btn-thm">Save <span class="flaticon-right-arrow-1 ml15"></span></button>-->
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
