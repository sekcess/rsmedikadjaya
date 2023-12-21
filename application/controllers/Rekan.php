<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('rekan_model');

        if (empty($this->session->userdata('id_user'))) {
            redirect(base_url("auth/block"));
        }
    }

    public function index()
    {

        $judul = [
            'title' => 'Rekan Kerjasama',
            'sub_title' => 'Rekan Kerjasama',
            'rekans' => $this->rekan_model->get()
        ];
        
        $data['data'] = $this->db->get('kerjasama')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('kerjasama/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {

        $data = $this->db->get_where('kerjasama', ['id' => $id])->row_array();

        unlink("uploads/rekan_kerjasama/" . $data['foto']);

        $this->db->where(['id' => $id]);
        $this->db->delete('kerjasama');
        $this->session->set_flashdata('success', 'Berhasil Dihapus!');
        redirect(base_url('rekan'));
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Rekan Kerjasama',
                'sub_title' => 'Tambah Rekan Kerjasama'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('kerjasama/tambah');
            $this->load->view('templates/footer');
        } else {
            $nama =  $this->input->post("nama", TRUE);

            $config['upload_path']          = './uploads/rekan_kerjasama';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                
                $this->load->library('image_lib');
                $image_data = $this->upload->data();
                $resized_img = $image_data['file_name'];
                $configer = array(
                                'image_library' => 'gd2',
                                'source_image' => $image_data['full_path'],
                                'maintain_ratio' => True,
                                'width' => 400,
                                'height' => 500,
                                'master_dim' => 'width',
                                'quality' => '20%',
                                'new_image' => $resized_img
                );

                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();

                $save = [
                    'nama' => $nama,
                    'foto' => $resized_img,

                ];

                $this->db->insert('kerjasama', $save);
                $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
                redirect(base_url("rekan"));
            } else {
                $this->session->set_flashdata('danger', 'Data belum ditambahkan!');
                redirect(base_url("rekan/tambah"));
            }
        }
    }

    public function edit($id)
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Rekan Kerjasama',
                'sub_title' => 'Edit Rekan Kerjasama',
                'rekans' => $this->rekan_model->get()
            ];

            $data['kerjasama'] = $this->db->get_where('kerjasama', ['id' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('kerjasama/edit', $data);
            $this->load->view('templates/footer');
        } else {
            // $data = $this->db->get_where('pegawai', ['id_pegawai' => $id])->row_array();
            // unlink("./uploads/foto/" . $data['foto']);

            $nama =  $this->input->post("nama", TRUE);

            $config['upload_path']          = './uploads/rekan_kerjasama';
            $config['allowed_types']        = 'png|jpg|jpeg';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $data = $this->db->get_where('kerjasama', ['id' => $id])->row_array();

                $this->load->library('image_lib');
                $image_data = $this->upload->data();
                $resized_img = $image_data['file_name'];
                $configer = array(
                                'image_library' => 'gd2',
                                'source_image' => $image_data['full_path'],
                                'maintain_ratio' => True,
                                'width' => 400,
                                'height' => 500,
                                'master_dim' => 'width',
                                'quality' => '20%',
                                'new_image' => $resized_img
                );

                $this->image_lib->clear();
                $this->image_lib->initialize($configer);
                $this->image_lib->resize();
                
                unlink("uploads/rekan_kerjasama/" . $data['foto']);

                $update = [
                    'nama' => $nama,
                    'foto' => $resized_img,
                ];

                $this->db->where('id', $id);
                $this->db->update('kerjasama', $update);

                $this->session->set_flashdata('success', 'Berhasil Diupdate!');
                redirect(base_url("rekan"));
            } else {
                
                $update = [
                    'nama' => $nama,

                ];

                $this->db->where('id', $id);
                $this->db->update('kerjasama', $update);

                $this->session->set_flashdata('success', 'Berhasil Diupdate!');
                redirect(base_url("rekan"));
            }
        }
    }
}
