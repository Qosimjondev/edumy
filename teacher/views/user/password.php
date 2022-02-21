<?php
/* @var $model \common\models\Info */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title="Update user password";
?>
<div class="col-lg-12">
    <div class="user-info-update">
        <h3><?= Html::encode($this->title) ?></h3>

        <div class="row">
            <div class="col-lg-6">
                <?php $form = ActiveForm::begin(); ?>

                <?php echo $form->field($model,'password')->input('password',['minlength'=>8])?>
                <?php echo $form->field($model,'password_repeat')->input('password')?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 d-flex flex-row" style="letter-spacing: 1px">
                <p>
                    <?= Html::submitButton('<i class="fa fa-save"> </i> Saqlash',
                        [
                            'class' => 'btn btn-outline-success btn-shadow-primary',
                            'style'=>[
                                'margin-right'=>'10px'
                            ],
                        ]) ?>
                </p>
                <p>
                    <?= Html::a('Bekor qilish',['setting'],
                        [
                            'class' => 'btn btn-outline-danger',
                            'style'=>[

                            ],
                        ]) ?>
                </p>
            </div>
            <?php  ActiveForm::end(); ?>
        </div>
    </div>
</div>
