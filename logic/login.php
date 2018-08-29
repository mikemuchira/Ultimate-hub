<?php
	include('dbconnect.php');

	if (isset($_POST['request_access'])) {
		$admin_name=$_POST['admin_ident'];
		$admin_auth=$_POST['admin_key'];

		$access_sql="SELECT * FROM admin WHERE admin_ident = '$admin_name' AND admin_key='$admin_auth'";
		$access_query= mysqli_query($conn,"SELECT * FROM admin")or die(mysqli_error($conn));
		$access_rs= mysqli_fetch_assoc($access_query);

		if ($access_rs['admin_ident']==$admin_name && $access_rs['admin_key']==$admin_auth) {
			session_start();
			$_SESSION['admin']=$access_rs['admin_ident'];
			$_SESSION['time']=time();
			if ($access_rs['type']==1) {
				$_SESSION['sudo']=$access_rs['type'];
			}
			header("Location:../redirect");
		}else{
			session_start();
			$error="Invalid Credentials";
			$_SESSION['error']=$error;
			header("Location:../admin");
		}
	}
?>

