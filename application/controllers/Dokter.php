<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        $this->load->model('m_kategori_spesialis');
        $this->load->model('m_ruangan');
    }
    
    public function kategori($id)
    {
        $kategori = $this->m_home->kategori($id);
        $judul = [
            'title' => 'Dokter',
            'sub_title' => $kategori->nama,
            'kategoris' => $this->m_kategori_spesialis->get_all_data_kategori_spesialis(),
            'kategori_ruangans' => $this->m_ruangan->get_all_data_kategori_ruangan(),
            'kategori_ruangans2' => $this->m_ruangan->get_all_data_kategori_ruangan24(),
            'homes' => $this->m_home->get_all_data_kategori(),
            'dokters' => $this->m_home->get_all_data_dokter($id),
        ];

        $data['data'] = $this->db->get('pegawai')->result_array();
        $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/dokter', $data);
        $this->load->view('frontend/footer');
    }
    
    public function jadwal_dokter()
    {

        $judul = [
            'title' => 'Dokter',
            'sub_title' => 'Jadwal Dokter',
            'kategoris' => $this->m_kategori_spesialis->get_all_data_kategori_spesialis(),
            'kategori_ruangans' => $this->m_ruangan->get_all_data_kategori_ruangan(),
            'kategori_ruangans2' => $this->m_ruangan->get_all_data_kategori_ruangan24(),
            'homes' => $this->m_home->get_all_data_kategori(),

        ];

        $data['data'] = $this->db->get('pegawai')->result_array();
        $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/jadwal_dokter', $data);
        $this->load->view('frontend/footer');
    }
    
    public function dokter($id_spesialis)
    {
        $kategori_spesialis = $this->m_kategori_spesialis->kategori_spesialis($id_spesialis);
        $judul = [
            'title' => 'Dokter',
            'sub_title' => $kategori_spesialis->nama_spesialis,
            'kategori_ruangans' => $this->m_ruangan->get_all_data_kategori_ruangan(),
            'kategori_ruangans2' => $this->m_ruangan->get_all_data_kategori_ruangan24(),
            'homes' => $this->m_home->get_all_data_kategori(),
            'kategoris' => $this->m_kategori_spesialis->get_all_data_spesialis($id_spesialis),
        ];
        
        $data['data'] = $this->db->get('pegawai')->result_array();
        $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/jadwal_dokter2', $data);
        $this->load->view('frontend/footer');
    }
}
