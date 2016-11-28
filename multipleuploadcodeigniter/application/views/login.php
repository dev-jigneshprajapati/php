<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo SITE_PATH;?>admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo SITE_PATH;?>admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo SITE_PATH;?>admin/css/style.css" rel="stylesheet">
    <!-- Bootstrap Select Css -->
    <link href="<?php echo SITE_PATH;?>admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">AdminPanel</a>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="post" action="login/signin">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="userName" placeholder="userName" value="abc" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="userPassword" id="userPassword" value="123" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">work</i>
                        </span>
                        <div class="form-line">
                            <select class="form-control" id="usertype" name="usertype">
                                <option value="Cellbiz">Cellbiz</option>
                                <option value="Cellmoney">Cellmoney</option>
                                <option value="Cellmoneynet">Cellmoneynet</option>
                                <option value="cellmoneynetin">cellmoneynetin</option>    
                            </select>
                        </div>
                    </div>
                    
                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN IN</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo SITE_PATH;?>admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo SITE_PATH;?>admin/plugins/bootstrap/js/bootstrap.js"></script>
    
    <!-- Select Plugin Js -->
    <script src="<?php echo SITE_PATH;?>admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>
</body>
</html>