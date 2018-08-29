    <div class="card col-md-5">
        <?php
            include('../logic/dbconnect.php');
            $get_sql="SELECT * FROM admin";
            $get_query=mysqli_query($conn,$get_sql);
        ?>

        <h3 class="card-header primary-color text-center white-text"> Taken Usernames</h3>
        <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col"> Id </th>
                  <th scope="col"> Username </th>
                  <th scope="col"> Account type </th>
                </tr>
              </thead>
              <tbody>
              <?php
                if (mysqli_num_rows($get_query)>0) {
                  while ($row=mysqli_fetch_assoc($get_query)) {?>
                  <tr>
                          <td><?php echo $row['id']; ?></td>
                          <td> <?php echo $row['admin_ident']; ?> </td>
                          <td> <?php echo $row['type']; ?> </td>
                        </tr>
                  <?php }
                }
              ?>
              </tbody>
            </table>
        </div>
    </div>
    <div class="card col-md-6">
        <div class="card-body">
            <!--Header-->
            <div class="text-center">
                <h3 class="black-text"><i class="fa fa-user black-text"></i> Register Admin:</h3>
                <hr class="hr-light">
            </div>
            <form method="post" action="../logic/register.php">
                <!--Body-->
                <div class="md-form">
                    <i class="fa fa-user prefix black-text active"></i>
                    <input type="text" name="admin_ident" class="form-control" required>
                    <label for="form3" class="active black-text">Admin's name</label>
                </div>
                <div class="md-form">
                    <i class="fa fa-envelope prefix black-text active"></i>
                    <input type="email" name="admin_email" class="form-control" required>
                       <label for="form2" class="active black-text">Admin's email</label>
                
                 <div class="md-form">
                    <i class="fa fa-lock prefix black-text active"></i>
                     <input type="password" name="admin_key" class="form-control" required>
                    <label for="form4" class="active black-text">Admin's password</label>
                    
                 <div class="text-center">
                         <button class="btn btn-indigo" name="register">Add Admin</button>
                     <hr class="hr-light mb-3 mt-4">
                 </div>
            </form>
        </div>
    </div>