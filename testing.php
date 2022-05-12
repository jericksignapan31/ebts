<?php
require "config.php";
?>

<html>
<head>
<title>TESTING DRAFT</title>
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


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

<style>

  </style>
</head>
<body style="background-color:white;">
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
            <input type="checkbox" id="AIRCONDITION" name="AIRCONDITION" value="AIRCONDITION" style='margin-left:15%;' >
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
            <input type="checkbox" id="WASHER" name="WASHER" value="WASHER" style='margin-left:15%;' >
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
</body>
</html>