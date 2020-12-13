<!DOCTYPE html>
<html>
<head>
 
 <?php $this->load->view("pemilik/_partials/head.php");?>
 </head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->

 <?php $this->load->view("pemilik/_partials/navbar.php");?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->

 <?php $this->load->view("pemilik/_partials/sidebar.php");?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Indekos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="pemilik_dashboard.html">Home</a></li>
            <li class="breadcrumb-item active">Data Indekos</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Navbar -->


  <section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body pb-0">                     
        <div class="row d-flex align-items-stretch">
          <?php
      if( ! empty($data)){
           foreach ($data->result() as $row) {
                
                              echo '
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                indekos'.$row->jenis.'
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>'.$row->nama_kos.'</b></h2>
                    <p class="text-muted text-sm">
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> '.$row->alamat.'</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <img src="'.base_url().'assets/images/'.$row->image.'" alt="" style="height: 85px;">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#modal-default">
                    <i class="fas fa-trash"></i> Delete
                  </a>
                  <a href="pemilik_kost_edit.html" class="btn btn-sm bg-teal">
                    <i class="fas fa-pencil-alt"></i>Edit
                  </a>
                  <a href="pemilik_kost_detail.html" class="btn btn-sm btn-primary">
                    <i class="fas fa-folder"></i> View Detail
                  </a>
                </div>
              </div>
            </div>
          </div>';
        }}
          ?>
      
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
            <?php echo $pagination; ?>
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->

  </section>


  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Peringatan!</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apakah Anda Yakin Ingin Menghapus Data Ini?&hellip;</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-primary">Ok</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

</div>
<!-- /.card -->
<!-- /.content -->

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

 <?php $this->load->view("pemilik/_partials/js.php");?>
</body>
</html>
<script type="text/javascript">
    
 <?php if ($this->session->flashdata('res')) {
                    $alert = explode('|', $this->session->flashdata('res'));
                  ?>  
swal.fire(
  '<?= $alert[0] ?>',
  '<?= $alert[1] ?>',
  '<?= $alert[2] ?>'
);
<?php }?>

</script>