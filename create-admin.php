<?php 
	include("config.php");
 ?>
<html>
    <head>
        <title>Create Admin</title>

        <link rel="icon" href="image/TRANSPARENT BG.png">
        <link rel ="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css" type="text/css"/>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
    html{
	scroll-behavior: smooth;
}
*{
    margin: 0;
    padding: 0;
}
body{
    overflow-x: hidden;
    background-color: #ffffff;
}

.icon{
  border-radius: 100%;
  width: 450px;
  height: 450px;
  position: absolute;
  margin-top: -3%;
  margin-left: 29%;
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
font-size:20px;
}


.main-menu:hover,nav.main-menu.expanded {
width:250px;
overflow:visible;
}

.main-menu {
background:#38231d;
border-right:1px solid #e5e5e5;
position:absolute;
top:0;
bottom:0;
height:100%;
left:0;
width:60px;
overflow:hidden;
-webkit-transition:width .05s linear;
transition:width .05s linear;
z-index:1000;
}

.main-menu>ul {
margin:7px 0;
}

.main-menu li {
position:relative;
display:block;
width:250px;
}

.main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:#999;
 font-family: arial;
font-size: 14px;
text-decoration:none;
-webkit-transition:all .1s linear;
transition:all .1s linear;
  
}

.main-menu .nav-icon {
position:relative;
display:table-cell;
width:60px;
height:36px;
text-align:center;
vertical-align:middle;
font-size:18px;
}

.main-menu .nav-text {
position:relative;
display:table-cell;
vertical-align:middle;
width:190px;
  font-family: 'Titillium Web', sans-serif;
}

.main-menu>ul.logout {
position:absolute;
left:0;
bottom:0;
}

.no-touch .scrollable.hover {
overflow-y:hidden;
}

.no-touch .scrollable.hover:hover {
overflow-y:auto;
overflow:visible;
}

a:hover,a:focus {
text-decoration:none;
}

nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
}

nav ul,nav li {
outline:0;
margin:0;
padding:0;
}
.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#fff;
background-color:#5fa2db;
}
a:hover,a:focus {
text-decoration:none;
}

nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
}

nav ul,nav li {
outline:0;
margin:0;
padding:0;
}
.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#fff;
background-color:#5fa2db;
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

#clock{
  width: 100%;
  position: absolute;
  font-size: 9vw;
  color: black;
  text-align: center;
  font-family: 'Roboto', sans-serif;
}

.home{
  background-color: #f0ffdf;
  box-shadow: 1px -1px 14px 0px rgba(1, 95, 150, 0.568);
  width: 70%;
  height: 90%;
  margin-left: 18%;
  margin-top: 2%;
  position: absolute;
  border-radius: 15px;
  opacity: 0.9;
}
.home h1{
  font-size: 50px;
  font-family: 'Orelega One', cursive;
  letter-spacing: 2px;
  text-align: center;
  margin-top: 2%;
}
.home p{
  text-decoration: underline;
  font-size: 40px;
  font-family: 'Quicksand', sans-serif;
  text-align: center;
  margin-top: 3%;
}
    .home{
  background-color: #f0ffdf;
  box-shadow: 1px -1px 14px 0px rgba(1, 95, 150, 0.568);
  width: 70%;
  height: 90%;
  margin-left: 18%;
  margin-top: 2%;
  position: absolute;
  border-radius: 15px;
  opacity: 0.9;
}
.home h1{
  font-size: 50px;
  font-family: 'Orelega One', cursive;
  letter-spacing: 2px;
  text-align: center;
  margin-top: 2%;
}
.home p{
  text-decoration: underline;
  font-size: 40px;
  font-family: 'Quicksand', sans-serif;
  text-align: center;
  margin-top: 3%;
}


#customers td, #customers th {
  font-size: 15px;
  padding: 8px;
  text-align: center;
  border-bottom: 2pt solid black;
}

h3 {
      margin: 5px 0;
      font-size: 30px;
      }
      
#customers tr:nth-child(even){background-color: transparent;}

#customers tr:hover {background-color: transparent;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #343434;
  color: #f0ffdf;
  text-align: center;
}

.app {
  display:inline-block;
  padding:10px 20px;
  background-color: #1BBA93;
  font-size:17px;
  border:none;
  border-radius:5px;
  color:#bcf5e7;
  cursor:pointer;
}

.app:hover {
 background-color: #169c7b;
 color:white;
}

.btn {
  display:inline-block;
  padding:10px 20px;
  background-color: #1BBA93;
  font-size:17px;
  border:none;
  border-radius:5px;
  color:#bcf5e7;
  cursor:pointer;
}

.btna {
  display:inline-block;
  padding:10px 20px;
  background-color: #1BBA93;
  font-size:17px;
  border:none;
  border-radius:5px;
  color:#bcf5e7;
  cursor:pointer;
}

.btnb {
  display:inline-block;
  padding:10px 20px;
  background-color: #1BBA93;
  font-size:17px;
  border:none;
  border-radius:5px;
  color:#bcf5e7;
  cursor:pointer;
}

.home .label-title {
  color:rgba(1, 77, 128, 0.904);
  font-size: 17px;
  font-weight: bold;
}
.horizontal-group2 .btn{
  margin-top: 1.5%;
  margin-bottom: -14%;
  margin-left: 5%;
  float:left;
  width:10%;
  position: absolute;
}

.horizontal-group2 .btna{
  margin-top: 6.5%;
  margin-bottom: -14%;
  margin-left: 5%;
  float:left;
  width:15%;
  position: absolute;
}
.icon{
  border-radius: 100%;
  width: 450px;
  height: 450px;
  position: absolute;
  margin-top: -3%;
  margin-left: 29%;
  opacity: 0.2;
}
.horizontal-group2 .btnb{
  margin-top: 12.5%;
  margin-bottom: -14%;
  margin-left: 5%;
  float:left;
  width:15%;
  position: absolute;
}
.account-details, .personal-details {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .account-details >div, .personal-details >div >div {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      }
      .account-details >div, .personal-details >div, input, label {
      width: 100%;
      }
      label {
      padding: 0 5px;
      text-align: right;
      vertical-align: middle;
      }
      input {
      padding: 2px;
      vertical-align: middle;
      }
      .checkbox {
      margin-bottom: 10px;
      }
      .checkbox2 {
      margin-left:-100%;
      float:left;
      margin-bottom: -20%;
      }
      .terms-mailing2{
        float:right;
      margin-bottom: -20px;
      }
      select, .children, .gender, .bdate-block {
      width: calc(100% + 26px);
      padding: 5px 0;
      }

      .checkbox input, .children input {
      width: auto;
      margin: -2px 10px 0 0;
      }
      .checkbox2 input, .children input {
      width: auto;
      margin: -2px 10px 0 0;
      }
      .checkbox a {
      color: #8ebf42;
      }
      .checkbox a:hover {
      color: #82b534;
      }
      button {
      width: 100%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #8ebf42; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #82b534;
      }
      @media (min-width: 568px) {
      .account-details >div, .personal-details >div {
      width: 50%;
      }
      label {
      width: 40%;
      }
      input {
      width: 50%;
      }
      select, .children, .gender, .bdate-block {
      width: calc(60% + 16px);
      }
    }
    </style>
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Orelega+One&display=swap');
    </style>
    
    <form action="" method= POST>
        <div class="area-home">
          <div class="home">
          <h1 style='color:#38231d;'>··· ADMIN CREATOR ···</h1>
                <br> 
                <div class="iconBox">
                    <img class="icon" id="logo" src="image/ebts_trans.png" style="width:50%;margin-left:25%;margin-top:1%;">
                  </div>

                  <script>
             document.getElementById('logo').ondragstart = function () { return false; };
                </script>
                  <fieldset>
        <legend>
          <h3>Personal Details</h3>
        </legend>
        <div  class="personal-details">
          <div>
              <div><label>First Name: </label><input type="text" name="fname" placeholder="First Name" required></div>

              <div><label>Middle Initial: </label><input type="text" name="mname" placeholder="Middle Initial" required></div>

              <div><label>Last Name: </label><input type="text" name="lname" placeholder="Last Name" required></div>

          </div>
        </div>
      </fieldset>

    <fieldset>
        <legend>
          <h3>Account Details</h3>
        </legend>
        <div  class="account-details">
          <div><label>Username: </label><input type="text" name="user" placeholder="Usermame" required></div>
          <div><label>Password: </label><input type="password" name="pass" id="myInput" onkeyup="passwordStrength(this.value)" class="form-input"  maxlength="30" minlength="8" placeholder="Password" required></div>
      </fieldset>
      
      <fieldset2>
      <div  class="terms-mailing2">
          <div class="checkbox2">
            <input type="checkbox" name="checkbox2"onclick="myFunction()" >
            <span>Show Password</span>
              <script>
              function myFunction() 
                {
                  var x = document.getElementById("myInput");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
              </script>
          </div>
        </div>
        </fieldset2>
                <br><br><br><br><br><br><br><br><br>
        <button type="submit" name="sumitt" id="submit">Create</button>

     
          </div>
        </div>
              </form>
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
                       <i class="fa fa-user-secret fa-2x" ></i>
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

        
  </body>
  </html>

  <?php
if(isset($_POST['sumitt'])){
  $lname = $_POST['lname'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $fullname = $fname." ".$mname." ".$lname;
  $sql = "INSERT INTO tbl_admin (fullname,username,password) VALUES ('$fullname','$user','$pass')";
  $result = $conn->query($sql);
  if($result == true){
    ?>
    <script>
      alert("Successful!");
      location.replace("create-admin.php");
    </script>
    <?php
  }
  else{
    echo "WRONG";
  }
}


?>