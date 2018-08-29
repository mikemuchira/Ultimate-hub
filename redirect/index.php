<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
        header("Location:../admin");
    }elseif ((time()-$_SESSION['time']) > 90000) {
      header("Location:../logic/logout.php");
    }else{
        include('redirect.php');
    }
?>