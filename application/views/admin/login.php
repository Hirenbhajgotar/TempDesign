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
	<link rel="stylesheet" href="<?= base_url('assets/admin/css/parsley.css') ?>">

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
				<div class="uk-card uk-card-default uk-border-rounded uk-card-body uk-width-1-3@m">
				    <!-- <h3 class="uk-card-title">Default</h3> -->
						
						<!-- <form class="uk-form-stacked"> -->
						<?= form_open('admin/login',['class'=>'uk-form-stacked', 'id'=>'form']) ?>
						    <fieldset class="uk-fieldset">

						        <legend class="uk-legend uk-text-bold">Login</legend>
							    <p class="uk-text-meta">Login to your account</p>

						        <div class="uk-margin">
                                    <!-- <label class="uk-form-label" for="email">Email</label> -->
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="email" name="email" type="email" placeholder="Your Email..." data-parsley-required data-parsley-type="email" data-parsley-trigger="keyup">
                                    </div>
                                    <?= form_error('email') ?>
						        </div>

						        <div class="uk-margin">
                                    <!-- <label class="uk-form-label" for="password">Password</label> -->
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="password" name="password" type="password" placeholder="Your Password..." data-parsley-required data-parsley-length="[3, 25]" data-parsley-pattern="^[a-zA-Z0-9_]*$" data-parsley-trigger="keyup">
                                    </div>
                                    <?= form_error('password') ?>
						        </div>
								<div class="uk-margin-large-top uk-margin-bottom uk-flex uk-flex-center">
									<button type="submit" class="login-btn uk-flex uk-flex-middle uk-button"><i class="fas fa-check-circle"></i>&nbsp;Login</button>
									<button type="reset" class="login-csl-btn uk-flex uk-flex-middle uk-button"><i class="far fa-times-circle"></i>&nbsp;cancle</button>
								</div>
						    		
		    					<p class="uk-text-center uk-text-meta uk-margin-remove sec_color"><a href="#!" class="uk-link-reset">Forgon Password?</a></p>
						    	<p class="uk-text-center uk-text-meta uk-margin-remove">Do not have an account? <a href="<?= base_url('Admin/signup') ?>" class="sec_color">Sign up</a></p>

						    </fieldset>
						<!-- </form> -->
						<?= form_close() ?>
				</div>
			    
			</div>
			<!-- <div class="uk-flex uk-flex-center uk-margin-top">
				<p class="uk-text-center uk-text-meta sec_color"><a href="#!" class="uk-link-reset">Forgon Password?</a></p>
			</div>
			<div class="uk-flex uk-flex-center">
		    	<p class="uk-text-center uk-text-meta">Do not have an account? <a href="<?= base_url('Admin/signup') ?>" class="sec_color">Sign up</a></p>
			</div> -->
		</div>
	</div>




<?php include 'footer.php' ?>

<!-- preventing form resubmission -->
<!-- <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script> -->