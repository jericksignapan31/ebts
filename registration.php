<?php
require_once "config.php";

$fullname = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['pass'];

$sql = "INSERT INTO tbl_customer(fullname,address,mobile_number,birthday,email,username,password) VALUES ('$fullname','$address','$mobile','$date','$email','$user','$pass')";
$result = $conn->query($sql);
if($result==TRUE){
?>
<script>
    alert('Successfully Registered!');
    location.replace("home.php");
    </script>
<?php
}
else{
    ?>
    <script>
    alert('Maling Query!');
    location.replace("home.php");
    </script>
<?php
}
?>