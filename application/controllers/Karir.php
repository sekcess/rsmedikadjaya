<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('id_user'))) {
            redirect(base_url("auth/block"));
        }
    }

    public function index()
    {

        $judul = [
            'title' => 'Karir',
            'sub_title' => ''
        ];

        $data['data'] = $this->db->get('karir')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('karir/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {

        $data = $this->db->get_where('karir', ['id' => $id])->row_array();

        $this->db->where(['id' => $id]);
        $this->db->delete('karir');
        $this->session->set_flashdata('success', 'Data Karir Berhasil Dihapus!');
        redirect(base_url('karir'));
    }

    public function tambah()
    {

        $this->form_validation->set_rules('posisi', 'Posisi', 'required|trim');
        $this->form_validation->set_rules('deadline', 'Deadline', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Karir',
                'sub_title' => 'Tambah Data Karir'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('karir/tambah');
            $this->load->view('templates/footer');
        } else {
            $posisi =  $this->input->post("posisi", TRUE);
            $deadline =  $this->input->post("deadline", TRUE);

            $save = [
                'posisi' => $posisi,
                'deadline' => $deadline,
            ];

            $this->db->insert('karir', $save);
            $this->session->set_flashdata('success', 'Data Karir Berhasil Ditambahkan!');
            redirect(base_url("karir"));
        }
    }

    public function edit($id)
    {

        $this->form_validation->set_rules('posisi', 'Posisi', 'required|trim');
        $this->form_validation->set_rules('deadline', 'Deadline', 'required|trim');
        
        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Kategori Dokter',
                'sub_title' => 'Edit Data Karir'
            ];

            $data['karir'] = $this->db->get_where('karir', ['id' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('karir/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $posisi =  $this->input->post("posisi", TRUE);
            $deadline =  $this->input->post("deadline", TRUE);

            $update = [
                'posisi' => $posisi,
                'deadline' => $deadline,
            ];

            $this->db->where('id', $id);
            $this->db->update('karir', $update);

            $this->session->set_flashdata('success', 'Data Karir Berhasil Diupdate!');
            redirect(base_url("karir"));
        }
    }
}
