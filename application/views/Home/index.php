
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
        <img src="./asset/logo.png" alt="logo" width="125" height="125" class="d-inline-block align-text-top">
      </a>
			<a class="navbar-brand" href="<?php echo base_url('landing/logout');?>" onclick="return confirm('Anda yakin ingin logout?');" >
        <img src="./asset/icons/export.png" alt="logo" width="40" height="40" class="d-inline-block align-text-top">
      </a>
    </div>
  </nav>

  <div class="container mt-3">
    <h2 class="text-sm-center mb-5 fw-bold">DATA PASIEN CHIKA MEDIKA</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-ungu btn-primary mb-3 float-right" data-toggle="modal" data-target="#tambah_modal">
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
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php 
              foreach($user as $u){ ?>
              <tr>
                <td><?=$u->id_pasien?></td>
                <td><?=$u->nama_pasien?></td>
                <td><?=$u->tgl_lahir?></td>
                <td><?=$u->alamat?></td>
                <td><?=$u->no_telp?></td>
                <td><?=$u->tanggal?></td>
                <td class="text-center">
                  <form action="" method="post">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detail_modal">
                      <i class="fa fa-info"></i> Detail
                    </button>
                    
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_modal">
                      <i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit
                    </button>
                    
                    <input type="hidden" name="" value="<?=$u->id_pasien?>">
                    <button onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-sm">
                      <i class="fa fa-trash"></i> Delete
                    </button>
                  </form>
                </td>
              </tr>
              <?php } ?>
          </tbody>

        </table>
  </div>
    
<!-- Modal Tambah Pasien -->
<div class="modal fade" id="tambah_modal" tabindex="-1" aria-labelledby="judulmodal_tambah" aria-hidden="true">
  <div class="modal-dialog modal-lg">
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
<!-- Akhir Modal Tambah Pasien -->

<!-- Modal Detail -->
<div class="modal fade" id="detail_modal" tabindex="-1" aria-labelledby="judulmodal_detail" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="judulmodal_detail">Detail Pasien</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body table-responsive">
        <table class="table">
          <tbody>
            <tr>
              <th>Visit ke-</th>
              <td>
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1"></label>
                    <select class="form-control-sm" id="exampleFormControlSelect1">
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div>
                </form>
                
              </td>
            </tr>
            <tr>
              <th>ID Pasien</th>
              <td>1</td>
            </tr>
            <tr>
              <th>Nama</th>
              <td>nama orang</td>
            </tr>
            <tr>
              <th>Tanggal Lahir</th>
              <td>04-07-2000</td>
            </tr>
            <tr>
              <th>Alamat</th>
              <td>Palembang</td>
            </tr>
            <tr>
              <th>No. Telepon</th>
              <td>089977665588</td>
            </tr>
            <tr>
              <th>Tanggal kunjungan</th>
              <td>21 April 2021</td>
            </tr>
            <tr>
              <th>Anamnese</th>
              <td>Sakit gigi</td>
            </tr>
            <tr>
              <th>Diagnosa</th>
              <td>Gigi sakit</td>
            </tr>
            <tr>
              <th>Nomenklatur</th>
              <td>Gigi graham</td>
            </tr>
            <tr>
              <th>Tindakan</th>
              <td>Diberi obat</td>
            </tr>
            <tr>
              <th>Resep</th>
              <td>Asam mefenamat</td>
            </tr>
            <tr>
              <th>Keterangan</th>
              <td>Semoga selalu menjaga kesehatan gigi</td>
            </tr>
          </tbody>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </form>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Detail -->
  
<!-- Modal Ubah Data Pasien -->
<div class="modal fade" id="edit_modal" tabindex="-1" aria-labelledby="judulmodal_edit" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulmodal_edit">Edit Data Pasien</h5>
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
<!-- Akhir Modal Ubah Data Pasien -->