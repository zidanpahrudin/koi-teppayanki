<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Koi Teppayanki | Log in </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/custom.css') ?>">


</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img class="img-fluid w-50" alt="koi teppayanki" src="<?= base_url('assets/dist/img/home_service_logo.webp') ?>" />
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="<?= base_url('auth/login')?>" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-10 offset-1">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/plugins/bootstrapjs/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
</body>

</html>