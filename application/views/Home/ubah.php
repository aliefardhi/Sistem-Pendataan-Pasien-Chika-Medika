<body>
    
    <!-- Header
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
    <!-- Akhir Header -->

    <div class="container">
        <div class="row mt-3 mx-auto">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h2 class="card-title text-center" style="color: #833761 ;">Edit Data Pasien</h2>
                        
                        </div>

                        <form action="<?php echo base_url(). 'home/aksi_ubah'; ?>" method="POST">
                            <div class="form-group">
                                <label for="id_pasien"> <strong>ID Pasien</strong></label>
                                <input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?= $pasien['id_pasien']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama"> <strong>Nama Lengkap Pasien</strong></label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $pasien['nama_pasien']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="tgl_lahir"><strong>Tanggal Lahir</strong></label>
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $pasien['tgl_lahir']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="jk"><strong>Jenis Kelamin</strong></label>
                                <select class="form-control" id="jk" name="jk" >
                                    <?php foreach($jk as $gender): ?>
                                    <?php if( $gender == $pasien['jk']) : ?>
                                        <option value="<?= $gender; ?>" selected><?= $gender; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $gender; ?>"><?= $gender; ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="alamat"><strong>Alamat</strong></label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $pasien['alamat'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="no_telp"> <strong>Nomor Telephone</strong></label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $pasien['no_telp']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="id_konsultasi"> <strong>ID Konsultasi</strong></label>
                                <input type="text" class="form-control" id="id_konsultasi" name="id_konsultasi" value="<?= $konsultasi['id_konsultasi']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="tgl_konsultasi"> <strong>Tanggal Konsultasi</strong></label>
                                <input type="date" class="form-control" id="tgl_konsultasi" name="tgl_konsultasi" value="<?= $konsultasi['tanggal']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="anamnese"><strong>Anamnese</strong></label>
                                <textarea class="form-control" id="anamnese" name="anamnese" rows="3"><?= $konsultasi['anamnese']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="nomenklatur"><strong>Nomenklatur</strong></label>
                                <textarea class="form-control" id="nomenklatur" name="nomenklatur" rows="3"><?= $konsultasi['nomenklatur']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="id_diagnosa"> <strong>ID Diagnosa</strong></label>
                                <input type="text" class="form-control" id="id_diagnosa" name="id_diagnosa" value="<?= $riwayat_pasien['id_diagnosa']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="diagnosa"><strong>Diagnosa</strong></label>
                                <textarea class="form-control" id="diagnosa" name="diagnosa" rows="3"><?= $riwayat_pasien['diagnosa']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="tindakan"><strong>Tindakan</strong></label>
                                <textarea class="form-control" id="tindakan" name="tindakan" rows="3"><?= $konsultasi['tindakan']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="resep"><strong>Resep</strong></label>
                                <textarea class="form-control" id="resep" name="resep" rows="3"><?= $konsultasi['resep']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="keterangan"><strong>Keterangan</strong></label>
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="3"><?= $konsultasi['keterangan']; ?></textarea>
                            </div>

                            <button onclick="window.history.back();" type="button" class="btn btn-secondary">Kembali</button>
                            
                            <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>