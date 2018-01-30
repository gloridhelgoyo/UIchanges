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

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>

</head>
<body>
<div class="body">
<header>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <img src="assets/images/logo.png" width="30%" height="70%">
                        <div class="user-container">
                        </div>
        </div>

        <div class="nav">
            <ul class="nav navbar-nav">
                <li>
                    <a href="dashboard">
                        <i class="fa fa-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                <li>
                    <a href="department">
                        <i class="fa fa-home"></i>
                        <p>Department</p>
                    </a>
                <li>
                    <a href="inventory">
                        <i class="fa fa-bars"></i>
                        <p>Inventory</p>
                    </a>
                <li>
                    <a href="return">
                        <i class="fa fa-reply"></i>
                        <p>Return</p>
                    </a>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="ti-agenda"></i>
                        <p>Logs</p>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Increased</a></li>
                        <li><a href="#">Decreased</a></li>
                        <li><a href="#">Edited</a></li>
                        <li><a href="#">Returned Log</a></li>
                        <li role="separator" class="divider"></li>
                    </ul>
                </li>
            </ul>

        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#">
                <i class="fa fa-bell"></i>
                <p>Notification</p>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle-o"></i>
                <p>Profile</p>
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="user">View Profile</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
            </li>
        </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
</div>
</body>

<!-- End-->
