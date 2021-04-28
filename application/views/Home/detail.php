<body>
    <!--<nav class="navbar navbar-dark bg-dark" style="background-image: url(./asset/bg.png);">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./asset/logo.png" alt="logo" width="125" height="125" class="d-inline-block align-text-top">
        </a>
                <a class="navbar-brand" href="<?php echo base_url('landing/logout');?>" onclick="return confirm('Anda yakin ingin logout?');" >
            <img src="./asset/icons/export.png" alt="logo" width="40" height="40" class="d-inline-block align-text-top">
        </a>
        </div>
    </nav> --> 

    <div class="container">   

        <div class="row mt-3 mx-auto">
            <div class="col-md-7 mx-auto">
            
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color: #833761 ;"><?= $pasien['nama_pasien']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">ID Pasien: <?= $pasien['id_pasien']; ?></h6>
                        
                        <a id="tombolEdit" class="btn btn-primary btn-ungu float-right btn-sm mb-3" data-toggle="modal" data-target="#edit_pasien"
                        data-id="<?= $pasien['id_pasien']; ?>"
                        data-nama="<?= $pasien['nama_pasien']; ?>"
                        data-tglLahir="<?= $pasien['tgl_lahir']; ?>"
                        data-jk="<?= $pasien['jk']; ?>"
                        data-alamat="<?= $pasien['alamat']; ?>"
                        data-noTelp="<?= $pasien['no_telp']; ?>"
                        data-idKonsul="<?= $konsultasi['id_konsultasi']; ?>" >
                          Edit Data Pasien
                        </a>

                        <div class="table-responsive">
                            
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
                                        <th>Tanggal Lahir</th>
                                        <td><?= $pasien['tgl_lahir']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?= $pasien['alamat']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>No. Telepon</th>
                                        <td><?= $pasien['no_telp']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal kunjungan</th>
                                        <td><?= $konsultasi['tanggal']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Anamnese</th>
                                        <td><?= $konsultasi['anamnese']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Diagnosa</th>
                                        <td><?= $riwayat_pasien['diagnosa']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nomenklatur</th>
                                        <td><?= $konsultasi['nomenklatur']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tindakan</th>
                                        <td><?= $konsultasi['tindakan']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Resep</th>
                                        <td><?= $konsultasi['resep']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <td><?= $konsultasi['keterangan']; ?></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <a href="<?= base_url(); ?>home" class="btn btn-primary">Kembali</a>
                    </div>
                
                    
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ubah Data Pasien -->
    <div class="modal fade" id="edit_pasien" tabindex="-1" aria-labelledby="judulmodal_edit" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="judulmodal_edit">Edit Data Pasien</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="modal-edit">
            
            <form id="form_ubah">
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
                <input type="text" class="form-control" id="no_telp" name="no_telp">
              </div>

              <div class="form-group">
                <label for="id_konsultasi"> <strong>ID Konsultasi</strong></label>
                <input type="text" class="form-control" id="id_konsultasi" name="id_konsultasi" value="<?= $konsultasi['id_konsultasi']; ?>">
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
            <button type="submit" class="btn btn-primary" name="edit">Simpan</button>

            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal Ubah Data Pasien -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
      $(document).on("click", "#tombolEdit", function(){
          var idpasien = $(this).data('id');
          var namapasien = $(this).data('nama');
          var tglLahir = $(this).data('tglLahir');
          var jeniskelamin = $(this).data('jk');
          var alamat = $(this).data('alamat');
          var noTelp = $(this).data('noTelp');
          var id_konsul = $(this).data('idKonsul');
          $("#modal-edit #id_pasien").val($(this).data('id'));
          $("#modal-edit #nama").val(namapasien);
          $("#modal-edit #tgl_lahir input:date").val($(this).data('tglLahir'));
          $("#modal-edit #jk").val(jeniskelamin);
          $("#modal-edit #alamat").val(alamat);
          $("#modal-edit #no_telp").val(noTelp);
          //$("#modal-edit #id_konsultasi").val(id_konsul);
      })
    </script>