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
                        
                        <a href="<?= base_url(); ?>home/visit/<?= $pasien['id_pasien']; ?>" class="btn btn-primary btn-ungu btn-sm mb-3">
                          Tambah Visit
                        </a>

                        <a href="<?= base_url(); ?>home/ubah/<?= $pasien['id_pasien']; ?>" class="btn btn-primary btn-ungu float-right btn-sm mb-3">
                          Edit Data Pasien
                        </a>

                        <div class="table-responsive">
                            
                            <table class="table">
                                <tbody>
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
                                </tbody>

                            </table>
                        </div>
                        <a href="<?= base_url(); ?>home" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h3 class="mb-3 text-center" style="color: #833761 ;">DATA KONSULTASI</h3>
            <table class="display table table-striped table-borderless" id="tabelInfo">
            <thead style="background-color: #833761 !important; color: #fff;" >
                <tr>
                <th>No.</th>
                <th>Tanggal Kunjungan</th>
                <th>Anamnese</th>
                <th>Nomenklatur</th>
                <th>Diagnosa</th>
                <th>Tindakan</th>
                <th>Resep</th>
                <th>Keterangan</th>
                <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                $query = $this->db->query("SELECT distinct * FROM konsultasi WHERE id_pasien=$pasien[id_pasien]");
                foreach($query->result() as $row){ ?>
                <tr>
                    <td><?=$row->visit?></td>
                    <td><?=$row->tanggal?></td>
                    <td><?=$row->anamnese?></td>
                    <td><?=$row->nomenklatur?></td>
                    <td><?=$row->diagnosa?></td>
                    <td><?=$row->tindakan?></td>
                    <td><?=$row->resep?></td>
                    <td><?=$row->keterangan?></td>
                    <td class="text-center">

                    <a href="<?= base_url(); ?>home/ubahVisit/<?= $row->id_pasien ?>/<?= $row->visit; ?>" id="set_dtl" class="btn btn-primary btn-sm" >
                    Edit
                  </a>
        
                    <!-- <input type="hidden" name="<?php echo base_url('home/hapus/'.$ps->id_pasien); ?>" value="<?=$ps->id_pasien?>"> -->
                    <a href="<?php echo base_url('home/hapus/'.$pasien['id_pasien']); ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-sm">
                        Delete
                    </a>
                    
                    
                    </td>
                </tr>
                <?php } ?>
            </tbody>

            </table>

    </div>