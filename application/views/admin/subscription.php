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
                    <ul class="uk-navbar-nav uk-visible@s">
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
            <li class="uk-active"><a href="<?= base_url('Deshbord/subscription') ?>">Subscriptions</a></li>
            <li><a href="<?= base_url('Deshbord/feedback') ?>">Feedback</a></li>
            
            <div class="uk-position-bottom">
                <hr class="uk-divider-small uk-text-center">
                
                <li><a href="<?= base_url('Admin/logout') ?>" class="uk-text-center uk-link-reset uk-flex uk-flex-middle uk-margin-medium">Logout <i class="fas fa-power-off"></i></a></li>
            </div>
        </ul>
    </div>


    <div class="content-padder content-background">
        <div class="uk-section uk-section-small uk-section-default header">
            <div class="uk-container uk-container-large">
                <h2 class="ad_heading"><i class="fas fa-user-edit"></i> Subscriptions</h2>
                
                <ul class="uk-breadcrumb">
                    <li><a href="<?= base_url('deshbord') ?>">Home</a></li>
                    <li><a href="<?= base_url('deshbord') ?>">Deshbord</a></li>
                    <li><a href="<?= base_url('deshbord/subscription') ?>">Subscriptions</a></li>
                </ul>
            </div>
        </div>
        <div class="uk-section ">
            <div class="uk-container uk-container-large">
                <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@l">
                    <div>
                        <table class="uk-table uk-table-divider uk-table-large">
                            <thead>
                                <tr>
                                    <th><big>#</big></th>
                                    <th class="uk-text-capitalize"><big><i class="fas fa-user-circle"></i> Subscriber</big></th>
                                    <th class="uk-text-capitalize"><big><i class="far fa-clock"></i> Subscribed at</big></th>
                                    <th class="uk-text-capitalize"><big>Delete</big></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (isset($data)) {
                                        if (count($data)) {
                                            $count = $this->uri->segment(3);
                                        }
                                    }
                                ?> 
                                <?php
                                    foreach ($data as $value) {
                                        ?>
                                            <tr>
                                                <td><?= ++$count ?></td>
                                                <td><?= $value->email ?></td>
                                                <td><?= $value->subscribed_at ?></td>
                                                <!-- <td><button href="<?= base_url() ?>" class="red-color uk-button uk-button-default"><i class='far fa-trash-alt'></i></button></td> -->
                                                <td><?= anchor("Subscription/del_subscriber/{$value->id}", "<i class='far fa-trash-alt'></i>", ['class'=>'red-color uk-button uk-button-default']) ?></td>
                                            </tr>
                                        <?php
                                    }
                                ?>
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
                    message: '<?php echo $success_msg ?>'+' <i class="fas fa-thumbs-up"></i>',
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
                    message: '<i class="fas fa-exclamation"></i> '+'<?php echo $error_msg ?>',
                    status: 'danger',
                    pos: 'top-right',
                    timeout: 5000
                });
            </script>
            <?php
        }
    }


?>