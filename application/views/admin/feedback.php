<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TempDesign | Admin Deshbord</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('assets/css/uikit.min.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500|Open+Sans:300,400,600|Poppins:300,400,500|Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
	<link rel="stylesheet" href="<?= base_url('assets/admin/css/admin_style.css') ?>">
</head>
<body>
	<!-- navbar -->

	<div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
        <div class="uk-container uk-container-expand">
            <nav uk-navbar>
                <div class="uk-navbar-left">
                    <a id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon ></a>
                    <a href="#" class="uk-navbar-item uk-logo">
                        <!-- UI Admin -->
                        TempDesign 
                    </a>
                </div>
                <div class="uk-navbar-right uk-navbar-item uk-light">
                    <ul class="uk-navbar-nav uk-visible@s">
                        <li class="uk-active">
                            <a href="#" class="uk-flex uk-flex-middle">Hiren&nbsp;<i class="fas fa-angle-down"></i></a>
                            <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                               <ul class="uk-nav uk-navbar-dropdown-nav">
                                   <li class="uk-nav-header">Options</li>
                                   <li><a href="#">Edit Profile</a></li>
                                   <li class="uk-nav-header">Actions</li>
                                   <li><a href="#">Lock</a></li>
                                   <li><a href="<?= base_url('Admin/logout') ?>">Logout</a></li>
                               </ul>
                            </div>
                        </li>
                        <li></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

	<div id="sidebar" class="uk-dark tm-sidebar-left uk-background-default">
        <center>
            <div class="user">
                <div class="uk-margin-top"></div>
                <div id="name" class="uk-text-truncate">Deshbord</div>
                <hr>
            </div>
            <br />
        </center>
        <ul class="uk-nav uk-nav-default">

            <li class="uk-nav-header uk-flex uk-flex-middle">
                <span uk-icon="link"></span> Links
            </li>
            <li><a href="<?= base_url('Deshbord/templates') ?>">Templates</a></li>
            <li><a href="<?= base_url('Deshbord/subscription') ?>">Subscriptions</a></li>
            <li class="uk-active"><a href="<?= base_url('Deshbord/feedback') ?>">Feedback</a></li>
            
            <div class="uk-position-bottom">
                <hr class="uk-divider-small uk-text-center">
                <li><a href="<?= base_url('Admin/logout') ?>" class="uk-text-center uk-link-reset uk-flex uk-flex-middle uk-margin-medium">Logout <i class="fas fa-power-off"></i></a></li>
            </div>
        </ul>
    </div>


    <div class="content-padder content-background">
        <div class="uk-section uk-section-small uk-section-default header">
            <div class="uk-container uk-container-large">
                <h2 class="ad_heading"><i class="fas fa-user-edit"></i> Feedback</h2>
                
                <ul class="uk-breadcrumb">
                    <li><a href="<?= base_url('deshbord') ?>">Home</a></li>
                    <li><a href="<?= base_url('deshbord') ?>">Deshbord</a></li>
                    <li><a href="<?= base_url('deshbord/feedback') ?>">Feedback</a></li>
                </ul>
            </div>
        </div>
        <div class="uk-section ">
            <div class="uk-container uk-container-small">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@l">
                    <div>
                        <article class="uk-comment uk-visible-toggle uk-margin-large-bottom" tabindex="-1">
                            <header class="uk-comment-header uk-position-relative">
                                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="uk-comment-avatar" src="<?= base_url('assets/images/man.svg') ?>" width="80" height="80" alt="">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Bhajgotar Hiren</a></h4>
                                        <h4 class=" uk-margin-remove"><a href="#!" class="uk-link-reset">bhajgotarhiren@gmail.com</a></h4>

                                    </div>
                                </div>
                                <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
                            </header>
                            <div class="uk-comment-body">
                                <h4 class=" uk-margin-remove uk-heading-bullet uk-text-truncate uk-width-1-2@s">Subject Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="uk-comment-meta ">12 days ago</p>
                            <hr>
                        </article>

                        <article class="uk-comment uk-visible-toggle" tabindex="-1">
                            <header class="uk-comment-header uk-position-relative">
                                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="uk-comment-avatar" src="<?= base_url('assets/images/man.svg') ?>" width="80" height="80" alt="">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Bhajgotar Hiren</a></h4>
                                        <h4 class=" uk-margin-remove"><a href="#!" class="uk-link-reset">bhajgotarhiren@gmail.com</a></h4>
                                    </div>
                                </div>
                                <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
                            </header>
                            <div class="uk-comment-body">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                            <p class="uk-comment-meta ">12 days ago</p>
                            <hr>
                        </article>
                    </div>
                   
                </div>
                
            </div>
        </div>




        
        






				
		<h1>hien</h1>

		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>

		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>

		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>
		<h1>hien</h1>



    </div>












<?php include 'footer.php' ?>