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
                    <button uk-toggle="target: #add_temp_modal" class="uk-button uk-visible@s uk-button-default uk-flex uk-flex-middle" style="border-radius: 500px">Add template &nbsp;<span uk-icon="plus-circle"></span></button>
                    <ul class="uk-navbar-nav uk-visible@s">
                        <li class="uk-active">
                            <a href="#">Hiren <span uk-icon="chevron-down"></span></a>
                            <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                               <ul class="uk-nav uk-navbar-dropdown-nav">
                                   <li class="uk-nav-header">Options</li>
                                   <li><a href="#">Edit Profile</a></li>
                                   <li class="uk-nav-header">Actions</li>
                                   <li><a href="#">Lock</a></li>
                                   <li><a href="#">Logout</a></li>
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
            
            <div class="uk-position-bottom">
                <hr class="uk-divider-small uk-text-center">
                
                <li><a href="#!" class="uk-text-center uk-link-reset uk-flex uk-flex-middle uk-margin-medium">Logout <i class="fas fa-power-off"></i></a></li>
            </div>
        </ul>
    </div>


    <div class="content-padder content-background">
        <div class="uk-section uk-section-small uk-section-default header">
            <div class="uk-container">
                <h2 class="ad_heading"><i class="fas fa-flag"></i> Templates</h2>
                
                <ul class="uk-breadcrumb">
                    <li><a href="<?= base_url('Deshbord') ?>">Home</a></li>
                    <li><a href="<?= base_url('Deshbord') ?>">Deshbord</a></li>
                    <li><a href="<?= base_url('Deshbord/templates') ?>">Template</a></li>
                </ul>
            </div>
        </div>
        <div class="uk-section-small">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@l">
                    <div>
                        <table class="uk-table uk-table-justify uk-table-divider uk-table-responsive">
                            <thead>
                                <tr>
                                    <th ">No.</th>
                                    <th class="uk-width-small">Header</th>
                                    <th>Template</th>
                                    <th>Upload at</th>
                                    <th>Update at</th>
                                    <th>Preview</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="uk-text-truncate">Creative Table Assignment</td>
                                    <td><img data-src="<?= base_url('assets/images/rawpixel-777256-unsplash.jpg') ?>" style="width: 130px; height: 100px" uk-img alt=""></td>
                                    <td>19 Dec 2018 04:11 pm</td>
                                    <td>19 Jan 2019 05:13 pm</td>
                                    <td><button class="blue-color uk-button uk-button-default" type="button"><i class="far fa-eye"></i></button></td>
                                    <td><button class="yellow-color uk-button uk-button-default" type="button"><i class="fas fa-pencil-alt"></i></button></td>
                                    <!-- <td><button class="uk-button uk-button-default" type="button"><span uk-icon="trash"></span></button></td> -->
                                    <td><button class="red-color uk-button uk-button-default" type="button"><i class="far fa-trash-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Table Data</td>
                                    <td><img data-src="<?= base_url('assets/images/rawpixel-777256-unsplash.jpg') ?>" style="width: 130px; height: 100px" uk-img alt=""></td>
                                    <td>19 Dec 2018 04:11 pm</td>
                                    <td>19 Jan 2019 05:13 pm</td>
                                    <td><button class="blue-color uk-button uk-button-default" type="button"><i class="far fa-eye"></i></button></td>
                                    <td><button class="yellow-color uk-button uk-button-default" type="button"><i class="fas fa-pencil-alt"></i></button></td>
                                    <td><button class="red-color uk-button uk-button-default" type="button"><i class="far fa-trash-alt"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                   
                </div>
                
            </div>
        </div>




        
        <!-- This is the Add template modal -->
        <div id="add_temp_modal" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-text-center uk-border-rounded">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h2 class="uk-modal-title">Add Template</h2>
                <hr class="uk-divider-small">
                <form action="#!" class="uk-margin-large-top">
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <i class="fas fa-pen icon uk-form-icon"></i>
                            <input class="uk-input uk-form-width-large" type="text" placeholder="template header">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div class="uk-inline">
                            <i class="fas fa-pen icon  uk-form-icon"></i>
                            <input class="uk-input uk-form-width-large" type="text" placeholder="Sub heading">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <i class="fas fa-image icon  uk-form-icon"></i>
                            <input class="uk-input uk-form-width-large" type="text" placeholder="Template image">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-inline">
                            <i class="fas fa-file-archive icon  uk-form-icon"></i>
                            <input class="uk-input uk-form-width-large" type="text" placeholder="Template zip">
                        </div>
                    </div>
                    <div class="uk-text-left uk-margin-left">
                        
                        <button class="uk-button uk-button-primary uk-width-1-3@m">Submit</button>
                        <button class="uk-button uk-button-danger uk-width-1-3@m">Cancle</button>
                    </div>
                </form>
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













	<script src="<?= base_url('assets/admin/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js" integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
	<script src="<?= base_url('assets/js/uikit.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/uikit-icons.min.js') ?>"></script>
	<script src="<?= base_url('assets/admin/js/admin_script.js') ?>"></script>
</body>
</html>