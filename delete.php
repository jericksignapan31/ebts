<?php
require "config.php";
$Id = $_GET['id'];
$sql="DELETE FROM tbl_picture WHERE name='$Id'";
$result=$conn->query($sql);
if($result==TRUE){
    ?>
    <script>
    alert("Deleted!");
    location.replace("upload-image.php");
    </script>
<?php
}
else{
    echo "wrong query";
}
?>