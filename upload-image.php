<?php
include("config.php");
include("dbh.php");
?>
<html>

<head>
  <title>Upload Image</title>
  <link rel=stylesheet href="css/admin-home.css">
  <link rel="icon" href="image/TRANSPARENT BG.png">
  <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <style>
    #anim {
      max-width: 800px;
      margin: 0 auto;
    }
  </style>
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
  <!-- Font Awesome CSS -->
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

  li {
    list-style-type: none;
  }

  .container {
    padding: 3em;
    display: grid;
    grid-gap: 9.1em;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  }

  .quote {
    padding: 1em;
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

  #customers {
    position: relative;
    margin-top: 2%;
  }

  #customers td,
  #customers th {
    font-size: 15px;
    padding: 8px;
    text-align: center;
  }

  #customers tr:nth-child(even) {
    background-color: transparent;
  }

  #customers tr:hover {
    background-color: transparent;
  }

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background: #38231d;
    color: #f0ffdf;
    text-align: center;
  }

  .icon {
    border-radius: 100%;
    width: 75%;
    height: 70%;
    position: absolute;
    margin-top: -3%;
    margin-left: 16%;
    opacity: 0.125;
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
    position: sticky;
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
    background-color: WHITE;
    width: 90%;
    height: 90%;
    margin-left: 8%;
    margin-top: 2%;
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
<div class="iconBox">
  <img class="icon" id="logo" src="image/ebts_trans.png" style="margin-top:15%;">
</div>
<div class="home" style='overflow:auto;'>
  <h1 style='color:#38231d;'>··· EBTS LISTING ···</h1>
  <li>
    <center><a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal" style="height:35px;width:200px;padding-bottom:2.5%;letter-spacing: 0.2em;font-family:'Moonglade';border-radius: 12px;font-size:1.7em;color:white;background-color:#38231d;">UPLOAD</a></center>
  </li>
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
      echo "<br><button class='btn' style='width:100%;background-color:#b39a88;'><a href='information.php?id=" . $row['id'] . "' style='color:white;letter-spacing: 0.3em;text-decoration: none;'><b>EDIT</b></a></button>";
      echo "</div>";
    }
    ?>
  </div>
</div>

<body onload="realtimeClock()">


  <script>
    document.getElementById('logo').ondragstart = function() {
      return false;
    };
  </script>
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
        <img src="image/ebts_trans.png" style="width:70%;height:50%;margin-left:19.5%;">
        <a href="home.php" onclick="return confirm('Are you sure to logout?')">
          <i class="fa fa-power-off fa-2x"></i>
          <span class="nav-text">
            Logout
          </span>
        </a>
      </li>
    </ul>
  </nav>
  <script>
    function img_pathUrl(input) {
      $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
    }
  </script>
  <section style="position:absolute;margin-top:0%;margin-left:48%;width:8%;">
    <!--upload modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow:auto;">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="form-group">

            </div>
            <div class="d-flex flex-column text-center">
              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <center><img src="image/headd.png" style="margin-top:-15%;width:25%;height:25%"></center>
                </div>
                <div class="form-group">
                  <img src="" id="img_url" alt="Upload Image" style="background: #ddd;width:100%;height: 75%;display: block;">
                  <input type="file" name="myfile" onChange="img_pathUrl(this);" required />

                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="email1" name="house" style='color:#38231d;' placeholder="House Name" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="password1" name="price" placeholder="Rate" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="email1" name="location" placeholder="Location" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="password1" name="capacity" placeholder="Guest" required>
                </div>
                <div class="form-group">
                  <label>Availability:</label>
                  <input type="date" class="form-control" id="password1" name="from_date" placeholder="MM/DD/YY" required>
                </div>
                <div class="form-group">
                  <label>TO:</label>
                  <input type="date" class="form-control" id="password1" name="to_date" placeholder="MM/DD/YY" required>
                </div>
                <a class="btn btn-info btn-block btn-round" href="#" data-toggle="modal" data-target="#nextmodal" style='background-color:#38231d;color:white;font-family:Moonglade;letter-spacing: 0.2em;'>NEXT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!--upload modal -->
  <div class="modal fade" id="nextmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group">

          </div>
          <div class="d-flex flex-column">
            <form method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <center><img src="image/headd.png" style="margin-top:-15%;width:50%;height:50%;"></center>
                <label style="color:#38231d;font-family:'Moonglade';font-size:1.2em;">STEP 2</label><br>
                <label style="color:#38231d;font-family:'Moonglade';font-size:1em;margin-top:2%;">Amneties:</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="TV" name="TV" value="TV" style='margin-left:5%;'>
                <label for="TV" style="color:#38231d;font-family:'Moonglade';"> TV</label>
                <input type="checkbox" id="AIRCONDITION" name="AIRCONDITION" value="AIRCONDITION" style='margin-left:15%;'>
                <label for="AIRCONDITION" style="color:#38231d;font-family:'Moonglade';"> AIR CONDITION</label>
                <input type="checkbox" id="DESK" name="DESK" value="DESK" style='margin-left:3.5%;'>
                <label for="DESK" style="color:#38231d;font-family:'Moonglade';"> DESK</label><br><br>
                <input type="checkbox" id="WIFI" name="WIFI" value="WIFI" style='margin-left:5%;'>
                <label for="WIFI" style="color:#38231d;font-family:'Moonglade';"> WIFI</label>
                <input type="checkbox" id="CLOSET" name="CLOSET" value="CLOSET" style='margin-left:12.6%;'>
                <label for="CLOSET" style="color:#38231d;font-family:'Moonglade';"> CLOSET</label>
                <input type="checkbox" id="WASHING" name="WASHING" value="WASHING MACHINE" style='margin-left:16%;'>
                <label for="WASHING" style="color:#38231d;font-family:'Moonglade';"> WASHING MACHINE</label><br><br>
                <input type="checkbox" id="NETFLIX" name="NETFLIX" value="NETFLIX" style='margin-left:5%;'>
                <label for="NETFLIX" style="color:#38231d;font-family:'Moonglade';"> NETFLIX</label>
                <input type="checkbox" id="REF" name="REF" value="REFRIGERATOR" style='margin-left:6%;'>
                <label for="REF" style="color:#38231d;font-family:'Moonglade';"> REFRIGERATOR</label>
                <input type="checkbox" id="UTENSIL" name="UTENSIL" value="UTENSILS" style='margin-left:3.5%;'>
                <label for="UTENSIL" style="color:#38231d;font-family:'Moonglade';"> UTENSILS</label><br><br>
                <label>Spaces:</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="KITCHEN" name="KITCHEN" value="KITCHEN" style='margin-left:5%;'>
                <label for="KITCHEN" style="color:#38231d;font-family:'Moonglade';"> KITCHEN</label>
                <input type="checkbox" id="WASHER" name="WASHER" value="WASHER" style='margin-left:15%;'>
                <label for="WASHER" style="color:#38231d;font-family:'Moonglade';"> WASHER</label>
                <input type="checkbox" id="DRYER" name="DRYER" value="DRYER" style='margin-left:12.3%;'>
                <label for="DRYER" style="color:#38231d;font-family:'Moonglade';"> DRYER</label><br><br>
                <input type="checkbox" id="PARKING" name="PARKING" value="PARKING" style='margin-left:5%;'>
                <label for="PARKING" style="color:#38231d;font-family:'Moonglade';"> PARKING</label>
                <input type="checkbox" id="POOL" name="POOL" value="POOL" style='margin-left:14.6%;'>
                <label for="POOL" style="color:#38231d;font-family:'Moonglade';"> POOL</label>
                <input type="checkbox" id="GYM" name="GYM" value="GYM" style='margin-left:17%;'>
                <label for="GYM" style="color:#38231d;font-family:'Moonglade';"> GYM</label><br><br>
                <label style="color:#38231d;font-family:'Moonglade';">Description or Other Details:</label>
              </div>
              <div class="form-group">
                <input type="text" style="decoration:none;outline: none; border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: groove;width:100%;">
              </div>
              <button class="btn btn-info btn-block btn-round" name="btn" style='background-color:#38231d;font-family:Moonglade;letter-spacing: 0.2em;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style:hidden;'>UPLOAD</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  </form>







  <?php
  $dbh = new PDO("mysql:host=localhost;dbname=db_ebts", "root", "");
  if (isset($_POST['btn'])) {
    $location = $_POST['location'];
    $price = $_POST['price'];
    $capacity = $_POST['capacity'];
    $house = $_POST['house'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];

    $name = $_FILES['myfile']['name'];
    $new = $name . rand(10, 1000);
    $type = $_FILES['myfile']['type'];
    $data = file_get_contents($_FILES['myfile']['tmp_name']);
    $stmt = $dbh->prepare("insert into tbl_picture values('',?,?,?,?,?,?,?,?,?)");
    $stmt->bindParam(1, $new);
    $stmt->bindParam(2, $type);
    $stmt->bindParam(3, $data);
    $stmt->bindParam(4, $location);
    $stmt->bindParam(5, $price);
    $stmt->bindParam(6, $capacity);
    $stmt->bindParam(7, $house);
    $stmt->bindParam(8, $from_date);
    $stmt->bindParam(9, $to_date);
    $stmt->execute();
    if ($stmt == TRUE) {
  ?>
      <script>
        alert("Uploaded!");
        location.replace("upload-image.php");
      </script>
  <?php
    }
  }
  ?>


</body>

</html>