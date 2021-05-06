<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    
    public function index(){
        $data['pasien'] = $this->m_login->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->helper('url');

        if($this->session->userdata('status'!="login")){
            redirect(base_url("login"));
        }

        $this->load->helper("url");
        $this->load->model('m_login');
    }

    function tambah(){
        $this->load->view('home/index');
    }
    
    function tambah_aksi(){
        $id_pasien = $this->input->post('id_pasien');
        $nama = $this->input->post('nama');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $id_konsultasi = $this->input->post('id_konsultasi');
        $tgl_konsultasi = $this->input->post('tgl_konsultasi');
        $anamnese = $this->input->post('anamnese');
        $nomenklatur = $this->input->post('nomenklatur');
        $resep = $this->input->post('resep');
        $keterangan = $this->input->post('keterangan');
        $id_diagnosa = $this->input->post('id_diagnosa');
        $diagnosa = $this->input->post('diagnosa');
        $tindakan = $this->input->post('tindakan');

        $dataPasien = array(
            'id_pasien' => $id_pasien,
            'nama_pasien' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'jk' => $jk,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
        );
        $dataKonsultasi = array(
            'id_konsultasi' => $id_konsultasi,
            'tanggal' => $tgl_konsultasi,
            'anamnese' => $anamnese,
            'nomenklatur' => $nomenklatur,
            'tindakan' => $tindakan,
            'resep' => $resep,
            'keterangan' => $keterangan,
            'visit' => 1,
            'id_pasien' => $id_pasien,
        );
        $dataDiagnosa = array(
            'id_diagnosa' => $id_diagnosa,
            'diagnosa' => $diagnosa,
            'id_pasien' => $id_pasien,
        );
        $this->m_login->input_data($dataPasien,'pasien');
        $this->m_login->input_data($dataKonsultasi,'konsultasi');
        $this->m_login->input_data($dataDiagnosa,'riwayat_pasien');
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect(base_url('home'));
    }

    function hapus($id_pasien){
        $where = array('id_pasien' => $id_pasien);
        $this->m_login->hapus_data($where,'konsultasi');
        $this->m_login->hapus_data($where,'riwayat_pasien');
        $this->m_login->hapus_data($where,'pasien');
        $this->session->set_flashdata('flash','Dihapus');
        redirect('home');
    }

    public function detail($id_pasien){
        $data['pasien'] = $this->m_login->getPasienId($id_pasien);
        $data['konsultasi'] = $this->m_login->getKonsul($id_pasien);
        $data['riwayat_pasien'] = $this->m_login->getRiwayat($id_pasien);

        $this->load->view('templates/header');
        $this->load->view('home/detail', $data);
        $this->load->view('templates/footer');
    }
    
    public function ubah($id_pasien){
        $data['pasien'] = $this->m_login->getPasienId($id_pasien);
        $data['konsultasi'] = $this->m_login->getKonsul($id_pasien);
        $data['riwayat_pasien'] = $this->m_login->getRiwayat($id_pasien);
        $data['jk'] = ['L','P'];
        
        $this->load->view('templates/header');
        $this->load->view('home/ubah', $data);
        $this->load->view('templates/footer');
    }

    public function aksi_ubah(){
        $idPasien = $this->input->post('id_pasien');
        $namaPasien = $this->input->post('nama');
        $tglLahir = $this->input->post('tgl_lahir');
        $jenisKelamin = $this->input->post('jk');
        $alamatPasien = $this->input->post('alamat');
        $noTelp = $this->input->post('no_telp');

        $dataPasien = array(
            'id_pasien' => $idPasien,
            'nama_pasien' => $namaPasien,
            'tgl_lahir' => $tglLahir,
            'jk' => $jenisKelamin,
            'alamat' => $alamatPasien,
            'no_telp' => $noTelp
        );

        $idKonsultasi = $this->input->post('id_konsultasi');
        $tglKonsultasi = $this->input->post('tgl_konsultasi');
        $anamnesePasien = $this->input->post('anamnese');
        $nomenklaturPasien = $this->input->post('nomenklatur');
        $tindakanPasien = $this->input->post('tindakan');
        $resepPasien = $this->input->post('resep');
        $keteranganPasien = $this->input->post('keterangan');

        $dataKonsultasi = array(
            'id_konsultasi' => $idKonsultasi,
            'tanggal' => $tglKonsultasi,
            'anamnese' => $anamnesePasien,
            'nomenklatur' => $nomenklaturPasien,
            'tindakan' => $tindakanPasien,
            'resep' => $resepPasien,
            'keterangan' => $keteranganPasien
        );  

        $idDiagnosa = $this->input->post('id_diagnosa');
        $diagnosaPasien = $this->input->post('diagnosa');

        $dataDiagnosa = array(
            'id_diagnosa' => $idDiagnosa,
            'diagnosa' => $diagnosaPasien
        );
        
        $where = array(
            'id_pasien' => $idPasien 
        );

        $this->load->library('user_agent');

        $this->m_login->ubah_data($where,$dataPasien,'pasien');
        $this->m_login->ubah_data($where,$dataKonsultasi,'konsultasi');
        $this->m_login->ubah_data($where,$dataDiagnosa,'riwayat_pasien');
        $this->session->set_flashdata('flash','Diubah');
        redirect('home/detail/'.$idPasien);
    }
    
}