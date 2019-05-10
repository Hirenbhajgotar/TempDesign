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
                    <a href="<?= base_url('Deshbord') ?>" class="uk-navbar-item uk-logo">
                        <!-- UI Admin -->
                        TempDesign 
                    </a>
                </div>
                <div class="uk-navbar-right uk-light">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active">
                            <a href="#">Hiren&nbsp;<i class="fas fa-angle-down"></i></a>
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
            <li><a href="<?= base_url('deshbord/subscription') ?>">Subscriptions</a></li>
            <li><a href="<?= base_url('deshbord/feedback') ?>">Feedback</a></li>
            
            <div class="uk-position-bottom">
                <hr class="uk-divider-small uk-text-center">
                
                <li><a href="<?= base_url('admin/logout') ?>" class="uk-text-center uk-link-reset uk-flex uk-flex-middle uk-margin-medium"><i class="fas fa-power-off"></i> Logout</a></li>
            </div>
        </ul>
    </div>


    <div class="content-padder content-background">
        <div class="uk-section uk-section-xsmall uk-section-default header">
            <div class="uk-container">
                <!-- <h1><span class="ion-speedometer"></span> Dashboard</h1> -->
                
                <ul class="uk-breadcrumb">
                    <li><a href="<?= base_url('Deshbord') ?>">Home</a></li>
                    <li><a href="<?= base_url('Deshbord') ?>">Deshbord</a></li>
                </ul>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-grid-match uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-4@xl">
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <span class="statistics-text"><a href="<?= base_url('Deshbord/templates') ?>" class="uk-link-reset">Templates</a></span><br />
                            <span class="statistics-number">
                                <?php 
                               echo $total_rows;
                                  
                                 ?>
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <span class="statistics-text">Website Traffic</span><br />
                            <span class="statistics-number">
                                123.2
                                <span class="uk-label uk-label-danger">
                                    13% <i class="fas fa-arrow-down"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <span class="statistics-text"><a href="<?= base_url('Deshbord/subscription') ?>" class="uk-link-reset">Subscription</a></span><br />
                            <span class="statistics-number">
                                <?= $subc_rows; ?>
                                <!-- <span class="uk-label uk-label-danger">
                                    13% <span class="ion-arrow-down-c"></span>
                                </span> -->
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <span class="statistics-text">Total Downloads</span><br />
                            <span class="statistics-number">
                                <?php
                                  // echo "<pre>";        
                                  //   print_r($total_downloads);
                                  //   echo "</pre>";
                                  //   exit;
                                      echo $total_downloads->download;
                                
                                
                                ?>
                                <span class="uk-label uk-label-success">
                                    89% <i class="fas fa-arrow-up"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                    
                    
                </div>
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@l">
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                Website Traffic
                            </div>
                            <div class="uk-card-body">
                                <canvas id="chart1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-header">
                                Website Traffic
                            </div>
                            <div class="uk-card-body">
                                <canvas id="chart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
    </div>










<?php include 'footer.php' ?>