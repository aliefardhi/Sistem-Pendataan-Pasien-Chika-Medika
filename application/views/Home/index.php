
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
        
        <form action="<?php echo base_url(). 'home/tambah_aksi'; ?>" method="POST">
        <div class="form-group">
            <label for="id_pasien"> <strong>ID Pasien</strong></label>
            <input type="text" class="form-control" id="id_pasien" name="id_pasien">
          </div>
          <div class="form-group">
            <label for="nama"> <strong>Nama Lengkap Pasien</strong></label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="form-group">
            <label for="tgl_lahir"><strong>Tanggal Lahir</strong></label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
          </div>

          <div class="form-group">
            <label for="jk"><strong>Jenis Kelamin</strong></label>
              <select class="form-control" id="jk" name="jk">
              <option>Pilih Jenis Kelamin</option>
              <option>L</option>
              <option>P</option>
            </select>
          </div>

          <div class="form-group">
            <label for="alamat"><strong>Alamat</strong></label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="no_telp"> <strong>Nomor Telephone</strong></label>
            <input type="number" class="form-control" id="no_telp" name="no_telp">
          </div>

          <div class="form-group">
            <label for="id_konsultasi"> <strong>ID Konsultasi</strong></label>
            <input type="text" class="form-control" id="id_konsultasi" name="id_konsultasi">
          </div>

          <div class="form-group">
            <label for="tgl_konsultasi"> <strong>Tanggal Konsultasi</strong></label>
            <input type="date" class="form-control" id="tgl_konsultasi" name="tgl_konsultasi">
          </div>

          <div class="form-group">
            <label for="anamnese"><strong>Anamnese</strong></label>
            <textarea class="form-control" id="anamnese" name="anamnese" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="nomenklatur"><strong>Nomenklatur</strong></label>
            <textarea class="form-control" id="nomenklatur" name="nomenklatur" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="resep"><strong>Resep</strong></label>
            <textarea class="form-control" id="resep" name="resep" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="keterangan"><strong>Keterangan</strong></label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="id_diagnosa"> <strong>ID Diagnosa</strong></label>
            <input type="text" class="form-control" id="id_diagnosa" name="id_diagnosa">
          </div>

          <div class="form-group">
            <label for="diagnosa"><strong>Diagnosa</strong></label>
            <textarea class="form-control" id="diagnosa" name="diagnosa" rows="3"></textarea>
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
  
  
