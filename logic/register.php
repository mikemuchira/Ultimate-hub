<?php
	include('dbconnect.php');
	session_start();

	if (isset($_POST['register'])) {
		$username=$_POST['admin_ident'];
		$email=$_POST['admin_email'];
		$password=$_POST['admin_key'];

		$register_sql="INSERT INTO admin (admin_ident,admin_email,admin_key) VALUES ('$username','$email','$password')";

		if ($result = $conn->query($register_sql)) {
			$register_success="New Administrator successfully added";
			$_SESSION['register_success']=$register_success;
			header("Location:../account");
		}else{
			$register_error="There was an error registering the new Administrator".mysqli_error();
			$_SESSION['register_error']=$register_error;
			header("Location:../account");
		}

	}
?>