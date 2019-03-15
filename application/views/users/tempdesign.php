<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TempDesign</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('/assets/css/uikit.min.css') ?>">
	<!-- <link rel="stylesheet" href="assets/css/uikit.min.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500|Open+Sans:300,400,600|Poppins:300,400,500|Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
	<!-- typed js -->
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
	<!-- <link rel="stylesheet" href="assets/css/style.css"> -->
	<link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
</head>
<body>
	<div class="uk-section-primary uk-preserve-color" style="background: url('<?= base_url('/assets/images/images (4).jpeg') ?>');" id="background">
		<div class="bg-color">
	        <div>

	            <nav class="uk-navbar-container uk-navbar-transparent uk-light">
	            	
	                <div class="uk-container uk-navbar-left uk-container-expand " >
	                    <div uk-navbar>
					        <a href="#mobile-nav" class="uk-navbar-toggle" uk-toggle>
					            <span class="uk-hidden@s uk-parent" uk-navbar-toggle-icon></span>
					        </a>
					        <a class="uk-navbar-item uk-text-warning uk-logo" href="<?= base_url('') ?>">TempDesign</a>
                        	<ul  class="uk-navbar-nav uk-visible@s uk-nav-parent-icon" uk-scrollspy-nav="closest: li; scroll: true; offset:80">
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
	                            <li><a href="<?php echo base_url('Contect'); ?>">contect</a></li>
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

	        <div class="uk-section uk-light background">
	            <div class="uk-container uk-container-xsmall " >
	               <h1 class="uk-text-bold uk-text-center heading">TempDesign.com</h1>
					<h2 class="sub-heading uk-text-center">Made with awsome framework like <span id="typed" style="color: #ffb732">Bootstrap.</span></h2>
	               <!-- <button class="uk-button uk-margin-large uk-button-default uk-button-large">get started</button> -->
	            </div>
	        </div>
        </div>
    </div>


    <div class="uk-section " id="intro">
	    <div class="uk-container uk-text-center uk-container-small">

	        <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
	            <div>
					<h1>Forever free, open source and easy to use</h1>
					<p>Use our <strong>template</strong> free for any project, personal or commercial. All of the item your see are built in the <strong>HTML5, CSS3 and Bootstrap or MaterializeCSS or other awsome freamworks</strong>.</p>
	            </div>
	            
	        </div>
	        <hr class="uk-divider-small">

	    </div>
	</div>


	<div class="uk-section" id="template">
	    <div class="uk-container">

	        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
	            <div>
						<div class="uk-card uk-box-shadow-hover-large uk-card-default uk-card-small">
							<div class="uk-card-media-top">
								<a class="uk-link-reset" href="<?= base_url('Template') ?>">
									<img src="<?= base_url('/assets/images/rawpixel-740331-unsplash.jpg') ?>" alt="">
								</a>
							</div>
							<div class="uk-card-body">
								<a class="uk-link-reset" href="<?= base_url('Template') ?>">
									<h3 class="uk-card-title uk-margin-remove" uk-tooltip="Preview & Download">creative page</h3>
								</a>
								<p class="uk-margin-remove">A page creative theme</p>
							</div>
						</div>
	            </div>
	            <div>
					<div class="uk-card uk-card-default uk-box-shadow-hover-large uk-card-small">
			            <div class="uk-card-media-top">
			                <img src="<?= base_url('assets/images/rawpixel-777256-unsplash.jpg') ?>" alt="">
			            </div>
			            <div class="uk-card-body">
			                <h3 class="uk-card-title uk-margin-remove">creative page</h3>
							<p class="uk-margin-remove">A page creative theme</p>
			            </div>
			        </div>
	            </div>
	            <div>
					<div class="uk-card uk-card-default uk-box-shadow-hover-large uk-card-small">
			            <div class="uk-card-media-top">
			                <img src="<?= base_url('assets/images/kat-stokes-1157386-unsplash (1).jpg') ?>" alt="">
			            </div>
			            <div class="uk-card-body">
			                <h3 class="uk-card-title uk-margin-remove">creative page</h3>
							<p class="uk-margin-remove">A page creative theme</p>
			            </div>
			        </div>
	            </div>


	            <div>
					<div class="uk-card uk-card-default uk-box-shadow-hover-large uk-card-small">
			            <div class="uk-card-media-top">
			                <img src="<?= base_url('assets/images/aaron-burden-521422-unsplash.jpg') ?>" alt="">
			            </div>
			            <div class="uk-card-body">
			                <h3 class="uk-card-title uk-margin-remove">creative page</h3>
							<p class="uk-margin-remove">A page creative theme</p>
			            </div>
			        </div>
	            </div>
	            <div>
					<div class="uk-card uk-card-default uk-box-shadow-hover-large uk-card-small">
			            <div class="uk-card-media-top">
			                <img src="<?= base_url('assets/images/brooke-cagle-609874-unsplash.jpg') ?>" alt="">
			            </div>
			            <div class="uk-card-body">
			                <h3 class="uk-card-title uk-margin-remove">creative page</h3>
							<p class="uk-margin-remove">A page creative theme</p>
			            </div>
			        </div>
	            </div>
	            <div>
					<div class="uk-card uk-card-default uk-box-shadow-hover-large uk-card-small">
			            <div class="uk-card-media-top">
			                <img src="<?= base_url('assets/images/mockaroon-1333365-unsplash.jpg') ?>" alt="">
			            </div>
			            <div class="uk-card-body">
			                <h3 class="uk-card-title uk-margin-remove">creative page</h3>
							<p class="uk-margin-remove">A page creative theme</p>
			            </div>
			        </div>
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
	            <!-- <hr class="uk-divider-icon"> -->
	        </div>
	        <div class="uk-margin-large-top">
	        	<!-- <span class="uk-align-right">© 2019 TempDesign. All rights reserved.</span> -->
	        	<!-- <a href="#!" class="uk-link-reset uk-align-left"><i class="fas fa-paper-plane"></i></a>
				<a href="#!" class="uk-link-reset uk-align-left"><i class="fas fa-paper-plane"></i></a> -->
	        </div>
	    </div>
	</div>

	<div class="uk-section uk-section-xsmall uk-section-muted">
	    <div class="uk-container">
	        <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
	            <!-- <div>
	            	<h2>Templates</h2>
	            	<span>Bootstrap</span>
	            	<span>Materialize css</span>
	            	<span>Bulma</span>
	            	<span>Uikit</span>
	            </div> -->
	            <div>
	            	<span class="uk-align-right">© 2019 TempDesign. All rights reserved.</span>
					<!-- <a href="#!" style="display: inline;" class="uk-link-reset"><i class="fas fa-paper-plane"></i></a>
					<a href="#!" style="display: inline;" class="uk-link-reset"><i class="fas fa-paper-plane"></i></a> -->
	            </div>
	            
	        </div>

	    </div>
	</div>



	<script src="<?= base_url('/assets/js/uikit.min.js') ?>"></script>
	<script src="<?= base_url('/assets/js/uikit-icon.min.js') ?>"></script>
	<script>
		var typed3 = new Typed('#typed', {
		    strings: ['Bootstrap', 'Materialize CSS', 'Bulma', 'Uikit'],
		    typeSpeed: 0,
		    backSpeed: 0,
		    // fadeOut: true,
		    shuffle: true,
		    cursorChar: '_',
		    smartBackspace: true, // this is a default
		    loop: true
		  });
	</script>
</body>
</html>