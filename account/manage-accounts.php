<?php
  include('../logic/dbconnect.php');

  $manage_accounts_sql = "SELECT * FROM admin";
  $manage_accounts_query = mysqli_query($conn,$manage_accounts_sql);

?>
<div class="card text-center col-md-12">
    <h3 class="card-header primary-color white-text"> Manage All Accounts in the Database</h3>
    <div class="card-body">
      <div class="table-responsive">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Admin Username</th>
              <th scope="col">Email Address</th>
              <th scope="col">Account Type</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if (mysqli_num_rows($manage_accounts_query)>0) {
                while ($row=mysqli_fetch_assoc($manage_accounts_query)) {?>
                <tr>
                  <th scope="row"><?php echo $row['id']; ?></th>
                  <td><?php echo $row['first_name'];?></td>
                  <td><?php echo $row['last_name'];?></td>
                  <td><?php echo $row['admin_ident'];?></td>
                  <td><?php echo $row['admin_email'];?></td>
                  <td><?php echo $row['type'];?></td>
                </tr>
                <?php }
              }
            ?>
          </tbody>
        </table>
    </div>
  </div>

</div>