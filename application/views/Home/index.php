
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
			<a class="navbar-brand" href="<?php echo base_url('landing/logout');?>" onclick="return confirm('Anda yakin ingin logout?');" >
        <img src="./asset/icons/export.png" alt="logo" width="40" height="40" class="d-inline-block align-text-top">
      </a>
    </div>
  </nav>

  <div class="container mt-3">
    <h2 class="text-sm-center mb-5 fw-bold">DATA PASIEN CHIKA MEDIKA</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3 float-right" data-toggle="modal" data-target="#tambah_modal">
      Tambah Data Pasien
    </button>
      
        <table class="display table table-striped table-borderless" id="tabeluser">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
              <th>No. Telepon</th>
              <th>Tanggal Kunjungan</th>
            </tr>
          </thead>

          <tbody>
            <?php 
              foreach($user as $u){
                echo "<tr>";
                echo "<td>$u->id_pasien</td>";
                echo "<td>$u->nama_pasien</td>";
                echo "<td>$u->tgl_lahir</td>";
                echo "<td>$u->alamat</td>";
                echo "<td>$u->no_telp</td>";
                echo "<td>$u->tanggal</td>";
                echo "</tr>";
              }
            
            ?>

          </tbody>

        </table>
  </div>
    
<!-- Modal -->
<div class="modal fade" id="tambah_modal" tabindex="-1" aria-labelledby="judulmodal_tambah" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulmodal_tambah">Menambah Data Pasien Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="" method="POST">
          <div class="form-group">
            <label for="nama"> <strong>Nama Lengkap Pasien</strong></label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="form-group">
            <label for="umur"><strong>Umur</strong></label>
            <input type="number" class="form-control" id="umur" name="umur">
          </div>

          <div class="form-group">
            <label for="tgl_konsul"><strong>Tanggal konsultasi pasien</strong></label>
            <input type="date" class="form-control" id="tgl_konsul" name="tgl_konsul">
          </div>

          <div class="form-group">
            <label for="riwayat"><strong>Riwayat penyakit pasien</strong></label>
            <textarea class="form-control" id="riwayat" name="riwayat" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="riwayat"><strong>Riwayat penyakit pasien</strong></label>
            <textarea class="form-control" id="riwayat" name="riwayat" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="keluhan"><strong>Keluhan pasien</strong></label>
            <textarea class="form-control" id="keluhan" name="keluhan" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="resep"><strong>Resep/saran obat</strong></label>
            <textarea class="form-control" id="resep" name="resep" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="keterangan"><strong>Keterangan tambahan</strong></label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>
  
  
