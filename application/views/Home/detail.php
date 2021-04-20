<link rel="stylesheet" href="<?= base_url('asset/');?>style.css">
<body>

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

<div class="container">   

    <div class="row mt-3 mx-auto">
        <div class="col-md-7 mx-auto">
        
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #833761 ;"><?= $pasien['nama_pasien']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">ID Pasien: <?= $pasien['id_pasien']; ?></h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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