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
          <h1>Tambah Data Indekos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="pemilik_dashboard.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tambah Data Indekos</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
 
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>
            
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              </div>
            </div>
                  <?php echo form_open_multipart('pemilik/dashboard/savedatakos');?>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama Indekos</label>
                <input type="text" id="inputName" class="form-control" name="namakos">
              </div>
              <div class="form-group">
                <label for="inputName">Jenis Indekos</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio1" value="putra">
                  <label class="form-check-label">Indekos Putra</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio1" value="putri">
                  <label class="form-check-label">Indekos Putri</label>
                </div>
              </div>
              <div class="form-group">
                <label for="inputName">Alamat Indekos</label>
                <input type="text" id="inputName" class="form-control" name="alamat"> 
              </div>

              <div class="form-group">
                <label for="inputStatus">Harga</label>
                <select class="form-control custom-select" name="harga">
                  <option selected disabled>Select One</option>
                  <option value="300k"> >Rp.300.000</option>
                  <option value="300k-400k">Rp.300.000-Rp.400.000</option>
                  <option value="400k-500k">Rp.400.000-Rp.500.000</option>
                  <option value="500k-600k">Rp.500.000-Rp.600.000</option>
                  <option value=">600k"> > Rp.600.000</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputStatus">Luas Kamar</label>
                <select class="form-control custom-select" name="luas">
                  <option selected disabled>Select One</option>
                  <option value="4x5">4 x 5</option>
                  <option value="4x4">>4 x 4</option>
                  <option value="3x4">>3 x 4</option>
                  <option value="3x3">>3 x 3</option>
                  <option value="4x2">>3 x 2 </option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputStatus">Jarak Dari Universitas Jember</label>
                <select class="form-control custom-select" name="jarak">
                  <option selected disabled>Select One</option>
                  <option value=">1km">>1 Km </option>
                  <option value="2km-5km">2 km-5 Km </option>
                  <option value="6km-10km">6 Km-10 Km</option>
                  <option value="11km-15km">11 Km-15 Km</option>
                  <option value=">15km"> > 15 Km </option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Fasilitas Utama</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="cekfu[]" value="Kasur">
                  <label class="form-check-label">Kasur</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="cekfu[]" value="Lemari" >
                  <label class="form-check-label">Lemari</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="cekfu[]" value="Wifi">
                  <label class="form-check-label">Wifi</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="cekfu[]" value="Parkir">
                  <label class="form-check-label">Parkir</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="cekfu[]" value="Kipas">
                  <label class="form-check-label">Kipas</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="cekfu[]" value="Tv">
                  <label class="form-check-label">Tv</label>
                </div>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Kondisi Bangunan</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="cekon[]" value="Bersih">
                  <label class="form-check-label">Bersih</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="cekon[]" value="Baru Dicat Ulang" >
                  <label class="form-check-label">Baru Dicat Ulang</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="cekon[]" value="1 Lokasi Dengan Pemilik">
                  <label class="form-check-label">1 Lokasi Dengan Pemilik</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="cekon[]" value="Bangunan Arsitektur Modern">
                  <label class="form-check-label">Bangunan Arsitektur Modern</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="cekon[]" value=" Lebih Dari 1 Lantai">
                  <label class="form-check-label">Lebih Dari 1 Lantai</label>
                </div>
              </div>
            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Specific</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputClientCompany">Fasilitas Tambahan</label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cekft[]" value="Dapur">
                    <label class="form-check-label">Dapur</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cekft[]" value="Kamar Mandi Dalam" >
                    <label class="form-check-label">Kamar Mandi Dalam</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cekft[]" value="Tempat Jemuran">
                    <label class="form-check-label">Tempat Jemuran</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cekft[]" value="Free Listrik">
                    <label class="form-check-label">Free Listrik</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cekft[]" value="Parkir Mobil">
                    <label class="form-check-label">Parkir Mobil</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cekft[]" value="Kulkas">
                    <label class="form-check-label">Kulkas</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cekft[]" value="Mesin Cuci">
                    <label class="form-check-label">Mesin Cuci</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cekft[]" value="Ruang Tamu">
                    <label class="form-check-label">Ruang Tamu</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputDescription">Deskripsi</label>
                  <textarea id="inputDescription" class="form-control" name="desk" rows="4"></textarea>
                </div>

                 <div class="form-group">
                  <label for="inputDescription">Gambar Thumbnail</label>
                    
    
                      <input class="form-control-file" type="file" name="image" id="image" />   
    
                </div>

                <div class="form-group">
                  <label for="inputDescription">File Gambar</label>
                    
    
                  <input type="file" class="form-control" name="upload_Files[]" multiple/>        
    
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input type="submit" value="Create new Data" class="btn btn-success float-right" name="submit">
          </div>
     <?php echo form_close(); ?>
        </div><br>
      </section>
      <!-- /.content -->

    </div>
    <!-- /.card -->
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
            <p>Simpan Data Ini?&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

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