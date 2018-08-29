        <!--Main Navigation-->
        <header>
            <!--Intro Section-->
            <section class="view intro-2 hm-gradient">
                <div class="full-bg-img">
                    <div class="row">
                       <div class="col-md-12 text-center">
                            <!--Navbar-->
                            <nav class="navbar navbar-expand-lg navbar-dark primary-color">
                             <div class="container">
                              <!-- Collapse button -->
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                              aria-expanded="false" aria-label="Toggle navigation">
                               <span class="navbar-toggler-icon"></span>
                              </button>
                              <!-- Collapsible content -->
                              <div class="collapse navbar-collapse justify-content-center font-weight-bold" id="basicExampleNav">
                                <!-- Links -->
                                <ul class="navbar-nav">
                                 <li class="nav-item">
                                  <a class="nav-link" href="#">Home</a>
                                 </li>
                                 <li class="nav-item">
                                  <a class="nav-link" href="#">About</a>
                                 </li>
                                 <li class="nav-item">
                                  <a class="nav-link" href="#">Features</a>
                                 </li>
                                </ul>
                                <!-- Links -->

                                <!-- Navbar brand -->
                                <a class="navbar-brand px-lg-4 mr-0" href="#">
                                 <img src="./assets/img/logo.png" height="30" alt="">
                                </a>

                                <!-- Links -->
                                <ul class="navbar-nav">
                                 <li class="nav-item">
                                  <a class="nav-link" href="#">Portifolio</a>
                                 </li>
                                 <li class="nav-item">
                                  <a class="nav-link" href="#">Projects</a>
                                 </li>
                                 <li class="nav-item">
                                  <a class="nav-link" href="#">Files</a>
                                 </li>
                                </ul>
                                <!-- Links -->
                               </div>
                            </nav>
                            <!--/.Navbar-->
                      </div>
                     </div>
                    <div class="container flex-center">
                        <div class="d-flex align-items-center content-height">
                            <div class="row flex-center pt-5 mt-3">
                                <div class="col-md-6 text-center text-md-left mb-5">
                                    <div class="white-text">
                                        <h1 class="h1-responsive font-weight-bold wow fadeInDown" data-wow-delay="0.3s"> Memo: </h1>
                                        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                        <h6 class="wow fadeInLeft" data-wow-delay="0.3s">
                                            I am <i>STARK's</i> server manager.
                                            I actually have access to every file on this machine. 
                                            However, You need credentials from <i>STARK</i> for me to give you that access.
                                            I follow commands given to me by my creater, <i>STARK</i>.
                                            Contact <i>STARK</i> to receive authorization credentials at sir.stark@yahoo.com/0719439141
                                        </h6>
                                        <br>
                                        <a class="btn btn-outline-white wow fadeInUp" data-wow-delay="0.3s"> Must be Admin </a>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-5 offset-xl-1">
                                    <!--Form-->
                                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                        <div class="card-body">
                                            <!--Header-->
                                            <div class="text-center">
                                                <h3 class="white-text"><i class="fa fa-user white-text"></i> Request Access: </h3>
                                                <hr class="hr-light">
                                            </div>

                                            <!--Body-->
                                              <form method="POST" action="../logic/login.php" autocomplete="off">
                                                <div class="md-form">
                                                    <i class="fa fa-envelope prefix white-text active"></i>
                                                    <input type="text" name="admin_ident" class="white-text form-control">
                                                    <label for="form2" class="active">Your Admin Username</label>
                                                </div>
                                                <div class="md-form">
                                                    <i class="fa fa-key prefix white-text active"></i>
                                                    <input type="password" name="admin_key" class="white-text form-control">
                                                    <label for="form4">Your Authorization Key</label>
                                                </div>
                                                <div class="text-center mt-4">
                                                    <button class="btn btn-indigo" name="request_access">request access</button>
                                                    <hr class="hr-light mb-3 mt-4">
                                                </div>
                                             </form>

                                             <div class="text-center">
                                                 <?php if (isset($_SESSION['error'])) {
                                                     echo $_SESSION['error'];
                                                 } ?>
                                             </div>

                                        </div>
                                    </div>
                                    <!--/.Form-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </header>
        <!--Main Navigation-->