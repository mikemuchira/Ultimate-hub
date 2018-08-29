<?php
	include('dbconnect.php');

	if (isset($_POST['update'])) {
		$admin_username =  strtolower($_POST['username']);
		$admin_email = $_POST['email'];
		$admin_key = $_POST['password'];

		$update_sql = "UPDATE admin SET admin_email='$admin_email', admin_key='$admin_key' WHERE admin_ident='$admin_username'";

		if ($result = $conn->query($update_sql)) {
			session_start();
			$_SESSION['update_success']=$admin_username;
			header("Location:../account");
		}else{
			session_start();
			$_SESSION['update_error']=$admin_key;
			header("Location:../account");
		}
	}
?>