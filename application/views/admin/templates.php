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
                    <a href="<?= base_url('template/add_template') ?>" class="uk-button uk-visible@s uk-button-default uk-flex uk-flex-middle" style="border-radius: 500px">Add template &nbsp;<span uk-icon="plus-circle"></span></a>

                    <ul class="uk-navbar-nav uk-visible@s">
                        <li class="uk-active">
                            <a href="#">Hiren&nbsp;<i class="fas fa-angle-down"></i></a>
                            <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                               <ul class="uk-nav uk-navbar-dropdown-nav">
                                   <li class="uk-nav-header">Options</li>
                                   <li><a href="#">Edit Profile</a></li>
                                   <li class="uk-nav-header">Actions</li>
                                   <li><a href="#">Lock</a></li>
                                   <li><a href="<?= base_url('admin/logout') ?>">Logout</a></li>
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
                
                <li><a href="<?= base_url('admin/logout') ?>" class="uk-text-center uk-link-reset uk-flex uk-flex-middle uk-margin-medium">Logout <i class="fas fa-power-off"></i></a></li>
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
                                    <th class="uk-width-small">Heading</th>
                                    <th>Template</th>
                                    <th>Upload at</th>
                                    <th>Update at</th>
                                    <th>Preview</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (isset($templates)) {
                                        if (count($templates)) {
                                            $count = $this->uri->segment(3);
                                        }
                                    }
                                ?>
                                <?php
                                    foreach ($templates as $data) {?>
                                        <tr>
                                            <td><?= ++$count ?></td>
                                            <td class="uk-text-truncate"><?= $data->temp_header ?></td>
                                            <td><img data-src="<?= base_url('image_upload/'.$data->temp_image) ?>" style="width: 130px; height: 100px" uk-img alt=""></td>
                                            <td><?= $data->upload_at ?></td>
                                            <td><?= $data->update_at ?></td>
                                            <!-- <td><button class="blue-color uk-button uk-button-default" type="button"><i class="far fa-eye"></i></button></td> -->
                                            <td><?php echo anchor("Template/preview/{$data->id}","<i class='far fa-eye'></i>",['class'=>'blue-color uk-button uk-button-default','terget'=>'_blank']) ?></td>
                                            <td><?= anchor("Template/edit_template/{$data->id}","<i class='fas fa-pencil-alt'></i>", ['class'=>'yellow-color uk-button uk-button-default']) ?></td>
                                            <td><?= anchor("Template/del_template/{$data->id}","<i class='far fa-trash-alt'></i>",['class'=>'red-color uk-button uk-button-default']); ?></td>
                                        </tr>
                                    <?php
                                    }
                                
                                
                                ?>
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

    </div>











<?php include 'footer.php' ?>

<?php
    if ($success = $this->session->flashdata('success')) {
        if (isset($success)) {
            $success_msg = $success;
            ?>
            <script>
                UIkit.notification({
                    message: '<?php echo $success_msg ?>'+' <i class="far fa-grin-beam"></i>',
                    status: 'success',
                    pos: 'top-right',
                    timeout: 5000
                });
            </script>
            <?php
        }
    }
    
    if ($error = $this->session->flashdata('error')) {
        if (isset($error)) {
            $error_msg = $error;
            ?>
            <script>
                UIkit.notification({
                    message: '<i class="fas fa-exclamation"></i> '+'<?php echo $error_msg ?>'+' <i class="fas fa-sad-tear"></i>',
                    status: 'danger',
                    pos: 'top-right',
                    timeout: 5000
                });
            </script>
            <?php
        }
    }
   

?>