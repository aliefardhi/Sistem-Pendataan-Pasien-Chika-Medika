<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller{

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('login/login');
        $this->load->view('templates/footer');
    }

}