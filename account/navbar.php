        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">
                <!-- Heading -->
            <div class="mb-6 wow fadeIn">
                <!--Card content-->
                <div class="d-sm-flex justify-content-between">

                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <a href="index.php">ULTIMATE HUB</a>
                        <span>/</span>
                        <span> Dashboard </span>
                    </h4>
                </div>
            </div>
            <div class="mb-3 wow fadeIn">
                    <form class="d-flex justify-content-center">
                        <!-- Default input -->
                        <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                        <button class="btn btn-primary btn-sm my-0 p" type="submit">
                            <i class="fa fa-search"></i>
                        </button>

                    </form>
            </div>
            <div class="mb-3 wow fadeIn">
                <!-- Split button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-info"><i class="fa fa-user fa-1x"></i></button>
                    <button type="button" class="btn btn-info dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Hello <?php echo $_SESSION['admin']; ?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../logic/logout.php"><i class="fa fa-exit"></i> Logout</a>
                    </div>
                </div>
            </div>
            <!-- Heading -->
                
            </div>
        </nav>