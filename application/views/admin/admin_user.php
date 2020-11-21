<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("admin/_partials/head.php");?>
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
 <?php $this->load->view("admin/_partials/navbar.php");?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php $this->load->view("admin/_partials/sidebar.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin_dashboard.html">Dashboard</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
         <!-- /.row -->
         <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0"">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID User</th>
                      <th>Nama</th>
                      <th>email</th>
                      <th>Password</th>
                      <th>Type User</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Admin</td>
                      <td>admin@gmail.com</td>
                      <td>admin</td>
                      <td>Admin</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>vika</td>
                      <td>dawina@gmail.com</td>
                      <td>sdfgh</td>
                      <td>Pemilik Indekos</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Arbiyah</td>
                      <td>dawina@gmail.com</td>
                      <td>asdfghjk</td>
                      <td>Pencari Indekos</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>adistya </td>
                      <td>samsiyahh12a@gmail.com</td>
                      <td>dfghjkl</td>
                      <td>Pemilik Indekos</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Internet Explorer 7</td>
                      <td>dawina@gmail.com</td>
                      <td>9tfgnm</td>
                      <td>Pencari Indekos</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>AOL browser (AOL desktop)</td>
                      <td>anjasda@gmail.com</td>
                      <td>sdf1233</td>
                      <td>Pencari Indekos</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Firefox 1.0</td>
                      <td>dawasda@gmail.com</td>
                      <td>1.7</td>
                      <td>Pencari Indekos</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Firefox 1.5</td>
                      <td>dawasda@gmail.com</td>
                      <td>1.8</td>
                      <td>Pencari Indekos</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Firefox 2.0</td>
                      <td>dawasda@gmail.com</td>
                      <td>1.8</td>
                      <td>Pencari Indekos</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Firefox 3.0</td>
                      <td>sahrull12@gmail.com</td>
                      <td>1.9</td>
                      <td>Pencari Indekos</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <nav aria-label="Contacts Page Navigation">
        <ul class="pagination justify-content-center m-0">
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-item"><a class="page-link" href="#">7</a></li>
          <li class="page-item"><a class="page-link" href="#">8</a></li>
        </ul>
      </nav>
    </div>
  </section>

  <!-- /.content-wrapper -->
</div>
<footer class="main-footer">
  <strong>Copyright &copy; 2020 <a href="http://markost.io">MarKost.io</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- Bootstrap -->
<?php $this->load->view("admin/_partials/js.php");?>
<!-- page script -->
</body>
</html>
