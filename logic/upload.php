<?php
include('dbconnect.php');
session_start();
if (!isset($_SESSION['sudo'])) {
    $_SESSION['noupload']="Not authorized";
    header("Location:../redirect/");
}

if(isset($_FILES["uploadfile"]["name"])){
        $name = $_FILES["uploadfile"]["name"];
        $ext  = @end(explode(".", $name));
        $admin = $_SESSION['admin'];

             $new_image = '';
             
             $path = '/home/cyber-root/server-uploads/'.$name;
               
           if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $path)) {

            $insert_sql="INSERT INTO uploads (filename,admin_name) VALUES ('$name','$admin')";
            if ($result= $conn->query($insert_sql)) {
              $_SESSION['upload']= $name;
              header("Location:../redirect/");
            }else{
              $_SESSION['upload_error'] = $new_image;
              header("Location:../redirect/");
            }         
    }else{
          $_SESSION['nofile']= "Please select a file to upload!!!";
          header("Location:../redirect/");

  }
      
  }
?>