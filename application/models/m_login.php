<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	
	// fungsi untuk tampil data
	function tampil_data(){
		$data = $this->db->query("select id_pasien nama_pasien,umur,tanggal,riwayat,keluhan,resep from pasien inner join riwayat_pasien on pasien.id_pasien = riwayat_pasien.id_pasien inner join konsultasi on pasien.id_pasien = konsultasi.id_pasien");
		return $data->result();
	}
}