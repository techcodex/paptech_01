<?php
session_start();
date_default_timezone_set("Asia/Karachi");
if (isset($_SESSION['obj_user'])) {
    $obj_user = unserialize($_SESSION['obj_user']);
} else {
    $obj_user = new User();
}

define("BASE_FOLDER", "/paptech/");
define("BASE_URL", "http://" . $_SERVER['HTTP_HOST'] . BASE_FOLDER);
//http://localhost/paptech/
//http://www.google.com/paptech
//die(BASE_URL);
$current = $_SERVER['PHP_SELF'];
//die($current);
$public_pages = [
    BASE_FOLDER.'login.php',
    BASE_FOLDER.'signup.php',
//    BASE_FOLDER.'index.php',
];
$restricted_pages = [
    BASE_FOLDER.'my_account.php',
    BASE_FOLDER.'update_account.php',
    BASE_FOLDER.'process_update_account.php'
];

if(in_array($current, $public_pages) && $obj_user->loggedin) {
    $_SESSION['msg'] = "Please Logout to view this page";
//    die($_SESSION['msg']);
    header("Location:msg.php");
}
if(in_array($current, $restricted_pages) && !$obj_user->loggedin) {
    $_SESSION['msg'] = "Please Login to View this page";
    header("Location:msg.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>
            <?php
            if ($obj_user->user_name) {
                echo($obj_user->user_name);
            } else {
                echo("Guest");
            }
            ?>
        </title>
        <link href="<?php echo(BASE_URL); ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo(BASE_URL); ?>css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo(BASE_URL); ?>css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo(BASE_URL); ?>css/price-range.css" rel="stylesheet">
        <link href="<?php echo(BASE_URL); ?>css/animate.css" rel="stylesheet">
        <link href="<?php echo(BASE_URL); ?>css/main.css" rel="stylesheet">
        <link href="<?php echo(BASE_URL); ?>css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="<?php echo(BASE_URL); ?>images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo(BASE_URL); ?>images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo(BASE_URL); ?>images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo(BASE_URL); ?>images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo(BASE_URL); ?>images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 clearfix">
                            <div class="logo pull-left">
                                <a href="index.php"><img src="<?php echo(BASE_URL); ?>images/home/logo.png" alt="" /></a>
                            </div>
                            <div class="btn-group pull-right clearfix">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                        USA
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Canada</a></li>
                                        <li><a href="">UK</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                        DOLLAR
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Canadian Dollar</a></li>
                                        <li><a href="">Pound</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 clearfix">
                            <div class="shop-menu clearfix pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                                    <li><a href="<?php echo(BASE_URL); ?>signup.php"><i class="fa fa-sign-in"></i>Signup</a></li>
                                    <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                    <li>
                                        <?php
                                        if (isset($_SESSION['obj_user'])) {
                                            echo("<a href='process/process_logout.php'><i class='fa fa-lock'></i> Logout</a>");
                                        } else {
                                            echo("<a href='login.php'><i class='fa fa-lock'></i> Login</a>");
                                        }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="index.php" class="active">Home</a></li>
                                    <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="shop.html">Products</a></li>
                                            <li><a href="product-details.html">Product Details</a></li> 
                                            <li><a href="checkout.html">Checkout</a></li> 
                                            <li><a href="cart.html">Cart</a></li> 
                                            <li><a href="login.html">Login</a></li> 
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="blog.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="404.html">404</a></li>
                                    <?php
                                    if($obj_user->loggedin) {
                                        echo("<li><a href='".BASE_URL."my_account.php'>My Account</a></li>");
                                    } else {
                                        echo("<li><a href='".BASE_URL."login.php'>Login</a></li>");
                                    }
                                    ?>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Search"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->