<div class="card col-md-6">

    <h5 class="card-header info-color white-text text-center py-7">
        <strong>Recently Uploaded Files</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-6 pt-0">
         <?php
          include('../logic/dbconnect.php');

          $select_sql="SELECT * FROM uploads ORDER BY id DESC LIMIT 7";
          $select_query=mysqli_query($conn,$select_sql);

          ?>
            
<div class="table-responsive">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Amin Name</th>
        <th scope="col">File Name</th>
      </tr>
    </thead>
    <tbody>
        <?php if (mysqli_num_rows($select_query) > 0) { 
          while($row = mysqli_fetch_assoc($select_query)) {?>
      <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['admin_name']; ?></td>
        <td><?php ?> <a href="../links/server-uploads/<?php echo $row['filename']; ?>">  <?php echo $row['filename']; ?> </a></td>
      </tr>
        <?php }?>
    </tbody>
  </table>

</div>
          <?php }else{
            echo "The search returned zero number of files.</br>
                  Options : <br>
                  <ul>
                    <li>Populate the Database</li>
                    <li>Contact the administrator</li>
                  </ul>
             ";
          }
        ?> 
    </div>

</div>
<!-- Material form contact -->
<div class="card col-md-5">

    <h5 class="card-header info-color white-text text-center py-7">
        <strong>Upload content</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-6 pt-0">

        <!-- Form -->
        <form method="Post" action="../logic/upload.php" enctype="multipart/form-data">


            <!-- input box -->
            <div class="md-form">
                <input type="file" id="uploadfile"  name="uploadfile" class="form-control">
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="submit"><i class="fa fa-upload mr-3"></i>Upload</button>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form contact -->