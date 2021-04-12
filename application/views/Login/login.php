<body>

  <div class="container-fluid">
    <!-- Jumbotron -->
    <div class="jumbotron" style="background-image: url('./asset/bg.png');">
        <div class="logo-besar">
			<img src="./asset/icons/logo.png" alt="gigi" width="125" height="125">
        </div>
        <div class="greeting">
            <p class="text-center fs-3 mt-5">Selamat Datang di Sistem Pendataan Pasien</p>
            <h3 class="text-center fs-1">Chika Medika</h3>
        </div>
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
                                <form class="user" action="<?php echo base_url('landing/aksi_login');?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="email" name="username" placeholder="Username">
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

    