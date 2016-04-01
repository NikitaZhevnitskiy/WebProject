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

        <title></title>

        <!-- load CSS styles -->
        <link href="/source/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/source/css/app-styles.css" rel="stylesheet" type="text/css">

        <!-- load Scripts -->
        <script src="/source/js/jquery.min.js" type="text/javascript"></script>
        <script src="/source/js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body>

    <div id="menu"></div>

    <div id="content" class="container">