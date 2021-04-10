<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	
	// fungsi untuk tampil data
	function tampil_data(){
		$data = $this->db->query("select pasien.id_pasien,nama_pasien,tgl_lahir,alamat,no_telp,tanggal from pasien inner join riwayat_pasien on pasien.id_pasien = riwayat_pasien.id_pasien inner join konsultasi on pasien.id_pasien = konsultasi.id_pasien");
		return $data->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

}