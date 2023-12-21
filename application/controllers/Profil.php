<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');
        $this->load->model('m_home');
        $this->load->model('m_ruangan');
        $this->load->model('pengajuan_track_model', 'pengajuan_track');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');

    }

    public function index()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Profil',
            'sub_title' => 'Tentang Kami',
            'kategori_ruangans' => $this->m_ruangan->get_all_data_kategori_ruangan(),
            'kategori_ruangans2' => $this->m_ruangan->get_all_data_kategori_ruangan24(),
            'homes' => $this->m_home->get_all_data_kategori()
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/profil', $data);
        $this->load->view('frontend/footer2', $data);
    }
}
