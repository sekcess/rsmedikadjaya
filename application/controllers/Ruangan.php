<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ruangan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        $this->load->model('m_ruangan');
        $this->load->model('galery_model', 'galery');
        $this->load->model('pengajuan_track_model', 'pengajuan_track');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }
    
    public function kategori_ruangan($id)
    {
        $kategori = $this->m_home->kategori($id);
        $kategori_ruangan = $this->m_ruangan->kategori_ruangan($id);
        $kategori_ruangan24 = $this->m_ruangan->kategori_ruangan24($id);
        $judul = [
            'title' => 'Layanan',
            'sub_title' => $kategori_ruangan->nama,
            'kategori_ruangans' => $this->m_ruangan->get_all_data_kategori_ruangan(),
            'kategori_ruangans2' => $this->m_ruangan->get_all_data_kategori_ruangan24(),
            'homes' => $this->m_home->get_all_data_kategori(),
            'ruangans' => $this->m_ruangan->get_all_data_ruangan($id),
            'ruangans2' => $this->m_ruangan->get_all_data_ruangan24($id)
        ];

        $data['data'] = $this->db->get('pegawai')->result_array();
        $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/ruangan', $data);
        $this->load->view('frontend/footer');
    }
    
    public function kategori_ruangan24($id)
    {
        $kategori = $this->m_home->kategori($id);
        $kategori_ruangan = $this->m_ruangan->kategori_ruangan($id);
        $kategori_ruangan24 = $this->m_ruangan->kategori_ruangan24($id);
        $judul = [
            'title' => 'Layanan',
            'sub_title' => $kategori_ruangan24->nama,
            'kategori_ruangans' => $this->m_ruangan->get_all_data_kategori_ruangan(),
            'kategori_ruangans2' => $this->m_ruangan->get_all_data_kategori_ruangan24(),
            'homes' => $this->m_home->get_all_data_kategori(),
            'ruangans' => $this->m_ruangan->get_all_data_ruangan($id),
            'ruangans2' => $this->m_ruangan->get_all_data_ruangan24($id)
        ];

        $data['data'] = $this->db->get('pegawai')->result_array();
        $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/ruangan24', $data);
        $this->load->view('frontend/footer');
    }

}
