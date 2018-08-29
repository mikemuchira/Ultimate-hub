<?php
	
	$host="localhost";
	$username="root";
	$pass="";
	$dbident="server";

	$dbconnection="mysqli_connect('$host','$username','$dbident','$pass')";
	if (!mysqli_connect()) {
		echo "verify database connection";
	}
?>