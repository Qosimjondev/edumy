<?php
/* @var $model \common\models\UserInfo */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title="Update user phone number";
?>
<div class="col-lg-12">
    <div class="user-info-update">
        <h3><?= Html::encode($this->title) ?></h3>
        <div class="userInfoUpdateButtons d-flex" style="flex-direction: row-reverse; letter-spacing: 1px;">
            <p>
                <?= Html::a('Bekor qilish',['setting'],
                    [
                        'class' => 'btn btn-outline-danger',
                        'style'=>[
                            'display'=>'inline-block',
                            'margin-left'=>'10px'
                        ],
                    ]) ?>
            </p>
            <p>
                <?= Html::submitButton('<i class="fa fa-save"> </i> Saqlash',
                    [
                        'class' => 'btn btn-outline-success btn-shadow-primary',
                        'style'=>[
                            'display'=>'inline-block',

                        ],
                    ]) ?>
            </p>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <?php $form = ActiveForm::begin(); ?>

                <?php $form->field($model,'phone_number')?>

                <?php  ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>