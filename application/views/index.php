<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <?php $this->load->view("_partials/head.php");?>
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          <img  src="<?= base_url();?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
          <span class="brand-text font-weight-light">MarKost</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


          <!-- SEARCH FORM -->
         

          <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item d-none d-sm-inline-block">
              <a href="daftar" class="nav-link">Daftar</a>
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
                <img  src="<?= base_url();?>assets/assets/images/1.jpg" alt="First slide" class="w-100">
                <div class="carousel-caption">
                  <h2 data-animation="animated fadeInRight"><span>MarKost</span></h2>
                  <h2 data-animation="animated fadeInRight"><span>Kost Recommendations</span></h2>
                  <a href="login" class="carousel-item-link" data-animation="animated fadeInRight">Login to Findout</a>
                </div>
              </div>
              <div class="carousel-item">
                <img  src="<?= base_url();?>assets/assets/images/2.jpg" alt="Second slide" class="w-100">
                <div class="carousel-caption">
                  <h2 data-animation="animated fadeInRight"><span>MarKost</span></h2>
                  <h2 data-animation="animated fadeInRight"><span>Fast Solution</span></h2>
                  <a href="#!" class="carousel-item-link" data-animation="animated fadeInRight">Login to Findout</a>
                </div>
              </div>
              <div class="carousel-item">
                <img  src="<?= base_url();?>assets/assets/images/3.jpg" alt="Third slide" class="w-100">
                <div class="carousel-caption">
                  <h2 data-animation="animated fadeInRight"><span>MarKost</span></h2>
                  <h2 data-animation="animated fadeInRight"><span>The Best Choice</span></h2>
                  <a href="#!" class="carousel-item-link" data-animation="animated fadeInRight">Login to Findout</a>
                </div>
              </div>
              <div class="carousel-item">
                <img  src="<?= base_url();?>assets/assets/images/4.jpg" alt="Fourth slide" class="w-100">
                <div class="carousel-caption">
                  <h2 data-animation="animated fadeInRight"><span>MarKost</span></h2>
                  <h2 data-animation="animated fadeInRight"><span>Digital agency</span></h2>
                  <a href="#!" class="carousel-item-link" data-animation="animated fadeInRight">Login to Findout</a>
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
                <img  src="<?= base_url();?>assets/assets/images/LogoFooter.png" alt="oleez" class="footer-logo">
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
   <?php $this->load->view("_partials/js.php") ?>
  </body>
  </html>
