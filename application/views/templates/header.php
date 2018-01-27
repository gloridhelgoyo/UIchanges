<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>GSO INVENTORY</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>



    <!--  Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">

    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">

    <!-- Bootstrap core CSS     -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>

</head>

<body>

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->
<!-- Header Name -->
<div class="user-header">
    <img src="assets/images/new_logo.png" width="10%" height="70%">
    <div class="user-container">
    <h1>Heinrich Bangui</h1>
    <p>City Budget Office</p>
    </div>

<!-- Nav Notification / profile -->

<nav class="navbar-right">
    <div class="container-fluid">
    <ul class="nav navbar-nav">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
        <i class="ti-bell"> Notification</i> 
        <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Notification 1</a></li>
          <li><a href="#">Notification 2</a></li>
          <li><a href="#">Notification 3</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
        <i class="ti-user"> Profile</i> 
        <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
        <li><a href="#">View Profile</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
    </li>
    </ul>
  </div>
</nav>
</div>

<!-- END -->

<!-- Main Nav -->
    <div class="main-panel">
        <nav class="navbar">
            <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li>
                    <a href="dashboard">
                        <i class="fa fa-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li  class="active">
                    <a href="inventory">
                       <i class="fa fa-bars"></i>
                        <p>Inventory</p>
                    </a>
                </li>
                <li>
                    <a href="department">
                      <i class="fa fa-home"></i>
                        <p>Department</p>
                    </a>
                </li>
                <li>
                    <a href="return">
                      <i class="fa fa-reply"></i>
                        <p>Return</p>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="ti-agenda"></i>
                    <p>Logs</p>
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><p>Increase</p></a></li>
                        <li><a href="#"><p>Decrease</p></a></li>
                        <li><a href="#"><p>Return</p></a></li>
                        <li><a href="#"><p>Edit</p></a></li>
                    </ul>
            </ul>

        </nav>

<!-- End-->
