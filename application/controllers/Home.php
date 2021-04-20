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
        redirect(base_url('home'));
    }

    function hapus($id){
        $where = array('id' => $id);
        $this->m_login->hapus_data($where,'konsultasi');
        $this->m_login->hapus_data($where,'riwayat_pasien');
        $this->m_login->hapus_data($where,'pasien');
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
}