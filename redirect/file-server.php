    <div class="card border-success mb-4 col-md-4">
          <div class="card-header bg-transparent border-success">X-BOX Movies</div>
          <div class="card-body text-success">
              <h5 class="card-title">All Available Movies</h5>
              <p class="card-text">
        <?php
  $dir_path = "../links/Movies";
  if (is_dir($dir_path)) {
    $files = scandir($dir_path);
    for ($i=0; $i < count($files); $i++) { 
      if ($files[$i] != '.' && $files[$i] != '..') { 
        $fileList = glob('../links/Movies');
        foreach ($fileList as $filename){
          if (is_file($filename) != '.' && is_file($filename) != '..'){?>
          <a href="<?php echo $filename ."/" .$files[$i]; ?>"> <?php echo $files[$i]; ?> </a><br><?php
        }
        }
      }
    }
  }else{
    echo "Directory not found";
  }
        ?>      
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
      <div class="card border-success mb-4 col-md-4">
          <div class="card-header bg-transparent border-success">X-BOX Series</div>
          <div class="card-body text-success">
              <h5 class="card-title">All Available Series</h5>
              <p class="card-text">
        <?php
  $dir_path = "../links/Series";
  if (is_dir($dir_path)) {
    $files = scandir($dir_path);
    for ($i=0; $i < count($files); $i++) { 
      if ($files[$i] != '.' && $files[$i] != '..') { 
        $fileList = glob('../links/Series');
        foreach ($fileList as $filename){
          if (is_file($filename) != '.' && is_file($filename) != '..'){?>
          <a href="<?php echo $filename ."/" .$files[$i]; ?>"> <?php echo $files[$i]; ?> </a><br><?php
        }
        }
      }
    }
  }else{
    echo "Directory not found";
  }
        ?>                 
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
    <div class="card border-success mb-4 col-md-4">
          <div class="card-header bg-transparent border-success">X-BOX Music</div>
          <div class="card-body text-success">
              <h5 class="card-title">All Amusic Files</h5>
              <p class="card-text">
         <?php
  $dir_path = "../links/Music";
  if (is_dir($dir_path)) {
    $files = scandir($dir_path);
    for ($i=0; $i < count($files); $i++) { 
      if ($files[$i] != '.' && $files[$i] != '..') { 
        $fileList = glob('../links/Music');
        foreach ($fileList as $filename){
          if (is_file($filename) != '.' && is_file($filename) != '..'){?>
          <a href="<?php echo $filename ."/" .$files[$i]; ?>"> <?php echo $files[$i]; ?> </a><br><?php
        }
        }
      }
    }
  }else{
    echo "Directory not found";
  }
        ?>               
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