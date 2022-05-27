<?php
require_once("config.php");
?>
<html>
<head>
  <title>Customer Home</title>
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
  <!-- Font Awesome CSS -->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
  <link rel="icon" href="image/TRANSPARENT BG.png">
  <style>
    * {
      font-family: 'Raleway', sans-serif;
      font-family: 'Source Sans Pro', sans-serif;
      margin: 0 auto;
      padding: 0;
    }
    /*---- STICKY NAVBAR ----*/
    #navbarsticky {
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
      overflow: hidden;
      background-color: rgba(255, 255, 255, 0.400);
    }
    .sticky {
      position: fixed;
      top: 0;
      height: 10%;
      width: 100%;
      margin: 0;
      z-index: 1;
    }
    .center-column a:hover {
      color: #ff9900;
    }
    .center-column a:active {
      color: #ff9900;
    }
    .center-column ul {
      padding: 0px 5 0px 0px 50px;
    }
    .center-column ul li a {
      text-decoration: none;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 600;
      color: black;
    }
    li.nav-item-right {
      margin-right: 30px;
      display: contents;
    }
    a.nav-link-right {
      text-decoration: none;
      color: black;
    }
    .menu-right ul li a {
      text-decoration: none;
      color: black;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 600;
    }
    .menu-right a:hover {
      color: #ff9900;
    }
    /** PICTURE BOX */
    .container {
      padding: 3em;
      display: grid;
      grid-gap: 9.1em;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }
    .quote {
      padding: 1em;
      background-color: #c1c8c9;
      border-radius: .3em;
      box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.1);
      width: 380px;
      box-shadow: 0 3px 10px rgb(0 0 0 / 0.9);
      span {
        font-weight: bold;
        position: relative;
        margin-left: 15px;
        &:before {
          content: '';
          position: absolute;
          height: 1px;
          width: 10px;
          border-bottom: 1px solid black;
          top: 10px;
          left: -15px;
        }
      }
    }
    /*----- HOME SECTION ------*/
    .home-page {
      height: 100vh;
      margin: 0 auto;
      padding: 0;
    }
    .row {
      margin: 0 auto;
      padding: 0;
    }
    .home-row {
      background-color: #e2e1df;
    }
    .slider-right {
      background-color: #e2e1df;
    }
    .carousel-inner {
      padding: 45px 0px;
    }
    .carousel-item img {
      margin-right: 50px;
    }
    .text-left {
      margin-left: 75px;
      padding: 7.66% 0;
      ;
    }
    .first-text h1 {
      font-family: 'Raleway', sans-serif;
      font-weight: 800;
      color: black;
      font-size: 60px;
    }
    .first-text p {
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 400;
      color: grey;
    }
    .visit-shop-btn .btn {
      color: white;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 400;
      font-size: 14px;
    }
    button.btn.btn-visit {
      background-color: #ff9900;
      padding: 10px 50px;
    }
    .icon {
      border-radius: 100%;
      width: 75%;
      height: 70%;
      position: fixed;
      margin-top: -3%;
      margin-left: 16%;
      opacity: 0.111;
    }
    /*////////// LATEST PRODUCT SECTION //////////*/
    .latest-products {
      height: 80vh;
      background-color: white;
      margin: 0 auto;
      padding: 0;
      overflow: hidden;
    }
    .card-latest-prod {
      width: 270px;
      height: 300px;
      background-color: #e2e1df;
    }
    .latest-prod-content {
      padding: 25px 15px;
    }
    .prod-name h3 {
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 600;
      font-size: 18px;
      color: #2f2f2f;
      text-decoration: none;
      text-align: left;
    }
    .prod-name h5 {
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 300;
      font-size: 14px;
      color: grey;
      text-decoration: none;
      text-align: left;
    }
    .prod-price h3 {
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 600;
      font-size: 18px;
      color: #2f2f2f;
      text-decoration: none;
    }
    .prod-price .btn {
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 300;
      font-size: 10px;
      background-color: #ff9900;
      color: white;
      padding: 6px 12px;
      border-radius: 0;
    }
    .latest-prod-inner h1 {
      font-family: 'Raleway', sans-serif;
      font-weight: 700;
      font-size: 40px;
      color: #2f2f2f;
      text-align: center;
      padding-top: 20px;
    }
    .row.latest-prod-sec {
      position: relative;
      text-align: center;
      margin: 0 5%;
      margin-top: 50px;
      padding: 0;
    }
    .col.inner-card {
      display: contents;
    }
    .card-latest-prod {
      margin-left: 30px;
      width: 270px;
      height: 300px;
      background-color: #e2e1df;
    }
    .card-latest-prod a {
      text-decoration: none;
    }
    /*------ BANNER -------*/
    .banner {
      height: 80vh;
      background-color: red;
      background-image: url("../img/banner.jpg");
      object-fit: fill;
    }
    /*----- Footer -----*/
    #footer {
      background: #fff;
      box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 1);
      padding: 5px 0;
      color: #222222;
      font-size: 14px;
    }
    #footer .credits {
      font-size: 13px;
      padding-top: 5px;
      color: #222222;
    }
    #footer .footer-links a {
      color: #222222;
      padding-left: 25px;
    }
    #footer .footer-links a:first-child {
      padding-left: 0;
    }
    #footer .footer-links a:hover {
      color: #3498db;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/09b6d3ef90.js" crossorigin="anonymous"></script>
</head>
<body style="overflow-x:hidden;">
  <meta charset="utf-8">
  <!-- ======= Header ======= -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light" id="navbarsticky" style="height:9%">
    <div class="collapse navbar-collapse center-column" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a style="margin-left:-130%;"><img src="image/ebts_trans.png" style="height:70px;width:150px;margin-top:5px;"></a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="home.php" style="margin-left:30px;margin-top:20px;font-size:1.1em;font-family:'Segoe UI';">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer-booking.php" style="margin-left:30px;margin-top:20px;font-size:1.1em;font-family:'Segoe UI';">BOOKING</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer-notification.php" style="margin-left:30px;margin-top:20px;font-size:1.1em;font-family:'Segoe UI';">NOTIFICATION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer-contact.php" style="margin-left:30px;margin-top:20px;font-size:1.1em;font-family:'Segoe UI';">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer-about.php" style="margin-left:30px;margin-top:20px;font-size:1.1em;font-family:'Segoe UI';">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php" style="margin-left:30px;margin-top:20px;font-size:1.1em;font-family:'Segoe UI';">LOGOUT</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- ======= End Header ======= -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
  <script>
    window.onscroll = function() {
      myFunction()
    };
    var navbarsticky = document.getElementById("navbarsticky");
    var sticky = navbarsticky.offsetTop;
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbarsticky.classList.add("sticky")
      } else {
        navbarsticky.classList.remove("sticky");
      }
    }
  </script>
  <div class="container">
    <?php
    $dbh = new PDO("mysql:host=localhost;dbname=db_ebts", "root", "");
    $stat = $dbh->prepare("SELECT * from tbl_picture");
    $stat->execute();
    while ($row = $stat->fetch()) {
      echo "<div class='quote'><embed src='data:image/jpg" . ";base64," . base64_encode($row['data']) . "' width='350' height='230' />";
      echo "<h3 style='width:100%;font-size:1.8em;'><b><center>NAME OF CONDO</center></b></h3>";
      echo "<h3 style='font-size:1.17em;overflow:auto;font-family:Moonglade;'><br><img src='image/location-removebg-preview.png' style='width:6%;'>" . $row['location'] . "</h3>";
      echo "<div style='margin-left:60%;margin-top:-10%;'>";
      echo "<h3 style='font-size:1.17em;overflow:auto;font-family:Moonglade;'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cash' viewBox='0 0 16 16'>
    <path d='M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z'/>
    <path d='M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z'/>
  </svg>&nbsp&nbsp" . $row['price'] . "</h3>";
      echo "</div>";
      echo "<h3 style='font-size:1.17em;overflow:auto;font-family:Moonglade;'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-people' viewBox='0 0 16 16'>
    <path d='M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z'/>
  </svg> " . $row['capacity'] . "</h3>";
      echo "<br><button class='btn' style='width:100%;background-color:#b39a88;'><a href='information.php?id=" . $row['id'] . "' style='color:white;letter-spacing: 0.3em;text-decoration: none;'><b>Check Availability</b></a></button>";
      echo "</div>";
    }
    ?>
  </div>
  <div class="iconBox">
    <img class="icon" id="logo" src="image/ebts_trans.png" style="margin-top:5%">
  </div>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container" style="height:80px;">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright" style="font-family:Segoe UI;">
            &copy; Copyright <strong>Erovoutika</strong>. All Rights Reserved
          </div>
          <div class="credits" style="font-family:Segoe UI;">
            Designed by <a href="#">Erovoutika Web Development Team</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <h1 href="#" class="scrollto" style="font-family:Segoe UI;Color: #707070;font-size:1em;letter-spacing: 0.2em;"> Follow us on Social Media: <a href="https://www.facebook.com/eBoardinghouseTransientStaycation" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </a></h1>
          </nav>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
</body>
</html>
