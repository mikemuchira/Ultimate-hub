<?php
	require_once("dbconnect.php");

	if (isset($_POST['request_access'])) {
		$userid=$_POST['email'];
		$userkey=md5($_POST['password']);

		$access_sql="SELECT * FROM users WHERE email='$userid' AND user_id='$userauth'";
		$access_query=mysqli_query($dbconnection,$access_sql);
		$access_rs=mysqli_fetch_assoc($access_query);

		if ($access_rs['email']==$userid && $access_rs['user_id']==$userauth) {
			echo "success";
		}else{
			echo "error";
		}

	}
?>