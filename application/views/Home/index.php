
  <body>
    <!--<div class="jumbotron" style="background-image: url('./asset/bg.png');">
        <div class="logo">
            <p class="display-6"><img class="img-fluid" src="./asset/icons/tooth (1).png" alt="gigi"> Chika Medika</p>
        </div>
        </div>        
    </div> -->

  <nav class="navbar navbar-dark bg-dark" style="background-image: url('./asset/bg.png');">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="invert" src="./asset/icons/tooth (1).png" alt="logo" width="66" height="66" class="d-inline-block align-text-top">
        <h3 class="d-inline-block align-text-top"> Chika Medika </h3>
      </a>
			<a class="navbar-brand" href="<?php echo base_url('landing/logout');?>">
        <img src="./asset/icons/export.png" alt="logo" width="40" height="40" class="d-inline-block align-text-top">
      </a>
    </div>
  </nav>

  <div class="container mt-3">
    <h2 class="text-sm-center mb-5 fw-bold">DATA PASIEN CHIKA MEDIKA</h2>

    <a href="" class="btn btn-primary float-right mb-3">Tambah Data Pasien</a>
      
        <table class="display table table-striped table-borderless" id="tabeluser">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Umur</th>
              <th>Tanggal</th>
              <th>Riwayat</th>
              <th>Keluhan</th>
              <th>Resep</th>
            </tr>
          </thead>

          <tbody>
            <?php 
              foreach($user as $u){
                echo "<tr>";
                echo "<td>$u->id_pasien</td>";
                echo "<td>$u->nama_pasien</td>";
                echo "<td>$u->umur</td>";
                echo "<td>$u->tanggal</td>";
                echo "<td>$u->riwayat</td>";
                echo "<td>$u->keluhan</td>";
                echo "<td>$u->resep</td>";
                echo "</tr>";
              }
            
            ?>

          </tbody>

        </table>
  </div>
    

  
  
