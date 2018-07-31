<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    function index() {
        $data["dir_level"] = "";
        $this->load->view('edit/header.php', $data);
    }

    function halaman() {
        //$data = ["s",]
        $data["dir_level"] = "../";
        $this->load->view('edit/header.php', $data);
        $this->load->view('edit/halaman/list.php');
        $this->load->view('edit/footer.php');
    }

    function artikel() {
        $data["dir_level"] = "../";
        $this->load->view('edit/header.php', $data);
        $this->load->view('edit/artikel.php');
    }

    function layanan() {

        $this->load->view('edit/header.php');
        $this->load->view('edit/layanan.php');
        $this->load->view('edit/footer.php');
    }

}
