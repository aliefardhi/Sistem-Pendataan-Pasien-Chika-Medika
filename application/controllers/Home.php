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
        
        $nama = $this->input->post('nama');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $tgl_konsultasi = date('Y-m-d H:i:s');
        $anamnese = $this->input->post('anamnese');
        $nomenklatur = $this->input->post('nomenklatur');
        $resep = $this->input->post('resep');
        $keterangan = $this->input->post('keterangan');
        $diagnosa = $this->input->post('diagnosa');
        $tindakan = $this->input->post('tindakan');

        $countPasien = 1;
        $query = $this->db->query("select id_pasien from pasien");
        foreach($query->result() as $row){
            $countPasien++;
            if($countPasien == $row->id_pasien){
                $countPasien+=1;
            }
        }
        $dataPasien = array(
            'id_pasien' => $countPasien,
            'nama_pasien' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'jk' => $jk,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
        );
        $dataKonsultasi = array(
            'tanggal' => $tgl_konsultasi,
            'anamnese' => $anamnese,
            'nomenklatur' => $nomenklatur,
            'tindakan' => $tindakan,
            'resep' => $resep,
            'keterangan' => $keterangan,
            'visit' => 1,
            'id_pasien' => $countPasien,
        );
        $dataDiagnosa = array(
            'diagnosa' => $diagnosa,
            'id_pasien' => $countPasien,
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
    
    public function ubah($id_pasien,$visit){
        $data['pasien'] = $this->m_login->getPasienId($id_pasien);
        $data['konsultasi'] = $this->m_login->getKonsul($id_pasien);
        $data['riwayat_pasien'] = $this->m_login->getRiwayat($id_pasien);
        $data['konsultasi'] = $this->m_login->getVisit($id_pasien,$visit);
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
        $visit = $this->input->post('visit');

        $dataPasien = array(
            'id_pasien' => $idPasien,
            'nama_pasien' => $namaPasien,
            'tgl_lahir' => $tglLahir,
            'jk' => $jenisKelamin,
            'alamat' => $alamatPasien,
            'no_telp' => $noTelp
        );

        $anamnesePasien = $this->input->post('anamnese');
        $nomenklaturPasien = $this->input->post('nomenklatur');
        $tindakanPasien = $this->input->post('tindakan');
        $resepPasien = $this->input->post('resep');
        $keteranganPasien = $this->input->post('keterangan');

        $dataKonsultasi = array(
            'anamnese' => $anamnesePasien,
            'nomenklatur' => $nomenklaturPasien,
            'tindakan' => $tindakanPasien,
            'resep' => $resepPasien,
            'keterangan' => $keteranganPasien
        );  
        $diagnosaPasien = $this->input->post('diagnosa');

        $dataDiagnosa = array(
            'diagnosa' => $diagnosaPasien
        );
        
        $where = array(
            'id_pasien' => $idPasien,
        );

        $whereKonsultasi = array(
            'id_pasien' => $idPasien,
            'visit' => $visit
        );

        $this->load->library('user_agent');

        $this->m_login->ubah_data($where,$dataPasien,'pasien');
        $this->m_login->ubah_data($whereKonsultasi,$dataKonsultasi,'konsultasi');
        $this->m_login->ubah_data($where,$dataDiagnosa,'riwayat_pasien');
        $this->session->set_flashdata('flash','Diubah');    
        redirect('home/detail/'.$idPasien);
    }
    
    public function visit($id_pasien){
        $data['pasien'] = $this->m_login->getPasienId($id_pasien);
        $data['konsultasi'] = $this->m_login->getKonsul($id_pasien);
        $data['riwayat_pasien'] = $this->m_login->getRiwayat($id_pasien);

        $this->load->view('templates/header');
        $this->load->view('home/visit', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_visit($id_pasien){
        $tgl_konsultasi = date('Y-m-d H:i:s');
        $anamnesePasien = $this->input->post('anamnese');
        $nomenklaturPasien = $this->input->post('nomenklatur');
        $tindakanPasien = $this->input->post('tindakan');
        $resepPasien = $this->input->post('resep');
        $keteranganPasien = $this->input->post('keterangan');
        $diagnosaPasien = $this->input->post('diagnosa');

        //Count visit
        $count = 1;
        $query = $this->db->query("select visit from konsultasi where id_pasien=$id_pasien");
        foreach($query->result() as $row){
            $count++;
        }

        $dataKonsultasi = array(
            'tanggal' => $tgl_konsultasi,
            'anamnese' => $anamnesePasien,
            'nomenklatur' => $nomenklaturPasien,
            'tindakan' => $tindakanPasien,
            'resep' => $resepPasien,
            'keterangan' => $keteranganPasien,
            'visit' => $count,
            'id_pasien' => $id_pasien,
        );

        $dataDiagnosa = array(
            'diagnosa' => $diagnosaPasien,
            'id_pasien' => $id_pasien,
        );

        $this->m_login->input_data($dataKonsultasi,'konsultasi');
        $this->m_login->input_data($dataDiagnosa, 'riwayat_pasien');
        redirect('home');
    }

}