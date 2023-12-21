<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_spesialis_model');

        if (empty($this->session->userdata('id_user'))) {
            redirect(base_url("auth/block"));
        }
    }

    public function kategori_dokter()
    {

        $judul = [
            'title' => 'Kategori',
            'sub_title' => 'Kategori Dokter'
        ];

        $data['data'] = $this->db->get('kategori')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('kategori/kategori_dokter', $data);
        $this->load->view('templates/footer');
    }

    public function hapus_kategori_dokter($id)
    {

        $data = $this->db->get_where('kategori', ['id' => $id])->row_array();

        $this->db->where(['id' => $id]);
        $this->db->delete('kategori');
        $this->session->set_flashdata('success', 'Data Kategori Dokter Berhasil Dihapus!');
        redirect(base_url('kategori/kategori_dokter'));
    }

    public function tambah_kategori_dokter()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Kategori',
                'sub_title' => 'Kategori Dokter'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('kategori/tambah_kategori_dokter');
            $this->load->view('templates/footer');
        } else {
            $nama =  $this->input->post("nama", TRUE);

            $save = [
                'nama' => $nama,
            ];

            $this->db->insert('kategori', $save);
            $this->session->set_flashdata('success', 'Data Kategori Dokter Berhasil Ditambahkan!');
            redirect(base_url("kategori/kategori_dokter"));
        }
    }

    public function edit_kategori_dokter($id)
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Kategori',
                'sub_title' => 'Kategori Dokter'
            ];

            $data['kategori'] = $this->db->get_where('kategori', ['id' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('kategori/edit_kategori_dokter', $data);
            $this->load->view('templates/footer');
        } else {

            $nama =  $this->input->post("nama", TRUE);

            $update = [
                'nama' => $nama,
            ];

            $this->db->where('id', $id);
            $this->db->update('kategori', $update);

            $this->session->set_flashdata('success', 'Data Kategori Dokter Berhasil Diupdate!');
            redirect(base_url("kategori/kategori_dokter"));
        }
    }
    
     public function kategori_spesialis()
    {

        $judul = [
            'title' => 'Kategori',
            'sub_title' => 'Kategori Spesialis'
        ];

        $data['data'] = $this->db->get('kategori_spesialis')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('kategori/kategori_spesialis', $data);
        $this->load->view('templates/footer');
    }

    public function hapus_kategori_spesialis($id_spesialis)
    {

        $data = $this->db->get_where('kategori_spesialis', ['id_spesialis' => $id_spesialis])->row_array();
        unlink("uploads/spesialis/" . $data['logo']);

        $this->db->where(['id_spesialis' => $id_spesialis]);
        $this->db->delete('kategori_spesialis');
        $this->session->set_flashdata('success', 'Data Kategori Spesialis Berhasil Dihapus!');
        redirect(base_url('kategori/kategori_spesialis'));
    }

    public function tambah_kategori_spesialis()
    {

        $this->form_validation->set_rules('nama_spesialis', 'Nama Spesialis', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Kategori',
                'sub_title' => 'Kategori Spesialis'
            ];

            $this->load->view('templates/header', $judul);
            $this->load->view('kategori/tambah_kategori_spesialis');
            $this->load->view('templates/footer');
        } else {
            $nama_spesialis =  $this->input->post("nama_spesialis", TRUE);

            $config['upload_path']          = './uploads/spesialis';
            $config['allowed_types']        = 'png|jpg|jpeg|PNG|JPG|JPEG';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {
                
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
                    'nama_spesialis' => $nama_spesialis,
                    'logo' => $resized_img,

                ];

                $this->db->insert('kategori_spesialis', $save);
                $this->session->set_flashdata('success', 'Data Kategori Spesialis Berhasil Ditambahkan!');
                redirect(base_url("kategori/kategori_spesialis"));
            } else {
                $this->session->set_flashdata('danger', 'Data Kategori Spesialis Belum Ditambahkan!');
                redirect(base_url("kategori/tambah_kategori_spesialis"));
            }
        }
    }

    public function edit_kategori_spesialis($id_spesialis)
    {

        $this->form_validation->set_rules('nama_spesialis', 'Nama Spesialis', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Kategori',
                'sub_title' => 'Kategori Spesialis'
            ];

            $data['kategori_spesialis'] = $this->db->get_where('kategori_spesialis', ['id_spesialis' => $id_spesialis])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('kategori/edit_kategori_spesialis', $data);
            $this->load->view('templates/footer');
        } else {
            // $data = $this->db->get_where('pegawai', ['id_pegawai' => $id])->row_array();
            // unlink("./uploads/foto/" . $data['foto']);

            $nama_spesialis =  $this->input->post("nama_spesialis", TRUE);

            $config['upload_path']          = './uploads/spesialis';
            $config['allowed_types']        = 'png|jpg|jpeg|PNG|JPG|JPEG';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {
                $data = $this->db->get_where('kategori_spesialis', ['id_spesialis' => $id_spesialis])->row_array();

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
                
                unlink("uploads/spesialis/" . $data['logo']);

                $update = [
                    'nama_spesialis' => $nama_spesialis,
                    'logo' => $resized_img,
                ];

                $this->db->where('id_spesialis', $id_spesialis);
                $this->db->update('kategori_spesialis', $update);

                $this->session->set_flashdata('success', 'Berhasil Diupdate!');
                redirect(base_url("kategori/kategori_spesialis"));
            } else {
                
                $update = [
                    'nama_spesialis' => $nama_spesialis,

                ];

                $this->db->where('id_spesialis', $id_spesialis);
                $this->db->update('kategori_spesialis', $update);

                $this->session->set_flashdata('success', 'Berhasil Diupdate!');
                redirect(base_url("kategori/kategori_spesialis"));
            }
        }
    }
}
