<?php session_start(); ?>
<html lang="en">
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> ADMINSTRATOR </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <!-- Bootstrap core CSS -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="./assets/css/mdb.min.css" rel="stylesheet">
  <!-- Custom core CSS -->  
  <link href="./assets/css/style.css" rel="stylesheet">

</head>
<body>

<?php
  if (!isset($_SESSION['admin'])) {
      include("login.php");
  }elseif (isset($_SESSION['admin'])&&!isset($_GET['page'])) {
      header("Location:../redirect");
  }
?>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="./assets/js/jquery-3.3.1.min.js"></script>
  <!-- Tooltips -->
  <script type="text/javascript" src="./assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="./assets/js/mdb.min.js"></script>
  <script>
  new WOW().init();
  </script>
</body>
</html>