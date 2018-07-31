<?php

class P_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function daftarHalaman() {
        $query = $this->db->get('halaman');
        //$query = $this->db->where('judul', $_POST["judul"]);
        return $query->result();
    }

    public function kontenHalaman() {
        $query = $this->db->where('judul', $_POST["judul"]);
        return $query->result;
    }

}
