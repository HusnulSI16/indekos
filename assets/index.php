<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="assets/css/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/slick-theme.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/loader.js"></script>
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
          <span class="brand-text font-weight-light">MarKost</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


          <!-- SEARCH FORM -->
          <form class="form-inline ml-0 ml-md-3">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>

          <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item d-none d-sm-inline-block">
              <a href="user_login.html" class="nav-link">Sign In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->
    <!-- Main content -->

    <main>
      <section>
        <div class="container wow fadeIn">
          <div id="oleezLandingCarousel" class="oleez-landing-carousel carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img src="assets/images/1.jpg" alt="First slide" class="w-100">
                <div class="carousel-caption">
                  <h2 data-animation="animated fadeInRight"><span>MarKost</span></h2>
                  <h2 data-animation="animated fadeInRight"><span>Boarding Recommendations</span></h2>
                  <a href="#!" class="carousel-item-link" data-animation="animated fadeInRight">EXPLORE PROJECT</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/2.jpg" alt="Second slide" class="w-100">
                <div class="carousel-caption">
                  <h2 data-animation="animated fadeInRight"><span>MarKost</span></h2>
                  <h2 data-animation="animated fadeInRight"><span>Fast Solution</span></h2>
                  <a href="#!" class="carousel-item-link" data-animation="animated fadeInRight">EXPLORE PROJECT</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/3.jpg" alt="Third slide" class="w-100">
                <div class="carousel-caption">
                  <h2 data-animation="animated fadeInRight"><span>MarKost</span></h2>
                  <h2 data-animation="animated fadeInRight"><span>The Best Choice</span></h2>
                  <a href="#!" class="carousel-item-link" data-animation="animated fadeInRight">EXPLORE PROJECT</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/4.jpg" alt="Fourth slide" class="w-100">
                <div class="carousel-caption">
                  <h2 data-animation="animated fadeInRight"><span>MarKost</span></h2>
                  <h2 data-animation="animated fadeInRight"><span>Digital agency</span></h2>
                  <a href="#!" class="carousel-item-link" data-animation="animated fadeInRight">EXPLORE PROJECT</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="oleez-landing-section oleez-landing-section-about">
        <div class="container">
          <div class="oleez-landing-section-content">
            <div class="oleez-landing-section-verticals wow fadeIn">
              <span class="number">01</span> <img src="assets/images/client/Logo_2.svg" alt="ollez" height="12px">
            </div>
            <div class="row landing-about-content wow fadeInUp">
              <div class="col-md-6">
                <h2>We help and solve your problem.</h2>
              </div>
              <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio corporis delectus dolorem possimus, dolor rerum.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 landing-about-feature wow fadeInUp">
                <img src="assets/images/icon_1.svg" alt="document" class="about-feature-icon">
                <h5 class="about-feature-title">Boarding Research</h5>
                <p class="about-feature-description">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
              </div>
              <div class="col-md-4 landing-about-feature wow fadeInUp">
                <img src="assets/images/icon_2.svg" alt="document" class="about-feature-icon">
                <h5 class="about-feature-title">According To The Needs</h5>
                <p class="about-feature-description">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
              </div>
              <div class="col-md-4 landing-about-feature wow fadeInUp">
                <img src="assets/images/icon_3.svg" alt="document" class="about-feature-icon">
                <h5 class="about-feature-title">Provide Convenience</h5>
                <p class="about-feature-description">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="oleez-landing-section oleez-landing-section-projects">
        <div class="container">
          <div class="oleez-landing-section-content">
            <div class="oleez-landing-section-verticals wow fadeIn">
              <span class="number">02</span> <img src="assets/images/client/Logo_2.svg" alt="oleez" height="12px">
            </div>
            <div class="landing-projects-carousel wow fadeIn">
              <div class="card landing-project-card">
                <img src="assets/images/5.jpg" class="card-img" alt="Project 1">
                <div class="card-img-overlay">
                  <h6 class="project-category">Branding</h6>
                  <h5 class="project-title">Indekos In Jember</h5>
                </div>
              </div>
              <div class="card landing-project-card">
                <img src="assets/images/6.jpg" class="card-img" alt="Project 1">
                <div class="card-img-overlay">
                  <h6 class="project-category">Branding</h6>
                  <h5 class="project-title">Indekos In Jember</h5>
                </div>
              </div>
              <div class="card landing-project-card">
                <img src="assets/images/7.jpg" class="card-img" alt="Project 1">
                <div class="card-img-overlay">
                  <h6 class="project-category">Branding</h6>
                  <h5 class="project-title">Indekos In Jember</h5>
                </div>
              </div>
              <div class="card landing-project-card">
                <img src="assets/images/8.jpg" class="card-img" alt="Project 1">
                <div class="card-img-overlay">
                  <h6 class="project-category">Branding</h6>
                  <h5 class="project-title">Indekos In Jember</h5>
                </div>
              </div>
            </div>
            <div class="slick-navbtn-wrapper">
            </div>
          </div>
        </section>
        <section class="oleez-landing-section oleez-landing-section-team">
          <div class="container">
            <div class="oleez-landing-section-content">
              <div class="oleez-landing-section-verticals wow fadeIn">
                <span class="number">03</span> <img src="assets/images/client/Logo_2.svg" alt="ollez" height="12px">
              </div>
              <div class="row landing-team-content wow fadeInUp">
                <div class="col-md-6">
                  <h2 class="section-title">Meet The Team <br> Our Professionals</h2>
                </div>
                <div class="col-md-6">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio corporis delectus dolorem possimus, dolor rerum.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 mb-5 mb-md-0 landing-team-card wow flipInY">
                  <img src="assets/images/avatar.png" alt="Team Member" class="team-card-img">
                  <h5 class="team-card-name">Siri Jakobsson</h5>
                  <p class="team-card-job">Web Developer</p>
                </div>
                <div class="col-md-4 mb-5 mb-md-0 landing-team-card wow flipInY">
                  <img src="assets/images/avatar2.png" alt="Team Member" class="team-card-img">
                  <h5 class="team-card-name">Arend Pellewever</h5>
                  <p class="team-card-job">Founder</p>
                </div>
                <div class="col-md-4 mb-5 mb-md-0 landing-team-card wow flipInY">
                  <img src="assets/images/avatar3.png" alt="Team Member" class="team-card-img">
                  <h5 class="team-card-name">Antokolskiy</h5>
                  <p class="team-card-job">Web Developer</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="oleez-landing-section oleez-landing-section-client">
          <div class="container">
            <div class="oleez-landing-section-content">
              <div class="oleez-landing-section-verticals wow fadeIn">
                <span class="number">04</span> <img src="assets/images/client/Logo_2.svg" alt="ollez" height="12px">
              </div>
              <h2 class="section-title mb-1 wow fadeInUp">Partners & clients</h2>
              <p class="client-section-subtitle">We’re constantly refining our product. Adding new features. Working to help your business grow.</p>
              <div class="row">
                <div class="col-md-4 client-logo-wrapper wow flipInX">
                  <div class="client-logo">
                    <img src="assets/images/client/client_1@1x.png" alt="client" height="50px">
                  </div>
                </div>
                <div class="col-md-4 client-logo-wrapper wow flipInX">
                  <div class="client-logo">
                    <img src="assets/images/client/client_2.png" alt="client" height="50px">
                  </div>
                </div>
                <div class="col-md-4 client-logo-wrapper wow flipInX">
                  <div class="client-logo">
                    <img src="assets/images/client/client_1.png" alt="client" height="50px">
                  </div>
                </div>
                <div class="col-md-4 client-logo-wrapper wow flipInX">
                  <div class="client-logo">
                    <img src="assets/images/client/client_2@1x.png" alt="client" height="50px">
                  </div>
                </div>
                <div class="col-md-4 client-logo-wrapper wow flipInX">
                  <div class="client-logo">
                    <img src="assets/images/client/client_3.png" alt="client" height="50px">
                  </div>
                </div>
                <div class="col-md-4 client-logo-wrapper wow flipInX">
                  <div class="client-logo">
                    <img src="assets/images/client/client_3@1x.png" alt="client" height="50px">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <footer class="oleez-footer wow fadeInUp">
        <div class="container">
          <div class="footer-content">
            <div class="row">
              <div class="col-md-6">
                <img src="assets/images/LogoFooter.png" alt="oleez" class="footer-logo">
                <p class="footer-intro-text">Don't be shy, get in touch with us and create the world again!</p>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6 footer-widget-text">
                    <h6 class="widget-title">PHONE</h6>
                    <p class="widget-content">(0331) 6272431</p>
                  </div>
                  <div class="col-md-6 footer-widget-text">
                    <h6 class="widget-title">ENQUIRUES</h6>
                    <p class="widget-content">Markost@yahoo.id</p>
                  </div>
                  <div class="col-md-6 footer-widget-text">
                    <h6 class="widget-title">ADDRESS</h6>
                    <p class="widget-content">Jalan Kalimantan Tegal Boto No. 34<br>Kabupaten Jember</p>
                  </div>
                  <div class="col-md-6 footer-widget-text">
                    <h6 class="widget-title">WORK HOURS</h6>
                    <p class="widget-content">Weekdays: 09:00 - 18:00 <br> Weekends: 11:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
          <!-- Default to the left -->
          <strong>Copyright &copy; 2020 <a href="http://markost.io">MarKost.io</a>.</strong> All rights
          reserved.
        </footer>
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery UI -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

    <script src="assets/vendors/popper.js/popper.min.js"></script>
    <script src="assets/bootstrap/js/wow.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/slick.min.js"></script>
    <script src="assets/bootstrap/js/main.js"></script>
    <script src="assets/bootstrap/js/landing.js"></script>
    <script>
      new WOW({mobile: false}).init();
    </script>
  </body>
  </html>
