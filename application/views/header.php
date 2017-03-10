<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->

    <?php echo link_tag('assets/css/style.css');?>
    <?php echo link_tag('assets/css/bootstrap.min.css');?>
    <?php echo link_tag('assets/css/bootstrap-responsive.min.css');?>
    <?php echo link_tag('assets/css/style.css');?>
    <?php echo link_tag('assets/css/style-responsive.css');?>
    <?php echo link_tag('assets/css/ie.css');?>
    <?php echo link_tag('assets/css/ie9.css');?>

    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

<!--    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->

<!--    <link id="base-style" href="assets/css/bootstrap.min.css">-->
<!--    <link id="base-style" href="assets/css/bootstrap-responsive.min.css">-->
<!--    <link id="base-style" href="assets/css/style.css">-->
<!--    <link id="base-style" href="assets/css/style-responsive.css">-->
<!--    <link id="base-style" href="assets/css/ie.css" />-->
<!--    <link id="base-style" href="assets/css/ie9.css" />-->
<!--    <link href="assets/ing/favicon.ico" rel="shortcut icon" />-->



     

</head>

<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.html"><span>HOTEL</span></a>

            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">

                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i>
                            <?php
                            if (isset($_SESSION['client']['username'])) {
                                echo $_SESSION['client']['username'];
                            }
                            ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                            <li><a href="<?php echo base_url('index.php/login/logout')?>"><i class="halflings-icon off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">