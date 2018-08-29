<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ULTIMATE HUB</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="./assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <?php include('navbar.php') ?>
        <!-- Navbar -->

        <!-- Sidebar -->
        <?php include('sidenav.php') ?>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-6">
        <div class="container-fluid mt-5">
            <div class="card mb-6 wow fadeIn">
                <div class="card-body d-sm-flex justify-content-between" id="content">
                        <!-- dynamic content -->
                </div>
            </div>
        </div>
    </main>
    <!--Main layout-->
            

  


    <!-- JQuery -->
    <script type="text/javascript" src="./assets/js/jquery-3.3.1.min.js"></script>
        <!-- SCRIPTS -->
    <script type="text/javascript" src="./assets/js/dynamic.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="./assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="./assets/js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>

</body>

</html>