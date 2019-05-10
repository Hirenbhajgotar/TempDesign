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
                <div class="uk-navbar-right uk-navbar-item uk-light">
                    <!-- <button uk-toggle="target: #add_temp_modal" class="uk-button uk-visible@s uk-button-default uk-flex uk-flex-middle" style="border-radius: 500px">Add template &nbsp;<span uk-icon="plus-circle"></span></button> -->
                    <ul class="uk-navbar-nav uk-visible@s">
                        <li class="uk-active">
                            <a href="#">Hiren&nbsp;<i class="fas fa-angle-down"></i></a>
                            <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                               <ul class="uk-nav uk-navbar-dropdown-nav">
                                   <li class="uk-nav-header">Options</li>
                                   <li><a href="#">Edit Profile</a></li>
                                   <li class="uk-nav-header">Actions</li>
                                   <li><a href="#">Lock</a></li>
                                   <!-- <li><a href="#">Logout</a></li> -->
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
            <li class="uk-active"><a href="<?= base_url('Deshbord/templates') ?>">Templates</a></li>
            <li><a href="<?= base_url('Deshbord/subscription') ?>">Subscriptions</a></li>
            <li><a href="<?= base_url('Deshbord/feedback') ?>">Feedback</a></li>
            
            <!-- <div class="uk-position-bottom">
                <hr class="uk-divider-small uk-text-center">
                
                <li><a href="#!" class="uk-text-center uk-link-reset uk-flex uk-flex-middle uk-margin-medium">Logout <i class="fas fa-power-off"></i></a></li>
            </div> -->
        </ul>
    </div>


    <div class="content-padder content-background">
        <div class="uk-section uk-section-small uk-section-default header">
            <div class="uk-container">
                <h2 class="ad_heading"><i class="fas fa-plus-circle"></i>Add Template</h2>
                
                <ul class="uk-breadcrumb">
                    <li><a href="<?= base_url('Deshbord') ?>">Home</a></li>
                    <li><a href="<?= base_url('Deshbord') ?>">Deshbord</a></li>
                    <li><a href="<?= base_url('Deshbord/templates') ?>">Template</a></li>
                    <li><a href="<?= base_url('Template/add_template') ?>">Add template</a></li>
                </ul>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@l">
                    <div>
                        <form class="uk-grid-small" uk-grid action="<?= base_url('Template/add_template_data') ?>" method="post" enctype="multipart/form-data">
                            
                            <div class="uk-width-1-2@s">
                                <!-- <input name="temp_image" class="uk-input" type="text" placeholder="Template Image"> -->
                                <div uk-form-custom="target: true">
                                    <input type="file" name="temp_image">
                                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select template image" disabled>
                                    <?php
                                        if(isset($image_upload_error)){
                                            echo $image_upload_error;
                                        }
                                    ?>
                                </div>
                                
                                
                            </div>
                            <div class="uk-width-1-2@s">
                                <!-- <input name="temp_zip" class="uk-input" type="text" placeholder="Template Zip"> -->
                                <div uk-form-custom="target: true">
                                    <input type="file" name="temp_zip">
                                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select template zip file" disabled>
                                    <?php
                                        if(isset($zip_upload_error)){
                                            echo $zip_upload_error;
                                        }
                                        if (isset($zip_extract_error)) {
                                            echo $zip_extract_error;
                                        }

                                    ?>
                                </div>
                            </div>

                            <div class="uk-width-1-2@s">
                                <input name="temp_header" class="uk-input" type="text" placeholder="Template Heading">
                                <?= form_error('temp_header') ?>
                            </div>

                            <div class="uk-width-1-2@s">
                                <input name="temp_sub_header" class="uk-input" type="text" placeholder="Sub Heading">
                                <?= form_error('temp_sub_header') ?>
                            </div>
                            
                            <div class="uk-width-1-2@s">
                                <input name="freamwork_name" class="uk-input" type="text" placeholder="Freamwork Name">
                                <?= form_error('freamwork_name') ?>
                            </div>
                            <div class="uk-width-1-2@s">
                                <input name="freamwork_ver" class="uk-input" type="text" placeholder="Freamwork Version">
                                <?= form_error('freamwork_ver') ?>
                            </div>
                            <div class="uk-width-1-1">
                                <textarea name="description" class="uk-textarea" rows="5" placeholder="Description"></textarea>
                                <?= form_error('description') ?>
                            </div>
                            <div class="uk-text-left">
                        
                                <button type="submit" class="uk-button uk-button-primary">Submit</button>
                                <button type="reset" class="uk-button uk-button-danger">Cancle</button>
                            </div>
                        </form>
                    </div>
                   
                </div>
                
            </div>
        </div>

    </div>











<?php include 'footer.php' ?>