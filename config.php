<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_ebts";
	
	//Create Connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
	//Check Connection
	if($conn -> connect_error){
		die("Connection Failed: ".$conn ->connect_error);
  }
  
?>