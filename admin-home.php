<?php
include("config.php");
?>
<html>

<head>
    <title>Admin</title>
    <link rel=stylesheet href="css/admin-home.css">
    <link rel="icon" href="image/TRANSPARENT BG.png">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Orelega+One&display=swap');

    html {
        scroll-behavior: smooth;
    }

    * {
        margin: 0;
        padding: 0;
    }

    body {
        overflow-x: hidden;
        background-color: #ffffff;
    }

    .icon {
        border-radius: 100%;
        width: 75%;
        height: 70%;
        position: absolute;
        margin-top: -3%;
        margin-left: 16%;
        opacity: 0.5;
    }

    @import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);

    .fa-2x {
        font-size: 2em;
    }

    .fa {
        position: relative;
        display: table-cell;
        width: 60px;
        height: 36px;
        text-align: center;
        vertical-align: middle;
        font-size: 20px;
    }


    .main-menu:hover,
    nav.main-menu.expanded {
        width: 250px;
        overflow: visible;
    }

    .main-menu {
        background: #38231d;
        border-right: 1px solid #e5e5e5;
        position: absolute;
        top: 0;
        bottom: 0;
        height: 100%;
        left: 0;
        width: 60px;
        overflow: hidden;
        -webkit-transition: width .05s linear;
        transition: width .05s linear;
        z-index: 1000;
    }

    .main-menu>ul {
        margin: 7px 0;
    }

    .main-menu li {
        position: relative;
        display: block;
        width: 250px;
    }

    .main-menu li>a {
        position: relative;
        display: table;
        border-collapse: collapse;
        border-spacing: 0;
        color: #999;
        font-family: arial;
        font-size: 14px;
        text-decoration: none;
        -webkit-transition: all .1s linear;
        transition: all .1s linear;

    }

    .main-menu .nav-icon {
        position: relative;
        display: table-cell;
        width: 60px;
        height: 36px;
        text-align: center;
        vertical-align: middle;
        font-size: 18px;
    }

    .main-menu .nav-text {
        position: relative;
        display: table-cell;
        vertical-align: middle;
        width: 190px;
        font-family: 'Titillium Web', sans-serif;
    }

    .main-menu>ul.logout {
        position: absolute;
        left: 0;
        bottom: 0;
    }

    .no-touch .scrollable.hover {
        overflow-y: hidden;
    }

    .no-touch .scrollable.hover:hover {
        overflow-y: auto;
        overflow: visible;
    }

    a:hover,
    a:focus {
        text-decoration: none;
    }

    nav {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
    }

    nav ul,
    nav li {
        outline: 0;
        margin: 0;
        padding: 0;
    }

    .main-menu li:hover>a,
    nav.main-menu li.active>a,
    .dropdown-menu>li>a:hover,
    .dropdown-menu>li>a:focus,
    .dropdown-menu>.active>a,
    .dropdown-menu>.active>a:hover,
    .dropdown-menu>.active>a:focus,
    .no-touch .dashboard-page nav.dashboard-menu ul li:hover a,
    .dashboard-page nav.dashboard-menu ul li.active a {
        color: #fff;
        background-color: #5fa2db;
    }

    .area {
        float: left;
        background-color: #ecf0f1;
        width: 100%;
        height: 100%;
    }

    @font-face {
        font-family: 'Titillium Web';
        font-style: normal;
        font-weight: 300;
        src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
    }

    #clock {
        width: 100%;
        position: absolute;
        font-size: 9vw;
        color: black;
        text-align: center;
        font-family: 'Roboto', sans-serif;
    }

    .home {
        background-color: #f0ffdf;
        box-shadow: 1px -1px 14px 0px rgba(1, 95, 150, 0.568);
        width: 90%;
        height: 90%;
        margin-left: 8%;
        margin-top: 2%;
        position: absolute;
        border-radius: 15px;
        opacity: 0.9;
    }

    .home h1 {
        font-size: 50px;
        font-family: 'Orelega One', cursive;
        letter-spacing: 2px;
        text-align: center;
        margin-top: 2%;
    }

    .home p {
        text-decoration: underline;
        font-size: 40px;
        font-family: 'Quicksand', sans-serif;
        text-align: center;
        margin-top: 3%;
    }
</style>

<div class="home">
    <h1>ADMIN HOME</h1>



    <div id="link_wrapper">

    </div>

</div>

<div class="iconBox">
    <img class="icon" id="logo" src="image/ebts_trans.png" style="margin-top:5%">
</div>


</div>

<body onload="realtimeClock()">

    <div class="area"></div>
    <nav class="main-menu">
        <ul>

            <li>
                <a href="admin-home.php">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Home
                    </span>

                </a>

            </li>
            <li class="has-subnav">
                <a href="admin-customer.php">
                    <i class="fa fa-user-friends fa-2x"></i>
                    <span class="nav-text">
                        Customer
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-exclamation-triangle fa-2x"></i>
                    <span class="nav-text">
                        Booking
                    </span>
                </a>

            </li>
            <li>
                <a href="upload-image.php">
                    <i class="fa fa-car-side fa-2x"></i>
                    <span class="nav-text">
                        Upload Picture
                    </span>
                </a>
            </li>
            <li>
                <a href="admin-trail.php">
                    <i class="fa fa-file-invoice-dollar fa-2x"></i>
                    <span class="nav-text">
                        Admin Account / Login Trail
                    </span>
                </a>
            </li>
            <li>
                <a href="create-admin.php">
                    <i class="fa fa-user-secret fa-2x"></i>
                    <span class="nav-text">
                        Create Admin Accounts
                    </span>
                </a>
            </li>

        </ul>

        <ul class="logout">
            <li>
                <img src="image/ebts_trans.png" style="width:100%;height:50%">
                <a href="home.php" onclick="return confirm('Are you sure to logout?')">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Logout
                    </span>
                </a>
            </li>
        </ul>
    </nav>

</body>

</html>