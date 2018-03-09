<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "mydb";
	$con = mysqli_connect($servername, $username, $password, $database);
	if(mysqli_connect_error()){
	    echo "Failed to Connect the Database".mysqli_connect_error();
	}
?> 