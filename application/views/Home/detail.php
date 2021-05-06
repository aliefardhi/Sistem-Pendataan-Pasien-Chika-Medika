<body>
    <nav class="navbar navbar-dark bg-dark" style="background-image: url('/chikamedika/asset/bg.png');">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url(); ?>asset/logo.png" alt="logo" width="125" height="125" class="d-inline-block align-text-top">
            </a>
            
            <a class="navbar-brand" href="<?php echo base_url('landing/logout');?>" onclick="return confirm('Anda yakin ingin logout?');" >
                <img src="<?= base_url(); ?>asset/icons/export.png" alt="logo" width="40" height="40" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav> 

    <div class="container">   

        <div class="row mt-3 mb-3 mx-auto">
            <div class="col-md-7 mx-auto">

            <?php if($this->session->flashdata('flash')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Pasien <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php endif; ?>
            
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center" style="color: #833761 ;"><?= $pasien['nama_pasien']; ?></h3>
                        <h5 class="card-subtitle mb-2 text-muted">ID Pasien: <?= $pasien['id_pasien']; ?></h5>
                        
                        <a href="<?= base_url(); ?>home/ubah/<?= $pasien['id_pasien']; ?>" class="btn btn-primary btn-ungu float-right btn-sm mb-3">
                          Edit Data Pasien
                        </a>

                        <div class="table-responsive">
                            
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Visit ke-</th>
                                        <td>
                                            <form action="<?= base_url(); ?>home/visit_counter" method="POST">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1"></label>
                                                    <select class="form-control-sm" id="exampleFormControlSelect1">
                                                        <?php
                                                            $query = $this->db->query("select visit from konsultasi where id_pasien=$pasien[id_pasien]");
                                                            foreach($query->result() as $row){
                                                                ?> <option> <?= $row->visit; ?> </option>
                                                            <?php
                                                            }
                                                        ?>
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
                                        <th>Jenis Kelamin</th>
                                        <td><?= $pasien['jk']; ?></td>
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