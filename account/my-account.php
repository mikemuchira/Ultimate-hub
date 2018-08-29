<?php 
	include('../logic/dbconnect.php');
	session_start(); 
	$admin_name= $_SESSION['admin'];

	$records_sql = "SELECT * FROM admin where admin_ident='$admin_name'";
	$records_query = mysqli_query($conn,$records_sql);
	$records_rs = mysqli_fetch_assoc($records_query);
?>
<div class="card text-center col-md-5">
    <h3 class="card-header primary-color white-text">Current account Info.</h3>
    <div class="card-body">
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">First Name</th>
		      <th scope="col"> <?php echo $records_rs['first_name']; ?> </th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Username</td>
		      <td> <?php echo $records_rs['admin_ident']; ?> </td>
		    </tr>
		    <tr>
		      <td>Last Name</td>
		      <td> <?php echo $records_rs['last_name']; ?> </td>
		    </tr>
		    <tr>
		      <td>Email Address</td>
		      <td><?php echo $records_rs['admin_email']; ?></td>
		    </tr>
		  </tbody>
		</table>
    </div>
</div>
<div class="card text-center col-md-6">
    <h3 class="card-header primary-color white-text">Update your account credentials</h3>
    <div class="card-body">
       <form method="post" action="../logic/account-update.php">
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">Admin Username</th>
		      <th scope="col"><input type="text" name="username" value="" placeholder="eg. <?php echo $_SESSION['admin']; ?>" required></th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Email Address</td>
		      <td><input type="email" name="email" value="" placeholder="eg. <?php echo $records_rs['admin_email']; ?>" required></td>
		    </tr>
		    <tr>
		      <td>Update Password</td>
		      <td><input type="Password" name="password" value="" placeholder="Enter New Password" required></td>
		    </tr>		    
		  </tbody>
		</table>
		    	<button class="btn btn-primary" type="submit" name="update"> Update</button>
	  </form> 	
    </div>
</div>