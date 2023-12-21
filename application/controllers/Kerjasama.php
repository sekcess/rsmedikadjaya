<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kerjasama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');
        $this->load->model('m_ruangan');
        $this->load->model('m_home');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }
    
    public function index()
    {

        $judul = [
            'title' => 'Rekan Kerjasama',
            'sub_title' => 'Rekan Kerjasama',
            'kategori_ruangans' => $this->m_ruangan->get_all_data_kategori_ruangan(),
            'kategori_ruangans2' => $this->m_ruangan->get_all_data_kategori_ruangan24(),
            'homes' => $this->m_home->get_all_data_kategori()
        ];
        
        $data['data'] = $this->db->get('kerjasama')->result_array();
        $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/kerjasama', $data);
        $this->load->view('frontend/footer');
    }
    
    public function karir()
    {

        $judul = [
            'title' => 'Rekan Kerjasama',
            'sub_title' => 'Karir',
            'kategori_ruangans' => $this->m_ruangan->get_all_data_kategori_ruangan(),
            'kategori_ruangans2' => $this->m_ruangan->get_all_data_kategori_ruangan24(),
            'homes' => $this->m_home->get_all_data_kategori()
        ];
        
        $data['data'] = $this->db->get('karir')->result_array();
        
        if (count($data['data']) > 0) {
            
        // kirim data karir ke view
        $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/karir', $data);
        $this->load->view('frontend/footer');
        } else {
            
        // kalau gak ada data karir, tampilkan view tidak ada data
        $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/empty_karir', $data);
        $this->load->view('frontend/footer');
        }
        
    }
}
