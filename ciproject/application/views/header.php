<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $title;?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo SITE_PATH;?>favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo SITE_PATH;?>admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo SITE_PATH;?>admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo SITE_PATH;?>admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="<?php echo SITE_PATH;?>admin/plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo SITE_PATH;?>admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo SITE_PATH;?>admin/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo SITE_PATH;?>admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo SITE_PATH;?>admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo SITE_PATH;?>admin/css/themes/all-themes.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="<?php echo SITE_PATH; ?>admin/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo SITE_PATH;?>admin/css/jquery-ui.css">
    <!-- Jquery Core Js -->
    <script src="<?php echo SITE_PATH;?>admin/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo SITE_PATH;?>admin/js/jquery-ui.js"></script>
</head>

<script>
    var GLOBAL = {
        SERVER_URL      : '<?php echo SERVER_URL; ?>',
    };
</script>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="md-preloader pl-size-md">
                <svg viewbox="0 0 75 75">
                    <circle cx="37.5" cy="37.5" r="33.5" class="pl-red" stroke-width="4" />
                </svg>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo SITE_PATH.strtolower($title); ?>"><?php echo $title; ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo SITE_PATH;?>admin/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $user;?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="<?php echo SITE_PATH.'welcome/logout'; ?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li><a href="<?php echo SITE_PATH.strtolower($title); ?>"><i class="fa fa-link"></i> <span>Recharge Report</span></a></li>
                    <li><a href="<?php echo SITE_PATH.strtolower($title); ?>/masterForm"><i class="fa fa-link"></i> <span>Master</span></a></li>
                    <li><a href="<?php echo SITE_PATH.strtolower($title); ?>/transaction"><i class="fa fa-link"></i> <span>Transaction</span></a></li>
                    <li><a href="<?php echo SITE_PATH.strtolower($title); ?>/bankMaster"><i class="fa fa-link"></i> <span>Bank Master</span></a></li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">Copyright © 2016 Company.</div>
                <div class="version">All rights reserved.</div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Change Company</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="cellbiz" class="active"><div class="red"></div><span>CellBiz</span></li>
                        <li data-theme="cellmoney"><div class="pink"></div><span>CellMoney Co.in</span></li>
                        <li data-theme="cellmoneynet"><div class="purple"></div><span>CellMoney.in</span></li>
                        <li data-theme="cellmoneynetin"><div class="deep-purple"></div><span>cellmoney.net.in</span></li>
                    </ul>
                </div>
                
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
        
    </section>
    <section class="content">   