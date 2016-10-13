<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 3.1
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title><?php echo html_escape(isset($title) ? $title : (('index' != $this->router->fetch_method() ? ucfirst($this->router->fetch_method()) . ' | ' : '') . ucfirst($this->router->fetch_class()))); ?></title>

    <!-- Favicons-->
    <link rel="icon" href="<?php echo site_url('assets/images/favicon/favicon-32x32.png'); ?>" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo site_url('assets/images/favicon/apple-touch-icon-152x152.png'); ?>">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?php echo site_url('assets/images/favicon/mstile-144x144.png'); ?>">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="<?php echo site_url('assets/css/materialize.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo site_url('assets/css/style.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen (Layout-2)-->    
    <link href="<?php echo site_url('assets/css/layouts/style-fullscreen.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?php echo site_url('assets/css/custom/custom.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?php echo site_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo site_url('assets/js/plugins/jvectormap/jquery-jvectormap.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo site_url('assets/js/plugins/chartist-js/chartist.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s12 m12 l12">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="<?php echo site_url('user/logout'); ?>"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo html_escape(isset($user['name']) ? $user['name'] : ''); ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal"><?php echo html_escape(isset($user['roles'][0]['name']) ? $user['roles'][0]['name'] : ''); ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="bold <?php echo 'dashboard' == $this->router->fetch_class() ? 'active' : ''; ?>"><a href="<?php echo site_url('dashboard'); ?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan <?php echo 'sales' == $this->router->fetch_class() ? 'active' : ''; ?>"><i class="mdi-action-face-unlock"></i> Sales</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li <?php if ('sales' == $this->router->fetch_class() && 'track' != $this->router->fetch_method()) { ?>class='active'<?php } ?> ><a href="<?php echo site_url('sales'); ?>" >List</a>
                                    </li>
                                    <li <?php if ('sales' == $this->router->fetch_class() && 'track' == $this->router->fetch_method()) { ?>class='active'<?php } ?> ><a href="<?php echo site_url('sales/track'); ?>" >Track</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="bold <?php echo 'user' == $this->router->fetch_class() ? 'active' : ''; ?>"><a href="<?php echo site_url('user'); ?>" class="waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> User</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan <?php echo 'product' == $this->router->fetch_class() ? 'active' : ''; ?>"><i class="mdi-action-work"></i> Product</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li <?php if ('product' == $this->router->fetch_class() && 'index' == $this->router->fetch_method()) { ?>class='active'<?php } ?> ><a href="<?php echo site_url('product'); ?>" >Add Product</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan <?php echo 'voucher' == $this->router->fetch_class() ? 'active' : ''; ?>"><i class="mdi-action-receipt"></i> Voucher</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li <?php if ('voucher' == $this->router->fetch_class() && 'index' == $this->router->fetch_method()) { ?>class='active'<?php } ?> ><a href="<?php echo site_url('voucher'); ?>" >Add Voucher</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->