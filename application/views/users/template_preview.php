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

	<div id="template_section" class="uk-section-primary uk-preserve-color" style="background: url('<?= base_url('assets/images/images (4).jpeg') ?>');">
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
								        <li class="uk-active"><a href="#">All framework</a></li>
								        <li class="uk-nav-divider"></li>
								        <li><a href="#">Bootstrap</a></li>
								        <li><a href="#">Materialize css</a></li>
								        <li><a href="#">Bulma</a></li>
								        <li><a href="#">Uikit</a></li>
								        <!-- <li><a href="#">Othe framework</a></li> -->
								    </ul>
								</div>
	                            <li><a href="contect.html">contect</a></li>
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
								<h5 class="uk-text-uppercase uk-margin-remove"><a class="uk-link-reset contect" href="<?= base_url('Contect') ?>">Contect</a></h5>
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

	        <div class=" uk-light uk-margin-top background">
	            <div class="uk-container uk-flex uk-flex-middle" >
	               	<h1 class="uk-heading-bullet temp_heading">creative page</h1>
	            </div>
	        </div>
        </div>
    </div>



	<!-- template -->
	<div class="uk-section template">
	    <div class="uk-container">

	        <div class="" uk-grid>
	            <div class="uk-width-expand@m">
					<img class="uk-box-shadow-large uk-border-rounded" data-src="assets/images/rawpixel-777256-unsplash.jpg" uk-img alt="">
	            </div>
	            <div class="uk-width-1-3@m">
					<div class="uk-card uk-card-default uk-dark uk-background-muted uk-card-body">
						<button class="uk-button uk-button-large temp_download uk-button-default uk-width-1-1 uk-margin-small-bottom"><i class="fas fa-cloud-download-alt"></i> free download</button>
					    <button class="uk-button uk-button-large live_pre uk-button-default uk-width-1-1 uk-margin-small-bottom"><i class="far fa-eye"></i> live demo</button>
					</div>
					<div class="uk-margin">	
						<div class="uk-card uk-card-default uk-background-muted uk-card-body">
							<h4 class="uk-card-title">About Theme</h4>
							<hr>
							<table class="uk-table uk-table-justify uk-table-small">
							    
							    <tbody>
							        <tr>
							        	<th class="uk-text-capitalize">Framework</th>
							            <td>Uikit</td>
							        </tr>
							        <tr>
							        	<th class="uk-text-capitalize">Framework verson</th>
							            <td>3.1</td>
							        </tr>
							        <tr>
							        	<th class="uk-text-capitalize">Released</th>
							            <td>Feb 4, 2019</td>
							        </tr>
							        <tr>
							        	<th class="uk-text-capitalize">Browsers</th>
							            <td>chrome, firefox, safari, opera, ie11, ie10, ie9</td>
							        </tr>
							    </tbody>
							</table>
						</div>
					</div>
	            </div>	            
	        </div>

	        <div uk-grid>
	        	<div class="uk-width-1-1@m">
					<div class="uk-card uk-card-default uk-background-muted uk-card-body">
					    <h3 class="uk-card-title">Description</h3>
					    <hr>
						<p class="paragraph">
							Creative is a one page Bootstrap theme for creatives, small businesses, and other multipurpose use. A modern, flat design style works in unison with rich features and plugins making this theme a great boilerplate for your next Bootstrap based project!
						</p>
					</div>
				</div>
				
				<div class="uk-width-1-1@m">
					<div class="uk-card uk-card-default uk-background-muted uk-card-body">
					    <h3 class="uk-card-title">Features</h3>
					    <hr>
						<p class="">
							<ul class="uk-list uk-list-bullet paragraph">
							    <li>A modern, flat design layout</li>
							    <li>UX friendly navigation with an on scroll style change</li>
							    <li>Custom SASS compiled alongside Bootstrap for deeper customization options</li>
							    <li>Gulp 4 based development environment with a watch task for rapid custom development</li>
							    <li>Responsive, full page header featuring a background image with overlay and vertically centered content</li>
							    <li>Fully functional portfolio image grid with hover captions and a working lightbox gallery</li>
							    
							</ul>
						</p>
					</div>
				</div>

				<div class="uk-width-1-1@m">
					<div class="uk-card uk-card-default uk-background-muted uk-card-body">
					    <h3 class="uk-card-title">Credits and Sources:</h3>
					    <hr>
						<p class="">
							<ul class="uk-list paragraph uk-list-bullet">
								<li>Unsplash</li>
								<li>Font Awsome</li>
								<li>Jquery Library</li>
							</ul>
							
							
							
						</p>
					</div>
				</div>
	        </div>
	    </div>
	</div>

	


	<!-- footer -->
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