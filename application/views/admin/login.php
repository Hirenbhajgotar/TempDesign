<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TempDesign | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('assets/css/uikit.min.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500|Open+Sans:300,400,600|Poppins:300,400,500|Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
	<link rel="stylesheet" href="<?= base_url('assets/admin/css/admin_style.css') ?>">
</head>
<body style="background-image: linear-gradient(to right top, #493267, #4a2f6b, #4a2b6f, #4b2772, #4c2276, #442173, #3c2171, #33206e, #212162, #121f54, #071d46, #051937);">

	<div class="uk-section uk-section-small login_page">
		<div class="uk-container">

		    <div class="uk-flex uk-flex-center uk-margin-bottom">
		    	<?php
					if ($msg = $this->session->flashdata('msg')) {
							if (isset($msg)) {
								$message = $msg;
								?>
								<div class="uk-alert-danger uk-animation-slide-top" uk-alert>
							    	<a class="uk-alert-close" uk-close></a>
								    <p class="uk-margin-right"><i class="fas fa-exclamation-circle"></i> <?php echo $message ?></p>
								</div>
								<?php
							}
						}	
					
					?>
		    </div>

		    <div class="uk-flex uk-flex-center">
		    	<p class="uk-text-bold heading">TempDesign</p>
		    </div>
		    <div class="uk-flex uk-flex-center">
				<div class="uk-card uk-card-default uk-card-small uk-border-rounded uk-card-body uk-width-1-4@m">
				    <!-- <h3 class="uk-card-title">Default</h3> -->
						
						<!-- <form class="uk-form-stacked"> -->
						<?= form_open('admin/login',['class'=>'uk-form-stacked']) ?>
						    <fieldset class="uk-fieldset">

						        <legend class="uk-legend uk-text-bold">Login</legend>
							    <p class="uk-text-meta">Login to your account</p>

						        <div class="uk-margin">
                                    <label class="uk-form-label" for="email">Email</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="email" name="email" type="email" placeholder="Your Email...">
                                    </div>
                                    <?= form_error('email') ?>
						        </div>

						        <div class="uk-margin">
                                    <label class="uk-form-label" for="password">Password</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="password" name="password" type="password" placeholder="Your Password...">
                                    </div>
                                    <?= form_error('password') ?>
						        </div>
								
								<button type="submit" class=" uk-width-1-1 uk-button uk-border-rounded">Login</button>
						    	
						    </fieldset>
						<!-- </form> -->
						<?= form_close() ?>
				</div>
			    
			</div>
			<div class="uk-flex uk-flex-center uk-margin-top">
				<p class="uk-text-center uk-text-meta sec_color"><a href="#!" class="uk-link-reset">Forgon Password?</a></p>
			</div>
			<div class="uk-flex uk-flex-center">
		    	<p class="uk-text-center uk-text-meta">Do not have an account? <a href="<?= base_url('Admin/signin') ?>" class="sec_color">Sign in</a></p>
			</div>
		</div>
	</div>







	<script src="<?= base_url('assets/admin/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js" integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
	<script src="<?= base_url('assets/js/uikit.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/uikit-icons.min.js') ?>"></script>
	<script src="<?= base_url('assets/admin/js/admin_script.js') ?>"></script>
</body>
</html>