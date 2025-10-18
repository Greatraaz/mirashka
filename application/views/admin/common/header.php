<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?=$site_title; ?> - <?=$sub_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/images/favicon.webp">
    <link href="<?php echo base_url(); ?>assets/admin/libs/chartist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/css/vijay_custom.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/css/raj_custom.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/fonts/material-design-iconic-font/css/material-design-iconic-font.css"
        rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/vendor/date-picker/css/datepicker.min.css" rel="stylesheet"
        type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/css/multistyle.css" rel="stylesheet" type="text/css">

    <!-- Calender -->
    <link href="<?php echo base_url(); ?>assets/admin/libs/@fullcalendar/core/main.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/@fullcalendar/daygrid/main.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/@fullcalendar/bootstrap/main.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/@fullcalendar/timegrid/main.min.css" rel="stylesheet"
        type="text/css" />

    <link href="<?php echo base_url(); ?>assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
        rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
        rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>assets/admin/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/date-picker/css/datepicker.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    body{
        font-family: 'sans-serif','Poppins',;
    }
    </style>
    <script src="<?php echo base_url(); ?>assets/admin/libs/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>

<body data-sidebar="dark">

   <!--  <section class="section loader-section">
        <div class="loader">
            <img src="<?=base_url('assets/admin/images/loader.gif');?>" alt="Loader">
        </div>
    </section> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="<?=base_url('admin');?>" class="logo logo-light">
                            <span class="logo-lg">
                                <img src="<?php echo base_url(); ?>assets/admin/images/logo.webp">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge bg-danger rounded-pill"><?php if(isset($total_notifications)){ echo $total_notifications;} ?></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-16"> Notifications <?php if(isset($total_notifications)){ echo $total_notifications;} ?> </h5>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">

                                    <?php if(isset($notifications)){ foreach($notifications as $node) { ?>
                                    <a class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                        <i class="mdi mdi-message-text-outline"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1"><?= $node['title'] ?></h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1"><?= $node['message'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <?php } } ?>

                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="<?php echo base_url(); ?>admin/notifications">
                                            View all
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php 
                                $image = $this->session->userdata('image');

                                if(!$image)
                                {
                                    $image = 'assets/admin/images/placeholder.jpg';
                                }
                            ?>
                            <img class="rounded-circle header-profile-user"
                                src="<?php echo base_url(); ?><?=$image;?>" alt="Header Avatar">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <!--<a class="dropdown-item" href="https://nhamance.com/consultant/profile"><i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Profile</a>-->
                            <a class="dropdown-item text-danger"
                                href="<?php echo base_url(); ?>admin/change-password"><i
                                    class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Change
                                Password</a>
                            <a class="dropdown-item text-danger" href="<?php echo base_url(); ?>admin/logout"><i
                                    class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>


    </div>

    <?php include("sidebar.php"); ?>