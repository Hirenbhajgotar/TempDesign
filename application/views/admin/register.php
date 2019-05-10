<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TempDesign | Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- uikit -->
	<link rel="stylesheet" href="<?= base_url('assets/css/uikit.min.css') ?>">

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500|Open+Sans:300,400,600|Poppins:300,400,500|Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,700" rel="stylesheet">
    
	<!-- font awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
	<!-- parsley css -->
	<link rel="stylesheet" href="<?= base_url('assets/admin/css/parsley.css') ?>">
	
	<!-- custome style -->
	<link rel="stylesheet" href="<?= base_url('assets/admin/css/admin_style.css') ?>">
</head>
<body style="background-image: linear-gradient(to right top, #493267, #4a2f6b, #4a2b6f, #4b2772, #4c2276, #442173, #3c2171, #33206e, #212162, #121f54, #071d46, #051937);">

	<div class="uk-section uk-section-small register_page">
		<div class="uk-container">

		    <div class="uk-flex uk-flex-center">
		    	<p class="uk-text-bold heading">TempDesign</p>
		    </div>
		    <div class="uk-flex uk-flex-center">
				<div class="uk-card uk-card-default uk-card-small uk-border-rounded uk-card-body uk-width-1-3@m">
				    <!-- <h3 class="uk-card-title">Default</h3> -->
						
						<!-- <form class="uk-form-stacked"> -->
						<?= form_open('admin/signup',['class'=>'uk-form-stacked', 'id'=>'register_form']) ?>
						    <fieldset class="uk-fieldset">

						        <legend class="uk-legend uk-text-bold">Register</legend>
							    <p class="uk-text-meta">Create your account</p>

								<div class="uk-margin">
						            <!-- <input class="uk-input" type="text" placeholder="Username"> -->
                                    <label class="uk-form-label" for="username">Username</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="username" name="username" type="text" placeholder="Your Username..." data-parsley-required data-parsley-length="[4, 15]" data-parsley-trigger="keyup" data-parsley-pattern="^[a-zA-Z0-9_]*$">
                                    </div>
                                    <?= form_error('username') ?>
                                </div>
						        <div class="uk-margin">
                                    <label class="uk-form-label" for="email">Email</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="email" name="email" type="text" placeholder="Your Email..." data-parsley-required data-parsley-type="email" data-parsley-trigger="keyup">
                                    </div>
                                    <?= form_error('email') ?>
						        </div>

						        <div class="uk-margin">
                                    <label class="uk-form-label" for="password">Password</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="password" name="password" type="password" placeholder="Your Password..." data-parsley-required data-parsley-length="[3, 25]" data-parsley-pattern="^[a-zA-Z0-9_]*$" data-parsley-trigger="keyup">
                                    </div>
                                    <?= form_error('password') ?>
						        </div>
								
								<div class="uk-margin-large-top uk-margin-bottom uk-flex uk-flex-center">
									<button type="submit" class="register-btn uk-flex uk-flex-middle uk-button"><i class="fas fa-check-circle"></i>&nbsp;Create Account</button>
									<button type="reset" class="register-csl-btn uk-flex uk-flex-middle uk-button"><i class="far fa-times-circle"></i>&nbsp;reset</button>
								</div>
		    			    	
		    			    	<p class="uk-text-center uk-text-meta">Already have an account? <a href="<?= base_url('Admin/login') ?>" class="sec_color">Login</a></p>
								
						    </fieldset>
						<!-- </form> -->
						<?= form_close() ?>
				</div>
			    
			</div>
			<!-- <div class="uk-flex uk-flex-center uk-margin-top">
		    	<p class="uk-text-center uk-text-meta">Already have an account? <a href="<?= base_url('Admin/login') ?>" class="sec_color">Login</a></p>
			</div> -->
		</div>
	</div>





<?php include 'footer.php' ?>