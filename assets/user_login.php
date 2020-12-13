<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("_partials/head.php");?>
</head>

<body>
    <div class="login-card"><img src="assets/images/avatar_2x.png" class="profile-img-card">
        <p class="profile-name-card"> </p>
        <form class="form-signin"><span class="reauth-email"> </span>
            <input class="form-control" type="email" required="" placeholder="Email address" autofocus="" id="inputEmail">
            <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword">
            <div class="checkbox">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me</label>
                    </div>
                </div><a class="btn btn-primary btn-block btn-lg btn-signin" role="button" href="pages/pencari_dashboard.html">Sign in</a></form><a href="#" class="forgot-password">Forgot your password?</a>
                <div class="form-group"></div>
                <label>Belum memiliki akun, </label>
                <a class="text-info" href="user_daftar.html">Daftar!</a>
            </div>
 <?php $this->load->view("_partials/js.php") ?>
        </body>

        </html>