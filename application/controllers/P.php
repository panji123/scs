<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class P extends CI_Controller {

    public function __construct($inputan = NULL) {
        parent::__construct();
        $this->load->model('p_model');
        $this->load->helper('url_helper');
        //$this->
        $this->load->database();
    }

    public function index($input = NULL) {
        //$this->load->view('index.htm');
        $this->load->model('p_model');
        $data['daftar_halaman'] = $this->p_model->daftarHalaman();
        $data['inputan'] = $input;


        $this->load->view('p/header.php', $data);
        $this->load->view('p/layanan.php', $data);
        $this->load->view('p/footer.php');
    }

    public function layanan($input = NULL) {
        //$data = ['inputannya' => $input];
        $data['inputan'] = $input;

        $this->load->view('p/header.php');
        $this->load->view('p/layanan.php', $data);
        $this->load->view('p/footer.php');
    }

}
