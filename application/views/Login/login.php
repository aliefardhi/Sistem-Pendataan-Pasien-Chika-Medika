<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Custom fonts for this template-->
<link href="<?= base_url('asset/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?= base_url('asset/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    .jumbotron{
        height: 500px;
        background-image: url("./asset/bg.png");
        background-size: cover;
        color: white;
        background-repeat: no-repeat;
        background-position: center;
        margin-left: -20px;
        margin-right: -12px;
        border-radius: 0%;
    }
    .btn{
        background-color: #833761;
        border-color: #833761;
    }
    .btn:hover{
        background-color: #833761;
        border-color: #833761;
    }

</style>
<title>Chika Medika</title>
</head>

<body>

  <div class="container-fluid">
    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1 class="display-6">Chika Medika</h1>
        <p class="text-center fs-3 mt-5">Selamat Datang di Sistem Pendataan Pasien</p>
        <h3 class="text-center fs-1">Chika Medika</h3>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Outer Row -->
    <div class="row justify-content-center fixed-bottom">

        <div class="col-lg-4">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="email" name="email" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>                                        
                                </form>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('asset/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('asset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('asset/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('asset/'); ?>js/sb-admin-2.min.js"></script>
</body>
</html>