<?php 
	session_start(); 
?>
<div class="card text-center col-md-5">
    <h3 class="card-header primary-color white-text">Account Details</h3>
    <div class="card-body">
    	<?php
    		if (isset($_SESSION['sudo'])) {?>
			       <form method="post" action="../logic/account-approval.php">
					<table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">Number of Administators</th>
					      <th scope="col"><?php echo $_SESSION['admin']; ?></th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td></td>
					      <td><input type="email" name="email" value="admin@admin" required></td>
					    </tr>
					    <tr>
					      <td>Update Password</td>
					      <td><input type="Password" name="Password" value="" placeholder="Enter New Password" required></td>
					    </tr>		    
					  </tbody>
					</table>
					    	<button class="btn btn-primary" type="submit" name="update"> Update</button>
				  </form> 	
	    		<?php }
    		else{
    			echo "You need to Contact Stark to activate this Functionality";
    		}
    	?>
    </div>
</div>
<div class="card text-center col-md-6">
    <h3 class="card-header primary-color white-text">Basic User Analytics</h3>
    <div class="card-body">
    	<?php
	    		if (isset($_SESSION['register_success'])) {
	    			?>
<!-- 	    			<script type="text/javascript">
	    				alert('<?php echo $_SESSION['register_success'] ;?>');
	    			</script> -->
	    			<?php
	    		}elseif (isset($_SESSION['register_error'])) {
	    			 echo $_SESSION['register_error'];
	    		}

    	?>
       <form method="post" action="../logic/account-update.php">
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">Admin Username</th>
		      <th scope="col"><input type="text" name="Username" value="<?php echo $_SESSION['admin']; ?>" required></th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Email Address</td>
		      <td><input type="email" name="email" value="admin@admin" required></td>
		    </tr>
		    <tr>
		      <td>Update Password</td>
		      <td><input type="Password" name="Password" value="" placeholder="Enter New Password" required></td>
		    </tr>		    
		  </tbody>
		</table>
		    	<button class="btn btn-primary" type="submit" name="update"> Update</button>
	  </form> 	
    </div>
</div>