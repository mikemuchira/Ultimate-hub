<?php
  if (isset($_SESSION["admin"])) {
    header("Location:redirect");
  }else{
    header("Location:admin");
  }
?>