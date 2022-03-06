<?php

use common\models\Course;
use common\models\Video;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/** @var $model common\models\Video */
?>
<?php
    $course_title=Course::find()->all();
    $prompt=[ 'prompt'=>'Select cours category...'];
    $items=ArrayHelper::map($course_title,'id','course_title');
?>
<div class="col-lg-12">
    <div class="dashboard_navigationbar dn db-1199">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
            <ul id="myDropdown" class="dropdown-content">
                <li><a href="<?= Url::to(['/site/index'])?>"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
                <li><a href="<?= Url::to(['/course/index'])?>"><span class="flaticon-online-learning"></span> My Courses</a></li>
                <li class="active"><a href="<?= Url::to(['/video/index'])?>"><span class="flaticon-elearning-1"></span> Order</a></li>
                <li><a href="#"><span class="flaticon-speech-bubble"></span> Messages</a></li>
                <li><a href="#"><span class="flaticon-rating"></span> Reviews</a></li>
                <li><a href="#"><span class="flaticon-like"></span> Bookmarks</a></li>
                <li><a href="<?= Url::to(['video/create'])?>>"><span class="flaticon-pencil"></span> Add Video</a></li>
                <li><a href="<?= Url::to(['course/create'])?>"><span class="flaticon-add-contact"></span> Add Course</a></li>
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
                            'options'=>['enctype' => 'multipart/form-data']
                    ])?>
                    <div class="row my_setting_content_details pb0">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <?= $form->field($model,'video_title')->textInput(['class'=>'form-control','placeholder'=>'video title...'])?>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="my_profile_setting_input form-group">
                                        <?= $form->field($model,'video_url')->textInput(['class'=>'form-control','placeholder'=>'https://www.youtube.com/watch....'])?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my_setting_content_details">
                        <div class="col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <?= $form->field($model,'course_id')->dropDownList($items,$prompt)?>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <?= $form->field($model,'status')->dropDownList([
                                        0 => 'UN_PUBLISHED',
                                        1 => 'PUBLISHED'
                                ])?>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="my_resume_textarea">
                                <div class="form-group">
                                    <?= $form->field($model,'video_description')->textarea(['rows'=>7,'placeholder'=>'Video Description...'])?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my_setting_content_details">
                        <div class="col-lg-12">
                            <?= Html::submitButton('Save <span class="flaticon-right-arrow-1 ml-15"><span> ',['class'=>'my_setting_savechange_btn btn btn_thm'])?>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
