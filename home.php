<?php
require "config.php";
?>

<html>

<head>
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


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
    body {
      background-image: url("/image/ebts.jpg");
      background-position: 50% 50%;
      background-repeat: repeat;
      background-color: black;
    }

    .imahe {
      position: relative;
      width: 10%;
      height: 10%;
    }


    #card1 {
      position: absolute;
      margin-top: 40%;
      margin-left: 7%;
      height: 30%;

    }

    #card2 {
      position: absolute;
      margin-top: 40%;
      margin-left: 30%;
      height: 30%;
    }

    #card3 {
      position: absolute;
      margin-top: 40%;
      margin-left: 53%;
      height: 30%;
    }

    #card4 {
      position: absolute;
      margin-top: 40%;
      margin-left: 78%;
      height: 30%;
    }

    #card5 {
      position: absolute;
      margin-top: 60%;
      margin-left: 7%;
      height: 30%;
    }

    #card6 {
      position: absolute;
      margin-top: 60%;
      margin-left: 30%;
      height: 30%;
    }

    #card7 {
      position: absolute;
      margin-top: 60%;
      margin-left: 53%;
      height: 30%;
    }

    #card8 {
      position: absolute;
      margin-top: 60%;
      margin-left: 78%;
      height: 30%;
    }

    #card9 {
      position: absolute;
      margin-top: 80%;
      margin-left: 20%;
      height: 30%;
    }

    #card10 {
      position: absolute;
      margin-top: 80%;
      margin-left: 65%;
      height: 30%;
    }




    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: absolute;
      margin: auto;
      margin-left: 23%;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }



    .page-footer {
      position: relative;
      background-color: white;
      margin-top: 0%;
    }



    .container {
      padding: 2rem 0rem;
    }

    @media (min-width: 576px) {
      .modal-dialog {
        max-width: 400px;
      }

      .modal-dialog .modal-content {
        padding: 1rem;
      }
    }

    .modal-header .close {
      margin-top: -1.5rem;
    }

    .form-title {
      margin: -2rem 0rem 2rem;
    }

    .btn-round {
      border-radius: 3rem;
    }

    .delimiter {
      padding: 1rem;
    }

    .social-buttons .btn {
      margin: 0 0.5rem 1rem;
    }

    .signup-section {
      padding: 0.3rem 0rem;
    }
  </style>
</head>

<body style="background-color:white;">

  <nav class="navbar navbar-expand-lg navbar-light bg-white rounded">
    <div class="container-fluid shadow p-3 mb-5 bg-gray rounded">
      <img src="image/headd.png" style="width:8%;height:8%">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex justify-content-center">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" style="color:#F2C83B;font-family:Merriweather">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#ratefooter" style="color:black;font-family:Merriweather">ROOMS AND RATE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#locationfooter" style="color:black;font-family:Merriweather">LOCATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactfooter" style="color:black;font-family:Merriweather">CONTACT</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black;font-family:Merriweather">
                LOGIN/REGISTER
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal" style="padding-left:35%;font-family:Merriweather">LOGIN</a></li>
                <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#signupModal" style="padding-left:33%;font-family:Merriweather">SIGN UP</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>



  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="image/h1.png" style="width:80%;height:50%;margin-left:10%;">

    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="image/h2.png" style="width:80%;margin-left:10%;height:50%;">

    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="image/h3.png" style="width:80%;margin-left:10%;height:50%;">

    </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>



  <div class="welcome-remark" style="margin-left:40%;margin-top:45%">
    <h5 class="welcome" style="font-family:didot;color:#8b4334;font-size:30px;margin-left:10%;">WELCOME</h5>
    <p style="margin-left:-35%">Fully furnished boarding house. We accept short-term and long-term borders. We have also a staycation for studio-type rooms.</p>
    <p></p>
  </div>


  <section id="ratefooter">

    <div class="card" id="card1" style="width: 20rem;height:24rem;background-color:#ecf0f1;margin-top:10%;">
      <a href="#" data-toggle="modal" data-target="#m_card1"><img src="image/1.png" class="card-img-top" alt="..."></a>
    </div>


    <div class="card" id="card2" style="width: 20rem;height:24rem;background-color:#ecf0f1;margin-top:10%;">
      <a href="#" data-toggle="modal" data-target="#m_card2"><img src="image/2.png" class="card-img-top" alt="..."></a>
    </div>

    <div class="card" id="card3" style="width: 20rem;height:24rem;background-color:#ecf0f1;margin-top:10%;">
      <a href="#" data-toggle="modal" data-target="#m_card3"><img src="image/8.png" class="card-img-top" alt="..."></a>
    </div>

    <div class="card" id="card4" style="width: 20rem;height:24rem;background-color:#ecf0f1;margin-top:10%;">
      <a href="#" data-toggle="modal" data-target="#m_card4"> <img src="image/num4.png" class="card-img-top" alt="..."></a>
    </div>

    <div class="card" id="card5" style="width: 20rem;height:24rem;background-color:#ecf0f1;margin-top:35%;">
      <a href="#" data-toggle="modal" data-target="#m_card5"><img src="image/num5.png" class="card-img-top" alt="..."></a>
    </div>

    <div class="card" id="card6" style="width: 20rem;height:24rem;background-color:#ecf0f1;margin-top:35%;">
      <a href="#" data-toggle="modal" data-target="#m_card6"><img src="image/5.png" class="card-img-top" alt="..."></a>
    </div>

    <div class="card" id="card7" style="width: 20rem;height:24rem;background-color:#ecf0f1;margin-top:35%;">
      <a href="#" data-toggle="modal" data-target="#m_card7"><img src="image/6.png" class="card-img-top" alt="..."></a>
    </div>

    <div class="card" id="card8" style="width: 20rem;height:24rem;background-color:#ecf0f1;margin-top:35%;">
      <a href="#" data-toggle="modal" data-target="#m_card8"><img src="image/7.png" class="card-img-top" alt="..."></a>
    </div>

    <div class="card" id="card9" style="width: 20rem;height:24rem;background-color:#ecf0f1;margin-top:60%;">
      <a href="#" data-toggle="modal" data-target="#m_card9"><img src="image/num9.png" class="card-img-top" alt="..."></a>
    </div>




  </section>

  <div class="service" style="position:absolute;margin-top:95%;margin-left:30%;">
    <a><img src="image/service.png"></a>
  </div>
  <section id="locationfooter">



    <div class="mapouter">
      <div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.790103407343!2d120.99405001744384!3d14.611029599999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b60300001d5d%3A0x8b5106ceb6a4b550!2sMA%20Patricia%20Manotoc%20Boarding%20House!5e0!3m2!1sen!2sph!4v1645419356228!5m2!1sen!2sph" width="150%" height="90%" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br>
        <style>
          .mapouter {
            position: relative;
            text-align: right;
            height: 625px;
            width: 810px;
            margin-top: 110%;
            margin-left: 5%
          }
        </style>
      </div>
    </div>

  </section>

  <section id="contactfooter">
    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mx-auto">

            <!-- Content -->
            <h5 style="margin-left:-15%;" class="font-weight-bold text-uppercase mt-3 mb-4">Contact Us: 0965 354 6415</h5>
          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <hr>

      <!-- Call to action -->
      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
          <h5 class="mb-1">Follow us on Social:</h5>
        </li>
        <li class="list-inline-item">
          <!-- FACEBOOK LOGO -->
          <a href="https://www.facebook.com/eBoardinghouseTransientStaycation/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
          </a>
        </li>

      </ul>
      <!-- Call to action -->

      <hr>

    </footer>
    <!-- Footer -->
  </section>


  <!--login modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-title text-center">
            <img src="image/TRANSPARENT BG.png" style="width:40%;height:40%">
          </div>
          <div class="d-flex flex-column text-center">
            <form action="" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" id="email1" name="username" placeholder="Your username...">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password1" name="pass" placeholder="Your password...">
              </div>
              <button type="submit" class="btn btn-info btn-block btn-round" name="login">Login</button>
            </form>

            <div class="text-center text-muted delimiter">or use a social network</div>
            <div class="d-flex justify-content-center social-buttons">
              <a href="https://www.facebook.com/eBoardinghouseTransientStaycation/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ending of login modal -->

  <!--SIGN UP MODAL -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-title text-center">
            <h4>REGISTRATION</h4>
          </div>
          <div class="d-flex flex-column text-center">
            <form method="POST" action="registration.php">
              <div class="form-group">
                <input type="text" class="form-control" id="email1" name="name" placeholder="Your Fullname..." required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email1" name="address" placeholder="Your Address..." required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email1" name="mobile" placeholder="Your Mobilenumber..." required>
              </div>
              <div class="form-group">
                <input type=date class="form-control" name="date" id="email1" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email1" name="email" placeholder="Your Email..." required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email1" name="username" placeholder="Your username..." required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password1" name="pass" placeholder="Your password..." required>
              </div>
              <div class="form-group">
                <input type="checkbox" name="checkbox" id="terms" onchange="activateButton(this)"><span>I accept the <a href="image/terms.pdf" target="_blank">Privacy Policy Statement.</a></span>
                <button type="submit" class="btn btn-info btn-block btn-round">Register</button>
            </form>

            <div class="text-center text-muted delimiter">or use a social network</div>
            <div class="d-flex justify-content-center social-buttons">
              <a href="https://www.facebook.com/eBoardinghouseTransientStaycation/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- ENDING of SIGNUP modal -->
  <!--CARD 1 MODAL -->
  <div class="modal fade" id="m_card1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-body" style="width:150%;">
        <div class="d-flex flex-column text-center">
          <img src="image/University_belt.png" class="card-img-top" alt="..." style="width:180%;height:150%;">
        </div>
      </div>
    </div>
  </div>
  <!-- ENDING of CARD 1 modal -->
  <!--CARD 2 MODAL -->
  <div class="modal fade" id="m_card2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-body" style="width:150%;">
        <div class="d-flex flex-column text-center">
          <img src="image/Sunshine_100_City_Plaza.png" class="card-img-top" alt="..." style="width:180%;height:150%;">
        </div>
      </div>
    </div>
  </div>
  <!-- ENDING of CARD 2 modal -->
  <!--CARD 3 MODAL -->
  <div class="modal fade" id="m_card3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-body" style="width:150%;">
        <div class="d-flex flex-column text-center">
          <img src="image/Garden_Villa_Tanza.png" class="card-img-top" alt="..." style="width:180%;height:150%;">
        </div>
      </div>
    </div>
  </div>
  <!-- ENDING of CARD 3 modal -->
  <!--CARD 4 MODAL -->
  <div class="modal fade" id="m_card4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-body" style="width:150%;">
        <div class="d-flex flex-column text-center">
          <img src="image/Fully_Furnished_With_Balcony.png" class="card-img-top" alt="..." style="width:180%;height:150%;">
        </div>
      </div>
    </div>
  </div>
  <!-- ENDING of CARD 4 modal -->
  <!--CARD 5 MODAL -->
  <div class="modal fade" id="m_card5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-body" style="width:150%;">
        <div class="d-flex flex-column text-center">
          <img src="image/Axis_Residence.png" class="card-img-top" alt="..." style="width:180%;height:150%;">
        </div>
      </div>
    </div>
  </div>
  <!-- ENDING of CARD 5 modal -->
  <!--CARD 6 MODAL -->
  <div class="modal fade" id="m_card6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-body" style="width:150%;">
        <div class="d-flex flex-column text-center">
          <img src="image/Condominium_.png" class="card-img-top" alt="..." style="width:180%;height:150%;">
        </div>
      </div>
    </div>
  </div>
  <!-- ENDING of CARD 6 modal -->
  <!--CARD 7 MODAL -->
  <div class="modal fade" id="m_card7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-body" style="width:150%;">
        <div class="d-flex flex-column text-center">
          <img src="image/Tierra_Vista.png" class="card-img-top" alt="..." style="width:180%;height:150%;">
        </div>
      </div>
    </div>
  </div>
  <!-- ENDING of CARD 7 modal -->
  <!--CARD 8 MODAL -->
  <div class="modal fade" id="m_card8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-body" style="width:150%;">
        <div class="d-flex flex-column text-center">
          <img src="image/Anyana.png" class="card-img-top" alt="..." style="width:180%;height:150%;">
        </div>
      </div>
    </div>
  </div>
  <!-- ENDING of CARD 8 modal -->

  <!--CARD 9 MODAL -->
  <div class="modal fade" id="m_card9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-body" style="width:150%;">
        <div class="d-flex flex-column text-center">
          <img src="image/Garden_Villa_Dasma_Cavite.png" class="card-img-top" alt="..." style="width:180%;height:150%;">
        </div>
      </div>
    </div>
  </div>
  <!-- ENDING of CARD 9 modal -->


</body>

</html>
<?php

if (isset($_POST['login'])) {
  $user = $_POST['username'];
  $password = $_POST['pass'];
  $sql = "SELECT * FROM tbl_admin WHERE username ='$user' AND password ='$password'";
  $result = $conn->query($sql);
  $sql3 = "SELECT * FROM tbl_customer WHERE username ='$user' AND password ='$password'";
  $result3 = $conn->query($sql3);
  if ($result == TRUE) {
    while ($row = $result->fetch_assoc()) {
      $full = $row['fullname'];
      $sql2 = "INSERT INTO tbl_trail(name) VALUES('$full')";
      $result2 = $conn->query($sql2);
    }
  }


  if ($result->num_rows > 0) {
?>
    <script>
      alert('Hello <?php echo $user; ?>!');
      location.replace("admin-home.php");
    </script>
  <?php
  } else if ($result3->num_rows > 0) {
  ?>
    <script>
      alert('Hello <?php echo $user; ?>!');
      location.replace("customer-home.php");
    </script>
<?php
  }
}
?>
