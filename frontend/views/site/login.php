<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Our LogIn Register -->
<section class="our-log bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <div class="login_form inner_page">
                    <?php $form = ActiveForm::begin(); ?>
                        <div class="heading">
                            <h3 class="text-center">Login to your account</h3>
                            <p class="text-center">Don't have an account? <a class="text-thm" href="page-register.html">Sign Up!</a></p>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'username')->textInput(['class'=>'form-control', 'placeholder'=>'Username'])->label(false) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'password')->textInput(['class'=>'form-control', 'placeholder'=>'Password'])->label(false) ?>
                        </div>

<!--                    <div class="form-group custom-control custom-checkbox">-->
                        <?= $form->field($model, 'rememberMe')->checkbox() ?>

                        <?= Html::a('Forgot Password?', ['site/request-password-reset'], ['class'=>'tdu btn-fpswd float-right', 'style'=>'position:absolute;margin-left:22rem;margin-top:-2.5rem;'])?>

<!--                    </div>-->

                    <?= Html::submitButton('Login', ['class' => 'btn btn-log btn-block btn-thm2', 'name' => 'login-button']) ?>
                        <div class="divide">
                            <span class="lf_divider">Or</span>
                            <hr>
                        </div>
                        <div class="row mt40">
                            <div class="col-lg">
                                <button type="submit" class="btn btn-block color-white bgc-fb mb0"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                            </div>
                            <div class="col-lg">
                                <button type="submit" class="btn btn2 btn-block color-white bgc-gogle mb0"><i class="fa fa-google float-left mt5"></i> Google</button>
                            </div>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
