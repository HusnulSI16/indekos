<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="<?= base_url();?>assets/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?= base_url();?>assets/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/assets/css/user.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/assets/css/Pretty-Registration-Form.css">
       <link rel="stylesheet" href="<?= base_url();?>assets/plugin/sweetalert2.css">
</head>

<body>
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form" action="daftar/save" method="post">
                <h1>Register Form</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Name </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="nama_user">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="email-input-field">Email </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="email" name="email_user">
                    </div>
                </div>
                   <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="email-input-field">HP/Telepon </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="number" name="telepon">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="pawssword-input-field">Password </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="repeat-pawssword-input-field">Repeat Password </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="dropdown-input-field">Kategori User</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        
                            <div class="form-group">
                                <select class="form-control" name="level">
                                    <option selected disabled>Select</option>
                                    <option value="1">Pencari Kost</option>
                                    <option value="2">Pemilik Kost</option>
                                </select>
                            </div>
                      
                    </div><br>
                    <input type="submit" name="submit" value="Register" class="btn btn-submit" style="width: 100%!important;">
                </div>
              
                </form>
            </div>
        </div>
        <script src="<?= base_url();?>assets/assets/js/jquery.min.js"></script>
        <script src="<?= base_url();?>assets/assets/bootstrap/js/bootstrap.min.js"></script>
           <script src="<?= base_url();?>assets/plugin/sweetalert2.min.js"></script>
    </body>
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
    </html>