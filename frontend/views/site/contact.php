<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;

?>

	<!-- How It's Work -->
	<section class="our-contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-placeholder-1"></span></div>
						<h4>Our Location</h4>
						<p>Collin Street West, Victor 8007, Australia.</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-phone-call"></span></div>
						<h4>Our Location</h4>
						<p class="mb0">Mobile: (+096) 468 235 <br> Fax: (+096) 468 235</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-email"></span></div>
						<h4>Write Some Words</h4>
						<p><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="551c3b333a15303120382c7b363a38">[email&#160;protected]</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="h600" id="map-canvas"></div>
				</div>
				<div class="col-lg-6 form_grid">
					<h4 class="mb5">Send a Message</h4>
					<p>Ex quem dicta delicata usu, zril vocibus maiestatis in qui.</p>
		            <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
						<div class="row">
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputName">Full Name</label>
									<input id="form_name" name="form_name" class="form-control" required="required" type="text">
								</div>
			                </div>
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputEmail">Your Email</label>
			                    	<input id="form_email" name="form_email" class="form-control required email" required="required" type="email">
			                    </div>
			                </div>
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputSubject">Subject</label>
				                    <input id="form_subject" name="form_subject" class="form-control required" required="required" type="text">
								</div>
			                </div>
			                <div class="col-sm-12">
	                            <div class="form-group">
	                            	<label for="exampleInputEmail1">Your Message</label>
	                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required"></textarea>
	                            </div>
			                    <div class="form-group ui_kit_button mb0">
				                    <button type="button" class="btn dbxshad btn-lg btn-thm circle white">Button</button>
			                    </div>
			                </div>
		                </div>
		            </form>
				</div>
			</div>
		</div>
	</section>
