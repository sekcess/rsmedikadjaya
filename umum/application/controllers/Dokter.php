<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function index()
    {

        $judul = [
            'title' => 'Daftar Dokter',
            'sub_title' => ''
        ];

        $data['data'] = $this->db->get('pegawai')->result_array();
        $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/dokter', $data);
        $this->load->view('frontend/footer');
    }
}
