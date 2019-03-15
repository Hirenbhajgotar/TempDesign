<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TempDesign</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('assets/css/uikit.min.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500|Open+Sans:300,400,600|Poppins:300,400,500|Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
	<div id="carousel_section" class="uk-section-primary uk-preserve-color" style="background: url('assets/images/images (4).jpeg');">
		<div class="bg-color">
	        <div>

	            <nav class="uk-navbar-container uk-navbar-transparent uk-light">
	            	
	                <div class="uk-container uk-navbar-left uk-container-expand" >
	                    <div uk-navbar>
					        <a href="#mobile-nav" class="uk-navbar-toggle" uk-toggle>
					            <span class="uk-hidden@s uk-parent" uk-navbar-toggle-icon></span>
					        </a>
					        <a class="uk-navbar-item uk-text-warning uk-logo" href="<?= base_url('') ?>">TempDesign</a>
                        	<ul  class="uk-navbar-nav uk-visible@s" uk-scrollspy-nav="closest: li; scroll: true; offset:80">
	                            <li><a href="#!">about</a></li>
	                            <li><a href="#!">templates</a></li>
	                            <div uk-dropdown="offset: 0">
								    <ul class="uk-nav uk-dropdown-nav">
								        <li><a href="#">All framework</a></li>
								        <li class="uk-nav-divider"></li>
								        <li><a href="#">Bootstrap</a></li>
								        <li><a href="#">Materialize css</a></li>
								        <li><a href="#">Bulma</a></li>
								        <li><a href="#">Uikit</a></li>
								        <!-- <li><a href="#">Othe framework</a></li> -->
								    </ul>
								</div>
	                            <li class="uk-active"><a href="<?= base_url('Contect') ?>">contect</a></li>
	                        </ul>
	                    </div>
						

						<!-- mobile nav -->
						<div id="mobile-nav" class="uk-modal-container"  uk-modal>
						    <div class="uk-modal-dialog uk-modal-body">
						        <button class="uk-modal-close-default" type="button" uk-close></button>
						        <h5 class=" uk-text-uppercase get_start">get started</h5>
						        <hr>

						        <h5 class="uk-text-uppercase template">templates</h5>
						        <div class="uk-child-width-1-2 uk-grid-small" uk-grid>
								    <div>
										<span><a href="#!" class="uk-link-reset frameworks">All framework</a></span>
								    </div>
								    <div>
										<span><a href="#!" class="uk-link-reset frameworks">Bootstrap</a></span>
								    </div>
								    <div>
										<span><a href="#!" class="uk-link-reset frameworks">Materialize css</a></span>
								    </div>
								    <div>
										<span><a href="#!" class="uk-link-reset frameworks">Bulma</a></span>
								    </div>
								    <div>
										<span><a href="#!" class="uk-link-reset frameworks">Uikit</a></span>
								    </div>
								</div>
								<hr>
								<h5 class="uk-text-uppercase uk-margin"><a class="uk-link-reset about" href="#!">About</a></h5>
								<h5 class="uk-text-uppercase uk-margin-remove"><a class="uk-link-reset contect" href="#!">Contect</a></h5>
						    	<hr>
						    	<!-- search -->
								<form class="uk-search uk-search-navbar">
					                <span uk-search-icon></span>
					                <input class="uk-search-input" type="search" placeholder="Search...">
					            </form>
						    </div>
						</div>

						
	                
						<!-- search -->
						<div class="nav-overlay uk-navbar-right uk-visible@s">

					        <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

					    </div>
					    <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

					        <div class="uk-navbar-item uk-width-expand">
					            <form class="uk-search uk-search-navbar uk-width-1-1">
					                <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
					            </form>
					        </div>

					        <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
					    </div>
				    </div>
	            </nav>
	        </div>

	        <div class=" uk-light background">
	            <div class="uk-container " >
	               <h3 class="uk-text-bold uk-margin-remove heading">Contect</h3>
					<h5 class="conect-sub-heading uk-text-muted uk-margin-remove">
						Contect us if you have suggestions for a new template, have feedaback for us, or if you need help
					</h5>
	            </div>
	        </div>
        </div>
    </div>



	<div class="uk-section">
	    <div class="uk-container">

	        <div class="uk-flex uk-flex-middle" uk-grid>
	            <div class="uk-width-expand@m ">
					<img data-src="<?= base_url('assets/images/undraw_contact_us_15o2.svg') ?>" class="uk-background-cover" onerror="this.src='<?= base_url('assets/images/undraw_experts3_3njd.png') ?>'" alt="" uk-img>
	            </div>
	            <div class="uk-width-1-2@m">
					<!-- <div class="uk-tile uk-tile-muted"> -->
						<form>
						    <fieldset class="uk-fieldset">

						        <div class="uk-margin">
						            <input class="uk-input uk-form-large" type="text" placeholder="Your name">
						        </div>
						        <div class="uk-margin">
						            <input class="uk-input uk-form-large" type="email" placeholder="Your email">
						        </div>
						        <div class="uk-margin">
						            <input class="uk-input uk-form-large" type="text" placeholder="Your subject">
						        </div>

						        <div class="uk-margin">
						            <textarea class="uk-textarea uk-form-large" rows="5" placeholder="Your message"></textarea>
						        </div>
						        <button class="uk-button uk-button-large uk-button-default">send message</button>

						    </fieldset>
						</form>
			        <!-- </div> -->
	            </div>
	        </div>
	    </div>
	</div>




	<!-- Contect -->
	<div class="uk-section" id="contect" >
	    <div class="uk-container ">

	        <h1 class="uk-text-center contect_head" style="color: #fff">Get in Touch</h1>
	        <hr class="uk-divider-small uk-text-center">

	        <div class="uk-grid-match uk-child-width-1-1@m uk-margin-large-top" uk-grid>
	            <div class=" uk-text-center uk-light">
	            	<h2 class="uk-margin-remove">Want more templates?</h2>
	            	<p class="uk-margin-remove uk-text-muted">Subscribe to get awsome framework related Templates</p>
					<form action="#!" class="uk-margin" uk-margin>
						<div class="">
					        <div class="uk-inline">
					            <a class="uk-form-icon uk-form-icon-flip " href="#"><i class="fas fa-paper-plane"></i></a>
					            <input class="uk-input uk-form-width-large uk-form-large" type="text" placeholder="Email address..">
					        </div>
					    </div>
					</form>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="uk-section uk-section-xsmall uk-section-muted">
	    <div class="uk-container">
	        <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
	            <div>
	            	<span class="uk-align-right">© 2019 TempDesign. All rights reserved.</span>
				</div>
	            
	        </div>

	    </div>
	</div>





	<script src="<?= base_url('assets/js/uikit.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/uikit-icons.min.js') ?>"></script>
</body>
</html>