<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserInfo */

$this->title = 'Update User Info ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'User Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
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
            <?= Html::a('<i class="fa fa-save"> </i> Saqlash',['update','id'=>$model->id],
                [
                    'class' => 'btn btn-outline-success btn-shadow-primary',
                    'style'=>[
                        'display'=>'inline-block',

                        ],
                ]) ?>
        </p>

    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
