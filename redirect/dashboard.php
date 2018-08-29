		<div class="card text-center border-success mb-4 col-md-5">
          <div class="card-header bg-transparent border-success">
	        <h4 class="card-title">File Upload</h4>
          </div>
          <div class="card-body text-success">
              <h4 class="card-title">Most recent File Upload</h4>
              <p class="card-title black-text">
		        	<?php
			        	session_start();
		        		if (isset($_SESSION['upload'])) {
            ?>
    <!-- succesfull upload -->
                <div class="alert alert-success animated bounce infinite" role="alert">
                  Hello <?php echo strtoupper($_SESSION['admin']) ?> the file <a href="../links/server-uploads/<?php echo $_SESSION['upload'];?>"> <?php echo $_SESSION['upload']; ?> </a> has been successfully uploaded.
                </div>
            <?php }elseif (isset($_SESSION['upload_error'])) {
            ?>
        <!-- failed upload -->
                <div class="alert alert-danger animated bounce infinite" role="alert">
                  Hello <?php echo strtoupper($_SESSION['admin']) ?>, there was an error uploading the file. Sorry!!
                </div>
            <?php 
		        		} elseif (isset($_SESSION['noupload'])) {
            ?>
        <!-- unauthorized with attempted upload request -->
                <div class="alert alert-warning animated bounce infinite" role="alert">
                  Hello <?php echo strtoupper($_SESSION['admin']) ?>, you are not authorized to upload files. Please contact Stark for authorization.
                </div>
            <?php 
                }  elseif (isset($_SESSION['nofile'])) {
            ?>
        <!-- authorized with no upload file -->
                <div class="alert alert-warning animated bounce infinite" role="alert">
                  Hello <?php echo strtoupper($_SESSION['admin']) ." " .$_SESSION['nofile'] ?> 
                </div>
            <?php 
                }  elseif (isset($_SESSION['sudo'])) {
            ?>
        <!-- authorized with no upload request -->
                <div class="alert alert-info animated bounce infinite" role="alert">
                  Hello <?php echo strtoupper($_SESSION['admin']) ?>, you are an authorized administrator. Proceed to upload section to upload content. 
                </div>
            <?php 
                }else{
            ?>
        <!-- aunauthorised upload -->
                <div class="alert alert-warning animated bounce infinite" role="alert">
                  Hello <?php echo strtoupper($_SESSION['admin']) ?>, you do not have authorization to upload files. Please contact Stark for approval.
                </div>
            <?php 
		        		}
		        	?>
                
              </p>
          </div>
          <div class="card border-success"></div>
          <div class="card-header bg-transparent border-success">
	        <h4 class="card-title">Quick Access</h4>
          </div>
          <div class="card-body text-success">
              <h4 class="card-title">Most frequent folder/file types</h4>
              <p class="card-title black-text">
		        Most frequent folder is : <a href="#">PROJECT-HUB</a><br>
		        Favourite file type is : <a href="#"> PHP</a>
                
              </p>
          </div>
      </div>  

		<div class="card text-center border-success mb-4 col-md-5">
          <div class="card-header bg-transparent border-success">
              <h4 class="card-title">Ultimate Hub Projects</h4>          	
          </div>
          <div class="card-body text-success">
              <p class="card-text black-text">
<button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit"><i class="fa fa-clone mr-3"></i>Complete Projects</button>
<button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit"><i class="fa fa-clone mr-3"></i>Active Projects</button>
<button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit"><i class="fa fa-clone mr-3"></i>Pending Projects</button>

              </p>
          </div>
          <div class="card-footer bg-transparent border-success">
            <nav aria-label="pagination example">
                  <ul class="pagination justify-content-center">
                      <!--Previous button-->
                      <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                      </li>

                      <!--Numbers-->
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>

                      <!--Next button-->
                      <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                      </li>
                  </ul>
              </nav>      
          </div>
      </div>