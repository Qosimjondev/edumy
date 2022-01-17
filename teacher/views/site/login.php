<?php

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\widgets\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';

?>

<div class="col-lg-12">
<div class="site-login">
    <div class="mt-4 offset-lg-2 col-lg-6">
        <h1><?= Html::encode($this->title) ?></h1>

        <?php $form = ActiveForm::begin([
                'id' => 'login-form',
//                'encodeErrorSummary' => false,
                'errorSummaryCssClass' => 'help-block'
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <?= Html::errorSummary($model) ?>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
</div>