<?php

/* @var  \common\models\UserInfo $model */

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title="Shaxsiy Ma'lumotlar";
?>
<div class="col-lg-12">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="userInfoUpdateButtons d-flex" style="flex-direction: row-reverse; letter-spacing: 1px; margin-bottom:20px ">
        <p>
            <?= Html::a("<i class='fa fa-lock'></i> Parolni O'zgartirish",['change-password','id'=>$model->id],
                [
                    'class' => 'btn btn-outline-danger',
                    'style'=>[
                        'display'=>'inline-block',
                    ],
                ]) ?>
        </p>
        <p>
            <?= Html::a("<i class='fa fa-phone'></i> Tel. Raqamni O'zg.",['number','id'=>$model->id],
                [
                    'class' => 'btn btn-outline-info',
                    'style'=>[
                        'display'=>'inline-block',
                    ],
                ]) ?>
        </p>
        <p>
            <?= Html::a('<i class="fa fa-save"> </i> Tahrirlash',['update','id'=>$model->id],
                [
                    'class' => 'btn btn-outline-success btn-shadow-primary',
                    'style'=>[
                        'display'=>'inline-block',

                    ],
                ]) ?>
        </p>

    </div>
    <?php
        echo DetailView::widget([
                'model'=>$model,
                'options'=>['class'=>'table table-responsive-sm '],
                'formatter'=>['class'=>'\yii\i18n\Formatter','nullDisplay'=>''],
                'attributes'=>[
                    'username',
                    [
                        'attribute'=>'Rasm',
                        'value'=>function($data){
                            return $data->user_photo;
                        }
                    ],
                    [
                        'attribute'=>'Telefon Raqam',
                        'value'=>function($data){
                            return $data->phone_number;
                        }
                    ],
                    'email',
                    [
                        'attribute'=>'Lavozim',
                        'value'=>function($data){
                            return $data->position;
                        }
                    ],
                    [
                        'attribute'=>'yosh',
                        'value'=>function($data){
                            return $data->age;
                        }
                    ],
                    [
                        'attribute'=>'Jinsi',
                        'value'=>function($data){
                            return $data->gender;
                        }
                    ],
                    [
                        'attribute'=>'Manzil',
                        'value'=>function($data){
                            return $data->location;
                        }
                    ]
                ]
        ]);
    ?>
</div>