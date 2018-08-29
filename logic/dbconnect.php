<?php
	$host="localhost";
	$username="root";
	$dbident="server";
	$password="";

	$conn = mysqli_connect($host,$username,$password,$dbident);
	if (!mysqli_connect()) {
		echo "Connection to database failed";
	}
?>