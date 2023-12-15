<?php
define('__ROOT__', "../../");
require_once(__ROOT__ . "models/User.php");
require_once(__ROOT__ . "controllers/UserController.php");
// require_once(__ROOT__ . "view/ViewUser.php");
session_start();
$model = new User($_SESSION["ID"]);
$controller = new UserController($model);
// $view = new ViewUser($controller, $model);
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet"
        href="https://rawcdn.githack.com/Loopple/loopple-public-assets/ad60f16c8a16d1dcad75e176c00d7f9e69320cd4/argon-dashboard/css/nucleo/css/nucleo.css">
    <link rel="stylesheet" href="theme.css">
</head>
<body>

<!-- <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white loopple-fixed-start" id="sidenav-main">
    <div class="navbar-inner">
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="userprofile.php">
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="editprofile.php">
                        <span class="nav-link-text">Account Settings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/userprofile/order">
                        <span class="nav-link-text">Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <span class="nav-link-text">Logout</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <span class="nav-link-text">Return to Homepage</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->
<?php include 'userprofile-nav.php' ?>
<div class="main-content" id="panel">
    <nav class="navbar navbar-top navbar-expand navbar-dark border-bottom bg-warning" id="navbarTop">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <li class="nav-item d-xl-none">
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark active" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-sm-none">
                       
                    </li>
                    
                </ul>
                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="./img/pfp.webp">
                                </span>
                                <div class="media-body  ml-2  d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold"></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome, <?= $model->getFirstName()?> </h6>
                            </div>
                            <a href="/userprofile" class="dropdown-item">
                                
                                <span>My profile</span>
                            </a>
                            <a href="/userprofile/order" class="dropdown-item">
                                
                                <span>Orders</span>
                            </a>
                            
                            <a href="/contactus" class="dropdown-item">
                                <span>Support</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/logout" class="dropdown-item">
                                <i class="fa fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>

