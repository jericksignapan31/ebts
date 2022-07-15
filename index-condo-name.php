///*this is a comment, is related with dbh.condo-name.php**//
<?php
    include_once 'includes/dbh.condo-name.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
    $sql = "SELECT * FROM tbl_picture;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row ['name'];
        }
    }
?>
</body>
</html>