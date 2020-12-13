<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <?php $this->load->view("_partials/head.php");?>
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/assets/css/login.css">
    <title>Login Admin</title>
  </head>
  <body id="login-bg" style="background: url('assets/img/logo-bg.jpg');">
   <div class="row wrapper">
     <div class="col-4 offset-4">
       <div class="form">
        <h4 class="txt-login">Login Admin</h4>
         <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
          <?php if(isset($error)) { echo $error; }; ?>
         <form action="login" method="post" class="form-wrap">

           <div class="form-group">
             <input type="text" name="username" class="form-control" placeholder="Username">
           </div>
           <div class="form-group">
             <input type="password" name="password" class="form-control" placeholder="password">
           </div>
           <input type="submit" name="submit" class="btn btn-primary" value="Login">
         </form>
          </div>
       </div>
     </div>
   </div>


  </body>
    <?php $this->load->view("_partials/js.php") ?>
</html>