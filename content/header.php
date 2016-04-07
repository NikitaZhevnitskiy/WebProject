<?php
/**
 * Created by PhpStorm.
 * User: NIK
 * Date: 31.03.16
 * Time: 18:43
 */

//Authentication
require_once __DIR__ . '/../source/php/authentication.php';
checkUserAuthentication();


//require_once instead of include. use file once.
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php
                echo getTitle();
            ?>
        </title>

        <!-- load CSS styles -->
        <link href="/source/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/source/css/charts.min.css" rel="stylesheet" type="text/css">
        <link href="/source/css/app-styles.css" rel="stylesheet" type="text/css">



        <!-- load Scripts -->
        <script src="/source/js/jquery.min.js" type="text/javascript"></script>
        <script src="/source/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/source/js/charts.min.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?v=3.20&sensor=true"></script>
        <script src="/source/js/jquery.map.min.js" type="text/javascript"></script>
        <script src="/source/js/jquery.cookie.min.js" type="text/javascript"></script>
        <script src="/source/js/app-scripts.js" type="text/javascript"></script>


    </head>


    <body>
    <!--NavBar START-->
    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">WESTERDALS tournament</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li <?php if($_SERVER['SCRIPT_NAME'] === '/tasks.php') { echo 'class="active"'; } ;?>><a href="/">Tasks</a></li>
                    <li <?php if($_SERVER['SCRIPT_NAME'] === '/rating.php') { echo 'class="active"'; } ;?>><a href="/rating.php">Rating</a></li>
                    <li <?php if($_SERVER['SCRIPT_NAME'] === '/about.php') { echo 'class="active"'; } ;?>><a href="/about.php">About</a></li>
                    <li <?php if($_SERVER['SCRIPT_NAME'] === '/our-team.php') { echo 'class="active"'; } ;?>><a href="/our-team.php">Our Team</a></li>

                    <li id="logout"><a href="">Log out</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </div>
    <!--NavBar END-->

    <div id="content" class="container row">


